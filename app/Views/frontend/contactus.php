<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="map map-2">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d125328.61256623441!2d76.995464!3d10.999622000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85905a88facf7%3A0xf1d213fbbca5444c!2sGEM%20Hospital%20Coimbatore!5e0!3m2!1sen!2sus!4v1699077865108!5m2!1sen!2sus"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
      <!--
      ============================
      Contact Info Section
      ============================
      -->
      <section class="contact-info">
        <div class="container">
          <div class="row">
            <div class="contact-panel contact-panel-4">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="contact-card">
                    <div class="contact-body">
                      <h5 class="card-heading" style="font-size: 32px; font-weight: bold;">General Enquiry</h5>
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
                          <div class="col-12 col-md-6">
                            <div class="select-holder">
                              <select class="form-control">
                                <option value="default">subject</option>
                                <option value="AL">how to eat healthy ?</option>
                                <option value="AK">
                                  wearing a mask importance
                                </option>
                              </select>
                              <div class="badge">subject</div>
                            </div>
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
                           <style>
                            #enq:hover {
                              background-color: #0d3e21;
                            }
                          </style>
                          <div class="col-12">
                            <div class="contact-result"></div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- End .contact-body-->
                  </div>
                  <div class="single-service" >
                    <div class="health-plans">
                      <h5 class="entry-heading">Visit Us</h5>
                      <h2
                        class="entry-desc"
                        style="font-weight: bold; font-size: 32px"
                      >
                        Need More Information?
                      </h2>
                     
                      <div class="advantages-box">
                        
                        <ul class="advantages-list">
                          <i class="fa fa-envelope" style=" font-size: 24px; color: #0d3e21;"> Email</i>
                          <p style="font-size: 18px; margin-top: 10px;">info@geminstitute.in</p>
                        </ul>
                      </div>
                      
                    </div></div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                  <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                    <div class="bg-section">
                      <img src="assets/images/contact/2.jpg" alt="image" />
                    </div>
                    <div class="card-content">
                      <h3>How We Can Help You?</h3>
                      <div>
                          <div class="widget widget-reservation widget-reservation-2">
                  <img
                    src="assets/images/blog/sidebar/reservation.jpg"
                    alt="img"
                  />
                  <div class="widget-content">
                    <i class="flaticon-022-medical"></i>
                    <h5>emergency cases</h5>
                    <p>24 Hour Ready Call Us for Emergency</p>
                    <a href="tel:0106123214"
                      ><span class="fas fa-phone-alt"></span> 0422-4695100</a
                    ><br><a href="tel:9003932323"><span
                      class="fas fa-mobile-alt"></span>90039 32323</a>
                  </div>
                </div>
                        <p>
                          Getting an accurate diagnosis can be one of the most
                          impactful experiences that you can have.
                        </p>
                        <a
                          class="btn btn--primary btn-line btn-line-after"
                          href="#" id="call"
                          ><span>Call Us</span
                          ><span class="line"><span></span></span
                        ></a>
                        <style>
                            #call:hover{
                                background-color:#0d3e21;
                            }
                        </style>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .contact-panel-->
          </div>
        </div>
      </section>
      <section class="single-service">
        
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>