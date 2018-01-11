<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Code Lanka</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/creative.css" rel="stylesheet">

    <!-- dataTabales CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css">

    <script language="JavaScript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you sure?');
        }
        </script>


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: black;">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>">CODE LANKA (Pvt) Ltd.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Dashboard/logout">Logout</a>
            </li>             
          </ul>
        </div>
      </div>
    </nav>

  <body id="page-top">

    <div class="container" style="min-height: 800px; margin-top: 100px;">
      
      <div class="col-lg-12">
        <div class="row">

          <div class="col-lg-6 mb-4">
            <!-- validation message for a successful submission -->
            <?php if ($this->session->flashdata('success')) {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php  } ?>

            <!-- validation messages for taking inputs -->
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>','</div>');
            ?>
            <?php echo form_open_multipart('Image/add_new_item'); ?>
            <label>Upload Image</label>
                  <div class="input-group">
                      <span class="input-group-btn">
                          <span class="btn btn-default btn-file">
                              Browse… <input type="file" id="imgInp" name="userfile">
                          </span>
                      </span>
                      <input type="text" class="form-control" readonly>
                  </div>  
                <img id='img-upload'/>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Product Name -</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Eg: Woven Non Elastic Tape" name="product_name">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Price -</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rs. 5000.00" name="product_price">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Description -</label>
                <textarea type="text" name="description" class="form-control reserve-form empty iconified" id="description" rows="7" cols="48" placeholder=" Enter text here..."></textarea>
              </div>
              <br>
              <center><button type="submit" class="btn btn-success">ADD Product</button></center>
               <?php echo form_close(); ?>
          </div>
          
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
    <script src="<?php echo base_url() ?>assets/js/creative.min.js"></script>


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
                // console.log(com);
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



        // $('#userRow').on('click','.btn-confirm', function(){
        //   var id = $(this).attr('dataid');
        //   $('#del_modal').data('id',id).modal('show');
        // });

        // $('#btn-delete').on('click', function(){
        //   var id = $('#del_modal').data('id');
        //   $.ajax({
        //     url: "<?php echo base_url()?>Dashboard/remove_item",
        //     method: "POST",
        //     data:{id:id},
        //     dataType: 'json',
        //     success: function(data){
        //       alert('deleted');
        //       //remove the row
        //       $('#rowId-'+id).remove();
        //       //hide the modal
        //       $('#del_modal').modal('hide');        
        //     },
        //     error: function() {
        //       alert('error');
        //       $('#del_modal').modal('hide');  
        //     }
        //   });
        // });         

        });

    </script>
  </body>

</html>

</body>
</html>