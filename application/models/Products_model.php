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
        $query = $this->db->get('products');
        return $query->num_rows();
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

	public function get_woven_count()
	{        
        $this->db->where('category_name', 'woven tapes');
        $query = $this->db->get('products');
        return $query->num_rows();
	}

	public function woven_tapes_pagination($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->where('category_name', 'woven tapes');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();	
    }

	public function get_draw_count()
	{        
        $this->db->where('category_name', 'draw cords');
        $query = $this->db->get('products');
        return $query->num_rows();
	}

	public function draw_cords_pagination($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->where('category_name', 'draw cords');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();	
    }

	public function get_knitted_count()
	{        
        $this->db->where('category_name', 'knitted tapes');
        $query = $this->db->get('products');
        return $query->num_rows();
	}

	public function knitted_tapes_pagination($limit, $start)
	{
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->where('category_name', 'knitted tapes');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $result = $query->result();	
    }


	public function search_product($keyword)
	{
		$this->db->select('*');
		$this->db->like('category_name', $keyword, 'after');
		$res = $this->db->get('products');
		return $res;		
	}

	public function get_search_product($pro_res)
	{
		$this->db->select('*');
		$this->db->where('category_name',$pro_res);
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

