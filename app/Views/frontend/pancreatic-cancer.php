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
        margin-top: -60px;
    }

    @media screen and (max-width:600px) {
        .jaun-sec3 {
            margin-top: -30px !important;
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

                        <img src=" <?= base_url('frontend/assets/images/team/grid/pancreaticcancer.webp') ?>" alt="Background" />

                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h2 class="slide-headline her-head">
                                        Pancreatic Cancer Expert Care Awaits at GEM Hospital</h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="slide-desc her-para">Unveiling the complexities of pancreatic cancer and guiding you towards expert care at GEM Hospital. </p>
                                    <div class="col-12 chair-bread">
                                        <ol class="breadcrumb d-flex justify-content-center fo-si ">
                                            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                            <li class=""><a href="<?= base_url('services/pancreatic-cancer') ?>">Pancreatic Cancer</a></li>
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
                                    What is Pancreatic Cancer?
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;
                                Pancreatic cancer, while less common than some other malignancies, poses a significant challenge due to its often-late diagnosis and aggressive nature. Nestled deep within the abdomen, the pancreas plays a vital role in both digestion and blood sugar regulation. When abnormal cells in this vital organ begin to multiply uncontrollably, pancreatic cancer develops.
                            </p>

                            <p class="desc">&bull;The early stages of pancreatic cancer often pass unnoticed, as symptoms can be subtle or mimic other conditions. This makes timely diagnosis crucial for managing the disease effectively. However, navigating the complexities of pancreatic cancer can be overwhelming.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Diagnosis:</strong><br>Early detection of pancreatic cancer at Gem Hospital involves advanced imaging and precise diagnostic tools for accurate assessment and prompt intervention.</p>
                            <p class="desc"> <strong class="jaun-str">Treatment:</strong><br>Gem Hospital employs cutting-edge therapies and personalized treatment plans, ensuring comprehensive care for pancreatic cancer patients, striving for optimal outcomes.</p>
                            <p class="desc"> <strong class="jaun-str">After Treatment Care:</strong><br>Post-treatment, Gem Hospital focuses on seamless recovery, offering dedicated support and follow-up care to enhance the well-being of pancreatic cancer survivors.</p>
                            <p class="desc"> <strong class="jaun-str">Patient Support:</strong><br>At Gem Hospital, a compassionate team provides unwavering support to pancreatic cancer patients, fostering hope and assisting them throughout their treatment journey.</p>




                        </div>

                    </div>
                </div>
                <section class="blog blog-grid blog-grid-3 jaun-sec3" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Pancreatic Cancer Causes
                                </h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2">
                                    Pancreatic cancer, often shrouded in mystery, has a complex web of contributing factors. Here, we shed light on these influences and why early diagnosis is crucial.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->

                                </p>

                            </div>
                            <h6 class="paragraph gre jaun-head2">Environmental Culprits:</h6>

                            <p class="desc"> <strong class="jaun-str">
                                    Smoking:</strong><br>The undisputed champion of pancreatic cancer risk, smoking damages DNA and fuels inflammation, paving the way for cancerous mutations. </p>
                            <p class="desc"> <strong class="jaun-str">
                                    Obesity and Diet:</strong><br>Carrying excess weight and unhealthy dietary choices like processed meats and sugary drinks create a metabolic environment conducive to cancer development.
                            </p>
                            <p class="desc"> <strong class="jaun-str">
                                    Chronic Pancreatitis:</strong><br>This ongoing inflammation of the pancreas scars and weakens its cells, increasing the risk of cancerous mutations
                            </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/PancreaticCancerCauses.png') ?>" alt="causes-of-Pancreatic-Cancer" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">
                                    Diabetes:</strong><br>High blood sugar levels and chronic inflammation associated with diabetes are linked to an increased risk of pancreatic cancer.
                            </p>
                            <h6 class="paragraph gre jaun-head2">Genetic Predisposition:
                            </h6>
                            <p class="desc"> <strong class="jaun-str">
                                    Family History:</strong><br>Having a close relative with pancreatic cancer significantly raises your risk, suggesting a role for inherited genetic mutations.
                            </p>

                            <p class="desc"> <strong class="jaun-str">
                                    Genetic Syndromes: </strong><br>Specific genetic syndromes like BRCA1/2 and Lynch syndrome can significantly increase the risk of pancreatic cancer.
                            </p>
                            <p class="gre jaun-head2">
                                Don't let pancreatic cancer remain a shadowy threat. Book an appointment at GEM Hospital today and take control of your health. Early diagnosis and proactive measures can make a world of difference.
                            </p>
                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">



                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Symptoms: Pancreatic Cancer Symptoms</h2>
                                </div>
                            </div>
                        </div>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">


                                    <h6 class="paragraph gre jaun-head2">
                                        Common Whispers of Pancreatic Cancer:
                                    </h6><br>
                                    <p class="desc"> <strong class="jaun-str">
                                            Unexplained Weight Loss:</strong> A sudden dip in weight without trying is a potential red flag.
                                    </p>
                                    <p class="desc"> <strong class="jaun-str">
                                            Persistent Abdominal or Back Pain: </strong>A dull ache in the upper abdomen or radiating to the back, especially after eating, could be a signal.
                                    </p>
                                    <p class="desc"> <strong class="jaun-str">
                                            Jaundice:</strong>Yellowing of the skin and eyes, along with dark urine and pale stools, indicates bile duct blockage, a common symptom.
                                    </p>
                                </div>
                                <div>
                                    <img src=" <?= base_url('frontend/assets/images/background/PancreaticCancerSymptoms.png') ?>" alt=" symptoms-of-pancreatic-cancer" class="mob" />
                                </div>
                                <p class="desc"> <strong class="jaun-str">
                                        Nausea and Vomiting: </strong>Persistent nausea and vomiting, especially if accompanied by other symptoms, shouldn't be ignored.
                                </p>
                                <p class="desc"> <strong class="jaun-str">
                                        Loss of Appetite and Feeling Full Quickly:</strong>Early satiety or a significant decline in appetite can be a warning sign.

                                </p>
                                <p class="desc"> <strong class="jaun-str">
                                        New Onset of Diabetes:</strong> If you suddenly develop diabetes, especially in adulthood, it could be a pancreatic cancer clue.

                                </p>
                                <div class="row jaun-div2">
                                    <div class="col-12">
                                        <div class="heading">


                                            <h6 class="paragraph gre jaun-head2">
                                                Book your appointment today and take control of your health.

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
                        </div>

                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Pancreatic Cancer Diagnosis
                                </h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">
                                <p class=" gre jaun-head2">
                                    Early detection is crucial for fighting pancreatic cancer,
                                    and GEM Hospital offers advanced diagnostic tools and specialist expertise to guide you.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                                <h6 class="paragraph gre jaun-head2">
                                    Methods for Diagnosing Pancreatic Cancer:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>



                            </div>
                            <p class="desc"> <strong class="jaun-str">
                                    Imaging Tests:</strong><br>
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    CT Scan:</strong><br> This detailed scan provides 3D images of the pancreas and surrounding organs, often revealing tumors or blockages.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    MRI Scan:</strong><br> This scan uses powerful magnets and radio waves to create detailed images of soft tissues, potentially identifying early-stage tumors.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Endoscopic Ultrasound (EUS):</strong><br> A thin, flexible tube with an ultrasound probe inserted through the mouth
                                or rectum provides close-up images of the pancreas and surrounding structures.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    PET Scan:</strong><br> This scan uses radioactive tracers to highlight areas of increased metabolic activity, often associated with cancer.
                            </p>

                            <p class="desc"> <strong class="jaun-str">
                                    Blood Tests:</strong><br>
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Tumor Markers:</strong><br> Specific proteins, like CA 19-9, may be elevated in pancreatic cancer but are not definitive for diagnosis.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Genetic Testing:</strong><br> Identifying genetic mutations associated with pancreatic cancer can aid in diagnosis and treatment planning.
                            </p>

                            <h6 class="paragraph gre jaun-head2">Diagnostic Procedures for Pancreatic Cancer:</h6>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Biopsy:</strong><br> Obtaining a tissue sample from the pancreas, typically through
                                EUS-guided fine-needle aspiration, is essential for confirming a cancer diagnosis.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Endoscopic Retrograde Cholangiopancreatography (ERCP):</strong><br>This procedure uses a thin tube inserted through the mouth and into the bile ducts to diagnose and treat blockages.

                            </p>
                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph jaun-head2">
                                            Book your appointment at GEM Hospital today for comprehensive pancreatic diagnosis and treatment.
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Remember, early diagnosis is key to managing Pancreatic effectively. Don't delay, book your appointment at GEM Hospital now!
                                        </p>
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


                                <h2 class="heading-title">Pancreatic Cancer Stages
                                </h2>
                            </div>
                        </div>
                    </div><br>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">

                                <p class="desc">Understanding the different stages of pancreatic cancer empowers informed decisions. Get acquainted with the roadmap and connect with specialists at GEM Hospital.</p>

                                <h6 class="paragraph gre jaun-head2">
                                    Understanding the Staging System:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6><br>
                                <p class="desc">
                                    Pancreatic cancer is most commonly staged using the TNM system, which considers three key factors:
                                </p>
                            </div>

                            <p class="desc"><strong class="jaun-str">Tumor size and location (T):</strong> This indicates the size and spread of the tumor within the pancreas.
                            </p>

                            <p class="desc"> <strong class="jaun-str">Lymph node involvement (N):</strong> This assesses whether the cancer has spread to nearby lymph nodes.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Distant metastasis (M): </strong>This determines if the cancer has spread to distant organs like the liver or lungs.</p>


                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/PancreaticCancerStages.png') ?>" alt="treatment-for-pancreatic" class="mob" />
                            </div><br>
                            <h6 class="paragraph gre jaun-head2">
                                The Pancreatic Cancer Stage Spectrum:
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>

                        </div>

                        <p class="desc"><strong class="jaun-str">Stage 0:</strong> Precancerous cells are present, confined to the inner lining of the pancreatic ducts.
                        </p>

                        <p class="desc"> <strong class="jaun-str">Stage I:</strong> The tumor is confined to the pancreas and is less than 2 centimeters in size.

                        </p>
                        <p class="desc"> <strong class="jaun-str">Stage II: </strong>The tumor may be larger than 2 centimeters but hasn't spread to lymph nodes.
                        </p>

                        <p class="desc"> <strong class="jaun-str">Stage III:</strong> The cancer has spread to nearby lymph nodes but not distant organs. This stage is further subcategorized based on the extent of lymph node involvement.
                        </p>

                        <p class="desc"> <strong class="jaun-str">Stage IV: </strong> The cancer has spread to distant organs.

                        </p>
                    </div>

                </section>
                <style>
                    .jaun-sec8 {
                        margin-top: -70px;

                    }

                    @media screen and (max-width:600px) {
                        .jaun-sec8 {
                            margin-top: -20px;
                        }
                    }
                </style>

                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Pancreatic Cancer Treatment Options
                                </h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class=" gre jaun-head2">
                                    Facing a pancreatic cancer diagnosis can be overwhelming, but at GEM Hospital, we're here to guide you through every step of the treatment journey.

                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p><br>
                                <h6 class="paragraph gre jaun-head2">
                                    Treatment Strategies for Pancreatic Cancer:
                                </h6>
                            </div>

                            <p class="desc"> <strong class="jaun-str">Surgery:</strong> When feasible, surgical removal of the tumor remains the primary curative approach. Depending on the tumor's location and extent,
                                different surgical procedures like Whipple procedure, distal pancreatectomy, or total pancreatectomy may be employed.</p>

                            <p class="desc"> <strong class="jaun-str">Chemotherapy:</strong> Powerful medications are used to shrink tumors and slow their growth. Chemotherapy alone or in combination
                                with radiation therapy forms the backbone of treatment for advanced pancreatic cancer.</p>
                            <p class="desc"> <strong class="jaun-str">Radiation Therapy: </strong><br>High-energy beams target cancer cells, often alongside chemotherapy, to shrink tumors and control symptoms like pain.</p>
                            <p class="desc"> <strong class="jaun-str">Targeted Therapy:</strong> Diet plays a crucial role in recovery. For breastfed babies, frequent feeding sessions help eliminate bilirubin through bowel movements. Formula-fed babies might benefit from switching to a special formula that enhances bilirubin elimination
                            </p>

                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/PancreaticCancerTreatment.png') ?>" alt="treatment-for-Pancreatic" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Immunotherapy: </strong><br>This cutting-edge treatment harnesses the body's immune system to recognize and attack cancer cells, holding promise for advanced pancreatic cancer.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Pain Management:</strong>Managing pain effectively is crucial throughout the treatment journey.
                                GEM Hospital's specialists prioritize your comfort with medication, nerve blocks, and other supportive measures.
                            </p>






                        </div>

                </section>

                <style>
                    .jaun-sec9 {
                        margin-top: -40px;
                    }

                    @media screen and (max-width:600px) {
                        .jaun-sec9 {
                            margin-top: -100px !important;
                        }
                    }
                </style>


                <section class="blog blog-grid blog-grid-3 jaun-sec9" id="blog-2">
                    <!-- End .row-->
                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Pancreatic Cancer Therapies and Interventions:</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End .row--><br>
                    <div class="col-12 ">
                        <div class="heading">



                            <h6 class="paragraph gre jaun-head2">
                                At GEM Hospital, we go beyond standard treatment options, offering access to:
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>
                        </div>




                    </div>

                    <div class="row ">
                        <div class="col-12 ">

                            <p class="desc"> <strong class="jaun-str">Clinical Trials:</strong>These trials provide opportunities to access cutting-edge therapies before they become widely available.
                            </p>

                            <p class="desc"> <strong class="jaun-str">Palliative Care:</strong>This specialized care focuses on improving quality of life and managing symptoms, regardless of treatment stage.</p>
                            <p class="desc"> <strong class="jaun-str">Multidisciplinary Team Approach:</strong> Our team of oncologists, surgeons, radiologists, pain specialists, and other healthcare professionals collaborate to create a personalized treatment plan that addresses all your needs.</p>
                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Remember, you're not alone in this fight.

                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Book an appointment at GEM Hospital today to discuss your pancreatic cancer treatment options with our highly skilled and compassionate specialists.
                                        </p>
                                        <div class="col-6">

                                            <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                    <span></span></span><span>Book Appointment Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Surgery for Pancreatic Cancer
                                </h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row--><br>

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class="paragraph gre jaun-head2">
                                    Early detection and expert surgical intervention offer a glimmer of hope for pancreatic cancer patients.

                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6><br>
                                <h6 class="paragraph gre jaun-head2">
                                    Surgical Approaches for Pancreatic Cancer:
                                </h6>
                            </div>

                            <p class="desc"> <strong class="jaun-str">Whipple Procedure:</strong> This complex surgery removes the head of the pancreas, part of the duodenum, bile duct, and sometimes
                                part of the stomach and nearby lymph nodes. It's the most common surgery for pancreatic head tumors.</p>

                            <p class="desc"> <strong class="jaun-str">Distal Pancreatectomy:</strong> This procedure removes the tail and body of the pancreas and spleen, often used for tumors in these locations.</p>
                            <p class="desc"> <strong class="jaun-str">Total Pancreatectomy: </strong>This extensive surgery removes the entire pancreas, spleen, duodenum, part of the stomach, and nearby lymph nodes. It's rarely performed due to its complexity.</p>
                            <p class="desc"> <strong class="jaun-str">Pancreaticoduodenectomy (PD):</strong> This newer technique combines elements of the Whipple and pylorus-preserving pancreaticoduodenectomy (PPPD) procedures, offering a minimally invasive approach for certain tumors.
                            </p>

                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/SurgeryforPancreaticCancer.png') ?>" alt="treatment-for-pancreatic" class="mob" />
                            </div><br>
                            <h6 class="paragraph gre jaun-head2">The Role of Surgery in Pancreatic Cancer Management:
                            </h6>
                            <p class="desc">Surgery is often the primary treatment for pancreatic cancer if the tumor is localized and hasn't spread. It aims to remove the cancerous tissue and surrounding lymph nodes to prevent further spread. Surgery may be combined with other treatments like chemotherapy and radiation therapy for optimal outcomes.
                            </p>
                        </div>

                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Chemotherapy for Pancreatic Cancer
                                </h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class=" gre jaun-head2">
                                    Facing pancreatic cancer? Understanding chemotherapy can empower you. Schedule a consultation
                                    at GEM Hospital to discuss your personalized treatment plan with our expert oncologists.

                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>
                            <h6 class="paragraph gre jaun-head2">
                                Different Chemo Regimens for Pancreatic Cancer:
                            </h6>

                            <p class="desc"> <strong class="jaun-str">Gemcitabine:</strong> A mainstay drug, often combined with other agents for enhanced efficacy.
                            </p>
                            <p class="desc"> <strong class="jaun-str">FOLFIRINOX:</strong> A potent combination of four drugs (fluorouracil, leucovorin, irinotecan, and oxaliplatin) for advanced-stage disease.</p>
                            <p class="desc"> <strong class="jaun-str">Nab-paclitaxel: </strong>A protein-bound form of paclitaxel offering improved delivery and potentially reduced side effects.</p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Understanding the Role of Chemotherapy in Pancreatic Cancer Treatment:
                            </h6>
                            <p class="desc"> <strong class="jaun-str">Curative Intent:</strong> In early-stage disease, chemo may be used with surgery or radiation to potentially cure the cancer.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Palliative Intent:</strong> In advanced stages, chemo aims to control tumor growth, manage symptoms, and improve quality of life.
                            </p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Considerations and Potential Side Effects:
                            </h6>
                            <p class="desc">&bull; Chemotherapy can be physically demanding, causing fatigue, nausea, hair loss, and other side effects.
                            </p>
                            <p class="desc">&bull; Open communication with your oncologist at GEM Hospital is crucial to manage these side effects effectively.
                            </p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Radiation Therapy for Pancreatic Cancer</h6>
                            <p class="desc">While pancreatic cancer presents a significant challenge, GEM Hospital's specialized
                                physicians utilize advanced radiation therapy as a powerful tool to combat the disease and improve patient outcomes.</p>
                            <h6 class="paragraph gre jaun-head2">
                                Unlocking the Power of Radiation:
                            </h6>
                            <p class="desc"> <strong class="jaun-str">Curbing Tumor Growth:</strong> Radiation therapy delivers high-energy beams to precisely target and destroy cancer cells, shrinking tumors and controlling their spread.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Pain Relief and Symptom Management:</strong> In advanced stages, radiation therapy can alleviate pain and other debilitating symptoms associated with pancreatic cancer, improving quality of life.</p>
                            <p class="desc"> <strong class="jaun-str">Boosting Treatment Outcomes:</strong>When combined with surgery and/or chemotherapy, radiation therapy can enhance overall treatment efficacy, leading to better survival rates.
                            </p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Tailoring Treatment for Each Patient:</h6>
                            <p class="desc">At GEM Hospital, we understand that every patient's journey is unique. Our radiation oncologists meticulously assess
                                individual cases and employ diverse radiation techniques, including:
                            </p>
                            <p class="desc"> <strong class="jaun-str">External Beam Radiation Therapy:</strong> Focused beams of radiation are directed at the tumor from outside the body.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Stereotactic Body Radiation Therapy (SBRT): </strong> High doses of radiation are delivered in fewer sessions with pinpoint accuracy, minimizing damage to surrounding healthy tissues.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Image-Guided Radiation Therapy (IGRT): </strong> Real-time imaging ensures precise targeting and treatment adjustments during the course of therapy.
                            </p>
                        </div>

                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec8" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Pancreatic Cancer Prognosis
                                </h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class="paragraph gre jaun-head2">
                                    While pancreatic cancer diagnosis carries challenges, understanding prognostic factors and seeking expert
                                    guidance at GEM Hospital empowers patients to navigate the journey with hope and informed decision-making.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <h6 class="paragraph gre jaun-head2">
                                Unveiling the Prognostic Puzzle:
                            </h6>
                            <p class="desc">Several factors play a crucial role in shaping the pancreatic cancer prognosis:
                            </p>
                            <p class="desc"> <strong class="jaun-str">Stage of Diagnosis:</strong> Early detection plays a pivotal role, with localized tumors offering better treatment options and potentially improved outcomes.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Tumor Characteristics:</strong> The size, type, and grade of the tumor, along with its relationship to vital blood vessels, influence treatment possibilities and prognosis.</p>
                            <p class="desc"> <strong class="jaun-str">Overall Health: </strong>Pre-existing medical conditions and general health can impact treatment tolerance and outcomes.</p>
                            <p class="desc"> <strong class="jaun-str">Treatment Response: </strong>Individual responses to various therapies, including surgery, chemotherapy, and radiation, can significantly affect the prognosis.</p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Beyond Numbers: Hope and Personalized Care at GEM Hospital:
                            </h6>
                            <p class="desc">While statistics present an overall picture, it's crucial to remember that every patient's journey is unique. At GEM Hospital, we go beyond numbers and focus on personalized care.
                                Our dedicated team, comprising experienced oncologists, surgeons, and support staff, works closely with you to:</p>
                            <p class="desc"> <strong class="jaun-str">Accurately assess your individual case:</strong> Through advanced diagnostics and
                                comprehensive evaluations, we gain a deep understanding of your specific pancreatic cancer and its characteristics.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Develop a tailored treatment plan:</strong> We present you with all available treatment options,
                                explaining their potential benefits and side effects, empowering you to make informed decisions.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Provide unwavering support:</strong> Throughout your treatment journey, our skilled nurses, counselors,
                                and support groups offer ongoing guidance and emotional support, ensuring you navigate this challenging path with strength and resilience.
                            </p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Pancreatic Cancer Research and Innovations:
                            </h6>
                            <p class="desc">At GEM Hospital, we fight against pancreatic cancer with the cutting edge of research and innovative treatments.</p>
                            <h6 class="paragraph gre jaun-head2">Advancements in Early Detection:
                            </h6>
                            <p class="desc"> <strong class="jaun-str">Liquid biopsies:</strong> Identifying tumor DNA circulating in the bloodstream holds immense promise for earlier diagnosis, even before symptoms appear.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Advanced imaging:</strong> Refining techniques like MRI and PET scans allows for earlier visualization and characterization of tumors.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Genetic markers:</strong> Unveiling the genetic blueprints of pancreatic cancer paves the way for personalized screening and risk assessment.
                            </p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Innovative Approaches in Treatment:
                            </h6>
                            <p class="desc"> <strong class="jaun-str">Targeted therapies: </strong> Drugs designed to attack specific molecular vulnerabilities within tumor cells offer new avenues for personalized treatment.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Immunotherapy: </strong> Harnessing the body's own immune system to fight cancer, with promising results in clinical trials.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Nanomedicine: </strong> Delivering targeted drugs directly to tumor cells, minimizing side effects and maximizing efficacy.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Minimally invasive surgery: </strong> Advanced laparoscopic and robotic techniques allow for less invasive procedures, reducing patient recovery time and complications.
                            </p>

                        </div>

                </section>

                <section class="blog blog-grid blog-grid-3 g jaun-sec8" id="blog-2">

                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title jaun-head3">Living with Pancreatic Cancer</h2>
                                <p class="desc">A patient's guide to navigating the journey, prioritizing quality of life, and seeking expert support at GEM Hospital
                                </p>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">

                            <h6 class="paragraph gre jaun-head2">Coping with the Emotional Tides:</h6>
                            <p class="desc"> <strong class="jaun-str">Embrace your emotions:</strong> Allow yourself to grieve, feel angry, or scared. Bottling emotions can hinder healing. Share your feelings with trusted loved ones or consider support groups.</p>
                            <p class="desc"> <strong class="jaun-str">Seek professional help: </strong> Therapists and counselors can provide invaluable guidance in managing emotional turmoil and developing coping mechanisms.</p>
                            <p class="desc"> <strong class="jaun-str">Find strength in connection:</strong> Lean on your support system – family, friends, or patient groups – for emotional strength and practical assistance.</p>
                            <br>
                            <h6 class="paragraph gre jaun-head2">Prioritizing Quality of Life:</h6>
                            <p class="desc"> <strong class="jaun-str">Open communication with your doctor:</strong> Discuss treatment options and potential side effects honestly. Understand your choices and actively participate in decisions that impact your quality of life.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Treat side effects proactively: </strong> Manage pain, nausea, fatigue, and other side effects effectively through medication, therapy, and lifestyle adjustments. Don't hesitate to reach out to your healthcare team for symptom management support</p>
                            <p class="desc"> <strong class="jaun-str">Maintain normalcy as much as possible:</strong> Integrate activities you enjoy and find purpose into your daily routine, even in modified forms. This can boost your mood and overall well-being.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Nourish your body and mind: </strong> Eat a balanced diet rich in fruits, vegetables, and whole grains. Prioritize restful sleep, gentle exercise, and relaxation techniques like meditation or yoga.</p>
                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">

                                        <p class="desc jaun-desc"> Living with pancreatic cancer is a challenge, but it does not have to define you.
                                            By prioritizing your well-being, seeking expert support, and embracing hope, you can navigate this journey with strength and resilience
                                        </p>
                                        <h6 class="paragraph gre jaun-head2">
                                            Book an appointment at GEM Hospital today!
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


                            <p class="desc"> Gem hospital has performed the largest numbers of laparoscopic cancer surgeries in the country</p>

                            <p class="desc"> Prof.C.Palanivelu , the founder of the hospital operated worlds first laparoscopic pancreatic cancer in the year 1997</p>

                            <p class="desc">Gem hospital has reported the highest success rates in the country</p>


                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Book an Consultation Now!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Ready to take control of your health? Schedule your consultation today!<br>
                                            Click the "Schedule Your Consultation" button below and let our Pancreatic specialists help you conquer this condition and reclaim your vibrant life.<br>Don't wait, pancreatic can worsen. Act now and take charge of your health.

                                        </p>

                                        <div class="col-6">

                                            <a class="btn btn--primary  btn--block mt-3 bts" href="#new"> <span class="line">
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
                                        Speech About Pancreatic Cancer</h6>
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
                      role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">1. How Long is Pancreatic Cancer Treatment?</a></div>
                  <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Treatment duration varies; it depends on cancer stage and individual factors. Consult your oncologist for personalized information on recovery and follow-up care.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">2. Hospital Stay for Pancreatic Cancer?</a></div>
                  <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Hospitalization varies by treatment type and patient needs. Mild cases may allow outpatient care, while severe cases may require extended hospital stays. Consult your healthcare provider.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link  collapsed" data-hover="" data-bs-toggle="collapse" role="button"
                      aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">3. Is Ignoring Pancreatic Cancer Symptoms Dangerous?</a></div>
                  <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Ignoring symptoms can be perilous. Pancreatic cancer may progress rapidly. Early diagnosis and treatment enhance outcomes. Seek prompt medical attention for evaluation and guidance.</div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-4" href="#collapse01-4">4.What Supportive Care is Available for Pancreatic Cancer Patients?</a></div>
                  <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">Supportive care includes pain management, nutritional support, and counseling. It aims to improve quality of life during treatment.</div>
                  </div>
                </div>
				        <div class="card">
                  <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                      role="button" aria-expanded="false" aria-controls="collapse01-5" href="#collapse01-5">5. When to Seek Medical Attention for Pancreatic Cancer Symptoms?</a></div>
                  <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                    <div class="card-body color-heading">If you experience persistent abdominal pain, unexplained weight loss, or digestive issues, consult a healthcare professional promptly. Early detection improves the chances of effective treatment</div>
                  </div>
                </div>

                    </div>

                </div>



            </div>

        </div>
    </div>
    </div>

</body>





<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>