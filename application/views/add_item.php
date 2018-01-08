


<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}

?>


<div class="container">
	<div class="form-group">
	    <label for="exampleInputEmail1">Title</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Customer ID</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer ID" name="cus_id">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Short Description</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text here..." name="shortDescription">
	  </div>
	  
	  <div class="form-group">
	    <label for="exampleInputEmail1">Long Description</label>
	    <!-- <textarea rows="7" cols="48" name="longDescription" form="usrform" placeholder=" Enter text here..."></textarea> -->
	    <textarea type="text" name="longDescription" class="form-control reserve-form empty iconified" id="longDescription" rows="7" cols="48" placeholder=" Enter text here..."></textarea>
	  </div>
</div>