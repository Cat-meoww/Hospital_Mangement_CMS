<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>




<style>
    .owl-item>.slide {
        background-position-y: center !important;
    }
    .sec-slide {
  position: relative;
  bottom: 190px !important;
}
    .phone-covai{
  color: #118b0f !important;
  background-color: #0d3e21 !important;
}.video-covai{
  width: 25%;
}.doctor-covai1{
  width:100%; aspect-ratio: 1/1; object-fit: cover;
}
.home-abt1{
    font-size: 16px !important; color:#118B0F !important;
}
.head-covai1{
    font-size : 70px !important; color:green !important;
}
.para-covai1{
    color:black !important;
}.year{
    margin-left: 100px;
}.para-covai2{
    text-align:center;font-weight:bold; color:white;
}.head-covai2{
    text-align:center; color:white;
}.section-covai1{
    position:relative;bottom:300px; margin-bottom:-200px;
}.box-covai1{
    background-color:white !important;
}.box-img1{
    width:30%;margin-left:35%;
}.head-covai3{
    color:black;  margin-top:10px;
}.covai-img1{
    object-fit: cover;
}
.covai-img2{
    object-fit: cover;
    width: 90%;
}
.pahe-covai1{
    color:black;
}
.service-covai1{
    height: 440px !important;
}
.para-covai3{
    color:white !important;
}
.img-fluid{
    border-radius: 32px 32px 0px 32px;
}.coblog-box1{
    height: 210px !important; width: 500px !important;
}
.iccot-popicon1{
    font-size: 14px;
}
.iccot-poph1{
    text-align: center; font-weight: 500;
}
.iccot-popp1{
    text-align: center;
}.pop-z{
    z-index:9999;
}
@media screen and (max-width:600px) {
  .lab {
      float: left;
  }.year {
    margin-right: 100px;
}
.home-abt1 {
    margin-top: 50px;
 } .mobile {
    width: 100px !important;
} .cv {
    margin-right: 190px;
}
.cv1 {
margin-right: 50px;
 }

}
@media screen and (max-width: 991.98px) {
        .about.about-4 {
            padding-top: 0px;
        }
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
                <div class="bg-section"><img src="<?= base_url('frontend/assets/images/sliders/coimbatore-gem-hospital-elevation.jpg') ?>" alt="Background" /></div>
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
                <div class="bg-section"><img src="<?= base_url('frontend/assets/images/sliders/cancer-gem-hospital-header.jpg') ?>" alt="Background" />
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
    <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/background/pattern-2.jpg') ?>" alt="background" /></div>
    <div class="container">
        <div class="row g-0 features-holder">
            <div class="col-12 col-lg-4">
                <!-- Start .widget-reservation-->
                <div class="feature-panel feature-reservation h-100">
                    <div class="feature-content"><i class="flaticon-022-medical"></i>
                        <h5>emergency cases</h5>
                        <p>Please feel free to contact our team for any general or medical enquiry </p>
                        <a href="tel:04224695100"><span class="fas fa-phone-alt phone-covai" ></span>04224695100</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- Start .widget-timetable-->
                <div class="feature-panel feature-timetable h-100">
                    <div class="feature-content"><img src="<?= base_url('frontend/assets/images/icons/Video.svg') ?>" alt="background"  class="video-covai" />
                        <h5>Video Consultation</h5>
                        <p>Book an appointment have a hassle-free discussion with our doctors from your home</p>
                        <a class="btn btn--primary btn-line btn-line-before btn-home2" href="<?= base_url('appointment/video-consultation') ?>">
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
                        <a class="btn btn--primary btn-line btn-line-before" href="<?= base_url('appointment/book-appointment') ?>">
                            <span class="line"> <span>
                                </span></span><span>Visit now</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="heading heading-15">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="clients-img"> <img src="<?= base_url('frontend/assets/images/sliders/doctor.png')  ?>" alt="image" class="doctor-covai1"></div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <h6 class="heading-title home-abt1" >About Us</h6>
                    <h6 class="heading-title">GEM Hospital Was Initially Started As Coimbatore Institute Of
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

                    <div class="actions-holder">
                        <div class="heading heading-7 text--center">


                            <h2 class="heading-title head-covai1">211+</h2>
                            <p class="heading-subtitle para-covai1">Specialist Doctors</p>
                        </div>
                        <div class="heading heading-7 text--center year">

                            <h2 class="heading-title head-covai1" >32+</h2>
                            <p class="heading-subtitle para-covai1">Years Experienced</p>
                        </div>
                    </div>
                    
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




<section class="slider slider-4" id="slider-4">
    <div class="container-fluid pr-0 pl-0">

        <!--  Start .slide-->
        <div class="slide bg-overlay bg-overlay-dark-slider sec-slide">
            <div class="bg-section mobile "><img src="<?= base_url('frontend/assets/images/sliders/icco.jpg') ?>" alt="Background" class="bfr" class="mobile" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="slide-content">
                            <p class="paragraph para-covai2">What We Do</p>
                            <h1 class="slide-headline head-covai2" >GEM @ Home</h1>
                            <p class="slide-desc para-covai2 ">After COVID Pandemic, We GEM Hospital started Gem at Home which offers you ICU from Home,<br> Pharmacy door delivery, Online Consultation & Lab & Blood Tests<br> from home (100% Accuracy, No Extra Cost) </p>

                        </div>
                        <!-- End .slide-content -->
                    </div>
                </div>

                <!--  End .row-->
            </div>
        </div>
        <!--  End .slide-->
        <!--  Start .slide-->

        <!--  End .slide-->

        <!-- End .slider-carousel-->
    </div>
    <!--  End .container-fluid-->
</section>

<!--
      ============================
      FeaturesBar Section
      ============================
      -->



<section class="features-bar pb-2 section-covai1" id="featuresBar-1">

    <div class="container">
        <div class="row g-0 features-holder">
            <div class="col-12 col-lg-4">
                <!-- Start .widget-timetable-->
                <div class="feature-panel feature-timetable h-100 box-covai1">
                    <div class="team-content">
                        <img src="<?= base_url('frontend/assets/images/icons/frame1.svg') ?>" alt="background" class="box-img1" />
                        <div class="team-title ">
                            <h4 class="head-covai3"><a>ICCOT Service</a></h4>
                        </div>
                        <div class="team-cat"><a href="javascript:void(0)">INTELLIGENT CRITICAL CARE OUTREACH TEAM</a></div>
                        <div class="team-desc">
                            <p>GEM Hospital prioritizes patient care and comfort as our utmost commitment. We firmly believe that there is no substitute for the care and comfort provided in the familiar environment home.</p>
                        </div>
                        <div class="team-more">
                            <button type="button" class="btn btn--primary btn-line btn-line-before" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Book an Appointment</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- Start .widget-timetable-->
                <div class="feature-panel feature-timetable h-100 box-covai1" >
                    <div class="team-content">
                        <img src="<?= base_url('frontend/assets/images/icons/Frame2.svg') ?>" alt="background" class="box-img1" />

                        <div class="team-title">

                            <h4  class="head-covai3"><a>
                                    Pharmacy Door Delivery </a></h4>
                        </div>
                        <div class="team-cat"><a href="javascript:void(0)">Get Superfast Medicine Delivery
                                to your home at GEM PHARMACY</a></div>
                        <div class="team-desc">
                            <p>
                                Submit your prescription, and our skilled medical team will contact you to address your healthcare requirements promptly and efficiently. </p>
                        </div>
                        <div class="team-more">
                            <button type="button" class="btn btn--primary btn-line btn-line-before" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo" style="width:185px;">Upload Your Prescription</button>



                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12 col-lg-4">
                <!-- Start .widget-location-->
                <div class="feature-panel feature-timetable h-100 box-covai1">
                    <div class="team-content">
                        <div class="team-title">
                            <img src="<?= base_url('frontend/assets/images/icons/frame3.svg') ?>" alt="background" class="box-img1" />
                            <h4  class="head-covai3"><a>
                                    Lab & Blood Bank </a></h4>
                        </div>
                        <div class="team-cat"><a href="javascript:void(0)">
                                Quick Lab Tests, Accurate Results from GEM Experts Team </a></div>
                        <div class="team-desc">
                            <p>The packages have been specially curated by doctors to include exactly the
                                tests you need for a proper analysis of your health—no more & no less.</p>
                        </div>
                        <div class="team-more">
                            <button type="button" class="btn btn--primary btn-line btn-line-before" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Book Now</button>


                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End .heading-->
    </div>
    <!-- End .container-->
</section>


<section class="about about-4" id="about-4">
    <div class="container">

        <div class="avatars-holder">
            <div class="block-top">
                <div class="row">
                    <div class="col-12 col-lg-2 wow fadeInDown">
                        <div class="avatar avatar-1"><img src="<?= base_url('frontend/assets/images/sliders/Rob5.jpg') ?>" alt="image" class="covai-img1" /></div>
                    </div>
                    <div class="col-12 col-lg-5 wow fadeIn">
                        <div class="avatar avatar-2  ">
                            <div class="bg-section"><img src="<?= base_url('frontend/assets/images/about/avatars/robotic__.jpg') ?>" alt="image" class="covai-img1" />
                            </div>
                            <div class="avatar-content">

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-2 wow slideInDown">
                        <div class="avatar avatar-3"><img  src="<?= base_url('frontend/assets/images/sliders/Rob2.jpg') ?>" alt="image" class="covai-img1" />
                        </div>
                    </div>
                    <div class="col-12 -col-lg-3"></div>
                </div>
            </div>
            <div class="block-bottom">
                <div class="row">
                    <div class="col-12 offset-lg-1 col-lg-3 wow fadeInLeft">
                        <div class="avatar avatar-5"><img  src="<?= base_url('frontend/assets/images/sliders/Rob4.jpg') ?>" alt="image" class="covai-img1" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 wow slideInUp">
                        <div class="avatar avatar-6"><img  src="<?= base_url('frontend/assets/images/sliders/Rob3.jpg') ?>" alt="image" class="covai-img1" /></div>
                    </div>
                    <div class="col-12 col-lg-3 wow slideInRight">
                        <div class="avatar avatar-4"><img  src="<?= base_url('frontend/assets/images/sliders/Rob6.jpg') ?>" alt="image" class="covai-img2" />
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
    <div class="bg-section"><img src="<?= base_url('frontend/assets/images/sliders/cancer-gem-hospital-header.jpg') ?>" alt="background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-7 text--center">
                    <p class="heading-subtitle" class="pahe-covai1">What We Offer</p>
                    <h2 class="heading-title"  class="pahe-covai1">Our Services</h2>
                </div>
            </div>
            <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->

        <div class="carousel owl-carousel carousel-dots " data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200">
            <div>
                <div class="service-panel h-100 service-covai1" data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/nep.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/multi-organ-transplant') ?>">Multi Organ Transplant</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>GEM Hospital & Research Centre is proud to be India’s only Laparoscopic
                                    living donor Multi organ transplant centre.</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed " href="<?= base_url('services/multi-organ-transplant') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>


                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/nep.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/esophago-gastric-surgery') ?>">Esophago Gastric Surgery</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Our hospital has performed more than 2000 esophagus and stomach cancer
                                    surgeries successfully</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/esophago-gastric-surgery') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1" data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"><img src="<?= base_url('frontend/assets/images/logo/gastro.png') ?>" alt="background" /> </div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/medical-gastroenterology') ?>">Medical Gastroenterology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Gastroenterology procedures include a range of procedures specific to various
                                    ailments. Some of the non-surgical procedures include</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/medical-gastroenterology') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/Digi.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/digestive-cancer-care') ?>">Digestive Cancer Care</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We showed the world that laparoscopic cancer surgery was much superior to
                                    open surgery in terms of patient comfort.</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/digestive-cancer-care') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/colo.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/colorectal-surgery') ?>">Colorectal Surgery</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We are the First & Only Speciality Center for Piles / Fistula treatment.
                                </p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/colorectal-surgery') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/liver.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/liver-pancreas') ?>">Liver & Pancreas</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>It is first exclusive department in India to provide both Robotic &
                                    Laparoscopic surgeries</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/liver-pancreas') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/nep.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/endogynecology') ?>">Endogynaecology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>We are happy to share that over 15000 total laparoscopic hysterectomies performed</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/endogynecology') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/nep.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/obesity-diabetes') ?>">Obesity & Diabetes</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>With over 4000 cases of obesity surgeries, the department has crossed a lot of impressive milestones</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/obesity-diabetes') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1" data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/hernia.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('') ?>">Hernia Care</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>Hernia repairs are so common to have been under-rated as simple procedures which lacks specialisation</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1"  data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/heart.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/cardiology') ?>">Cardiology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>At GEM hospitals, a team of expert is available to provide comprehensive care for patients with cardiovascular diseases</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/cardiology') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1" data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"> <img src="<?= base_url('frontend/assets/images/logo/NEP1.png') ?>" alt="background" /></div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/urology') ?>">Urology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>GEM is equipped with the latest technology and advanced equipment for diagnosis and treatment, including robotic-assisted surgery</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/urology') ?>"> <span class="line">
                                        <span></span></span><span>read more</span></a></div>
                        </div>

                        <!-- End .team-img-->
                        <!-- End .team-content -->
                    </div>
                    <!-- End .team-member-holder-->
                </div>
            </div>
            <div>
                <div class="service-panel h-100 service-covai1" data-hover="" >
                    <div class="service-panel-holder py-4">
                        <div class="service-content">
                            <div class="service-icon"><img src="<?= base_url('frontend/assets/images/logo/NEP1.png') ?>" alt="background" /> </div>
                            <div class="service-title">
                                <h4><a href="<?= base_url('services/nephrology') ?>">Nephrology</a></h4>
                            </div>
                            <div class="service-desc">
                                <p>specialty of adult internal medicine and pediatric medicine that concerns the study of the kidneys</p>
                            </div>
                            <div class="service-more"><a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url('services/nephrology') ?>"> <span class="line">
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
    <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/background/wavy-pattern.png') ?>" alt="background" /></div>
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="heading heading-8 heading-light">
                <h2 class="heading-title">Why GEM ?</h2>
                <p class="paragraph">We are on the side of humanity.</p>
            </div>
            <div class="prief-set prief-set-2">
                <p  class="para-covai3">Only centre in India with subspecialties in Bariatric, Hepatobiliary, Colorectal,
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
            <div class="about-img"><img class="img-fluid" src="<?= base_url('frontend/assets/images/about/a4.jpg') ?>" alt="about Image"  /></div>
        </div>

    </div>
    <!-- End .row-->
</section>
<!-- 
      ============================
      Doctors #01 Section
      ============================
      -->
<section class="team team-grid team-grid-2" id="teamGrid-1">
    <div class="container">


        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

<?= $recent_blogs ?>


<div class="modal fade pop-z" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa iccot-popicon1">&#xf00d;</i>
                </button>
                <h4 class="heading-title iccot-poph1">ICCOT Booking form</h4>
                <p class="desc iccot-popp1"  >Fill out the form below, and we will be in touch shortly.</p>
                <form class="booking-form" id="booking-form" method="post" action="<?= base_url('forms/public/iccot') ?>">

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Name</label>
                        <input class="form-control" type="text" name="name" value="<?= old('name') ?>" placeholder="Enter Your Name" required="" />
                        <?= validation_show_error('name', 'display-error') ?>

                    </div>

                    <!-- Form Group -->

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Phone Number</label>
                        <input class="form-control" type="text" name="phone" value="<?= old('phone') ?>" placeholder="Enter Your Phone No" required="" />
                        <?= validation_show_error('phone', 'display-error') ?>

                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Email</label>
                        <input class="form-control" type="email" name="email" value="<?= old('email') ?>" placeholder="Enter Your Email Id" required="" />
                        <?= validation_show_error('email', 'display-error') ?>

                    </div>


                    <div class="col-12 ">
                        <label class="lab">Comment</label><br>
                        <textarea class="form-control" rows="1" type="text" name="message" placeholder="Enter Your Message" required=""><?= old('message') ?></textarea>
                        <?= validation_show_error('message', 'display-error') ?>

                    </div>

                    <?php if (session()->getFlashdata('error') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-secondary alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("error") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (session()->getFlashdata('success') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-success alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("success") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn--secondary btn-line btn-line-before btn--block mt-3">
                            <span class="line"> <span> </span></span><span>Submit</span>
                        </button>
                    </div>
                    <?= csrf_field() ?>

                </form>
            </div>



        </div>
    </div>
</div>
<div class="modal fade pop-z" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa iccot-popicon1">&#xf00d;</i></button>
                <h4 class="heading-title  iccot-poph1" >GEM Pharmacy</h4>
                <p class="desc iccot-popp1" >Fill out the form below, and we will be in touch shortly.</p>
                <form class="booking-form" id="booking-form" method="post" enctype="multipart/form-data" action="<?= base_url('forms/public/pharmacy') ?>">
                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Name</label>
                        <input class="form-control" type="text" name="name" value="<?= old('name') ?>" placeholder="Enter Your Name" required="" />
                        <?= validation_show_error('name', 'display-error') ?>

                    </div>

                    <!-- Form Group -->

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Phone Number</label>
                        <input class="form-control" type="text" name="phone" value="<?= old('phone') ?>" placeholder="Enter Your Phone No" required="" />
                        <?= validation_show_error('phone', 'display-error') ?>

                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Email</label>
                        <input class="form-control" type="email" name="email" value="<?= old('email') ?>" placeholder="Enter Your Email Id" required="" />
                        <?= validation_show_error('email', 'display-error') ?>

                    </div>


                    <div class="col-12 ">
                        <label class="lab">Comment</label><br>
                        <textarea class="form-control" rows="1" type="text" name="message" placeholder="Enter Your Message" required=""><?= old('message') ?></textarea>
                        <?= validation_show_error('message', 'display-error') ?>

                    </div>

                    <div class="form-group">
                        <label class="cv">Upload Prescription </label><br>
                        <input type="file" name="file" id="form-field-message" class="elementor-field elementor-size-lg  elementor-upload-field cv1" required="required" value="<?= old('file') ?>" data-maxsize-message="This file exceeds the maximum allowed size." />
                        <?= validation_show_error('file', 'display-error') ?>
                    </div>
                    <?php if (session()->getFlashdata('error') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-secondary alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("error") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (session()->getFlashdata('success') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-success alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("success") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn--secondary btn-line btn-line-before btn--block mt-3">
                            <span class="line"> <span> </span></span><span>Submit</span>
                        </button>
                    </div>
                    <?= csrf_field() ?>
                </form>
               

            </div>

        </div>
    </div>
</div>

<div class="modal fade pop-z" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa iccot-popicon1">&#xf00d;</i></button>
                <h4 class="heading-title  iccot-poph1">Blood Bank Booking form</h4>
                <p class="desc iccot-popp1">Fill out the form below, and we will be in touch shortly.</p>

                <form class="booking-form" id="booking-form" method="post" action="<?= base_url('forms/public/bloodbank') ?>">

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Name</label>
                        <input class="form-control" type="text" name="name" value="<?= old('name') ?>" placeholder="Enter Your Name" required="" />
                        <?= validation_show_error('name', 'display-error') ?>

                    </div>

                    <!-- Form Group -->

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Phone Number</label>
                        <input class="form-control" type="text" name="phone" value="<?= old('phone') ?>" placeholder="Enter Your Phone No" required="" />
                        <?= validation_show_error('phone', 'display-error') ?>

                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <label class="lab">Email</label>
                        <input class="form-control" type="email" name="email" value="<?= old('email') ?>" placeholder="Enter Your Email Id" required="" />
                        <?= validation_show_error('email', 'display-error') ?>

                    </div>


                    <div class="col-12 ">
                        <label class="lab">Comment</label><br>
                        <textarea class="form-control" rows="1" type="text" name="message" placeholder="Enter Your Message" required=""><?= old('message') ?></textarea>
                        <?= validation_show_error('message', 'display-error') ?>

                    </div>

                    <?php if (session()->getFlashdata('error') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-secondary alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("error") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (session()->getFlashdata('success') !== NULL) : ?>
                        <div class="col-12 ">
                            <div class="alert alert-success alert-dismissible fade show mb-0 w-100" role="alert">
                                <?= $session->getFlashdata("success") ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn--secondary btn-line btn-line-before btn--block mt-3">
                            <span class="line"> <span> </span></span><span>Submit</span>
                        </button>
                    </div>
                    <?= csrf_field() ?>

                </form>

            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>