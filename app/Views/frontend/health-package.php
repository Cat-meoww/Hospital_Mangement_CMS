<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>


<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section">
          <img src=" <?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" />
        </div>
        <div class="container">
          <div class="hero-content" style="padding-bottom: 85px !important">
            <div class="row">
              <div class="col-12 col-lg-5">
                <h2 class="hero-title" style="margin-top: 60px">
                  Master Health Checkup
                </h2>
                <p class="hero-desc">Caring For The Health Of You And Your Family.</p>
                

                <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12" style="margin-top: 30px">
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                  <li class=""><a href="page-pricing.html">Health Package</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--
      ============================
      Pricing Table Section
      ============================
	  
      -->
      <section>
      <div class="container pt-2">


<p class="paragraph" style="font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-primary);
  margin-top: 10px;">Pricing</p>

        <div class="d-flex justify-content-between" style="margin-top: 30px;">
       

          <h2  style="color: var(--global--color-primary); letter-spacing: var(--e-global-typography-5d167aa-letter-spacing); word-spacing: var(--e-global-typography-5d167aa-word-spacing); font-size: 35px;  font-family: var(--global--font-heading);">HealthPackages</h2>
		          <div class="container">
            <div class="d-flex justify-content-end" style="display:flex; justify-content:end; ">
                <!-- Column -->
                
                    <a class="btn btn-success col-12 col-md-2 bn-book" href="#" style="clear:both;">Book Now</a>
                  

            </div>
        </div>
         
        </div>
        




      </div>

  </div>
  </section>
  <style>
				  .btn-success{
				     background-color: var(--global--color-primary);
				  }
				  .btn-success:hover{
				       
					   background-color:  rgb(13, 62, 33);
                       border-color: #146c43;
				  }
          @media screen and (max-width:600px) {
            .bn-book{
              position: absolute;
              right:120px;
              bottom:20px;
              
            }

            
          }
				  </style>
  <section class="single-service pt-2]" id="sample">
    <div class="entry-infos core-values">
     
      <!---<p class="entry-desc">Today the hospital is recognised as a world renowned institution, not only providing outstanding care and treatment, but improving the outcomes for all through a comprehensive medical research. For over 20 years, our hospital has touched lives of millions of people, and provide care and treatment for the sickest in our community including rehabilitation and aged care.</p>--->
      <div class="">
        <div class="" style="width: 95%;">
          <div class="entry-value"><i class=""></i>
            <div class="entry-content">
              <!--<h5>medical check ups</h5>-->

              <div class="row align-items-center">
                <div class="col-12 col-md-3" >

                  <h2 style="font-family:  var(--global--font-heading); font-size: 20px; color: #0D3E21;">Express Health Checkup</h2>

                </div>
				
                <div class="col-12 col-md-8 row">
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages">
                      <li><span class="content-span"><i class="fas fa-check"></i>Haemoglobin</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Total Count</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Differential Count</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Platelet Count</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Blood Sugar</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>HBA1C</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Cardiology & Dietician Consultation</span></li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages">
                      <li><span class="content-span"><i class="fas fa-check"></i>Urea</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Creatinine</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Viral Markers(Hep B & Anti HCV)</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Liver Function Test</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>Lipid Profile test</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>USG Abdomen</span></li>
                      <li><span class="content-span"><i class="fas fa-check"></i>ECG</span></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-1" >
                  <p style="font-family:  var(--global--font-heading); font-size: 30px; color: #118B0F; margin-left:50px"><span class="health-amt">Rs.3750</span></p>
                </div>
              </div>
             
    

             
            </div>
          </div>
        </div>
		  
        <div class="" style="width: 95%;">
          <div class="entry-value"><i class=""></i>
            <div class="entry-content">
              <!--<h5>medical check ups</h5>-->

              <div class="row align-items-center">
                <div class="col-12 col-md-3" >

                  <h2 style="font-family:  var(--global--font-heading); font-size: 20px; color: #0D3E21;">Cancer Screening For Male<br> <span style="font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-primary);
  "> (Everything in Express <br>Health Checkup plus)</span></h2>

                </div>
				
                <div class="col-12 col-md-8 row">
                 
                  <div class="col-12 col-md-6">
                   
                    <ul class="list-unstyled advantages" style="margin-left:10px;">
                      <li><span class="content-span1"><i class="fas fa-check check1"></i>Carcinoembryonic Antigen</span></li>
                      <li><span class="content-span1"><i class="fas fa-check check1"></i>Prostate-Specific Antigen</span></li>
                      
                     
                    </ul>
                  </div>
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages" style="margin-left:30px;">
                      <li><span class="content-span2"><i class="fas fa-check check2"></i>CA 19.9</span></li>
                      <li><span class="content-span2"><i class="fas fa-check check2"></i>Stool Occult blood</span></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-1">
                  <p style="font-family:  var(--global--font-heading); font-size: 30px; color: #118B0F; margin-left:85px;"><span class="health-amt1">Rs.7000</span></p>
                </div>
              </div>
             
    

             
            </div>
          </div>
        </div>
		  
        <div class="" style="width: 95%;">
          <div class="entry-value"><i class=""></i>
            <div class="entry-content">
              <!--<h5>medical check ups</h5>-->

              <div class="row align-items-center">
                <div class="col-12 col-md-3" >

                  <h2 style="font-family:  var(--global--font-heading); font-size: 20px; color: #0D3E21;">Cancer Screening For Female <br> <span style="font-weight: 700;
  font-size: 16px;
  line-height: 27px;
  color: var(--global--color-primary);
  "> (Everything in Express <br>Health Checkup plus)</span></h2>

                </div>
				
                <div class="col-12 col-md-8 row">
                  
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages" style="margin-left:20px;">
                      <li><span class="content-span5"><i class="fas fa-check check5"></i>

                      CA 125</span></li>
                      <li><span class="content-span5"><i class="fas fa-check check5"></i>
Papsmear</span></li>
                      <li><span class="content-span5"><i class="fas fa-check check5"></i>
USG Breast Screening</span></li>
                      
                     
                    </ul>
                  </div>
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages" style="margin-left:40px;">
                      <li><span class="content-span6"><i class="fas fa-check check6"></i>
Gynecologist</span></li>
                      <li><span class="content-span6"><i class="fas fa-check check6"></i>
Stool Occult blood</span></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-1">
                  <p style="font-family:  var(--global--font-heading); font-size: 30px; color: #118B0F; margin-left:80px;"><span class="health-amt2">Rs.7000</span></p>
                </div>
              </div>
             
    

             
            </div>
          </div>
        </div>
        <div class="" style="width: 95%;">
          <div class="entry-value"><i class=""></i>
            <div class="entry-content">
              <!--<h5>medical check ups</h5>-->

              <div class="row align-items-center">
                <div class="col-12 col-md-3" >

                  <h2 style="font-family:  var(--global--font-heading); font-size: 20px; color: #0D3E21;">Bottom Care
checkup</h2>

                </div>
				
                <div class="col-12 col-md-8 row">
                 
                  <div class="col-12 col-md-6">
                   
                    <ul class="list-unstyled advantages" style="margin-left:10px;">
                      <li><span class="content-span1"><i class="fas fa-check check1"></i>OP Routine</span></li>
                      <li><span class="content-span1"><i class="fas fa-check check1"></i>
Proctoscopy</span></li>
<li><span class="content-span1"><i class="fas fa-check check1"></i>
Colorectal Specialist Consultation</span></li>
                      
                     
                    </ul>
                  </div>
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled advantages" style="margin-left:30px;">
                      <li><span class="content-span2"><i class="fas fa-check check2"></i>Dietician Consultation</span></li>
                      <li><span class="content-span2"><i class="fas fa-check check2"></i>
Stool Occult blood</span></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-1">
                  <p style="font-family:  var(--global--font-heading); font-size: 30px; color: #118B0F; margin-left:85px;"><span class="health-amt3">Rs.1500</span></p>
                </div>
              </div>
             
    

             
            </div>
          </div>
        </div>
		  
          <!----<div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Best Technique Award, 12th World Congress of Esophageal Diseases, Japan 2010</p>
                      
                    </div>
                  </div>
                </div>---->
          <!----<div class="col-12 col-md-6">
                  <div class="entry-value"><i class=""></i>
                    <div class="entry-content">
                      
                      <p>Cardiomyotomy Surgery done successfully in an 8 months Pregnant Woman</p>
                      
                    </div>
                  </div>
                </div>--->
       

        </div>
      </div>
  </section>
  <style>
	#sample{
	margin-left: 5%;
	font-size: 14px;
	padding-left: 0;
	align-content: center;
	align-items: center;
	
	
	}
	.single-service .core-values .entry-value i::before {
	   font-size: 12px;
	   color: #61ce70;
	   margin-right: 22px;
	  
	}
  @media screen and (max-width:600px){
    .fa-check,.content-span{
      display: flex;
      flex-direction: row;
    }.check1,.content-span1{
      display: flex;
      flex-direction: row;
      margin-left:-5px;
    
    }.check2,.content-span2{
      display: flex;
      flex-direction: row;
      margin-left:-15px;
    
    }.check3,.content-span3{
      display: flex;
      flex-direction: row;
      margin-left:5px;

    
    }.check4,.content-span4{
      display: flex;
      flex-direction: row;
      margin-left:0px;
     
    
    }
    .check5,.content-span5{
      display: flex;
      flex-direction: row;
      margin-left:-5px;
     
    
    } .check6,.content-span6{
      display: flex;
      flex-direction: row;
      margin-left:-15px;
     
    
    }p .health-amt{
      display:flex;
      flex-direction:row;
      margin-left: 15%;
      
    }
    p .health-amt1{
      display:flex;
      flex-direction:row;
      margin-left: 1%;
      
    }
    p .health-amt2{
      display:flex;
      flex-direction:row;
      margin-left: 5%;
      
    }
    p .health-amt3{
      display:flex;
      flex-direction:row;
      margin-left: 3%;
      
    }
  }
	</style>
  <!----<section class="pricing" id="pricing-1">
    <div class="container">
      <div class="pricing-holder">
       <div class="price-table" data-hover="">
          <div class="pricing-panel">
            <div class="pricing-body">
              <div class="pricing-heading">
                <h4 class="pricing-title"> Express Health Checkup</h4>
                
              </div>
              <ul class="pricing-list list-unstyled">
                <li><i class="fas fa-check"></i> <span>Haemoglobin</span></li>
                <li><i class="fas fa-check"></i> <span>Total Count</span></li>
                <li><i class="fas fa-check"></i> <span>Differential Count</span></li>
                <li><i class="fas fa-check"></i> <span>Platelet Count</span></li>
                <li><i class="fas fa-check"></i> <span>Blood Sugar</span></li>
                <li><i class="fas fa-check"></i> <span>HBA1C</span></li>
                <li><i class="fas fa-check"></i> <span>Cardiology & Dietician Consultation</span></li>
                <li><i class="fas fa-check"></i> <span>Urea</span></li>
                <li><i class="fas fa-check"></i> <span>Creatinine</span></li>
                <li><i class="fas fa-check"></i> <span>Viral Markers(Hep B & Anti HCV)</span></li>
                <li><i class="fas fa-check"></i> <span>Liver Function Test</span></li>
                <li><i class="fas fa-check"></i> <span>Lipid Profile test</span></li>
                <li><i class="fas fa-check"></i> <span>USG Abdomen</span></li>
                <li><i class="fas fa-check"></i> <span>ECG</span></li>
              </ul>
            </div>
            <div class="pricing-price">
              <p> <span class="currency">Rs. 3750</span></p>
              
            </div>
          </div>
        </div>
       
        <div class="price-table" data-hover="">
          <div class="pricing-panel active">
            <div class="pricing-body">
              <div class="pricing-heading">
                <h4 class="pricing-title">Cancer Screening for Female</h4>
                <h3 class="pricing-desc">Everything in Express Health Checkup plus</h3>
              </div>
              <ul class="pricing-list list-unstyled">
                <li><i class="fas fa-check"></i> <span>CA 125</span></li>
                <li><i class="fas fa-check"></i> <span>Papsmear</span></li>
                <li><i class="fas fa-check"></i> <span>USG Breast Screening</span></li>
                <li><i class="fas fa-check"></i> <span>Gynecologist</span></li>
                <li><i class="fas fa-check"></i> <span>Stool Occult blood</span></li>
              </ul>
            </div>
            <div class="pricing-price">
              <p> <span class="currency">Rs.7000</span></p>
              
            </div>
          </div>
        </div>
        
        <div class="price-table" data-hover="">
          <div class="pricing-panel">
            <div class="pricing-body">
              <div class="pricing-heading">
                <h4 class="pricing-title">Cancer Screening for Male</h4>
                <h3 class="pricing-desc">Everything in Express Health Checkup plus</h3>
              </div>
              <ul class="pricing-list list-unstyled">
                <li><i class="fas fa-check"></i> <span>Carcinoembryonic Antigen</span></li>
                <li><i class="fas fa-check"></i> <span>CA 19.9</span></li>
                <li><i class="fas fa-check"></i> <span>Prostate-Specific Antigen</span></li>
                <li><i class="fas fa-check"></i> <span>Stool Occult blood</span></li>
                
              </ul>
            </div>
            <div class="pricing-price">
              <p> <span
                  class="currency">Rs.7000</span>
            </div>
          </div>
        </div>
        

      </div>
      
      <br>
      
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
  </section>---->



  <section class="donations donations-2 pt-1" id="donations-2">
    <div class="container">
      <div class="heading heading-4">
        <div class="row">
          <div class="col-12 col-lg-5">
            <p class="paragraph">FAQ</p>
            <h2 class="heading-title">Frequently Asked Question</h2>
            <!---<div class="img-hotspot">
              <div class="img-hotspot-wrap">
                <div class="img-hotspot-bg"> <img src="assets/images/background/world-map.png" alt="image" /></div>
                <div class="img-hotspot-pointers">
                  <div class="img-hotspot-pointer" data-spot-x="15%" data-spot-y="29%"><img
                      src="assets/images/background/map-pointer.png" alt="pointer" />
                    <div class="info right" data-info-x="18px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New
                        York 11226 U.S.</span></div>
                  </div>
                  <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img
                      src="assets/images/background/map-pointer.png" alt="pointer" />
                    <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New
                        York 11226 U.S.</span></div>
                  </div>
                  <div class="img-hotspot-pointer" data-spot-x="68%" data-spot-y="23%"><img
                      src="assets/images/background/map-pointer.png" alt="pointer" />
                    <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New
                        York 11226 U.S.</span></div>
                  </div>
                </div>
              </div>
            </div>--->
          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
            <!--<p class="paragraph">Our staff strives to make each interaction with patients clear, concise, and inviting. Support them important work of Medicsh Hospital by making a much-needed donation today.</p>
                <p class="heading-desc">We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries sensitively and in the strictest confidence.</p>--->
            <div class="accordion" id="accordion03">
              <div class="card">
                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Why is the
                    Master Health Checkup For Gastro important?</a></div>
                <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                  <div class="card-body">A gastro health check up helps in the early detection, prevention and
                    management of gastro intestinal disorders and diseases. It allows healthcare professional to
                    identify any abnormalities, such as ulcers, polyps, tumors, or the inflammation in the digestive
                    system and take appropriate measure or treatment or further investigations.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Can I eat or
                    drink anything before checkup? </a></div>
                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                  <div class="card-body">In some cases, you will be required to fast for a specific duration before the
                    checkup.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">How will I receive the
                    results? </a></div>
                <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                  <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and
                    inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We
                    will work with you to develop individualised care plans, including management of chronic diseases.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How long does
                    a master health checkup for gastro take? </a></div>
                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                  <div class="card-body">The duration of a gastro health checkup vary depending on the tests included.
                    It may take a few hours or even a full day to complete all the necessary test and procedure.</div>
                </div>
              </div>
            </div><!--<a class="btn btn--primary" href="contact.html">make a gift <i class="fas fa-heart"></i></a>--->
          </div>
        </div>
        <!-- End .row-->
      </div>
      <!-- End .heading-->
    </div>
    <!-- End .container-->
  </section>
  <!-- 
      ============================
      Testimonials #03 Section
      ============================
      -->
  <!----<section class="testimonial testimonial-3 bg-overlay bg-overlay-theme2" id="testimonial-3">
        <div class="bg-section"> <img src="assets/images/background/2.jpg" alt="background-img"/></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="heading heading-light heading-10">
                <p class="heading-subtitle">the best medical care</p>
                <h2 class="heading-title">patient's inspiring stories of hope !</h2>
              </div>
              <div class="testimonial-thumbs">
                <div class="testimonial-thumb active" data-hover="">
                  <div class="thumb-img"> <img src="assets/images/testimonial/1.jpg" alt="Testimonial Author"/><i class="icon-Quote-Icon"></i></div>
                  <div class="thumb-body"> 
                    <h6>sami wade</h6>
                    <p>promina</p>
                  </div>
                </div>
                <div class="testimonial-thumb" data-hover="">
                  <div class="thumb-img"> <img src="assets/images/testimonial/2.jpg" alt="Testimonial Author"/><i class="icon-Quote-Icon"></i></div>
                  <div class="thumb-body"> 
                    <h6>john peter</h6>
                    <p>optima inc</p>
                  </div>
                </div>
                <div class="testimonial-thumb" data-hover="">
                  <div class="thumb-img"> <img src="assets/images/testimonial/3.jpg" alt="Testimonial Author"/><i class="icon-Quote-Icon"></i></div>
                  <div class="thumb-body"> 
                    <h6>sony blake</h6>
                    <p>koira ind</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1">
              <div class="testimonials-holder">
                <div class="carousel owl-carousel custom-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800">
                  <div class="testimonial-panel">
                    <div class="testimonial-body">
                      <div class="testimonial-content">
                        <div class="testimonial-icon"></div>
                        <p>Their doctors include highly qualified practitioners who come from a range of backgrounds &amp; bring with them a diversity of skills and special interests. They also registered nurses available to triage any urgent matters, and the administration and staff all have exceptional skills!!</p>
                        <div class="testimonial-rating"> <span class="num">4.9</span>
                          <div class="rating-body"> 
                            <p><a href="javascript:void(0)" data-hover=""><span>zodoc</span> Overall Rating ,</a> based<br/> on 7541 reviews</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-panel">
                    <div class="testimonial-body">
                      <div class="testimonial-content">
                        <div class="testimonial-icon"></div>
                        <p>Their doctors include highly qualified practitioners who come from a range of backgrounds &amp; bring with them a diversity of skills and special interests. They also registered nurses available to triage any urgent matters, and the administration and staff all have exceptional skills!</p>
                        <div class="testimonial-rating"> <span class="num">4.9</span>
                          <div class="rating-body"> 
                            <p><a href="javascript:void(0)" data-hover=""><span>zodoc</span> Overall Rating ,</a> based<br/> on 7541 reviews</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-panel">
                    <div class="testimonial-body">
                      <div class="testimonial-content">
                        <div class="testimonial-icon"></div>
                        <p>Their doctors include highly qualified practitioners who come from a range of backgrounds &amp; bring with them a diversity of skills and special interests. They also registered nurses available to triage any urgent matters, and the administration and staff all have exceptional skills!!</p>
                        <div class="testimonial-rating"> <span class="num">4.9</span>
                          <div class="rating-body"> 
                            <p><a href="javascript:void(0)" data-hover=""><span>zodoc</span> Overall Rating ,</a> based<br/> on 7541 reviews</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="custom-navs"><a class="prev" href="javascript:void(0)" data-hover=""><span class="line"> <span> </span></span><span>previous</span></a><a class="next" href="javascript:void(0)" data-hover=""><span>next</span><span class="line"> <span> </span></span></a></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="contact-panel contact-panel-2">
                <div class="img-card bg-overlay">
                  <div class="bg-section"><img src="assets/images/contact/1.jpg" alt="image"/></div>
                  <div class="card-content">
                    <h3>we accept all major insurance plans</h3>
                    <p>We accept a number of insurance plans to help you cover costs depending on your individual needs.</p>
                    <div class="carousel owl-carousel clients" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800">
                      <div class="client"><img src="assets/images/clients/1.png" alt="Client"/></div>
                      <div class="client"><img src="assets/images/clients/2.png" alt="Client"/></div>
                      <div class="client"><img src="assets/images/clients/3.png" alt="Client"/></div>
                      <div class="client"><img src="assets/images/clients/1.png" alt="Client"/></div>
                      <div class="client"><img src="assets/images/clients/2.png" alt="Client"/></div>
                      <div class="client"><img src="assets/images/clients/3.png" alt="Client"/></div>
                    </div>
                  </div>
                </div>
                <div class="contact-card">
                  <div class="contact-body">
                    <h5 class="card-heading">book an appointment</h5>
                    <p class="card-desc">Please feel welcome to contact our staff with any general or medical enquiry. Our doctors will receive or return any urgent calls.</p>
                    <form class="contactForm" method="post" action="assets/php/contact.php">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="select-holder">
                            <select class="form-control">
                              <option value="default">bathology clinic</option>
                              <option value="AL">neurology clinic </option>
                              <option value="AK">cardiology clinic </option>
                            </select>
                            <div class="badge">department</div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="select-holder">
                            <select class="form-control">
                              <option value="default">michael brian</option>
                              <option value="AL">maria andoloro</option>
                              <option value="AK">richard muldoone</option>
                            </select>
                            <div class="badge">choose doctor</div>
                          </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                          <input class="form-control" type="text" name="contact-name" placeholder="Name" required=""/>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                          <input class="form-control" type="text" name="contact-email" placeholder="Email" required=""/>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <input class="form-control" type="text" name="contact-phone" placeholder="Phone" required=""/>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="date-select">
                            <input class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="select date" name="contact-date" value="" required=""/><i class="fas fa-calendar-day"></i>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="time-select">
                            <input class="form-control" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="select time" name="contact-date" value="" required=""/><i class="fas fa-clock"></i>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn--secondary btn-line btn-line-before btn--block"><span class="line"> <span> </span></span><span>make appointment</span></button>
                        </div>
                        <div class="col-12">
                          <div class="contact-result"></div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End .contact-body -->
  </div>
  </div>
  <!-- End .contact-panel-->
  </div>
  </div>
  <!-- End .row -->
  </div>
  <!-- End .container-->
  </section>---->
  <!--
      ============================
      Donations #2 Section
      ============================
      -->
  <!---<section class="donations donations-2" id="donations-2">
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
                <p class="paragraph">Our staff strives to make each interaction with patients clear, concise, and inviting. Support them important work of Medicsh Hospital by making a much-needed donation today.</p>
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
        
      </section>----->
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>