<?= $this->extend('layout/frontend/service-layout') ?>

<?= $this->section('header') ?>

<style>

        .owl-item>.slide {
            background-position-y: center !important;
        }
    </style>
    <style>
     @media screen and (max-width:1200px) {
        .bt-wi{
            width: 100% !important;
        }
        
    }
        @media screen and (max-width:600px) {
            .page-title.page-title-3 .title .title-card {

                margin-top: 0px !important;



            }
			.features-bar {
    padding-bottom: 80px;
}
		
.donations.donations-2 {
    padding-top: 0;
}

.features.features-2 {
    padding-top: 20px;
}
.departments.departments-2 {
    padding-top: 15px;
    padding-bottom: 50px;
}

.heading {
    margin-top: -40px;
	margin-bottom: 15px;
    text-align: center;
}
.blog-grid.blog-grid-3 {
    padding-top: 90px;
    padding-bottom: 100px;
}

        }
        
        .form-control{
            height:50px;
            line-height:50px;
        }
        .nice-select .list{
            width:100%;
        }
        .nice-select{
            line-height:normal;
            display:flex;
        }
		.features-bar {
    padding-top: 0;
    padding-bottom: 85px;
    overflow: visible;
}
.blog-grid.blog-grid-3 {
    padding-top: 20px;
}
.features.features-2 {
    padding-top: 20px;
    padding-bottom: 0;
    overflow: visible;
}
.donations.donations-2 {
    padding-top: 20px;
}

.jaun-head5 {
    font-size: 20px !important;
    text-align: center;
}
		
		 
       
    </style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<body style="overflow: visible;">
    
   
        



        

        
        <!--
      ============================
      Page Title #3 Section
      ============================
      -->



        <section class="slider slider-2" id="slider-2">
            <div class="container-fluid pr-0 pl-0">
                <div class="slider-carousel owl-carousel carousel-navs" data-slide="1" data-slide-rs="1"
                    data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true"
                    data-speed="800" data-slider-id="#custom-carousel">
                    <!--  Start .slide-->
                    <div class="slide bg-overlay bg-overlay-dark-slider">
                        <div class="bg-section">

                            <img  src=" <?= base_url('frontend/assets/images/team/grid/herniasurgerylaparo.jpg') ?>" alt="Background" />

                        </div>
                        <div class="container">
                            <div class="slide-content" style="margin-bottom: 50px;">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <h2 class="slide-headline her-head">35K+<br>
                                            Hernia Surgery
                                            30 Years Of Expertise</h2>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="slide-desc her-para">Hernia repairs (Inguinal and Incisional) are so<br> common to
                                            have been under-rated as simple procedures<br> which lack specialization. But
                                            the first time is the<br> best time for a successful outcome, both in the short
                                            term and in the long term. Using 4K laparoscopy, 3D imaging module, and the
                                            da Vinci Robotic system </p>
                                        <div class="col-12 chair-bread"
                                            style="margin-top: 25px; margin-left: 350px; font-weight: bold;">
                                            <ol class="breadcrumb d-flex justify-content-center "
                                                style="  font-family: sans-serif;">
                                                <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                                <li class=""><a href="<?= base_url('services/hernia-care') ?>">Hernia</a></li>
                                            </ol>
                                        </div>


                                    </div>
                                </div>
                                <!--  End .row-->
                            </div>
                            <!-- End .slide-content -->
                        </div>
                        <!-- End .container-->
                    </div>
                    <!-- End .slide-->
                    <!--  Start .slide-->

                    <!-- End .slide-->
                </div>
                <!-- End .slider-carousel-->
            </div>
            <!--  End .container-fluid-->
        </section>
        <style>
            @media screen and (max-width:900px){
                .her-head{
                    font-size:24px !important;
                }
               .chair-bread{
          margin-left:0px !important;
         }
               
            }
        </style>

        <section class="features-bar" id="featuresBar-1">
            <div class="bg-section"> <img src="" alt="background" /></div>
            <div class="container">
                <div class="row g-0 features-holder">
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-reservation-->
                        <div class="feature-panel feature-reservation h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-1.svg') ?>"
                                    style="width: 127px;" />
                                <h5>one - day procedure</h5>
                                <p>Discover the convenience of a one-day hernia surgery at GEM Hospital, emphasizing
                                    comfort for a speedy recovery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-timetable-->
                        <div class="feature-panel feature-timetable h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-4.svg') ?>"
                                    style="width: 127px;" />
                                <h5>No Scar - No Wounds</h5>
                                <p>Embrace cutting-edge hernia surgery at GEM Hospital, where advanced, scar-free
                                    techniques prioritize your aesthetic satisfaction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-reservation-->
                        <div class="feature-panel feature-reservation h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-2.svg') ?>"
                                    style="width: 127px;" />
                                <h5> Insurance Coverage</h5>
                                <p> At GEM Hospital , we collaborate with insurers for high-quality, financially
                                    accessible hernia surgery. We assist throughout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-timetable-->
                        <div class="feature-panel feature-timetable h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-3.svg') ?>"
                                    style="width: 127px;" />
                                <h5>Da Vinci Robotic Surgery</h5>
                                <p>Experience Da Vinci Robotic Surgery at GEM Hospital, blending precision, innovation
                                    for enhanced hernia surgery Robotic</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- End .heading-->
            </div>
            <!-- End .container-->
        </section>
        <style>
        @media screen and (max-width:900px){
            .hernia-what{
            margin-top:50px !important;
        }
        }
        
            
        </style>

        <div class="row my-5 position-relative">
            <div class="col-12 col-md-8" style="text-overflow: ellipsis;word-wrap: break-word;overflow-x: hidden;">
                <div class="container px-5">
                    <div class="entry-introduction">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="heading " >
                                    <p class="paragraph hernia-what">Overview</p>
    
                                    <h6 class="heading-title" style=" color:#0D3E21;">
                                        What Is Hernia?
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                                <p class="desc">
                                    A hernia is a medical condition in which an internal organ protrudes
                                    through a weak spot in the tissue or muscle. Most hernias occur within
                                    the abdominal cavity, between the chest and the hips.
                                </p>
                                <p class="desc">Most hernias occur within the abdominal cavity, between the
                                    chest and the hips. </p>
    
                                <p class="desc">&bull; The most common types of hernias are inguinal hernia,
                                    femoral hernia, umbilical hernia, and Hiatal hernias</p>
                                <p class="desc">&bull; Inguinal hernia is the most commonly occurring
                                    hernia.</p>
                                <p class="desc">&bull; In an inguinal hernia, the fatty tissue or part of
                                    the intestine protrudes from the top of the inner thigh.</p>
                                <p class="desc">&bull; Inguinal and femoral hernias are located at the top
                                    of the inner thigh near the groin.</p>
    
                                <p class="desc">Umbilical hernias are located near the belly button, whereas
                                    Hiatal hernias occur near the chest area.
                                </p>
    
    
                            </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                        </div>
                    </div>
                    <style>
                      @media screen and (max-width:600px) {
                        .her-sec1{
                          padding-top: 100px !important;
                        }
                        
                      }
                    </style>
                    <section class="blog blog-grid blog-grid-3 her-sec1" id="blog-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                        <p class="paragraph">Varieties</p>
    
                                        <h2 class="heading-title">Types Of Hernia</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End .row-->
                            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2"
                                data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                data-speed="200">
                                <div>
                                    <div class="blog-entry" data-hover="">
                                        <div class="entry-img">
    
                                            <!-- End .entry-date--><a href=""><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/Inguinal.jpg') ?>"
                                                    alt="6 tips to protect your mental health when sick" /></a>
                                        </div>
                                        <!-- End .entry-img-->
                                        <div class="entry-content">
    
                                            <div class="entry-title">
                                                <h4><a href="">Inguinal Hernia</a>
                                                </h4>
                                            </div>
                                            <div class="entry-bio">
                                                <p>occurs when the intestines or fat from the abdomen bulge
                                                    through the lower abdominal wall into the inguinal</p>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- End .entry-content-->
                                </div>
                                <div>
                                    <div class="blog-entry" data-hover="">
                                        <div class="entry-img">
    
                                            <!-- End .entry-date--><a href=""><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/Incisional.jpg') ?>"
                                                    alt="Unsure About Wearing a Face Mask? How and Why" /></a>
                                        </div>
                                        <!-- End .entry-img-->
                                        <div class="entry-content">
    
                                            <div class="entry-title">
                                                <h4><a href="">
                                                        Incisional Hernia</a></h4>
                                            </div>
                                            <div class="entry-bio">
                                                <p>occurs at or in close proximity to a surgical incision
                                                    through which the intestine, organ, or other tissue
                                                    protrudes</p>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- End .entry-content-->
                                </div>
                                <div>
                                    <div class="blog-entry" data-hover="">
                                        <div class="entry-img">
    
                                            <!-- End .entry-date--><a href=""><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/Umbilical.jpg') ?>"
                                                    alt="Tips for Eating Healthy When Working From Home" /></a>
                                        </div>
                                        <!-- End .entry-img-->
                                        <div class="entry-content">
    
                                            <div class="entry-title">
                                                <h4><a href="">Umbilical Hernia</a>
                                                </h4>
                                            </div>
                                            <div class="entry-bio">
                                                <p>occurs when the opening in the abdominal muscle that
                                                    allows the umbilical cord to pass through fails to close
                                                    completely</p>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- End .entry-content-->
                                </div>
                                <div>
                                    <div class="blog-entry" data-hover="">
                                        <div class="entry-img">
    
                                            <!-- End .entry-date--><a href=""><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/Hiatal.png') ?>"
                                                    alt="Why Coronavirus Cases Among Adults Is Bad News" /></a>
                                        </div>
                                        <!-- End .entry-img-->
                                        <div class="entry-content">
    
                                            <div class="entry-title">
                                                <h4><a href="">Hiatal Hernia</a>
                                                </h4>
                                            </div>
                                            <div class="entry-bio">
                                                <p>occurs when the upper part of your stomach bulges through
                                                    the large muscle separating your abdomen and chest
                                                    (diaphragm)</p>
                                            </div>
    
                                        </div>
                                    </div>
                                    <!-- End .entry-content-->
                                </div>
    
    
                            </div>
                            <!-- End .carousel-->
                        </div>
                    </section>
                    <section class="features features-2  " id="features-2" style="margin-bottom:200px;">
    
                        <div class="container">
    
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                        <p class="paragraph">Indications</p>
    
                                        <h2 class="heading-title">Symptoms Of Hernia</h2>
                                    </div>
                                </div>
                            </div>
    
                            <!-- End .heading-->
    
                            <!-- End .features-holder-->
    
                            <div class="features-card">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"><img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Visible Lump</h4>
                                                <p>An observable protrusion at the site of the hernia, often
                                                    more noticeable during activities like coughing or
                                                    straining</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Lumps that disappear while lying down</h4>
                                                <p>The bulge or lump may be more noticeable when standing,
                                                    as opposed to when lying down</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="features-card" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100 ">
                                            <div class="panel-icon"><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" /></i>
                                            </div>
                                            <div class="panel-body">
                                                <h4>Lump enlarges while coughing, straining or standing up
                                                </h4>
                                                <p>Aching or sharp pain at the hernia site, especially when
                                                    lifting, coughing, or during physical activity.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Nausea or Vomiting</h4>
                                                <p>In more severe cases, hernias may lead to nausea and
                                                    vomiting, especially if the hernia becomes trapped or
                                                    strangulated</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="features-card" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100 ">
                                            <div class="panel-icon"><img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Pain during Excretion</h4>
                                                <p>Some individuals with inguinal hernias may experience
                                                    difficulty urinating or changes in urinary patterns</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Constipation or Indigestion</h4>
                                                <p>Hernias can sometimes cause changes in bowel movements,
                                                    such as constipation or difficulty passing stools</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <!-- End .features-card-->
                        </div>
                        <!-- End .container-->
                    </section>
                    <section class="donations donations-2 entry-introduction" id="donations-2">
                        <div class="container">
                            <div class="heading heading-4">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <p class="paragraph">Why Choose Gem?</p>
                                        <h2 class="heading-title">We Are On The Side Of Humanity </h2>
                                        <div class="img-hotspot">
                                            <div class="img-hotspot-wrap">
                                                <div class="img-hotspot-bg"> <img  src=" <?= base_url('frontend/assets/images/team/grid/gemus.jpg') ?>"
                                                        alt="image" style="border-radius: 50px; " /></div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 offset-lg-1 gem-cont" style="margin-top: 150px;">
    
                                        <ul class="list-unstyled advantages">
                                            <li><i class="fas fa-check"></i>
                                            Gem hospital & its doctors have performed the largest numbers of laparoscopic hernia surgeries in the county</li><br>
                                            <li><i class="fas fa-check"></i>
                                            Lowest recurrence rate due to its innovative techniques</li><br>
                                            <li><i class="fas fa-check"></i>
                                            India’s largest training centre for laparoscopic hernia surgeries in the country</li><br>
                                            
    
                                        </ul>
                                        <a class="btn btn--primary book-btn" href="#service-booking-form" style="margin-top: 100px;">Book
                                            Now</a>
                                    </div>
                                </div>
                                <!-- End .row-->
                            </div>
                            <!-- End .heading-->
                        </div>
                        <!-- End .container-->
                    </section>
                    <style>
                        @media screen and (max-width:600px){
                            .gem-cont{
                                margin-top:0px !important;
                            }
                            .book-btn{
                                margin-top:0px !important;
                            }.cause-para{
                                margin-top:30px !important;
                            }
                        }
                    </style>
                    <section class="features features-2 cmn-cau " id="features-2" style="margin-bottom:180px;">
    
                        <div class="container">
    
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                        <p class="paragraph">Common</p>
    
                                        <h2 class="heading-title">Causes Of Hernia</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row cause-para">
                                <div class="col-12 col-lg-12 ">
                                    <div class="heading">
                                        <p class="paragraph">A hernia occurs when an organ or tissue pushes through a weak spot in your muscles or connective tissue. This can happen in several areas of your body, including your abdomen, groin, upper thigh, and belly button</p>

                                    </div>

                                </div>

                            </div>
    
                            <!-- End .heading-->
    
                            <!-- End .features-holder-->
    
                            <div class="features-card">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100 ">
                                            <div class="panel-icon"><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" /></i>
                                            </div>
                                            <div class="panel-body">
                                                <h4>Previous Surgery
                                                </h4>
                                                <p>Scars from previous surgeries can weaken the abdominal wall and increase the risk of a hernia.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Muscle Weakness</h4>
                                                <p>This can be due to aging, injury, or genetic factors.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="features-card" style="margin-top:50px;">
                                <div class="row">
                                    
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="card-panel h-100 ">
                                            <div class="panel-icon"><img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Increased Pressure In The Abdomen</h4>
                                                <p>This can be caused by lifting heavy objects, straining during bowel movements or urination, chronic coughing, pregnancy, and obesity.</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
    
                            </div>
    
                        
    
                            <!-- End .features-card-->
                        </div>
                        <!-- End .container-->
                    </section>
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">
                                <p class="paragraph">Risk Factors</p>

                                <h2 class="heading-title">Developing A Hernia</h2>
                            </div>
                        </div>
                    </div>
                    <section class="features bg-overlay bg-overlay-theme" id="features-1" style="margin-bottom: 300px;">
                        
                        <div class="bg-section"> <img  src=" <?= base_url('frontend/assets/images/background/1.jpg') ?>" alt="Background" style="height:100px !important;"/></div>
                        <div class="container">
                            <style>
                                @media screen and (max-width:600px){
                                    .features-holder{
                                        grid-template-columns: 1fr !important;
                                        
                                    }
                                }
                            </style>
                          
                          <!-- End .heading-->
                          <div class="features-holder" style="margin-top:-130px; margin-bottom: -50px;grid-template-columns: 1fr 1fr">
                            <div>
                              <div class="feature-panel-holder h-100" data-hover="">
                                <div class="feature-panel h-100 " style="width:100%; ">
                                  <div class="feature-icon"><i class="flaticon-007-stethoscope"></i></div>
                                  <div class="feature-content">
                                    <h4>Smoking</h4>
                                    <p>Smoking weakens tissues and increases coughing, both of which can contribute to hernias</p>
                                  </div><a href="javascript:void(0)"> </a>
                                </div>
                                <!-- End .feature-panel-->
                              </div>
                            </div>
                            <div>
                              <div class="feature-panel-holder  h-100" data-hover="">
                                <div class="feature-panel h-100"  style="width:100%; ">
                                  <div class="feature-icon"><i class="flaticon-026-education"></i></div>
                                  <div class="feature-content">
                                    <h4>Age</h4>
                                    <p>Hernias are more common in older adults, especially men.</p>
                                  </div><a href="javascript:void(0)"> </a>
                                </div>
                                <!-- End .feature-panel-->
                              </div>
                            </div>
                            <div>
                              <div class="feature-panel-holder  h-100" data-hover="">
                                <div class="feature-panel h-100"  style="width:100%; ">
                                  <div class="feature-icon"><i class="flaticon-036-aid"></i></div>
                                  <div class="feature-content">
                                    <h4>Family History</h4>
                                    <p>A family history of hernias increases your risk.</p>
                                  </div><a href="javascript:void(0)"> </a>
                                </div>
                                <!-- End .feature-panel-->
                              </div>
                            </div>
                            <div>
                              <div class="feature-panel-holder  h-100" data-hover="">
                                <div class="feature-panel h-100"  style="width:100%; ">
                                  <div class="feature-icon"><i class="flaticon-032-medicine"></i></div>
                                  <div class="feature-content">
                                    <h4>Chronic Constipation</h4>
                                    <p>Straining to have a bowel movement can increase pressure in the abdomen and lead to a hernia.</p>
                                  </div><a href="javascript:void(0)"> </a>
                                </div>
                                <!-- End .feature-panel-->
                              </div>
                            </div>
                            <!--<div>-->
                            <!--  <div class="feature-panel-holder  h-100" data-hover="">-->
                            <!--    <div class="feature-panel h-100"  style="width:100%;">-->
                            <!--      <div class="feature-icon"><i class="flaticon-046-blood-pressure"></i></div>-->
                            <!--      <div class="feature-content">-->
                            <!--        <h4>Pregnancy</h4>-->
                            <!--        <p>The weight of the baby puts pressure on the abdominal wall, making it more susceptible to a hernia.</p>-->
                            <!--      </div><a href="javascript:void(0)"> </a>-->
                            <!--    </div>-->
                                <!-- End .feature-panel-->
                            <!--  </div>-->
                            <!--</div>-->
                          </div>
                          <!-- End .features-holder-->
                          
                        </div>
                        <!-- End .container-->
                      </section>
                      
                       <style>
                        @media screen and (max-width:600px) {
                            .price-table{
                                margin-left: -60px !important;
                            }
                            
                        }
                      </style>

                      
                      

                      <section class="pricing" id="pricing-1" >
                        
                        <div class="container">
                            
                          <div class="pricing-holder">
                            
                            <div class="price-table" data-hover="" style="width:410px !important;">
                              <div class="pricing-panel" >
                                <div class="pricing-body" >
                                  <div class="pricing-heading">
                                    <h4 class="pricing-title">Living with a Hernia</h4>
                                    <p class="pricing-desc">If you have a small hernia and it is not causing you any pain or discomfort, you may be able to manage it without surgery. However, it is important to see your doctor regularly to monitor the hernia and make sure it is not getting worse.</p>
                                  </div>
                                  <ul class="pricing-list list-unstyled">
                                    <li><i class="fas fa-check"></i> <span>Maintain a Healthy Weight</span></li>
                                    <li><i class="fas fa-check"></i> <span>See Your Doctor For Checkup</span></li>
                                    <li><i class="fas fa-check"></i> <span>Avoid Strenuous Activities</span></li>
                                    <li><i class="fas fa-check"></i> <span>Eat a High-Fiber Diet</span></li>
                                    <li><i class="fas fa-check"></i> <span>Drink Plenty Of Fluids</span></li>
                                    
                                  </ul>
                                </div>
                               
                              </div>
                            </div>
                            <!-- End .pricing-table-->
                            <div class="price-table" data-hover="" style="width:410px !important;">
                              <div class="pricing-panel active">
                                <div class="pricing-body">
                                  <div class="pricing-heading">
                                    <h4 class="pricing-title">Hernia Pain Relief</h4>
                                    <p class="pricing-desc">We provide all aspects of medical practice for your family, including general check.</p>
                                  </div>
                                  <ul class="pricing-list list-unstyled pain-list" style="margin-top:125px;">
                                    <li><i class="fas fa-check"></i> <span>Over-the-counter pain relievers</span></li>
                                    <li><i class="fas fa-check"></i> <span>Wearing a truss</span></li>
                                    <li><i class="fas fa-check"></i> <span>Applying ice to the affected area</span></li>
                                    <li><i class="fas fa-check"></i> <span>Avoiding activities aggravate  hernia</span></li>
                                  </ul>
                                </div>
                                <div class="pricing-price">
                                  
                                </div>
                              </div>
                            </div>
                            <!-- End .pricing-table-->
                            
                            <!-- End .pricing-table-->
                          </div>
                          <!-- End .pricing-holder-->
                        </div>
                       
                        <!-- End .container-->
                      </section>
                     

                      <section class="features features-2  " id="features-2" style="margin-bottom:200px;">
    
                        <div class="container">
    
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                        <p class="paragraph">How To</p>
    
                                        <h2 class="heading-title">Prevent A Hernia</h2>
                                    </div>
                                </div>
                            </div>
    
                            <!-- End .heading-->
    
                            <!-- End .features-holder-->
    
                            <div class="features-card">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"><img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Maintain A Healthy Weight</h4>
                                                <p>Excess weight puts stress on your abdominal muscles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>"/>
                                            </div>
                                            <div class="panel-body">
                                                <h4>Eat A Healthy Diet</h4>
                                                <p>Eating a healthy diet can help you maintain a healthy weight and strengthen your muscles.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="features-card" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100 ">
                                            <div class="panel-icon"><img
                                                     src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" /></i>
                                            </div>
                                            <div class="panel-body">
                                                <h4>Exercise Regularly
                                                </h4>
                                                <p>Regular exercise can help strengthen your abdominal muscles and improve your overall health.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"> <img src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Avoid Straining</h4>
                                                <p>Try to avoid activities that put strain on your abdominal muscles, such as lifting heavy objects and straining during bowel movements.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="features-card" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="card-panel h-100">
                                            <div class="panel-icon"><img  src=" <?= base_url('frontend/assets/images/team/grid/HERNIA_ICON.png') ?>" />
                                            </div>
                                            <div class="panel-body">
                                                <h4>Quit Smoking</h4>
                                                <p>Smoking weakens tissues and increases coughing, both of which can contribute to hernias</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
    
                            </div>
    
                            <!-- End .features-card-->
                        </div>
                        <!-- End .container-->
                    </section>
    
                </div>
    
            </div>
            <style>
                textarea.form-control{
                height: 90px;
            }.contact-form{
                margin-top: -10px;
            }
            </style>
            <style>
                @media screen and (max-width:600px) {
                    .box-width{
                        margin-left: 15px;
                        width: 90% !important;
                        margin-top: 30px;
                    }
                    
                }
                .box-width{
                    width: 28%;
                    
                }

            </style>
            <div class="col-12 col-md-4 position-relative pe-0 pe-lg-5 box-width">
    
                <div class="sticky-top py-3 px-3 px-md-0" style=" top:110px;  z-index:1;">
                    <div class=" heading px-3"  style=" border :1px solid #0c0c0c; border-radius:25px;background-color: #118b0f4d">
                          <?= $this->include('frontend/Forms/service-form') ?>
                    </div>
                </div>
    
            </div>
    
    
        </div>
        <div class="container position-relative">
            <div class="row position-relative">
                <div class="col-12 col-lg-12 position-relative">
                    
                    











                    <section class="departments departments-2 her-sec1" id="departments-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-12 heading-13 text-center">
                                        <p class="paragraph" style=" color:#0D3E21;">Patients Story</p>
                                        <h2 class="heading-title" style="color:#118B0F;">Loved by our Patients</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2"
                                data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                data-speed="200" id="more">
                                <div class="col-12 col-lg-8">

                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat3.webp') ?>" style="position: relative;"
                                            alt="about Image" /><br><a class=""
                                            href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;"
                                                class="bn-1" />

                                        </a></div>

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat2.webp') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;"
                                                class="bn-1" />
                                        </a></div>
                                </div>
                                <div>
                                    <div class="col-12 col-lg-8">
                                        <div class="about-img"><img class="img-fluid"
                                                src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat1.webp') ?>"
                                                alt="about Image" /><br><a class=""
                                                href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                    src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                    style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%; "
                                                    class="bn-1" />
                                            </a></div>
                                    </div>
                                    <!-- End .entry-content-->

                                </div>
                            </div>

                            <!-- End .departments-action-->
                        </div>
                        <!-- End .container-->
                    </section>

                    <style>
                        @media screen and (max-width:600px) {
                            .bn-1 {
                                position: absolute;
                                left: 40% !important;
                            }

                        }
                    </style>


                    <!---Our Experts---->

                    <!---Know More about Esophago Gastric Surgeries---->
                    <section class="blog blog-grid blog-grid-3 her-sec1" id="blog-2"
                        style="margin-top: 50px; margin-bottom: 30px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                        <p class="paragraph">Doctor's View</p>

                                        <h6 class="heading-title" style="font-size: 37px; color:#118B0F;">Experts
                                            Speech About Hernia</h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- End .row-->
                            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2"
                                data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                data-speed="200" id="more">
                                <div class="col-12 col-lg-8">

                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultne.jpg') ?>" style="position: relative;"
                                            alt="about Image" /><br><a class=""
                                            href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;"
                                                class="bn-1" />

                                        </a></div>

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                           src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.jpg') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%;"
                                                class="bn-1" />
                                        </a></div>
                                </div>
                                <div>
                                    <div class="col-12 col-lg-8">
                                        <div class="about-img"><img class="img-fluid"
                                               src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.webp') ?>" alt="about Image" /><br><a
                                                class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                     src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                    style=" width: 20% !important;  position: absolute; left: 25%; bottom: 35%; "
                                                    class="bn-1" />
                                            </a></div>
                                    </div>
                                    <!-- End .entry-content-->

                                </div>
                            </div>
                            <!-- End .carousel-->
                        </div>
                    </section>

                    <div class="entry-infos tips-info heading">
                        <h2 class="paragraph" style=" text-align: center; color:#0D3E21;">FAQ</h2>
                        <h1 class="heading-title" style=" text-align: center; color:#118B0F;">Frequently Ask
                            Questions</h1>
                        <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">How Long Is Recovery?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">The recovery period will vary depending on the type of hernia, type of surgery, age, and overall health. It’s normal to feel moderate pain. The recovery period for patients who have undergone Robotic surgery will be approximately 2 weeks and 3 to 4 weeks for Laparoscopic surgery.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How Long Will I Have To Stay In the Hospital?</a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">You can go home on the procedure day itself if you have done a Laparoscopic or Robotic Surgery</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  collapsed" data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Is It Dangerous To Ignore The Hernia?</a></div>
                  <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">If you ignore it will become bigger and more painful. At worst it can demand immediate Surgery and it could be more extreme</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-4" href="#collapse01-4">Difference Between An Open Vs Laparoscopic Hernia Surgery?</a></div>
                  <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">An open surgery requires an incision to put the bulging tissue back in place and it will take a lot of time for recovery.<br><br>

                      <b>Laparoscopic surgery is minimally-invasive which requires a small incision and also reduces recovery time.</b></div>
                  </div>
                </div>
				        <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-5" href="#collapse01-5">Does The Surgery Affect Pregnancy?</a></div>
                  <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Doctors usually recommend delaying elective hernia repair until after delivery. But Women can have laparoscopic hernia mesh surgery during pregnancy without complications and it requires fetal monitoring. The researchers also suggested performing a hernia in conjunction with a C-section to be the best option for pregnant patients.</div>
                  </div>
                </div>

              </div>

                    </div>-



                </div>

            </div>
        </div>

        <!--
      ============================
      Footer #01
      ============================
      -->
        
        
  
    <!--  Footer Scripts==
    -->
    
</body>




 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>