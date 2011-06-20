<?php
#doc
#	classname:	SioFormOrders
#	scope:		Admin
#
#/doc

class SioFormOrders extends controller
{
	#	internal variables
	
	function index()
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

}
