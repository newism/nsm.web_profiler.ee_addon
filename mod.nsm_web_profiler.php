<?php if (! defined('BASEPATH')) die('No direct script access allowed');

/**
 * NSM Web Profiler Tag methods
 *
 * @package			NsmWebProfiler
 * @version			0.0.1
 * @author			Leevi Graham <http://leevigraham.com>
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-example-addon
 * @see				http://expressionengine.com/public_beta/docs/development/modules.html#control_panel_file
 */

class Nsm_web_profiler {

	/**
	 * PHP5 constructor function.
	 *
	 * @access public
	 * @return void
	 **/
	function __construct()
	{
		// set the addon id
		$this->addon_id = strtolower(__CLASS__);
	
		// Create a singleton reference
		$EE =& get_instance();

		// define a constant for the current site_id rather than calling $PREFS->ini() all the time
		if (defined('SITE_ID') == FALSE)
			define('SITE_ID', $EE->config->item('site_id'));

		// Init the cache
		// If the cache doesn't exist create it
		if (! isset($EE->session->cache[$this->addon_id]))
			$EE->session->cache[$this->addon_id] = array();

		// Assig the cache to a local class variable
		$this->cache =& $EE->session->cache[$this->addon_id];
	}

	public function toolbar() {
		$EE =& get_instance();
		if($EE->session->userdata['group_id'] != 1)
			return false;
		return $EE->load->_ci_load(array(
			'_ci_vars' => array(),
			'_ci_path' => PATH_THIRD . $this->addon_id . '/views/module/toolbar.php',
			'_ci_return' => true
		));
	}
}