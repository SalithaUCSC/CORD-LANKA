<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php if ($this->session->userdata('loggedin')) {
  include 'includes/loggedin_header.php';
}
else{
   include 'includes/header.php';
}

?>


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase" id="company-greeting">
              <strong>WELCOME to CORD LANKA</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto" id="slogan">
            <p class="text-faded mb-5">You are at the ideal place to get cords related items with attractive designs</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Start with us</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-dark" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">WHO ARE WE?</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">CODE LANKA is one of the best companies that manufactures and supplies Twill Tapes, Draw Cords, Polyester Cords, Piping Cords, Webbing Tapes, Mobilan Tapes, Elastic Tapes Dyeing and Tipping. We are ready to deliver you the best productions according to your designs and requirements...</p>
            <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
          </div>
        </div>
      </div>
    </section>

    <section id="services" style="margin-top: -80px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">OUR PRODUCTS</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" style="margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/woven.jpg" alt="Card image cap"><br>
              <div class="card-body">
                <a href="<?php echo site_url("Products/woven_tapes") ?>"><h5 class="card-title">WOVEN TAPES</h5></a><br>
                <!-- <a href="#" class="btn btn-dark">Go somewhere</a><br><br> -->
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" style="height:214px; margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/draw.jpg" alt="Card image cap"><br>
              <div class="card-body">
                <a href="<?php echo site_url("Products/draw_cords") ?>"><h5 class="card-title">DRAW CORDS</h5></a><br>
                <!-- <a href="#" class="btn btn-dark">Go somewhere</a><br><br> -->
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" style="margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/knitted.jpg" alt="Card image cap"><br>
              <div class="card-body">
                <a href="<?php echo site_url("Products/knitted_tapes") ?>"><h5 class="card-title">KNITTED TAPES</h5></a><br>
                <!-- <a href="#" class="btn btn-dark">Go somewhere</a><br><br> -->
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url() ?>assets/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <!-- <h2 class="mb-4">Free Download at Start Bootstrap!</h2> -->
        <a class="btn btn-light btn-xl sr-button" style="margin-top: -110px;" href="<?php echo base_url()?>Products/browse">SEE MORE</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Get In Touch With US!</h2>
            <hr class="my-4">
            <p class="mb-5">Call or Mail us to get designed and delivered your orders</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+94382240413</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">cordlank@yahoo.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
