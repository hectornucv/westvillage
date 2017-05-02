  <div class="owl-carousel element slider">
  <?php 
    // debug($vars);

      foreach ($vars['slider'] as $key => $slide) {
        get_component([
          'template' => 'parts/slide',
          'vars' => [
                'class' => 'item active text-center',
                'title' => $slide['title'],
                'content' => $slide['content'],
                'img' => $slide['image'],

                ]
              ]);
      }
      
  
    ?>
  </div>