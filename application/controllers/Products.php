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
			$arr_res.='<li style="width:200px;" class="list-group-item text-center"> No records </li>';
		}
		else {
			foreach($resultset->result_array() as $row)
        	{
	          $arr_res .= '<li style="width:200px; position: absolute;
						  text-indent: 2px;
						  cursor: pointer;
						  z-index: 1000;
						  border: 1px solid #cccccc;
						  border: 1px solid rgba(0, 0, 0, 0.15);
						  border-radius: 4px;
						  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
						  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
						  background-clip: padding-box;" class="list-group-item">'.$row["product_name"].'</li>';
        	}
        	
		}			
 		echo $arr_res;
	}

	public function browse()
	{
        $this->load->library('pagination');
        $this->load->view('includes/inner_header');
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

	// public function pagination()
	// {
	// 	$this->load->library('pagination');
	// 	$config = array();
	// 	$config["base_url"] = "#";
	// 	$config['total_rows'] = $this->Products_model->get_product_count();
	// 	$config['per_page'] = 3;
	// 	 $config['uri_segment'] = 3;
	// 	$config['use_page_numbers'] = TRUE;
	// 	$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
	// 	$config['full_tag_close'] = '</ul><nav>';
 //        $config['first_tag_open'] = '<li class="page-item">';
 //        $config['first_tag_close'] = '</li>';
 //            $config['last_tag_open'] = '<li class="page-item">';
 //            $config['last_tag_close'] = '</li>';
 //            $config['next_link'] = '&gt';
 //            $config['next_tag_open'] = '<li class="page-item">';
 //            $config['next_tag_close'] = '</li>';
 //            $config['prev_link'] = '&lt';
 //            $config['pre_tag_open'] = '<li class="page-item">';
 //            $config['prev_tag_close'] = '</li>';
 //        $config['cur_tag_open'] = '<li class="page-item active"><a href="#">';
 //        $config['cur_tag_close'] = '</a></li>';
 //               $config['num_tag_open'] = '<li class="page-item">';
 //            $config['num_tag_close'] = '</li>';
 //            $config['num_links'] = 1;
 //            $this->pagination->initialize($config);
 //            $page = ($this->uri->segment(3));
 //            $start = ($page - 1)*$config["per_page"];

 //            $output = array(
 //            	'pagination_link' =>  $this->pagination->create_links(),
 //            	'products_div' => $this->Products_model->products_pagination($config["per_page"], $start)


 //            );

 //            echo jason_encode($output);



	// }
	public function product($product_id)
	{
		$data['row'] = $this->Products_model->get_a_product($product_id);
		$this->load->view('includes/header',$data);
		$this->load->view('product',$data);
		$this->load->view('includes/footer');
	
	}

	public function get_product_result()
	{

            $pro_res = $this->input->post('searchBox');

            if(isset($pro_res) and !empty($pro_res)){
                $records = $this->Products_model->get_search_product($pro_res);
                $output = '';
                foreach($records->result_array() as $row){
                	$output .= '<br>	
                		<center><div style="width:60%;height:80%;"><img style="width:50%;height:70%;" src="'.base_url().'assets/img/products/'.$row['image'].'"></div></center><br>
						 
						    <h5 class="text-center"">'.$row["product_name"].'</h5></a><br>
						    <a class="text-center" href="'.base_url().'products/product/'.$row['product_id'].'""><h6>See More Details</h6></a><br>
						    	<div class="text-left">
						    	<ul class="list-group">
							    	<li class="list-group-item"><b>Product Price</b> : '.$row["product_price"].'</li>
							    	<li class="list-group-item"><b>Product Description</b> : '.$row['description'].'</li>'
							    	
							    	;
                }
                $output .= '</ul></div>';
                echo $output;
            }
            else {
            	echo '<center><ul style="width: 200px;" class="list-group"><li class="list-group-item">'.'Select a product'.'</li></ul></center>';
            }
 
	}
}
