<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// create label
$label = '';
if (isset($params['showlabel']) && $params['showlabel']) {
	$label = ($params['altlabel']) ? $params['altlabel'] : $element->config->get('name');
}

// render element
?>
<strong>
	<?php echo $label; ?>:
</strong>
<?php echo $element->render($params); ?>