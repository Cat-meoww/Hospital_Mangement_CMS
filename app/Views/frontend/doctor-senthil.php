<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  .sen-div1{
    margin-top: 40px;

  }
  .doc {
                  margin-left: 250px; margin-top: 20px; border-radius: 20px;
                  object-fit: cover;
          
                }
                .chair-bread{
                  margin-top: 25px; margin-left:250px;

                }.sen-head1{
                  text-align: left; color:#0D3E21;
                }
  @media screen and (max-width: 600px){
           .doc{
            position: relative;
            right: 50%;
           
         }.chair-bread{
          margin-left:0px !important;
         }
         
         
        }


</style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
        <div class="container">
          <div class="hero-content">
      
            
              
              <div class="row"> 
              
                <div class="col-12 col-lg-6 sen-div1" >
				  
                  <h3 class="hero-title">Dr. P.Senthilnathan</h3>
                  <p class="hero-desc">MS, DNB, MRCS, DNB (GI Surgery)</p>
				  <p class="hero-desc">Head, Department of HPB Surgery, Department of Minimal Access Surgery & Liver Transplantation</p>
                 <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                 <div class="col-12 chair-bread" > 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class=""><a  href="<?= base_url('doctor-senthil')?>">Doctor Senthilnathan</a></li>
                </ol>
              </div>
                </div>
                
                <div class="col-12 col-lg-6">
                  <img   src="<?= base_url('frontend/assets/images/page-titles/d2.png') ?>"  class="doc"/> 
                  
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
                                          <h4 class="heading-title sen-head1"
                   >
                    Publications :</h4>
                     <p class="desc">&bull; Laparoscopic cholecystectomy in cirrhotic patients: the role of subtotal cholecystectomy and its variants. J Am Coll Surg. 2006 Aug;203(2):145-51.</p>
                    <p class="desc">&bull; Laparoscopic pancreaticoduodenectomy: technique and outcomes. J Am Coll Surg.2007 Aug;205(2):222-30.</p>
                    <p class="desc">&bull; Transvaginal endoscopic appendectomy in humans: a unique approach to NOTES-world’s first report. Surg Endosc. 2008 May;22(5):1343-7.</p>
					 <p class="desc">&bull; Transumbilical flexible endoscopic cholecystectomy in humans: first feasibility study using a hybrid technique. Endoscopy. 2008 May;40(5):428-31.</p>
                    <p class="desc">&bull; Transumbilical endoscopic appendectomy in humans: on the road to NOTES: a prospective study. J Laparoendosc Adv Surg Tech A. 2008 Aug;18(4):579-82.</p>
                    <p class="desc">&bull; Laparoscopic management of choledochal cysts: technique and outcomesa retrospective study of 35 patients from a tertiary center. J Am Coll Surg. 2008 Dec;207(6):839-46.</p>
					 <p class="desc">&bull; Laparoscopic management of a retroperitoneal duodenal perforation following ERCP for periampullary cancer. JSLS. 2008 Oct-Dec;12(4):399-402.</p>
                    <p class="desc">&bull; NOTES: Transvaginal endoscopic cholecystectomy in humans-preliminary report of a case series. Am J Gastroenterol. 2009 Apr;104(4):843-7.</p>
					<p class="desc">&bull; Evolution in techniques of laparoscopic pancreaticoduodenectomy: a decade long experience from a tertiary center. J Hepatobiliary Pancreat Surg. 2009;16(6):731-40.</p>
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