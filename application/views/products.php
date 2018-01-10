<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/header.php';
}

?>
<div class="container" style="margin-top: 100px;min-height: 1000px;">
	<div class="row">
		<div class="col-lg-8"><h2 id="card-head">All Products</h2></div><br><br><br>
		<div class="col-lg-4">
			 <form method="POST" class="form-inline">
				<input style="width: 200px;font-family: 'Oswald', sans-serif;margin-right: 10px;" id="searchBox" type="text" placeholder="insert at least 2 characters" name="searchBox" class="form-control" style="margin-right: 60px;">
				<a name="search_btn" id="search_btn" data-toggle="modal" data-target="#productModal" class="btn btn-primary">search</a>
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
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <center><a href="<?php echo base_url() ?>Products/product/<?php echo $item->product_id?>" class="btn btn-primary">View Details</a></center>	
				  </div>
				</div>
			</div>	
		<?php endforeach; ?>	
	</div>
	<br>

	<div class="row">
		<nav aria-label="Page navigation example" style="margin: auto;">
		    <ul class="pagination">
		    	<?php echo $link; ?>
		    </ul>
		</nav>
	</div>
	<br>
</div>

<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="phoneModalLabel">Product Results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div id="pro_result"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
