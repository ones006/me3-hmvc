<?php

class Sioformodermodel extends Model 
{
	
	// ------------------------------------------------------------------------
	/**
	 * initialises the class inheriting the methods of the class Model 
	 *
	 * @return Usermodel
	 */
    function Sioformordermodel()
    {     
        parent::Model();
        
        //FreakAuth_light table prefix
        $this->_prefix = $this->config->item('FAL_table_prefix');
        $this->_table=$this->_prefix.'sio_form_orders';
    }
	
    // ------------------------------------------------------------------------
   
    /**
     * Retrieves all records and all fields (or those passed in the $fields string)
     * from the table user. It is possible (optional) to pass the wonted fields, 
     * the query limit, and the query WHERE clause.
     *
     * @param string of fields wanted $fields
     * @param array $limit
     * @param string $where
     * @return query string
     */
	function getSioformorders($fields=null, $limit=null, $where=null)
	{	
		($fields != null) ? $this->db->select($fields) :'';
		
		($where != null) ? $this->db->where($where) :'';
		
		($limit != null ? $this->db->limit($limit['start'], $limit['end']) : '');
        
		//returns the query string
		return $this->db->get($this->_table);
	}
	
	function add()
    {      
    	//set validation rules
    	$rules['user_name'] = 'trim|required|xss_clean|username_check|username_backend_duplicate_check';
        $rules['password'] = 'trim|required|xss_clean|password_backend_check';
        $rules['email'] = 'trim|required|valid_email|xss_clean|email_backend_duplicate_check';
        
        $this->fal_validation->set_message('is_numeric', 'must be numeric');
        //do we want to set the country?
        //(looks what we set in the freakauth_light.php config)
        if ($this->config->item('FAL_use_country'))
        {
            $rules['country_id'] = $this->config->item('FAL_user_country_field_validation_register');
        }
        
        //getting user profile custom data
	    if ($this->config->item('FAL_create_user_profile')==TRUE)
		{	
		    $data = $this->freakauth_light->_buildUserProfileFieldsRules();
		    $rules_profile = $data['rules'];
		    $fields = $data['fields']; 
		    
		    $this->fal_validation->set_rules($rules_profile);
		    	
		    $this->fal_validation->set_fields($fields);
		}
		        
        $this->fal_validation->set_rules($rules);
       
    	
    	
    	//if validation unsuccesfull & data not ok
        if ($this->fal_validation->run() == FALSE)
		{
			//$countries = null;            
	        if ($this->config->item('FAL_use_country'))
	        {
	    		//SELECT * FROM country
	            $data['countries'] = $this->country_model->getCountriesForSelect();
	        }

			$data['heading'] = 'Form Order management admins';
	    	$data['action'] = 'Add Form Order';
	    	$data['controller'] = 'Sio_form_order';
	    	$data ['page'] = $this->config->item('FAL_template_dir').'template_admin/sio_form_order/add';
            
            //$data['role_options'] = $this->_getRoleOptions();
	    	
	        $this->load->vars($data);
	        
	    	$this->load->view($this->_container);
	    	//$this->output->enable_profiler(TRUE);
		}
		//if everything ok
		else
		{
			$values=$this->_get_form_values();
			
        	//insert data in DB
        	$this->usermodel->insertUser($values['user']);
        	
        	
        	//if we want the user profile as well
	        if($this->config->item('FAL_create_user_profile'))
	        {	
	              //let's get the last insert id
	              $values['user_profile']['id']= $this->db->insert_id();
	              $this->load->model('Userprofile');
	              $this->Userprofile->insertUserProfile($values['user_profile']);
	        }
			//set a flash message
			$msg = $this->db->affected_rows().$this->lang->line('FAL_user_added');
			flashMsg($msg);
			
			//redirect to list
			redirect('admin/sio_form_order/add', 'add');
		}
        	
    }
 
    // ------------------------------------------------------------------------
	
	/**
	 * Updates the user by $where array condition
	 *
	 * @param array with where condition 'table_field'=>'value' $where
	 * @param array with 'table_field'=>'value' of data to update $data
	 */
	function updateSioformorders($where, $data)
	{
        $this->db->where($where);
        $this->db->update($this->_table, $data);
	}
	
	    // ------------------------------------------------------------------------
	
	/**
	 * Deletes the user by $id (primary key in the table)
	 *
	 * @param integer for the "where id='$id'" condition
	 */
	function deleteSioformorder($id)
	{
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
	}
}
?>
