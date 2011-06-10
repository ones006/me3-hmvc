<?php

class Welcome extends MX_Controller {

	function Welcome()
	{
		parent::__construct();	
	}
	
	function index()
	{
 		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
