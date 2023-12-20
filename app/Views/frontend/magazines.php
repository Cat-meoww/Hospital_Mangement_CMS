<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
  .hero-content{
    padding-bottom: 120px !important;

  }.hero-title{
  margin-top: 60px;
  }.maga-div1{
    margin-top: 30px;
  }
</style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img  src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
        <div class="container">
          <div class="hero-content" >
            <div class="row">
              <div class="col-12 col-lg-5">
                <h2 class="hero-title" >Our Magazines</h2>
               
                <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12 maga-div1" >
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                  <li class=""><a href="<?= base_url('magazines') ?>
                  
                  ">Our Magazines</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--
      ============================
      Blog Section
      ============================
      
      -->
    <section class="blog blog-grid" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="blog-entry" data-hover="">
              <div class="entry-img">
                
                <!-- End .entry-date--><a href=" <?= base_url('magazine-single') ?>"><img height="400"
                     src="<?= base_url('frontend/assets/images/magazines/gem-nalam-jan-thumbnail.jpeg') ?>"
                    alt="6 tips to protect your mental health when sick" /></a>
              </div>
              <!-- End .entry-img-->
              <div class="entry-content">

                <div class="entry-title">
                  <h4><a href=" <?= base_url('magazine-single') ?>">GEM Nalam</a></h4>
                </div>

                <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed"
                    href=" <?= base_url('magazine-single') ?>">
                    <div class="line"> <span> </span></div><span>See more</span>
                  </a></div>
              </div>
            </div>
            <!-- End .entry-content-->
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="blog-entry" data-hover="">
              <div class="entry-img">
               
                <!-- End .entry-date--><a href=" <?= base_url('magazine-single') ?>"><img height="400"
                    src="<?= base_url('frontend/assets/images/magazines/gem-nalam-feb-thumbnail.jpeg') ?>"
                    alt="6 tips to protect your mental health when sick" /></a>
              </div>
              <!-- End .entry-img-->
              <div class="entry-content">

                <div class="entry-title">
                  <h4><a href=" <?= base_url('magazine-single') ?>">GEM Nalam</a></h4>
                </div>

                <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed"
                    href=" <?= base_url('magazine-single') ?>">
                    <div class="line"> <span> </span></div><span>See more</span>
                  </a></div>
              </div>
            </div>
            <!-- End .entry-content-->
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="blog-entry" data-hover="">
              <div class="entry-img">
                
                <!-- End .entry-date--><a href=" <?= base_url('magazine-single') ?>"><img height="400"
                     src="<?= base_url('frontend/assets/images/magazines/gem-nalam-mar-thumbnail.jpeg') ?>"
                    alt="6 tips to protect your mental health when sick" /></a>
              </div>
              <!-- End .entry-img-->
              <div class="entry-content">

                <div class="entry-title">
                  <h4><a href=" <?= base_url('magazine-single') ?>">GEM Nalam</a></h4>
                </div>

                <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed"
                    href=" <?= base_url('magazine-single') ?>">
                    <div class="line"> <span> </span></div><span>See more</span>
                  </a></div>
              </div>
            </div>
            <!-- End .entry-content-->
          </div>


        </div>
        <!-- End .row-->
        <div class="row">
          <div class="col-12 clearfix text--center">
            <ul class="pagination">
              <li><a class="current" href="javascript:void(0)">1</a></li>
              <li><a href="javascript:void(0)">2</a></li>
              <li><a href="#" aria-label="Next"><i class="icon-arrow-right"></i></a></li>
            </ul>
          </div>
          <!-- End .col-lg-12-->
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>