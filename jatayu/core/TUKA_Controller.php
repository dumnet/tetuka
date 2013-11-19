<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed!");

class TUKA_Controller extends CI_Controller {

	private $default_theme = "bootplus";

	function __construct()
	{
		parent::__construct();
		$this->apply_theme();
	}

	function available_themes()
	{
		$this->load->model("app_model");
		
		$themes = array();

		$query = $this->app_model->get_installed_themes();

		if ($query->num_rows() > 0) 
			$themes = array_map(function($item){ return $item->theme_path; }, $query->result());

		return $themes;
	}

	function apply_theme()
	{
		$theme  = get_cookie("theme");
		$themes = $this->available_themes();

		if (in_array($theme, $themes))
			$this->theme->set_theme($theme);
		else
			$this->theme->set_theme($this->default_theme);

	}

	function switch_theme($theme)
	{
		//set the cookie with the theme
		set_cookie('theme', $theme, 60*60*24*365);

		//set the message cookie
		set_cookie('message', 'Theme switched to: '.$theme , 60*60*24*365);

		//and redirect to the controller
		redirect('home');
	}

	function assets()
	{
		$paths = Modules::find(
			implode("/", $this->uri->segments), 
			$this->router->fetch_module(),
			""
		);

		if (($file = $paths[0]) != FALSE) 
		{
			$mime = get_mime_by_extension($file);
			header("Content-type: $mime");
			include $file;
		}
		else
			show_error(404);

	}

}