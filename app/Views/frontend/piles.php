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
        margin-top: -80px;
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
            margin-top: -20px;
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

                        <img src=" <?= base_url('frontend/assets/images/team/grid/piles-treatment.webp') ?>" alt="Background" />

                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h2 class="slide-headline her-head">
                                        GEM Hospital: Your Trusted Partner for Lasting Piles Relief
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="slide-desc her-para">Say goodbye to discomfort and rediscover confidence with advanced treatments and compassionate care. </p>
                                    <div class="col-12 chair-bread">
                                        <ol class="breadcrumb d-flex justify-content-center fo-si ">
                                            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                            <li class=""><a href="<?= base_url('services/piles') ?>">Piles</a></li>
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
                                    What Is Haemorrhoids (Piles)?
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;
                                Piles, also known as hemorrhoids, are swollen and inflamed veins around the anus or lower rectum.
                            </p>
                            <p class="desc">&bull;
                                While not always a cause for alarm, they can significantly impact your daily life, causing discomfort, pain, and even bleeding. Understanding the symptoms and causes of piles is the first step towards finding relief.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Diagnosis:</strong><br>At Gem Hospital, precise diagnosis for piles ensures accurate treatment planning, fostering hope for a pain-free future.</p>
                            <p class="desc"> <strong class="jaun-str">Treatment:</strong><br>Gem Hospital provides advanced treatments for piles, combining expertise and innovation for effective and lasting relief.</p>
                            <p class="desc"> <strong class="jaun-str">After Treatment Care:</strong><br>Post-piles treatment at Gem Hospital includes personalized care, ensuring a smooth recovery and improved quality of life.</p>
                            <p class="desc"> <strong class="jaun-str">Patient Support:</strong><br>Gem Hospital stands by patients, offering compassionate support through every step of their piles treatment journey.</p>




                        </div>

                    </div>
                </div>

                <section class="blog blog-grid blog-grid-3 gr jaun-sec1" id="blog-2">


                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Types of Piles</h2>
                                </div>
                            </div>
                        </div>

                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 col-lg-12 col-md-12 ">


                                <p class="desc"> <strong class="jaun-str">Internal Piles:</strong>These reside inside the rectum and often go unnoticed until they prolapse (bulge) during bowel movements. They are usually painless but may cause bright red rectal bleeding. </p>

                                <p class="desc"> <strong class="jaun-str">External Piles:</strong> These are located under the skin around the anus, forming noticeable lumps. They can be itchy, painful, and bleed, especially during bowel movements.</p>
                                <div>
                                    <img src=" <?= base_url('frontend/assets/images/background/types-of-piles-gem-hospitals.png') ?>" alt="types-of-piles" class="mob" />
                                </div>
                                <p class="desc"> <strong class="jaun-str">Thrombosed Piles:</strong> Blood clots form within an external pile, causing intense pain, swelling, and tenderness.</p>
                                <p class="desc"> <strong class="jaun-str">Prolapsed Piles:</strong> Internal piles protrude outside the anus, causing discomfort, irritation, and difficulty wiping.
                                </p>



                            </div>
                        </div>


                </section>


                <section class="blog blog-grid blog-grid-3 gr jaun-sec1" id="blog-2">


                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Types of Piles based on severity</h2>
                                </div>
                            </div>
                        </div>

                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 col-lg-12 col-md-12 ">
                                <div class="heading">


                                    <h6 class="paragraph gre jaun-head2">
                                        Piles can be broadly categorized into four grades, each with distinct characteristics and treatment options
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </h6>
                                </div>
                                <h6 class="paragraph gre jaun-head2">
                                    Grade 1 Piles:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>


                                <p class="desc"> <strong class="jaun-str">Description:</strong>Small, internal swellings located inside the rectum. </p>

                                <p class="desc"> <strong class="jaun-str">Symptoms:</strong> May not cause any noticeable symptoms, but some people experience mild itching or discomfort.</p>

                                <p class="desc"> <strong class="jaun-str">Treatment:</strong> Usually resolve on their own with lifestyle changes like increasing fiber intake and managing constipation.</p><br>
                                <h6 class="paragraph gre jaun-head2">
                                    Grade 2 Piles:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>


                                <p class="desc"> <strong class="jaun-str">Description:</strong>Larger internal swellings that prolapse (protrude) outside the anus during bowel movements but retract spontaneously. </p>

                                <p class="desc"> <strong class="jaun-str">Symptoms:</strong> Bleeding, mild pain, and itching during bowel movements are common.</p>

                                <p class="desc"> <strong class="jaun-str">Treatment:</strong> Lifestyle modifications and home remedies often work, but sometimes minimally invasive procedures like rubber band ligation may be recommended.</p>
                                <br>

                                <h6 class="paragraph gre jaun-head2">
                                    Grade 3 Piles:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>


                                <p class="desc"> <strong class="jaun-str">Description:</strong>Larger swellings that prolapse and require manual pushing back into the rectum after bowel movements. </p>

                                <p class="desc"> <strong class="jaun-str">Symptoms:</strong> Increased bleeding, pain, and discomfort, along with difficulty cleaning the anal area.</p>

                                <p class="desc"> <strong class="jaun-str">Treatment:</strong> May require minimally invasive procedures like sclerotherapy or hemorrhoidectomy depending on the severity and recurrence.</p>

                                <br>
                                <h6 class="paragraph gre jaun-head2">
                                    Grade 4 Piles:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>


                                <p class="desc"> <strong class="jaun-str">Description:</strong>Prolapsed and permanently external swellings that cannot be pushed back in. </p>

                                <p class="desc"> <strong class="jaun-str">Symptoms:</strong> Significant pain, bleeding, and difficulty with hygiene, impacting daily life.</p>

                                <p class="desc"> <strong class="jaun-str">Treatment:</strong> Surgical intervention like hemorrhoidectomy is typically recommended due to the persistent discomfort and complications.</p>




                            </div>
                        </div>


                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Common Symptoms of Piles</h2>
                                </div>
                            </div>
                        </div>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">


                                <p class="desc"> <strong class="jaun-str">Pain and discomfort:</strong>Pain around the anus, especially during bowel movements, is a hallmark symptom. </p>

                                <p class="desc"> <strong class="jaun-str">Bleeding:</strong> Bright red blood on toilet paper or in the stool is a common sign of internal piles.</p>
                                <div>
                                    <img src=" <?= base_url('frontend/assets/images/background/common-symptoms-of-piles-gem-hospitals.png') ?>" alt=" symptoms-of-piles" class="mob" />
                                </div>
                                <p class="desc"> <strong class="jaun-str">Itching and irritation:</strong>The anal area may feel itchy and uncomfortable due to inflammation. </p>

                                <p class="desc"> <strong class="jaun-str">Lump or mass:</strong> You may feel a lump near the anus, which can be either internal or external hemorrhoids.</p>
                                <p class="desc"> <strong class="jaun-str">Difficulty with bowel movements:</strong> Feeling incomplete bowel movements or straining to pass stool can worsen symptoms.</p>
                                <div class="row jaun-div2">
                                    <div class="col-12">
                                        <div class="heading">


                                            <h6 class="paragraph gre jaun-head2">
                                                Book an Appointment Now!
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>

                                            <p class="desc jaun-desc"> Click "Book Appointment Now" and let GEM Hospital's Piles specialists guide you back to radiant health!
                                            </p>
                                            <div class="col-6">

                                                <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
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


                                <h2 class="heading-title">Causes Of Piles</h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">


                            <p class="desc"> <strong class="jaun-str">Increased pressure on the veins: </strong><br> Straining during bowel movements, pregnancy, obesity, and chronic sitting or standing can contribute to increased pressure on the veins in the rectum, leading to pile formation. </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/causes-of-piles-gem-hospitals.png') ?>" alt="causes-of-piles" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">Low-fiber diet: </strong><br>A diet low in fiber can lead to constipation, which puts further strain on the veins and exacerbates existing piles.</p>
                            <p class="desc"> <strong class="jaun-str"> Heavy lifting: </strong><br> Regularly lifting heavy objects can also put increased pressure on the veins in the rectum.</p>
                            <p class="desc"> <strong class="jaun-str"> Chronic medical conditions: </strong><br> Some medical conditions like liver cirrhosis or portal vein hypertension can also contribute to pile formation.</p>
                            <br>
                            <div class="heading">


                                <h6 class="paragraph gre jaun-head2">
                                    Impact on Daily Life:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6><br>
                                <p class=" gre jaun-head2">
                                    Living with piles can be immensely uncomfortable and inconvenient. The constant pain, itching, and bleeding can interfere with daily activities, work, and even social life. It can affect your sleep quality and overall well-being.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>

                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Finding Relief at GEM Hospital:
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc">At GEM Hospital, we understand the impact of piles on your life. Our team of experienced specialists is dedicated to providing comprehensive and effective treatment options for hemorrhoids. We offer a wide range of treatments, from non-invasive options like lifestyle modifications and medication to minimally invasive procedures like rubber band ligation and sclerotherapy. Our goal is to provide you with a personalized treatment plan that relieves your symptoms and improves your quality of life.
                                        </p>
                                        <p class="desc jaun-desc"> Don't suffer in silence. Take control of your health and book a free piles diagnosis at GEM Hospital today. Our expert doctors are ready to help you find lasting relief.
                                        </p>
                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Diagnosis of Piles</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">
                                <h6 class="paragraph gre jaun-head2">
                                    GEM Hospital understands the sensitive nature of this condition and offers a comprehensive diagnostic approach for accurate pile identification and treatment
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6><br>




                            </div>

                            <p class="desc"> <strong class="jaun-str">Medical History and Symptoms:</strong>Our doctors begin by understanding your medical history, including any risk factors like chronic constipation, heavy lifting, or pregnancy. They'll also discuss your symptoms, such as bleeding, pain, itching, or prolapse (protrusion) of tissues. </p>

                            <p class="desc"> <strong class="jaun-str">Physical Examination: </strong>A gentle physical examination involving a visual inspection and digital rectal exam helps assess the severity and location of the hemorrhoids. This painless procedure allows our doctors to determine the type and grade of hemorrhoids present.</p>

                            <p class="desc"> <strong class="jaun-str"> Additional Investigations:</strong> In some cases, your doctor may recommend additional tests like anoscopy (examination of the anal canal) or sigmoidoscopy (examination of the lower rectum) for a more detailed evaluation.</p>


                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph jaun-head2">
                                            Book your appointment at GEM Hospital today for comprehensive Piles diagnosis and treatment.
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Remember, early diagnosis is key to managing Piles effectively. Don't delay, book your appointment at GEM Hospital now!
                                        </p>
                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2">




                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">

                                <h6 class="paragraph jaun-head2">
                                    Piles Treatment: Finding Freedom from Discomfort:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>




                            </div>

                            <p class=" gre jaun-head2">
                                Stop suffering in silence. Discover advanced, minimally invasive solutions for lasting relief at GEM Hospital.
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </p>
                            <p class=" gre jaun-head2">
                                Piles, or hemorrhoids, can be a painful and embarrassing condition, but you don't have to suffer in silence. At GEM Hospital, we understand the impact piles can have on your daily life and offer a comprehensive range of treatment options tailored to your specific needs.
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </p>








                        </div>

                </section>
                <style>
                    .jaun-sec8 {
                        margin-top: -80px;
                    }

                    @media screen and (max-width:600px) {
                        .jaun-sec8 {
                            margin-top: -40px;
                        }
                    }
                </style>

                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Beyond Traditional Surgery</h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="col-12 ">
                                <div class="heading">

                                    <p class=" gre jaun-head2">
                                        Gone are the days of intimidating, invasive procedures. At GEM Hospital, we prioritize minimally invasive and laser-based treatments for faster recovery, less pain, and better long-term outcomes. Here's a glimpse into our advanced treatment options:
                                        <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                    </p>




                                </div>


                                <p class="desc"> <strong class="jaun-str">Rubber Band Ligation: </strong><br> A minimally invasive procedure involving painless placement of tiny rubber bands around internal hemorrhoids, causing them to shrink and eventually fall off. </p>



                                <p class="desc"> <strong class="jaun-str">Infrared Coagulation: </strong><br>A gentle laser treatment that shrinks hemorrhoids by delivering precise pulses of light, ideal for internal and external hemorrhoids.</p>
                                <p class="desc"> <strong class="jaun-str"> Stapled Hemorrhoidectomy (STHAL): </strong><br> Minimally invasive surgical procedure for severe internal hemorrhoids, using a stapler to remove excess tissue and restore normal function.</p>








                            </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Piles Treatment without Surgery</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class="paragraph gre jaun-head2">
                                    Hemorrhoids? Don't fret, painless alternatives at GEM Hospital, your gateway to comfortable living.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>

                            <p class="desc"> <strong class="jaun-str">Soothe and heal: </strong> Topical creams and suppositories containing corticosteroids can reduce inflammation and relieve pain. </p>

                            <p class="desc"> <strong class="jaun-str">Bandage the problem: </strong> Rubber band ligation for internal hemorrhoids is a minimally invasive procedure that shrinks and eliminates these troublesome bumps.</p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/piles-treatment-gem-hospitals.png') ?>" alt="piles-treatment-without-Surgery" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Sclerotherapy: </strong><br>Injected solutions shrink hemorrhoids by causing controlled scar tissue formation, offering long-term relief.</p>
                            <p class="desc"> <strong class="jaun-str">Infrared coagulation:</strong> Precise application of infrared light targets internal hemorrhoids, gently causing them to shrink and harden.
                            </p>





                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            GEM Hospital: Your Partner in Piles Treatment
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> At GEM Hospital, you're not just a patient; you're our partner in reclaiming your comfort and well-being. Our team of experienced piles specialists combines advanced technology with a compassionate approach to ensure optimal outcomes.
                                        </p>

                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 g jaun-sec6" id="blog-2">

                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title jaun-head3">Medication and Lifestyle Support:</h2>
                            </div>
                        </div>
                    </div>






                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <p class="gre jaun-head2">
                                Alongside advanced procedures, we offer comprehensive support to manage your symptoms and prevent recurrence:
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </p>

                            <p class="desc"> <strong class="jaun-str">Medications: </strong> Topical creams, suppositories, and oral medications to manage pain, inflammation, and discomfort. </p>

                            <p class="desc"> <strong class="jaun-str">Diet and Lifestyle Modifications:</strong>Recommendations for fiber-rich foods, hydration, and bowel management strategies to optimize digestive health.</p>


                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Schedule a Consultation Today
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Don't let piles dictate your life. Take the first step towards lasting relief. Schedule a consultation with our piles specialist at GEM Hospital and discover the treatment options that are right for you.
                                        </p>
                                        <p class="desc jaun-desc"> Remember, you deserve to live life to the fullest, free from the discomfort of piles. Let GEM Hospital guide you on your journey to complete recovery.
                                        </p>
                                        <p class="desc jaun-desc"><strong> Call us today or book an appointment online to take control of your health and well-being!
                                        </p></strong>


                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
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


                                <h2 class="heading-title">Prevention of Piles</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class="paragraph gre jaun-head2">
                                    Piles, also known as hemorrhoids, can be a pain. Literally. But before you suffer in silence, know that prevention is often the best cure.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>

                            <p class="desc"> <strong class="jaun-str">Fiber Frenzy: </strong> Embrace fiber! Include fruits, vegetables, and whole grains in your diet. Fiber bulks up your stool, making it easier to pass, reducing strain on your rectum and preventing the formation of pesky piles. Aim for 25-35 grams of fiber daily.</p>

                            <p class="desc"> <strong class="jaun-str">Hydrate Hero: </strong> Water is your friend! Drinking plenty of water keeps your stool soft and prevents constipation, a major contributor to piles. Aim for 8-10 glasses of water daily, adjusting based on your activity level and climate.</p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/prevention-of-piles-gem-hospitals.png') ?>" alt="piles-treatment-without-Surgery" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Exercise Enthusiast: </strong><br>Get moving! Regular exercise, like brisk walking, swimming, or yoga, improves blood circulation and digestion, keeping your gut happy and piles at bay. Aim for at least 30 minutes of moderate-intensity exercise most days of the week.</p>
                            <p class="desc"> <strong class="jaun-str">Bathroom Buddy:</strong> Don't ignore the call of nature! Holding it in puts undue pressure on your veins, increasing the risk of piles. Go as soon as you feel the urge, and avoid straining during bowel movements.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Sit Smart: </strong><br>Ditch the hard benches and opt for chairs with soft cushions. Prolonged sitting, especially on hard surfaces, can aggravate existing piles and contribute to their formation. Take breaks, get up and move around every 30-60 minutes.</p>
                            <p class="desc"> <strong class="jaun-str">Weight Watch:</strong> Excess weight puts pressure on your abdominal cavity, including your rectum. Keeping your weight in check through a healthy diet and exercise reduces this pressure and the risk of piles.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Spice it Up (But Not Too Much): </strong><br>While adding some spice to your life can be delightful, excessive chili peppers and spicy foods can irritate your digestive system and worsen piles. Enjoy spice in moderation, and listen to your body's signals.</p>






                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            GEM Hospital: Your Partner in Piles Treatment
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> At GEM Hospital, you're not just a patient; you're our partner in reclaiming your comfort and well-being. Our team of experienced piles specialists combines advanced technology with a compassionate approach to ensure optimal outcomes.
                                        </p>

                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 g jaun-sec6" id="blog-2">

                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title jaun-head3">Why Choose GEM Hospital for Piles Treatment?</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">

                            <p class="desc">Surgery offered only for those who’ll require one </p>

                            <p class="desc"> Comprehensive piles care involving treatment and reducing further recurrence</p>
                            <p class="desc"> Usage of advanced gadgets like harmonic,LASER to aid quicker recovery</p>

                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Piles Hold You Back
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Book your appointment at GEM Hospital today and take the first step towards a pain-free, confident future. Our expert team is here to guide you every step of the way, offering comprehensive care and ongoing support to ensure your long-term well-being.
                                        </p>
                                        <p class="desc jaun-desc"> Click "Book Appointment Now" to schedule your consultation and get back to living life to the fullest.
                                        </p>
                                        <p class="desc jaun-desc"> GEM Hospital: Where lasting relief for piles begins.
                                        </p>


                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#new"> <span class="line">
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
                                        Speech About Piles</h6>
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
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">How Long Is Recovery?</a></div>
                            <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                <div class="card-body">The recovery period will vary depending on the type of hernia, type of surgery, age, and overall health. It’s normal to feel moderate pain. The recovery period for patients who have undergone Robotic surgery will be approximately 2 weeks and 3 to 4 weeks for Laparoscopic surgery.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">How Long Will I Have To Stay In the Hospital?</a></div>
                            <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                <div class="card-body">You can go home on the procedure day itself if you have done a Laparoscopic or Robotic Surgery</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Is It Dangerous To Ignore The Hernia?</a></div>
                            <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                <div class="card-body">If you ignore it will become bigger and more painful. At worst it can demand immediate Surgery and it could be more extreme</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Difference Between An Open Vs Laparoscopic Hernia Surgery?</a></div>
                            <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                <div class="card-body">An open surgery requires an incision to put the bulging tissue back in place and it will take a lot of time for recovery.<br><br>

                                    <b>Laparoscopic surgery is minimally-invasive which requires a small incision and also reduces recovery time.</b>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Does The Surgery Affect Pregnancy?</a></div>
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