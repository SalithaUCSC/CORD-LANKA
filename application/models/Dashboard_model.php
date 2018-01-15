<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_all_products()
	{
		$this->db->select('*');
	    $this->db->order_by('product_id','DESC');
	    $query = $this->db->get('products');
	    return $query->result();
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
        //image
        $config['upload_path'] = './assets/img/products';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2014';
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

        $data = array(
        'product_name' => $this->input->post('product_name'),
        'category_name' => $this->input->post('category_name'),
        'image' => $image
        );
        
        $this->db->where('product_id',$product_id);
        $this->db->update('products',$data);
        return $product_id;		
	}

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */