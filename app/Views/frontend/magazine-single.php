<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<style>
        .page {
            background-image: url('<?= base_url('frontend/assets/images/magazines/gem-nalam-feb-thumbnail.jpeg') ?>');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .page1 {
            background-image: url('<?= base_url('frontend/assets/images/magazines/gem-nalam-mar-thumbnail.jpeg') ?>');
        }
        .page2 {
            background-image:url('<?= base_url('frontend/assets/images/magazines/gem-nalam-jan-thumbnail.jpeg') ?>');
        }
    </style>



<?= $this->endSection() ?>
<?= $this->section('content') ?>


<section class="blog blog-grid" id="blog">
            <div class="container d-flex justify-content-center">
                <div id="book">
                    <div class="page"
                        style="background-image: url('<?= base_url('frontend\assets\images\magazines\gem-nalam-feb-thumbnail.jpeg') ?>'); height:900px; width:700px;"
                        data-density="hard">
                        
                    </div>
                    <div class="page page1">
                        Page one
                    </div>
                    <div class="page page2">
                        Page two
                    </div>
                    <div class="page page3">
                        Page three
                    </div>
                    <div class="page page4">
                        Page four
                    </div>
                    <div class="page" data-density="hard">
                        Last page
                    </div>
                </div>

            </div>
            <!-- End .container-->
        </section>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script src="https://cdn.jsdelivr.net/npm/page-flip/dist/js/page-flip.browser.min.js"></script>
    <script type="module">

        document.addEventListener('DOMContentLoaded', function () {
            const PageFlip = St.PageFlip;
            const pageFlip = new PageFlip(
                document.getElementById("book"), {
                width: 450, // base page width
                height: 550, // base page height

                size: "fixed",
                // set threshold values:
                

                maxShadowOpacity: 0.5, // Half shadow intensity
                showCover: true,
                mobileScrollSupport: false
            }
            );

            // load pages
            pageFlip.loadFromHTML(document.querySelectorAll(".page"));
        });


    </script>
<?= $this->endSection() ?>