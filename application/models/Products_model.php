<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function get_all_products()
	{
		$this->db->select('*');
	    $this->db->order_by('product_id','DESC');
	    $query = $this->db->get('products');
	    return $query->result();
	}

	public function get_a_product($product_id)
	{
		$this->db->where('product_id',$product_id);
        $query = $this->db->get_where('products', array('product_id' => $product_id));
        return $query->row();		
	}

	public function get_product_count()
	{
        // $this->db->select("COUNT(*) as num_row");
        // $this->db->from('products');
        // $this->db->order_by('product_id');
        $query = $this->db->get('products');
        return $query->num_rows();
        // $result = $query->result();
        // return $result[0]->num_row;		
	}

	public function products_pagination($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();	

 //        $output = '';
 //        $this->db->select('*');
 //        $this->db->from('products');
 //        $this->db->order_by('product_id','DESC');
 //        $this->db->limit($limit, $start);
 //        $query = $this->db->get();

 //        foreach ($product_items as $item) {

 //        $output .= '
			
						
	// 			<div class="card" style="width: 18rem; margin-bottom: 20px;"><br>
	// 			  <center><img class="card-img-top" style="width: 120px;height: 150px;" src="'.base_url().'/assets/img/products/'.$item->image.'" alt="Card image cap"></center>	
	// 			  <div class="card-body">
	// 			    <h5 class="card-title text-center">'.$item->product_name.'</h5>
	// 			    <h6 class="text-center">Rs.'.$item->product_price.'</h6>
	// 			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
	// 			    <a class="btn btn-primary">View Details</a>
	// 			  </div>
	// 			</div>
						
 //        ';

 //        return $output;
 //    }

	}

	public function search_product($keyword)
	{
		$this->db->select('*');
		$this->db->like('product_name', $keyword, 'after');
		$res = $this->db->get('products');
		return $res;		
	}

	public function get_search_product($pro_res)
	{
		$this->db->select('*');
		$this->db->where('product_name',$pro_res);
		$res2 = $this->db->get('products');
		return $res2;
	}

	public function add_item($image){

		$data = array(

		    'product_name' => $this->input->post('product_name', TRUE),
		    'product_price' => $this->input->post('product_price',TRUE),
		    'description' => $this->input->post('description',TRUE),
		    'image' => $image
		    );

	    $this->db->insert('products',$data);
	}
}

