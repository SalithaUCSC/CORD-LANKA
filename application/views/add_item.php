
<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}
?>


<<<<<<< HEAD
    <div class="container" style="min-height: 800px; margin-top: 100px;">
=======
    <div class="container" style="min-height: 500px; margin-top: 100px;">
>>>>>>> b7f76d8d475353cad06e474dd955b67d1ae8fa1e
      
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
            <?php echo form_open_multipart('Dashboard/add_new_item'); ?>
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
                <label for="exampleInputEmail1">Category -</label>
                <select class="form-control" name="user_type">
                  <option value="" selected="selected" disabled="disabled">Select Product Category</option>
                  <option value="manager">Woven Tapes</option>
                  <option value="site officer">Draw Cords</option>
                  <option value="accountant">Knitted Tapes</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Description -</label>
                <textarea type="text" name="description" class="form-control reserve-form empty iconified" id="description" rows="7" cols="48" placeholder="Enter text here..."></textarea>
              </div>
              <br>
              <center><button type="submit" class="btn btn-success">ADD Product</button></center><br>
              <center><a href="<?php echo base_url() ?>Dashboard" classs="btn btn-dark">Back to home</a></center>
               <?php echo form_close(); ?>
          </div>
          
        </div>
      </div>  
  </div>