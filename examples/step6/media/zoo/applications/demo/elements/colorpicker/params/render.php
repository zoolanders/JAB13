<?php
/**
* @package		ZL Elements
* @author    	JOOlanders, SL http://www.zoolanders.com
* @copyright 	Copyright (C) JOOlanders, SL
* @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// load config
require_once(JPATH_ADMINISTRATOR . '/components/com_zoo/config.php');

	return '{
				"_show_as":{
					"type": "select",
					"label": "Show As",
					"default": "color",
					"specific":{
						"options":{
							"Color":"color",
							"Hexadecimal Code":"hex"
						}
					}
				},
				"_width":{
					"type": "text",
					"label": "Color Box Width",
					"default": "25"
				},
				"_height":{
					"type": "text",
					"label": "Color Box Height",
					"default": "25"
				},
				"_border_size":{
					"type": "text",
					"label": "Color Box Border Size",
					"default": "1"
				},
				"_border_color":{
					"type": "text",
					"label": "Color Box Border Color",
					"default": "#000000"
				}
		}';