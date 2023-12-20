<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  .nalan-div1{
    margin-top: 40px;
  }
  .chair-bread{
    margin-top: 25px; margin-left:250px;

  }.doc {
                  margin-left: 250px; margin-top: 20px; border-radius: 20px;
                  object-fit: cover;
          
                }
                .nalan-head1{
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
              
                <div class="col-12 col-lg-6 nalan-div1" >
				  
                  <h3 class="hero-title">Dr. Nalankilli. V. P</h3>
                  <p class="hero-desc">M.S. Gen. Surgery, FACS, FMAS</p>
				  
                 <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                 <div class="col-12 chair-bread" > 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class=""><a  href="<?= base_url('doctor-nalan')?>">Dr Nalankilli</a></li>
                </ol>
              </div>
                </div>
                
                <div class="col-12 col-lg-6">
                  <img   src="<?= base_url('frontend/assets/images/page-titles/nalan.jpg') ?>"  class="doc"/> 
                  
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
                                          <h4 class="heading-title nalan-head1"
                   >
                    Publications :</h4>
                     <p class="desc">&bull; Long-term results of hepatic hydatid disease managed using palanivelu hydatid system: Indian experience in tertiary center. Surg Endosc. 2014 Oct;28(10):2832-9. doi: 10.1007/s00464-014-3570-2. Epub 2014 Jun 6</p>
                    <p class="desc">&bull; Laparoscopic pylorus preserving pancreaticoduodenectomy in paediatric age for solid pseudopapillary neoplasm of head of the pancreas – case report Pancreatology. 2014 Nov-Dec;14(6):550-2. doi: 10.1016/j.pan.2014.06.005. Epub 2014 Jul 2</p>
                    <p class="desc">&bull; Hepatic artery reconstruction following iatrogenic injury during laparoscopic distal pancreatectomy: Minimal access surgery is new horizon J Minim Access Surg. 2016 Oct-Dec;12(4):382-4. doi: 10.4103/0972-9941.181330.</p>
                    <p class="desc">&bull; Laparoscopic hysterectomy with bilateral orchidectomy for Persistent Mullerian duct syndrome with seminoma testes: Case report J Minim Access Surg. 2015 Oct-Dec;11(4):273-5. doi: 10.4103/0972-9941.158160.</p>
                    <p class="desc">&bull; Laparoscopic radical cholecystectomy for suspected early gall bladder carcinoma: thinking beyond convention Surg Endosc. 2016 Jun;30(6):2442-8. doi: 10.1007/s00464-015-4495-0. Epub 2015 Sep 28.</p>Laparoscopic central pancreatectomy: Our technique and long-term results in 14 patients. J Minim Access Surg. 2015 Jul-Sep;11(3):167-71. doi: 10.4103/0972-9941.158967</p>
                    <p class="desc">&bull; Long-term results of laparoscopic pancreaticoduodenectomy for pancreatic and periampullary cancer-experience of 130 cases from a tertiary-care center in South India J Laparoendosc Adv Surg Tech A. 2015 Apr;25(4):295-300. doi: 10.1089/lap.2014.0502. Epub 2015 Mar 19.</p>
                    <p class="desc">&bull; Laparoscopic total pancreatectomy for multiple endocrine neoplasia type 1 syndrome-associated multifocal, non-functioning pancreatic neuroendocrine tumor: A case report. Asian J Endosc Surg. 2017 Jun 6. doi: 10.1111/ases.12390.</p>
                    
                    
                    
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