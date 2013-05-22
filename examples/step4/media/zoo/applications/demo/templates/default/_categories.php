<div class="categories">
	<?php 
	/**
	 * Let's load a partial for each category
	 */
	foreach ($this->selected_categories as $category) {
		echo $this->partial('category', array('category' => $category));
	}
	?>
</div>