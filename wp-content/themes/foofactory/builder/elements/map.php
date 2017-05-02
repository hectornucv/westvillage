<article class="map molecule">
	<div class="acf-map">
		<?php foreach ($vars['places'] as $key => $value) { ?>
					<div class="marker" data-lat="<?php echo $value['location']['lat']; ?>" data-lng="<?php echo $value['location']['lng']; ?>">
						<h4 ><?php echo $value['title']; ?></h4>
						<p class="address"><?php echo $value['location']['address']; ?></p>
						<p><?php echo $value['description']; ?></p>
					</div>
		<?php }  ?>
	</div>
</article>