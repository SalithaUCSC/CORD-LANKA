<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_all_products()
	{
		$this->db->select('*');
	    $this->db->order_by('product_id','DESC');
	    $query = $this->db->get('products');
	    return $query->result();
	}

	public function add_item($image)
	{
        $data = array(
        'product_id' => $this->input->post('product_id'),
        'product_name' => $this->input->post('product_name'),
        'description' => $this->input->post('description'),
        'product_price' => $this->input->post('product_price'),
        'image' =>$image
        );
        $this->db->insert('products',$data);			
	}

	public function delete_item($id)
	{
		  $this->db->where('product_id',$id);
	      $this->db->delete('products');		
	}
    public function edit($product_id) {

        $this->db->where('product_id',$product_id);
        $query = $this->db->get_where('products', array('product_id' => $product_id));
        return $query->row();

    }
	public function update($product_id)
	{
        $data = array(
        'product_id' => $this->input->post('product_id'),
        'product_name' => $this->input->post('product_name'),
        'description' => $this->input->post('description'),
        'product_price' => $this->input->post('product_price'),
        'image' => $this->input->post('image')
        );
        $this->db->where('product_id',$product_id);
        $this->db->update('products',$data);
        return $product_id;		
	}

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */