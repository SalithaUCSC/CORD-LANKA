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

	public function check_product()
	{
		$arr_res='';
		$keyword = $this->input->post('keyword');
		$resultset = $this->Products_model->search_product($keyword);
		
		if($resultset->num_rows()<=0) {
			$arr_res.='<li style="width:250px;" class="list-group-item text-center"> No records </li>';
		}
		else {
			foreach($resultset->result_array() as $row)
        	{
	          $arr_res .= '<li style="width:250px; position: absolute;
						  text-indent: 2px;
						  cursor: pointer;
						  z-index: 1000;
						  border: 1px solid #cccccc;
						  border: 1px solid rgba(0, 0, 0, 0.15);
						  border-radius: 4px;
						  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
						  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
						  background-clip: padding-box;" class="list-group-item">'.$row["category_name"].'</li>';
        	}
        	
		}			
 		echo $arr_res;
	}

	public function browse()
	{
        $this->load->library('pagination');
        // $this->load->view('includes/inner_header');
        $config['base_url'] = 'http://localhost/Projects/CodeLanka/Products/browse';
        $config['total_rows'] = $this->Products_model->get_product_count();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
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
		$this->load->view('products', $data);
		$this->load->view('includes/footer');
	}

	public function woven_tapes()
	{
		$this->load->view('includes/woven_corausel');
        $this->load->library('pagination');
        // $this->load->view('includes/inner_header');
        $config['base_url'] = 'http://localhost/Projects/CodeLanka/Products/woven_tapes';
        $config['total_rows'] = $this->Products_model->get_woven_count();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
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
        $data['woven'] = $this->Products_model->woven_tapes_pagination($config['per_page'], $page);
		$this->load->view('woven_tapes', $data);
		$this->load->view('includes/footer');
	}

	public function draw_cords()
	{
        $this->load->library('pagination');
        // $this->load->view('includes/inner_header');
        $config['base_url'] = 'http://localhost/Projects/CodeLanka/Products/draw_cords';
        $config['total_rows'] = $this->Products_model->get_draw_count();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
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
        $data['draw'] = $this->Products_model->draw_cords_pagination($config['per_page'], $page);
		$this->load->view('draw_cords', $data);
		$this->load->view('includes/footer');
	}

	public function knitted_tapes()
	{
        $this->load->library('pagination');
        // $this->load->view('includes/inner_header');
        $config['base_url'] = 'http://localhost/Projects/CodeLanka/Products/knitted_tapes';
        $config['total_rows'] = $this->Products_model->get_knitted_count();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
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
        $data['knitted'] = $this->Products_model->knitted_tapes_pagination($config['per_page'], $page);
		$this->load->view('knitted_tapes', $data);
		$this->load->view('includes/footer');
	}
	public function product($product_id)
	{
		$data['row'] = $this->Products_model->get_a_product($product_id);
		// $this->load->view('includes/header');
		$this->load->view('product',$data);
		$this->load->view('includes/footer');
	
	}

	public function get_product_result()
	{

            $pro_res = $this->input->post('searchBox');

            if(isset($pro_res) and !empty($pro_res)){
                $records = $this->Products_model->get_search_product($pro_res);
                $output = '<center><div class="row">';
                foreach($records->result_array() as $row){
                	$output .= '<br>	
                		<div class="col-md-4"><img class="img-thumbnail" style="width:80%;height:100%;" src="'.base_url().'assets/img/products/'.$row['image'].'"></div>';
                }
                $output .= '</div><br></center>';
                echo $output;
            }
            else {
            	echo '<center><ul style="width: 250px;" class="list-group"><li class="list-group-item">'.'Select a product'.'</li></ul></center>';
            }
 
	}

}
