<div class="items clearfix">
<?php
foreach ($this->items as $item) {
	echo $this->partial('item', array('item' => $item)); 
}
?>
</div>