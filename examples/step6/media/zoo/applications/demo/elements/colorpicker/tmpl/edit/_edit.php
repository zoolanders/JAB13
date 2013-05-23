<?php
/**
* @package		ZL Elements
* @author    	JOOlanders, SL http://www.zoolanders.com
* @copyright 	Copyright (C) JOOlanders, SL
* @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div class="repeatable-content" id="<?php echo $this->identifier; ?>-<?php echo $this->key(); ?>">

	<div class="row colorHolder">
		<?php echo $this->app->html->_('control.text', $this->getControlName('value'), $value, 'size="60" maxlength="12"'); ?>
		<div class="colorSelector"><div></div></div>
    </div>
	
</div>

<script type="text/javascript">
	jQuery('#<?php echo $this->identifier; ?>-<?php echo $this->key(); ?>').EditElementColorPicker({ color: '<?php echo $value ?>' });
</script>