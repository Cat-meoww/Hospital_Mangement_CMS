<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
      <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="Background" /></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0" >
            <div class="title">
              <div class="title-card"  style="margin-top: -180px ;">
                <div class="title-heading">
                  <!---<h1>Pediatric Clinic</h1>---->
                  <h1>Piles</h1>
                </div>
                <div class="title-sub-heading">
                  <p>GEM is equipped with the latest technology and advanced equipment for diagnosis and treatment, including robotic-assisted surgery.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Piles</li>
                </ol>
              </div>
            </div>
            <!-- End .title -->
          </div>
          <!-- End .col-lg-8 -->
        </div>
        <!-- End .row-->
      </div>
     
      <!-- End .container-->
    </section>
    <style>
      @media screen and (max-width:600px) {
        .page-title.page-title-3 .title .title-card{
         
          margin-top: 0px !important;
      
      
          
        }
        
      }
        
      </style>
    <!--
      ============================
      Single Services Section
      ============================
      -->
    <section class="single-service" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12">
            <!---<h6 class="service-heading">Pediatric providers see patients from birth into early adulthood to make sure children achieve stay healthy. Our care includes preventive health checkups. Cardiologists study the disorders of the heart, but the study of adult and child heart disorders are through different training.</h6>---->
            <!--
              ============================
              Video #02 Section
              ============================
              -->

            <div class="entry-introduction">
              <div class="row">
                <div class="col-12 col-lg-8">
                  <div class="video video-2 bg-overlay bg-overlay-video" id="video-2">
                    <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/video/hernia.jpg') ?>" alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                   Descriptions
                  </h6>
                  <p class="desc">
                    Piles are swollen and inflamed veins in the rectum and anus that cause discomfort and bleeding. They are usually caused by straining during bowel movements, obesity or pregnancy.
                  </p>
				  
                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">

                    

                    <div class="widget widget-services">
                      <div class="widget-title">
                        <h5>Book Appointment</h5>
                      </div>
                      <div class="widget-content">
                        <ul class="list-unstyled">
                          <li><a href="<?= base_url('appointment/video-consultation')?>"> <span class="line"> <span></span></span><span>Video
                                Consultation</span></a></li>
                          <li><a href="<?= base_url('appointment/book-appointment')?>"> <span class="line"> <span></span></span><span>Visit to
                                Hospital</span></a></li>

                        </ul>
                      </div>
                    </div>

                  </div>

                </div>

               <div class="row">
                  <!--"col-12 col-lg-4"-->
                  <div class="col-12 col-lg-12">

                    <h4 class="desc" style="font-size: 26px; line-height: initial; color: #118B0F;">Symptoms of Piles</h4>
					
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Bright red blood in stools</li>
                      <li><i class="fas fa-check"></i> Increased itch and pain around anus</li>
                      <li><i class="fas fa-check"></i> Multiple Swellings around anus</li>
                      <br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-12">

                   <h4 class="desc" style="font-size: 18px; line-height: initial; color: #118B0F;">Advanced Treatment</h4>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Laser Treatment</li>
                      <li><i class="fas fa-check"></i> Ligasure and Ultrasonic Method</li>
                      <li><i class="fas fa-check"></i> Stapler Piles Surgery Banding</li>
                    </ul>
					<br>
					<p class="desc">"Avail benefits of Minimally Invasive Laser Surgery"</p>
					<br><br>

                  </div>
				   <div class="col-12 col-lg-12">

                   <h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">Anal Fistula</h4>
				   <p class="desc">An anal fistula is a small channel can develop between the end of the bowel and the skin near the anus.
                                   It is common among those who earlier had anal abscess.</p>
                    <ul class="list-unstyled advantages">
					<h4 class="desc" style="font-size: 18px; line-height: initial; color: #118B0F;">Advanced Treatment</h4>
                      <li><i class="fas fa-check"></i> VAFT</li>
                      <li><i class="fas fa-check"></i> Laser Surgery Of Anal Fistula</li>
                      <li><i class="fas fa-check"></i> LIFT</li>
                    </ul>
					<br><br>
                  </div>
				  
				   <div class="col-12 col-lg-12">

                   <h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">Anal Fissure</h4>
				   <p class="desc">An anal fissure is a tear in the lining of the anus or anal canal (the opening through which stool passes out of the body).The fissure can be extremely painful and may bleed.</p>
                    <ul class="list-unstyled advantages">
					<h4 class="desc" style="font-size: 18px; line-height: initial; color: #118B0F;">Advanced Treatment</h4>
                      <li><i class="fas fa-check"></i> LAS</li>
                      <li><i class="fas fa-check"></i> Laser Sphincterotomy</li>
                      <li><i class="fas fa-check"></i> Botox Injection</li>
                    </ul>
					<br><br>
                  </div>
				  <div class="col-12 col-lg-12">

                   <h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">Pilonidal Sinus Disease (PNS)</h4>
				   <p class="desc">A pilonidal sinus (PNS) is a small hole or tunnel in the skin.</p>
                    <ul class="list-unstyled advantages">
					<h4 class="desc" style="font-size: 18px; line-height: initial; color: #118B0F;">Advanced Treatment</h4>
                    <p class="desc">Minimally Invasive Treatment Laser for PILONIDAL SINUS</p>
                    </ul>
					<br><br>
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

            <!-----<div class="entry-infos core-values">
              <h6 class="entry-heading" style="text-align: center; color:#0D3E21;">Our Department</h6>
              <h5 class="entry-heading" style="text-align: center; font-size: 37px; color:#118B0F;">Awards and Achievement</h5>
              
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Best Paper Award, “viii International Congress On Endoscopic Surgery, Peru 2012.</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Best Technique Award, 12th World Congress of Esophageal Diseases, Japan 2010</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Cardiomyotomy Surgery done successfully in an 8 months Pregnant Woman</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                     
                      <p>Presented in Society of American Gastrointestinal Endo Surgeons (SAGES), USA, 2005</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>First in the world to develop a newer technique for removal of cancer of esophagus, 2010</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                     
                      <p>Best EAES Video Award & First Prize, Congress of European Association of Endoscopic Surgery,
                        Sweden 2008</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Conducted International Conference on Diseases of Esophagus and Stomach (ISESCON) successfully
                        in 2017 & 2018</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Presented in Society of American Gastrointestinal Endo Surgeons (SAGES), USA, 2005</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>--->

            
            <!----<section class="departments departments-2" id="departments-2">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="heading heading-12 heading-13 text-center">
                <p class="heading-subtitle" style="font-size: 24px; color:#0D3E21;">Patients Story</p>
                <h2 class="heading-title" style="color:#118B0F;">Loved by our Patients</h2>
              </div>
            </div>
          </div>
          <div class="row"> 
            <div class=" col-12 col-md-6 col-lg-6">
              <div class="department-panel" data-hover="">
                <div class="department-panel-holder">
                  <div class="department-content"> 
                    <div class="department-title">
                           <ul>
							<li><a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a></li>
					</ul>
                    </div>
                    <div class="department-desc">
                      <p>Dr. Parthasarathy Operated on me for Hernia. He did a Marvelous Job of Treating me. Best hospital with Great Staff for all Gastrointestinal Treatment.</p>
                    </div>
                    <div class="department-more" style="color: black"><strong>Ismail Mohamed</strong></a></div>
                  </div>
                  
                </div>
               
              </div>
            </div>
            
            <div class=" col-12 col-md-6 col-lg-6">
              <div class="department-panel" data-hover="">
                <div class="department-panel-holder">
                  <div class="department-content"> 
                    <div class="department-title">
					  <ul>
							<li><a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a>
							<a><i class="far fa-star" style="color: yellow;"></i></a></li>
					</ul>
                    </div>
					
                    <div class="department-desc">
                      <p>At Gem hospital, Coimbatore the Team Under The Head of Doctor Saravanakumar Treated well and gave us Good Treatment to my Spouse. Especially the ward Nurses took Care Much and moved very Friendly to my Spouse.</p>
                    </div>
                    <div class="department-more"  style="color: black"><strong>Subramanian Ramasamy</strong></div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
        
      </section>----->



           
			
			
           
            <!----<section class="blog blog-grid blog-grid-3" id="blog-2">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">

                      <h6 class="entry-heading" style="font-size: 37px; color:#118B0F;">Know More About Endogynecology</h6>
                    </div>
                  </div>
                </div>
				<br>
                
                <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                  data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                  <div class="col-12 col-lg-8">
                   
                    <div class="about-img"><img class="img-fluid" src="assets/images/blog/grid/16.jpg" style="position: relative;"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                       
                        </a></div>
                       
                  </div>
                  <div class="col-12 col-lg-8">
                    <div class="about-img"><img class="img-fluid" src="assets/images/blog/grid/17.jpg"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                        </a></div>
                  </div>
                  <div>
                    <div class="col-12 col-lg-8">
                      <div class="about-img"><img class="img-fluid"
                          src="assets/images/blog/grid/18.jpg" alt="about Image" /><br><a
                          class=""
                          href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                          </a></div>
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </section>---->

            <!----<div class="entry-infos tips-info">
              <h2 class="desc" style="font-size: 24px; text-align: center; color:#0D3E21;">FAQ</h2>
              <h1 class="entry-heading" style="font-size: 37px; text-align: center; color:#118B0F;">Frequently Ask Questions.</h1>
              
              <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">What are
                      some common upper GI conditions?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">Common upper GI conditions include gastroesophageal reflux disease (GERD),
                      peptic ulcers, gastritis, esophagitis, Barrett's esophagus, hiatal hernia, dyspepsia
                      (indigestion), and upper GI cancers such as esophageal and stomach cancer.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">What are the
                      symptoms of upper GI disorders? </a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">Symptoms can vary depending on the specific condition, but common symptoms
                      include heartburn, regurgitation, chest pain, difficulty swallowing, bloating, nausea, vomiting,
                      abdominal pain, indigestion, and changes in bowel movements.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">How can I manage symptoms
                      of GERD? </a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">Lifestyle changes can help manage GERD symptoms. These may include avoiding
                      trigger foods (spicy or acidic foods, caffeine, alcohol), eating smaller meals, maintaining a
                      healthy weight, elevating the head of the bed, and not lying down immediately after eating.
                      Medications, such as proton pump inhibitors or antacids, can also be prescribed.</div>
                  </div>
                </div>
              </div>

            </div>---->

          </div>

        </div>
      </div>
    </section>


 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>