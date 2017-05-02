<?php  
//debug($vars);
get_component([ 'template' => 'elements/card',
                       'vars' => [
                             "class" => 'text-center',
                             "title" => $vars['title'],
                             "subtitle" => $vars["subtitle"],
                             "content" => apply_filters('the_content',  $vars["content"])
                             ]
                        ]);?>

