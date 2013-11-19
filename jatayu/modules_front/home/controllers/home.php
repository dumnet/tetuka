<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Home extends TUKA_Controller {


	public function index()
	{
		$this->theme->set("assets", array(
			"js" 	=> js_module("home.js"),
			"css"	=> css_module("home.css"),
			"img"	=> img_module("test.jpg")
		));
		
		$this->theme->view("home");
	}

}

/* End of file home.php */
/* Location: .//D/opensource/tetuka/jatayu/modules/home/controllers/home.php */