<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// create label
$label = ($params['altlabel']) ? $params['altlabel'] : $element->config->get('name');

// render element
if (isset($params['showlabel']) && $params['showlabel']):
?>
<strong>
	<?php echo $label; ?>:
</strong>
<?php endif; ?>

<?php echo $element->render($params); ?>