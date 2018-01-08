
    <footer class="py-5" style="background-color: black;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CODE LANKA (PVT) LTD 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- dataTables JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/creative.min.js"></script>

    <script>
      $(document).ready(function(){
          // function load_products(page)
          // {
          //   $.ajax({
          //     url: "<?php echo base_url() ?>Products/pagination"+page,
          //     method: "GET",
          //     dataType: "json",
          //     success: function(data){
          //       $('#products_div').html(data.products_div);
          //       $('#pagination_link').html(data.pagination_link);

          //     }
          //   })
          // }

          // load_products(1);

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
      });
    </script>
  </body>

</html>
