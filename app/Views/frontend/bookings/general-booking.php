<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>
<style>
    .bg-overlay-theme:before {
        background-image: linear-gradient(-90deg, #118b0f 18%, #89e98894 70%) !important;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!--
      ============================
      Page Title #13 Section
      ============================
      -->
<section class="hero hero-5 bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="<?= base_url('frontend/assets/images/page-titles/s1.png') ?>" alt="background" />
    </div>
    <div class="container">
        <div class="hero-content" style="padding-bottom: 80px !important">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="hero-title" style="margin-top: 60px">
                        Book Appointment
                    </h2>

                    <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                </div>
                <div class="col-12" style="margin-top: 30px">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Appointment</a></li>
                        <li class=""><a href="book-appointment.html">Book Appoitment</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="donations donations-3 bg-overlay  bg-overlay-theme" id="donations-3">
    <div class="bg-section">
        <img src="<?= base_url('frontend/assets/images/background/book-appointment.jpg') ?>" alt="background" />
    </div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-11 d-flex align-items-center">


            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">book an appointment</h5>
                    <p class="card-desc">
                        Please feel welcome to contact our staff with any general or
                        medical enquiry. Our doctors will receive or return any urgent
                        calls.
                    </p>
                    <form class="booking-form" id="booking-form" method="post" action="<?= base_url('forms/public/book-appointment') ?>">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="select-holder">

                                    <?= form_dropdown('branch', $Options['branches'], old('branch'), 'id="booking-center" data-service="' . old('service') . '"  class="form-control"'); ?>




                                    <?= validation_show_error('branch', 'display-error') ?>
                                    <div class="badge">Our Centers</div>

                                </div>

                            </div>

                            <div class="col-12 col-md-12 col-lg-6">
                                <div class="select-holder ">
                                    <select class="form-control" id="booking-speciality" type="text" value="<?= old('service') ?>" name="service">

                                    </select>
                                    <?= validation_show_error('service', 'display-error') ?>
                                    <div class="badge">Specialities</div>

                                </div>

                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <input class="form-control" type="text" name="name" value="<?= old('name') ?>" placeholder="Full Name" required="" />
                                <?= validation_show_error('name', 'display-error') ?>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <input class="form-control" type="text" name="phone" value="<?= old('phone') ?>" placeholder="Phone" required="" />
                                <?= validation_show_error('phone', 'display-error') ?>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <input class="form-control" type="email" name="email" value="<?= old('email') ?>" placeholder="E-mail" required="" />
                                <?= validation_show_error('email', 'display-error') ?>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <input class="form-control" type="number" name="age" value="<?= old('age') ?>" placeholder="Age" required="" />
                                <?= validation_show_error('age', 'display-error') ?>
                            </div>



                            <div class="col-12 ">
                                <div class="date-select">
                                    <input class="form-control" type="date" min="<?= date('Y-m-d') ?>" id="booking-date" placeholder="Prefered Date" name="booking-date" value="<?= old('booking-date') ?>" required="" /><i for="booking-date" class="fas fa-calendar-day"></i>
                                    <?= validation_show_error('booking-date', 'display-error') ?>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <textarea class="form-control" rows="1" type="text" name="message" placeholder="Message" required=""><?= old('message') ?></textarea>
                                <?= validation_show_error('message', 'display-error') ?>
                            </div>

                            <?php if (session()->getFlashdata('error') !== NULL) : ?>
                                <div class="col-12 ">
                                    <div class="alert alert-secondary alert-dismissible fade show mb-0 w-100" role="alert">
                                        <?= $session->getFlashdata("error") ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if (session()->getFlashdata('success') !== NULL) : ?>
                                <div class="col-12 ">
                                    <div class="alert alert-success alert-dismissible fade show mb-0 w-100" role="alert">
                                        <?= $session->getFlashdata("success") ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php endif ?>


                            <div class="col-12">
                                <button type="submit" class="btn btn--secondary btn-line btn-line-before btn--block mt-3">
                                    <span class="line"> <span> </span></span><span>Book appointment</span>
                                </button>
                            </div>
                            <div class="col-12 pt-3 text-center">
                                <a href="<?= base_url('appointment/video-consultation')?>" class="text-theme btn-link">
                                    <span>Video Consultation</span>
                                </a>
                            </div>
                        </div>
                        <?= csrf_field() ?>
                    </form>
                </div>
                <!-- End .contact-body -->
            </div>
        </div>
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>
<!-- 
      ============================
      Doctors #02 Section
      ============================
      -->
<section class="team team-grid team-grid-2 team-grid-3" id="teamGrid-2">
    <div class="container">
        <div class="heading heading-9 text-center">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <h2 class="heading-title">Video Consultation Doctors</h2>
                    <p class="heading-desc">
                        Our administration and staff all have exceptional skills and
                        trained to assist you with all medical enquiries.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">
                        <div class="team-img">
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url('frontend/assets/images/team/grid/1.jpg') ?>" alt="team member" />
                            <div class="team-social">
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">Richard Muldoone</a></h4>
                            </div>
                            <div class="team-cat">
                                <a href="javascript:void(0)">Cardiology Specialist</a>
                            </div>
                            <div class="team-desc">
                                <p>
                                    Muldoone obtained his undergraduate degree in Biomedical
                                    Engineering at Tulane University prior to attending St
                                    George University School of Medicine.
                                </p>
                            </div>
                            <div class="team-more">
                                <a class="btn-line btn-line-inversed btn-line-before" href="#">
                                    <span class="line"> <span></span></span><span class="text-truncate">Book Appointment</span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">
                        <div class="team-img">
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url('frontend/assets/images/team/grid/2.jpg') ?>" alt="team member" />
                            <div class="team-social">
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">Michael Brian</a></h4>
                            </div>
                            <div class="team-cat">
                                <a href="javascript:void(0)">Dermatologists</a>
                            </div>
                            <div class="team-desc">
                                <p>
                                    Brian specializes in treating skin, hair, nail, and
                                    mucous membrane. He also address cosmetic issues,
                                    helping to revitalize the skin, hair, and...
                                </p>
                            </div>
                            <div class="team-more">
                                <a class="btn-line btn-line-inversed btn-line-before" href="#">
                                    <span class="line"> <span></span></span><span class="text-truncate">Book Appointment</span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-member" data-hover="">
                    <div class="team-member-holder">
                        <div class="team-img">
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url('frontend/assets/images/team/grid/3.jpg') ?>" alt="team member" />
                            <div class="team-social">
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fas fa-envelope"></i></a><a href="javascript:void(0)"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .team-img-->
                        <div class="team-content">
                            <div class="team-title">
                                <h4><a href="doctors-grid.html">Maria Andaloro</a></h4>
                            </div>
                            <div class="team-cat">
                                <a href="javascript:void(0)">Pediatrician</a>
                            </div>
                            <div class="team-desc">
                                <p>
                                    Andaloro graduated from medical school and completed 3
                                    years residency program in pediatrics. She passed by the
                                    American Board of Pediatrics.
                                </p>
                            </div>
                            <div class="team-more">
                                <a class="btn-line btn-line-inversed btn-line-before" href="#">
                                    <span class="line"> <span></span></span><span class="text-truncate">Book Appointment</span></a>
                            </div>
                        </div>
                        <!-- End .team-content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<script>
    $(document).ready(() => {
        const center = {
            defaultService: '',
            fields: {
                center: $('#booking-center'),
                speciality: $('#booking-speciality')
            },
            __init: () => {
                const defaultBranch = $('#booking-center').val();
                center.defaultService = $('#booking-center').data('service');

                $(document).on('change', '#booking-center', async function(event) {
                    try {
                        const branch = $(this).val();
                        $('#booking-speciality').html('').niceSelect('update');
                        const services = await center.get_services(branch);


                        let template = "";
                        services.forEach((item) => {
                            template += `<option value="${item.id}">${item.text}</option>`;
                        })
                        $('#booking-speciality').html(template).val(center.defaultService).niceSelect('update');
                    } catch (error) {
                        console.error(error);
                    }
                })


                if (defaultBranch ?? false) {
                    $('#booking-center').trigger('change');
                }

            },
            get_services: async function(branchId) {
                try {
                    const url = "<?= base_url('api/frontend/get-services') ?>";
                    const formdata = new FormData();
                    formdata.append('branchid', branchId)

                    const options = {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        credentials: 'same-origin',
                        body: formdata,
                    }
                    const rawdata = await fetch(url, options);
                    let res = await rawdata.json();

                    if (res.status === "success") {


                        return Promise.resolve(res.data)


                    } else if (res.status === "bad") {

                        return Promise.reject(new Error("bad"))

                    }
                } catch (e) {
                    console.log(e);
                    return Promise.reject(new Error("fetch error"))
                }
            }

        }

        center.__init();
    })
</script>

<?= $this->endSection() ?>