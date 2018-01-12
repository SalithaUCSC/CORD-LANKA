<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		
	}

	public function index()
	{
		// $this->load->view('includes/loggedin_header');
		$data['allitems'] = $this->Dashboard_model->get_all_products();
		$this->load->view('dashboard', $data);
		$this->load->view('includes/footer');		
	}

	public function add_item()
	{
		
		$this->load->view('add_item');
		$this->load->view('includes/footer');
	}

	public function add_new_item(){

		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('product_price', 'Product Price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run() == FALSE){
			$this->load->view('add_item');
			$this->load->view('includes/footer');
       	}

		else {

			//image
			$config['upload_path'] = './assets/img/products';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000'; //max resolution width
			$config['max_height'] = '2000';  //max resolution height

			$this->load->library('upload', $config);

			if($this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$image = 'no_image.png';
				
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$image = $_FILES['userfile']['name'];  			
			}

			$this->load->model('Dashboard_model');
	        $this->Dashboard_model->add_item($image);
	        $this->session->set_flashdata('success','Product is added');
			redirect('Dashboard/add_item');

		}
		
	}

	public function logout(){
		$this->session->unset_userdata($user_data);
		session_unset();
		redirect(base_url());
	}

	public function view_items()
	{
		$this->load->view('includes/loggedin_header');
		$data['allitems'] = $this->Dashboard_model->get_all_products();
		$this->load->view('product_table', $data);
		$this->load->view('includes/footer');		
	}

	public function edit_item($product_id)
	{
		if (isset($_POST['update'])) {

			if ($this->Dashboard_model->update($product_id)) {

				$this->session->set_flashdata('success','Product is updated');
				redirect('Dashboard' , 'refresh');

			} else {
				$this->session->set_flashdata('error','Product is not updated');
				redirect('Dashboard');
			}
		}
			$data['row'] = $this->Dashboard_model->edit($product_id);
			$this->load->view('edit_item',$data);
			$this->load->view('includes/footer');
	}

	public function remove_item($id)
	{
		// $id = $this->input->post('id');

		$this->Dashboard_model->delete_item($id);
		$this->session->set_flashdata('success','Product is deleted');
		redirect('Dashboard');

		// $delitem = $this->Dashboard_model->delete_item($id);		
	}

}