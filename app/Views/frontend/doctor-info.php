<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<link rel="stylesheet" href="<?= base_url('frontend/assets/css/ck-content.css') ?>">

<style>
    .doc {
        width: 250px;
        border-radius: 20px;
        object-fit: cover;
        aspect-ratio: 1/1;

    }
</style>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section"> <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" /></div>
    <div class="container">
        <div class="hero-content">



            <div class="row mt-0 mt-md-3 ">

                <div class="col-12 col-lg-9 mt-0 mb-3 mb-md-4 mt-md-5">
                    <h2 class="hero-title"><?= $doctor->name ?></h2>
                    <p class="hero-desc mb-1 fw-bold"><?= $doctor_role ?></p>
                    <p class="text-white fs-6 m-0"><?= $doctor->education ?></p>


                </div>

                <div class="col-12 col-lg-3 mb-5 mb-md-3 pb-md-0  d-flex justify-content-center">
                    <img alt="<?= $doctor->name ?>" src="<?= base_url("uploads/doctors/$doctor->image") ?>" class="doc" />

                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ol class="breadcrumb d-flex ol-list  ">
                        <li class="breadcrumb-item ol-list"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item ol-list"><a href=""><?= $doctor->name ?></a></li>
                    </ol>

                </div>

            </div>





        </div>
    </div>
</section>



<section class="single-service position-relative">
    <div class="container position-relative">

        <div class="row position-relative">
            <div class="col-12 col-lg-8 text-black">


                <?php if ($cms) : ?>
                    <h4 class="heading-title" style="text-align: left;font-size: 24px; font-weight: 1000;color:#0C1313;">
                        <?= $cms->heading ?></h4>
                    <div class="ck-content"><?= $cms->content ?></div>
                <?php endif; ?>


            </div>
            <div class="col-12 col-lg-4 position-relative">

                <div class="sidebar sidebar-service d-inline">
                    <div class="widget widget-services">
                        <div class="widget-title">
                            <h5 style="color:#0D3E21;">Contact Information</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href=""> <span class="line"> <span></span></span><span>Gem
                                            Hospital</span></a></li>
                                <li><a href=""> <span class="line">
                                            <span></span></span><span>9003932323</span></a></li>
                                <li><a href=""> <span class="line">
                                            <span></span></span><span>info@geminstitute.in</span></a></li>
                                <li><a href=""> <span class="line">
                                            <span></span></span><span>Video Consultation</span></a></li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>