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
                        Online Appointment
                    </h2>

                    <!----<div class="hero-action"> <a class="btn btn--white btn-line btn-line-after btn-line-inversed" href="#"> <span>find a doctor</span><span class="line"><span></span></span></a><a class="btn btn--transparent btn-line btn-line-after" href="#"> <span>our core values</span><span class="line"><span></span></span></a></div>--->
                </div>
                <div class="col-12" style="margin-top: 30px">
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class=""><a href="">Appointment</a></li>
                        <li class=""><a href="online-appointment.html">Online Appointment</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="entry-contact">
    <div class="contact-panel bg-overlay bg-overlay-theme3 row ">

        <div class="contact-card col-12 col-md-8">
            <div class="contact-body">
                <h5 class="card-heading">book an Online appointment</h5>
                <p class="card-desc">Please feel welcome to contact our staff with any general or medical
                    enquiry. Our doctors will receive or return any urgent calls.</p>
                <form class="video-booking" method="post" action="<?= base_url('forms/public/video-consultation') ?>">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="select-holder">


                                <?= form_dropdown('service', $Options['services'], old('service'), 'id="booking-service" required  data-doctor="' . old('doctor') . '" data-slot="' . old('time-slot') . '"  class="form-control"'); ?>
                                <?= validation_show_error('service', 'display-error') ?>
                                <div class="badge">department</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="select-holder">
                                <select class="form-control" id="booking-doctors" required name="doctor" value="<?= old('doctor') ?>">

                                </select>
                                <?= validation_show_error('doctor', 'display-error') ?>
                                <div class="badge">choose doctor</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="date-select">
                                <input class="form-control" id="booking-date" required type="date" min="<?= date("Y-m-d") ?>" placeholder="select date" name="booking-date" value="<?= old('booking-date') ?>" required="" /><i class="fas fa-calendar-day"></i>

                            </div>
                            <?= validation_show_error('booking-date', 'display-error') ?>

                        </div>
                        <!-- <div class="col-12 col-md-6 col-lg-6">
                            <div class="time-select">
                                <input class="form-control" type="time" placeholder="select time" name="contact-date" value="" required="" /><i class="fas fa-clock"></i>
                            </div>
                        </div> -->

                        <div class="col-12 col-md-6">
                            <div class="select-holder">
                                <select class="form-control" id="booking-timeslot" required name="time-slot" value="<?= old('time-slot') ?>">

                                </select>
                                <?= validation_show_error('time-slot', 'display-error') ?>
                                <div class="badge">Select Time slot</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <input class="form-control" type="text" required name="first-name" placeholder="First Name" value="<?= old('first-name') ?>" required="" />
                            <?= validation_show_error('first-name', 'display-error') ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <input class="form-control" type="text" required name="last-name" placeholder="Last Name" value="<?= old('last-name') ?>" required="" />
                            <?= validation_show_error('last-name', 'display-error') ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <input class="form-control" type="email" required name="email" placeholder="Email Address" value="<?= old('email') ?>" required="" />
                            <?= validation_show_error('email', 'display-error') ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <input class="form-control" type="number" name="phone" placeholder="Phone Number" value="<?= old('phone') ?>" required="" />
                            <?= validation_show_error('phone', 'display-error') ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="select-holder">
                                <input class="form-control" disabled type="text" name="contact-phone" placeholder="Slot" value="15 m" />
                                <div class="badge">Slot</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="select-holder">
                                <input class="form-control" disabled type="text" name="price" placeholder="Slot" value="₹1,000.00" />
                                <div class="badge">Price</div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <textarea class="form-control" type="text" name="message" placeholder="Note" required=""><?= old('message') ?></textarea>
                            <?= validation_show_error('message', 'display-error') ?>
                        </div>
                        <?php if (session()->getFlashdata('error') !== NULL) : ?>
                            <div class="col-12 mb-3">
                                <div class="alert alert-secondary alert-dismissible fade show mb-0 w-100" role="alert">
                                    <?= $session->getFlashdata("error") ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if (session()->getFlashdata('success') !== NULL) : ?>
                            <div class="col-12  mb-3">
                                <div class="alert alert-success alert-dismissible fade show mb-0 w-100" role="alert">
                                    <?= $session->getFlashdata("success") ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        <?php endif ?>

                        <div class="col-12">
                            <button class="btn btn--secondary btn-line btn-line-before btn--block" type="submit"><span class="line"> <span>
                                    </span></span><span>make appointment</span></button>
                        </div>
                        <div class="col-12 pt-3 text-center">
                            <a href="<?= base_url('appointment/book-appointment') ?>" class="text-theme btn-link" f>
                                <span>General Booking Appointment</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                    <?= csrf_field() ?>
                </form>
            </div>
            <!-- End .contact-body -->
        </div>
        <div class="col-12 col-md-4 pt-5 ">
            <div class="clients-img mt-5"> <img style="width:100%; aspect-ratio: 1/1; object-fit: cover;" src="<?= base_url("frontend/assets/images/sliders/video-consultation.jpg") ?>" alt="image"></div>
        </div>
    </div>
    <!-- End .contact-panel-->
</div>


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
                    <h2 class="heading-title">Meet Our Doctors</h2>
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
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url("frontend/assets/images/team/grid/1.jpg") ?>" alt="team member" />
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
                                    <span class="line"> <span></span></span><span>read more</span></a>
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
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url("frontend/assets/images/team/grid/2.jpg") ?>" alt="team member" />
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
                                    <span class="line"> <span></span></span><span>read more</span></a>
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
                            <a class="link" href="doctors-grid.html"></a><img src="<?= base_url("frontend/assets/images/team/grid/3.jpg") ?>" alt="team member" />
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
                                    <span class="line"> <span></span></span><span>read more</span></a>
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


        const booking = {
            defaultDoctor: '',
            defaultSlot: '',
            __init: () => {
                const defaultService = $('#booking-service').val();
                booking.defaultDoctor = $('#booking-service').data('doctor');
                booking.defaultSlot = $('#booking-service').data('slot');

                $(document).on('change', '#booking-service', async function(event) {
                    try {
                        const branch = $(this).val();
                        $('#booking-doctors').html(`<option value="" data-display="Select"> Select atleast one</option>`).niceSelect('update');
                        const doctors = await booking.get_doctors(branch);


                        let template = "";
                        doctors.forEach((item) => {
                            template += `<option value="${item.id}">${item.text}</option>`;
                        })
                        $('#booking-doctors').append(template).val(booking.defaultDoctor).niceSelect('update').trigger('change');
                    } catch (error) {
                        console.error(error);
                    }
                })
                $(document).on('change', '#booking-service,#booking-doctors, #booking-date', async function(event) {
                    try {
                        const service = $('#booking-service').val();
                        const doctor = $('#booking-doctors').val();
                        const bookingdate = $('#booking-date').val();


                        $('#booking-timeslot').html(`<option value="" data-display="Select"> Select atleast one</option>`).niceSelect('update');
                        const doctors = await booking.get_timeslots(service, doctor, bookingdate);


                        let template = "";


                        doctors.forEach((item) => {
                            const start_time = timestring(item.start_time)
                            const end_time = timestring(item.end_time)
                            template += `<option value="${item.id}">${start_time} - ${end_time}</option>`;
                        })
                        $('#booking-timeslot').append(template).val(booking.defaultSlot).niceSelect('update').trigger('change');
                    } catch (error) {
                        console.error(error);
                    }
                })


                if (defaultService ?? false) {


                    $('#booking-service').trigger('change');

                }

            },
            get_doctors: async function(serviceId) {
                try {
                    const url = "<?= base_url('api/frontend/get-video-doctors') ?>";
                    const formdata = new FormData();
                    formdata.append('service', serviceId)

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
            },
            get_timeslots: async function(service, doctor, bookingdate) {
                try {
                    const url = "<?= base_url('api/frontend/get-time-slots') ?>";
                    const formdata = new FormData();
                    formdata.append('service', service)
                    formdata.append('doctor', doctor)
                    formdata.append('bookingdate', bookingdate)

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
                        booking.handleError(res?.errors ?? false);
                        return Promise.reject(new Error("bad"))

                    }
                } catch (e) {
                    console.log(e);
                    return Promise.reject(new Error("fetch error"))
                }
            },
            handleError: (errors) => {
                // if(errors?.doctor??false){
                //     $('#booking-doctors').after(`<span class="error">${errors.doctor}</span>`)
                // }

                console.log(Object.entries(errors));
            }

        }

        booking.__init();

        function timestring(timeString) {
            return new Date('1970-01-01T' + timeString + 'Z')
                .toLocaleTimeString('en-US', {
                    timeZone: 'UTC',
                    hour12: true,
                    hour: 'numeric',
                    minute: 'numeric'
                });
        }
    })
</script>

<?= $this->endSection() ?>