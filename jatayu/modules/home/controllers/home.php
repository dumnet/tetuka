<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//load helpers
		$this->load->helper( array('url', 'cookie'));

		//try to get the theme from the cookie
		$theme = get_cookie('theme');

		$this->theme->set_theme('tetuka');

		if (in_array($theme, array('tetuka', 'default')))
		{
			//got a valid theme... set it
			$this->theme->set_theme($theme);
		}
	}

	public function index()
	{
		//message cookie?
		$message = get_cookie('message');
		if ($message)
		{
			//yes... add message to the theme
			$this->theme->add_message($message, 'success');

			//wipe the cookie
			set_cookie('message', null, null);
		}
		//load the theme_example view
		$this->theme->view('home');
	}

	public function switch_theme($theme)
	{
		//set the cookie with the theme
		set_cookie('theme', $theme, 60*60*24*365);

		//set the message cookie
		set_cookie('message', 'Theme switched to: '.$theme , 60*60*24*365);

		//and redirect to the controller
		redirect('home');
	}

}

/* End of file home.php */
/* Location: .//D/opensource/tetuka/jatayu/modules/home/controllers/home.php */