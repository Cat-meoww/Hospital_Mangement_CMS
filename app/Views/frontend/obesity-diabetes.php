<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>


<section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
      <div class="bg-section"><img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="Background" /></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0" >
            <div class="title">
              <div class="title-card"  style="margin-top: -180px ;">
                <div class="title-heading">
                  <!---<h1>Pediatric Clinic</h1>---->
                  <h1>Obesity & Diabetes</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>Surgery is an art! Bariatric surgery is science. A science of changing people’s lives !! GEM Obesity & Diabetes Surgery Centre is now the proud recipient of South India’s FIRST & ONLY Bariatric Surgery Centre of Excellence (COE).</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Obesity & Diabetes</li>
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
                    <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/video/obesity.jpg') ?>" alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                   Dr. P. Praveen Raj is responsible for placing GEM Obesity and Diabetes centre as a centre of excellence globally. He and his team are credited with performing over 3000 bariatric surgical procedures. </p>
				   <p class="desc">Dr. P. Praveen Raj is responsible for placing GEM Obesity and Diabetes centre as a centre of excellence globally. He and his team are credited with performing over 3000 bariatric surgical procedures.
				   </p>
				   <p class="desc">Our mission is to “holistically and safely approach to treat obesity and its associated disorders”. This is effectively done with our multi disciplinary team headed by Dr.Praveen raj. The team consists of Bariatric surgeons, Bariatric anaesthetist, bariatric nutritionist, Psycologist, pysiotherapist, fitness trainer,intensivist,Physician, Cardiologist and a bariatric coordinator.
				   </p>
                    <p class="desc">Our vision is to ‘motivate and empower people in their fight against obesity’ by creating awareness, giving support and extending out our resources for effective coverage of affected people.</p>
                    
                  
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
                      <li><i class="fas fa-check"></i> Morbid Obesity</li>
                      <li><i class="fas fa-check"></i> Type 2 Diabetes mellitus</li>
                      <li><i class="fas fa-check"></i> Hypertension</li>
                      <li><i class="fas fa-check"></i> Obstructive Sleep Apnea</li>
					  <li><i class="fas fa-check"></i> Dyslipidemia</li>
                      <li><i class="fas fa-check"></i> Hernia</li>
                      <li><i class="fas fa-check"></i> Arthritis</li>
                      <li><i class="fas fa-check"></i> PCOD</li>
					  <li><i class="fas fa-check"></i> Infertility</li>
                      <li><i class="fas fa-check"></i> Vericose Vein</li>
                      <br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Tests and Treatments Offered</h5>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Weight Loss Surgery</li>
                      <li><i class="fas fa-check"></i> Diabetes Surgery</li>
                      <li><i class="fas fa-check"></i> Laparoscopic Adjustable Gastric Banding(LAGB)</li>
                      <li><i class="fas fa-check"></i> Laparoscopic Sleeve Gastrectomy (SG)</li>
					  <li><i class="fas fa-check"></i> Laparoscopic Roux en Y Gastric Bypass ( RYGB)</li>
                      <li><i class="fas fa-check"></i> Endoscopic Bariatric Surgery</li>
                      <li><i class="fas fa-check"></i> Swallowable Gastric Balloon</li>
                      <li><i class="fas fa-check"></i> Laparoscopic Mini Gastric Bypass</li>
					  
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
              <h6 class="entry-heading" style="text-align: center;  font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary);">Our Department</h6>
              <h5 class="entry-heading" style="text-align: center; color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Awards and Achievement</h5>
              <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!--<h5>medical check ups</h5>-->
                      <p>Over 4500 Obesity surgeries performed at GEM</p>
                      <!--<p>Recognised as a world renowned institution. consult our doctors by visiting us.</p>-->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>medical treatment</h5>--->
                      <p>Duodeno-jejunal bypass was 1st performed in India by Dr Palanivelu</p>
                      <!---<p>Free or low cost coverage adults with limited income recognised.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>First Single Incision Gastric Bypass in India</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Research Pros</h5>--->
                      <p>700+ cases of SILS Bariatric Surgeries have been performed in India</p>
                      <!---<p>All medical aspects practice for family, our reception staff with any medical enquiry.</p>---->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>1st Laparoscopic Gastric Bypass in the country was done in GEM by Dr Palanivelu</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>7 Laparofit ( a niche Bariatric Conference) have been successfully conducted</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>South India’s FIRST Bariatric Surgery Centre of Excellence (BSCOE) designation in India.</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>Performed First single incision Laparoscopic Roux en Y Gastric Bypass in the country</p>
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
                <h6 class="" style=" font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary);">Patients Story</h6>
                <h2 class="heading-title" style="text-align: center; color:#118B0F; font-family: var(--global--font-heading);
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
                      <p>All my life I’ve been overweight. I tried weight loss programs but always gained the weight back. This time when I decided to lose weight it was more for my health than it was for vanity reasons. My blood pressure was elevating, my cholesterol was high, and I was suffering from arthritis. My weight was out of control.</p>
                    </div>
                    
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Mrs.Sunita Choudhary</p>
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
                      <p>Good service they carry us with full care.The laproscopy treatment is very good.The treatment was 99.9% fullfill to the parents.the facilities was top-notch.</p>
                    </div>
                   
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Ammancell Koduvai</p>
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
            <section class="blog blog-grid blog-grid-3" id="blog-2">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">

                      <h6 class="entry-heading" style="text-align: center; color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Know More about Obesity and Diabetes</h6>
                    </div>
                  </div>
                </div>
				<br>
                <!-- End .row-->
                <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                  data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                  <div class="col-12 col-lg-8">
                   
                    <div class="about-img"><img class="img-fluid"  src="<?= base_url('frontend/assets/images/blog/grid/o1.jpg') ?>" style="position: relative;"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <img src="<?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;" class="bn-1"/>
                       
                        </a></div>
                       
                  </div>
                  <div class="col-12 col-lg-8">
                    <div class="about-img"><img class="img-fluid"  src="<?= base_url('frontend/assets/images/blog/grid/o2.jpg') ?>"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src="<?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;" class="bn-1"/>
                        </a></div>
                  </div>
                  <div>
                    <div class="col-12 col-lg-8">
                      <div class="about-img"><img class="img-fluid"
                           src="<?= base_url('frontend/assets/images/blog/grid/o3.jpg') ?>" alt="about Image" /><br><a
                          class=""
                          href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <img src="<?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;" class="bn-1"/>
                          </a></div>
                    </div>
                    <!-- End .entry-content-->
                  </div>
                </div>
                <!-- End .carousel-->
              </div>
            </section>
            <style>
              
              @media screen and (max-width:600px) {
                .bn-1{
                  position: absolute;
                  left: 40% !important;
                }
                
              }
            

          </style>

            <div class="entry-infos tips-info">
              <h2 class="desc" style=" font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary); text-align: center; ">FAQ</h2>
              <h1 class="entry-heading" style="text-align: center; color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Frequently Ask Questions</h1>
              <!---<p class="entry-desc">We help create a care plan that addresses your specific condition and we are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes.</p>---->
              <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Who needs Laparoscopic bariatric surgery?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">The bariatric surgery(obesity treatment) is mainly for people who have a body mass index (BMI) of more than 27.5. This body mass index is the main criterion on which the eligibility of bariatric surgery is considered such as,<br>
					1. Patient with a BMI of 27.5-35,i.e Obesity grade 1,with-Serious weight related issues,Obstructive sleep apnea,Diabetes,Hypertension,PCOD,Arthritis,NASH,NAFLD ,IHD,KIDNEY FAILUREetc<br>
					2. Patient has a BMI of 35-40 ,i.e Obesity grade 2,with or without serious health issues<br>
					3. All Patients with a BMI of 40 or more.i.e Morbid,super,super super,Mega obesity</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How Does Weight loss surgery work? </a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">The principle of this weight loss surgery is to confine the intake of food and drink to limit the absorption of the food in the intestine. This reduction of nutrients and calorie absorption enables the patient to lose weight.<br>
					This weight-loss operation proceeds by reducing the size of the stomach through the removal of a portion of the stomach (sleeve gastrectomy) or by resecting and re-routing the small intestines to a small stomach pouch (gastric bypass surgeries).</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Does Insurance cover bariatric surgery?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">YES,MOST INSURANCE Cos Do cover Bariatric surgery,subject to Certain requirements Like BMI,Health related issues etc</div>
                  </div>
                </div>
				<div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Any side effects of Bariatric surgery? </a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">A negligible percentage of patients will have mild to moderate side effects post surgery like  Mild Decrease in Taste sense,Increased frequency of stools,Nutritional deficiency causing weakness if not complying strictly to a post bariatric diet & supplementation but all of these are transient and treatable and are offset by the humongous benefits The surgery will get in their lives with the weight loss,Remission or control of metabolic diseases,longevity of lifespan and good quality life amongst many others.</div>
                  </div>
                </div>
				<div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What about weight regain or poor weight loss after surgery? </a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">Weight regain or poor weight loss  post surgery can occur if there is poor compliance of the patient to adhere to the prescribed diet ,Not following the Do’s & Don’t’s of eating & supplementation or can also occur if they are suffering from psychiatric disorders like Binge-eating,depression etc and if they are not treated by a psychiatrist/psychologist.</div>
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