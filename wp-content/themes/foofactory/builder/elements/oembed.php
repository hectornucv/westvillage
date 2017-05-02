<div class="element oembed"> 
<?php 
		   //debug($vars);

		   if($vars['youtube_url']){  ?> 
		   			 
				<div class="placeholder video" style="max-height:500px; height:<?php echo $vars['placeholder']['height'].'px'; ?>; background-size:cover; background-image:url('<?php echo $vars['placeholder']['url']; ?>')" data-videourl='https://www.youtube.com/embed/<?php echo getYtCode([
					'youtube' => $vars['youtube_url'],
					'rel' => 0,
					'showinfo' => 0,
					'autoplay' => 1,
					]); ?>'>
				<i class="icon-play"></i>
				<iframe width="100%"  height="100%" src="" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="content-wrapper">
					<h2><?php echo $vars['title']; ?></h2>
					<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
					<?php echo apply_filters('the_content',  $vars["content"]); ?>
					<?php } ?>
				</div>
		     <?php  
		    }
		    

 ?>
</div>

