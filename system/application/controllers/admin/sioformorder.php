<?php

class Sioformorder extends Controller
{	
	/**
	 * Initialises the controller
	 *
	 * @return Admin
	 */
    function Sioformorder()
    {
        parent::Controller();
        
        ////////////////////////////
		//CHECKING FOR PERMISSIONS
		///////////////////////////
		//-------------------------------------------------
        //only 'admin' and 'superadmin' can manage users
        
        $this->freakauth_light->check('admin');
        
        //-------------------------------------------------
        //END CHECKING FOR PERMISSION
        
        $this->_container = $this->config->item('FAL_template_dir').'template_admin/container';
    	
    }
	
    	// --------------------------------------------------------------------
	
    /**
     * Do what you want here
     *
     */
    function index()
    {
		$data['heading']='Admin Console home';
		$data['action']='Just an example';
		$data['content']="<p>Do what you want with this controller!</p>"
						 ."<p>Click <b>".anchor('admin/example/restrict_example', 'here')."</b>: if you are a superadmin you will see something</p>"
						 ."<p>I'm sure You are smart enough!</p>";
		$data['content'].="<br /><br />Be sure to check the main ";
        $data['content'].=anchor('example', 'examples')." too.";
		$data['page'] = $this->config->item('FAL_template_dir').'template_admin/sioformorder/example';
        
        $this->load->vars($data);
	        
	    $this->load->view($this->_container);
        
    }
	
    // --------------------------------------------------------------------
	/**
     * Let's restrict a method just to superadmin
     *
     */
    function restrict_example()
    {
		
    	////////////////////////////
		//CHECKING FOR PERMISSIONS
		///////////////////////////
		//-------------------------------------------------
        //only 'admin' and 'superadmin' can manage users
        
        $this->freakauth_light->check('superadmin');
        
        //-------------------------------------------------
        //END CHECKING FOR PERMISSION
        
        $data['heading']='Admin Console home';
		$data['action']='Just an example';
		$data['content']="<p>You can view this because you are a super admin</p>";

		
		$data['page'] = $this->config->item('FAL_template_dir').'template_admin/sio_fo/example';
        
        $this->load->vars($data);
	        
	    $this->load->view($this->_container);
        
    }

}
?>
