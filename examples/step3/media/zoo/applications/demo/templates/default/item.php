<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// You could include CSS here
// $this->app->document->addStylesheet($this->template->resource.'assets/css/zoo.css');

?>

<!-- THIS PART OF THE PAGE IS THE CONTENT OF THE SINGLE ITEM VIEW -->
<div id="yoo-zoo" class="yoo-zoo">

	<div class="item">
		<?php 
		/**
		 * With this call, you can render the full item layout in the renderer/item folder. You need to pass
		 * the view and the item as an argument.
		 *
		 * As a general rule:
		 * $this->renderer->render('folder.layout', array('list' => 'of', 'arguments' => 'passed'));
		 */
		echo $this->renderer->render('item.full', array('view' => $this, 'item' => $this->item)); 
		?>
</div>