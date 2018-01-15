<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $data['title'] = "Cord Lanka | Login";
    $this->load->view('login', $data);
		$this->load->view('includes/footer');
	}

	public function LoginUser()
	{
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE){
			
			redirect('Login');
       	}

        else{

          	$this->load->model('Model_user');
          	$result = $this->Model_user->LoginUser();

          	if ($result != FALSE) {

          		$user_data = array(
          			'user_id' => $result->id,
          			'email' => $result->Email,
          			'loggedin' => TRUE                
          			);

          		$this->session->set_userdata($user_data);

          		redirect('Dashboard');
          	}

          	else{

          		$this->session->set_flashdata('errmsg','Wrong Email & Password!!!');
              	redirect('Login');
          	}
        }
	}

}
