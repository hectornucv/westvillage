<div class="<?php echo $vars['class'].' '.$vars['points'] ?> molecule object-list ">
 <?php
        foreach ($vars['object_list'] as $item) {?>
                  <?php
                   //debug($vars);
              get_component([ 'template' => 'elements/card',
                            'remove_tags'=> $item['remove_elements'],
                            'vars' => [
                                  "class" => $item['class'].' '.$item['background_color'].' col-md-'.$vars['column_number'],
                                  "title" =>  $item['title'],
                                  "subtitle" =>  $item['subtitle'],
                                  "image" =>  $item['image'],
                                  "content" =>  $item['content'],
                                  "button_list" =>  $item['button_list']

                                  ]
                             ]);
?>

        <?php } ?>
      </ul>
</div>
