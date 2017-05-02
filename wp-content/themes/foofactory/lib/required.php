<?php
$custom_includes = [
  /* Utilitys */
  'builder/index.php',    // Scripts and stylesheets
  'lib/nav-walker.php',    // Scripts and stylesheets
  'lib/acf-option-page.php', //ACF Option Page
  'lib/acf-map.php', //ACF Option Page


  // 'lib/gravity_forms-v5.php',
  'lib/plugins/custom_post_type_class.php',    // Create Custom Post Types
  'lib/post-types.php',    // Create Custom Post Types

  /* Functions */
  'lib/function-debug.php',    // Scripts and stylesheets
  'lib/function-get_id_from_slug.php',    // Scripts and stylesheets
  'lib/function-truncate_content.php',    // Scripts and stylesheets
  'lib/function-get_id_from_slug.php',    // Scripts and stylesheets
  'lib/function-getYoutubeId.php',    // Scripts and stylesheets
  
  


];

function includeRequired($custom_includes){
 foreach ($custom_includes as $file) {
  try {
    require_once(locate_template($file));
    // throw new Exception('File Not Found');
  } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

};
includeRequired($custom_includes);

?>
