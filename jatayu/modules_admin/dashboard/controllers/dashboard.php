<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','bitauth'));
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index()
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('login');
		}

		if ( ! $this->bitauth->has_role('admin'))
		{
			$this->theme->view('no_access');
			return;
		}
		//$this->theme->set(array('bitauth' => $this->bitauth, 'users' => $this->bitauth->get_users()));
		$this->theme->set('bitauth',$this->bitauth);
		$this->theme->view('dashboard_view');
	}
}

/* End of file dashboard.php */
/* Location: .//D/opensource/tetuka/jatayu/modules_admin/temp/controllers/dashboard.php */