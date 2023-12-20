<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
    .owl-nav{
      display: none !important;
    }
    .hero-content{
      padding-bottom: 75px !important;

    }
    .board-div1{
      margin-top:50px;

    }
  </style>


<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content"> 
            <div class="row"> 
              <div class="col-12 col-lg-5 board-div1">
                <h2 class="hero-title">Board Of Directors</h2>
                <p class="hero-desc">The name GEM Hospital was derived from Gastroenterology and Medical Centre and true to its name.</p>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12"> 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class=""><a href="<?= base_url('board-director')?>">Board Of Directors</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--
      ============================
      Team Grid Section
      ============================
      -->
      <section class="team team-grid" id="teamGrid">
        <div class="container">
          <div class="row" id="team-all">
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img src="<?= base_url('frontend/assets/images/team/grid/27.jpg') ?>"alt="team member"/>
                                <!---<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Prof.C.Palanivelu</a></h4>
                                </div>
                                <!----<div class="team-cat"><a href="javascript:void(0)">Cardiology Specialist</a></div>--->
                                <div class="team-desc">
                                  <p>MS, MCh, DNB, FACS, FRCS(Hon) Ed.,Chairman – GEM Hospital and Research Centre.</p>
                                </div>
                                <!----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>---->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img src="<?= base_url('frontend/assets/images/team/grid/22.jpg') ?>" alt="team member"/>
                               <!---<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Dr.P.Praveen Raj</a></h4>
                                </div>
                                <!----<div class="team-cat"><a href="javascript:void(0)">Dermatologists</a></div>--->
                                <div class="team-desc">
                                  <p>MS, DNB, Fellowship in Bariatric Surgery, Ph.D., FACS, FALS, FMAS, FICS, FIBC,Chief
                                   Executive Officer– GEM Hospital and Research Centre</p>
                                </div>
                                <!----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>---->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img  src="<?= base_url('frontend/assets/images/team/grid/8.jpg') ?>"alt="team member"/>
                               <!----<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Dr.R.Parthasarathi</a></h4>
                                </div>
                                <!----<div class="team-cat"><a href="javascript:void(0)">Pediatrician</a></div>---->
                                <div class="team-desc">
                                  <p>MS., FAMS., Ph.D.,,
                            Chief Operative Officer– GEM Hospital and Research Centre</p>
                                </div>
                                <!----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>---->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
						 <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img  src="<?= base_url('frontend/assets/images/team/grid/d1.jpg') ?>" alt="team member"/>
                                <!----<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Dr.C.J Varghese</a></h4>
                                </div>
                                <!----<div class="team-cat"><a href="javascript:void(0)">Pathologist</a></div>--->
                                <div class="team-desc">
                                  <p>Executive Director & Head of Minimal Access Surgery (Thrissur)</p>
                                </div>
                                <!----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>---->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img src="<?= base_url('frontend/assets/images/team/grid/senthil.jpg') ?>"alt="team member"/>
                               <!----<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Dr.P.Senthilnathan</a></h4>
                                </div>
                                <!---<div class="team-cat"><a href="javascript:void(0)">Urologist</a></div>--->
                                <div class="team-desc">
                                  <p>Director-Surgical Gastroenterology</p>
                                </div>
                                <!-----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>----->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><a class="link" href="#"></a><img  src="<?= base_url('frontend/assets/images/team/grid/meena.jpg') ?>" alt="team member"/>
                                <!---<div class="team-social"> <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a></div>---->
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4><a href="#">Mrs.Meena Varghese</a></h4>
                                </div>
                                <!----<div class="team-cat"><a href="javascript:void(0)">laboratory</a></div>--->
                                <div class="team-desc">
                                  <p>Executive Director</p>
                                </div>
                                <!----<div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>read more</span></a></div>---->
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                       
          </div>
          <!-- End .row-->
         <!----<div class="row">
            <div class="col-12 clearfix text--center">
              <ul class="pagination">
                <li><a class="current" href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="#" aria-label="Next"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </div>
          </div>---->
        </div>
        <!-- End .container-->
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>