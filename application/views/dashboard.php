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

    <footer class="py-5" style="background-color: black;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CODE LANKA (PVT) LTD 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    
    
    <!-- dataTables JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/creative.js"></script>

    <script>
      $(document).ready(function(){

            $('#pro_table').DataTable({
                "searching" : true
            });

            function checkDelete(){
                return confirm('Are you sure?');
            }       

            $('#searchBox').keyup(function(){   
                var keyword = $('#searchBox').val(); 
                // console.log(keyword); 
                if(keyword.length>0){            
                    $.ajax({
                        url: "<?php echo base_url() ?>products/check_product",  
                        method: "POST",
                        data: { keyword: keyword },                       
                        success:function(data){                            
                            $('#result').html(data);                              
                        },
                        dataType: "text"                
                    });                    
                }
            });

            $(document).on('click', 'li', function(){  
                var phone = $(this).text();
                console.log(phone);
                $('#searchBox').val(phone);
                $('#result').html("");          
            });
            $(document).on('click', 'body', function(){
                $('#result').html(""); 
            });

            $(document).on('click', '#search_btn', function(){  
                var pro_res = $('#searchBox').val();
                console.log(pro_res);
             $.ajax({
                url : "<?php echo base_url() ?>products/get_product_result",
                method : "POST",
                data: {searchBox: pro_res},
                success:function(data){
                     // console.log(data);
                    $('#pro_result').html(data);
                },
                dataType: "text"  

             });

            });

          $(document).on('change', '.btn-file :file', function() {
          var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [label]);
          });

          $('.btn-file :file').on('fileselect', function(event, label) {
              
              var input = $(this).parents('.input-group').find(':text'),
                  log = label;
              
              if( input.length ) {
                  input.val(log);
              } else {
                  if( log ) alert(log);
              }
            
          });
          function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  
                  reader.onload = function (e) {
                      $('#img-upload').attr('src', e.target.result);
                  }
                  
                  reader.readAsDataURL(input.files[0]);
              }
          }

          $("#imgInp").change(function(){
              readURL(this);
          });        

        });

    </script>
  </body>

</html>