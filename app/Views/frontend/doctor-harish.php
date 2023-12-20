<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  .hari-div1{
    margin-top: 40px;
  }
  .chair-bread{
    margin-top: 25px; margin-left:250px;

  }.doc {
                  margin-left: 250px; margin-top: 20px; border-radius: 20px;
                  object-fit: cover;
          
                }
                .hari-head1{
                  text-align: left; color:#0D3E21;
                }
  @media screen and (max-width: 600px){
           .doc{
            position: relative;
            right: 50% ;
           
         }.chair-bread{
          margin-left:0px !important;
         }}
</style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
        <div class="container">
          <div class="hero-content">
      
            
              
              <div class="row"> 
              
                <div class="col-12 col-lg-6 hari-div1" >
				  
                  <h3 class="hero-title">Dr. Harish B Kakkilaya</h3>
                  <p class="hero-desc">MS.GenSurgery, FMAS, Fellowship in Robotic Surgery, Fellowship in Colorectal Surgery </p>
				  <p class="hero-desc">Heads the Department of Colorectal surgery</p>
                 <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                 <div class="col-12 chair-bread" > 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class=""><a  href="<?= base_url('doctor-harish')?>">Dr Harish B Kakkilaya</a></li>
                </ol>
              </div>
                </div>
                
                <div class="col-12 col-lg-6">
                  <img   src="<?= base_url('frontend/assets/images/page-titles/harish.jpg') ?>"  class="doc"/> 
                  
                </div>
                
              </div>
              
  
              
  
           
        
          </div>
        </div>
      </section>
    
    <!--
      ============================
      Single Services Section
      ============================
      -->

    <section class="single-service">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12">
            <!---<h6 class="service-heading">Pediatric providers see patients from birth into early adulthood to make sure children achieve stay healthy. Our care includes preventive health checkups. Cardiologists study the disorders of the heart, but the study of adult and child heart disorders are through different training.</h6>---->
            <!--
              ============================ <div>
	     <img class="doc"src="assets/images/page-titles/d1.jpg" alt="Background" />
		   <style>
		   .doc{
		     position: absolute;
			 top: 46%;
			 width: 10%;
			 left: 70%;
			 border-radious: 10px 10px 10px 10px
			 
		   }
		   
		   </style>
	   </div>
              Video #02 Section
              ============================
              -->

            <div class="entry-introduction">
              <div class="row">
                <div class="col-12 col-lg-12">
				   <div class="" id="video-2">
                                          <h4 class="heading-title hari-head1"
                  >
                    Publications :</h4>
                     <p class="desc">&bull; Helicobacter IgA antibody titer as a predictor of prognosis in helicobacter pylori associated hollow viscus perforation" - Paper Presentation at KSC ASICON 2011,Bijapur,Karnataka</p>
                    <p class="desc">&bull; Para duodenal hernia - A rare cause of intestinal obstruction :poster presentation at ASICON 2009,Coimbatore.</p>
                  
                  </div>
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