<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ayman Fikry" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <title>GEM Hospital Index</title>
    <link href="<?= base_url('frontend/assets/images/favicon/photo1699001614.jpeg') ?>" rel="icon" />
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <!--  Stylesheets==
    -->
    <link href="<?= base_url('frontend/assets/css/vendor.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('frontend/assets/css/style.css') ?>" rel="stylesheet" />
    <style>
        .slide {
            background-position: center !important;

        }

        .bg-section {
            height: 600px !important;
        }

        .square-img {
            aspect-ratio: 1/1;
            width: 100%;
            object-fit: cover;
        }

        .no-radius {
            border-bottom-right-radius: 0 !important;
        }
        
            .slide-content #img2 {
            color: white; font-size: 35px;
               

            }.slide-content #img3{
            color: white; font-size: 35px;
               

            }
            .slide-content #img1{
            color: white; font-size: 35px;
               

            }
           .land-img1{
            width: 150px;
           }
           #gem1{
            margin-top: 40px;
            width: 450px;

           }.land-para1{
            font-size: 24px !important;

           }.land-coim{
            background-color: #0d3e21; width: -webkit-fill-available; position: relative; border-color: #0d3e21;

           }.land-coim-head{
            font-size: 28px; color: white;
           }
           .land-coim-para{
            color: white;font-size: 16px;font-weight: lighter;
            }.land-coim-span1{
                font-size: 18px;color: #118b0f;

            }.land-coim-para1{
                color: white; font-size: 16px;  font-weight: lighter; text-align: end;
            }.land-coim-span2{
                font-size: 16px;color: white;
            }
            .land-head3{
                text-align: center;
            font-weight: bold;

            color: black;
            }.land-img3{
                width: 800px;
            }.land-div3{
                padding:10px 10px;text-align:center; color:white;
            }


            .img-slider:hover {
                            flex: 2 !important;
                            width: 30%;



                        }

                        .img-slider:hover .img-title {

                            position: absolute;
                            z-index: 2;
                            width: 100%;
                            height: 100%;
                            background-color: transparent;
                            background-image: linear-gradient(180deg, #f3b71a4f 0%, #004317de 100%);
                            color: white;
                            font-size: 22px;
                            top: 0;
                            left: 0;
                            opacity: 1;
                            display: flex;
                            text-align: center;
                        }

                        .img-title {
                            opacity: 0;
                            display: none;
                            transition: all .6s ease;
                            text-align: center;

                            align-items: center;
                            justify-content: center;
                            top: 100px;
                        }


                        .img-slider {
                            flex: 1;
                            width: 25%;
                            overflow: hidden;
                            transition: all 0.3s linear;
                            position: relative;
                        }




        @media screen and (max-width:600px) {
            .slide-content #img1 {
                font-size: 20px !important;
                margin-top: -20% !important;
                margin-right: 45% !important;

            }

            .slide-content #img2 {
                font-size: 20px !important;
                margin-top: -20% !important;
                margin-right: 40% !important;

            }

            .slide-content #img3 {
                font-size: 20px !important;
                margin-top: -15% !important;

                margin-right: 40% !important;

            }

            .slide {
                background-size: 800px !important;
            }

            .bg-section {
                height: 40vh !important;
            }

            #gem1 {
                width: 350px;
            }

            .team-cat1 {
                left: 90px;


            }
            .fa-arrow-right {
                                margin-left: -43px;
                                margin-top: 5px !important;
                                font-size: 15px !important;
                            }

                            .contact-para {
                                margin-left: -33px;
                                margin-top: 3px;
                                font-size: 12px;
                            }

                            .div-ex {

                                min-width: 105%;




                            }

        }
    </style>
</head>

<body>
    <!--<div class="preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <div class="cursor">
    <div class="cursor__inner cursor__inner--circle"></div>
    <div class="cursor__inner cursor__inner--dot"></div>
  </div>-->
    <!-- End .cursor-->
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
        <!--
      ============================
      Module Fullscreen
      ============================
      -->
        <div class="module-content module-fullscreen module-search-box">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="type words then enter" />
                                <button></button>
                            </form>
                            <!-- End .form-search -->
                        </div>
                        <!-- End .col-lg-8 -->
                    </div>
                    <!--  End .row-->
                </div>
                <!--  End .container-->
            </div>
            <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
            <!-- End .module-cancel-->
        </div>
        <!--End pos-vertical-center-->
        <!--
      ============================
      Header #02
      ============================
      -->

        <!--
      ============================
      Page Title #2 Section
      ============================
      -->
        <section class="slider slider-4" id="slider-4">
            <div class="container-fluid pr-0 pl-0">
                <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="80000" data-slider-id="#custom-carousel">
                    <!--  Start .slide-->
                    <div class="slide bg-overlay bg-overlay-dark-slider">
                        <div class="bg-section">
                            <img src="<?= base_url('frontend/assets/images/page-titles/coimbatore-gem-hospital-elevation.jpg') ?>" class="img-1" alt="Background" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="slide-content">
                                        <h1 class=""  id="img1">Welcome to the<br> Mecca of
                                            Laparoscopy!!!</h1>


                                    </div>
                                    <!-- End .slide-content -->
                                </div>
                            </div>

                            <!--  End .row-->
                        </div>
                    </div>
                    <!--  End .slide-->
                    <!--  Start .slide-->
                    <div class="slide bg-overlay bg-overlay-dark-slider">
                        <div class="bg-section">
                            <img src="<?= base_url('frontend/assets/images/page-titles/prof-c-palanivelu-gem.jpg') ?>" alt="Background" class="img-1" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="slide-content">
                                        <h3 class=""  id="img2">
                                            Professor C Palanivelu <br>Father Of Advanced Laparoscopy In India
                                        </h3>


                                    </div>
                                    <!-- End .slide-content -->
                                </div>
                            </div>
                            <!--  End .row-->
                        </div>
                    </div>
                    <div class="slide bg-overlay bg-overlay-dark-slider">
                        <div class="bg-section">
                            <img src="<?= base_url('frontend/assets/images/page-titles/laparoscopy.jpg') ?>" class="img-1" alt="Background" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="slide-content">
                                        <h1 class="" id="img3">
                                            Yes Is a Challenge!!!<br>Any Surgery Can Done By Laparoscopy
                                        </h1>


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
      Gallery Section
      ============================
      -->
        <section class="team team-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="heading heading-12 text-center">
                            <img src="<?= base_url('frontend/assets/images/favicon/tamil.jpeg') ?>"  class="land-img1"/>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="heading heading-12 text-center">
                            <img src="<?= base_url('frontend/assets/images/favicon/gem1.jpeg') ?>"  id="gem1" />

                        </div>
                    </div>
                    <div class="col-md-4  ">
                        <div class="heading heading-12 text-center">
                            <img src="<?= base_url('frontend/assets/images/favicon/geem.png') ?>"  class="land-img1" />

                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading heading-12 text-center">
                            <p class="heading-subtitle land-para1">Our Locations</p>
                            <h2 class="heading-title">Visit Your Preferred Location</h2>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/cbe.webp') ?>" class="square-img" alt="Coimbatore" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="strech-link" href="<?= base_url('coimbatore') ?>" title="Coimbatore"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim" >
                                <a href="<?= base_url('coimbatore') ?>" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head" >
                                            Coimbatore
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para" >
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span> RAMANATHAPURAM
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1" >
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2" ></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>



                            </div>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/hospital.webp') ?>" class="square-img" alt="Chennai" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://chennai.gemhospitals.com/" title="Chennai"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim"  >
                                <a href="https://chennai.gemhospitals.com/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Chennai
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para">
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                PERUNGUDI
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1" >
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2"></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>







                        </div>
                        <!-- End .team-img-->
                    </div>
                    <!-- End .team-member-holder-->

                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/aminjikarai.jpg') ?>" class="square-img" alt="Chennai" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://aminjikarai.gemhospitals.com/" title="Chennai"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim"  >
                                <a href="https://aminjikarai.gemhospitals.com/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Chennai
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para">
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                AMINJIKARAI
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1" >
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2"></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>








                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/branches/tiruppur.webp') ?>" class="square-img" alt="Tiruppur" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://tiruppur.gemhospitals.com/" title="tiruppur"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 land-coim div-ex"  >
                                <a href="https://tiruppur.gemhospitals.com/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Tiruppur
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para">
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                VEERAPANDI
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1" >
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2" ></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/pondy.webp') ?>" class="square-img" alt="Pondicherry" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://pondicherry.gemhospitals.com/" title="Pondicherry"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim" >
                                <a href="https://pondicherry.gemhospitals.com/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Pondicherry
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para">
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                NEAR KOKKU PARK
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1">
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2" ></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/gem-erode.png') ?>" class="square-img" alt="Erode" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://erode.gemhospitals.com/" title="Erode"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim" >
                                <a href="https://erode.gemhospitals.com/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Erode
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para" >
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                GANDHI NAGAR
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1">
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2" ></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>
                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 team-member">
                        <div class="team-member-holder" data-hover="">
                            <div class="team-img no-radius">
                                <img src="<?= base_url('frontend/assets/images/team/grid/gem-thrissur.jpg') ?>" class="square-img" alt="Thrissur" class="img-coim1" />


                                <div class="team-hover">
                                    <div class="team-action">
                                        <div class="team-zoom">
                                            <i class="far fa-eye"></i><a class="" href="https://gemhospitalthrissur.in/" title="Thrissur"></a>
                                        </div>
                                    </div>
                                    <!-- End .team-action -->
                                </div>
                                <!-- End .team-hover-->
                            </div>
                            <div class="row px-3 div-ex land-coim" >
                                <a href="https://gemhospitalthrissur.in/" class=" py-4">
                                    <div class="col-12 mb-2">
                                        <h2 class="mb-0 land-coim-head">
                                            Thrissur
                                        </h2>
                                    </div>
                                    <div class="col-12 d-flex flex-row justify-content-between">
                                        <div class=" flex-fill">

                                            <p class="m-0 text-truncate land-coim-para" >
                                                <span> <i class="fas fa-map-marker me-2 land-coim-span1"></i> </span>
                                                PARAVATHANI
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="d-flex flex-row m-0   text-truncate land-coim-para1" >
                                                <span> Contact Now</span>
                                                <span>
                                                    <i class="ms-2 fas fa-arrow-right land-coim-span2"></i>
                                                </span>
                                            </p>

                                        </div>
                                    </div>


                                </a>
                            </div>

                            <!-- End .team-img-->
                        </div>
                        <!-- End .team-member-holder-->
                    </div>


                    
                </div>


            </div>
        </section>


        <section class="team team-projects " id="teamProjects-2">
            <h3 class="land-head3">
                Asia's Largest<br />
                Gastroenterology & Laparoscopic Surgery Group
            </h3>
            <section class="p-0">
                <div class="d-flex flex-row">
                    <div class=" img-slider">
                        <a class="img-gallery-item " href="<?= base_url('frontend/assets/images/extra/icu-gem-hospital.jpg') ?>" title="OPD Waiting Area" data-hover=""></a>
                        <img src="<?= base_url('frontend/assets/images/extra/gym-gem-hospital.jpg') ?>" alt="GYM for Bariatric" class="land-img3"/>
                        <h1 class="img-title">
                            GYM for Bariatric
                        </h1>

                    </div>

                    <div class=" img-slider">
                        <a class="img-gallery-item" href="<?= base_url('frontend/assets/images/extra/icu-gem-hospital.jpg') ?>" title="OPD Waiting Area" data-hover=""></a>
                        <img class="land-img3" src="<?= base_url('frontend/assets/images/extra/icu-gem-hospital.jpg') ?>" alt="OPD Waiting Area" />
                        <h1 class="img-title">
                            Casuality
                        </h1>
                    </div>

                    <div class=" img-slider"><a class="img-gallery-item" href="<?= base_url('frontend/assets/images/extra/icu-gem-hospital.jpg') ?>" title="OPD Waiting Area" data-hover=""></a>
                        <img class="land-img3" src="<?= base_url('frontend/assets/images/extra/opd-waiting-area-gem-hospital.jpg') ?>" alt="Casuality" />
                        <h1 class="img-title">
                            OPD Waiting Area 
                        </h1>
                    </div>

                    <div class=" img-slider"><a class="img-gallery-item" href="<?= base_url('frontend/assets/images/extra/icu-gem-hospital.jpg') ?>" title="OPD Waiting Area" data-hover=""></a>
                        <img class="land-img3" src="<?= base_url('frontend/assets/images/extra/waiting-area-gem-hospital.jpg') ?>" alt="Reception" />
                        <h1 class="img-title">
                            Reception
                        </h1>
                    </div>

                </div>
            </section>

            <!-- End .carousel-->
        </section>

        <!--
      ============================
      Footer #01
      ============================
      -->
        <footer class="footer footer-1">

            <!--  End .footer-center-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div  class="land-div3">
                                <div class="copyright"><span>&copy; 2023 GEM HOSPITAL <a href=""></a> All Rights Reserved.
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  End .row-->
            </div>
            <!--  End .footer-bottom-->
        </footer>

        <div class="backtop" id="back-to-top" data-hover="">
            <svg class="bi bi-chevron-up" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                </path>
            </svg>
        </div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="<?= base_url('frontend/assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('frontend/assets/js/vendor.min.js') ?>"></script>
    <script src="<?= base_url('frontend/assets/js/functions.js') ?>"></script>
</body>

</html>