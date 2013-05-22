<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// include assets css/js
$this->app->document->addStylesheet($this->template->resource.'assets/style.css');

$image = $this->application->getImage('content.image');
?>

<div id="yoo-zoo" class="yoo-zoo">
	
	<?php 
	/**
	 * You can get params out of the configuration easily with $this->params
	 * Those are already "merged down" by using application and overriding with category options if present
	 * They are already divided into the right sections as in the xml (template, content, etc)
	 */
	if ($this->params->get('template.show_title')) : ?>
		<h1 class="title"><?php echo $this->application->getParams()->get('content.title'); ?></h1>
	<?php endif; ?>

	<?php if ($this->params->get('template.show_description') || ($this->params->get('template.show_image') && $image)) : ?>
	<div class="description">
		<?php if ($this->params->get('template.show_image') && $image) : ?>
			<img class="image" src="<?php echo $image['src']; ?>" title="<?php echo $this->application->getParams()->get('content.title'); ?>" alt="<?php echo $this->application->getParams()->get('content.title'); ?>" <?php echo $image['width_height']; ?>/>
		<?php endif; ?>
		<?php if ($this->params->get('template.show_description')) echo $this->application->getText($this->application->description); ?>
	</div>
	<?php endif; ?>

	<?php
	/**
	 * Now let's load a partial template file for the root categories
	 */
	echo $this->partial('categories');
	?>

	<?php
	/**
	 * Now let's load a partial template file for the items
	 */
	echo $this->partial('items');
	?>
</div>