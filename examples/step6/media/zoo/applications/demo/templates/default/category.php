<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// include assets css/js
$this->app->document->addStylesheet($this->template->resource.'assets/style.css');

$image = $this->category->getImage('content.image');
?>

<div id="yoo-zoo" class="yoo-zoo">
	
	<?php 
	/**
	 * You can get params out of the configuration easily with $this->params
	 * Those are already "merged down" by using application and overriding with category options if present
	 * They are already divided into the right sections as in the xml (template, content, etc)
	 */
	if ($this->params->get('template.show_title')) : ?>
	<h1 class="title"><?php echo $this->category->name; ?></h1>
	<?php endif; ?>

	<?php if ($this->params->get('template.show_description') || $this->params->get('template.show_image')) : ?>
	<div class="description">
		<?php if ($this->params->get('template.show_image')) : ?>
			<img class="image" src="<?php echo $image['src']; ?>" title="<?php echo $this->category->name; ?>" alt="<?php echo $this->category->name; ?>" <?php echo $image['width_height']; ?>/>
		<?php endif; ?>
		<?php if ($this->params->get('template.show_description')) echo $this->category->getText($this->category->description); ?>
	</div>
	<?php endif; ?>

	<?php
	/**
	 * Now let's load a partial template file for the subcategories
	 */
	echo $this->partial('categories');
	?>

	<?php
	/**
	 * Now let's load a partial template file for the items
	 */
	echo $this->partial('items');
	?>
	

	<?php 
	/**
	 * Pagination! Partial as well
	 */
	echo $this->partial('pagination'); ?>
</div>