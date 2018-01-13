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
		$data['allitems'] = $this->Dashboard_model->get_all_products();
		$this->load->view('dashboard', $data);	
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

		$this->Dashboard_model->delete_item($id);
		$this->session->set_flashdata('success','Product is deleted');
		redirect('Dashboard');	
	}

}