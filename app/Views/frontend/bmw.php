<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
    .owl-nav{
      display: none !important;
    }.hero-content{
      padding-bottom: 115px !important;

    }.hero-title{
      margin-top: 60px;

    }.bmw-div1{
      margin-top: 25px;
    }.bmw-head1{
      color: #0D3E21 !important;
    }.bmw-para1{
      color: #118B0F !important;

    }
  </style>


<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img  src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content" > 
            <div class="row"> 
              <div class="col-12 col-lg-5">
                <h2 class="hero-title" >BMW Report</h2>
                <p class="hero-desc"></p>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12 bmw-div1" > 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                  <li class=""><a href="<?= base_url('bmw') ?>">BMW Report</a></li>
                </ol>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    <!--
      ============================
      About #1 Section
      ============================
      -->
          <section class="services services-2" id="services-2">
        <div class="bg-section"><img src="assets/images/background/pattern.png" alt="background"/></div>
        <div class="container">
          <div class="row">
            <div class="">
              <div class="heading heading-7">
                <p class="heading-subtitle bmw-para1" >Monthly</p>
                <h2 class="heading-title bmw-head1" >BMW Report</h2>
              </div>
            </div>
            <!-- End .col-lg-6-->
          </div>
          <!-- End .row-->
          <div class="row">
            <div class=" col-12 col-md-6 col-lg-4">
              <div class="service-panel service-panel-2" data-hover="">
                <div class="service-panel-holder">
                  <div class="service-content"> 
                    <div class="service-title">
                      <h4><a href="#">April 2023</a></h4>
                    </div>
                    <div class="service-desc">
                      <p>Bio Medical Waste Report for the month of April 2023</p>
                    </div>
                    <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line"> <span></span></span><span>View Report</span></a></div>
                  </div>
                  <!-- End .service-content -->
                </div>
                <!-- End .service-item-holder-->
              </div>
            </div>
            <div class=" col-12 col-md-6 col-lg-4">
              <div class="service-panel service-panel-2" data-hover="">
                <div class="service-panel-holder">
                  <div class="service-content"> 
                    <div class="service-title">
                      <h4><a href="#">May 2023</a></h4>
                    </div>
                    <div class="service-desc">
                      <p>Bio Medical Waste Report for the month of May 2023</p>
                    </div>
                    <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line"> <span></span></span><span>View Report</span></a></div>
                  </div>
                  <!-- End .service-content -->
                </div>
                <!-- End .service-item-holder-->
              </div>
            </div>
            <div class=" col-12 col-md-6 col-lg-4">
              <div class="service-panel service-panel-2" data-hover="">
                <div class="service-panel-holder">
                  <div class="service-content">                     
                    <div class="service-title">
                      <h4><a href="#">June 2023</a></h4>
                    </div>
                    <div class="service-desc">
                      <p>Bio Medical Waste Report for the month of June 2023</p>
                    </div>
                    <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line"> <span></span></span><span>View Report</span></a></div>
                  </div>
                  <!-- End .service-content -->
                </div>
                <!-- End .service-item-holder-->
              </div>
            </div>
          </div>
          <!-- End .row-->
          
        </div>
        <!-- End .container-->
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>