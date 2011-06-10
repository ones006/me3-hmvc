<?php 
#doc
#	classname:	ClassName
#	scope:		PUBLIC
#
#/doc

class Template extends MX_Controller{
	#	internal variables
	
	#	Constructor
	function ControllerName()
	{
		parent::__construct();	
	}
	###	

	public function index()
	{
		$this->load->view('index');
	}

}
?>
