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
        margin-top: -60px;
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

                        <img src=" <?= base_url('frontend/assets/images/team/grid/Fistula.webp') ?>" alt="Background" />

                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h2 class="slide-headline her-head">
                                        Anal and Perianal Fistulas Resolved at GEM Hospital</h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="slide-desc her-para">Embark on a Journey to Wellness: Understanding Anal Fissures and Perianal Fistulas </p>
                                    <div class="col-12 chair-bread">
                                        <ol class="breadcrumb d-flex justify-content-center fo-si ">
                                            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                            <li class=""><a href="<?= base_url('services/fissure') ?>">Fissure</a></li>
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
                                    What Is Fissure?
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;
                                Navigating the intricacies of anal health is essential for a life free from discomfort.
                            </p>
                            <p class="desc">&bull;
                                At GEM Hospital, our specialized doctors are dedicated to shedding light on the signs and symptoms of Anal Fissures and Perianal Fistulas, empowering you to recognize the early indicators of these conditions.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Diagnosis:</strong><br>Gem Hospital employs advanced diagnostic methods to accurately identify anal fissures and perianal fistulas, ensuring precise and effective treatment plans. </p>
                            <p class="desc"> <strong class="jaun-str">Treatment:</strong><br>At Gem Hospital, we offer cutting-edge treatments for anal fissures and perianal fistulas, providing relief through personalized and expert care.</p>
                            <p class="desc"> <strong class="jaun-str">After Treatment Care:</strong><br>Experience compassionate post-treatment care at Gem Hospital, ensuring your comfort and a swift recovery from anal fissures and perianal fistulas. </p>
                            <p class="desc"> <strong class="jaun-str">Patient Support:</strong><br>Gem Hospital is committed to supporting patients throughout their journey, offering guidance and care for those dealing with anal fissures and perianal fistulas.</p>




                        </div>

                    </div>
                </div>


                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                    <div class="entry-introduction">
                        <div class="row">
                            <div class="col-12 col-lg-12 offset-lg-0">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Recognizing the Signs: Anal Fissures and Perianal Fistulas Unveiled</h2>
                                </div>
                            </div>
                        </div>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">


                                <p class="desc">&bull; Anal fissures and perianal fistulas can often be elusive, causing undue discomfort. Our insightful guide breaks down the distinctive signs, allowing you to grasp the nuances of these conditions </p>


                                <p class="desc">&bull; From subtle discomfort to noticeable symptoms, discover the key markers that warrant attention.</p>


                                <div class="row jaun-div2">
                                    <div class="col-12">
                                        <div class="heading">


                                            <h6 class="paragraph gre jaun-head2">
                                                Ready to Take Control? Book Your Appointment with GEM Hospital Today!
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>
                                            <p class="desc jaun-desc"> Whether you've identified potential symptoms or seek preventative guidance, our team of expert doctors at GEM Hospital specializes in anal health. Book an appointment now to consult with our specialists, ensuring personalized care and tailored solutions for anal fissures and perianal fistulas. Your journey to lasting relief begins with a single click or call to GEM Hospital.
                                            </p>
                                            <p class="desc jaun-desc"> Click "Book Appointment Now" and let GEM Hospital's Fissure specialists guide you back to radiant health!
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


                                <h2 class="heading-title">Causes Of Fissure</h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <h6 class="paragraph gre jaun-head2">
                                    Sometimes, the pain that whispers in the shadows needs a specialist's ear
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>

                            <p class="desc"> Living with the discomfort of anal fissures or the persistent drainage of perianal fistulas can be both physically and emotionally taxing. But understanding the causes behind these conditions can illuminate the path to healing. </p>
                            <br>

                            <h6 class="paragraph gre jaun-head2">
                                What causes of Anal Fissures?
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>
                            <p class="desc "> <strong>These small tears in the delicate lining of the anus can arise from a variety of factors:</strong> </p>

                            <p class="desc"> <strong class="jaun-str">Straining during bowel movements:</strong><br>Chronic constipation or passing hard stools can put excessive pressure on the anal canal, leading to tearing. </p>
                            <p class="desc"> <strong class="jaun-str">Chronic diarrhea:</strong><br> Frequent loose stools can irritate the anal lining, making it more susceptible to fissures.</p>
                            <p class="desc"> <strong class="jaun-str">Sphincter muscle tension: </strong><br> Tightness in the muscles around the anus can restrict blood flow and weaken the lining, increasing the risk of tears.</p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/causesofAnalFissures.png') ?>" alt="causes-of-fissure" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Childbirth: </strong><br>The pressure exerted during delivery can sometimes cause fissures in the anus.</p>
                            <p class="desc"> <strong class="jaun-str">Medical conditions: </strong><br> Inflammatory bowel disease (IBD) or Crohn's disease can contribute to anal fissures.</p><br>

                            <h6 class="paragraph gre jaun-head2">
                                What causes Perianal Fistulas?
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>
                            <p class="desc "> <strong>These troublesome tunnels connecting the anal canal to the skin surface often stem from:</strong> </p>

                            <p class="desc"> <strong class="jaun-str">Infected anal glands:</strong><br>Blockage or inflammation of the tiny glands near the anus can lead to abscess formation, which can eventually drain and form a fistula.</p>
                            <p class="desc"> <strong class="jaun-str">Crohn's disease or ulcerative colitis: </strong><br> These inflammatory bowel diseases can weaken the tissues around the anus, making them susceptible to fistula formation.</p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/CausesofPerianalFistulas.png') ?>" alt="causes-of-fissure" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Trauma:</strong><br>Injury to the anal area, including childbirth or surgery, can damage tissue and create a pathway for fistula development.</p>
                            <p class="desc"> <strong class="jaun-str">Sexually transmitted infections (STIs): </strong><br>Certain STIs, like chlamydia or gonorrhea, can spread to the anal area and cause abscesses that lead to fistulas.</p>


                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Seeking the Right Path: A Specialist's Touch at GEM Hospital
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> While the causes of anal fissures and perianal fistulas may seem daunting, GEM Hospital's team of experienced specialists is here to guide you towards healing. Our compassionate doctors offer comprehensive diagnosis, treatment options tailored to your specific needs, and ongoing support to ensure your comfort and well-being.
                                        </p>
                                        <p class="desc jaun-desc"> Don't let the whispers of pain turn into a deafening roar. Book your appointment at GEM Hospital today and take the first step towards a brighter, pain-free future.
                                        </p>
                                        <p class="desc jaun-desc"> Remember, at GEM Hospital, we listen to the whispers and offer the light of healing.

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

                <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Diagnosing Fissure</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">
                                <p class="paragraph gre jaun-head2">
                                    Unveiling the culprits behind your discomfort: GEM Hospital's expertise in precise diagnosis.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>




                            </div>




                            <h6 class="paragraph gre jaun-head2">
                                Anal Fissures: The Burning Tear
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>
                            <p class="desc ">Imagine a paper cut, but in the delicate lining of your anal canal. That's essentially what an anal fissure is – a small tear in the sensitive tissue. While seemingly minor, fissures can cause intense burning pain, especially during bowel movements. </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/AnalFissuresDiagnosis.png') ?>" alt="Diagnosing-Fissure" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">Medical history and physical examination:</strong><br>Our doctors will discuss your symptoms and gently examine the anal area to identify the fissure and its location.</p>
                            <p class="desc"> <strong class="jaun-str">Anoscopy: </strong><br> A small, lubricated tube with a light source allows for a closer look at the anal canal and confirmation of the fissure.</p><br>

                            <h6 class="paragraph gre jaun-head2">
                                Perianal Fistulas: The Tunnel Troublemakers
                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                            </h6>
                            <p class="desc "> Unlike fissures, perianal fistulas are not tears, but rather abnormal tunnels that develop between the anal canal and the skin around the anus. These tunnels can be caused by infected anal glands or abscesses, and often drain pus or blood. </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/PerianalFistulas.png') ?>" alt="Diagnosing-Fissure" class="mob" />
                            </div>

                            <p class="desc"> <strong class="jaun-str">Physical examination:</strong><br>Similar to fissure diagnosis, a gentle examination will be conducted to identify the opening of the fistula.</p>
                            <p class="desc"> <strong class="jaun-str">Fistula probing: </strong><br> A thin probe is gently inserted into the fistula opening to trace its path and determine its complexity.</p>
                            <p class="desc"> <strong class="jaun-str">Imaging tests: </strong><br>In some cases, additional tests like an ultrasound or MRI may be needed to map the exact course of the fistula, especially if it's complex</p>



                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph jaun-head2">
                                            Don't let discomfort hold you back. Book an appointment with our anal fissure and perianal fistula specialists at GEM Hospital today and take the first step towards a brighter, pain-free future.
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Remember, early diagnosis is key to effective treatment. Don't hesitate to seek help.
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


                                <h2 class="heading-title">Treating Fissures</h2>
                                <h6 class="paragraph gre jaun-head2">
                                    Treating Anal Fissures at GEM Hospital
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">

                            <p class="desc "> <strong>Unlocking Relief Through Expert Care</strong> </p><br>

                            <p class="desc"> <strong class="jaun-str">Tailored Treatment Plans:</strong> Our specialists at GEM Hospital craft personalized treatment strategies for anal fissures, addressing individual needs with precision. </p>

                            <p class="desc"> <strong class="jaun-str">Cutting-edge Procedures: </strong>Benefit from the latest medical advancements as our skilled doctors employ state-of-the-art techniques for effective and minimally invasive treatment.</p>
                            <p class="desc"> <strong class="jaun-str">Holistic Healing Approach: </strong><br>Beyond symptom management, GEM Hospital emphasizes overall well-being, ensuring a comprehensive approach to your recovery journey.</p>
                            <p class="desc"> <strong class="jaun-str">Patient-Centric Care: </strong> Experience compassionate care designed around your comfort, with a focus on open communication and patient involvement in decision-making.
                            </p>
                            <div>
                                <img src=" <?= base_url('frontend/assets/images/background/TreatingAnalFissures.png') ?>" alt="treatment-for-fissure" class="mob" />
                            </div>
                            <p class="desc"> <strong class="jaun-str">Post-Treatment Support: </strong><br> GEM Hospital remains committed to your health beyond the treatment phase, providing ongoing support and guidance for a sustained recovery.
                            </p> <br>


                            <div class="heading">
                                <h6 class="paragraph gre jaun-head2">
                                    Managing Perianal Fistulas with GEM's Expertise
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6><br>
                                <p class="desc "> <strong>Your Partner in Perianal Health</strong> </p>




                            </div>

                            <p class="desc"> <strong class="jaun-str">Specialized Fistula Management:</strong> GEM Hospital's renowned specialists bring unparalleled expertise to the management of perianal fistulas, ensuring a thorough and effective approach.</p>

                            <p class="desc"> <strong class="jaun-str">Collaborative Treatment Planning: </strong>Work hand-in-hand with our medical experts to create a customized plan that aligns with your specific condition, ensuring optimal results.</p>
                            <p class="desc"> <strong class="jaun-str">Advanced Surgical Interventions: </strong><br> Rely on GEM Hospital's skilled surgeons who employ advanced surgical techniques for precise and successful perianal fistula management.</p>
                            <p class="desc"> <strong class="jaun-str">Holistic Wellness Integration:</strong>Beyond medical interventions, GEM Hospital integrates holistic wellness practices into the management plan for a well-rounded approach to perianal health.
                            </p>





                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't Let Fissure Steal Your Shine - Book Your Appointment Now!
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> Take the first step towards relief by scheduling a consultation with our dedicated specialists. Book an appointment now to receive expert guidance and embark on your journey to recovery.
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


                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Preventing Fissure</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2">
                                    Jaundice, a yellowing of the skin and eyes in newborns, can be a worrying sight for new parents. But fear not! By taking proactive steps during pregnancy and beyond, you can significantly reduce the risk of your baby facing this common challenge.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>




                        </div>
                </section>
                <section class="blog blog-grid blog-grid-3 jaun-sec6" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title care jaun-head3">Anal Fissures: The Tiny Tears</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class=" gre jaun-head2">
                                    Imagine a small, painful tear in the delicate lining of your anus. That's an anal fissure, often caused by constipation, straining during bowel movements, or chronic diarrhea. While seemingly minor, these fissures can pack a punch, causing sharp pain, bleeding, and itching.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>
                            <p class="desc"> <strong class="jaun-str">Embrace Fiber:</strong> A diet rich in fruits, vegetables, and whole grains keeps stool soft and passage smooth, reducing strain.</p>

                            <p class="desc"> <strong class="jaun-str">Hydration is Key:</strong>Water keeps things moving and prevents constipation, a major fissure culprit.</p>
                            <p class="desc"> <strong class="jaun-str">Listen to Your Body:</strong>Don't ignore the urge to go, and avoid straining during bowel movements.</p>
                            <p class="desc"> <strong class="jaun-str">Sitz Baths: </strong>Warm water soaks can soothe inflamed tissues and promote healing.</p>
                            <p class="desc"> <strong class="jaun-str">Gentle Touch: </strong>Avoid harsh soaps and wiping, and pat dry gently after using the restroom.</p>





                        </div>
                </section>
                <style>
                    .jaun-sec9 {
                        margin-top: -80px;
                    }

                    @media screen and (max-width:600px) {
                        .jaun-sec9 {
                            margin-top: -30px;
                        }
                    }
                </style>


                <section class="blog blog-grid blog-grid-3 jaun-sec9" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title care jaun-head3">Perianal Fistulas: Tunnels of Trouble</h2>
                            </div>
                        </div>
                    </div>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">



                                <p class="gre jaun-head2">
                                    When an untreated anal fissure becomes infected, it can burrow deeper, creating a tunnel called a perianal fistula. These fistulas can be a source of chronic pain, discharge, and even abscesses.
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </p>
                            </div>
                            <p class="desc"> <strong class="jaun-str">Early Intervention:</strong> Prompt treatment of anal fissures can prevent fistula formation.</p>

                            <p class="desc"> <strong class="jaun-str">Hydration is Key:</strong>Water keeps things moving and prevents constipation, a major fissure culprit.</p>
                            <p class="desc"> <strong class="jaun-str">Hygiene Matters:</strong>Maintain good anal hygiene to prevent infections.</p>
                            <p class="desc"> <strong class="jaun-str">Regular Checkups:</strong>Schedule regular checkups with your doctor for early detection and treatment of any fissures or fistulas.</p>






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


                            <p class="desc">Gem hospital & its doctors have performed the largest numbers of ligation of intersphincteric fistula tract(LIFT) surgery in the country</p>

                            <p class="desc">Gem hospital has reported the lowest recurrence rates across continents</p>
                            <p class="desc">Comprehensive fistula care involving treatment and reducing further recurrence</p>

                            <div class="row jaun-div3">
                                <div class="col-12">
                                    <div class="heading">


                                        <h6 class="paragraph gre jaun-head2">
                                            Don't let discomfort hold you back. Book an appointment today with our specialists at GEM Hospital and take control of your anal health.
                                            <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                        </h6>
                                        <p class="desc jaun-desc"> At GEM Hospital, our experienced specialists understand the discomfort and challenges associated with anal fissures and perianal fistulas. We offer comprehensive treatment options, from conservative measures to minimally invasive procedures, to help you find relief and regain your well-being.

                                        </p>
                                        <p class="desc jaun-desc"> Remember, prevention is always better than cure. By incorporating these simple tips into your daily routine, you can significantly reduce your risk of developing anal fissures and perianal fistulas.

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
                                        Speech About Fissure</h6>
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
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">1. How Long is the Recovery for Anal Fissures and Perianal Fistulas?</a></div>
                            <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                <div class="card-body color-heading">Recovery varies; mild cases may improve in weeks, while severe cases may need prolonged treatment. Consult your healthcare provider for personalized information.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">2. Hospital Stay for Anal Fissures and Perianal Fistulas?</a></div>
                            <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                <div class="card-body color-heading">Hospitalization duration depends on severity. Mild cases may not need admission, while severe cases require close monitoring and treatment. Consult your healthcare provider for details</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link  collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">3. Is Ignoring Anal Fissures and Perianal Fistulas Dangerous?</a></div>
                            <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                                <div class="card-body color-heading">Ignoring these conditions can lead to complications. Timely medical attention is crucial for accurate diagnosis and effective treatment to prevent worsening symptoms and issues.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-4" href="#collapse01-4">4. Are there home remedies for managing symptoms of Anal Fissures and Perianal Fistulas?</a></div>
                            <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                                <div class="card-body color-heading">While medical treatment is essential, lifestyle changes and dietary adjustments may aid healing. Consult your healthcare provider for guidance on complementary measures.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-5" href="#collapse01-5">5. When to Seek Medical Attention for Anal Fissures and Perianal Fistulas?</a></div>
                            <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                                <div class="card-body color-heading">If you experience persistent pain, bleeding, or discomfort in the anal area, consult a healthcare professional promptly. Early detection and intervention enhance treatment outcomes.</div>
                            </div>
                        </div>

                    </div>

                </div>-



            </div>

        </div>
    </div>
    </div>
    </div>
</body>





<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>