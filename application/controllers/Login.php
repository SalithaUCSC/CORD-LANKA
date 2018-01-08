<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('includes/inner_header');
		$this->load->view('login');
		$this->load->view('includes/footer');
	}


	public function dashboard()
	{
		// $this->load->view('includes/loggedin_header');
		$this->load->view('dashboard');
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

          		redirect('Login/dashboard');
          	}

          	else{

          		$this->session->set_flashdata('errmsg','Wrong Email & Password!!!');
              	redirect('Login');
          	}
        }
	}

	public function logout(){
		$this->session->unset_userdata($user_data);
		session_unset();
		redirect(base_url());
	}

}
