<?= $this->extend('layout/frontend/main') ?>

<?= $this->section('header') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        /* align-items: center;  */
        height: 100%;
    }

    .content {
        text-align: center;
    }

    /* Adjust styles as needed for responsiveness */
    h1 {
        font-size: 3em;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.5em;
        margin-bottom: 20px;
    }


    /* Existing styles for .container and .content */

    .details {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;

    }

    .detail-item {
        display: flex;
        flex-direction: column;
        align-items: center;



    }

    .detail-label {
        margin-bottom: 5px;
        padding-right: 10px;
        /* Spacing between label and value */
        color: grey;
    }

    .detail-value {
        padding-left: 10px;
        /* Spacing between label and value */
    }

    .ver {
        border: 1px solid #ccc;
        /* Vertical border */
        padding-top: 50px;

    }

    #gr {
        color: grey;
    }






    @media (max-width:420px) {
        h1 {
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
        }

        .details {
            display: flex;
            flex-direction: column;
            margin-top: 10px;

        }

        .ver {
            border: 1px solid #ccc;
            /* Vertical border */
            padding-left: 100%;
            padding-top: 0px;
        }

        .detail-item {
            padding-top: 15px;
        }



    }
</style>

<?= $this->endSection() ?>
<?= $this->section('content') ?>


<div class="container my-5 py-3">
    <div class="content">
        <h1>Thank You!</h1>
        <!-- <p><i class="fa-solid fa-circle-check"></i></p> -->
        <p>
            <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 48 48" aria-hidden="true">
                <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22" />
                <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17" />
            </svg>
        </p>
        <p>Booking ID: #<?= session()->getFlashdata('booking_id') ?? "101" ?></p>
        <p>Your Appointment Booked Successfully.</p>
        <p id="gr">We have sent your booking information to your email address.</p>

        <div class="details">
            <div class="detail-item">
                <span class="detail-label">Service:</span>
                <span class="detail-value"><?= session()->getFlashdata('service') ?? "test" ?></span>
            </div>
            <div class="detail-item">
                <span class="ver"></span>
            </div>

            <div class="detail-item">
                <span class="detail-label">Date & Time:</span>
                <span class="detail-value"><?= date('d/m/Y h:i a') ?> </span>

            </div>
            <div class="detail-item">
                <span class="ver"></span>
            </div>

            <div class="detail-item">
                <span class="detail-label">Customer Name:</span>
                <span class="detail-value"><?= session()->getFlashdata('customer') ?? 'Customer' ?></span>

            </div>
            <div class="detail-item">
                <span class="ver"></span>
            </div>

        </div>
    </div>
</div>




<?= $this->endSection() ?>

<?= $this->section('footer') ?>

<?= $this->endSection() ?>