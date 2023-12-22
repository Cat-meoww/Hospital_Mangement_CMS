<section class="blog blog-grid blog-grid-4" id="blog-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="heading heading-7 text-center">
                    <h2 class="heading-title">Blogs & Article</h2>
                </div>
            </div>
        </div>

        <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200">
            <?php foreach ($blogs as $blog) : ?>
                <div>
                    <div class="blog-entry" data-hover="">
                        <div class="entry-img">
                            <a href="<?= base_url("blog/$blog->slug") ?>"><img src="<?= base_url("uploads/blogs/$blog->hero_image") ?>" class="blog-img" loading="lazy" alt="Tips for Eating Healthy When Working From Home" /></a>
                        </div>

                        <div class="entry-content">

                            <div class="entry-title">
                                <h4><a class="blog-heading" href="<?= base_url("blog/$blog->slug") ?>"><?= $blog->heading ?></a></h4>
                            </div>
                            <div class="entry-bio">
                                <p class="blog-para"><?= $blog->meta_description ?></p>
                            </div>
                            <div class="entry-more">
                                <a class="btn btn--white btn-line btn-line-before btn-line-inversed" href="<?= base_url("blog/$blog->slug") ?>">
                                    <div class="line"> <span> </span></div><span>read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
            <?php endforeach; ?>


        </div>
        <!-- End .carousel-->
    </div>
</section>