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

    .contactForm {
        margin-top: -20px !important;
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
        margin-top: -40px;
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

                        <img src=" <?= base_url('frontend/assets/images/team/grid/') ?>" />

                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h2 class="slide-headline her-head">
                                        Urology Treatment - A Guide to Urology at GEM Hospital</h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="slide-desc her-para">Your urinary system – a silent workhorse silently filtering waste and maintaining balance.
                                        But when things go awry, consulting a urologist at GEM Hospital can rewrite the narrative. </p>
                                    <div class="col-12 chair-bread">
                                        <ol class="breadcrumb d-flex justify-content-center fo-si ">
                                            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                                            <li class=""><a href="<?= base_url('urology') ?>">Urology</a></li>
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
                                    What is Urology?
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;
                                Urology, a branch of medicine dedicated to the urinary tract and male reproductive system, delves into the intricate workings of these vital organs. From addressing everyday concerns like urinary tract infections to managing complex conditions like kidney
                                stones and prostate cancer, urologists at GEM Hospital are your partners in ensuring optimal urinary and reproductive health.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Diagnosis:</strong><br> Cutting-edge diagnostics at Gem Hospital ensure accurate identification of urological issues, guiding personalized treatment plans for optimal patient care </p>
                            <p class="desc"> <strong class="jaun-str">Treatment:</strong><br>Gem Hospital excels in advanced urological treatments, offering innovative solutions for conditions, ensuring effective care and improved quality of life. </p>
                            <p class="desc"> <strong class="jaun-str">After Treatment Care:</strong><br>Post-urology treatment at Gem Hospital involves comprehensive aftercare, fostering a smooth recovery journey with expert guidance and continuous support for patients' well-being. </p>
                            <p class="desc"> <strong class="jaun-str">Patient Support:</strong><br>Gem Hospital prioritizes patient support, providing a caring environment where individuals receive not only top-notch urological care but also emotional support throughout their health journey.</p>




                        </div>

                    </div>
                </div>
                <section class="blog blog-grid blog-grid-3 jaun-sec3" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Common Urological Conditions We Tackle at GEM Hospital
                                </h2>
                            </div>
                        </div>
                    </div>


                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <p class="desc"> <strong class="jaun-str">
                                    Urinary Tract Infections (UTIs):</strong><br>These bacterial invaders wreak havoc on the bladder and urethra, causing burning pain, frequent urination,
                                and blood in urine. Our urologists diagnose and treat UTIs effectively, preventing complications.
                            </p>
                            <p class="desc"> <strong class="jaun-str">
                                    Kidney Stones:</strong><br>Hard-mineral deposits forming in the kidneys can be excruciatingly painful. At GEM Hospital,
                                we offer advanced techniques like minimally invasive surgery and shockwave lithotripsy to pulverize and eliminate these stones.
                            </p>
                            <div>


                                <p class="desc"> <strong class="jaun-str">
                                        Prostate Issues:</strong><br> Enlarged prostate or prostate cancer can significantly impact men's health. Our urologists offer a range of treatment options,
                                    including medication, minimally invasive procedures, and robot-assisted surgery, to address these concerns
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
                            <div class="col-12 col-lg-12 ">
                                <div class="heading heading-7 text-center">


                                    <h2 class="heading-title">Advanced Urological Treatments at GEM Hospital</h2>
                                </div>
                            </div>
                        </div><br>


                        <!-- End .row-->

                        <div class="row ">
                            <div class="col-12 ">
                                <div class="heading">
                                    <p class="desc">GEM Hospital embraces cutting-edge
                                        technology and minimally invasive techniques to ensure the best possible outcomes for our patients. Some of our advanced urological treatments include:</p>
                                    <!----<h6 class="paragraph gre jaun-head2" >
                                            Common Whispers of Pancreatic Cancer:
                                        </h6><br>--->
                                    <p class="desc"> <strong class="jaun-str">
                                            Robotic-Assisted Surgery:</strong> Utilizing the precision and dexterity of robotic arms,
                                        our surgeons perform complex procedures with minimal scarring and faster recovery times.
                                    </p>
                                    <p class="desc"> <strong class="jaun-str">
                                            Laser Treatment: </strong>For conditions like kidney stones and BPH (benign prostatic hyperplasia), laser therapy offers a minimally invasive and effective solution.
                                    </p>
                                    <p class="desc"> <strong class="jaun-str">
                                            Holmium Laser Enucleation of the Prostate (HoLEP):</strong> This minimally invasive procedure
                                        utilizes a holmium laser to remove excess prostate tissue, offering a bloodless and tissue-preserving alternative to traditional surgery.
                                    </p>
                                </div>

                                <h6 class="paragraph gre jaun-head2">
                                    Innovative Approaches in Urology Treatment</h6>
                                <p class="desc">GEM Hospital actively participates in clinical trials and research,
                                    staying at the forefront of groundbreaking urological advancements. Some of the innovative approaches we are exploring include:</p>
                                <p class="desc"> <strong class="jaun-str">
                                        Gene Therapy: </strong>This revolutionary technique holds promise for treating urological cancers and genetic disorders.
                                </p>
                                <p class="desc"> <strong class="jaun-str">
                                        Personalized Medicine:</strong>Tailoring treatment plans based on individual genetic makeup and disease characteristics for optimal outcomes.
                                </p>
                                <p class="desc"> <strong class="jaun-str">
                                        Stem Cell Therapy:</strong> Regenerative medicine using stem cells offers potential for treating a variety of urological conditions.
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
                                <section class="blog blog-grid blog-grid-3 jaun-sec2" id="blog-2">
                                    <div class="col-12 ">
                                        <div class="heading ">
                                            <h6 class="heading-title">
                                                What are Minimally Invasive Urological Procedures?
                                                <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                            </h6>
                                        </div><br>
                                        <div class="heading">
                                            <h6 class="paragraph gre jaun-head2">
                                                Minimally invasive urology utilizes specialized instruments
                                                and techniques to access and treat urological conditions through small incisions or natural openings. This translates to:
                                            </h6>
                                        </div>

                                        <p class="desc">&bull; Reduced scarring compared to traditional open surgery.</p>
                                        <p class="desc">&bull; Shorter hospital stays and faster recovery times.</p>
                                        <p class="desc">&bull; Less pain and discomfort during and after the procedure.</p>
                                        <p class="desc">&bull; Faster return to normal activities.</p>

                                    </div>
                                </section>



                            </div>
                        </div>

                </section>


                <section class="blog blog-grid blog-grid-3 jaun-sec4" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 ">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">GEM Hospital: Your One-Stop Shop for Urological Care
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">
                                <h6 class="paragraph gre jaun-head2">
                                    We are proud to offer a wide range of minimally invasive procedures for various urological conditions, including:
                                    <!---We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with injuries.--->
                                </h6>
                            </div>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Kidney stone removal:</strong><br> Through techniques like ureteroscopy and percutaneous nephrolithotomy, we can remove kidney stones with minimal impact.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Bladder cancer treatment: </strong><br> We offer minimally invasive options like transurethral resection of bladder tumors (TURBT) for early-stage bladder cancer.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Prostate surgery:</strong><br>Minimally invasive options like robotic-assisted laparoscopic prostatectomy (RALP) offer precise prostate removal with quicker recovery.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Urinary incontinence treatment:</strong><br> Procedures like botox injections and sling procedures can address incontinence concerns effectively.
                            </p>


                            <h6 class="paragraph gre jaun-head2">Comprehensive Expertise Awaits</h6>
                            <h6 class="paragraph jaun-head2 pre">Our dedication to urological care extends beyond just procedures. We offer:</h6>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Experienced urology specialists:</strong><br> Our team of highly qualified urologists possess extensive expertise
                                in diagnosing and treating a wide range of urological conditions.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Advanced diagnostic techniques:</strong><br> We utilize cutting-edge technology
                                like cystoscopy, urodynamics, and imaging tests to provide accurate diagnoses and guide treatment decisions.
                            </p>
                            <p class="desc">&bull;<strong class="jaun-str">
                                    Compassionate and personalized care:</strong><br> We understand the sensitive nature of urological
                                concerns and prioritize patient comfort and well-being throughout the treatment journey.
                            </p>
                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">
                                        <h6 class="paragraph jaun-head2">
                                            Ready to Take the Next Step? Book Your Appointment Today!
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


                                <h2 class="heading-title">Diagnostic Techniques in Urology
                                </h2>
                            </div>
                        </div>
                    </div><br>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">

                                <p class="desc">Accurate diagnosis is the foundation for successful treatment.
                                    GEM Hospital is equipped with state-of-the-art diagnostic tools and technologies, including:</p>
                            </div>

                            <p class="desc"><strong class="jaun-str">Ultrasound:</strong>This painless imaging technique provides detailed visualization of the urinary tract organs.
                            </p>

                            <p class="desc"> <strong class="jaun-str">Cystoscopy:</strong>A thin tube with a camera allows for direct examination of the bladder and urethra.
                            </p>
                            <p class="desc"> <strong class="jaun-str">Urodynamic studies:</strong>These tests assess bladder function and identify any underlying issues.
                            </p>



                            <p class="desc">
                                <strong class="jaun-str">Reconstructive Urology:</strong> Reclaiming Your Quality of Life
                            </p>
                            <p class="desc">Whether you're facing challenges due to congenital anomalies, trauma, or disease, our reconstructive urology specialists offer expert solutions to restore function and confidence. We leverage the latest advancements in minimally invasive techniques and personalized treatment plans to optimize outcomes and minimize recovery times.
                                Whether it's reconstructing the urinary tract or enhancing sexual function, our goal is to empower you to reclaim your full potential.
                            </p>
                            <p class="desc">
                                <strong class="jaun-str">Urological Surgery:</strong> Precision You Can Trust
                            </p>
                            <p class="desc">
                                When surgery is the best course of action, GEM Hospital's team of urological surgeons brings precision and excellence to the forefront. With extensive experience and unwavering dedication to patient safety, they utilize the most advanced technologies and minimally invasive approaches to deliver optimal results.
                                From delicate bladder procedures to complex kidney cancer surgery, our surgeons perform every operation with meticulous care and unwavering commitment to your well-being.
                            </p>

                            <p class="desc"><strong class="jaun-str">Your Journey Begins Here</strong></p>
                            <p class="desc">Don't let urological concerns hold you back from living a full and vibrant life. At GEM Hospital, we offer a comprehensive spectrum of urological services, personalized to your unique needs. By combining a patient-centric approach with surgical
                                expertise and cutting-edge technology, we empower you to reclaim your well-being and embrace a future of renewed confidence.</p>
                        </div>
                        <div class="row jaun-div4">
                            <div class="col-12">
                                <div class="heading">
                                    <h6 class="paragraph jaun-head2">
                                        Book your appointment today and take the first step towards a healthier, happier you.
                                    </h6><br>
                                    <p class="desc">Remember, you are not alone. GEM Hospital is your partner in every step of your urological health journey.</p>
                                    <div class="col-6">

                                        <a class="btn btn--primary btn-line btn-line-before btn--block mt-3 bts" href="#service-booking-form"> <span class="line">
                                                <span></span></span><span>Book Appointment Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="blog blog-grid blog-grid-3 jaun-sec5" id="blog-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 offset-lg-0">
                            <div class="heading heading-7 text-center">


                                <h2 class="heading-title">Your Guide to Urological Care at GEM Hospital
                                </h2>
                            </div>
                        </div>
                    </div><br>



                    <!-- End .row-->

                    <div class="row ">
                        <div class="col-12 ">
                            <div class="heading">
                                <p class="desc">
                                    Specialized Consultations, Pediatric Expertise, and Preventive Insights.
                                </p>
                                <p class="desc">Maintaining optimal urinary health is crucial for overall well-being. At GEM Hospital, we understand
                                    the importance of addressing urological concerns with sensitivity, expertise, and a comprehensive approach.
                                </p>
                            </div>

                            <p class="desc"> &bull; <strong class="jaun-str">Early Detection and Prevention:</strong> Key to Urological Wellness</p>
                            <p class="desc">Proactive urological care forms the cornerstone of good health.
                                Regular check-ups and open communication with your doctor can help identify potential issues early, when they're often easier to manage.</p>
                            <p class="desc"> &bull; In-Depth Consultations with GEM's Urology Specialists</p>
                            <p class="desc">Our team of experienced urologists is dedicated to providing personalized care, tailored to your unique needs.
                                We conduct thorough consultations, employing advanced diagnostic tools and techniques to get to the root of your urological concerns.</p>
                            <p class="desc"> &bull; <strong class="jaun-str">Pediatric Urology:</strong> Specialized Care for Little Ones </p>
                            <p class="desc">When it comes to children's urinary health, specialized care is essential. Our pediatric urologists have extensive
                                experience in addressing urological issues in children, ensuring your child receives the gentlest and most effective treatment.</p>
                            <p class="desc"> &bull; <strong class="jaun-str"> Beyond Diagnostics:</strong> Treatment Options at GEM Hospital</p>
                            <p class="desc">We offer a wide range of urological treatment options, from minimally invasive procedures to advanced surgical interventions.
                                Our focus is on providing minimally invasive solutions whenever possible, ensuring faster recovery times and reduced discomfort.</p>

                            <p class="desc"> &bull; <strong class="jaun-str"> GEM Hospital: </strong> Your Partner in Urological Health</p>
                            <p class="desc">At GEM Hospital, we believe in a patient-centric approach to urological care. We prioritize clear communication,
                                answer your questions with empathy, and involve you in every step of the treatment journey.</p>
                            <div class="row jaun-div4">
                                <div class="col-12">
                                    <div class="heading">
                                        <h6 class="paragraph jaun-head2">
                                            Book an Appointment Today:
                                        </h6>
                                        <p class="desc">Don't let urological concerns impact your quality of life.
                                            Take the first step towards optimal urinary health by booking an appointment with our expert urologists at GEM Hospital. We're here to support you on your journey to complete urological well-being.</p>
                                        <p class="desc">Remember, early detection and intervention are key to managing urological issues effectively.
                                            Don't hesitate to reach out to our experienced team at GEM Hospital. We're here to help! </p>

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
                                        Speech About Jaundice</h6>
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
                          role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">1. How Long is Urology Recovery?</a></div>
                      <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                        <div class="card-body color-heading">Recovery duration varies. Mild urological issues may resolve with lifestyle changes, while complex conditions may require ongoing management. Consult your urologist for personalized recovery expectations.</div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                          role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">2. Hospital Stay for Urological Procedures?</a></div>
                      <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                        <div class="card-body color-heading">Hospitalization depends on the procedure's complexity. Minor interventions may be outpatient, while major surgeries may require a hospital stay. Your urologist will provide specific details based on your case.</div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-heading"><a class="card-link  collapsed" data-hover="" data-bs-toggle="collapse" role="button"
                          aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">3. Is Ignoring Urological Symptoms Dangerous?</a></div>
                      <div class="collapse " id="collapse01-3" data-bs-parent="#accordion03">
                        <div class="card-body color-heading">Ignoring urological symptoms may lead to complications. Addressing issues like urinary changes, pain, or infections promptly ensures optimal urological health. Consult a urologist for proper evaluation and guidance.</div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                          role="button" aria-expanded="false" aria-controls="collapse01-4" href="#collapse01-4">4. Are there Home Remedies for Managing Urological Symptoms?</a></div>
                      <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                        <div class="card-body color-heading">While professional guidance is essential, certain lifestyle changes may complement urological care. Hydration, dietary adjustments, and pelvic exercises can contribute to symptom management. Consult your urologist for a personalized plan.</div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse"
                          role="button" aria-expanded="false" aria-controls="collapse01-5" href="#collapse01-5">5. When to Seek Medical Attention for Urological Issues?</a>
                      </div>
                      <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                        <div class="card-body color-heading">If you experience persistent pain, changes in urinary patterns, or discomfort, consult a urologist. Early intervention enhances the success of urological treatments.</div>
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