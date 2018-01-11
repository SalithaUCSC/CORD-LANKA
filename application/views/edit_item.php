
<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}
?>


<div class="container" style="min-height: 800px; margin-top: 100px;">

	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('Dashboard/edit_item/'.$row->product_id); ?>

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
	        <img id='img-upload' src="<?php echo base_url() ?>assets/img/products/<?php echo $row->image ?>">
		</div>

 
        <div class="col-lg-6 mb-4">
        	<div class="form-group">
			    <label>Product ID -</label>
			    <input type="text" class="form-control" name="product_id" value="<?php echo $row->product_id ?>" readonly>
			  </div>
			<div class="form-group">
			    <label>Product Name -</label>
			    <input type="text" class="form-control" name="product_name" value="<?php echo $row->product_name ?>">
			  </div>

			  <div class="form-group">
			    <label>Price -</label>
			    <input type="text" class="form-control" name="product_price" value="<?php echo $row->product_price ?>">
			  </div>
			  
			  <div class="form-group">
			    <label>Description -</label>
			    <textarea type="text" name="description" class="form-control reserve-form empty iconified" id="description" rows="7" cols="48"><?php echo $row->description ?></textarea>
			  </div>
			  <br>
			  <center>
			  	<button type="submit" name="update" class="btn btn-success">UPDATE Product</button><br><br>
			  	<a href="<?php echo base_url() ?>Dashboard" classs="btn btn-dark">Back to home</a>
			  </center>
		</div>
	</div>


  	<?php echo form_close(); ?>
</div>