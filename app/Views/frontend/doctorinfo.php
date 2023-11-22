<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
        <div class="container">
          <div class="hero-content">
      
            
              
              <div class="row"> 
              
                <div class="col-12 col-lg-6" style="margin-top: 40px;">
                  <h2 class="hero-title">Dr.C.Palanivelu</h2>
                  <p class="hero-desc">Chairman,MS, MCh, DNB, FACS, FRCS(Hon) Ed.,</p>
                 <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                 <ol class="breadcrumb d-flex ol-list " style="margin-top: 50px; margin-left: 500px;">
                  <li class="breadcrumb-item ol-list"><a href="home.html">Home</a></li>
                  <li class="breadcrumb-item ol-list"><a href="doctorInfo.html">DoctorInfo</a></li>
                </ol>
                </div>
                
                <div class="col-12 col-lg-6">
                  <img  src="<?= base_url('frontend/assets/images/page-titles/d1.jpg') ?>" class="doc"/> 
                  
                </div>
                
              </div>
  
              
  
           
        
          </div>
        </div>
      </section>
      <style>
        @media screen and (max-width: 600px){
           .doc{
            position: relative;
            right: 150px;
           
         }.ol-list{
          position: relative;
          right: 140px;
          bottom:10px;
          
         }
         
        }
                .doc {
                  margin-left: 250px; margin-top: 20px; border-radius: 20px;
                  object-fit: cover;
          
                }
            </style>
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
                <div class="col-12 col-lg-8">
                  <div class="video video-2 bg-overlay bg-overlay-video" id="video-2">
                                          <h4 class="heading-title"
                    style=" text-align: left;font-size: 24px; font-weight: 1000;color:#0C1313;">
                    About Dr.C.Palanivelu</h4>
                    <p class="desc">Dr Palanivelu is the First to introduce Laparoscopic surgery in south India after
                      realising the importance of Laparoscopic surgery to indian people without delay. 80% of Indian
                      population are farmers and labourers. Faster recovery with minimal morbidity is vital to our
                      people.</p>
                    <p class="desc">Dr C Palanivelu pioneer in laparoscopic cancer operation and advanced laparoscopic
                      operation has innovated many new operations first time in the world. Authored many books and
                      conducting training courses in advanced laparoscopic surgery.</p>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>

                  <!----<h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                   
                  </h6>
                  <p class="desc">
                    It is the first exclusive department in India to provide both Robotic & Laparoscopic surgeries for various diseases like</p>
                  
                    <p class="desc">&bull; Gall stones</p>
                    <p class="desc">&bull; Bile duct stones</p>
                    <p class="desc">&bull; Choledochal cyst</p>
					<p class="desc">&bull; Hydatid cysts</p>
                    <p class="desc">&bull; Acute & Chronic pancreatitis</p>
                    <p class="desc">&bull; Pseudocyst including cancers of the liver, pancreas, and gall bladder.</p>
                 
                
                  
                  <p class="desc">This centre has the distinction of being the first in the world to perform Totally Laparoscopic Whipple’s operation, also called pancreaticoduodenectomy for pancreatic cancer.With liver transplantation emerging to be standard care for chronic liver disease, GEM hospital, the Best Pancreas cancer surgery in Coimbatore is currently the only centre to offer Laparoscopic Donor Hepatectomy in the country. This reduces the risk associated with the donor surgery, the live person who donates a part of the liver enabling early recovery.

                    
                  </p>--->

                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">
                    <div class="widget widget-services">
                      <div class="widget-title">
                        <h5 style="color:#0D3E21;">Contact Information</h5>
                      </div>
                      <div class="widget-content">
                        <ul class="list-unstyled">
                          <li><a href=""> <span class="line"> <span></span></span><span>Gem
                                Hospital</span></a></li>
                          <li><a href=""> <span class="line">
                                <span></span></span><span>9003932323</span></a></li>
                          <li><a href=""> <span class="line">
                                <span></span></span><span>info@geminstitute.in</span></a></li>
                                 <li><a href=""> <span class="line">
                                  <span></span></span><span>Video Consultation</span></a></li>
                            
                        </ul>
                      </div>
                    </div>


                  </div>
                </div>
				</div>




                <div class="row pt-5" id="hpoints" style=" margin-top: -250px;">
                  <!--"col-12 col-lg-4"-->
                  <div class="col-12 col-lg-4">


                    <ul class="list-unstyled advantages">

                      <li><i class="fas fa-check"></i> <b>Chairman<b>-GEM Hospital and Research Centre</li>
                      <li><i class="fas fa-check"></i> <b>Professor & Director<b>-Institute of Gastroenterology &
                            Minimal Access Surgery</li>
                      <li><i class="fas fa-check"></i> <b>Managing Trustee<b>-GEM Digestive Diseases Foundation –
                            Charitable Trust</li>

                    </ul>
                  </div>
                </div><br><br><br>

                <div>
                  <h4 class="heading-title"
                    style="font-size: 24px; font-weight: var(--e-global-typography-83682a1-font-weight);color:#0C1313;">
                    Recognitions :</h4>
                </div>
                <div class="row" style="background-color: #EDF1FC; width: 800px; padding:1em 1em 1em 1em; height: 53%;">
                  <div class="col-8 col-lg-4" id="gh">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> World Great Surgeon</li>
                      <li><i class="fas fa-check"></i> Best Doctor Award</li>
                      <li><i class="fas fa-check"></i> Lifetime Achievement Award</li><br><br>
                    </ul>
                  </div>
                  <br><br>
                  <div class="col-8 col-lg-4" id="gm">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Pseudocyst Pancreas</li>
                      <li><i class="fas fa-check"></i> Chronic Pancreatitis</li>
                      <li><i class="fas fa-check"></i> Cancer of Pancreas</li><br><br>
                    </ul>
                    <style>
                      #gh {
                        margin-top: 20px;
                      }

                      #gm {
                        margin-top: 20px;
                      }
                    </style>
                  </div>


                </div>



                <!---<div class="col-12"> 
                    <div class="signature-block"><a class="btn btn--primary btn-line btn-line-after" href="doctors-grid.html"><span>find a doctor</span><span class="line"> <span></span></span></a>
                      <div class="signature-body"> 
                        <h6>john winston</h6>
                        <p>pediatrician</p><img class="signature-img" src="assets/images/signature/1.png" alt="signature"/>
                      </div>
                    </div>
                  </div>--->
              </div>
            </div>
            <!---<div class="entry-infos health-plans">
                <h5 class="entry-heading">health care plans</h5>
                <p class="entry-desc">Our doctors include highly qualified practitioners came from a range of backgrounds and bring with a diversity of skills and special interests. Our administration and support staff all have exceptional people skills and trained to assist you with all medical enquiries.</p>
                <div class="advantages-box"> 
                  <ul class="advantages-list">
                    <li><i class="fas fa-check"></i> Review your medical records.</li>
                    <li><i class="fas fa-check"></i> Check and test blood pressure.</li>
                    <li><i class="fas fa-check"></i> Run tests such as blood tests.</li>
                  </ul>
                  <ul class="advantages-list">
                    <li><i class="fas fa-check"></i> Check and test lung function.</li>
                    <li><i class="fas fa-check"></i> Narrowing of the arteries.</li>
                    <li><i class="fas fa-check"></i> Other specialized tests.</li>
                  </ul>
                </div>
                <div class="entry-action">
                  <p> <span class="currency">$50</span><span class="time"> Monthly</span></p><a class="btn btn--secondary btn-line btn-line-before" href="page-pricing.html"><span class="line"><span></span></span><span>explore other plans</span></a>
                </div>
              </div>--->
            <section class="about about-1 pt-5" id="about-1"
              style="font-family: var(--e-global-typography-d3dae9a-font-family), Sans-serif;   ">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="heading heading-2">
                      <div class="row">
                        <div class="col-12 col-lg-10">
                          <h4 class="heading-title"
                    style="font-size: 24px; font-weight: var(--e-global-typography-83682a1-font-weight);color:#0C1313; margin-left:-25px;" id="sa">
                     Social And Community Service</h4>
                        </div>
                        <div class="col-12 col-md-12">
                          <div class="col-12 col-lg-10 offset-lg-2">

                            <div class="col-12 col-lg-12">
                              <div class="entry-infos entry-introduction">

                                <div class="col-lg-12 col-lg-6" style="font-size: 16px;">
                                  
                                  <ul class="list-unstyled advantages" style="margin-top: -25px;">
                                    <h3 class="desc doc-info" style="color: #118B0F; margin-left: -128px;">GEM Digestive Diseases Foundation and Charitable Trust</h3>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i>To serve the needy and economically backward common
                                      public.Conduction of 65 in house periodic free medical camps.</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> Provision of high tech medical facilities and
                                      treatment at free / affordable cost.</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i>Served 43,225 of patients till now 2,777 of free
                                      laparoscopic surgeries.</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i>Financial assistance for poor students to persuade
                                      education</li>
                                    <br><br>
                                  </ul>
                                </div>
                                <style>
                                  @media screen and (max-width:600px) {
                                    .doc-info{
                                    margin-left: 0px !important;
                                    text-align: center;
                                  }
                                    
                                  }
                                 
                                </style>
                                <div class="col-lg-12 col-lg-6">
                                  <ul class="list-unstyled advantages">
                                    <h3 class="desc doc-info" style="color: #118B0F;margin-left: -128px;">Free Medical ward at GEM Hospital</h3>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i>20 beds exclusively to cater medical services
                                      including laparoscopic surgeries free of cost forthe needy people</li>
                                    <br><br>
                                  </ul>
                                </div>
                                <div class="col-lg-12 col-lg-6">
                                  <ul class="list-unstyled advantages">
                                    <h3 class="desc doc-info" style="color: #118B0F;margin-left: -128px;">Health Education</h3>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> To make everyone realize “Prevention is better than cure”</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> A serial of lectures in Doordarshan – “Vayirae
                                      Nalama”, 2005</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> Major issues for discussion on Obesity and GI
                                      Malignancies aiming Prevention and early detection, cure</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> Periodic Hepatitis-B Awareness and free vaccination
                                      programmes every year one month in August.</li><br><br>
                                  </ul>
                                </div>
                                <div class="col-lg-12 col-lg-6">
                                  <ul class="list-unstyled advantages">
                                    <h3 class="desc doc-info" style="color: #118B0F; margin-left: -128px;">Establishment of first Preventive gastroenterology Clinic</h3>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> Obesity Awareness – Mini Marathon</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> For early detection</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> For health education</li>
                                    <li style="color: var(--global--color-body);"><i class="fas fa-check"></i> Cancer screening</li><br><br>
                                  </ul>
                                </div>

                              </div>
                            </div>
                            <br>

                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="heading heading-2">
                      <div class="row">
                        <div class="col-12 col-lg-10">
                          
                        </div>
                        <div class="col-12 col-md-12">
                          <div class="col-12 col-lg-10 offset-lg-2">

                            <div class="col-12 col-lg-12">
                              <div class="entry-infos entry-introduction">

                                <div class="col-lg-12 col-lg-6" style="font-size: 16px;">
                                  
                                 <img  src="<?= base_url('frontend/assets/images/page-titles/d1.jpg') ?>" style="margin-left: 50px; width: 500px;" class="docimg" />
                                </div>
                                <style>
                                  @media screen and (max-width:600px) {
                                    .doc-info{
                                    margin-left: 0px !important;
                                    text-align: center;
                                  }
                                  .docimg{
                                    margin-right: 100px;
                                    width: 200px !important;
                                    margin-bottom: 100px;
                                  }
                                    
                                  }
                                 
                                </style>
                               

                              </div>
                            </div>
                            <br>

                          </div>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>

            </section>


            <!---For Loved By Our Patients--->
            <div class="blog blog-grid blog-grid-3 pt-5" id="blog-2" style="margin-top: -185px; margin-left: -23px; margin-bottom: -80px;">
              <div class="container">
                
                <!-- End .row-->
                <div class="row">
                  <div class="entry-infos core-values">
                    
                    <h4  style="text-align: center; color: #0d3e21;">Awards & Achievements</h4>
                    <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!--<h5>medical check ups</h5>-->
                            
                            <h5 style="padding-left: 30px;">
                              Olympic Silver Medal, in International Olympic Surgery, Phoniex, USA, 2009.					</h5>
                            <!--<p>Recognised as a world renowned institution. consult our doctors by visiting us.</p>-->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>medical treatment</h5>--->
                            
                            <h5 style="padding-left: 30px;">
                              Best Doctor Award” by TamilNadu Government, 2011					</h5>
                            <!---<p>Free or low cost coverage adults with limited income recognised.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;" class="para-img">
                              Life Time Achievement Award of District Rotary Coimbatore, 2012					 </h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Research Pros</h5>--->
                            
                            <h5 style="padding-left: 30px;">
                              Vocational excellence award of Rotary International, 2011					</h5>
                            <!---<p>All medical aspects practice for family, our reception staff with any medical enquiry.</p>---->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;;" class="para-img">
                              The Award of “Brand Ambassador of Coimbatore” by The Indian chamber of Commerce and Industry Coimbatore, 2012					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;" class="para-img">
                              Fellowship Ad Hominem Award, by Royal college of Surgeons of Edinburgh – the highest honour of the college, United Kingdom. 2003					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                           
                            <h5 style="padding-left: 30px;" class="para-img1">
                              “For The Sake of Honour Award” 2009 by Mount Rotary Chennai, 2009					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                          
                            <h5 style="padding-left: 30px;" class="para-img1">
                              Best International Video Award, Annual Congress of America College of Surgeons, New Orleans, USA, 2007.					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                          
                            <h5 style="padding-left: 30px;;" class="para-img">
                              SAGES Awards from the ‘Society of American Gastrointestinal and Endoscopic Surgeons’(2003, 2004 & 2005)					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;" class="para-img">
                              Best Technique Award for Cancer Esophagus, 10th International Society of Disease of Esophagus, Japan, 2010					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;" class="para-img2">
                              “Bheeshmacharya award” by Association of Minimal Access Surgeons of India during the Annual conference AMASICON 2012, Coimbatore 2012					 </h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;" class="para-img">
                              Honorary Fellowship conferred by Latin American old University, First Indian Honored in Latin America					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                          
                            <h5 style="padding-left: 30px;" class="para-img">
                              Best Video Award, European Association of Endoscopic Surgeons, 16th Annual Conference at Stockholm, Sweden 2008					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="entry-value"><i class=""></i>
                          <div class="entry-content">
                            <!---<h5>Emergency 24/7</h5>---->
                            
                            <h5 style="padding-left: 30px;">
                              Vocational excellence award of Rotary International, 2011					</h5>
                            <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                          </div>
                        </div>
                      </div>
                     
                     
                    
                     
                    </div>
                  </div>
                  <!-- End .col-lg-6-->
                </div>
               
                <!-- End .carousel-->
              </div>
            </div>


            <!---<div class="container" style="margin-top: -13rem!important; >
        <div class="row">
          <div class="col-12">
            <div class="heading heading-5">
              <h2 class="heading-title">Achievement and Awards</h2>
            </div>
			
          </div>
        </div>
		    
       <div class="row" style="height: 60%; width: 75%;  ">
          <div class="col-12">
            <div class="carousel owl-carousel carousel-navs" data-slide="3" data-slide-rs="2" data-autoplay="true"
               data-dots="false" data-space="30" data-loop="true" data-speed="3000">
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a></div>
                    
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                        
                        <div class="team-desc">
                          <p>Life Time Achievement Award of District Rotary Coimbatore, 2012</p>
                        </div>

                      </div>

                     
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a>
					</div>
                    
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                       
                        <div class="team-desc">
                          <p>For The Sake of Honour Award” 2009 by Mount Rotary Chennai, 2009</p>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a></div>
                   
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                       
                        <div class="team-desc">
                          <p>
						Vocational excellence award of Rotary International, 2011					</p>
                        </div>
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
			                <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a></div>
                    
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                       
                        <div class="team-desc">
                          <p>
						Life Time Achievement Award, Association of surgeons of India 2007, Bhubaneswar, Orissa.</p>
                        </div>
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
			  <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a></div>
                    
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                       
                        <div class="team-desc">
                          <p>
						“Bheeshmacharya award” by Association of Minimal Access Surgeons of India during the Annual conference AMASICON 2012, Coimbatore 2012</p>
                        </div>
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
			   <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="doctors-single-modern.html"></a></div>
                    
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                        </div>
                       
                        <div class="team-desc">
                          <p>
						“Bheeshmacharya award” by Association of Minimal Access Surgeons of India during the Annual conference AMASICON 2012, Coimbatore 2012</p>
                        </div>
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
         
        </div>---->
            <!-- .row-->
          </div>
          <!-- .container-->

        </div>
      </div>
  </div>
  </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>