<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
      <div class="bg-section"> <img src=" <?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
      <div class="container">
        <div class="hero-content" style="padding-bottom: 120px !important;">
          <div class="row">
            <div class="col-12 col-lg-5">
              <h2 class="hero-title" style="margin-top: 60px;">NBE</h2>
             
              <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
            </div>
            <div class="col-12" style="margin-top: 30px;">
              <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class=""><a href="NBE.html">NBE</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- End #page-title-->
      <!--
      ============================
      Doctor Profile Standard Section
      ============================
      -->
     
      <section class="team-single team-single-standard" style="margin-top: 60px;">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6">
			              <div class="entry-bio entry-education">
                
                
                <div class="education-panels">
                  
                  
                
				   <div class="education-panel"> 
                    
                    <div class="education-body">
                      <p class="desc">National Board of Examination</p>
                      <h5 style="color: #118b0f;">DrNB Surgical Gastroenterology</h5>
                      <p><span style="color: black; font-weight: bold;">No.of Seats : </span> 3</p>
                      <p><span style="color: black; font-weight: bold;">Duration :</span> 3 years</p>
                      <p><span style="color: black; font-weight: bold;">Eligibility :</span> MS/DNB (Gen.Surg)</p>
                    </div>
                  </div>
				                    <div class="education-panel"> 
                    
                    <div class="education-body">
                     <p class="desc">National Board of Examination</p>
                      <h5 style="color: #118b0f;">DrNB Medical Gastroenterology</h5>
                      <p><span style="color: black; font-weight: bold;">No.of Seats :</span> 2</p>
                      <p><span style="color: black; font-weight: bold;">Duration :</span> 3 years</p>
                      <p><span style="color: black; font-weight: bold;">Eligibility :</span> MD/DNB (Medicine)</p>
                    </div>
                  </div>
                  
                  <div class="module-holder">
                    <!--  Start Module Search  -->
        
                    <!--  End .module-search-->
                    <!-- Start .module-contact-->
                  </div>
                </div>
              
              <!-- 
              ============================
              Sidebar Doctors #03
              ============================
              -->
              
                <!-- Reservation-->
                
                <style>
                  .career-img1{
                    width: 600px;height: 600px;object-fit: cover;border-radius: 50px;
                  }
                  @media screen and (max-width:600px) {
                    .career-img1{
                      width: 370px;
                      object-fit: cover;
                      height: 550px;
                      padding-bottom: 100px;
                    }
                    
                  }
                </style>
                <!-- End .widget-reservation-->
                <!-- Opening-hours-->
               
                <!-- End .widget-opening-hours-->
                <!-- Download-->
                
                <!-- End .widget-download-->
              </div>
              <!-- End .sidebar-->
            </div>
            <div class="col-12 col-lg-6">
             
             
           
              <div class="entry-bio entry-education">
                
                
                <div class="education-panels">
                  
                  
                
				   <div class="education-panel"> 
                    
                    <div class="education-body">
                     <p class="desc">National Board of Examination</p>
                      <h5 style="color: #118b0f;">Minimal Access Surgery</h5>
                      <p><span style="color: black; font-weight: bold;">No.of Seats :</span> 2</p>
                      <p><span style="color: black; font-weight: bold;">Duration :</span> 2 years</p>
                      <p><span style="color: black; font-weight: bold;">Eligibility :</span>  MS/DNB (Surg.)</p>
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      <p class="desc">National Board of Examination</p>
                      <h5 style="color: #118b0f;">Bariatric Surgery</h5>
                      <p><span style="color: black; font-weight: bold;">No.of Seats :</span> 1</p>
                      <p><span style="color: black; font-weight: bold;">Duration :</span> 2 years</p>
					  <p><span style="color: black; font-weight: bold;">Eligibility :</span></p>
                    </div>
                  </div>
                  <div class="module-holder">
                    <!--  Start Module Search  -->
        
                    <!--  End .module-search-->
                    <!-- Start .module-contact-->
                    <div class="col-12">
                      <button
                        class="btn btn--primary btn-line btn-line-before btn--block"
                        id="enq"
                      >
                        <span class="line"> <span> </span></span
                        ><span>Apply Now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
             
            </div>
          </div>
        </div>
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>