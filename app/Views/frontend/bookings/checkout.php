<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
    .bg-overlay-theme:before {
        background-image: linear-gradient(-90deg, #118b0f 18%, #89e98894 70%) !important;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="<?= base_url("frontend/assets/images/page-titles/s1.png") ?>" alt="background" />
    </div>
    <div class="container">
        <div class="hero-content" style="padding-bottom: 120px !important">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="hero-title" style="margin-top: 60px">
                        Checkout
                    </h2>

                    <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                </div>
                <div class="col-12" style="margin-top: 30px">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class=""><a href="">Checkout</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="entry-contact">
    <div class="contact-panel bg-overlay bg-overlay-theme3 row ">

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="checkout-widget">
                    <div class="widget-title">
                        <h5>Billing Details</h5>
                    </div>
                    <div class="checkout-body">
                        <div class="row">
                            <div class="col-12">
                                <label>first name<span class="required">*</span></label>
                                <input class="form-control" value="<?= $customer->firstname ?>" type="text" readonly name="checkout-firstName">
                            </div>
                            <div class="col-12">
                                <label>last name<span class="required">*</span></label>
                                <input class="form-control" value="<?= $customer->lastname ?>" type="text" readonly name="checkout-lastName">
                            </div>

                            <div class="col-12">
                                <label>phone<span class="required">*</span></label>
                                <input class="form-control" value="<?= $customer->phone ?>" type="text" readonly name="checkout-phone">
                            </div>
                            <div class="col-12">
                                <label>email address<span class="required">*</span></label>
                                <input class="form-control" value="<?= $customer->email ?>" type="text" readonly name="checkout-address">
                            </div>
                        </div>
                    </div>
                    <!-- End .checkout-body -->
                </div>
                <!-- End .checkout-widget -->
            </div>
            <div class="col-12 col-lg-6">
                <div class="checkout-widget">
                    <div class="widget-title">
                        <h5>Place Order</h5>
                    </div>
                    <div class="checkout-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                   
                                    <div class="payment-conditions">
                                        <form class="checkoutForm mb-0" method="post" action="assets/php/conditions.php">
                                            <div class="row no-gutters">
                                                <p> Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                <div class="col-12 d-flex justify-content-start">
                                                    <input class="btn btn--primary" id="checkout-btn" type="submit" value="Place Order">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End .contact-panel-->
</div>





<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = JSON.parse(`<?= $rpc_payload ?>`);
    console.log(options);
    var rzp1 = new Razorpay(options);
    document.getElementById('checkout-btn').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>

<?= $this->endSection() ?>