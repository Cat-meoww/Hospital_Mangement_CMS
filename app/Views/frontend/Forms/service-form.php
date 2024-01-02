<div class=" heading px-3 jaun-div6">
    <h5 class="heading-title mb-1 jaun-head5" style="line-height:1.2;">Book Appointment For <?= $service_name ?></h5>
    <form class="" method="post" action="<?= base_url('forms/public/service-appointment') ?>">
        <input type="hidden" name="service-name" value="<?= $service_name ?>">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <input class="form-control" type="text" name="name" placeholder="Name" required value="<?= old('name') ?>" />
                <?= validation_show_error('name', 'display-error') ?>
            </div>




            <div class="col-12 col-md-12 col-lg-12">
                <input class="form-control" type="text" name="phone" value="<?= old('phone') ?>" placeholder="Phone No" required="" />
                <?= validation_show_error('phone', 'display-error') ?>
            </div>
            <div class="col-12">
                <?= form_dropdown('branch', $Options['branches'], old('branch'), 'class="form-control  w-100 nice-select  align-items-center"'); ?>
                <?= validation_show_error('branch', 'display-error') ?>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <input class="form-control" type="date" name="booking-date" value="<?= old('booking-date') ?>" placeholder="Phone No" required="" />
                <?= validation_show_error('booking-date', 'display-error') ?>
            </div>
            <div class="col-12">
                <textarea class="form-control" name="message" cols="30" rows="2" placeholder="message" required=""><?= old('message') ?></textarea>
                <?= validation_show_error('message', 'display-error') ?>
            </div>
            <div class="col-12">
                <button id="enq" type="submit" class="btn btn--primary btn-line btn-line-before btn--block">
                    <span class="line"> <span> </span></span><span>Book Appointment</span>
                </button>
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



        </div>
        <?= csrf_field() ?>
    </form>

</div>