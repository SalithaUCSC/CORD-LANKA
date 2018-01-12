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
		<br><div class="col-lg-12"><h2 class="text-center">DRAW CORDS DESIGNED</h2></div><br><br><br>
	</div><br>
	<div class="row">
		<?php foreach ($draw as $item) : ?>
			<div class="col-lg-4">
				<center><img style="width: 150px;height: 150px;" src="<?php echo base_url() ?>/assets/img/products/<?php echo $item->image?>" class="img-thumbnail"></center><hr>
			</div>	
		<?php endforeach; ?>	

	</div>
	<br>
<br><br><br>
	<div class="row">
		<nav aria-label="Page navigation example" style="margin: auto;">
		    <ul class="pagination">
		    	<?php echo $link; ?>
		    </ul>
		</nav>
	</div>
	<br>
</div>