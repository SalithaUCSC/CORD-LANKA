<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Image_model');
		
	}

	public function index()
	{
		$this->load->view('add_item');
	}

	public function add_new_item()
	{
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('category_name', 'Product Category', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('add_item');
       	}

		else {

			//image
			$config['upload_path'] = './assets/img/products';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000'; //max resolution width
			$config['max_height'] = '2000';  //max resolution height

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$image = 'no_image.png';
				
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$image = $_FILES['userfile']['name'];  			
			}

			$this->load->model('Image_model');
	        $this->Image_model->add_item($image);
	        $this->session->set_flashdata('success','product is added');
			redirect('Add_Item');
		}
	}
}

/* End of file Image.php */
/* Location: ./application/models/Image.php */