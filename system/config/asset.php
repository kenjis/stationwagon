<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Dan Horrigan <http://dhorrigan.com>
 * @license		Apache License v2.0
 * @copyright	2010 Dan Horrigan
 */

return array(

	/**
	* An array of paths that will be searched for assets. Each asset is a
	* RELATIVE path from the base_url WITH a trailing slash:
	*
	* array('assets/')
	*/

	'paths' => array('assets/'),

	/**
	* URL to your CodeIgniter root. Typically this will be your base URL,
	* WITH a trailing slash:
	*
	* config_item('base_url')
	*/

	'url' => Config::get('base_url'),

	/**
	* Asset Sub-folders
	*
	* Names for the img, js and css folders (inside the asset path).
	*
	* Examples:
	*
	* img/
	* js/
	* css/
	*
	* This MUST include the trailing slash ('/')
	*/
	'img_dir' => 'img/',
	'js_dir' => 'js/',
	'css_dir' => 'css/'
);

/* End of file config/asset.php */