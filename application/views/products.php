<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/inner_header.php';
}

?>
<div class="container" style="margin-top: 100px;min-height: 800px;">
	<div class="row">
		<div class="col-lg-8"><h2 id="card-head">All Products</h2></div><br><br><br>
		<div class="col-lg-4">
			 <form method="POST" class="form-inline">
				<input style="width: 250px;font-family: 'Oswald', sans-serif;margin-right: 10px;" id="searchBox" type="text" placeholder="insert at least 2 characters" name="searchBox" class="form-control">
				<a name="search_btn" id="search_btn" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info">search</a>

			 </form>
		    <div id="result"></div>
        </div>
	</div><br>
	<div class="row">
		<?php foreach ($product_items as $item) : ?>
			<div class="col-lg-4">
				<div class="card" style="width: 22rem; margin-bottom: 20px;"><br>
				  <center><img class="card-img-top" style="width: 120px;height: 150px;" src="<?php echo base_url() ?>/assets/img/products/<?php echo $item->image?>" alt="Card image cap"></center>	
				  <div class="card-body"><hr>
				    <!-- <h5 class="card-title text-center"><?php echo $item->product_name?></h5> -->
				    <h5 class="text-center"><?php echo $item->category_name?></h5>
				    <!-- <p class="card-text text-center"><?php echo $item->description?></p> -->
				    <!-- <center><a href="<?php echo base_url() ?>Products/product/<?php echo $item->product_id?>" class="btn btn-info btn-sm">View Details</a></center>	 -->
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

<div class="modal fade bd-example-modal-lg" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 60px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pro-result-head" id="phoneModalLabel">Product Results</h5>
        <center><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
        </button>
      </div>
      <div class="modal-body">
      	
	      <div id="pro_result"></div>
	    <!-- </div> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
