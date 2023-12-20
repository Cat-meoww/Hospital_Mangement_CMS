<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
  .hero-content{
    padding-bottom: 160px !important;

  }.pub-div1{
    margin-top:80px;

  }.pub-btn1{
    width: 180px !important;
  }
  @media screen and (max-width:600px) {
        .page-title.page-title-3 .title .title-card{
         
          margin-top: 0px !important;
      
      
          
        }
        
      }
</style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content" > 
            <div class="row"> 
              <div class="col-12 col-lg-5 pub-div1" >
                <h2 class="hero-title" >Doctors Publications</h2>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12"> 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                  <li class=""><a href="<?= base_url('doctor-publication')?>">Doctors Publications</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
    

      <section class="team team-grid" id="teamGrid">
        <div class="container">
          <div class="row" id="team-all">
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img src="<?= base_url('frontend/assets/images/team/grid/28.png') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr. P.Senthilnathan</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Lead Consultant - Dept of Upper GI</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-senthil')?>"  > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/9.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Ramesh</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Consultant - Dept of Upper GI</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-ramesh')?>" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/10.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Saravanakumar</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Senior Consultant - Dept of Upper GI</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-saravanakumar')?>"> <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/7.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Bharath Cumar</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Consultant - Dept of Upper GI</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/11.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Rajapandian</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Lead Consultant - Dept of Colorectal Surgery</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-rajapandian')?>" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/12.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Sathyamoorthy</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Senior Consultant - Dept of Colorectal Surgery</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
						<div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/13.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Harish B Kakkilaya</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Consultant - Dept of Colorectal Surgery</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-harish')?>" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
						<div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/14.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Anand Vijai</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Lead Consultant - Dept of HPB Surgery</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-anand')?>" > <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
                          </div>
                        </div>
						<div class="col-12 col-md-6 col-lg-4">
                          <div class="team-member" data-hover="">
                            <div class="team-member-holder">
                              <div class="team-img"><img  src="<?= base_url('frontend/assets/images/team/grid/15.jpg') ?>" alt="team member"/>
                              </div>
                              <!-- End .team-img-->
                              <div class="team-content"> 
                                <div class="team-title">
                                  <h4>Dr Nalankilli</h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)">Senior Consultant - Dept of HPB</a></div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before pub-btn1" href="<?= base_url('doctor-nalan')?>"> <span class="line"> <span></span></span><span>View Publications</span></a></div>
                              </div>
                              <!-- End .team-content -->
                            </div>
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