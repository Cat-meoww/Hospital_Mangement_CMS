<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  .raja-div1{
    margin-top: 40px;
  }
  .chair-bread{
    margin-top: 25px; margin-left:250px;

  }.doc {
                  margin-left: 250px; margin-top: 20px; border-radius: 20px;
                  object-fit: cover;
          
                }
                .raja-head1{
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
              
                <div class="col-12 col-lg-6 raja-div1" >
				  
                  <h3 class="hero-title">Dr. S. Rajapandian</h3>
                  <p class="hero-desc">Ms, FRCS (Ed),DNB (GI Surg),PhD (MAS),FMAS , FAIS </p>
				  <p class="hero-desc">Heads the Department of Colorectal surgery</p>
                 <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                 <div class="col-12 chair-bread"> 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class=""><a  href="<?= base_url('doctor-rajapandian')?>">Doctor Rajapandian</a></li>
                </ol>
              </div>
                </div>
                
                <div class="col-12 col-lg-6">
                  <img   src="<?= base_url('frontend/assets/images/page-titles/raja.jpg') ?>"  class="doc"/> 
                  
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
                                          <h4 class="heading-title raja-head1"
                   >
                    Publications :</h4>
                     <p class="desc">&bull; Single incision laparoscopic colorectal resection: Our experience. Palanivelu C, Vij A, Rajapandian S, Palanivelu P, Parthasarathi R, Vaithiswaran V, Palanisamy S.J Minim Access Surg. 2012 Oct;8(4):134-9. doi: 10.4103/0972-9941.103118</p>
                    <p class="desc">&bull; Laparoendoscopic single-site lateral pancreaticojejunostomy. Palanivelu C, Ahluwalia JS, Parthasarathi R, Palanisami S, Vaithiswaran V, Rajapandian S, Palanivelu P. Pancreatology. 2011;11(5):500-5. doi: 10.1159/000331461. Epub 2011 Oct 27.</p>
                    <p class="desc">&bull; Laparoscopic totally extraperitoneal repair of inguinal hernia using two-hand approach--a gold standard alternative to open repair. Rajapandian S, Senthilnathan P, Gupta A, Gupta PD, Praveenraj P, Vaitheeswaran V, Palanivelu C. J Indian Med Assoc. 2010 Oct;108(10):652-4.</p>
					 <p class="desc">&bull; Minimally invasive oesophagectomy for carcinoma oesophagus--approaches and options in a high volume tertiary centre. Rajan PS, Vaithiswaran V, Rajapandian S, Senthilnathan P, Praveenraj P, Palanivelu C. J Indian Med Assoc. 2010 Oct;108(10):642-4.</p>
                    <p class="desc">&bull; Laparoscopic repair of adult diaphragmatic hernias and eventration with primary sutured closure and prosthetic reinforcement: a retrospective study. Palanivelu C, Rangarajan M, Rajapandian S, Amar V, Parthasarathi R. Surg Endosc. 2009 May;23(5):978-85. doi: 10.1007/s00464-008-0294-1. Epub 2009 Mar 14.</p>
                    <p class="desc">&bull; Perforation of jejunal diverticula in steroids and nonsteroidal anti-inflammatory drug abusers: a case series. Palanivelu C, Rangarajan M, Rajapandian S, Maheshkumaar GS, Madankumar MV. World J Surg. 2008 Jul;32(7):1420-4; discussion 1425. doi: 10.1007/s00268-008-9469-0.</p>
					 <p class="desc">&bull; Laparoscopic transabdominal preperitoneal repair of spigelian hernia. Palanivelu C, Vijaykumar M, Jani KV, Rajan PS, Maheshkumaar GS, Rajapandian S. JSLS. 2006 Apr-Jun;10(2):193-8.</p>
                    <p class="desc">&bull; Late rejection after transabdominal pre-peritoneal inguinal repair: laparoscopic extraction of mesh. Jani K, Palanivelu C, Malladi V, Rajan PS, Rajapandian S, Shetty R, Senthilkumar R, Kavalkat A. Indian J Gastroenterol. 2005 Sep-Oct;24(5):219-20.</p>
					<p class="desc">&bull; Laparoscopic retrieval of "stubborn" foreign bodies in the foregut: a case report and literature survey.Palanivelu C, Rangarajan M, Rajapandian S, Vittal SK, Maheshkumaar GS. Surg Laparosc Endosc Percutan Tech. 2007 Dec;17(6):528-31; discussion 31-2</p>
                    <p class="desc">&bull; Laparoscopic pancreaticoduodenectomy: technique and outcomes. Palanivelu C, Jani K, Senthilnathan P, Parthasarathi R, Rajapandian S, Madhankumar MV. J Am Coll Surg. 2007 Aug;205(2):222-30. Epub 2007 Jun 27.</p>
                    <p class="desc">&bull; Laparoscopic esophagogastrectomy without thoracic or cervical access for adenocarcinoma of the gastroesophageal junction: an Indian experience from a tertiary center.Palanivelu C, Prakash A, Parthasarathi R, Senthilkumar R, Senthilnathan PR, Rajapandian S. Surg Endosc. 2007 Jan;21(1):16-20. Epub 2006 Oct 9.</p>
                    <p class="desc">&bull; Palanivelu hydatid system for safe and efficacious laparoscopic management of hepatic hydatid disease. Palanivelu C, Senthilkumar R, Jani K, Rajan PS, Sendhilkumar K, Parthasarthi R, Rajapandian S. Surg Endosc. 2006 Dec;20(12):1909-13.</p>
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