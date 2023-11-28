<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>




<style>
    .owl-item>.slide {
        background-position-y: center !important;
    }
</style>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- 
      ============================
      Slider #04 Section
      ============================
      -->
<section class="slider slider-4" id="slider-4">
    <div class="container-fluid pr-0 pl-0">
        <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800" data-slider-id="#custom-carousel">
            <!--  Start .slide-->
            <div class="slide bg-overlay bg-overlay-dark-slider">
                <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/sliders/coimbatore-gem-hospital-elevation.jpg') ?>" alt="Background" /></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="slide-content">
                                <h1 class="slide-headline">30 years of expertise</h1>
                                <p class="slide-desc">It's a Challenge
                                    Any Surgery can be done Laparoscopically<br>
                                    With Advanced Equipments and Quick Recovery </p>
                                <div class="slide-action"><a class="btn btn--primary btn-line btn-line-after btn-line-inversed" href="page-about.html"> <span>Contact us</span><span class="line">
                                            <span></span></span></a><a class="popup-video btn-video btn-video-2 " href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a></div>
                            </div>
                            <!-- End .slide-content -->
                        </div>
                    </div>

                    <!--  End .row-->
                </div>
            </div>
            <!--  End .slide-->
            <!--  Start .slide-->
            <div class="slide bg-overlay bg-overlay-dark-slider">
                <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/sliders/cancer-gem-hospital-header.jpg') ?>" alt="Background" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="slide-content">
                                <h1 class="slide-headline">30 years of expertise</h1>
                                <p class="slide-desc">The health and well-being of our patients and their health
                                    care team will always be our priority, so we follow the best practices. </p>
                                <div class="slide-action"><a class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1" href="page-about.html"> <span>more about us</span><span class="line">
                                            <span></span></span></a><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a></div>
                            </div>
                            <!-- End .slide-content -->
                        </div>
                    </div>
                    <!--  End .row-->
                </div>
            </div>
            <!--  End .slide-->
        </div>
        <!-- End .slider-carousel-->
    </div>
    <!--  End .container-fluid-->
</section>

<!--
      ============================
      FeaturesBar Section
      ============================
      -->
<section class="features-bar pb-2" id="featuresBar-1">
    <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/background/pattern-2.jpg') ?>" alt="background" /></div>
    <div class="container">
        <div class="row g-0 features-holder">
            <div class="col-12 col-lg-4">
                <!-- Start .widget-reservation-->
                <div class="feature-panel feature-reservation h-100">
                    <div class="feature-content"><i class="flaticon-022-medical"></i>
                        <h5>emergency cases</h5>
                        <p>Please feel free to contact our team for any general or medical enquiry </p>
                       <a href="tel:04224695100"><span class="fas fa-phone-alt" style="
                        
                        color: #118b0f;
                        background-color: #0d3e21;
                      "></span>04224695100</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- Start .widget-timetable-->
                <div class="feature-panel feature-timetable h-100">
                    <div class="feature-content"><img  src="<?= base_url('frontend/assets/images/icons/Video.svg') ?>" alt="background" style=" width:25%;" />
                        <h5>Video Consultation</h5>
                        <p>Book an appointment have a hassle-free discussion with our doctors from your home</p>
                        <a class="btn btn--primary btn-line btn-line-before btn-home2" href="#">
                            <span class="line"> <span>
                                </span></span><span class="">Book now</span></a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-4">
                <!-- Start .widget-location-->
                <div class="feature-panel feature-timetable h-100">
                    <div class="feature-content"><i class="flaticon-042-clinic"></i>
                        <h5>Visit to Hospital </h5>
                        <p>Book an appointment and consult with our expert doctors </p>
                        <a class="btn btn--primary btn-line btn-line-before" href="#">
                            <span class="line"> <span>
                                </span></span><span>Visit now</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="heading heading-15">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="clients-img"> <img   style="width:100%; aspect-ratio: 1/1; object-fit: cover;" src="<?= base_url('frontend/assets/images/sliders/doctor.png') ?>" alt="image"></div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                <h6 class="heading-title" style="font-size: 16px; color:#118B0F;">About Us</h6>
                    <h6 class="heading-title" >GEM Hospital Was Initially Started As Coimbatore Institute Of
                        Gastrointestinal Endo-Surgery (CIGES) In The Year 1991 By Its Founder Dr.C.Palanivelu
</h6>
                    <p class="heading-desc">Over the next 10 years, the institute grew in stature to become the
                        sought-after destination for laparoscopic surgery and gastroenterology. Sensing the
                        importance of providing comprehensive gastro care, Dr.Palanivelu established Asia’s
                        first exclusive gastroenterology and advanced laparoscopic surgery centre, GEM Hospital,
                        in 2001.<br>
                        <b>In fact, the name GEM Hospital was derived from Gastroenterology and Medical Centre
                            and is true to its name.</b> <br>
                        The hospital provides world-class gastro care under one roof
                    </p>
                    
                    <div class="actions-holder"><div class="heading heading-7 text--center">
                        
                   
                    <h2 class="heading-title" style=" font-size : 70px; color:green " >211+</h2>
					<p class="heading-subtitle" style="color:black;">Specialist Doctors</p>
                </div><div class="heading heading-7 text--center year" style="margin-left:100px;">
               
                    <h2 class="heading-title" style=" font-size : 70px; color:green " >32+</h2>
					<p class="heading-subtitle" style="color:black;">Years Experienced</p>
                </div></div>
                <style>
                    @media screen and (max-width:600px) {
                        .year{
                            margin-right:100px;
                        }

                        
                    }
                    </style>
                </div>

            </div>
        </div>
        <!-- End .heading-->
    </div>
    <!-- End .container-->
</section>
<!--
      ============================
      About #4 Section
      ============================
      -->

      <section class="team team-grid team-grid-2" id="teamGrid-1">
    <div class="container">
        <div class="heading heading-9">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="heading-title">What We Do</h2>
                    <p class="heading-desc">After COVID Pandemic, We GEM Hospital started Gem at Home which
                        offers you ICU from Home, Pharmacy door delivery, Online Consultation & Lab & Blood
                        Tests from home (100% Accuracy, No Extra Cost)</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">

                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">iCCOT Service</a></h4>
                            </div>
                            <div class="team-cat"><a href="javascript:void(0)">INTELLIGENT CRITICAL CARE
                                    OUTREACH TEAM</a></div>
                            <div class="team-desc">
                                <p>There is no place like home when it comes to Patient care and comfort. At
                                    iCCOT we commit to put patient care as top priority always!.</p>
                            </div>
                            <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>
                                        Book Now </span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">

                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">
                                        Pharmacy Door Delivery </a></h4>
                            </div>
                            <div class="team-cat"><a href="javascript:void(0)">Get Superfast Medicine Delivery
                                    to your home at GEM PHARMACY</a></div>
                            <div class="team-desc">
                                <p> Upload your Prescription our expert medical team will call you and fulfill
                                    your Medical needs </p>
                            </div>
                            <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>
                                        Upload </span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">

                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">
                                        Lab & Blood Bank </a></h4>
                            </div>
                            <div class="team-cat"><a href="javascript:void(0)">
                                    Quick Lab Tests, Accurate Results from GEM Experts Team </a></div>
                            <div class="team-desc">
                                <p>The packages have been specially curated by doctors to include exactly the
                                    tests you need for a proper analysis of your health—no more & no less.</p>
                            </div>
                            <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before" href="#"> <span class="line"> <span></span></span><span>Book now</span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<section class="about about-4" id="about-4">
    <div class="container">
       
        <div class="avatars-holder">
            <div class="block-top">
                <div class="row">
                    <div class="col-12 col-lg-2 wow fadeInDown">
                        <div class="avatar avatar-1"><img   src="<?= base_url('frontend/assets/images/sliders/Rob5.jpg') ?>" alt="image" /></div>
                    </div>
                    <div class="col-12 col-lg-5 wow fadeIn">
                        <div class="avatar avatar-2  " >
                            <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/about/avatars/Rob1.jpg') ?>" alt="image" />
                            </div>
                            <div class="avatar-content">
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 wow slideInDown">
                        <div class="avatar avatar-3"><img   style="object-fit: cover;" src="<?= base_url('frontend/assets/images/sliders/Rob2.jpg') ?>" alt="image" />
                        </div>
                    </div>
                    <div class="col-12 -col-lg-3"></div>
                </div>
            </div>
            <div class="block-bottom">
                <div class="row">
                    <div class="col-12 offset-lg-1 col-lg-3 wow fadeInLeft">
                        <div class="avatar avatar-5"><img   style="object-fit: cover;" src="<?= base_url('frontend/assets/images/sliders/Rob4.jpg') ?>" alt="image" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 wow slideInUp">
                        <div class="avatar avatar-6"><img   style="object-fit: cover;" src="<?= base_url('frontend/assets/images/sliders/Rob3.jpg') ?>" alt="image" /></div>
                    </div>
                    <div class="col-12 col-lg-3 wow slideInRight">
                        <div class="avatar avatar-4"><img   style="object-fit: cover; width:90%;" src="<?= base_url('frontend/assets/images/sliders/Rob6.jpg') ?>" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .avatars-holder-->
    </div>
    <!-- End .container-->
</section>
<!--
      ============================
      Services #4 Section
      ============================
      -->
<section class="services services-4" id="services-4">
    <div class="bg-section"><img   src="<?= base_url('frontend/assets/images/sliders/cancer-gem-hospital-header.jpg') ?>" alt="background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-7 text--center">
                    <p class="heading-subtitle" style="color:black;">What We Offer</p>
                    <h2 class="heading-title" style="color:black;">Our Services</h2>
                </div>
            </div>
            <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->

        <div class="carousel owl-carousel carousel-dots " data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200">
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-046-blood-pressure"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Multi Organ Transplant</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Gem Hospital & Research Centre is proud to be India’s only Laparoscopic
                                    living donor Multi organ transplant centre.</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed " href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>


                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-029-cardiogram-1"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Esophago Gastric Surgery</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Our hospital has performed more than 2000 esophagus and stomach cancer
                                    surgeries successfully</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-018-medical-2"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Medical Gastroenterology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Gastroenterology procedures include a range of procedures specific to various
                                    ailments. Some of the non-surgical procedures include</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-032-medicine"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Digestive Cancer Care</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We showed the world that laparoscopic cancer surgery was much superior to
                                    open surgery in terms of patient comfort.</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-017-medical-3"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Colorectal Surgery</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We are the First & Only Speciality Center for Piles / Fistula treatment.
                                </p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-007-stethoscope"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Liver & Pancreas</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>It is first exclusive department in India to provide both Robotic &
                                    Laparoscopic surgeries</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-010-ophtalmology"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Endogynaecology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We are happy to share that over 15000 total laparoscopic hysterectomies performed</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-046-blood-pressure"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Obesity & Diabetes</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>With over 4000 cases of obesity surgeries, the department has crossed a lot of impressive milestones</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-044-caduceus"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Hernia Care</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Hernia repairs are so common to have been under-rated as simple procedures which lacks specialisation</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-037-kidney"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Cardiology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>At GEM hospitals, a team of expert is available to provide comprehensive care for patients with cardiovascular diseases</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-027-medical-report"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Urology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>GEM is equipped with the latest technology and advanced equipment for diagnosis and treatment, including robotic-assisted surgery</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100" style="height: 440px !important;" data-hover="">
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <i class="flaticon-046-blood-pressure"></i></div>
                            <div class="service-title">
                                <h4><a href="#">Nephrology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>specialty of adult internal medicine and pediatric medicine that concerns the study of the kidneys</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="page-our-services.html"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
        </div>
        <!-- End .carousel-->
       
    </div>
    <!-- End .container-->
</section>
<!--
      ============================
      Cta #5 Section
      ============================
      -->
<section class="cta cta-5" id="cta-5">
    <div class="bg-section"> <img   src="<?= base_url('frontend/assets/images/background/wavy-pattern.png') ?>" alt="background" /></div>
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="heading heading-8 heading-light">
                <h2 class="heading-title">Why GEM ?</h2>
                <p class="paragraph">We are on the side of humanity.</p>
            </div>
            <div class="prief-set prief-set-2">
                <p style="color: white">Only centre in India with subspecialties in Bariatric, Hepatobiliary, Colorectal,
                    Upper GI,
                    Gastrointestinal cancer surgery, Endogynaecology, Scarless Surgery, Liver Transplantation,
                    Nephrology , Urology etc..</p>
                <div class="advantages-list-holder">
                    <ul class="list-unstyled advantages-list">
                        <li><i class="fas fa-check"></i> Experience</li>
                        <li><i class="fas fa-check"></i> First</li>
                        <li><i class="fas fa-check"></i> 24/7 Support</li>
                    </ul>
                    <ul class="list-unstyled advantages-list">
                        <li><i class="fas fa-check"></i> Health Assessments</li>
                        <li><i class="fas fa-check"></i> High Quality Care</li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-lg-5 offset-lg-1 pt-5">
            <div class="about-img"><img   class="img-fluid" src="<?= base_url('frontend/assets/images/about/a4.jpg') ?>" alt="about Image" style="border-radius: 32px 32px 0px 32px;" /></div>
        </div>

    </div>
    <!-- End .row-->
</section>
<!-- 
      ============================
      Doctors #01 Section
      ============================
      -->
<section class="team team-grid team-grid-2" id="teamGrid-1" >
    <div class="container">
       
        
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

<section class="blog blog-grid blog-grid-4" id="blog-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="heading heading-7 text-center">
                    <h2 class="heading-title">Blogs & Article</h2>
                </div>
            </div>
        </div>
        <!-- End .row-->
        <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200">
            <div>
                <div class="blog-entry" data-hover="">
                    <div class="entry-img">
                    <a href="blog-single-sidebar.html"><img
                                      src="<?= base_url('frontend/assets/images/sliders/banner.jpg') ?>"  style="height: 210px; width: 500px;"
                                        alt="6 tips to protect your mental health when sick" /></a>
                       
             
                    </div>
                    <!-- End .entry-img-->
                    <div class="entry-content">
                        
                        <div class="entry-title">
                            <h4><a href="blog-single-sidebar.html">Is Gastroesophageal Reflux A Disease?</a></h4>
                        </div>
                        <div class="entry-bio">
                            <p>இரைப்பை உணவுக்குழாய் ரிஃப்ளக்ஸ் இது ஒரு நோயா? உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து ...</p>
                        </div>
                        <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="blog-single-sidebar.html">
                                <div class="line"> <span> </span></div><span>read more</span>
                            </a></div>
                    </div>
                </div>
                <!-- End .entry-content-->
            </div>
            <div>
                <div class="blog-entry" data-hover="">
                    <div class="entry-img">
                        
                    <a href="blog-single-sidebar.html"><img
                                         src="<?= base_url('frontend/assets/images/sliders/acid-reflux.jpg') ?>"
                                        alt="Unsure About Wearing a Face Mask? How and Why" /></a>
                    </div>
                    <!-- End .entry-img-->
                    <div class="entry-content">
                        
                    <div class="entry-title">
                                    <h4><a href="blog-single-sidebar.html">Is Gastroesophageal Reflux A Disease?</a></h4>
                                </div>
                                <div class="entry-bio">
                                    <p>அறிந்துகொள்ளுங்கள் ஆரோக்கிய சக்கரத்தை ஆரோக்கிய சக்கரத்தின் அம்சங்கள் அறிவுசார்ந்தவை சமூகம் சார்ந்தவை உடல் சார்ந்தவை ஆன்மிகம் | தியானம் சார்ந்தவை தொழில் சார்ந்தவை உணர்வுகள் சார்ந்தவை சுற்றுச்சூழல் சார்ந்தவை ஆரோக்கிய சக்கரம் ஏன்....
                                    </p>
                                </div>
                        <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="blog-single-sidebar.html">
                                <div class="line"> <span> </span></div><span>read more</span>
                            </a></div>
                    </div>
                </div>
                <!-- End .entry-content-->
            </div>
            <div>
                <div class="blog-entry" data-hover="">
                    <div class="entry-img">
                       
                    <a href="blog-single-sidebar.html"><img  src="<?= base_url('frontend/assets/images/sliders/diet.jpg') ?>"
                                     style="height: 210px; width: 500px;"
                                        alt="Tips for Eating Healthy When Working From Home" /></a>
                    </div>
                    <!-- End .entry-img-->
                    <div class="entry-content">
                        
                    <div class="entry-title">
                                    <h4><a href="blog-single-sidebar.html">Diet Fails</a></h4>
                                </div>
                                <div class="entry-bio">
                                    <p>டயட் பல தோல்விகள் சில பாடங்கள்! உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து சப்பாத்தி போன்ற உணவுக்கு மாறுவது… டயட் ஃபெயில்டு....</p>
                                </div>
                        <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="blog-single-sidebar.html">
                                <div class="line"> <span> </span></div><span>read more</span>
                            </a></div>
                    </div>
                </div>
                <!-- End .entry-content-->
            </div>
            <div>
                <div class="blog-entry" data-hover="">
                    <div class="entry-img">
                       
                        <!-- End .entry-date--><a href="blog-single-sidebar.html"><img
                                        src="<?= base_url('frontend/assets/images/sliders/high-fiber.webp') ?>"
                                        alt="Tips for Eating Healthy When Working From Home" /></a>
                    </div>
                    <!-- End .entry-img-->
                    <div class="entry-content">
                       
                    <div class="entry-title">
                                    <h4><a href="blog-single-sidebar.html">Uses and Benefits of Fibre-rich food</a></h4>
                                </div>
                                <div class="entry-bio">
                                    <p>Uses and Benefits of Fibre-rich food நார்ச்சத்து என்றால் என்ன? நார்ச்சத்து என்பது நமது உடலால் ஜீரணிக்க முடியாத கார்போஹைட்ரேட் அல்லது ஸ்டார்ச் ஆகும். உங்கள் செரிமான மண்டலத்தின் கழிவுகளை வெளியேற்றும் கருவியாக....</p>
                                </div>
                        <div class="entry-more"> <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="blog-single-sidebar.html">
                                <div class="line"> <span> </span></div><span>read more</span>
                            </a></div>
                    </div>
                </div>
                <!-- End .entry-content-->
            </div>
         
            
        </div>
        <!-- End .carousel-->
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>