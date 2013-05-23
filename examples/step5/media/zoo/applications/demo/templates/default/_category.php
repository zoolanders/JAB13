<div class="category float-left width25">
	<a href="<?php echo $this->app->route->category($category); ?>">
		<h3><?php echo $category->name; ?></h3>
		<?php 
		$image = $category->getImage('content.teaser_image'); ?>
		<img src="<?php echo $image['src']; ?>" <?php echo $image['width_height']; ?> />
	</a>
</div>