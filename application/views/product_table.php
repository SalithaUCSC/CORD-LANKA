<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}
?>
<div class="container" style="margin-top: 100px;">
    <div class="row">	            		            	
    	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px; margin-bottom: 100px;">
			<div class="text-center"><h2 id="card-head">Products List</h2></div><br>
			<br>
			<div class="row">													
				<div class="col-lg-2"></div>
					<div class="col-lg-8">	
						<!-- table to display data	 -->
						<table class="table table-striped table-hover" id="pro_table" style="margin-bottom: 100px;">
							<thead>
								<tr class="info">

										
									<th>Product</th>
									<th>Product ID</th>
									<th>Product Name</th>
									<th>Price</th>
									<th>Edit</th>
									<th>Remove</th>
																								
								</tr>
							</thead>
							<tbody id="userRow">
								<?php foreach ($allitems as $row) : ?>
								<tr>
									
									<td><img style="width:50px; height: 60px;" src="<?php echo base_url();?>assets/img/products/<?php echo $row->image; ?>"></td>	
									<td><?php echo $row->product_id ?></td>								
									<td><?php echo $row->product_name ?></td>
									<td><?php echo $row->product_price ?></td>
									<td><button class="btn btn-warning btn-sm">Update</button></td>
									<td><a href="<?php echo base_url('Dashboard/remove_item/'.$row->product_id) ?>" type="button" class="btn btn-danger btn-sm" onclick="return checkDelete()">Delete</a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
				</div>
				<div class="col-lg-2"></div>						
			</div>																				
    	</div>
	</div>
</div>

<div id="del_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete data</h4>
      	</div>
      	<div class="modal-body">
      		<h5 style="color: red;">Are you sure?</h5>
           <!--  <form method="POST" id="form_create">
			
			</form> -->
      	</div>
      	<div class="modal-footer">
	      	<button class="btn btn-danger" id="btn-delete" data-target="#del_modal">Yes</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      	</div>
    </div>
  </div>
</div>