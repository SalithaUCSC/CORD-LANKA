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
            <h1 class="text-uppercase">
              <strong>WELCOME to CORD LANKA</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">You are at the ideal place for searching traditional items</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Start with us</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-dark" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
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
             <div class="card" style="width: 18rem;"><br>
              <img class="card-img-top" style="width: 200px;height: 200px; margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/products/product.png" alt="Card image cap"><br>
              <div class="card-body">
                <h5 class="card-title">Card title</h5><br>
                <a href="#" class="btn btn-dark">Go somewhere</a><br><br>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <div class="card" style="width: 18rem;"><br>
              <img class="card-img-top" style="width: 200px;height: 200px; margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/products/product.png" alt="Card image cap"><br>
              <div class="card-body">
                <h5 class="card-title">Card title</h5><br>
                <a href="#" class="btn btn-dark">Go somewhere</a><br><br>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             <div class="card" style="width: 18rem;"><br>
              <img class="card-img-top" style="width: 200px;height: 200px; margin: auto;display: block;" src="<?php echo base_url()?>/assets/img/products/product.png" alt="Card image cap"><br>
              <div class="card-body">
                <h5 class="card-title">Card title</h5><br>
                <a href="#" class="btn btn-dark">Go somewhere</a><br><br>
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
                  <div class="project-name">
                    Project Name
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
                  <div class="project-name">
                    Project Name
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
                  <div class="project-name">
                    Project Name
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
                  <div class="project-name">
                    Project Name
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
                  <div class="project-name">
                    Project Name
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
                  <div class="project-name">
                    Project Name
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
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
