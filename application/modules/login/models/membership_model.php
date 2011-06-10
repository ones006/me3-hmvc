<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	function create_member()
	{
		
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))						
		);
		
		$insert = $this->db->insert('membership', $new_member_insert_data);
		return $insert;
	}
	
	function get_member_details($id=false)
	{
		if( !$id )
		{
			// Set Active Record where to the current session's username
			if( $this->session->userdata('username') )
			{
				$this->db->where('username', $this->session->userdata('username'));
			}
			else
			{
				// Return a non logged in person from accessing member profile dashboard
				return false;
			}
		}
		else
		{
			// get the user by id
			$this->db->where('id', $id);
		}
		// Find all records that match this query
		$query = $this->db->get('membership');
		// In this case because we don't have a check set for unique username 
		// we will return the last user created with selected username.
		if($query->num_rows() > 0)
		{
			// Get the last row if there are more than one
			$row = $query->last_row();
			// Assign the row to our return array
			$data['id'] = $row->id;
			$data['first_name'] = $row->first_name;
			$data['last_name'] = $row->last_name;
			// Return the user found
			return $data;
		}
		else 
		{
			// No results found
			return false;
		}
	}
}
