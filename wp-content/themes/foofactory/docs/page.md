# Page

The core wordpress functions `wp_head` and `wp_footer` have trouble working inside `get_component`. Below is the default page.php file. It calls head,header,builder and footer.

The builder is where foofactory calls the files from `Crate`. This can be removed if you don't want to use the builder.

```
<?php wp_head(); ?>
<?php get_component([ 'template' => 'needed/head' ]); ?>
</head>
<?php get_component([ 'template' => 'needed/header' ]); ?>
<?php
	get_component([ 'template' => 'builder' ]); 
 ?>
<?php
	get_component([ 'template' => 'needed/footer' ]);
    wp_footer();
?>
```