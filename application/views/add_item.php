
<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}
?>


<div class="container" style="min-height: 500px; margin-top: 100px;">

	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('Dashboard/add_new_item'); ?>

	<div class="row">
		<div class="col-lg-5 mb-4">
			<label>Upload Image</label>
	        <div class="input-group">
	            <span class="input-group-btn">
	                <span class="btn btn-default btn-file">
	                    Browse… <input type="file" id="imgInp" name="userfile">
	                </span>
	            </span>
	            <input type="text" class="form-control" readonly>
	        </div>
	        <img id='img-upload'/>
		</div>


        <div class="col-lg-6 mb-4">
			<div class="form-group">
			    <label for="exampleInputEmail1">Product Name -</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Eg: Woven Non Elastic Tape" name="product_name">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Price -</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rs. 5000.00" name="product_price">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Description -</label>
			    <textarea type="text" name="description" class="form-control reserve-form empty iconified" id="description" rows="7" cols="48" placeholder=" Enter text here..."></textarea>
			  </div>
			  <br>
			  <center><button type="submit" class="btn btn-success">ADD Product</button></center>
		</div>
	</div>


  	<?php echo form_close(); ?>
</div>