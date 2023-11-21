<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
      <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="Background" /></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0" >
            <div class="title">
              <div class="title-card"  style="margin-top: -180px ;">
                <div class="title-heading">
                  <!---<h1>Pediatric Clinic</h1>---->
                  <h1>Esophago Gastric Surgery</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>The Gem Hospital is One of the Most Advanced Centers for Upper GI Diseases, Gastro-Intestinal
                    Surgery, And Minimal Access Surgery in India.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('index')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Esophago Gastric Surgery</li>
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
    <section class="single-service">
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
                    <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/video/5.jpg') ?>" alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                    The Centre carries out all major Upper GI procedures by</p>
                 
                    <p class="desc">&bull; Laparoscopic</p>
                    <p class="desc">&bull; Robotic</p>
                    <p class="desc">&bull; Open approach including cancer surgery.</p>
                  
                  <!--We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries in the strictest confidence.-->
                  
                  <p class="desc">Our department is headed by one of the most renowned surgeons in the field of Upper GI
                    and Laparoscopic surgery who is not only a leading surgeon in the country but is also an
                    international faculty in the field of upper GI and laparoscopic surgery. Our hospital has performed
                    more than 2000 esophagus and stomach cancer surgeries successfully.

                    <!--Today hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research.-->
                  </p>
                  <p class="desc">Ours is the first center to perform thoraco laparoscopic esophagectomy in a prone
                    position in the world and our technique is now being followed in some of the major centers in the
                    world.
                  </p>
                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">

                    <div class="widget widget-reservation widget-reservation-2"><img src="<?= base_url('frontend/assets/images/blog/sidebar/reservation.jpg') ?>"
                         alt="img" />
                      <div class="widget-content"><i class="flaticon-022-medical"></i>
                        <h5>emergency ?</h5>
                        <p>24 Hour Ready Call Us for Emergency</p><a href="tel:04224695100"><span
                            class="fas fa-phone-alt"></span>0422-4695100</a><br>
                            <a href="tel:9003932323"><span
                              class="fas fa-mobile-alt"></span>90039 32323</a>
                      </div>
                    </div>

                    <div class="widget widget-services">
                      <div class="widget-title">
                        <h5>Book Appointment</h5>
                      </div>
                      <div class="widget-content">
                        <ul class="list-unstyled">
                          <li><a href=""> <span class="line"> <span></span></span><span>Video
                                Consultation</span></a></li>
                          <li><a href=""> <span class="line"> <span></span></span><span>Visit to
                                Hospital</span></a></li>

                        </ul>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="row">
                  <!--"col-12 col-lg-4"-->
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Conditions Treated</h5>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Benign Esophageal diseases</li>
                      <li><i class="fas fa-check"></i> Malignant Esophageal diseases</li>
                      <li><i class="fas fa-check"></i> Benign stomach disorders</li>
                      <li><i class="fas fa-check"></i> Malignant stomach disorders</li><br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Tests and Treatments Offered</h5>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Antireflux Procedures, Redo Antireflux Surgery</li>
                      <li><i class="fas fa-check"></i> Hiatal / Paraesophageal Hernia Repair</li>
                      <li><i class="fas fa-check"></i> Achalasia Cardia, Redo- Heller’s Myotomy</li>
                      <li><i class="fas fa-check"></i> Trucal Vagotomy & Gastrojejunostomy (TVGJ)</li>
                    </ul>

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

            <div class="entry-infos core-values">
              <h6 class="entry-heading" style="text-align: center; color:#0D3E21;">Our Department</h6>
              <h5 class="entry-heading" style="text-align: center; font-size: 37px; color:#118B0F;">Awards and Achievement</h5>
              <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!--<h5>medical check ups</h5>-->
                      <p>Best Paper Award, “viii International Congress On Endoscopic Surgery, Peru 2012.</p>
                      <!--<p>Recognised as a world renowned institution. consult our doctors by visiting us.</p>-->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>medical treatment</h5>--->
                      <p>Best Technique Award, 12th World Congress of Esophageal Diseases, Japan 2010</p>
                      <!---<p>Free or low cost coverage adults with limited income recognised.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>Cardiomyotomy Surgery done successfully in an 8 months Pregnant Woman</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Research Pros</h5>--->
                      <p>Presented in Society of American Gastrointestinal Endo Surgeons (SAGES), USA, 2005</p>
                      <!---<p>All medical aspects practice for family, our reception staff with any medical enquiry.</p>---->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>First in the world to develop a newer technique for removal of cancer of esophagus, 2010</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>Best EAES Video Award & First Prize, Congress of European Association of Endoscopic Surgery,
                        Sweden 2008</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>Conducted International Conference on Diseases of Esophagus and Stomach (ISESCON) successfully
                        in 2017 & 2018</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>Presented in Society of American Gastrointestinal Endo Surgeons (SAGES), USA, 2005</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!---For Loved By Our Patients--->
            <section class="departments departments-2" id="departments-2">
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
                  <!-- End .team-img-->
                  <!-- End .team-content -->
                </div>
                <!-- End .team-member-holder-->
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
                  <!-- End .team-img-->
                  <!-- End .team-content -->
                </div>
                <!-- End .team-member-holder-->
              </div>
            </div>
          </div>
          <!-- End .departments-action-->
        </div>
        <!-- End .container-->
      </section>



           
			
			
            <!---Know More about Esophago Gastric Surgeries---->
            <section class="blog blog-grid blog-grid-3" id="blog-2">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">

                      <h6 class="entry-heading" style="font-size: 37px; color:#118B0F;">Know More About Endogynecology</h6>
                    </div>
                  </div>
                </div>
				<br>
                <!-- End .row-->
                <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                  data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                  <div class="col-12 col-lg-8">
                   
                    <div class="about-img"><img class="img-fluid"  src="<?= base_url('frontend/assets/images/blog/grid/16.jpg') ?>" style="position: relative;"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                       
                        </a></div>
                       
                  </div>
                  <div class="col-12 col-lg-8">
                    <div class="about-img"><img class="img-fluid"  src="<?= base_url('frontend/assets/images/blog/grid/17.jpg') ?>"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                        </a></div>
                  </div>
                  <div>
                    <div class="col-12 col-lg-8">
                      <div class="about-img"><img class="img-fluid"
                           src="<?= base_url('frontend/assets/images/blog/grid/18.jpg') ?>" alt="about Image" /><br><a
                          class=""
                          href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <i class="fab fa-youtube" style="font-size:48px;color:red;   position:absolute; bottom: 60px; left: 110px; " ></i>
                          </a></div>
                    </div>
                    <!-- End .entry-content-->
                  </div>
                </div>
                <!-- End .carousel-->
              </div>
            </section>

            <div class="entry-infos tips-info">
              <h2 class="desc" style="font-size: 24px; text-align: center; color:#0D3E21;">FAQ</h2>
              <h1 class="entry-heading" style="font-size: 37px; text-align: center; color:#118B0F;">Frequently Ask Questions.</h1>
              <!---<p class="entry-desc">We help create a care plan that addresses your specific condition and we are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes.</p>---->
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

            </div>

          </div>

        </div>
      </div>
    </section>


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>