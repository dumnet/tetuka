<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed!");

class App_model extends TUKA_Model {

	function get_installed_themes($include_inactive = FALSE)
	{
		$this->db->from("app_themes");
		
		if ($include_inactive == FALSE) 
			$this->db->where("theme_active", 1);

		return $this->db->get();
	}

}