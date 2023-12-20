<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
@media screen and (max-width:600px) {

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100% ! important;
    height: 750px ! important;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
.contain {
    padding: 0rem;
    font-family: sans-serif;
    border-radius: 0.3rem;
    cursor: pointer;
    margin-top: 0rem;

}
.career-img1{
    width: 100% !important;
    object-fit: cover !important;
    height: 100% !important;
    padding-bottom: 100px;
  }
  .cv{
  margin-right:170px;
 } .cv1{
 margin-right:50px;
}.divv{
   margin-top:20px;
  display:flex;
  flex-direction:row;
}
.v1{
   position: relative !important;
  bottom:10px !important;
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
    width: 613px;
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
.pop-z{
    z-index:9999;
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
}
#email{
 width: 640px;

}.career-img1{
  width: 600px;height: 600px;object-fit: cover;border-radius: 50px;
}
.carr-head1{
  color: #0d3e21 !important;
}.carr-head2{
  color: #118b0f !important;
}.carr-span1{
  color: black; font-weight: bold;
}
.carr-btn1{
  font-size: 14px;
}.carr-head3{
  text-align: center; font-weight: 500;
}
.carr-tx1{
  overflow: hidden;
}#enq:hover {
  background-color: #0d3e21;
}






</style>






<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="title">
                
              </div>
              <!-- End .title -->
            </div>
            <!-- End .col-lg-8-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- End #page-title-->
      <!--
      ============================
      Doctor Profile Standard Section
      ============================
      -->
     
      <section class="team-single team-single-standard">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6">
              <!-- 
              ============================
              Sidebar Doctors #03
              ============================
              -->
              <div class="sidebar sidebar-doctors sidebar-doctors-3">
                
                <!-- Reservation-->
                <div >
                  <img  src=" <?= base_url('frontend/assets/images/careers/career.png') ?>" class="career-img1" />
                </div>
                
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
                <h5 class="entry-heading"  class="carr-head1">We are Hiring !!!</h5>
                
                <div class="education-panels">
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 class="carr-head2">Staff Nurse / Nursing Assistant</h5>
                      <p><span  class="carr-span1">Qualification :</span> B.Sc Nursing / DGNM / ANM</p>
                      <p><span  class="carr-span1">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply</p>
                      
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 class="carr-head2">Pharmacy</h5>
                      <p><span class="carr-span1">Qualification :</span> B.Pharm / D.Pharm</p>
                      <p><span class="carr-span1">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply</p>
                      
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                     
                      <h5 class="carr-head2">Doctor Secretary</h5>
                      <p><span class="carr-span1">Qualification :</span> Any UG / PG Degree</p>
                      <p><span class="carr-span1">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply, Must have Computer Proficiency</p>
                      <p><span class="carr-span1">Gender :</span> Female</p>
                    </div>
                  </div>
                  <div class="education-panel"> 
                    
                    <div class="education-body">
                      
                      <h5 class="carr-head2">Academic Co-ordinator</h5>
                      <p><span class="carr-span1">Qualification :</span> Any UG / PG Degree</p>
                      <p><span class="carr-span1">Experience :</span> 0-3 Year Experience, Freshers Also Can Apply, Must have Computer Proficiency</p><p><span  class="carr-span1">Gender :</span> Female</p>
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
	  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i  class="fa carr-btn1">&#xf00d;</i></button>
	   <h4 class="heading-title carr-head3" >Apply for this position</h4>
	  
	   
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
                              required=""></input>
                           
                          </div>
						   <div class="col-12 col-md-6 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-phone"
                              placeholder="Phone"
                              required=""></input>
                           
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" id="email">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-email"
                              placeholder="Email"
                              required=""></input>
                            
                          </div>
						  
                          <div class="col-12">
                            <textarea
                              class="form-control carr-tx1"
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

						 <div class="custom-control custom-radio custom-control-inline divv">
						 <input type="checkbox" class="v1">
                          <span class="checkmark"></span>
                          <label class="contain">By using this form you agree with the storage and handling of your data by this website.</label>
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