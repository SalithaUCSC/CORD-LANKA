<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/header.php';
}

?>
<!-- <main role="main" class="container" id="ph-container"> -->
	<div class="container" style="margin-top: 100px;min-height: 1000px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="jumbotron" style="height: 500px;">
					<div class="col-lg-6 col-md-12" style="float: left;">
						
						<img src="<?php echo base_url() ?>assets/img/products/<?php echo $row->image; ?>" style="width: 300px;height: 300px;">
					</div>
					<div class="col-lg-6 col-md-12" style="float: right;">
						<h2 id="card-head"><?php echo $row->product_name; ?></h2><br>
						<table class="table table-bordered">
							<tr>
								<td>Product Description: </td>
								<td><?php echo $row->description; ?></td>
							</tr>
							<tr>
								<td>Product Price: </td>
								<td><?php echo $row->product_price; ?></td>
							</tr>												
						</table>
					</div>				
				</div>
			
	        </div>
		</div>
		<br>
	</div>
<!-- </main> -->

