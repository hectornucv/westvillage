<?php 
 
function get_section_options($vars){
    
    $search = array_search("show_advanced", array_keys($vars));
    $tempVars = array_slice($vars, $search);
    $sizeof = sizeof($tempVars);
     foreach ($tempVars as $key => $value) {
             //Normal Options
         if(is_array($tempVars[$key]) && $key != 'section_styling'){
                     if(isset($tempVars[$key][0])){
                $tempVars[$key] = $tempVars[$key][0];
                }
         }
         //Border
         if(is_array($tempVars[$key]) && $key == 'section_styling'){

                     $tempVars['section_styling_flat'] = $tempVars[$key][0]['padding'].'-top '.$tempVars[$key][1]['padding'].'-right '.$tempVars[$key][2]['padding'].'-bottom '.$tempVars[$key][3]['padding'].'-left';
                     
                     $tempVars['section_styling_flat'] .= ' '.$tempVars[$key][0]['margin'].'-top '.$tempVars[$key][1]['margin'].'-right '.$tempVars[$key][2]['margin'].'-bottom '.$tempVars[$key][3]['margin'].'-left';

                     if($tempVars[$key][0]['border'] == 1){
                        $tempVars[$key][0]['border'] = 'border-top';
                     }
                      if($tempVars[$key][1]['border'] == 1){
                        $tempVars[$key][1]['border'] = 'border-right';
                     }
                      if($tempVars[$key][2]['border'] == 1){
                        $tempVars[$key][2]['border'] = 'border-bottom';
                     }
                      if($tempVars[$key][3]['border'] == 1){
                        $tempVars[$key][3]['border'] = 'border-left';
                     }

                     $tempVars['section_styling_flat'] .= ' '.$tempVars[$key][0]['border'].' '.$tempVars[$key][2]['border'].' '.$tempVars[$key][1]['border'].' '.$tempVars[$key][3]['border'];
                    
         }
     }
    //Section Options
     // debug($tempVars['section_styling_flat']);
    $section_classes = 'class="'.$vars['section'].' '.$tempVars['section_styling_flat'].' '.$tempVars['background_color'].' '.$tempVars['section_width'].' '.' '.$tempVars['text_align'].' '.$tempVars['extra_class'].'"';
    
    $section_id = (!empty($tempVars['id']))?'id="'.$tempVars['id'].'"': '';
    
    $section_style = (!empty($tempVars['background_image'])) ?
        'style="background-image:url('.$tempVars['background_image'].');"'
        : '';


        return ' '.$section_id.' '.$section_classes.' '.$section_style.' ';
 }
 ?>