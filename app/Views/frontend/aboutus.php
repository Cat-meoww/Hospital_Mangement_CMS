<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>
 <!--
      ============================
      Page Title #12 Section
      ============================
      -->
      <section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img  src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content" style="padding-bottom: 75px !important;"> 
            <div class="row"> 
              <div class="col-12 col-lg-5" style="margin-top:50px;">
                <h2 class="hero-title" >About us</h2>
                <p class="hero-desc">The name GEM Hospital was derived from Gastroenterology and Medical Centre and true to its name.</p>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12"> 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('index')?>">Home</a></li>
                  <li class=""><a href="<?= base_url('aboutus')?>">About us</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--
      ============================
      About #1 Section
      ============================
      -->
      <section class="about about-1" id="about-1">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="heading heading-2">
                <div class="row"> 
                  <div class="col-12 col-lg-10">
                     <p class="paragraph" style="color:green;">About Us</p>
                  </div>
                  <div class="col-12 col-lg-10">
                    <h2 class="heading-title">Institute of Gastrointestinal Endo-Surgery</h2>
                    <p class="heading-desc" style="color: black;">We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type you require. We treat all enquiries in confidence.</p>
                    <div class="signature-block"> <div class="signature-body"> 
                    <h6 style="font-size:70px; color:green;" class="heading-title">32+</h6>
                        <p class="heading-subtitle"style="color:black; font-weight:bold; margin-top:20px; font-size:16px;" >Years Experienced</h1>
                    </div>
                      <div class="signature-body about-cls1" style="margin-left: 130px; "> 
                        <h6 style="font-size:70px; color:green;" class="heading-title">211+</h6>
                        <p class="heading-subtitle"style="color:black; font-weight:bold; margin-top:20px; font-size:16px;" >Specialist Doctor</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <style>
              @media screen and (max-width:600px) {
                .signature-block{
                  display:flex;
                  flex-direction:column;
                }.about-cls1{
                  margin-top:8%;
                  margin-right:30%;
                }
              }
            </style>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
              <div class="about-img"><img class="img-fluid"  src="<?= base_url('frontend/assets/images/about/doctor.png') ?>" alt="about Image"/><!----<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-----></div>
            </div>
            <!-- End .col-lg-5-->
            <div class="col-12"> 
              <div class="about-image-bottom" style="margin-top: 80px;"> <img  src="<?= base_url('frontend/assets/images/about/APJ.jpg') ?>" alt="image" /></div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!--
      ============================
      Features #1 Section
      ============================
      -->
      <section class="features bg-overlay bg-overlay-theme" id="features-1">
      <div class="bg-section"> <img  src="<?= base_url('frontend/assets/images/about/APJ.jpg') ?>" alt="Background" /></div>
      <style>
        .bg-overlay-theme:before{
          background-image:linear-gradient(-90deg, #89e98894 18%, #89e98894 70%) !important;
        }
        </style>
      <div class="container">
        <div class="heading heading-3 heading-light">
          <div class="row">
            <div class="col-12 col-lg-5">
              <h3 class="" style="color: black; font-size:24px;">“Health does not always come from medicine, Most of the time it comes from peace
                of mind, peace in the heart, and peace of soul. It comes from laughter and love”
                – Apj Abdul Kalam</h3>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
              <h3 class="heading-title" style="color: black;">About Prof C Palanivelu</h3>
              <p class="desc" style="color: white;">Chairman - GEM Hospitals</p>
              <h4 class="heading-title" style="color: black;">Development of Laparoscopic Surgery in India</h4>
              <p class="paragraph" style="color: white;">Dr Palanivelu was first to introduce Iaparoscopic surgery in south India. He was
                instrumental in popularizing this new branch of medicine in India. He applied Iaparoscopic technique to
                all types of surgery including cancer surgery.</p>
              <h3 class="heading-subtitle" style="color: black;">Humble Background :</h3>
              <p class="heading-desc" style="color: white;">Born in a poor family of agricultural workers, he completed primary education
                overcoming great difficulties. But this motivated him to do service to the poor through free medical
                camps and treating thousands of poor patients. He also trained hundreds of rural surgeons.</p>
              <h3 class="heading-subtitle" style="color: black;">Laparoscopic Revolution – A must for India</h3>
              <p class="heading-desc" style="color: white;">Laparoscopic surgery is beneficial to all sections of society as they recover
                quickly from surgery without pain and go back to work early. Making it possible to provide Laparoscopic
                surgery at affordable cost through his innovations has been the essence of his contribution to Medicine.
              </p>
              <h3 class="heading-subtitle" style="color: black;">Held in High esteem by peers</h3>
              <p class="heading-desc" style="color: white;">He has been a great teacher and guiding force to all Laparoscopic surgeons and was
                accorded the title of “Beeshmacharya
              </p>
              <!---<div class="actions-holder"><a class="btn btn--transparent btn--inversed btn-line btn-line-after" href="page-faqs.html"> <span>our core values</span><span class="line"> <span></span></span></a><a class="btn btn--white" href="page-about.html">more about us</a></div>---->
            </div>
          </div>

        </div>

        <!----<div class="features-holder">
            <div>
              <div class="feature-panel-holder" data-hover="">
                <div class="feature-panel">
                  <div class="feature-icon"><i class="flaticon-007-stethoscope"></i></div>
                  <div class="feature-content">
                    <h4>Medical Advices &amp; Check Ups</h4>
                    <p>Consult our doctors any time.</p>
                  </div><a href="javascript:void(0)"><i class="fas fa-angle-down"></i> </a>
                </div>
               
              </div>
            </div>
            <div>
              <div class="feature-panel-holder" data-hover="">
                <div class="feature-panel">
                  <div class="feature-icon"><i class="flaticon-026-education"></i></div>
                  <div class="feature-content">
                    <h4>Trusted Medical Treatment</h4>
                    <p>Free coverage adults with limited income.</p>
                  </div><a href="javascript:void(0)"><i class="fas fa-angle-down"></i> </a>
                </div>
                
              </div>
            </div>
            <div>
              <div class="feature-panel-holder" data-hover="">
                <div class="feature-panel">
                  <div class="feature-icon"><i class="flaticon-036-aid"></i></div>
                  <div class="feature-content">
                    <h4>Emergency Help Available</h4>
                    <p>Contact our reception staff any time.</p>
                  </div><a href="javascript:void(0)"><i class="fas fa-angle-down"></i> </a>
                </div>
               
              </div>
            </div>
            <div>
              <div class="feature-panel-holder" data-hover="">
                <div class="feature-panel">
                  <div class="feature-icon"><i class="flaticon-032-medicine"></i></div>
                  <div class="feature-content">
                    <h4>Medical Research</h4>
                    <p>Provide all medical aspects practice</p>
                  </div><a href="javascript:void(0)"><i class="fas fa-angle-down"></i> </a>
                </div>
                
              </div>
            </div>
            <div>
              <div class="feature-panel-holder" data-hover="">
                <div class="feature-panel">
                  <div class="feature-icon"><i class="flaticon-046-blood-pressure"></i></div>
                  <div class="feature-content">
                    <h4>Only Qualified Doctors</h4>
                    <p>Qualified doctors available 24/7</p>
                  </div><a href="javascript:void(0)"><i class="fas fa-angle-down"></i> </a>
                </div>
                
              </div>
            </div>
          </div>------>

        <!----<div class="more-features"> 
            <p>Connecting with the world to improve health globally. <a href="#">explore our doctors </a></p>
          </div>----->
      </div>

    </section>
      <!--
      ============================
      Donations #1 Section
      ============================
      -->
      <!----<section class="donations" id="donations-1">
        <div class="container">
          <div class="heading heading-4">
            <div class="row">
              <div class="col-12 col-lg-5">
                <h2 class="heading-title">Helping Patients From Around the Globe!!</h2>
                <div class="img-hotspot"> 
                  <div class="img-hotspot-wrap">
                    <div class="img-hotspot-bg"> <img src="assets/images/background/world-map.png" alt="image"/></div>
                    <div class="img-hotspot-pointers">
                      <div class="img-hotspot-pointer" data-spot-x="15%" data-spot-y="29%"><img src="assets/images/background/map-pointer.png" alt="pointer"/>
                        <div class="info right" data-info-x="18px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                      </div>
                      <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img src="assets/images/background/map-pointer.png" alt="pointer"/>
                        <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                      </div>
                      <div class="img-hotspot-pointer" data-spot-x="68%" data-spot-y="23%"><img src="assets/images/background/map-pointer.png" alt="pointer"/>
                        <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 offset-lg-1">
                <p class="paragraph">Our staff strives to make each interaction with patients clear, concise, and <Br> inviting. Support them important work of Medicsh Hospital by making a <Br> much-needed donation today.</p>
                <p class="heading-desc">We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries sensitively and in the strictest confidence.</p>
                <div class="accordion" id="accordion03">
                  <div class="card">
                    <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                    <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                      <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                    <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                      <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                    <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                      <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                    </div>
                  </div>
                </div><a class="btn btn--primary" href="contact.html">make a gift <i class="fas fa-heart"></i></a>
              </div>
            </div>
            
          </div>
         
        </div>
        
      </section>---->
	  <section class="cta cta-3" id="cta-3">
	          <div class="processes"> 
          <div class="row g-0 heading"> 
		  <p class="paragraph" style="text-align: center;">Our Values</p>
		  <h5 class="heading-title" style="text-align: center; font-size: 40px;">Quality, safety, and security</h5>
            <div class="col-md-4 my-2">
              <div class="process-panel" data-hover="">
                <p class="process-number">01.</p>
                <div class="process-body"> 
                  <div class="process-icon"> <i class="flaticon-023-medical-history" style="color:#0d3e21 !important;"></i></div>
                  <div class="process-content"> 
                    <h5>Vision</h5>
                    <p style="color: black;">To emerge as global health care facilitator providing world-class facilities in tune with evolving technology and promoting health endeavors with quality service.</p>
					<!----<a class="btn-line btn-line-before btn-line-inversed" href="doctors-timetable.html"><span class="line"> <span> </span></span><span>doctors timetable</span></a>---->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="process-panel" data-hover="">
                <p class="process-number">02.</p>
                <div class="process-body"> 
                  <div class="process-icon"> <i class="flaticon-043-cardiogram"></i></div>
                  <div class="process-content"> 
                    <h5>Mission</h5>
                    <p style="color: black;">To provide comprehensive health care by the dedicated efforts in bringing the wellness of the society to fore through the harmonious blend of technology expertise & compassion.</p><!--<a class="btn-line btn-line-before btn-line-inversed" href="javascript:void(0)"><span class="line"> <span> </span></span><span>Start A Check Up</span></a>--->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="process-panel" data-hover="">
                <p class="process-number">03.</p>
                <div class="process-body"> 
                  <div class="process-icon"> <i class="flaticon-027-medical-report"></i></div>
                  <div class="process-content"> 
                    <h5>Quality Policy</h5>
                    <p style="color: black;">GEM Hospital is committed to providing value-added, innovative, and continually improving quality health care services interfaced with futuristic technology.</p><!---<a class="btn-line btn-line-before btn-line-inversed" href="javascript:void(0)"><span class="line"> <span> </span></span><span>explore programs</span></a>---->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		</section>
		<br><br>
      <!--
      ============================
      Team Carousel #1 Section
      ============================
      -->
     <section class="team team-modern team-carousel" id="teamCarousel-1">
      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <div class="heading heading-5">
              <h2 class="heading-title">Bed strength at Coimbatore</h2>
              <p class="heading-desc" style="color: black; display: block;">The initial bed strength at Coimbatore was
                100 and in 2008, another block of 100 beds were added to cater to the ever-increasing demand. Various
                facilities were being added one after the other keeping pace with this rapidly expanding field. As a
                result of these concrete and concentrated efforts, GEM Hospital earned a worldwide reputation in no time
                and continued to march towards its quest for quality gastro care. Not a year passed off without a major
                milestone being added to this illustrious journey in the world of minimally invasive surgery.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="carousel owl-carousel carousel-navs" data-slide="3" data-slide-rs="2" data-autoplay="true"
               data-dots="false" data-space="30" data-loop="true" data-speed="3000">
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="<?=base_url('doctorinfo')?>"></a><img  src="<?= base_url('frontend/assets/images/team/grid/27.jpg') ?>"
                         alt="team member" /></div>
                    <!-- End .team-img-->
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                          <h4><a href="<?= base_url('doctorinfo')?>">Prof C Palanivelu</a></h4>
                        </div>
                        <!---<div class="team-cat"><a href="#">Cardiology Specialist</a></div>--->
                        <div class="team-desc">
                          <p>MS, MCh, DNB, FACS, FRCS(Hon) Ed.,Chairman – GEM Hospital and Research Centre</p>
                        </div>
                        <a class="btn btn--primary btn-line btn-line-after" href="<?= base_url('doctorinfo')?>"><span>Know
                            More</span><span class="line"><span></span></span></a>
                      </div>

                      <!-- End .team-content-->
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href="<?= base_url('doctorinfo')?>"></a><img src="<?= base_url('frontend/assets/images/team/grid/22.jpg') ?>"
                         alt="team member" /></div>
                    <!-- End .team-img-->
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                          <h4><a href="<?= base_url('doctorinfo')?>">Dr P Praveen Raj</a></h4>
                        </div>
                        <!---<div class="team-cat"><a href="#">Dermatologists</a></div>--->
                        <div class="team-desc">
                          <p>MS, DNB, Fellowship in Bariatric Surgery, Ph.D., FACS, FALS, FMAS, FICS, FIBC,Chief
                            Executive Officer– GEM Hospital and Research Centre</p>
                        </div>
                        <a class="btn btn--primary btn-line btn-line-after" href="<?= base_url('doctorinfo')?>"><span>Know
                            More</span><span class="line"><span></span></span></a>
                      </div>
                      <!-- End .team-content-->
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="team-member" data-hover="">
                  <div class="team-member-holder">
                    <div class="team-img"><a class="link" href=""></a><img
                        src= "<?=base_url('frontend/assets/images/team/grid/8.jpg')?>" alt="team member" /></div>
                    <!-- End .team-img-->
                    <div class="team-content-holder">
                      <div class="team-content">
                        <div class="team-title">
                          <h4><a href="<?=base_url('doctorinfo')?>">Dr R Parthasarathi</a></h4>
                        </div>
                        <!----<div class="team-cat"><a href="#">Pediatrician</a></div>---->
                        <div class="team-desc">
                          <p>MS., FAMS., Ph.D.,,
                            Chief Operative Officer– GEM Hospital and Research Centre</p>
                        </div>
                        <a class="btn btn--primary btn-line btn-line-after" href="<?=base_url('doctorinfo')?>"><span>Know
                            More</span><span class="line"><span></span></span></a>
                      </div>
                      <!-- End .team-content-->
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <!---<div class="col-12"> 
              <div class="action-bar">
                <p class="note"><span><i class="fas fa-calendar-day"></i> on monday, </span> Doctors will be available from 8 am : 12 am , kindly call to confirm your Appointment </p><a class="btn btn--primary btn-line btn-line-after" href="page-appointments.html"><span>make appointment</span><span class="line"><span></span></span></a>
              </div>
            </div>---->
        </div>
        <!-- .row-->
      </div>
      <!-- .container-->
    </section>
      <!--
      ============================
      Cta #3 Section
      ============================
      -->
      
<section class="about about-1" id="about-1" style="font-family: var(--e-global-typography-d3dae9a-font-family), Sans-serif;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="heading heading-2">
              <div class="row">
                <div class="col-12 col-lg-10">
                  <p class="paragraph">Awards and Achievement</p>
                </div>
				<div class="col-12 col-md-12">
				<h2 class="heading-title">Dr BC Roy National Awardee 2006 and 2015</h2>
				</div>
                <div class="col-12 col-lg-10 offset-lg-2">
				   
                  <div class="col-12 col-lg-12">
                    <div class="entry-infos entry-introduction">
                      <div class="row">
                        <div class="col-12 col-lg-6" style="font-size: 16px;">
                          <ul class="list-unstyled advantages mb-0">
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> Award by <b>House of
                                Commons,</b> UK Parliament 2018 for contribution to the development of Laparoscopic
                              surgery.
                            </li><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> <b>First Indian to win
                                Silver Medal</b> in International Olympic Minimal Access Surgery competition.
                            </li><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i><b> Best Technique Award
                                for Cancer Esophagus,</b> 10th International Society of Disease of Esophagus, Japan,
                              2010

                            </li><br><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> Innovated over <b>20
                                new operative techniques</b>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-lg-6" style="font-size: 16px;">
                          <ul class="list-unstyled advantages">
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> Authored many books in
                              surgery which are of<b> International repute</b>
                            </li><br><br><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> <b>Life Time
                                Achievement Award</b> of District Rotary Coimbatore, 2012
                            </li><br><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i> First Indian surgeon
                              who was accorded the privilege to operate and teach in various countries including UK,
                              USA, Hong Kong, Argentina etc
                            </li><br>
                            <li style="color: black;">
                              <i class="fa fa-circle" style="color: black; font-size: 8px;"></i><b> “Living Legend of
                                Laproscopy Award”</b> by New York City Council & New York Tamil Sangam 2012
                            </li><br>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="signature-block">
                    <div class="signature-body">
                      <img class="signature-img" src= " <?=base_url('frontend/assets/images/signature/3.png')?>" alt="signature" /> <br><br><br>
                     
                      <p>Chairman , GEM Hospitals</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-12 col-lg-5 offset-lg-1 md-5">
            <div class="about-img"><img class="img-fluid"  src= " <?=base_url('frontend/assets/images/about/a3.jpg')?>" alt="about Image" /></div>
          </div>
          

        </div>
        
      </div>
    
    </section>
	        
      <!---<section class="cta cta-3" id="cta-3">
        <div class="container">
          <div class="heading heading-6">
            <div class="row">
              <div class="col-12 col-lg-5">
                <p class="heading-subtitle">Caring For The Health Of You And Your Family.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-5">
                <h2 class="heading-title">We Provide All Aspects Of Medical Practice For Your Whole Family!</h2>
              </div>
              
              <div class="col-12 col-lg-6 offset-lg-1">
                <div class="prief-set">
                  <p>We pride ourselves on providing the best transport and shipping services available allover the world. Our skilled personnal and processing software, combined with decades of experience! Through integrated supply chain solutions, Equita drives sustainable competitive advantages to some of Australia's largest companies.</p>
                  <ul class="list-unstyled advantages-list">
                    <li><i class="fas fa-check"></i> Quality Control System</li>
                    <li><i class="fas fa-check"></i> Unrivalled workmanship</li>
                    <li><i class="fas fa-check"></i> 100% Satisfaction Guarantee</li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
        </div>

       
      </section>---->



<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>