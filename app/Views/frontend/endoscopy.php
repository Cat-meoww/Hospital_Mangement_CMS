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
                  <h1>Endoscopy</h1>
                </div>
                <div class="title-sub-heading">
                  <!---<p>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are trained to take care of small children.</p>--->
                  <p>The Gem Hospital is One of the Most Advanced Centers for Upper GI Diseases, Gastro-Intestinal
                    Surgery, And Minimal Access Surgery in India.</p>
                </div>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Endoscopy</li>
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
                    <div class="bg-section"><img  src="<?= base_url('frontend/assets/images/video/5.jpg') ?>" alt="background" /></div>
                    <!--<a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i><span>watch our presentation!</span></a>-->
                    <!-- End .popup-video-->
                  </div>
                   <h6 class="entry-heading" style="font-size: 24px; color:#0D3E21;">
                    Descriptions
                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                  </h6>
                  <p class="desc">
                   Endoscopy is a non-surgical procedure used to examine a person’s digestive tract. During an upper endoscopy, an endoscope is easily passed through the mouth and throat and into the esophagus, allowing the doctor to view the esophagus, stomach, and upper part of the small intestine.</p>
				   
				   <p class="desc">Similarly, endoscopes can be passed into the large intestine (colon) through the rectum to examine this area of the intestine. This procedure is called sigmoidoscopy or colonoscopy depending on how far up the colon is examined. A special form of endoscopy called endoscopic retrograde cholangiopancreatography, or ERCP, allows pictures of the pancreas, gallbladder, and related structures to be taken.</p>
                  
                  <!--We will work with you to develop individualised care plans, including management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner you require. We treat all enquiries in the strictest confidence.-->
                  
                  <p class="desc">Gem Hospital as one of the best endoscopy centers in Coimbatore and Chennai with its pioneering work has itself as the leading health care provider in the fields of Gastroenterology, Robotic surgery, Gynaecology, Urology, etc.
                  </p>
                </div>
                <div class="col-12 col-lg-4">

                  <div class="sidebar sidebar-service">

                    

                    <div class="widget widget-services">
                      <div class="widget-title">
                        <h5>Book Appointment</h5>
                      </div>
                      <div class="widget-content">
                        <ul class="list-unstyled">
                          <li><a href="<?= base_url('appointment/video-consultation')?>"> <span class="line"> <span></span></span><span>Video
                                Consultation</span></a></li>
                          <li><a href="<?= base_url('appointment/book-appointment')?>"> <span class="line"> <span></span></span><span>Visit to
                                Hospital</span></a></li>

                        </ul>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="row">
                  <!--"col-12 col-lg-4"-->
                 <div class="col-12 col-lg-12">
                    <h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">Disease And Treatment</h4>
                    <p class="desc">Endoscopy may also be used to treat a digestive tract problem. For example, the endoscope might not only detect active bleeding from an ulcer but devices can be passed through the endoscope that can stop the bleeding. In the colon, polyps can be removed through the scope to prevent the development of colon cancer.Also, using endoscopy, gallstones that have passed outside the gallbladder and into the bile duct can often be removed.</p>
                    <p class="desc">Endoscopy is useful for investigating many systems within the human body; these areas include:</p>
					 <div class="col-12 col-lg-8">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Gastrointestinal tract: esophagus, stomach, and duodenum(esophagogastroduodenoscopy), small intestine (enteroscopy), largeintestine/colon (colonoscopy, sigmoidoscopy), bile duct, rectum (rectoscopy),and anus (anoscopy).</li>
                      <li><i class="fas fa-check"></i> Respiratory tract: Nose (rhinoscopy), lower respiratory tract (bronchoscopy).</li>
                      <li><i class="fas fa-check"></i> Ear: Otoscopy</li>
                      <li><i class="fas fa-check"></i> Urinary tract: Cystoscopy</li>
					  <li><i class="fas fa-check"></i> Female reproductive tract (gyroscope): Cervix (colposcopy), uterus(hysteroscopy), fallopian tubes (fluoroscopy).</li>
                      <li><i class="fas fa-check"></i> Through a small incision: Abdominal or pelvic cavity (laparoscopy), the interiorof a joint (arthroscopy), and organs of the chest (thoracoscopy and mediastinoscopy).</li><br><br>
                    </ul>
                  </div>
					<h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">GEM’s expertise in Endoscopy</h4>
                    <p class="desc">The Gem Hospital is one of the best ERCP hospitals in Chennai and Coimbatore, and the hospital handles all major endoscopy treatments and other related treatments with our experienced doctors. Our department is headed by one of the most renowned doctors who is not only a medical expert in the field of endoscopy but is also an international faculty in the field of upper GI and laparoscopic surgery. GEM Hospital as the best endoscopy center in Coimbatore has now spread its wings to Chennai which has long been established as a healthcare destination this hospital provides comprehensive medical care under one roof.</p>
                    <p class="desc">Gem Hospital provides the most advanced technology and the best services available in treating medical Gastroenterology related problems. Gem Hospital has its Gastroenterology treatment center with the best Gastroenterologist in India.</p>
					
					<h4 class="desc" style="font-size: 26px; line-height: initial; color: #0D3E21;">DISEASE AND TREATMENT</h4>
                    <p class="desc">The Department has grown from to its current strength both as a clinical and an academic center of Excellence under the able mentorship of the Chief. The department boasts one of the highest Quantities and Quality of diagnostic and therapeutic Endoscopic procedures in Tamil Nadu at affordable costs to the masses.</p>
					 <div class="col-12 col-lg-12">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> The 24 *7 Emergency Endoscopy services and ICU Facilities have enabled the management of Acute Emergencies like GI bleeding with the best outcomes. The state of Art Endoscopic Equipment includes HD endoscopes, ERCP, Endoscopic Ultrasound, High-Resolution Manometry, Motility Lab, Biofeedback lab, 24-hour Ph, and Impedance studies.</li>
                      <li><i class="fas fa-check"></i> The state of Art Endoscopic Equipment includes HD endoscopes, ERCP, Endoscopic Ultrasound, High-Resolution Manometry, Motility Lab, Biofeedback lab, 24-hour Ph, and Impedance studies.</li>
                      <li><i class="fas fa-check"></i> The Liver transplant program has added Hope and Care to the ever-increasing burden of Liver Diseases and being part of the HPB /HLT units has brought the highest level of the scientific multidisciplinary approach to patient care.</li>
                      <li><i class="fas fa-check"></i> The gastroenterology department holds pride in performing the country’s first POEM Procedure for Achalasia Cardia, NOTES procedure, and several other Hybrid Lap assisted Endoscopic procedures.</li>
					  <br><br>
                    </ul>
                  </div>
				   <p class="desc">Any problems with the digestive tract like diarrhea, constipation, indigestion, or rectal bleeding will be diagnosed and given optimal solutions by them after the physical physician fails to identify the problem. They also deal with an ulcer, piles, and even cancer tissues of the GI tract.</p>
					  <p class="desc">Gastroenterology procedures include a range of procedures specific to various ailments. Some of the non-surgical procedures include:</p>
					  <div class="col-12 col-lg-12">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Ultrasound examinations for the analysis of the internal organs especially of those belonging to the GI tract</li>
                      <li><i class="fas fa-check"></i> Liver biopsies for assessing any inflammation or the presence of fibroids</li>
                      <li><i class="fas fa-check"></i> Colonoscopies for examining colon cancer or other colon issues</li>
                      <li><i class="fas fa-check"></i> Single Incision Colonic resections</li>
					  <br><br>
                    </ul>
                  </div>
				  <p class="desc">After the initial diagnosis through these non-surgical examinations, the core ailment is identified. After that, open surgeries or laparoscopic procedures are carried out for further gastro treatment purposes. Laparoscopic gastro methods at GEM have been carried out with impeccable precision and aid shorter gastro hospital stays with quicker recovery. GEM has also been providing comprehensive post-op care and ensures the complete recovery of the patients.</p>
					  <p class="desc">With a team of expert gastroenterologists in Chennai, GEM the best gastroenterology hospital in India has been providing impeccable therapeutic treatment procedures for conditions pertaining to the</p>
					   <div class="col-12 col-lg-12">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Stomach,</li>
                      <li><i class="fas fa-check"></i> Esophagus,</li>
                      <li><i class="fas fa-check"></i> The small intestine, colon, and</li>
                      <li><i class="fas fa-check"></i> Biliary system.</li>
					  <br><br>
                    </ul>
                  </div>
				  <p class="desc">Gastroenterologists aid in the diagnosis and treatment of the conditions pertaining to the stomach, esophagus, small intestine, colon, and biliary system. The health conditions associated with these mentioned conditions primarily include</p>
				   <div class="col-12 col-lg-12">
                    <ul class="list-unstyled advantages">
                      <li><i class="fas fa-check"></i> Ulcers,</li>
                      <li><i class="fas fa-check"></i> nutritional disorders,</li>
                      <li><i class="fas fa-check"></i> bowel-related problems,</li>
                      <li><i class="fas fa-check"></i> pancreatitis, and</li>
					  <li><i class="fas fa-check"></i> gallbladder ailments.</li>
					  <br><br>
                    </ul>
                  </div>
				  <p class="desc">Endoscopy, Colonoscopy, Stone Removal, Polypectomy, and Haemorrhoid Treatment are some of the procedures done for the cure. They have also been providing the best post-surgery care to ensure the long-term well-being of the patients. With the help of laparoscopic techniques, they’ve also been carrying out minimally invasive techniques for major digestive surgeries.</p>
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

          </div>

        </div>
      </div>
    </section>


 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>