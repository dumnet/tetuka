<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{

	/**
	 * Auth::__construct()
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		
		//load helpers
		$this->load->helper( array('url', 'cookie', 'form', 'url'));

		//load libraries
		$this->load->library(array('bitauth', 'form_validation'));
		
		//try to get the theme from the cookie
		$theme = get_cookie('theme');

		$this->theme->set_theme('sb-admin');

		if (in_array($theme, array('sb-admin')))
		{
			//got a valid theme... set it
			$this->theme->set_theme($theme);
		}
	
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	/**
	 * Auth::convert()
	 *
	 */
	public function convert()
	{
		$this->load->dbforge();
		$this->dbforge->modify_column($this->bitauth->_table['groups'], array(
			'roles' => array(
				'name' => 'roles',
				'type' => 'text'
			)
		));

		$query = $this->db->select('group_id, roles')->get($this->bitauth->_table['groups']);
		if($query && $query->num_rows())
		{
			foreach($query->result() as $row)
			{
				$this->db->where('group_id', $row->group_id)->set('roles', $this->bitauth->convert($row->roles))->update($this->bitauth->_table['groups']);
			}
		}

		echo 'Update complete.';
	}

	/**
	 * Auth::login()
	 *
	 */
	public function login()
	{
		$data = array();

		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('remember_me','Remember Me','');

			if($this->form_validation->run() == TRUE)
			{
				// Login
				if($this->bitauth->login($this->input->post('username'), $this->input->post('password'), $this->input->post('remember_me')))
				{
					// Redirect
					if($redir = $this->session->userdata('redir'))
					{
						$this->session->unset_userdata('redir');
					}

					redirect($redir ? $redir : 'example');
				}
				else
				{
					$data['error'] = $this->bitauth->get_error();
				}
			}
			else
			{
				$data['error'] = validation_errors();
			}
		}

		$this->load->view('auth/login', $data);
	}

	/**
	 * Auth::index()
	 *
	 */
	public function index()
	{
		/*if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}
		
		$this->load->view('auth/users', array('bitauth' => $this->bitauth, 'users' => $this->bitauth->get_users()));*/
		
		$this->theme->set_layout('login');
		
		$this->theme->view('test_view');
	}

	/**
	* Auth::register()
	*
	*/
	public function register()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|bitauth_unique_username');
			$this->form_validation->set_rules('fullname', 'Fullname', '');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|bitauth_valid_password');
			$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');

			if($this->form_validation->run() == TRUE)
			{
				unset($_POST['submit'], $_POST['password_conf']);
				$this->bitauth->add_user($this->input->post());
				redirect('auth/login');
			}

		}

		$this->load->view('auth/add_user', array('title' => 'Register'));
	}

	/**
	* Auth::add_user()
	*
	*/
	public function add_user()
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}

		if ( ! $this->bitauth->has_role('admin'))
		{
			$this->load->view('auth/no_access');
			return;
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|bitauth_unique_username');
			$this->form_validation->set_rules('fullname', 'Fullname', '');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|bitauth_valid_password');
			$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');

			if($this->form_validation->run() == TRUE)
			{
				unset($_POST['submit'], $_POST['password_conf']);
				$this->bitauth->add_user($this->input->post());
				redirect('example');
			}

		}

		$this->load->view('auth/add_user', array('title' => 'Add User', 'bitauth' => $this->bitauth));
	}


	/**
	* Auth::edit_user()
	*
	*/
	public function edit_user($user_id)
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}

		if ( ! $this->bitauth->has_role('admin'))
		{
			$this->load->view('auth/no_access');
			return;
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|bitauth_unique_username['.$user_id.']');
			$this->form_validation->set_rules('fullname', 'Fullname', '');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('active', 'Active', '');
			$this->form_validation->set_rules('enabled', 'Enabled', '');
			$this->form_validation->set_rules('password_never_expires', 'Password Never Expires', '');
			$this->form_validation->set_rules('groups[]', 'Groups', '');

			if($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', 'Password', 'bitauth_valid_password');
				$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');
			}

			if($this->form_validation->run() == TRUE)
			{
				unset($_POST['submit'], $_POST['password_conf']);
				$this->bitauth->update_user($user_id, $this->input->post());
				redirect('example');
			}

		}

		$groups = array();
		foreach($this->bitauth->get_groups() as $_group)
		{
			$groups[$_group->group_id] = $_group->name;
		}


		$this->load->view('auth/edit_user', array('bitauth' => $this->bitauth, 'groups' => $groups, 'user' => $this->bitauth->get_user_by_id($user_id)));
	}

	/**
	 * Auth::groups()
	 *
	 */
	public function groups()
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}

		$this->load->view('auth/groups', array('bitauth' => $this->bitauth, 'groups' => $this->bitauth->get_groups()));
	}

	/**
	 * Auth::add_group()
	 *
	 */
	public function add_group()
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}

		if ( ! $this->bitauth->has_role('admin'))
		{
			$this->load->view('auth/no_access');
			return;
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'Group Name', 'trim|required|bitauth_unique_group');
			$this->form_validation->set_rules('description', 'Description', '');
			$this->form_validation->set_rules('members[]', 'Members', '');
			$this->form_validation->set_rules('roles[]', 'Roles', '');

			if($this->form_validation->run() == TRUE)
			{
				unset($_POST['submit']);
				$this->bitauth->add_group($this->input->post());
				redirect('auth/groups');
			}

		}

		$users = array();
		foreach($this->bitauth->get_users() as $_user)
		{
			$users[$_user->user_id] = $_user->fullname;
		}

		$this->load->view('auth/add_group', array('bitauth' => $this->bitauth, 'roles' => $this->bitauth->get_roles(), 'users' => $users));
	}

	/**
	 * Auth:edit_group()
	 *
	 */
	public function edit_group($group_id)
	{
		if( ! $this->bitauth->logged_in())
		{
			$this->session->set_userdata('redir', current_url());
			redirect('auth/login');
		}

		if ( ! $this->bitauth->has_role('admin'))
		{
			$this->load->view('auth/no_access');
			return;
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'Group Name', 'trim|required|bitauth_unique_group['.$group_id.']');
			$this->form_validation->set_rules('description', 'Description', '');
			$this->form_validation->set_rules('members[]', 'Members', '');
			$this->form_validation->set_rules('roles[]', 'Roles', '');

			if($this->form_validation->run() == TRUE)
			{
				unset($_POST['submit']);
				$this->bitauth->update_group($group_id, $this->input->post());
				redirect('auth/groups');
			}

		}

		$users = array();
		foreach($this->bitauth->get_users() as $_user)
		{
			$users[$_user->user_id] = $_user->fullname;
		}

		$group = $this->bitauth->get_group_by_id($group_id);

		$role_list = array();
		$roles = $this->bitauth->get_roles();
		foreach($roles as $_slug => $_desc)
		{
			if($this->bitauth->has_role($_slug, $group->roles))
			{
				$role_list[] = $_slug;
			}
		}

		$this->load->view('auth/edit_group', array('bitauth' => $this->bitauth, 'roles' => $roles, 'group' => $group, 'group_roles' => $role_list, 'users' => $users));
	}

	/**
	 * Auth::activate()
	 *
	 */
	 public function activate($activation_code)
	 {
	 	if($this->bitauth->activate($activation_code))
	 	{
	 		$this->load->view('auth/activation_successful');
	 		return;
	 	}

	 	$this->load->view('auth/activation_failed');
	 }

	/**
	 * Auth::logout()
	 *
	 */
	public function logout()
	{
		$this->bitauth->logout();
		redirect('auth');
	}

}