<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="page-title page-title-3 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
      <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>"  alt="Background" /></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0" >
            <div class="title">
              <div class="title-card"  style="margin-top: -180px ;">
                <div class="title-heading">
                  <!---<h1>Pediatric Clinic</h1>---->
                  <h1>Digestive Cancer Care</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>Revolutionized the surgery for cancer Oesophagus known as Palanivelu’s Technique of Oesophagectomy.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Digestive Cancer Care</li>
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
                    <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/video/11.png') ?>"  alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                   One of the earliest centers in world to prove Laparoscopic cancer surgery was as effective as open surgery for Cancer Care. Further, we also showed this world that laparoscopic cancer surgery was much superior to open surgery in terms of patient comfort. </p>
				   <p class="desc">In GEM, the Best Cancer hospital in India, with the unstoppable efforts of Prof.C.Palanivelu and his team, through their innovations have shown that any kind of gastrointestinal cancers like
				   </p>
				   <p class="desc">&bull; Oesophagus cancer</p>
                    <p class="desc">&bull; Stomach</p>
                    <p class="desc">&bull; Liver</p>
					<p class="desc">&bull; Pancreas</p>
                    <p class="desc">&bull; Intestines</p>
                    <p class="desc">&bull; Uterus, etc., </p>
					
                    <p class="desc">can be safely removed. With the newer technologies in surgery and imaging like the da Vinvi robotic system, 4K, and 3D laparoscopy, the magnification and visualisation are now 10 times better than the human eye, making these surgeries superior translating to better outcomes.</p>
                    
                  
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
                      <li><i class="fas fa-check"></i> Gastro –esophageal junction malignancies</li>
                      <li><i class="fas fa-check"></i> Stomach</li>
                      <li><i class="fas fa-check"></i> Hepato- Biliary</li>
                      <li><i class="fas fa-check"></i> Appendix</li>
					  <li><i class="fas fa-check"></i> Colorectal</li>
                      <li><i class="fas fa-check"></i> Peritoneum</li>
                      <br><br>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6">

                    <h5 class="desc">Tests and Treatments Offered</h5>
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Laparoscopic & Robotic Esophagectomy</li>
                      <li><i class="fas fa-check"></i> Laparoscopic & Robotic gastrectomy – Distal, total , segmental</li>
                      <li><i class="fas fa-check"></i> Laparoscopic & Robotic Whipples</li>
                      <li><i class="fas fa-check"></i> Laparoscopic & Robotic Distal pancreatectomy</li>
					  <li><i class="fas fa-check"></i> Laparoscopic & Robotic – Rectal surgery</li>
                      <li><i class="fas fa-check"></i> HIPEC</li>
					  
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
                      <p>Dr. C. Palanivelu innovated a ‘prone position technique’ of Thoraco-laparoscopic esophagectomy</p>
                      <!--<p>Recognised as a world renowned institution. consult our doctors by visiting us.</p>-->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>medical treatment</h5>--->
                      <p>Our GEM hospitals has introduced a newer way of Initila reteoileal endocopic tunneling approach</p>
                      <!---<p>Free or low cost coverage adults with limited income recognised.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Emergency 24/7</h5>---->
                      <p>First totally Laparoscopic Whipple’s procedure in the world was performed by the chairman Prof.C.Palanivelu</p>
                      <!---<p>Contact our reception with any medical enquiry for low cost coverage adults.</p>--->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      <!---<h5>Research Pros</h5>--->
                      <p>GEM technique of Esophagectomy is recognized as the World's Best technique</p>
                      <!---<p>All medical aspects practice for family, our reception staff with any medical enquiry.</p>---->
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
                      <p>I really appreciate the expertise doctors for their skills of perfection and performance which I experienced recently.The staffs are all very cooperative, explained everything well...GEM stands for it's credibility....</p>
                    </div>
              
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Dhananjayan k</p>
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
                      <p>Efficient and higly skilled team of Doctors, helpful staffs and flawless system. Provided a nice surgical care to me . Thank you all.</p>
                    </div>
                
                    <div class="department-more">
                    <p style="color: black;font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: black;">Shinuma Papuma</p>
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
  font-weight: 500;">Know More about Digestive Cancer Care</h6>
                    </div>
                  </div>
                </div>
				<br>
                <!-- End .row-->
                <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                  data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                  <div class="col-12 col-lg-8">
                   
                    <div class="about-img"><img class="img-fluid"   src="<?= base_url('frontend/assets/images/blog/grid/17.jpg') ?>"  style="position: relative;"
                        alt="about Image" /><br><a class=""
                        href="https://www.youtube.com/watch?v=nrJtHemSPW4">  <img src="<?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;" class="bn-1"/>
                       
                        </a></div>
                       
                  </div>
                  
                  <div>
                    <div class="col-12 col-lg-8">
                      <div class="about-img"><img class="img-fluid"
                           src="<?= base_url('frontend/assets/images/blog/grid/colon2.jpg') ?>"  alt="about Image" /><br><a
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
              <h2 class="desc" style="text-align: center;  font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-secondary); ">FAQ</h2>
              <h1 class="entry-heading" style="text-align: center; color:#118B0F; font-family: var(--global--font-heading);
  text-transform: capitalize;
  font-size: 40px;
  line-height: 55px;
  margin-bottom: 25px;
  font-weight: 500;">Frequently Ask Questions.</h1>
              <!---<p class="entry-desc">We help create a care plan that addresses your specific condition and we are here to answer all of your questions & acknowledge your concerns. Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes.</p>---->
              <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">What are the causes and risk factors for stomach cancer?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">The exact cause of stomach cancer is not known, but certain risk factors can increase the likelihood of developing the disease. These include infection with Helicobacter pylori bacteria, a history of stomach polyps or chronic gastritis, smoking, family history of stomach cancer, a diet high in salty and smoked foods, obesity, and certain genetic conditions.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">What is pancreatic cancer? </a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">Pancreatic cancer is a malignant tumor that forms in the tissues of the pancreas, an organ located behind the stomach. It is a serious and often aggressive form of cancer.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Is esophageal cancer hereditary?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">YIn some cases, esophageal cancer can have a genetic component. Certain inherited gene mutations, such as mutations in the TP53 gene or familial cancer syndromes like Lynch syndrome, can increase the risk of developing esophageal cancer. If you have a family history of esophageal cancer, it is advisable to consult with a genetic counselor or healthcare professional to assess your individual risk.</div>
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