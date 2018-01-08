<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
		
	}

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function browse()
	{


            $this->load->library('pagination');
            $this->load->view('includes/inner_header');
            $config['base_url'] = 'http://localhost/Projects/CodeLanka/Products/browse';
            $config['total_rows'] = $this->Products_model->get_product_count();
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;
            $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
            $config['full_tag_close'] = '</ul><nav>';
            $config['attributes'] = array('class' => 'page_link');
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'Newer';
            $config['prev_tag_open'] = '<li class="page-item>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Older';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
            $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $this->pagination->initialize($config);
            $data['link'] = $this->pagination->create_links();
            $data['product_items'] = $this->Products_model->products_pagination($config['per_page'], $page);
            // $data['message'] = '';
            // $this->load->view('pages/User/scholarships_page', $data);

		
		// $data['products'] = $this->Products_model->get_all_products();
			$this->load->view('products', $data);
	}

	public function product($product_id)
	{
		$data['row'] = $this->Products_model->get_a_product($product_id);
		$this->load->view('includes/header',$data);
		$this->load->view('product',$data);
		$this->load->view('includes/footer');
	}
}
