<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" />
    </div>
    <div class="container">
        <div class="hero-content pb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="hero-title text-center" style="margin-top: 60px">
                        Doctors in <?= $branch->name ?>
                    </h2>

                    <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                </div>
                <div class="col-12" style="margin-top: 30px">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class=""><a href="">Doctors</a></li>
                        <li class=""><a href=""><?= $branch->name ?></a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>





<div class="entry-contact container mt-5">
    <div class="contact-panel p-0 bg-overlay bg-overlay-theme3 row ">

        <form method="get" class="contact-card row  p-0">
            <div class="contact-body col-12 col-md-9">

                <div class="select-holder">
                    <?= form_dropdown('service', $services, $filter_service, 'class="form-control"'); ?>
                    <div class="badge">Select Specialization</div>
                </div>

            </div>
            <div class="col-12 col-md-3">

                <button class="btn btn--secondary w-100 " type="submit" style="height: 56px">Filter</button>

            </div>
            <!-- End .contact-body -->
        </form>

    </div>
    <!-- End .contact-panel-->
</div>


<section class="team team-grid mt-5 mt-md-0 pt-0" id="teamGrid">

    <div class="container">

        <div class="row" id="team-all">
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="team-member" data-hover="">
                        <div class="team-member-holder">
                            <div class="team-img"><a class="link" href="javascript:void(0)"></a><img src="<?= base_url("uploads/doctors/" . $doctor->image) ?>" alt="team member" />

                            </div>
                            <!-- End .team-img-->
                            <div class="team-content">
                                <div class="team-title">
                                    <h4><a href="javascript:void(0)"><?= $doctor->name ?></a></h4>
                                </div>
                                <div class="team-cat"><a href="javascript:void(0)"><?= $doctor->education ?><span class="mx-2">|</span> <?= $doctor->experience ?> years exp</a></a></div>
                                <div class="team-desc">
                                    <ul class="d-flex flex-column justify-content-start gap-2">
                                        <?php foreach (explode(',', $doctor->services) as $service) : ?>
                                            <li> <?= $services[$service] ?? "" ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="team-more"><a class="btn-line btn-line-inversed btn-line-before text-truncate" href="<?= base_url("doctor/" . $doctor->slug) ?>"> <span class="line"> <span></span></span><span>read more</span></a></div>
                            </div>
                            <!-- End .team-content -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    <!-- End .container-->
</section>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>