<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/header.php';
}

?>
<img src="..." class="rounded float-left" alt="...">
<div class="container" style="margin-top: 100px;min-height: 800px;">
	<div class="row">
		<div class="col-lg-8"><h2 id="card-head">All Products</h2></div><br><br><br>
		<div class="col-lg-4">
			 <form method="POST" class="form-inline">
				<input style="width: 200px;font-family: 'Oswald', sans-serif;margin-right: 10px;" id="searchBox" type="text" placeholder="insert at least 2 characters" name="searchBox" class="form-control">
				<a name="search_btn" id="search_btn" data-toggle="modal" data-target="#productModal" class="btn btn-outline-info">search</a>
			 </form>
		    <div id="result"></div>
        </div>
	</div><br>
	<div class="row">
		<?php foreach ($product_items as $item) : ?>
			<div class="col-lg-4">
				<div class="card" style="width: 22rem; margin-bottom: 20px;"><br>
				  <center><img class="card-img-top" style="width: 120px;height: 150px;" src="<?php echo base_url() ?>/assets/img/products/<?php echo $item->image?>" alt="Card image cap"></center>	
				  <div class="card-body">
				    <h5 class="card-title text-center"><?php echo $item->product_name?></h5>
				    <h6 class="text-center">Rs. <?php echo $item->product_price?></h6>
				    <p class="card-text text-center"><?php echo $item->description?></p>
				    <center><a href="<?php echo base_url() ?>Products/product/<?php echo $item->product_id?>" class="btn btn-info btn-sm">View Details</a></center>	
				  </div>
				</div>
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