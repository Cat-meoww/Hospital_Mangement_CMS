<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
        .owl-item > .slide {
            background-position-y: center !important;
        }.chair-bread{
          margin-top: 25px; margin-left: 350px; font-weight: bold;

        }.fo-si{
          font-family: sans-serif;
        }.jaun-img{
          width: 127px;
        }.jaun-div1{
          text-overflow: ellipsis;word-wrap: break-word;overflow-x: hidden;
        }.heading-title{
          color: black;
        }.jaun-sec1{
          margin-top:0px;
        }.jaun-head2{
          color:black !important; font-size: 18px !important;
        }.jaun-str{
          color:black !important;
        }.mob{
          width: 100% !important;
      }.jaun-sec2{
        margin-top: -20px;
      }.jaun-div2{
        margin-top: 50px;
      }.jaun-desc{
        text-align: left; margin-top:20px;
      }.bts{
          margin-left: 40% !important;
    }.jaun-sec3{
      margin-top: -60px;
    }.jaun-div3{
      margin-top: 50px;
    }.jaun-sec4{
      margin-top: -60px;
    }.jaun-div4{
      margin-top: 50px;
    }.jaun-sec5{
      margin-top: -60px;
    }.jaun-sec6{
      margin-top: -60px;
    }.jaun-head3{
      text-align: left;
    }.jaun-div5{
      top:110px;  z-index:1;
    }.jaun-div6{
      border :1px solid #0c0c0c; border-radius:25px;background-color: #118b0f4d;

    }.jaun-head5{
      font-size:28px; text-align:center;
    }
    .jaun-head6{
      font-size: 36px;
    }.jaun-head7{
      text-align: center;
    }
    .jaun-fimg1{
      position: relative;
    }.bn-1{
      width: 20% !important;  position: absolute; left: 25%; bottom: 35%;
    }.jaun-sec7{
      margin-top: -20px; margin-bottom: 60px;
    }.jaun-body{
      overflow: visible;
    }

        @media screen and (max-width:900px){
                .her-head{
                    font-size:24px !important;
                }
               .chair-bread{
          margin-left:0px !important;
         }
         .hernia-what{
            margin-top:50px !important;
        }
               
            }
    

        @media screen and (max-width:600px) {
            .page-title.page-title-3 .title .title-card {

                margin-top: 0px !important;



            }.gr{
                  padding-top: 50px !important;
                            }
                            .mob{
                                        height: 250px;
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
    padding-top: 30px;
    padding-bottom: 50px;
}

.heading {
    margin-top: -40px;
	margin-bottom: 15px;
    text-align: center;
}
.gre{
margin-top: 20px;
text-align: left;

}.bts{
width: 250px;
margin-left: 20px !important;
}
.gem-cont{
  margin-top:0px !important;
}
.book-btn{
  margin-top:0px !important;
  }.cause-para{
   margin-top:30px !important;
    }
    .bn-1 {
      position: absolute;
    left: 40% !important;
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
    padding-top: 80px !important;
}
.blog-grid {
  padding-bottom: 30px !important;
}
.features.features-2 {
    padding-top: 20px;
    padding-bottom: 0;
    overflow: visible;
}
.donations.donations-2 {
    padding-top: 20px;
}
img, svg {
    vertical-align: middle;
  
}
.desc{
    color:black;
}
		
		 
       
    </style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>


<body  class="jaun-body">



        



       

        
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
                        <div class="bg-section" >

                            <img  src=" <?= base_url('frontend/assets/images/team/grid/jaundice.webp') ?>"  alt="Background" />

                        </div>
                        <div class="container">
                            <div class="slide-content">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <h2 class="slide-headline her-head">
                                            Jaundice Expert Care Awaits at GEM Hospital</h2>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="slide-desc her-para">Jaundice doesn't have to dim your life. Get accurate diagnosis, effective treatment, and compassionate support from our specialized team </p>
                                        <div class="col-12 chair-bread"
                                            >
                                            <ol class="breadcrumb d-flex justify-content-center fo-si "
                                                >
                                                <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                                                <li class=""><a href="<?= base_url('jaundice')?>">Jaundice</a></li>
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
        

        <section class="features-bar" id="featuresBar-1">
            <div class="bg-section"> <img src="" alt="background" /></div>
            <div class="container">
                <div class="row g-0 features-holder">
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-reservation-->
                        <div class="feature-panel feature-reservation h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-1.svg') ?>"
                                     class="jaun-img" />
                                <h5>Diagnosis</h5>
                                <p>At GEM Hospital, thorough diagnostic assessments, including blood tests and imaging, are conducted to identify the underlying cause of jaundice in our patients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-timetable-->
                        <div class="feature-panel feature-timetable h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-4.svg') ?>"
                            class="jaun-img" />
                                <h5>Treatment</h5>
                                <p>Our expert medical team tailors personalized treatment plans, addressing the specific cause of jaundice. Interventions may range from medication to advanced procedures, ensuring optimal care</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-reservation-->
                        <div class="feature-panel feature-reservation h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-2.svg') ?>"
                            class="jaun-img" />
                                <h5> After Treatment Care</h5>
                                <p> Post-treatment, patients receive comprehensive care at GEM Hospital, including monitoring, follow-up appointments, and guidance on lifestyle adjustments for a smooth recovery from jaundice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Start .widget-timetable-->
                        <div class="feature-panel feature-timetable h-100">
                            <div class="feature-content"><img  src=" <?= base_url('frontend/assets/images/team/grid/oneday-3.svg') ?>"
                            class="jaun-img" />
                                <h5>Jaundice Patient Support</h5>
                                <p>Post-treatment, patients receive comprehensive care at GEM Hospital, including monitoring, follow-up appointments, and guidance on lifestyle adjustments for a smooth recovery from jaundice.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- End .heading-->
            </div>
            <!-- End .container-->
        </section>
        

        <div class="row my-5 position-relative">
            <div class="col-12 col-md-8 jaun-div1">
                <div class="container px-5">
                    <div class="entry-introduction">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="heading " >
                                    <p class="paragraph hernia-what">Overview</p>
    
                                    <h6 class="heading-title">
                                        What Is jaundice? A Yellow Signal from Your Body
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                                <p class="desc">&bull;
                                    A yellow tint to your skin and eyes? Jaundice may be the culprit. Read on to learn about this common condition and when to seek expert help.
                                </p>
                                <p class="desc">&bull;
                                    Jaundice, a medical term for the yellowing of your skin, whites of the eyes (sclerae), and mucous membranes, is like a warning light from your body
                                </p>
                                <p class="desc">&bull; It indicates a buildup of bilirubin, a yellow pigment produced during red blood cell breakdown. </p>
    
                                <p class="desc">&bull; Normally, your liver removes bilirubin and sends it into your digestive system.</p>
                                <p class="desc">&bull; But when this process gets disrupted, bilirubin accumulates, painting your skin and eyes with its unwanted hue.</p>
                                
    
    
                            </div>
    
                        </div>
                    </div>
                    
                    <section class="blog blog-grid blog-grid-3 gr jaun-sec1" id="blog-2">
                        
                        
                            <div class="entry-introduction">
                                <div class="row">
                                    <div class="col-12 col-lg-6 offset-lg-3">
                                        <div class="heading heading-7 text-center">
                                          
        
                                            <h2 class="heading-title">Types Of Jaundice</h2>
                                        </div>
                                    </div>
                                </div>
                           
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 col-lg-12 col-md-12 ">
                                <div class="heading">
                                   
    
                                    <h6 class="paragraph gre jaun-head2" >
                                        Jaundice isn't one-size-fits-all. Different causes lead to various types
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                               
                                <p class="desc"> <strong  class="jaun-str">Neonatal Jaundice:</strong> A common occurrence in newborns due to immature liver function. Usually resolves within a few weeks. </p>
    
                                <p class="desc"> <strong  class="jaun-str">Hemolytic Jaundice:</strong> Occurs when red blood cells break down prematurely, releasing excess bilirubin</p>
                                <div>
                                <img  src=" <?= base_url('frontend/assets/images/background/Types-of-Jaundice.png') ?>" alt="types-of-jaundice"  class="mob" />
                                </div>
                                <p class="desc"> <strong  class="jaun-str">Hepatocellular Jaundice:</strong> Liver dysfunction, caused by factors like hepatitis, impedes bilirubin processing</p>
                                <p class="desc"> <strong  class="jaun-str">Bile Duct Obstruction:</strong> Blockages in the bile ducts, like gallstones, prevent bilirubin from flowing into the digestive system
                                    </p>
                               
    
    
                            </div>
                            </div>
                            
                        
                    </section>
                     <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                        <div class="entry-introduction">
                            <div class="row">
                                <div class="col-12 col-lg-12 offset-lg-0">
                                    <div class="heading heading-7 text-center">
                                      
    
                                        <h2 class="heading-title">Symptoms: The Jaundice Warning Signs</h2>
                                    </div>
                                </div>
                            </div>
                       
                            
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                   
    
                                    <h6 class="paragraph gre jaun-head2" >
                                        Look out for these telltale signs of jaundice
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                               
                                <p class="desc">&bull;	Yellowing of the skin and whites of the eyes (the most obvious)  </p>
    
                                <p class="desc">&bull; Dark urine, pale stools (changes in bowel habits)</p>
                                <div>
                                <img  src=" <?= base_url('frontend/assets/images/background/Symtoms-jaundice.png') ?>" alt=" symptoms-of-jaundice"  class="mob" /></div>
                                <p class="desc">&bull; Itchy skin (can be intense, especially in newborns)</p>
                                <p class="desc">&bull; Fatigue, abdominal discomfort (general malaise)
                                    </p>
                                    <div class="row jaun-div2" >
                                        <div class="col-12">
                                    <div class="heading">
                                   
    
                                        <h6 class="paragraph gre jaun-head2">
                                            Book an Appointment Now! Don't Ignore the Yellow
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Jaundice, though common, can be a sign of serious underlying conditions. If you or your loved one experiences any of these symptoms, don't delay! GEM Hospital's experienced doctors are here to diagnose the cause of your jaundice and provide the right treatment. Early diagnosis and intervention are crucial for optimal recovery.
                                        </p>
                                        <p class="desc jaun-desc" > Click "Book Appointment Now" and let GEM Hospital's jaundice specialists guide you back to radiant health!
                                        </p>
                                        <div class="col-6" >
                                            
                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
    
    
                            </div>
                            </div>
                        
                    </section>
                    <section class="blog blog-grid blog-grid-3 jaun-sec3" id="blog-2" >
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="heading heading-7 text-center">
                                  

                                    <h2 class="heading-title">Causes Of Jaundice</h2>
                                </div>
                            </div>
                        </div>
                        
                           
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                   
    
                                    
                                    <p class="gre jaun-head2" >
                                        Jaundice, a telltale yellowing of the skin and whites of the eyes, isn't just a cosmetic concern. It's a flag waving for deeper imbalances in your body, often pointing towards issues with your liver, bile ducts, or red blood cells. Let's delve into the three main culprits behind jaundice and why you should book an appointment with GEM Hospital's expert doctors for prompt diagnosis and treatment.
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </p>
                                </div>
                               
                                <p class="desc"> <strong  class="jaun-str">Liver Blues: When Your Filter Gets Clogged</strong><br> Your liver is the body's tireless detoxification center, processing waste products like bilirubin, a yellow pigment produced during red blood cell breakdown. In healthy individuals, bilirubin flows through bile ducts into the intestine and exits gracefully. But when liver diseases like hepatitis, cirrhosis, or fatty liver disease strike, they can impair this delicate dance. Think of it like a clogged drain; bilirubin backs up, seeping into your bloodstream and painting your skin and eyes with its golden hue. </p>
                                <div>
                                <img  src=" <?= base_url('frontend/assets/images/background/Causes-gem-hospitals.png') ?>" alt="causes-of-jaundice"  class="mob" /></div>
    
                                <p class="desc"> <strong  class="jaun-str">Biliary Blockade: A Dam in the Flow</strong><br>Bile, a greenish-brown fluid made by the liver, carries away bilirubin and other waste products. But if the bile ducts get blocked, this crucial highway becomes a dead end. Gallstones, the most common culprit, are like traffic cones, while tumors or scarring can act as immovable roadblocks. This blockage traps bilirubin, causing jaundice and potentially leading to serious complications like infection or liver damage.</p>
                                <p class="desc"> <strong  class="jaun-str">Red Alert: When Blood Cells Burst and Bilirubin Soars</strong><br> Hemolytic anemia, a condition where red blood cells break down prematurely, throws another wrench into the bilirubin equation. Imagine a sudden downpour of bilirubin flooding the system, overwhelming the liver's processing capacity and leading to jaundice. Other conditions like sickle cell anemia or certain medications can also trigger this excessive bilirubin production.</p>

                                <div class="row jaun-div3">
                                    <div class="col-12">
                                <div class="heading">
                               

                                    <h6 class="paragraph gre jaun-head2" >
                                        Don't Let Jaundice Dim Your Shine: Book Your Appointment at GEM Hospital Today!
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                    <p class="desc jaun-desc" > Jaundice, while a noticeable symptom, is often just the tip of the iceberg. Ignoring it can lead to serious consequences. At GEM Hospital, our experienced jaundice specialists are equipped with the latest diagnostic tools and treatment options to get to the root cause of your yellowing and restore your vibrant health. Don't wait until the storm worsens; book your appointment today and let GEM Hospital's expertise guide you back to a clear and healthy you!
                                    </p>
                                    <p class="desc jaun-desc"> Remember, early diagnosis and treatment are key to managing jaundice effectively. Don't hesitate to reach out to GEM Hospital's jaundice specialists for expert guidance and a personalized treatment plan.
                                    </p>
                                    <div class="col-6" >
                                            
                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                </div>
                            </div>
                            </div>
                                
                               
    
    
                            </div>
                       
                    </section>
                    
                     <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2" >
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="heading heading-7 text-center">
                                  

                                    <h2 class="heading-title">Diagnosing Jaundice</h2>
                                </div>
                            </div>
                        </div>
                        
                        
                           
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                    <h6 class="paragraph gre jaun-head2">
                                        Yellowing skin? Don't wait, unlock the diagnosis with GEM Hospital's expert jaundice specialists. Book your appointment now!.  
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6><br>
                                    <p class=" gre jaun-head2" >
                                        Jaundice, the unwelcome guest that paints your skin yellow, can be a symptom of various underlying conditions. At GEM Hospital, our dedicated team is here to unravel the mystery and provide you with a clear diagnosis. Here's how we approach it 
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </p>
                                   
    
                                    
                                </div>
                               
                                <p class="desc"> <strong  class="jaun-str">Physical Examination:</strong>Our experienced doctors will be your keen observers, meticulously examining your skin, eyes, and mucous membranes for telltale signs of yellowing. They'll also look for other symptoms like fatigue, abdominal pain, and dark-colored urine. This initial assessment helps paint a broad picture of your condition. </p>
    
                                <p class="desc"> <strong  class="jaun-str">Blood Tests:</strong>These tests are the detectives in our diagnostic game, delving deep into your blood to measure bilirubin levels. Bilirubin, a breakdown product of red blood cells, is the culprit behind the yellowing. We analyze different types of bilirubin tests to pinpoint the source of the excess and determine the type of jaundice you might have.</p>
                                <div>
                                <img src=" <?= base_url('frontend/assets/images/background/Diagonse-jaundice.png') ?>" alt="Diagnosing-Jaundice"  class="mob" /></div>
                                <p class="desc"> <strong class="jaun-str">Imaging Tests (When Needed):</strong> Think of these as specialized magnifying glasses for your insides. In specific cases, our doctors may utilize ultrasound, CT scans, or MRIs to get a closer look at your liver, bile ducts, or other organs involved in bilirubin metabolism. This helps us identify any structural abnormalities contributing to the jaundice.</p>
                                <p class="desc">&bull; Don't let the yellow cloud of uncertainty hang over you. Book your appointment at GEM Hospital today and let our expert jaundice specialists guide you towards a clear diagnosis and effective treatment. We're here to help you reclaim your vibrant health!
                                    </p>

                                    <div class="row jaun-div4">
                                        <div class="col-12">
                                    <div class="heading">
                                   
    
                                        <h6 class="paragraph jaun-head2" >
                                            Book your appointment at GEM Hospital today for comprehensive jaundice diagnosis and treatment.
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc" > Remember, early diagnosis is key to managing jaundice effectively. Don't delay, book your appointment at GEM Hospital now!
                                        </p>
                                       <div class="col-6" >
                                            
                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               
    
    
                            </div>
                        
                    </section>
                    <section class="blog blog-grid blog-grid-3 jaun-sec5" id="blog-2" >
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">
                                  

                                    <h2 class="heading-title">Treatment Options for Jaundice</h2>
                                </div>
                            </div>
                        </div>
                        
                       
                            
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                   
    
                
                                    <h6 class="paragraph gre jaun-head2" >
                                        Jaundice, that yellowish hue on the skin and whites of the eyes, can be a worrisome sight, especially in newborns
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                               
                                <p class="desc"> <strong  class="jaun-str">Lighten the Bilirubin Load with Phototherapy:</strong> Imagine sunlight gently coaxing out the extra bilirubin. That's the magic of phototherapy! Special blue light waves break down bilirubin, allowing it to be easily flushed out through the digestive system. This gentle, non-invasive treatment is often the first line of defense for newborns with mild jaundice. </p>
    
                                <p class="desc"> <strong  class="jaun-str">Hemolytic Jaundice:</strong> Occurs when red blood cells break down prematurely, releasing excess bilirubin</p>
                                <p class="desc"> <strong  class="jaun-str">Medications: Targeting the Root Cause</strong><br>Jaundice can be a symptom of various underlying conditions, and sometimes, a targeted medication is the key. For instance, antibiotics might be used for bacterial infections, while ursodeoxycholic acid helps bile flow more freely. Remember, these medications should only be administered under the watchful eye of a qualified doctor like our specialists at GEM Hospital.</p>
                                <p class="desc"> <strong  class="jaun-str">Fuel Up for Recovery with Lifestyle Tweaks:</strong> Diet plays a crucial role in recovery. For breastfed babies, frequent feeding sessions help eliminate bilirubin through bowel movements. Formula-fed babies might benefit from switching to a special formula that enhances bilirubin elimination
                                    </p>
                                    <div>
                                    <img  src=" <?= base_url('frontend/assets/images/background/Treatment-jaundice.png') ?>" alt="treatment-for-jaundice"  class="mob"/></div>
                                    <p class="desc"> <strong  class="jaun-str">Surgery: A Last Resort for Blocked Bile Ducts</strong><br> In rare cases, jaundice might be caused by a physical obstruction in the bile ducts. If so, minimally invasive surgical procedures like laparoscopy can be performed to clear the blockage and restore proper bile flow.
                                    </p>
                                    <p class="desc"> <strong  class="jaun-str">Fuel Up for Recovery with Lifestyle Tweaks:</strong> Diet plays a crucial role in recovery. For breastfed babies, frequent feeding sessions help eliminate bilirubin through bowel movements. Formula-fed babies might benefit from switching to a special formula that enhances bilirubin elimination
                                    </p>


                                    <div class="row jaun-div4" >
                                        <div class="col-12">
                                    <div class="heading">
                                   
    
                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Jaundice Steal Your Shine - Book Your Appointment Now! 
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc" > Jaundice doesn't have to dim your little one's sparkle. At GEM Hospital, our team of expert jaundice specialists is here to guide you every step of the way. Book your appointment today and let us help your baby's skin regain its natural radiance!
                                        </p>
                                        <p class="desc jaun-desc" >Remember, early diagnosis and treatment are key to managing jaundice effectively. Don't delay, consult our specialists at GEM Hospital for the best possible care.
                                        </p>
                                        <div class="col-6" >
                                            
                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               
    
    
                            </div>
                        
                    </section>


                    <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2" >
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">
                                  

                                    <h2 class="heading-title">Preventing Jaundice</h2>
                                </div>
                            </div>
                        </div>
                        
                       
                            
                            <!-- End .row-->
                             
							  <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                   
    
                
                                    <p class="gre jaun-head2" >
                                        Jaundice, a yellowing of the skin and eyes in newborns, can be a worrying sight for new parents. But fear not! By taking proactive steps during pregnancy and beyond, you can significantly reduce the risk of your baby facing this common challenge.
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </p>
                                </div>
                               
                                
    
    
                            </div></section>
                            <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2" >
                            <div class="row" >
                                <div class="col-12 col-lg-12 offset-lg-0">
                                    <div class="heading heading-7 text-center">
                                      
    
                                        <h2 class="heading-title care jaun-head3" >Prenatal Care:Your First Defense</h2>
                                    </div>
                                </div>
                            </div>
                            
                           
                                
                                <!-- End .row-->
                                 
                                  <div class="row ">
                                <div class="col-12 ">
                                    <div class="heading">
                                       
        
                    
                                        <h6 class="paragraph gre jaun-head2" >
                                            Regular prenatal check-ups with your doctor are crucial for monitoring your baby's health and identifying any potential risk factors for jaundice
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                    </div>
                                    <p class="desc"> <strong  class="jaun-str">Track bilirubin levels:</strong> Bilirubin, a natural byproduct of red blood cell breakdown, can build up in newborns, causing jaundice. Early detection and monitoring help ensure timely intervention if needed. </p>
    
                                <p class="desc"> <strong  class="jaun-str">Manage underlying conditions:</strong>Certain maternal conditions like Rh incompatibility or gestational diabetes can increase the risk of jaundice. Prenatal care allows for proactive management of these conditions.</p>
                                <p class="desc"> <strong  class="jaun-str">Discuss feeding plans:</strong>Breastfeeding and frequent feedings help flush out bilirubin, naturally preventing jaundice. Your doctor can advise on optimal feeding practices for your baby.</p>
                                
                                   
                                    
        
        
                                </div></section>
                                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                                <div class="row">
                                    <div class="col-12 col-lg-12 offset-lg-0">
                                        <div class="heading heading-7 text-center">
                                          
        
                                            <h2 class="heading-title jaun-head3" >Vaccinations:Arming Your Baby with Immunity</h2>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                    
                                    <!-- End .row-->
                                     
                                      <div class="row ">
                                    <div class="col-12 ">
                                        <div class="heading">
                                           
            
                        
                                            <p class="gre jaun-head2" >
                                                Hepatitis B, a viral infection that can cause jaundice, is preventable through vaccination. Ensuring your baby receives the recommended vaccinations within the first few months of life shields them from this potential cause of jaundice
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </p>
                                        </div>
                                       
                                        
            
            
                                    </div>
                                </section>
                                <section class="blog blog-grid blog-grid-3 g jaun-sec6" id="blog-2" >

                                    <div class="row">
                                        <div class="col-12 col-lg-12 offset-lg-0">
                                            <div class="heading heading-7 text-center">
                                              
            
                                                <h2 class="heading-title jaun-head3" >Fueling a Healthy Start:The Power of Lifestyle Choices</h2>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                        
                                        <!-- End .row-->
                                         
                                          <div class="row ">
                                        <div class="col-12 ">
                                            
                                            <p class="desc"> <strong  class="jaun-str">Embrace a balanced diet:</strong> Nourishing yourself with a variety of fruits, vegetables, and whole grains provides the nutrients your baby needs for optimal development and liver function, reducing the risk of jaundice. </p>
            
                                        <p class="desc"> <strong  class="jaun-str">Move your body regularly:</strong>Gentle exercise during pregnancy improves blood flow and bilirubin processing, contributing to your baby's health.</p>
                                        <p class="desc"> <strong  class="jaun-str">Limit alcohol and tobacco:</strong>These substances can harm your baby's liver and increase the risk of jaundice. Opting for healthy alternatives benefits both you and your little one.</p>

                                        <div class="row jaun-div3" >
                                            <div class="col-12">
                                        <div class="heading">
                                       
        
                                            <h6 class="paragraph gre jaun-head2" >
                                                Book an Appointment with GEM Hospital's Jaundice Specialists Today! 
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>
                                            <p class="desc jaun-desc" > Jaundice doesn't have to dim Worried about the yellowing skin and fatigue that come with jaundice? Don't let it overshadow your health. At GEM Hospital, our dedicated team of jaundice specialists is here to guide you every step of the way, from diagnosis to recovery.
                                            </p>
                                            
                                            
                                            <div class="col-6" >
                                            
                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                        
                                           
                                            
                
                
                                        </div></div></section>
                                        
                                        
                                        <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2" >
                                            <div class="row">
                                                <div class="col-12 col-lg-8 offset-lg-2">
                                                    <div class="heading heading-7 text-center">
                                                      
                    
                                                        <h2 class="heading-title">Why Choose GEM? What We Offer</h2>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                               
                                                <!-- End .row-->
                                                 
                                                  <div class="row ">
                                                <div class="col-12 ">
                                                    
                                                   
                                                    <p class="desc"> <strong  class="jaun-str">Expert diagnosis:</strong> Our experienced doctors utilize advanced tests to pinpoint the exact cause of your jaundice, ensuring the right treatment plan.</p>
                        
                                                    <p class="desc"> <strong  class="jaun-str">Effective treatment:</strong> We tailor treatment options to your specific needs, whether it's medication, phototherapy, or other innovative methods.</p>
                                                    <p class="desc"> <strong  class="jaun-str">Compassionate care:</strong> We understand the emotional toll of jaundice. Our friendly staff provides unwavering support and guidance throughout your journey.</p>
                    
                                                    <div class="row jaun-div3">
                                                        <div class="col-12">
                                                    <div class="heading">
                                                   
                    
                                                        <h6 class="paragraph gre jaun-head2" >
                                                            Book an Consultation Now! 
                                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                                        </h6>
                                                        <p class="desc jaun-desc"> Ready to take control of your health? Schedule your consultation today!<br>
                                                            Click the "Schedule Your Consultation" button below and let our jaundice specialists help you conquer this condition and reclaim your vibrant life.<br>Don't wait, jaundice can worsen. Act now and take charge of your health.
                                                            
                                                        </p>
                                                       
                                                        <div class="col-6" >
                                            
                                              <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts"  href="https://gem-dev.verse.net.in/appointment/book-appointment"> <span class="line">
                                                <span></span></span><span>Schedule your consultation</span></a>
                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                    
                                                   
                        
                        
                                                </div>
                                           
                                        </section>
                                        
                        
                    
                      
                    

                 

                     

                    
    
                </div>
    
            </div>
            <div class="col-12 col-md-4 position-relative pe-0 pe-lg-5">
    
                <div class="sticky-top py-3 px-3 px-md-0 jaun-div5" >
                    <div class=" heading px-3 jaun-div6"  >
                        <h5 class="heading-title mt-3 jaun-head5">Book Appointment</h5>
    
                        <form class="contactForm" method="post" action="assets/php/contact.php">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <input class="form-control" type="text" name="contact-name"
                                        placeholder="Name" required="" />
                                </div>
                                
    
                                <div class="col-12 col-md-12 col-lg-12">
                                    <input class="form-control" type="text" name="contact-phone"
                                        placeholder="Phone No" required="" />
                                </div>
                                <div class="col-12">
                                    <select class="form-control w-100 nice-select  align-items-center">
                                        <option>Select Center</option>
                                        <option>Coimbatore</option>
                                        <option>Chennai Perungudi</option>
                                        <option>Chennai Aminjikarai</option>
                                        <option>Pondicherry</option>
                                        <option>Tiruppur</option>
                                        <option>Erode</option>
                                        <option>Thrissur</option>
                                    </select>
    
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <input class="form-control" type="date" name="contact-date"
                                        placeholder="Phone No" required="" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="contact-message" cols="30" rows="2"
                                        placeholder="message" required=""></textarea>
                                </div>
                                <div class="col-12">
                                    <button id="enq"
                                        class="btn btn--primary btn-line btn-line-before btn--block">
                                        <span class="line"> <span> </span></span><span>Book Appointment</span>
                                    </button>
    
                                </div>
    
                                
    
                            </div>
                        </form>
                    </div>
                </div>
    
            </div>
    
    
        </div>
        <div class="container position-relative">
            <div class="row position-relative">
                <div class="col-12 col-lg-12 position-relative">
                    
                    











                    <section class="departments departments-2" id="departments-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-12 heading-13 text-center">
                                        
                                        <h2 class="heading-title" >Loved by our Patients</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2"
                                data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                data-speed="200" id="more">
                                <div class="col-12 col-lg-8">

                                    <div class="about-img"><img class="img-fluid jaun-fimg1"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat3.webp') ?>" 
                                            alt="about Image" /><br><a class=""
                                            href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                               src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                
                                                class="bn-1" />

                                        </a></div>

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat2.webp') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                              
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
                                                   
                                                    class="bn-1" />
                                            </a></div>
                                    </div>
                                    <!-- End .entry-content-->

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat2.webp') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                
                                                class="bn-1" />
                                        </a></div>
                                </div>
                            </div>

                            <!-- End .departments-action-->
                        </div>
                        <!-- End .container-->
                    </section>

                   


                    <!---Our Experts---->

                    <!---Know More about Esophago Gastric Surgeries---->
                    <section class="blog blog-grid blog-grid-3 jaun-sec7" id="blog-2"
                        >
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3">
                                    <div class="heading heading-7 text-center">
                                       

                                        <h6 class="heading-title jaun-head6" >Experts
                                            Speech About Jaundice</h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- End .row-->
                            <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2"
                                data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                                data-speed="200" id="more">
                                <div class="col-12 col-lg-8">

                                    <div class="about-img"><img class="img-fluid jaun-fimg1"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultne.jpg') ?>" 
                                            alt="about Image" /><br><a class=""
                                            href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                               
                                                class="bn-1" />

                                        </a></div>

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.jpg') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                               
                                                class="bn-1" />
                                        </a></div>
                                </div>
                                <div>
                                    <div class="col-12 col-lg-8">
                                        <div class="about-img"><img class="img-fluid"
                                                 src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.webp') ?>" alt="about Image" /><br><a
                                                class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                     src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                                    
                                                    class="bn-1" />
                                            </a></div>
                                    </div>
                                    <!-- End .entry-content-->

                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid"
                                             src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.jpg') ?>" alt="about Image" /><br><a
                                            class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img
                                                 src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>"
                                               
                                                class="bn-1" />
                                        </a></div>
                                </div>
                            </div>
                            <!-- End .carousel-->
                        </div>
                    </section>

                    <div class="entry-infos tips-info heading">
                     
                        <h1 class="heading-title jaun-head7" >Frequently Ask
                            Questions</h1>
                        <div class="accordion accordion-3" id="accordion03">
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">How Long Is Recovery?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">The recovery period will vary depending on the type of hernia, type of surgery, age, and overall health. It’s normal to feel moderate pain. The recovery period for patients who have undergone Robotic surgery will be approximately 2 weeks and 3 to 4 weeks for Laparoscopic surgery.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How Long Will I Have To Stay In the Hospital?</a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body">You can go home on the procedure day itself if you have done a Laparoscopic or Robotic Surgery</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Is It Dangerous To Ignore The Hernia?</a></div>
                  <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body">If you ignore it will become bigger and more painful. At worst it can demand immediate Surgery and it could be more extreme</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Difference Between An Open Vs Laparoscopic Hernia Surgery?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">An open surgery requires an incision to put the bulging tissue back in place and it will take a lot of time for recovery.<br><br>

                      <b>Laparoscopic surgery is minimally-invasive which requires a small incision and also reduces recovery time.</b></div>
                  </div>
                </div>
				        <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Does The Surgery Affect Pregnancy?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body">Doctors usually recommend delaying elective hernia repair until after delivery. But Women can have laparoscopic hernia mesh surgery during pregnancy without complications and it requires fetal monitoring. The researchers also suggested performing a hernia in conjunction with a C-section to be the best option for pregnant patients.</div>
                  </div>
                </div>

              </div>

                    </div>-



                </div>

            </div>
        </div>
    </div>

                      </body>  


 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>