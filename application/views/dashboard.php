<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   redirect('Login');
}

?>


<div class="container" style="min-height: 500px; margin-top: 100px;"></div>