single-service<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>

@media screen and (max-width: 600.98px) {
.contact-info {
    text-align: center;
    align-items: center;
}
.gmaps {
    text-align: center;
  align-items: center;
  padding: 0;
  margin: 0;
}
.health-plans{
   text-align: center;
   align-items: center;

 }
 .single-service .health-plans{
 
        padding-left: 0px;
        padding-right: 0px;
      align-items: center;
    text-align: center;
  
    
}
.single-service .health-plans .email {
   
    padding-left: 0px;
    padding-right: 0px;
   align-items: center;
    text-align: center;
  
    
} 

          .fas{
            margin-left:30%;
          }
          .email1{
            right: 25%;

          }
          .email2{
          right: 20%;
         
          }.phone1{
            left: -5%;
          }.phone2{
            left: 0%;
          }
          .maps1{
            margin-left:-100px;
          }
          
          
        

}

	

	#table {
  border-collapse: collapse;
  border: 1px solid black;
  height: 98.5%;
  width: 100%;
  cellspacing: 10px;
}

th, td{
text-align: center;
font-size: 18px;
padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;

}
#center{
  background-color: var(--global--color-primary);
  color: #fff;
}
#eye{
    font-family: var(--global--font-heading);
   color: var(--global--color-heading);
    font-weight: 500;
    font-size: 40px;
    line-height: 55px;
    margin-bottom: 19px;
    text-transform: capitalize;
	padding-bottom: 10px;
	padding-top: 48px;
  background: none;
	padding-left: 105px
}
.about {
  padding-top: 116px;
  padding-bottom: 10px;
  overflow: visible;
}.hero-content{
  padding-bottom: 75px !important;

}.contact-div1{
  margin-top:50px;

}.contact-card{
  padding-top:5px
}.card-heading{
  font-size: 32px; font-weight: 500;
} #enq:hover {
   background-color: #0d3e21;
}.contact-th1{
  background-color: #e6f8fb !important;
}.contact-head2{
  font-weight: 500;
}.contact-mail1{
  text-transform:lowercase;
}
	</style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>


<section class="hero hero-5 bg-overlay bg-overlay-dark">
        <div class="bg-section"> <img src=" <?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background"/></div>
        <div class="container"> 
          <div class="hero-content"> 
            <div class="row"> 
              <div class="col-12 col-lg-5 contact-div1" >
                <h2 class="hero-title" >Contact us</h2>
                <p class="hero-desc">Getting an accurate diagnosis can be one of the most impactful experiences that you can have.</p>
               <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
              </div>
              <div class="col-12"> 
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                  <li class=""><a href="<?= base_url('contactus') ?>">Contact us</a></li>
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
                    <div class="contact-card" >
                    <div class="contact-body">
                      <h5 class="card-heading" >General Enquiry</h5>
                      <p class="card-desc">
                        Please feel welcome to contact our friendly reception
                        staff with any general or medical enquiry
                      </p>
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
                              name="contact-email"
                              placeholder="Email"
                              required=""
                            />
                          </div>
                          <div class="col-12 col-md-6 col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              name="contact-subject"
                              placeholder="Subject"
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
                          <div class="col-12">
                            <textarea
                              class="form-control"
                              name="contact-message"
                              cols="30"
                              rows="2"
                              placeholder="message"
                              required=""
                            ></textarea>
                          </div>
                          <div class="col-12">
                            <button id="enq"
                              class="btn btn--primary btn-line btn-line-before btn--block"
                            >
                              <span class="line"> <span> </span></span
                              ><span>submit request</span>
                            </button>
                          </div>
                          
                          <div class="col-12">
                            <div class="contact-result"></div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- End .contact-body-->
                  </div>
				  
            </div>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
              <table class="table table-bordered" id="table">
  <thead>
    <tr id="center">
      <th scope="col">S.No</th>
      <th scope="col">Centers</th>
      <th scope="col">Contact No</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Coimbatore</td>
      <td>9003932323<br>04224695100</td>
      
    </tr>
    <tr>
      <th scope="row"  class="contact-th1">2</th>
      <td  class="contact-th1">Chennai-Perungudi</td>
      <td  class="contact-th1">9500200600<br>04461666666</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Chennai-Aminjikarai</td>
    <td>7200605493</td>
      
    </tr>
  <tr>
      <th scope="row"  class="contact-th1">4</th>
      <td  class="contact-th1">Tiruppur</td>
    <td class="contact-th1">9150092609<br>4214325678</td>
      
    </tr>
  <tr>
      <th scope="row">5</th>
      <td>Pondicherry</td>
    <td>8608304638<br>8122510173</td>
      
    </tr>
  <tr>
      <th scope="row"  class="contact-th1">6</th>
      <td class="contact-th1">Erode</td>
    <td class="contact-th1">0424 403 1355</td>
      
    </tr>
  <tr>
      <th scope="row">7</th>
      <td>Thrissur</td>
    <td>9633222500<br>4872972472</td>
      
    </tr>
  </tbody>
</table>
 
            </div>
		
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>

     
	  
	  
    <section class="contact-info maps1" id="eye" >
        <div class="container">
            <div class="row">
               <div class="col-12 col-lg-6 ">
			 <div class="right_side_content contact_list">
                                    <h4  class="contact-head2"><img   src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Coimbatore</h4>
                                    
                                    <p>Address: 45, Pankaja Mills Rd, Palaniappa Nagar,<br> Sowripalayam Pirivu, Ramanathapuram, Coimbatore, Tamil Nadu 641045
                                        <br>Helpline:<a href="#">0422 469 5100</a>
                                        <br>Phone:<a href="tel:9003932323">+91 90039 32323</a>
                                        <br>Email:<a href="#"  class="contact-mail1">info@geminstitude.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.076597352567!2d76.9954638!3d10.9996215!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85905a88facf7%3A0xf1d213fbbca5444c!2sGEM%20Hospital%20Coimbatore!5e0!3m2!1sen!2sin!4v1701423112262!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
			 <div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img   src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Chennai-Perungudi</h4>
                                    
                                    <p>Address:MDR452, Gandhi Nagar,<br> Thiruvengadam Nagar, Perungudi, Chennai, Tamil Nadu 600096.
                                        <br>Helpline:<a href="#">044 6166 6666</a>
                                        <br>Phone:<a href="tel:9500200600">+91 95002 00600</a>
                                        <br>Email:<a href="#"  class="contact-mail1">info@geminstitude.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7776.085075765543!2d80.2428953!3d12.9691299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d6d1dcd83ab%3A0xaf9da9e27a4b9df3!2sGEM%20HOSPITAL%2C%20Thiruvengadam%20Nagar%2C%20Perungudi%2C%20Chennai%2C%20Tamil%20Nadu%20600096!5e0!3m2!1sen!2sin!4v1701423264823!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
				<div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img   src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Chennai-Aminjikarai</h4>
                                    
                                    <p>Address:632, Poonamallee High Rd,<br> Ayyavoo Colony, Aminjikarai, Chennai, Tamil Nadu 600029
                                        <br>Helpline:<a href=""></a>
                                        <br>Phone:<a href="tel:72006 05493">+91 72006 05493</a>
                                        <br>Email:<a href="#"  class="contact-mail1">info@geminstitude.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15545.574742528588!2d80.2203121!3d13.0742177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267448a093271%3A0x105b1952d2200a82!2sGEM%20Hospital!5e0!3m2!1sen!2sin!4v1701423327216!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
			<div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img   src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Tiruppur</h4>
                                    
                                    <p>Address:315/1 A, 1 B, TKT Mills Bus Stop,Palladam Main Road Chinnakarai,<br> Veerapandi Ring Rd, PO, Tiruppur, Tamil Nadu 641604
                                        <br>Helpline:<a href="#">421 432 5678</a>
                                        <br>Phone:<a href="tel:9150092609">+91 91500 92609</a>
                                        <br>Email:<a href="#"  class="contact-mail1">info@geminstitude.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15662.960602105564!2d77.3325451!3d11.0580983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba90655b4bb6a83%3A0x20e3d7e21038494d!2sGem%20Hospital%20Tiruppur!5e0!3m2!1sen!2sin!4v1702040334178!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
			<div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img  src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Pondicherry</h4>
                                   
                                    <p>Address:1, Lawspet Main Road,<br> Pakkamudayanpet, Saram, Puducherry, 605008
                                        <br>Helpline:<a href="#">+91 81225 10173</a>
                                        <br>Phone:<a href="tel:8608204638">+91 86082 04638</a>
                                        <br>Email:<a href="#"  class="contact-mail1">pondi@geminstitute.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15613.793596259788!2d79.8091577!3d11.9434257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a536150406b368f%3A0xac1b7e416698201a!2sGEM%20Hospital%20-%20Puducherry!5e0!3m2!1sen!2sin!4v1701423417116!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
			<div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img   src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Erode</h4>
                                   
                                    <p>Address:5, Street, Muthu Karuppan St,<br> Gandhi Nagar, Erode, Tamil Nadu 638009
                                        <br>Helpline:<a href="#">0424 403 1355</a>
                                        <br>Phone:<a href="#"></a>
                                        <br>Email:<a href="#"  class="contact-mail1">info@geminstitude.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15647.815465159843!2d77.7155545!3d11.3380804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f276fffffff%3A0x48d37d9008ce4549!2sGEM%20Hospital%20Erode!5e0!3m2!1sen!2sin!4v1701423586518!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
			<br>
			<div class="row">
               <div class="col-12 col-lg-6">
			 <div class="right_side_content contact_list">
                                    <h4 class="contact-head2"><img  src=" <?= base_url('frontend/assets/images/about/location.png') ?>"/>&nbsp;&nbsp;Thrissur</h4>
                                    
                                    <p>Address:GEM Hospital and Research Centre
Ollukkara Village,<br> Paravattani, Thrissur, Kerala, India.
                                        <br>Helpline:<a href="tel:+91 487 2972472">487 2972472</a>
                                        <br>Phone:<a href="tel:9633222500">+91 96332 22500</a>
                                        <br>Email:<a href="#" class="contact-mail1">gemthrissur@geminstitute.in</a></p>
                                </div>
			 </div>

               
                <div class="col-md-6 col-xs-12 gmaps">
                    <div class="right_side_content contact_list">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15690.995201983782!2d76.2369053!3d10.5204407!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7efbe8b53aa93%3A0xd42a1a69b2f8c29b!2sGEM%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1702040498472!5m2!1sen!2sin" width="80%" height="224" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                </div>
                

            </div>
        </div>
    </section>
      
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>