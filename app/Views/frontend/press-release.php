<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
  .hero-content{
    padding-bottom: 120px !important;
  }.hero-title{
    margin-top: 60px;
  }.press-div1{
    margin-top:30px;

  }

  </style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
        <div class="container">
          <div class="hero-content" >
            <div class="row">
              <div class="col-12 col-lg-5">
                <h2 class="hero-title" >Press Release</h2>
               
                <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12 press-div1" >
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                  <li class=""><a href="<?= base_url('press-release') ?>">Press Release</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!--
      ============================
      Gallery Section
      ============================
      -->
        <section class="team team-gallery">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-12 text-center">
                            <p class="heading-subtitle">The Best Medical And General Practice Care!</p>
                            <h2 class="heading-title">Providing Medical Care For Our Community.</h2>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="heading heading-12 text-center">
                            <p class="heading-subtitle">Domino Living Donor Liver Transplantation</p>
                        </div>
                        <div class="team-member-holder  d-flex justify-content-center" data-hover="">
                            <video class="elementor-video" height="400"
                                src="https://gem.verse.net.in/wp-content/uploads/2023/06/Domino-press-meet.mp4"
                                controls="" preload="metadata" controlslist="nodownload"
                                poster="https://gem.verse.net.in/wp-content/uploads/2023/06/gem-thumbnail.jpg"></video>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="heading heading-12 text-center">
                            <p class="heading-subtitle">Inaugurated Cancer Expo & launches vayiru360.com</p>
                        </div>
                        <div class="team-member-holder  d-flex justify-content-center" data-hover="">
                            <video class="elementor-video " height="400"
                                src="https://gem.verse.net.in/wp-content/uploads/2023/06/press-meet-vayiru.mp4"
                                controls="" preload="metadata" controlslist="nodownload"
                                poster="https://gem.verse.net.in/wp-content/uploads/2023/06/gem-thumbnail.jpg"></video>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    
                </div>
                
            </div>
        </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>