<?= $this->extend('layout/frontend/service-layout') ?>

<?= $this->section('header') ?>

<style>
    .owl-item>.slide {
        background-position-y: center !important;
    }

    .chair-bread {
        margin-top: 25px;
        margin-left: 350px;
        font-weight: bold;

    }

    .fo-si {
        font-family: sans-serif;
    }

    .jaun-img {
        width: 127px;
    }

    .jaun-div1 {
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow-x: hidden;
    }

    .heading-title {
        color: black;
    }

    .jaun-sec1 {
        margin-top: -50px;
    }

    .jaun-head2 {
        color: black !important;
        font-size: 18px !important;
    }

    .jaun-str {
        color: black !important;
    }

    .mob {
        width: 100% !important;
        margin: 20px 0px !important;
    }

    .jaun-sec2 {
        margin-top: -40px;


    }

    textarea.form-control {
        height: 90px;
    }

    .contact-form {
        margin-top: -10px;
    }

    @media screen and (max-width:600px) {
        .jaun-sec2 {
            margin-top: -20px !important;
        }
    }

    .jaun-div2 {
        margin-top: 50px;
    }

    .jaun-desc {
        text-align: left;
        margin-top: 20px;
    }

    .bts {
        margin-left: 40% !important;
    }

    .jaun-sec3 {
        margin-top: -120px;
    }

    @media screen and (max-width:600px) {
        .jaun-sec3 {
            margin-top: -40px !important;
        }
    }

    .jaun-div3 {
        margin-top: 50px;
    }

    .jaun-sec4 {
        margin-top: -120px;
    }

    @media screen and (max-width:600px) {
        .jaun-sec4 {
            margin-top: -40px;
        }

    }

    .jaun-div4 {
        margin-top: 50px;
    }

    .jaun-sec5 {
        margin-top: -120px;
    }

    @media screen and (max-width:600px) {
        .jaun-sec5 {
            margin-top: -40px;
        }
    }

    .jaun-sec6 {
        margin-top: -120px;
    }

    .jaun-head3 {
        text-align: left;
    }

    .jaun-div5 {
        top: 110px;
        z-index: 1;
    }

    .jaun-div6 {
        border: 1px solid #0c0c0c;
        border-radius: 25px;
        background-color: #118b0f4d;

    }

    .jaun-head5 {
        font-size: 20px !important;
        text-align: center;
    }

    .jaun-head6 {
        font-size: 36px;
    }

    .jaun-head7 {
        text-align: center;
    }

    .jaun-fimg1 {
        position: relative;
    }

    .bn-1 {
        width: 20% !important;
        position: absolute;
        left: 25%;
        bottom: 35%;
    }

    .jaun-sec7 {
        margin-top: -20px;
        margin-bottom: 60px;
    }

    .jaun-body {
        overflow: visible;
    }

    @media screen and (max-width:600px) {
        .jaun-sec6 {
            margin-top: -20px !important;
        }

    }

    @media screen and (max-width:900px) {
        .her-head {
            font-size: 24px !important;
        }

        .chair-bread {
            margin-left: 0px !important;
        }

        .hernia-what {
            margin-top: 50px !important;
        }

    }


    @media screen and (max-width:600px) {
        .page-title.page-title-3 .title .title-card {

            margin-top: 0px !important;



        }

        .gr {
            margin-top: 20px;
        }

        .mob {
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

        .gre {
            margin-top: 20px;
            text-align: left;

        }

        .bts {
            width: 250px;
            margin-left: 20px !important;
        }

        .gem-cont {
            margin-top: 0px !important;
        }

        .book-btn {
            margin-top: 0px !important;
        }

        .cause-para {
            margin-top: 30px !important;
        }

        .bn-1 {
            position: absolute;
            left: 40% !important;
        }



    }

    .form-control {
        height: 50px;
        line-height: 50px;
    }

    .nice-select .list {
        width: 100%;
    }

    .nice-select {
        line-height: normal;
        display: flex;
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

    img,
    svg {
        vertical-align: middle;

    }

    .desc {
        color: black;
    }

    .jaun-info1 {
        border-style: none;
    }

    .jaun-info2 {
        color: green;
    }

    .con-jaun {
        margin-left: 70px !important;
    }

    @media screen and (max-width:600px) {
        .con-jaun {
            margin-left: 0px !important;

        }

    }
</style>




<?= $this->endSection() ?>
<?= $this->section('content') ?>

<body class="jaun-body">










    <!--
      ============================
      Page Title #3 Section
      ============================
      -->
    <style>
        .slider.slider-2 .slide {
            height: 620px !important;
        }

        .bg-overlay-dark-slider:before {
            background-image: linear-gradient(180deg, #0cd748 100%, #198754 30%);
            opacity: 0.3;

        }

        .features-bar {
            padding-top: 120px !important;
        }

        p {
            margin-bottom: 8px !important;
        }
    </style>



    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pr-0 pl-0">
            <div class="slider-carousel owl-carousel carousel-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800" data-slider-id="#custom-carousel">
                <!--  Start .slide-->
                <div class="slide bg-overlay bg-overlay-dark-slider">
                    <div class="bg-section">

                        <img src=" <?= base_url('frontend/assets/images/team/grid/GallbladderStones.webp') ?>" alt="Background" />

                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h3 class="slide-headline her-head">
                                        Gallstones! Expert Treatment at GEM Hospital </h3>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="slide-desc her-para">Unwanted pebbles in your digestive system? Gallstones might be the culprit. Learn about their formation, symptoms, and treatment options available at GEM Hospital. </p>
                                    <div class="col-12 chair-bread">
                                        <ol class="breadcrumb d-flex justify-content-center fo-si ">
                                            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                            <li class=""><a href="<?= base_url('services/gall-bladder') ?>">Gallbladder</a></li>
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





    <div class="row my-5 position-relative">
        <div class="col-12 col-md-8 jaun-div1">
            <div class="container px-5">
                <div class="entry-introduction">
                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading ">
                                <p class="paragraph hernia-what">Overview</p>

                                <h6 class="heading-title">
                                    What Are Gallbladder Stones?
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;
                                Gallstones are hard, often cholesterol-based deposits that form inside your gallbladder, a small sac located beneath your liver.
                            </p>
                            <p class="desc">&bull;
                                Though usually harmless, they can sometimes cause intense pain and discomfort, requiring medical attention.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Diagnosis:</strong><br>Gem Hospital employs advanced imaging techniques for accurate diagnosis of gallbladder stones, ensuring a precise understanding of the patient's condition </p>
                            <p class="desc"> <strong class="jaun-str">Treatment:</strong><br>At Gem Hospital, expert surgeons use cutting-edge technology to perform minimally invasive surgeries, providing effective and swift treatment for gallbladder stones.</p>
                            <p class="desc"> <strong class="jaun-str">After Treatment Care:</strong><br>Post-surgery, Gem Hospital ensures meticulous aftercare, promoting a smooth recovery for patients with gallbladder stones through personalized monitoring and guidance. </p>
                            <p class="desc"> <strong class="jaun-str">Patient Support:</strong><br>Gem Hospital offers unwavering support to gallbladder stone patients, with a dedicated team providing information, assistance, and emotional support throughout their healthcare journey. </p>




                        </div>

                    </div>
                </div>


                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Gall bladder stone Symptoms</h2>
                                </div>
                            </div>
                        </div>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">


                                    <h6 class="paragraph gre jaun-head2">
                                        Most gallstones don't cause any symptoms and go unnoticed. However, when they block bile ducts, things can get uncomfortable.
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>

                                <p class="desc">&bull; Sudden, intense pain in your upper right abdomen or between your shoulder blades </p>

                                <p class="desc">&bull; Nausea and vomiting</p>
                                <div>
                                    <img src=" <?= base_url('frontend/assets/images/background/GallbladderSymptoms.png') ?>" alt=" symptoms-of-gallbladder" class="mob" />
                                </div>
                                <p class="desc">&bull; Fever and chills</p>
                                <p class="desc">&bull; Yellowing of the skin and eyes (jaundice)
                                </p>
                                <p class="desc">&bull; Dark urine and pale stools
                                </p>
                                <div class="row jaun-div2">
                                    <div class="col-12">
                                        <div class="heading">


                                            <h6 class="paragraph gre jaun-head2">
                                                Book an Appointment Now!
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>

                                            <p class="desc jaun-desc"> Click "Book Appointment Now" and let GEM Hospital's Gallbladder specialists guide you back to radiant health!
                                            </p>
                                            <div class="col-6">

                                                <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                        <span></span></span><span>Book Appointment Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec3" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Causes of Gallbladder Stones</h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2">
                                    The exact cause of gallstones remains a mystery, but several factors can contribute:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>

                            <p class="desc"> <strong class="jaun-str">High cholesterol levels: </strong><br> Excess cholesterol in bile can solidify and form stones. </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/CausesofGallbladder.png') ?>" alt="causes-of-gallbladder" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">Excess bilirubin:</strong><br>This bile pigment, produced during red blood cell breakdown, can also solidify and contribute to stone formation.</p>
                            <p class="desc"> <strong class="jaun-str">Obesity: </strong><br> Being overweight or obese increases the risk of gallstones.</p>
                            <p class="desc"> <strong class="jaun-str">Rapid weight loss: </strong><br> Losing weight quickly can increase cholesterol levels in bile, promoting stone formation.</p>
                            <p class="desc"> <strong class="jaun-str">Family history: </strong><br> Having a family history of gallstones increases your risk.</p>
                            <p class="desc"> <strong class="jaun-str">Certain medical conditions:</strong><br>Conditions like diabetes, high blood pressure, and Crohn's disease can also play a role.</p>

                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Gallbladder Dim Your Shine: Book Your Appointment at GEM Hospital Today!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>


                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec5" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Gallbladder Treatment Options At GEM</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2 ">
                                    If you experience any of these symptoms, consulting a doctor at GEM Hospital is crucial. Here, our experienced gallbladder stone specialists will diagnose your condition and recommend the best treatment approach.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>

                            </div>

                            <p class="desc"> <strong class="jaun-str">Medications: </strong> Certain medications can help dissolve cholesterol-based stones. </p>

                            <p class="desc"> <strong class="jaun-str">Laparoscopic surgery:</strong> This minimally invasive procedure involves removing the gallbladder through small incisions.</p>
                            <p class="desc"> <strong class="jaun-str">Medications: Targeting the Root Cause</strong><br>Gallbladder can be a symptom of various underlying conditions, and sometimes, a targeted medication is the key. For instance, antibiotics might be used for bacterial infections, while ursodeoxycholic acid helps bile flow more freely. Remember, these medications should only be administered under the watchful eye of a qualified doctor like our specialists at GEM Hospital.</p>
                            <p class="desc"> <strong class="jaun-str">Open surgery: </strong> In some cases, a larger incision might be necessary.
                            </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/GallbladderTreatment.png') ?>" alt="treatment-for-gallbladder" class="mob" />
                            </div>



                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Gallstones Stonewall Your Health: Schedule a Consultation at GEM Hospital Today!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Gallstones can significantly impact your quality of life. If you suspect you might have them, don't hesitate to schedule a consultation at GEM Hospital. Our dedicated team of gallbladder stone specialists is here to guide you through diagnosis, treatment, and recovery.
                                        </p>

                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Schedule Your Consultation</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec5" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Gallbladder Stones: From Laparoscopic Surgery to Prevention</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class=" gre jaun-head2">
                                    Gallbladder stones, those pesky little concretions nestled within your right abdomen, can wreak havoc on your digestion and well-being. But fear not, fellow foodie! GEM Hospital, renowned for its expertise in laparoscopic gallbladder surgery, is here to guide you through the maze of gallstones and pave the way for a pain-free future.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                                <p class=" gre jaun-head2">
                                    Gone are the days of gruesome incisions and lengthy hospital stays. Laparoscopic surgery, a minimally invasive technique championed by GEM Hospital, replaces them with just a few tiny keyhole punctures. Through these portals, our skilled surgeons maneuver miniature instruments and a camera, skillfully removing your gallbladder with utmost precision. The benefits are undeniable:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>

                            <p class="desc"> <strong class="jaun-str">Faster recovery: </strong> Back on your feet in days, not weeks. </p>

                            <p class="desc"> <strong class="jaun-str">Minimal scarring:</strong> Bid farewell to unsightly reminders.</p>
                            <p class="desc"> <strong class="jaun-str">Reduced pain: </strong><br>Laparoscopy reigns supreme in the comfort department.</p>





                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Gallstones Stonewall Your Health: Schedule a Consultation at GEM Hospital Today!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>


                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Your Appointment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">How to Prevent Gallbladder Stones</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2">
                                    While surgery effectively removes existing gallstones, understanding the contributing factors can help prevent their unwelcome return. Here are some lifestyle tips to keep your gallbladder happy.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>
                            <p class="desc"> <strong class="jaun-str">Maintain a healthy weight:</strong> Obesity is a major risk factor for gallstones. </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/preventgallbladder.png') ?>" alt="prevent-for-gallbladder" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">Embrace a balanced diet:</strong>Limit processed foods and opt for fruits, vegetables, and whole grains.</p>
                            <p class="desc"> <strong class="jaun-str">Stay hydrated:</strong>Drinking plenty of water keeps your bile flowing freely.</p>
                            <p class="desc"> <strong class="jaun-str">Exercise regularly:</strong>Physical activity promotes overall health and may help prevent gallstones.</p>

                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't let gallstones dictate your life. Schedule a consultation with GEM Hospital's gall bladder stone specialists today!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>


                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Your Appointment</span></a>
                                        </div>




                                    </div>
                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec5" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Diet for Gallbladder Stones</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class=" paragraph gre jaun-head2">
                                    Diet: Your First Line of Defense
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>

                            </div>

                            <p class="desc"> <strong class="jaun-str">Embrace Fiber: </strong>Load up on fruits, vegetables, and whole grains – these dietary heroes keep your digestive system running smoothly and reduce cholesterol levels, a major contributor to gallstones. </p>

                            <p class="desc"> <strong class="jaun-str">Go Lean on Fat: </strong> Choose lean protein sources like skinless chicken and fish, and limit fatty red meat and fried foods. Remember, excessive fat intake can trigger gallbladder contractions, leading to discomfort.</p>
                            <p class="desc"> <strong class="jaun-str">Downsize Portions: </strong><br>Smaller, more frequent meals are easier on your gallbladder than large, heavy ones. This helps regulate bile production and prevents stone formation.</p>
                            <p class="desc"> <strong class="jaun-str"> Hydration is Key: </strong><br>Staying well-hydrated keeps your bile flowing freely and prevents it from becoming concentrated, which can lead to stone formation. Aim for eight glasses of water daily.</p>










                        </div>

                </section>
                <style>
                    .jaun-sec8 {
                        margin-top: -60px;
                    }
                </style>

                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Natural Remedies for Gallbladder Stones</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class=" paragraph gre jaun-head2">
                                    Finding Solace in Nature
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>

                            </div>

                            <p class="desc"> <strong class="jaun-str">Herbal Helpers: </strong>Turmeric, dandelion root, and milk thistle are natural anti-inflammatories that can ease gallbladder pain and support bile flow. Consult your doctor before trying any herbs, as they may interact with medications.</p>

                            <p class="desc"> <strong class="jaun-str">Apple Cider Vinegar: </strong> This tart elixir is believed to stimulate bile production and break down gallstones. Dilute a tablespoon in a glass of water and sip before meals.</p>
                            <p class="desc"> <strong class="jaun-str">Warm Compresses: </strong><br>Applying a warm compress to your abdomen can help relax muscles and alleviate pain. Remember, avoid excessive heat, as it can worsen inflammation.</p>











                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Home Remedies for Gall Bladder Stone Pain</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class=" paragraph gre jaun-head2">
                                    for Pain Relief:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>

                            </div>

                            <p class="desc"> <strong class="jaun-str">Ginger Tea:</strong>Ginger's anti-inflammatory properties can soothe gallbladder pain and nausea. Steep a teaspoon of grated ginger in hot water for 10 minutes, strain, and sip. </p>

                            <p class="desc"> <strong class="jaun-str">Peppermint Oil: </strong> Dilute a few drops of peppermint oil in a carrier oil like coconut and massage it gently onto your abdomen. Peppermint oil relaxes muscles and eases discomfort.</p>
                            <p class="desc"> <strong class="jaun-str">Stress Management: </strong><br>Stress can exacerbate gallbladder symptoms. Practice yoga, meditation, or deep breathing exercises to manage stress and keep your mind and body calm.</p>
                            <p class="desc"> <strong class="jaun-str"> Remember: </strong><br>While these tips can offer relief and even prevent future gallstones, they are not a substitute for professional medical advice.</p>










                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">When to See a Specialist at GEM Hospital</h2>
                                </div>
                            </div>
                        </div>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">


                                <p class="desc">&bull; Severe or persistent pain </p>

                                <p class="desc">&bull; Fever or chills</p>

                                <p class="desc">&bull; Jaundice (yellowing of the skin and eyes)</p>
                                <p class="desc">&bull; Vomiting or nausea
                                </p>
                                <p class="desc">&bull; Sudden worsening of symptoms
                                </p>
                                <div class="row jaun-div2">
                                    <div class="col-12">
                                        <div class="heading">


                                            <h6 class="paragraph gre jaun-head2">
                                                Click here to book your appointment and take control of your gallbladder health!
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>

                                            <p class="desc jaun-desc"> Don't wait until the pain becomes unbearable, schedule a consultation with a gallbladder stone specialist at GEM Hospital today. Our experienced team is dedicated to providing comprehensive diagnosis, treatment options, and personalized care to help you find lasting relief from gallstones and get back to living your life to the fullest.
                                            </p>
                                            <div class="col-6">

                                                <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                        <span></span></span><span>Book Appointment Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                </section>









                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
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


                            <p class="desc"> <strong class="jaun-str">Expert diagnosis:</strong> Our experienced doctors utilize advanced tests to pinpoint the exact cause of your Gallbladder, ensuring the right treatment plan.</p>

                            <p class="desc"> <strong class="jaun-str">Effective treatment:</strong> We tailor treatment options to your specific needs, whether it's medication, phototherapy, or other innovative methods.</p>
                            <p class="desc"> <strong class="jaun-str">Compassionate care:</strong> We understand the emotional toll of Gallbladder. Our friendly staff provides unwavering support and guidance throughout your journey.</p>

                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Book an Consultation Now!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Ready to take control of your health? Schedule your consultation today!<br>
                                            Click the "Schedule Your Consultation" button below and let our Gallbladder specialists help you conquer this condition and reclaim your vibrant life.<br>Don't wait, Gallbladder can worsen. Act now and take charge of your health.

                                        </p>

                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Schedule your consultation</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Contact Informations</h2>

                            </div>
                        </div>
                    </div>


                    <!-- End .row-->
                    <div class="row con-jaun">
                        <div class="card col-lg-6 col-md-3 jaun-info1">
                            <div class="card-body">
                                <h4 class="card-title">Chennai</h4>
                                <h6 class="card-text"><span class="jaun-info2">Ph.No :</span> +91 72006 05493</h6>
                                <a href="tel:7200605493" class="btn btn--primary">Call Us</a>
                            </div>
                        </div>
                        <div class="card col-lg-6 col-md-3 jaun-info1">
                            <div class="card-body">
                                <h4 class="card-title">Coimbatore</h4>
                                <h6 class="card-text"><span class="jaun-info2">Ph.No :</span> +91 91500 92609</h6>
                                <a href="tel:9150092609" class="btn btn--primary">Call Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="row con-jaun">

                        <div class="card col-lg-6 col-md-3 jaun-info1">
                            <div class="card-body">
                                <h4 class="card-title">Tiruppur</h4>
                                <h6 class="card-text"><span class="jaun-info2">Ph.No :</span> +91 89258 47515</h6>
                                <a href="tel:8925847515" class="btn btn--primary">Call Us</a>
                            </div>
                        </div>
                        <div class="card col-lg-6 col-md-3 jaun-info1">
                            <div class="card-body">
                                <h4 class="card-title">Pondicherry</h4>
                                <h6 class="card-text"><span class="jaun-info2">Ph.No :</span> +91 72006 05493</h6>
                                <a href="tel:7200605493" class="btn btn--primary">Call Us</a>
                            </div>
                        </div>
                    </div>


                </section>












            </div>

        </div>
        <style>
            @media screen and (max-width:600px) {
                .box-width {
                    margin-left: 15px;
                    width: 90% !important;
                    margin-top: 30px;
                }

            }

            .box-width {
                width: 28%;

            }
        </style>
        <div class="col-12 col-md-4 position-relative pe-0 pe-lg-5 box-width">

            <div class="sticky-top py-3 px-3 px-md-0 jaun-div5">
                <?= $this->include('frontend/Forms/service-form') ?>
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

                                    <h2 class="heading-title">Loved by our Patients</h2>
                                </div>
                            </div>
                        </div>

                        <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                            <div class="col-12 col-lg-8">

                                <div class="about-img"><img class="img-fluid jaun-fimg1" src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat3.webp') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />

                                    </a></div>

                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat2.webp') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                    </a></div>
                            </div>
                            <div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat1.webp') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                        </a></div>
                                </div>
                                <!-- End .entry-content-->

                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultpat2.webp') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                    </a></div>
                            </div>
                        </div>

                        <!-- End .departments-action-->
                    </div>
                    <!-- End .container-->
                </section>




                <!---Our Experts---->

                <!---Know More about Esophago Gastric Surgeries---->
                <section class="blog blog-grid blog-grid-3 jaun-sec7" id="blog-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="heading heading-7 text-center">


                                    <h6 class="heading-title jaun-head6">Experts
                                        Speech About Gallbladder</h6>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- End .row-->
                        <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200" id="more">
                            <div class="col-12 col-lg-8">

                                <div class="about-img"><img class="img-fluid jaun-fimg1" src=" <?= base_url('frontend/assets/images/blog/grid/sddefaultne.jpg') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />

                                    </a></div>

                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.jpg') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                    </a></div>
                            </div>
                            <div>
                                <div class="col-12 col-lg-8">
                                    <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.webp') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                        </a></div>
                                </div>
                                <!-- End .entry-content-->

                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="about-img"><img class="img-fluid" src=" <?= base_url('frontend/assets/images/blog/grid/sddefault.jpg') ?>" alt="about Image" /><br><a class="" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <img src=" <?= base_url('frontend/assets/images/favicon/playbutton.png') ?>" class="bn-1" />
                                    </a></div>
                            </div>
                        </div>
                        <!-- End .carousel-->
                    </div>
                </section>

                <div class="entry-infos tips-info heading">

                    <h1 class="heading-title jaun-head7">Frequently Ask
                        Questions</h1>
                    <div class="accordion accordion-3" id="accordion03">
                        <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">1. How Long is Gallbladder Recovery?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Recovery time varies based on the procedure. Laparoscopic surgery may allow quicker recovery, while open surgery might require a longer recovery period. Follow your surgeon's guidance.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">2. Hospital Stay for Gallbladder Surgery?</a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Hospital stay depends on the surgical approach and individual factors. Laparoscopic procedures often involve shorter stays, while open surgery may require a longer recovery period.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  collapsed" data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">3. Is Ignoring Gallbladder Symptoms Dangerous?</a></div>
                  <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Ignoring gallbladder symptoms, such as pain or discomfort after meals, can lead to complications like gallstones. Seek prompt medical attention for accurate diagnosis and appropriate treatment.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-4">4. Are there home remedies for managing Gallbladder symptoms?</a></div>
                  <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">While medical consultation is crucial, dietary adjustments like reducing fatty foods may help manage gallbladder symptoms. Consult your healthcare provider for personalized advice.</div>
                  </div>
                </div>
				        <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-5">5. When to Seek Medical Attention for Gallbladder Issues?</a></div>
                  <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">If you experience severe abdominal pain, jaundice, or persistent vomiting, seek immediate medical attention. These symptoms may indicate gallbladder problems requiring urgent evaluation and treatment.</div>
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