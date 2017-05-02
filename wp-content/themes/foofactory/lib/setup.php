<?php
/**
 * Neat functions and definitions
 * @package Neat
 */
if ( ! function_exists( 'neat_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function neat_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/* * Let WordPress manage the document title.*/
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );
		@ini_set( 'upload_max_size' , '64M' );
		@ini_set( 'post_max_size', '64M' );
		@ini_set( 'max_execution_time', '300' );
	}
}
add_action( 'after_setup_theme', 'neat_setup' );
/**
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 * @since  1.0.0
 */

    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
			// wp_enqueue_style( 'theme-css', get_template_directory_uri().'/dist/bundle.css');
		  // wp_enqueue_script('bundlejs', get_template_directory_uri() . '/dist/bundle.js');

    }

add_action( 'wp_enqueue_scripts', 'theme_enqueue_comments_reply' );
function theme_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');