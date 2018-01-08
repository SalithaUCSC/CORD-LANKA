<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}

?>


<div class="container" style="min-height: 500px; margin-top: 100px;">
	
	<a href="<?php echo base_url() ?>Dashboard/add_item "><button type='submit' class='btn btn-success'>Add New Item</button></a>

</div>