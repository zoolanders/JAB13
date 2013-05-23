<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php if ($pagination = $this->pagination->render($this->pagination_link)) : ?>
	<div class="zoo-pagination">
		<div class="pagination-bg">
			<?php echo $pagination; ?>
		</div>
	</div>
<?php endif;