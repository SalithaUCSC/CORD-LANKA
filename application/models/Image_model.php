<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model {

	public function add_item($image)
	{
        $data = array(
        'product_name' => $this->input->post('product_name'),
        'category_name' => $this->input->post('category_name'),
        'image' =>$image
        );
        $this->db->insert('products',$data);			
	}
}

/* End of file Image_model.php */
/* Location: ./application/models/Image_model.php */