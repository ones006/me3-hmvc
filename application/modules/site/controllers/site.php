<?php

class Site extends MX_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	function members_area()
	{
		modules::run('login/is_logged_in');
		$this->load->view('logged_in_area');
	}
	
	function messages()
	{
		modules::run('login/is_logged_in');
		$this->load->model('login/membership_model');
		$user = $this->membership_model->get_member_details($this->uri->segment(3));
		if( !$user )
		{
			// No user found
			return false;
		}
		else
		{
			// display our widget
			$this->load->view('member_messages', $user);
		}				
	}
	
	function profile()
	{
		$this->load->model('login/membership_model');
		$user = $this->membership_model->get_member_details($this->uri->segment(3));
		if( !$user )
		{
			// No user found
			$data['main_content'] = 'member_profile';
			$data['notice'] = 'you need to view a profile id';
			$this->load->view('includes/template', $data);
		}
		else
		{
			// display our widget
			$user['main_content'] = 'member_profile';
			$this->load->view('includes/template', $user);
		}			
		
	}
}
