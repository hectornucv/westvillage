<div class="builder-sections">

	<section class="padding-6-top padding-6-bottom bg-white">
	
		<div class="container">
			<?php 
				
				get_component([ 'template' => 'elements/card',
												 'vars' => [
															 "class" => 'col-md-12 blog ',
															 "title" => get_the_title(),
															 "content" => get_the_content(),
															 "button" => ''
															 ]
													]);
			 ?>
		</div>
	</section>
	
</div>