 
<?php if($vars['type'] == 'accordion') { ?>
<div class="col-xs-12 panel-group molecule tabs" role="tablist" aria-multiselectable="true">
	<?php
	$vars['loop_size'] = sizeof($vars['tab']);
	for ($i=0; $i < $vars['loop_size']; $i++) { 	
	 	get_component([
			 'template' => 'parts/accordion-single',
			 'vars' => [
			 						'title' => $vars['tab'][$i]['title'],
			 						'content' => $vars['tab'][$i]['content'],
			 						'collapse_id' => rand(),
			 						'trigger_id' => rand(),
			 						],
			]);
	 }
	 unset($i);
			 ?>
  </div>
<?php } elseif($vars['type'] == 'tab'){  ?>
<div class="tabs molecule">
 <ul class="nav nav-tabs" role="tablist">
 <?php $vars['loop_size'] = sizeof($vars['tab']); ?>
 <?php for ($i=0; $i < $vars['loop_size']; $i++) { 
 		$vars['tab'][$i]['slug'] = rand(); ?>
 		<?php 

 			switch ($vars['loop_size']) {
 			case 1:
 				$vars['tab'][$i]['tab_col'] = ' col-md-6 col-sm-12 col-xs-12';
 				break;
 			case 2:
 				$vars['tab'][$i]['tab_col'] = ' col-md-6 col-sm-6 col-xs-6';
 				break;
 			case 3:
 				$vars['tab'][$i]['tab_col'] = ' col-md-4 col-sm-4 col-xs-4';
 				break;
 			case 4:
 				$vars['tab'][$i]['tab_col'] = ' col-md-3 col-sm-3 col-xs-3';
 				break;
 			default:
 				$vars['tab'][$i]['tab_col'] = ' col-md-4 col-sm-6 col-xs-6';
 				break;
 		}
 		?>
    <li role="presentation" class="text-center <?php echo $vars['tab'][$i]['tab_col']; ?> <?php if($i == 0){echo 'active'; } ?>"><a href="#<?php echo $vars['tab'][$i]['slug']; ?>" aria-controls="home" role="tab" data-toggle="tab">
    <span class="icon-circle text-center <?php echo $vars['tab'][$i]["shape_color"] ?>" >
			<i class="icon-<?php echo $vars['tab'][$i]["icon"]?>"></i>
		</span>	

    <h1 class="visible-md visible-lg hidden-sm hidden-xs">
    	<?php echo $vars['tab'][$i]['title'] ?>
    </h1>
    </a></li>
	<?php } unset($i); ?>
  </ul>
	
  <!-- Tab panes -->
  <div class="tab-content container-fluid">
    <?php for ($i=0; $i < $vars['loop_size']; $i++) {  ?>
	    <div role="tabpanel" class="tab-pane <?php if($i == 0){echo 'active'; } ?>" id="<?php echo $vars['tab'][$i]['slug']; ?>">
	     <h1 class="hidden-md hidden-lg visible-sm visible-xs">
    	<?php echo $vars['tab'][$i]['title'] ?>
    </h1>
			<?php echo $vars['tab'][$i]['content']; ?>
	    </div>
		<?php } ?>
  </div>
</div>
<?php } ?>