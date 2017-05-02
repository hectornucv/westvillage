<head>
<meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:site" content="<?php echo get_permalink(); ?>">
 <meta name="twitter:title"  content="<?php the_title(); ?> - <?php echo get_bloginfo('name') ?>" >
 <meta name="twitter:text:description" content="<?php echo get_bloginfo('description') ?>">
 <meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/social-card.png">
 <meta property="og:url"                content="<?php echo get_permalink(); ?>" />
 <meta property="og:image"              content="<?php echo get_stylesheet_directory_uri(); ?>/social-card.png" />
 <meta property="og:type"               content="article" />
 <meta property="og:title"              content="<?php the_title(); ?> - <?php echo get_bloginfo('name') ?>" />
 <meta property="og:description"       content="<?php echo get_bloginfo('description') ?>" />
 	<meta name="pingdom-string" value="<?php echo get_field('pingdom_string','option'); ?>">
 <meta name="google-site-verification" content="<?php echo get_field('google_webmaster','option'); ?>" />
<style>/* body { opacity:0; }  */</style>
 <?php wp_head(); ?>
 <?php echo get_field('bugherd','option'); ?>
 <?php echo get_field('google_analytics','option'); ?>
</head>
