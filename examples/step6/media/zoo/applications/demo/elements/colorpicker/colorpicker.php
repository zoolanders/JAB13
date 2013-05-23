<?php
/**
* @package		ZL Elements
* @author    	JOOlanders, SL http://www.zoolanders.com
* @copyright 	Copyright (C) JOOlanders, SL
* @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// register ElementRepeatable class
App::getInstance('zoo')->loader->register('ElementRepeatable', 'elements:repeatable/repeatable.php');

/*
	Class: ElementColorPicker
		The colorpicker element class
*/
class ElementColorPicker extends ElementRepeatable implements iRepeatSubmittable {
	
	/*
		Function: _getSearchData
			Get repeatable elements search data.
					
		Returns:
			String - Search data
	*/	
	protected function _getSearchData() {
		return $this->config->get('value');
	}
	
	/*
		Function: loadAssets
			Load elements css/js assets.

		Returns:
			Void
	*/
	public function loadAssets() {
		parent::loadAssets();
		$this->app->document->addStylesheet('elements:colorpicker/assets/css/colorpicker.css');
		$this->app->document->addScript('elements:colorpicker/assets/js/jquery.colorpicker.custom.js');
		$this->app->document->addScript('elements:colorpicker/assets/js/colorpicker.js');
	}

	/*
		Function: render
			Renders the element.

	   Parameters:
            $params - render parameter

		Returns:
			String - html
	*/
	public function _render($params = array()) {
		$value = $this->get('value', $this->config->get('default'));
		$params = $this->app->data->create($params);

		switch($params->get('show_as', 'color')){
			case 'hex':
				return $value;
				break;
			case 'color':
			default:
				// Min = 15px * 15px (Trick with padding)
				$width = $params->get('width', 15);
				$height = $params->get('height', 15);
				$bs = $params->get('border_size', 1);
				$bc = $params->get('border_color', '#000000');
				
				$html = '<span style="background-color: '.$value.'; width: '.(int) $width.'px; height: '.(int) $width.'px; border: '.$bs.'px solid '.$bc.'; display:inline-block; ">&nbsp;</span>';
				return $html;
				break;
		}
		
		return $value;
	}

	/*
		Function: renderSubmission
			Renders the element in submission.

	   Parameters:
            $params - submission parameters

		Returns:
			String - html
	*/
	public function _renderSubmission($params = array()) {
        return $this->edit();
	}
	
	/*
	   Function: _edit
	       Renders the repeatable edit form field.

	   Returns:
	       String - html
	*/
	protected function _edit(){
		
		// init vars
		$default = $this->config->get('default', '#ff0000');

		// set default, if item is new
		if ($default != '' && $this->_item != null && $this->_item->id == 0) {
			$this->config->set('value', $default);
		}
		
        if ($layout = $this->getLayout('edit/_edit.php')) {
            return $this->renderLayout($layout,
                array(
					'value' => $this->get('value', $default)
                )
            );
        }
	}

}