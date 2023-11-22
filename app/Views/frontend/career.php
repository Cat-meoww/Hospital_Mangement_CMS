<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="title">
                
              </div>
              <!-- End .title -->
            </div>
            <!-- End .col-lg-8-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- End #page-title-->
      <!--
      ============================
      Doctor Profile Standard Section
      ============================
      -->
     
      <section class="team-single team-single-standard">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6">
              <!-- 
              ============================
              Sidebar Doctors #03
              ============================
              -->
              <div class="sidebar sidebar-doctors sidebar-doctors-3">
                
                <!-- Reservation-->
                <div >
                  <img  src=" <?= base_url('frontend/assets/images/careers/career.png') ?>" class="career-img1" />
                </div>
                <style>
                  .career-img1{
                    width: 600px;height: 600px;object-fit: cover;border-radius: 50px;
                  }
                  @media screen and (max-width:600px) {
                    .career-img1{
                      width: 400px;
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
                <h5 class="entry-heading" style="color: #0d3e21;">We are Hiring !!!</h5>
                
                <div class="education-panels">
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 style="color: #118b0f;">Staff Nurse / Nursing Assistant</h5>
                      <p><span style="color: black; font-weight: bold;">Qualification :</span> B.Sc Nursing / DGNM / ANM</p>
                      <p><span style="color: black; font-weight: bold;">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply</p>
                      
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 style="color: #118b0f;">Pharmacy</h5>
                      <p><span style="color: black; font-weight: bold;">Qualification :</span> B.Pharm / D.Pharm</p>
                      <p><span style="color: black; font-weight: bold;">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply</p>
                      
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                     
                      <h5 style="color: #118b0f;">Doctor Secretary</h5>
                      <p><span style="color: black; font-weight: bold;">Qualification :</span> Any UG / PG Degree</p>
                      <p><span style="color: black; font-weight: bold;">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply, Must have Computer Proficiency</p>
                      <p><span style="color: black; font-weight: bold;">Gender :</span> Female</p>
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 style="color: #118b0f;">Academic Co-ordinator</h5>
                      <p><span style="color: black; font-weight: bold;">Qualification :</span> Any UG / PG Degree</p>
                      <p><span style="color: black; font-weight: bold;">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply, Must have Computer Proficiency</p><p><span style="color: black; font-weight: bold;">Gender :</span> Female</p>
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