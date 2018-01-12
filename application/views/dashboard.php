<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}

?>

<div class="container" style="min-height: 500px; margin-top: 100px;">
	
	

    	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px; margin-bottom: 100px;">
    		<?php if ($this->session->flashdata('success')) {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php  } ?>
            <br>
            <div class="row">
            	<div class="col-lg-6">
					<center><div class="text"><h2 id="card-head">PRODUCTS LIST</h2></div></center>
				</div>
				<div class="col-lg-6">
					<a href="<?php echo base_url() ?>Add_Item"><button class='btn btn-dark' style="float: right;margin-right: 30px;">Add New Item</button></a>
				</div>
			</div>
			<br>
			<br>
			<div class="row">													
				<!-- <div class="col-lg-2"></div> -->
					<div class="col-lg-12">	
						<!-- table to display data	 -->
						<table class="table table-striped table-hover" id="pro_table" style="margin-bottom: 100px;">
							<thead>
								<tr class="info">

										
									<th class="text-center">Product</th>
									<th class="text-center">Product Name</th>
									<th class="text-center">Category Name</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Remove</th>
																								
								</tr>
							</thead>
							<tbody id="userRow">
								<?php foreach ($allitems as $row) : ?>
								<tr>
									
									<td class="text-center"><img style="width:50px; height: 60px;" src="<?php echo base_url();?>assets/img/products/<?php echo $row->image; ?>"></td>								
									<td class="text-center"><?php echo $row->product_name ?></td>
									<td class="text-center"><?php echo $row->category_name ?></td>
									<td class="text-center"><a class="btn btn-warning btn-sm" href="<?php echo base_url();?>Dashboard/edit_item/<?php echo $row->product_id ?>" name="update">Update</a></td>
									<td class="text-center"><a href="<?php echo base_url();?>Dashboard/remove_item/<?php echo $row->product_id ?>"><button type="button" class="btn btn-danger btn-sm btn-confirm" onclick="return checkDelete()">Delete</button></a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
				</div>
				<!-- <div class="col-lg-2"></div>						 -->
			</div>																				
    	</div>

</div>