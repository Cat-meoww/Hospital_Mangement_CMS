<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
  @media screen and (max-width:600px) {
.select-holder {
    color: var(--global--color-heading);
    font-size: 14px;
    font-weight: 400;
    height: 65px;
    line-height: 53px;
    width: 340px ! important;
    border-radius: 8px 8px 8px 0;
    border: none;
    background-color: var(--global--color-primary-light);
    padding-left: 0px;
    margin-bottom: 20px;
    position: relative;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100% ! important; 
    height: 900px ! important;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
}
label {
  

  padding: 0.5rem;
  font-family: sans-serif;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}
.btn-close{
   float: right;
}
.select-holder{
   
    color: var(--global--color-heading);
    font-size: 14px;
    font-weight: 400;
    height: 65px;
    line-height: 53px;
    width: 615px;
    border-radius: 8px 8px 8px 0;
    border: none;
    background-color: var(--global--color-primary-light);
    padding-left: 0px;
    margin-bottom: 20px;
    position: relative;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;

}
textarea.form-control {
    height: 67px;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 130%;
    height: 670px;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}.hero-content{
  padding-bottom: 120px !important;

}.hero-title{
  margin-top: 60px;

}.nbe-div1{
  margin-top: 30px;
}.nbe-sec1{
  margin-top: 60px;
}
.nbe-head1{
  color: #118b0f !important;
}
.nbe-para1{
  color: black; font-weight: bold;

}.nbe-btn1{
  font-size:14px
}
.nbe-head2{
  text-align: center; font-weight: 500;
}.nbe-tx1{
  overflow: hidden;
}
.pop-z{
    z-index:9999;
}
.career-img1{
  width: 600px;height: 600px;object-fit: cover;border-radius: 50px;
                  }
                  #enq:hover {
                              background-color: #0d3e21;
                            }
@media screen and (max-width:600px) {
                              .cv{
                                margin-right:170px;
                              }
                              .cv1{
                                margin-right:50px;
                              } .career-img1{
                      width: 370px;
                      object-fit: cover;
                      height: 550px;
                      padding-bottom: 100px;
                    }
                              
                            }

</style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
      <div class="bg-section"> <img src=" <?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
      <div class="container">
        <div class="hero-content" >
          <div class="row">
            <div class="col-12 col-lg-5">
              <h2 class="hero-title">NBE</h2>
             
              <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
            </div>
            <div class="col-12 nbe-div1" >
              <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                <li class=""><a href="<?= base_url('nbe')?>">NBE</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- End #page-title-->
      <!--
      ============================
      Doctor Profile Standard Section
      ============================
      -->
     
      <section class="team-single team-single-standard nbe-sec1">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6">
			              <div class="entry-bio entry-education">
                
                
                <div class="education-panels">
                  
                  
                
				   <div class="education-panel"> 
                    
                    <div class="education-body">
                      <p class="desc">National Board of Examination</p>
                      <h5  class="nbe-head1">DrNB Surgical Gastroenterology</h5>
                      <p><span  class="nbe-para1">No.of Seats : </span> 3</p>
                      <p><span class="nbe-para1">Duration :</span> 3 years</p>
                      <p><span class="nbe-para1">Eligibility :</span> MS/DNB (Gen.Surg)</p>
                    </div>
                  </div>
				                    <div class="education-panel"> 
                    
                    <div class="education-body">
                     <p class="desc">National Board of Examination</p>
                      <h5 class="nbe-head1">DrNB Medical Gastroenterology</h5>
                      <p><span class="nbe-para1">No.of Seats :</span> 2</p>
                      <p><span class="nbe-para1">Duration :</span> 3 years</p>
                      <p><span class="nbe-para1">Eligibility :</span> MD/DNB (Medicine)</p>
                    </div>
                  </div>
                  
                  <div class="module-holder">
                    <!--  Start Module Search  -->
        
                    <!--  End .module-search-->
                    <!-- Start .module-contact-->
                  </div>
                </div>
              
              <!-- 
              ============================
              Sidebar Doctors #03
              ============================
              -->
              
                <!-- Reservation-->
                
                
                <!-- End .widget-reservation-->
                <!-- Opening-hours-->
               
                <!-- End .widget-opening-hours-->
                <!-- Download-->
                
                <!-- End .widget-download-->
              </div>
              <!-- End .sidebar-->
            </div>
            <div class="col-12 col-lg-6">
             
             
           
              <div class="entry-bio entry-education">
                
                
                <div class="education-panels">
                  
                  
                
				   <div class="education-panel"> 
                    
                    <div class="education-body">
                     <p class="desc">National Board of Examination</p>
                      <h5 class="nbe-head1">Minimal Access Surgery</h5>
                      <p><span class="nbe-para1">No.of Seats :</span> 2</p>
                      <p><span class="nbe-para1">Duration :</span> 2 years</p>
                      <p><span class="nbe-para1">Eligibility :</span>  MS/DNB (Surg.)</p>
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      <p class="desc">National Board of Examination</p>
                      <h5 class="nbe-head1">Bariatric Surgery</h5>
                      <p><span class="nbe-para1">No.of Seats :</span> 1</p>
                      <p><span class="nbe-para1">Duration :</span> 2 years</p>
					  <p><span class="nbe-para1">Eligibility :</span></p>
                    </div>
                  </div>
                  <div class="module-holder">
                    <!--  Start Module Search  -->
        
                    <!--  End .module-search-->
                    <!-- Start .module-contact-->
                    <div class="col-12">
                    <button type="button" class="btn btn--primary btn-line btn-line-before btn--block"
                        id="enq" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span class="line"> <span> </span></span
                        ><span>Apply Now</span></button>
     <div class="modal fade pop-z" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
	  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa nbe-btn1">&#xf00d;</i></button>
	   <h4 class="heading-title nbe-head2">Application Form</h4>
	  
	   
          <form
                        class="contactForm"
                        method="post"
                        action="assets/php/contact.php"
                      >
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-name"
                              placeholder="Name"
                              required=""
                            />
                          </div>
						   <div class="col-12 col-md-6 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-phone"
                              placeholder="Phone"
                              required=""
                            />
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-email"
                              placeholder="Email"
                              required=""
                            />
                          </div>
						  <div class="col-12 col-md-12 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-name"
                              placeholder="Council Registration No"
                              required=""
                            />
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="select-holder">
                              <select class="form-control">
                              <option>Select Surgery</option>
                                <option value="default">DrNB Surgical Gastroenterology</option>
								<option value="default">DrNB Medical Gastroenterology</option>
								<option value="default">Minimal Access Surgery</option>
								<option value="default">Bariatric Surgery</option>
                              </select>
                              
                            </div>
                          </div>
						  
                         
                          <div class="col-12">
                            <textarea
                              class="form-control nbe-tx1"
                              name="contact-message"
                              cols="0"
                              rows="1"
                              placeholder="message"
                              required=""
                              
                            ></textarea>
                          </div>
                         <div class="form-group" >
						<label class="cv">Upload CV & Certificate </label><br>
                            <input type="file" name="form_fields[message]" id="form-field-message" class="elementor-field elementor-size-lg  elementor-upload-field cv1" required="required" aria-required="true" data-maxsize="1" data-maxsize-message="This file exceeds the maximum allowed size.">
                        </div>
                        
                          <div class="col-12">
                            <div class="contact-result"></div>
                          </div>
                        </div>
                      </form>
		
      </div>
      <div class="modal-footer">
        
      <button type="button" class="btn btn--primary btn-line btn-line-before">Submit</button>
      </div>
    </div>
  </div>
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