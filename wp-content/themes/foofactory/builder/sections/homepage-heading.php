<section class="homepage-heading owl-carousel" >
   
    <?php
      foreach ($vars['element'] as $key => $value) { ?>
      <?php //debug($vars); ?>
     <div class="slide" style="background-image: url('<?php echo $value['background'] ?>');">
       <?php  get_component([ 'template' => 'elements/card',
                         'vars' => [
                               "class" => 'container card',
                               "title" => $value['title'],
                               "subtitle" => $value["subtitle"],
                                "image" => $value["image"],
                               "content" => apply_filters('the_content',  $value["content"]),
                               "button" => $value['button']
                               ]
                          ]);?>
      </div>
      <?php }
    ?>

</section>
