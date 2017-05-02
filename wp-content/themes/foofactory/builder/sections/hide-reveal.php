<?php //debug($vars); ?>
<div>
 <ul class="nav nav-tabs" role="tablist">
 <?php $vars['loop_size'] = sizeof($vars['tabs']); ?>
 <?php for ($i=0; $i < $vars['loop_size']; $i++) { 
 		$vars['tabs'][$i]['slug'] = rand(); ?>
    <li role="presentation" class="col-lg-3 col-sm-6 col-xs-12">
			
			<?php 
			get_component([ 'template' => 'elements/card',
                      'remove_tags'=>['h6','img'],
                      'vars' => [
                            "class" => '',
                            "title" => $vars['tabs'][$i]['title'],
                            "content" => truncate($vars['tabs'][$i]['excerpt'],20,"",false),
                            "button" => array(
                                ["text" => "Read More",
                                 "extra-data" => "aria-controls='home' role='tab' data-toggle='tab'",
                                 "link" => "#".$vars['tabs'][$i]['slug']
                                ]
                              )
                               
                            ]
                       ]); ?>
			



    	
    </li>
	<?php  } unset($i); ?>
  </ul>
	
  <!-- Tab panes -->
  <div class="tab-content">
    <?php for ($i=0; $i < $vars['loop_size']; $i++) {  ?>
      <div role="tabpanel" class="tab-pane <?php //if($i == 0){echo 'active'; } ?>" id="<?php echo $vars['tabs'][$i]['slug']; ?>">
      <a href="#" class="close-tab"><i class="icon-close"></i></a>

      <?php 
      //debug($vars['tabs'][$i]['card']);
      get_component([ 'template' => 'elements/card',
                            'remove_tags'=>$vars['tabs'][$i]['card']['remove_elements'],
                            'vars' => [
                                  "class" => $vars['tabs'][$i]['card']['class'],
                                  "title" => $vars['tabs'][$i]['card']['title'],
                                  "subtitle" => $vars['tabs'][$i]['card']['subtitle'],
                                  "content" => $vars['tabs'][$i]['card']['content'],
                                  "button" => $vars['tabs'][$i]['card']['button'],
                                     
                                  ]
                             ]); ?>
            <div class="show-reveal">
                             
            </div>                 
      </div>
    <?php } ?>
  </div>
</div>
<?php //} ?>