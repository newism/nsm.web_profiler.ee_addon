<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Web Profiler CP 
 *
 * @package			NsmWebProfiler
 * @version			0.0.1
 * @author			Leevi Graham <http://leevigraham.com>
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-example-addon
 * @see				http://expressionengine.com/public_beta/docs/development/modules.html#control_panel_file
 */

class Nsm_web_profiler_mcp{

	private $pages = array("index");

	public function __construct()
	{
		$this->EE =& get_instance();
		$this->addon_id = strtolower(substr(__CLASS__, 0, -4));
		$this->cp_url = BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module='.$this->addon_id.AMP;
	}

	public function index()
	{
		$out = $this->EE->load->view("module/index", array(), TRUE);
		return $this->_renderLayout("index", $out);
	}

	public function _renderLayout($page, $out = FALSE)
	{
		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line("{$page}_page_title"));
		$this->EE->cp->set_breadcrumb($this->cp_url, $this->EE->lang->line('nsm_web_profiler_module_name'));

		$nav = array();
		foreach ($this->pages as $page) {
			$nav[lang("{$page}_nav_title")] = $this->cp_url . "method=" . $page;
		}
		$this->EE->cp->set_right_nav($nav);
		return "<div class='mor'>{$out}</div>";
	}

}