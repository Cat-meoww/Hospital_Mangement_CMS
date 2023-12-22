<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<link rel="stylesheet" href="<?= base_url('frontend/assets/css/ck-content.css') ?>">
<style>
    .aspect-ratio-16-9 {
        position: relative;
        aspect-ratio: 16/9;
        width: 60vw;
        object-fit: cover;
        view-transition-name: blog-image;
    }

    @media only screen and (max-width: 800px) {
        .aspect-ratio-16-9 {
            width: 100%;
        }
    }

    .ck-content {
        color: black;
    }

    .blog-heading {
        font-size: 48px !important;
        line-height: 52px !important;
        letter-spacing: -0.03em !important;
        margin-bottom: 48px;
    }
</style>


<?= $this->endSection() ?>
<?= $this->section('content') ?>


<section class="blog-single single-service single-department" id="blog">
    <div class="container">

        <div class="mb-3 col-12  col-lg-10 col-xl-7 mt-5 mt-lg-10 mb-6 mb-lg-8 ">
            <h1 class="blog-heading"><?= $blog->heading ?></h1>
        </div>
        <div class="d-flex justify-content-start mb-5 ">
            <img  src=" <?= base_url("uploads/blogs/$blog->hero_image") ?>" alt="Hero image" class="aspect-ratio-16-9" />
        </div>
        <div class="ck-content"><?= $blog->content ?></div>

    </div>

</section>


<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('layout/frontend/transitions') ?>
<?= $this->endSection() ?>