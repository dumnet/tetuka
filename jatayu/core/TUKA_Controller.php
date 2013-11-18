<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed!');

class TUKA_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// load helper requirements
		$this->load->helper(array('uri', 'cookie'));

		// apply theme
		$theme = get_cookie('theme');
		
		if (in_array($theme, array('tetuka', 'default')))
			$this->theme->set_theme($theme);
		else
			$this->theme->set_theme('tetuka');
		
	}

}