<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ayman Fikry" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Home Gem Hospital" />
    <title><?= $title ?> - Gem Hospital</title>
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
        .nav-img {
            object-fit: cover;
            width: 100px;
        }
    </style>
    <?= $this->renderSection('header') ?>


</head>

<body>
    <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!--<div class="cursor">
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
            </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
            <!-- End .module-cancel-->
        </div>
        <!--End pos-vertical-center-->
        <!--
      ============================
      Header #06
      ============================
      -->
        <header class="header header-light header-topbar header-topbar5" id="navbar-spy">



            <nav class="navbar justify-content-between navbar-expand-xl navbar-sticky" id="primary-menu">
                <a class="border-0" href="<?= base_url('') ?>"><img class="logo logo-dark" src="<?= base_url('frontend/assets/images/favicon/photo1699001614.jpeg') ?>" alt="" class="nav-img" /><img class="logo logo-mobile" src="<?= base_url('frontend/assets/images/favicon/photo1699001614.jpeg') ?>" alt="Medisch Logo" /></a>

                <div class="d-flex gap-5 ">
                    <div class="d-flex flex-column gap-3">
                        <h5 class="fw-bold m-0">Chennai</h5>
                        <h6 class="m-0">+91 72006 05493</h6>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <h5 class="fw-bold m-0">Coimbatore</h5>
                        <h6 class="m-0">+91 91500 92609</h6>
                    </div>
                </div>
                <!--  End .navbar-collapse-->
            </nav>

        </header>

        <?= $this->renderSection('content') ?>

        <!--
      ============================
      Footer #01
      ============================
      -->
        <?= $this->include('layout/frontend/footer') ?>
        <div class="backtop" id="back-to-top" data-hover="">
            <svg class="bi bi-chevron-up" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                </path>

            </svg>
            <a class="share-whatsapp" id="floating" href="" style="background-color: green;"><i class="fab fa-whatsapp fab-icon"></i>
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                </path>
            </a>


        </div>






    </div>
    <!--  Footer Scripts==
    -->
    <script src="<?= base_url('frontend/assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('frontend/assets/js/vendor.min.js') ?>"></script>
    <script src="<?= base_url('frontend/assets/js/functions.js') ?>"></script>

    <?= $this->renderSection('footer') ?>
</body>

</html>