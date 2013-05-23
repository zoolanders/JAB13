<?php
/**
* @package		ZL Elements
* @author    	JOOlanders, SL http://www.zoolanders.com
* @copyright 	Copyright (C) JOOlanders, SL
* @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

class ElementJab extends Element {
	
	public function hasValue($params = array()) {
		return true;
	}

	public function render($params = array()) {
		if ($layout = $this->getLayout('default.php')) {
			$url = JRoute::_('index.php?option=com_zoo&controller=demo&task=jab13&format=raw&app_id=' . $this->application->id);
            return $this->renderLayout($layout, array('url' => $url));
        }
	}

	public function edit() {
		return 'DEMO EDIT';
	}

}