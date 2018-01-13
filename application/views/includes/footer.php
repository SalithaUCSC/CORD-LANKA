
    <footer class="py-5" style="background-color: black;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CORD LANKA (PVT) LTD 2018</p>
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
    <script src="<?php echo base_url() ?>assets/js/lightbox-plus-jquery.min.js"></script>
    
    <script>
      $(document).ready(function(){

            // $('#pro_table').DataTable({
            //     "searching" : true
            // });

            function checkDelete(){
                return confirm('Are you sure?');
            }       

            $(function() {
            // OPACITY OF BUTTON SET TO 0%
            $(".roll").css("opacity","0");
             
            // ON MOUSE OVER
            $(".roll").hover(function () {
             
            // SET OPACITY TO 70%
            $(this).stop().animate({
            opacity: .7
            }, "fast");
            },
                          
             
            // ON MOUSE OUT
            function () {
             
            // SET OPACITY BACK TO 50%
            $(this).stop().animate({
            opacity: 0
            }, "slow");
            });
            });


            $(function() {
            // OPACITY OF BUTTON SET TO 0%
            $(".roll-2").css("opacity","0");
             
            // ON MOUSE OVER
            $(".roll-2").hover(function () {
             
            // SET OPACITY TO 70%
            $(this).stop().animate({
            opacity: .7
            }, "fast");
            },
                          
             
            // ON MOUSE OUT
            function () {
             
            // SET OPACITY BACK TO 50%
            $(this).stop().animate({
            opacity: 0
            }, "slow");
            });
            });

            $('#searchBox').keyup(function(){   
                var keyword = $('#searchBox').val(); 
                // console.log(keyword); 
                if(keyword.length>0){            
                    $.ajax({
                        url: "<?php echo base_url() ?>products/check_product",  
                        method: "POST",
                        data: { keyword: keyword },                       
                        success:function(data){      
                            console.log(keyword);                      
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
