<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>

<div class="flex  flex-row gap-3">
    <div class="bg-lightwhite dark:bg-white/5 p-6 rounded-2xl flex-1">

        <div class="px-2 py-1 mb-4">
            <h2 class="text-2xl  font-semibold">2-Step Verification is on</h2>
        </div>
        <div class="px-2 py-1 mb-4">

            <p class=" font-normal">
                Two-factor authentication setup is complete. You can now use your authenticator app to generate codes for login.
            </p>
        </div>
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg  font-semibold">Setup authenticator app</h2>
        </div>
        <div class="px-2 py-1 mb-4">

            <p class=" font-normal">
                Authenticator apps and browser extensions like 1Password, Authy, Microsoft Authenticator, etc. generate one-time passwords that are used as a second factor to verify your identity when prompted during sign- in.
            </p>
        </div>
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg   font-semibold">Scan the QR code</h2>
        </div>
        <div class="px-2 py-1 mb-4">
            <img src="<?= $ProvisionalUrl ?>" alt="">
        </div>
        <div class="px-2 py-1 mb-4">
            <p class=" font-normal">
                Use an authenticator app or browser extension to scan. Learn more about enabling 2FA
            </p>
        </div>


    </div>
    



</div>



<?= $this->endSection() ?>

<?= $this->section('footer') ?>


<?= $this->endSection() ?>