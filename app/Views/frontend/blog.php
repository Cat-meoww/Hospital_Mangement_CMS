<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
      .owl-item > .slide {
        background-position-y: center !important;
      }
    </style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="slider slider-4" id="slider-4">
        <div class="container-fluid pr-0 pl-0">
          <div
            class="slider-carousel owl-carousel carousel-navs carousel-dots"
            data-slide="1"
            data-slide-rs="1"
            data-autoplay="true"
            data-nav="true"
            data-dots="true"
            data-space="0"
            data-loop="true"
            data-speed="800"
            data-slider-id="#custom-carousel"
          >
            <!--  Start .slide-->
            <div class="slide bg-overlay bg-overlay-dark-slider">
              <div class="bg-section">
                <img  src="<?= base_url('frontend/assets/images/sliders/banner.jpg') ?>" alt="Background" />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="slide-content">
                      <h1 class="slide-headline" style="color: white;">Is Gastroesophageal reflux a disease?</h1>
                      <p class="slide-desc">
                        அறிந்துகொள்ளுங்கள் ஆரோக்கிய சக்கரத்தை ஆரோக்கிய சக்கரத்தின் அம்சங்கள் அறிவுசார்ந்தவை சமூகம் சார்ந்தவை உடல் சார்ந்தவை ஆன்மிகம் | தியானம் சார்ந்தவை தொழில் சார்ந்தவை உணர்வுகள் சார்ந்தவை சுற்றுச்சூழல் சார்ந்தவை ஆரோக்கிய சக்கரம் ஏன் முக்கியம்? இது குழந்தையுடன் இணைக்கப்பட்டுள்ளது இது குடும்பத்துடன்
                      </p>
                      <div class="slide-action">
                        <a
                          class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1"
                          href="blog-single-sidebar.html"
                        >
                          <span>Diet and Nutrition</span
                          ><span class="line"> <span></span></span
                        ></a>
                      </div>
                    </div>
                    <!-- End .slide-content -->
                  </div>
                </div>
                <style>
                  .home-btn1:hover {
                    background-color: #0d3e21;
                  }
                </style>
                <!--  End .row-->
              </div>
            </div>
            <div class="slide bg-overlay bg-overlay-dark-slider">
              <div class="bg-section">
                <img
                   src="<?= base_url('frontend/assets/images/sliders/acid-reflux.jpg') ?>"
                  alt="Background"
                />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="slide-content">
                      <h1 class="slide-headline">Is Gastroesophageal reflux a disease?</h1>
                      <p class="slide-desc">
                        இரைப்பை உணவுக்குழாய் ரிஃப்ளக்ஸ் இது ஒரு நோயா? உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து சப்பாத்தி போன்ற உணவுக்கு மாறுவது… ரிஃப்ளக்ஸ்
                      </p>
                      <div class="slide-action">
                        <a
                          class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1"
                          href="blog-single-sidebar.html"
                        >
                          <span>Medical Gastro</span
                          ><span class="line"> <span></span></span
                        ></a>
                      </div>
                    </div>
                    <!-- End .slide-content -->
                  </div>
                </div>
                <style>
                  .home-btn1:hover {
                    background-color: #0d3e21;
                  }
                </style>
                <!--  End .row-->
              </div>
            </div>
            <div class="slide bg-overlay bg-overlay-dark-slider">
              <div class="bg-section">
                <img  src="<?= base_url('frontend/assets/images/sliders/diet.jpg') ?>" alt="Background" />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="slide-content">
                      <h1 class="slide-headline">Diet Fails</h1>
                      <p class="slide-desc">
                        டயட் பல தோல்விகள் சில பாடங்கள்! உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து சப்பாத்தி போன்ற உணவுக்கு மாறுவது… டயட் ஃபெயில்டு
                      </p>
                      <div class="slide-action">
                        <a
                          class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1"
                          href="blog-single-sidebar.html"
                        >
                          <span>Obesity</span
                          ><span class="line"> <span></span></span
                        ></a>
                      </div>
                    </div>
                    <!-- End .slide-content -->
                  </div>
                </div>
                <style>
                  .home-btn1:hover {
                    background-color: #0d3e21;
                  }
                </style>
                <!--  End .row-->
              </div>
            </div>
            <div class="slide bg-overlay bg-overlay-dark-slider">
              <div class="bg-section">
                <img
                   src="<?= base_url('frontend/assets/images/sliders/high-fiber.webp') ?>"
                  alt="Background"
                />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="slide-content">
                      <h1 class="slide-headline">Uses and Benifits of fibrerich Foods</h1>
                      <p class="slide-desc">
                        Uses and Benefits of Fibre-rich food நார்ச்சத்து என்றால் என்ன? நார்ச்சத்து என்பது நமது உடலால் ஜீரணிக்க முடியாத கார்போஹைட்ரேட் அல்லது ஸ்டார்ச் ஆகும்.உங்கள் செரிமான மண்டலத்தின் கழிவுகளை வெளியேற்றும் கருவியாக செயல்படுகிறது.தாவர உணவுகளில் மட்டுமே அதிக அளவு நார்ச்சத்து
                      </p>
                      <div class="slide-action">
                        <a
                          class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1"
                          href="blog-single-sidebar.html"
                        >
                          <span>Diet and Nutrition</span
                          ><span class="line"> <span></span></span
                        ></a>
                      </div>
                    </div>
                    <!-- End .slide-content -->
                  </div>
                </div>
                <style>
                  .home-btn1:hover {
                    background-color: #0d3e21;
                  }
                </style>
                <!--  End .row-->
              </div>
            </div>

            <!--  End .slide-->
            <!--  Start .slide-->
            <div class="slide bg-overlay bg-overlay-dark-slider">
              <div class="bg-section">
                <img
                   src="<?= base_url('frontend/assets/images/sliders/bg_memphis_1.png') ?>"
                  alt="Background"
                />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="slide-content">
                      <h1 class="slide-headline">
                        we accept all insurance medical plans
                      </h1>
                      <p class="slide-desc">
                        The health and well-being of our patients and their
                        health care team will always be our priority, so we
                        follow the best practices.
                      </p>
                      <div class="slide-action">
                        <a
                          class="btn btn--primary btn-line btn-line-after btn-line-inversed home-btn1"
                          href="blog-single-sidebar.html"
                        >
                          <span>uncatagorized</span
                          ><span class="line"> <span></span></span></a
                        >
                      </div>
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
      Blog Section
      ============================
      
      -->
      <section class="blog blog-grid" id="blog">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                  <div class="entry-date">
                    
                  </div>
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                      src="<?= base_url('frontend/assets/images/sliders/banner.jpg') ?>"
                      alt=""
                      style="height: 210px; width: 500px;"
                      
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                  
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >Is Gastroesophageal reflux a disease?</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p style="color: #118b0f;">
                      அறிந்துகொள்ளுங்கள் ஆரோக்கிய சக்கரத்தை ஆரோக்கிய சக்கரத்தின் அம்சங்கள் அறிவுசார்ந்தவை சமூகம் சார்ந்தவை உடல் சார்ந்தவை ஆன்மிகம் | தியானம் சார்ந்தவை தொழில் சார்ந்தவை உணர்வுகள் சார்ந்தவை சுற்றுச்சூழல் சார்ந்தவை ஆரோக்கிய சக்கரம் ஏன்
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                 
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                       src="<?= base_url('frontend/assets/images/sliders/acid-reflux.jpg') ?>"
                      alt=""
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                  
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >Is Gastroesophageal reflux a disease?</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p style="color: #118b0f;">
                      இரைப்பை உணவுக்குழாய் ரிஃப்ளக்ஸ் இது ஒரு நோயா? உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                  
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                      src="<?= base_url('frontend/assets/images/sliders/diet.jpg') ?>"
                      alt=""
                      style="height: 210px; width: 500px;"
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                  
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >Diet fails</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p style="color: #118b0f;">
                      டயட் பல தோல்விகள் சில பாடங்கள்! உடல் எடைக்குறைப்பு என்றவுடன் நம் நினைவுக்கு வருவது டயட்டிங். பொதுவாக டயட்டிங் என்றால் சாப்பிடும் அளவைக் குறைப்பது, எண்ணெய்ப் பலகாரங்களைத் தவிர்ப்பது, அரிசி உணவுகளைத் தவிர்த்து சப்பாத்தி போன்ற உணவுக்கு மாறுவது… டயட் ஃபெயில்டு
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                  
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                     src="<?= base_url('frontend/assets/images/sliders/high-fiber.webp') ?>"
                      alt=""
                      style="height: 210px; width: 500px;"
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                 
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >uses and benifits of fiber rich foods</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p style="color: #118b0f;">
                      Uses and Benefits of Fibre-rich food நார்ச்சத்து என்றால் என்ன? நார்ச்சத்து என்பது நமது உடலால் ஜீரணிக்க முடியாத கார்போஹைட்ரேட் அல்லது ஸ்டார்ச் ஆகும். உங்கள் செரிமான மண்டலத்தின் கழிவுகளை வெளியேற்றும் கருவியாக
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                  <div class="entry-date">
                    <div class="entry-content">
                      <span class="day">20</span><span class="month">jan</span
                      ><span class="year">2021</span>
                    </div>
                  </div>
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                       src="<?= base_url('frontend/assets/images/blog/grid/5.jpg') ?>"
                      alt="Why Do People Get Kidney Stones in the Summer?"
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                  <div class="entry-meta">
                    <div class="entry-category">
                      <a href="javascript:void(0)">infectious</a
                      ><a href="javascript:void(0)">tips</a>
                    </div>
                    <div class="divider"></div>
                    <div class="entry-author">
                      <p>Janette Baker</p>
                    </div>
                  </div>
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >Why Do People Get Kidney Stones in the Summer?</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p>
                      Summer may have just officially started, but kidney stone
                      season began a couple of weeks ago. Doctors see an
                      increase in kidney stone cases when...
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="blog-entry" data-hover="">
                <div class="entry-img">
                  <div class="entry-date">
                    <div class="entry-content">
                      <span class="day">20</span><span class="month">jan</span
                      ><span class="year">2021</span>
                    </div>
                  </div>
                  <!-- End .entry-date--><a href="blog-single-sidebar.html"
                    ><img
                       src="<?= base_url('frontend/assets/images/blog/grid/6.jpg') ?>"
                      alt="Do Any Drugs Really Work to Treat Coronavirus?"
                  /></a>
                </div>
                <!-- End .entry-img-->
                <div class="entry-content">
                  <div class="entry-meta">
                    <div class="entry-category">
                      <a href="javascript:void(0)">lifestyle</a
                      ><a href="javascript:void(0)">nutrition</a>
                    </div>
                    <div class="divider"></div>
                    <div class="entry-author">
                      <p>Marie Black</p>
                    </div>
                  </div>
                  <div class="entry-title">
                    <h4>
                      <a href="blog-single-sidebar.html"
                        >Do Any Drugs Really Work to Treat Coronavirus?</a
                      >
                    </h4>
                  </div>
                  <div class="entry-bio">
                    <p>
                      While most people who get COVID-19 are able to recover at
                      home, the rush is on to find a treatment that’s safe and
                      effective against...
                    </p>
                  </div>
                  <div class="entry-more">
                    <a
                      class="btn btn--white btn-line btn-line-before btn-line-inversed"
                      href="blog-single-sidebar.html"
                    >
                      <div class="line"><span> </span></div>
                      <span>read more</span></a
                    >
                  </div>
                </div>
              </div>
              <!-- End .entry-content-->
            </div>
          </div>
          <!-- End .row-->
          <div class="row">
            <div class="col-12 clearfix text--center">
              <ul class="pagination">
                <li><a class="current" href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li>
                  <a href="#" aria-label="Next"
                    ><i class="icon-arrow-right"></i
                  ></a>
                </li>
              </ul>
            </div>
            <!-- End .col-lg-12-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
 


<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>