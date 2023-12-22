<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
    .owl-item>.slide {
        background-position-y: center !important;
    }

    .blog-img {
        height: 210px !important;
        width: 500px !important;
        object-fit: cover;
        view-transition-name: blog-image;
    }

    .blog-para {
        color: #118b0f !important;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        /* number of lines to show */
        line-clamp: 4;
        -webkit-box-orient: vertical;
        height: 7em;
        text-overflow: ellipsis;
    }

    .blog-heading {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        /* number of lines to show */
        line-clamp: 1;
        -webkit-box-orient: vertical;
        height: 1.5em;
        text-overflow: ellipsis;
    }

    .page-item.active .page-link {
        background-color: #0d3e21 !important;
        border-color: #198754;
    }

    .pagination li a,
    .pagination li span {
        border: none;
        color: white;
    }

    .pagination li.disabled span {
        background-color: #b3b3b3 !important;
        border: none;
    }
</style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="<?= base_url("frontend/assets/images/page-titles/s1.png") ?>" alt="background" />
    </div>
    <div class="container">
        <div class="hero-content" style="padding-bottom: 30px !important">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="hero-title text-center" style="margin-top: 60px; margin-bottom:60px !important">
                        our blog
                    </h2>

                    <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                </div>
                <div class="col-12" style="margin-top: 30px">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                        <li class=""><a href="">Blogs</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>



p
<section class="blog blog-grid" id="blog">
    <div class="container">
        <div class="row">


            <?php foreach ($listings as $listing) : ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog-entry " data-hover="">
                        <div class="entry-img">
                            <a href="<?= base_url("blog/$listing->slug") ?>"><img src="<?= base_url("uploads/blogs/$listing->hero_image") ?>" loading="lazy" alt="<?= $listing->heading ?>" class="blog-img" /></a>
                        </div>

                        <div class="entry-content">

                            <div class="entry-title">
                                <h4>
                                    <a class="blog-heading" href="<?= base_url("blog/$listing->slug") ?>"><?= esc($listing->heading) ?></a>
                                </h4>
                            </div>
                            <div class="entry-bio">
                                <p class="blog-para">
                                    <?= esc($listing->meta_description) ?>
                                </p>
                            </div>
                            <div class="entry-more">
                                <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url("blog/$listing->slug") ?>">
                                    <div class="line"><span> </span></div>
                                    <span>read more</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>


            <div class="row">


                <?= $pager_links ?>


            </div>

        </div>

</section>


<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->endSection() ?>