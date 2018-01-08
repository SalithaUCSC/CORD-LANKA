<?php

/**
* 
*/
class Model_user extends CI_Model
{


	function LoginUser(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond = $this->db->get('user');

		if ($respond->num_rows()==1) {
				return $respond->row(0);
			}

		else{

			return FALSE;

		}
	}

}