<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/inner_header.php';
}

?>
<div class="container" style="margin-top: 100px;min-height: 800px;">
	<div class="row">
		<div class="col-lg-12"><h2 class="text-center">WOVEN TAPES</h2></div><br><br><br>
	</div><br>
	<div class="row">
		<?php foreach ($woven as $item) : ?>
			<div class="col-lg-4">
				<img src="..." class="rounded" alt="...">
				<!-- <div class="card" style="width: 22rem; margin-bottom: 20px;"><br>
				  <center><img class="card-img-top" style="width: 120px;height: 150px;" src="<?php echo base_url() ?>/assets/img/products/<?php echo $item->image?>" alt="Card image cap"></center>	
				  <div class="card-body"> -->
				    <h5 class="card-title text-center"><?php echo $item->product_name?></h5>
				<!--     <h6 class="text-center">Rs. <?php echo $item->product_price?></h6>
				    <p class="card-text text-center"><?php echo $item->description?></p>
				    <center><a href="<?php echo base_url() ?>Products/product/<?php echo $item->product_id?>" class="btn btn-info btn-sm">View Details</a></center>	
				  </div>
				</div> -->
			</div>	
		<?php endforeach; ?>	
	</div>
	<br>

	<div class="row">
		<nav aria-label="Page navigation example" style="margin: auto;">
		    <ul class="pagination">
		    	<!-- <?php echo $link; ?> -->
		    </ul>
		</nav>
	</div>
	<br>
</div>