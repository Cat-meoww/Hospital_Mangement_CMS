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
                  <h1>Nephrology</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>We offer a range of advanced diagnostic tests and procedures to accurately assess kidney function and identify underlying causes of kidney disorders.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Nephrology</li>
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
                    <div class="bg-section"><img src="<?= base_url('frontend/assets/images/video/13.png') ?>"    alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                Our Nephrology Department is dedicated to providing exceptional care for patients with kidney-related conditions. Led by a team of highly skilled nephrologists, we offer a comprehensive range of services to diagnose, treat, and manage various kidney diseases.</p>
				  
                  <!--We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries in the strictest confidence.-->
                  
                 

                    <!--Today hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research.-->
                 
                 
                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">

                    <div class="widget widget-reservation widget-reservation-2">
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
                          <li><a href="single-service.html"> <span class="line"> <span></span></span><span>Video
                                Consultation</span></a></li>
                          <li><a href="single-service.html"> <span class="line"> <span></span></span><span>Visit to
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
                      <li><i class="fas fa-check"></i> Acute Kidney Injury</li>
                      <li><i class="fas fa-check"></i> Chronic Kidney Disease</li>
                      <li><i class="fas fa-check"></i> Glomerulo Nephritis</li>
					  <li><i class="fas fa-check"></i> SLE (Systemic Lupus Erythematosus)</li>
                      <br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Tests and Treatments Offered</h5>
					
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Temporary Dialysis Catheter Placement (IJC/SC)</li>
                      <li><i class="fas fa-check"></i> Permcath Placement</li>
                      <li><i class="fas fa-check"></i> CAPD Catheter Placement</li>
                      <li><i class="fas fa-check"></i> Renal Biopsy</li>
					  <li><i class="fas fa-check"></i> AV Fistula Creation</li>
					  <li><i class="fas fa-check"></i> Plasmapheresis</li>
                      <li><i class="fas fa-check"></i> Hemoperfusion for poisoning</li>
                      <li><i class="fas fa-check"></i> Bilirubin Removal Dialysis</li>
                      <li><i class="fas fa-check"></i> Kidney Transplant</li>
                      
					  
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
                <p class="heading-subtitle" style=" font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary);">Patients Story</p>
                <h2 class="heading-title" style="color:#118B0F;">Loved by our Patients</h2>
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
                      <p>Expert and experienced doctors at GEM hospital are quick to diagnose and resolve the issues. Good patient care!</p>
                    </div>
                    <div class="department-more" style="color: black;font-size:16px;"><strong>Suresh S</strong></a></div>
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
                      <p>Expert and experienced doctors at GEM hospital are quick to diagnose and resolve the issues. Good patient care!.</p>
                    </div>
                    <div class="department-more"  style="color: black;font-size:16px;"><strong>Vijaya Rani</strong></div>
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
  color: var(--global--color-secondary); text-align: center; ">FAQ</h2>
              <h1 class="entry-heading" style="font-size: 37px; text-align: center; color:#118B0F;">Frequently Ask Questions</h1>
              <!---<p class="entry-desc">We help create a care plan that addresses your specific condition and we are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes.</p>---->
              <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">What are the leading causes of acute kidney injury (AKI)?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">Acute kidney injury can result from conditions or factors that reduce kidney function suddenly. Common causes include severe infections (such as sepsis), dehydration, kidney damage due to medications or toxins, urinary tract obstructions, major surgeries, blood loss, and certain medical conditions affecting blood flow to the kidneys.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">What causes chronic kidney disease (CKD)? </a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">Chronic kidney disease can have various causes. The most common ones include diabetes, high blood pressure (hypertension), glomerulonephritis (inflammation of the kidney filters), polycystic kidney disease (a genetic disorder causing cysts in the kidneys), kidney infections, urinary tract obstructions, and certain autoimmune diseases.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What is dialysis, and when is it needed?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">Dialysis is a medical procedure that helps remove waste products and excess fluid from the blood when the kidneys are unable to perform their function adequately. It is typically needed for individuals with end-stage renal disease (ESRD) or severe kidney failure. There are two types of dialysis: hemodialysis and peritoneal dialysis.
					</div>
                  </div>
                </div>
				<div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What is a kidney transplant?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">A kidney transplant is a surgical procedure in which a healthy kidney from a living or deceased donor is transplanted into a recipient with kidney failure. Nephrologists work closely with transplant surgeons and play a vital role in the evaluation, pre- and post-transplant care, and long-term management of kidney transplant patients.
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