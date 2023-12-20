<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>


<section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
      <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>"    alt="Background" /></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0" >
            <div class="title">
              <div class="title-card"  style="margin-top: -180px ;">
                <div class="title-heading">
                  <!---<h1>Pediatric Clinic</h1>---->
                  <h1>Cardiology</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>At GEM hospitals, a team of expert is available to provide comprehensive care for patients with cardiovascular diseases.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cardiology</li>
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
                    <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/video/12.png') ?>"    alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                 The majority of patients die mainly of Cardiovascular Disease. Young adults with Heart attacks are common these days.</p>
				  
                  <!--We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries in the strictest confidence.-->
                  
                 

                    <!--Today hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research.-->
                 
                 
                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">

                    

                    <div class="widget widget-services">
                      <div class="widget-title">
                        <h5>Book Appointment</h5>
                      </div>
                      <div class="widget-content">
                        <ul class="list-unstyled">
                          <li><a href="<?= base_url('appointment/video-consultation') ?>"> <span class="line"> <span></span></span><span>Video
                                Consultation</span></a></li>
                          <li><a href="<?= base_url('appointment/book-appointment') ?>"> <span class="line"> <span></span></span><span>Visit to
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
                      <li><i class="fas fa-check"></i> Myocardial Infarction (Heart Attack)</li>
                      <li><i class="fas fa-check"></i> Angina Pectoris</li>
                      <li><i class="fas fa-check"></i> Congestive Heart Failure</li>
                      <br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Tests and Treatments Offered</h5>
					<h4 class="desc">Non-Invasive testing</h4>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> ECG</li>
                      <li><i class="fas fa-check"></i> Echo Cardiogram</li>
                      <li><i class="fas fa-check"></i> Tread Mill test</li>
                      <li><i class="fas fa-check"></i> Holter</li>
					  <li><i class="fas fa-check"></i> ABPM</li>
                      
					  
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

            <!---For Loved By Our Patients--->
            <section class="departments departments-2" id="departments-2">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="heading heading-12 heading-13 text-center">
                <h6 class="" style=" font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary);">Patients Story</h6>
                <h2 class="heading-title" style="color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Loved by our Patients</h2>
              </div>
            </div>
          </div>
          <div class="row">
               <div class="carousel owl-carousel carousel-dots" data-slide="2" data-slide-rs="2" data-autoplay="true"
                  data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">  
            <div class=" col-12 col-md-12 col-lg-12">
              <div class="department-panel" data-hover="">
                <div class="department-panel-holder">
                  <div class="department-content"> 
                    <div class="department-title">
                           <ul>
							<li><a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a></li>
					</ul>
                    </div>
                    <div class="department-desc">
                      <p>I am highly delighted to share my views for GEM HOSPITAL. They are dealing with numerous patients in a well systametic manner . Highly qualified and well experienced Doctors and they are available here 24*7.</p>
                    </div>
                 
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Anupama Balajee</p>
                    </div>
                  </div>
                  <!-- End .team-img-->
                  <!-- End .team-content -->
                </div>
                <!-- End .team-member-holder-->
              </div>
            </div>
            
            <div class=" col-12 col-md-12 col-lg-12">
              <div class="department-panel" data-hover="">
                <div class="department-panel-holder">
                  <div class="department-content"> 
                    <div class="department-title">
					  <ul>
							<li><a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a>
							<a><i class="fa fa-star checked" ></i></a></li>
					</ul>
                    </div>
					  <style>
                      .checked{
                        color: gold;
                      }
                    </style>
                    <div class="department-desc">
                      <p>Hospital is clean and good. Staffs are very very helpful and guide you properly. Highly satisfied with the chief doctor and the assistants. Their confident level gives us a moral boost.</p>
                    </div>
                   
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Vidya Nagasubramanian</p>
                    </div>
                  </div>
                  <!-- End .team-img-->
                  <!-- End .team-content -->
                </div>
                <!-- End .team-member-holder-->
              </div>
            </div>
            </div>
          </div>
          <!-- End .departments-action-->
        </div>
        <!-- End .container-->
      </section>



           
			
			
            <!---Know More about Esophago Gastric Surgeries---->
            

            <div class="entry-infos tips-info">
              <h2 class="desc" style=" font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary); text-align: center;">FAQ</h2>
              <h1 class="entry-heading" style=" text-align: center; color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Frequently Ask Questions</h1>
              <!---<p class="entry-desc">We help create a care plan that addresses your specific condition and we are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes.</p>---->
              <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">What is Cardiology?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">Cardiology is the branch of medicine that deals with the diagnosis, treatment, and prevention of diseases and conditions related to the heart and cardiovascular system.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">What are the risk factors for heart disease? </a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">Risk factors for heart disease include high blood pressure, high cholesterol levels, smoking, obesity, diabetes, family history of heart disease, sedentary lifestyle, poor diet, stress, and age (the risk increases with age).</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">How do you know if your heart health is good?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">Each pulse represents a heartbeat that pumps blood through your veins. Your pulse can be used by your doctor to assess the strength of your blood flow and blood pressure in different places of your body.
					</div>
                  </div>
                </div>
				<div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">How can I prevent heart disease?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">To prevent heart disease, it's important to adopt a heart-healthy lifestyle. This includes eating a balanced diet low in saturated and trans fats, being physically active, maintaining a healthy weight, avoiding tobacco use, managing stress, controlling blood pressure and cholesterol levels, and getting regular check-ups and screenings.
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