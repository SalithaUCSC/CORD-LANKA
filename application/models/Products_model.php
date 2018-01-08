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
        $this->db->select("COUNT(*) as num_row");
        $this->db->from('products');
        $this->db->order_by('product_id');
        $query = $this->db->get();
        $result = $query->result();
        return $result[0]->num_row;		
	}

	public function products_pagination($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();		
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

