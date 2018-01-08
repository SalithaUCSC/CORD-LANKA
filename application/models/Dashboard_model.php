<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_all_products()
	{
		$this->db->select('*');
	    $this->db->order_by('product_id','DESC');
	    $query = $this->db->get('products');
	    return $query->result();
	}

	function delete_item($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->delete('products');		
	}

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */