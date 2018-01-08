<div class="container" style="margin-top: 100px;">
	<h2>OUR PRODCUTS</h2>
	<br><br>
	<div class="row">
		<?php foreach ($product_items as $item) : ?>
			<div class="col-lg-4">
				<div class="card" style="width: 18rem; margin-bottom: 20px;"><br>
				  <center><img class="card-img-top" style="width: 120px;height: 150px;" src="<?php echo base_url() ?>/assets/img/products/<?php echo $item->image?>" alt="Card image cap"></center>	
				  <div class="card-body">
				    <h5 class="card-title text-center"><?php echo $item->product_name?></h5>
				    <h6 class="text-center">Rs. <?php echo $item->product_price?></h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="<?php echo base_url() ?>Products/product/<?php echo $item->product_id?>" class="btn btn-primary">View Details</a>
				  </div>
				</div>
			</div>	
		<?php endforeach; ?>
		<?php echo $link; ?>


		<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
	</div>
</div>