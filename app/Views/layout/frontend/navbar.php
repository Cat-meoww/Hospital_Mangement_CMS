<nav class="navbar navbar-expand-xl navbar-sticky" id="primary-menu">
    <a class="navbar-brand border-0" href="<?= base_url('') ?>"><img class="logo logo-dark" src="<?= base_url('frontend/assets/images/favicon/Desktop_GEM_logo.svg') ?>" alt="" /><img class="logo logo-mobile" src="<?= base_url('frontend/assets/images/favicon/photo1699001614.jpeg') ?>" alt="Medisch Logo" /></a>
    <div class="module-holder module-holder-phone">
        <!--  Start Module Search  -->
        <div class="module module-search float-left">
            <div class="module-icon search-icon">
                <i class="icon-search" data-hover=""></i>
            </div>
        </div>
        <!--  End .module-search-->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav">
            <li class="nav-item" data-hover="" id="contact">
                <a href="<?= base_url('home') ?>"><span>Home</span></a>
            </li>
            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>About</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="<?= base_url('aboutus') ?>"><span>About Us</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('chairman') ?>"><span>About Founder</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('') ?>"><span>About Management</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>specialities</span></a>
                <ul class="dropdown-menu nav-ser" style="display: flex; flex-direction:row; gap:2px; width:600px; " >
                    <ul class="col-6 ">
                        <li class="nav-item ">
                            <a href="<?= base_url('services/esophago-gastric-surgery') ?>"><span>Esophago Gastric Surgery</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/colorectal-surgery') ?>"><span>colorectal surgery</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/liver-pancreas') ?>"><span>liver & pancreas</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/medical-gastroenterology') ?>"><span>Medical Gastroenterology</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/endogynecology') ?>"><span>endogynecology</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/obesity-diabetes') ?>"><span>obesity & diabetes</span></a>
                        </li>
                    </ul>
                    <ul class="col-6">
                        <li class="nav-item ">
                            <a href="#"><span>hernia care</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/digestive-cancer-care') ?>"><span>digestive cancer care</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/multi-organ-transplant') ?>"><span>multi organ transplant</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/cardiology') ?>"><span>cardiology</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/nephrology') ?>"><span>nephrology</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('services/urology') ?>"><span>urology</span></a>
                        </li>
                    </ul>
                </ul>
            </li>
            <style>
                @media screen and (max-width:600px) {
                    .nav-ser{
                        display:flex ; flex-direction:column;  width:200px;

                    }

                    
                }
            </style>
            <li class="nav-item" data-hover="" id="contact">
                <a href="<?= base_url('health-package') ?>"><span class="text-truncate">health package</span></a>
            </li>
            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Academics</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="<?= base_url('mgr') ?>"><span>MGR University</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('nbe') ?>"><span>NBE</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Doctors</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Coimbatore</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Chennai - Perungudi</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Chennai - Aminjikarai</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Tiruppur</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Pondicherry</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Erode</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('doctorinfo') ?>"><span>Thrissur</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Our Centers</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>"><span>Coimbatore</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://chennai.gemhospitals.com"><span>Chennai - Perungudi</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://aminjikarai.gemhospitals.com/"><span>Chennai - Aminjikarai</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://tiruppur.gemhospitals.com/"><span>Tiruppur</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://pondicherry.gemhospitals.com/"><span>Pondicherry</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://erode.gemhospitals.com/"><span>Erode</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://gemhospitalthrissur.in/"><span>Thrissur</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-dropdown" data-hover="">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Contact Us</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="<?= base_url('contactus') ?>"><span>contact</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('career') ?>"><span>career</span></a>
                    </li>

                </ul>
            </li>


        </ul>
        <div class="module-holder  border-0">
            <!--  Start Module Search  -->

            <!--  End .module-search-->
            <!-- Start .module-contact-->
            <div class="module-contact">
                <a class="btn btn--secondary" href=""></a><a class="btn btn--primary btn-line btn-line-after" href="<?= base_url('appointment/book-appointment') ?>">
                    <span>make appointment</span><span class="line"> <span></span></span></a>
            </div>
        </div>
        <!--  End .module-holder-->
    </div>
    <!--  End .navbar-collapse-->
</nav>