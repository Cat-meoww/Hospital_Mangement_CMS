<!DOCTYPE html>
<html x-data="main" class="dark">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="ThemesBoss" />

    <title><?= env('app.name') ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>admin/assets/images/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>admin/assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</head>

<body class="antialiased relative font-inter bg-lightwhite dark:bg-black text-black dark:text-white text-sm font-normal overflow-x-hidden">

    <header>
        <nav class="bg-lightwhite dark:bg-black px-4 lg:px-7 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <a href="<?= base_url('/') ?>" class="flex items-center">
                    <img src="<?= base_url() ?>admin/assets/images/dark-logo.svg" alt="logo" class="hidden dark:block" />
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="/register" class="text-black dark:text-white border border-transparent hover:border-black/10 dark:hover:border-white/10 rounded-lg text-sm px-2 py-1 mr-2 transition-all duration-300">Sign
                        in</a> -->
                    <a href="<?= base_url('auth/login') ?>" class="text-black dark:text-white bg-transparent border border-black/10 dark:border-white/10 hover:bg-black dark:hover:bg-white hover:text-white dark:hover:text-black rounded-lg text-sm px-2 py-1 mr-2 transition-all duration-300">Login</a>
                </div>
            </div>
        </nav>
    </header>


    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center">
        <div class="max-w-sm flex-none w-full bg-white dark:bg-white/5 p-4 sm:p-10 lg:px-14 lg:py-14 rounded-2xl loginform">
            <div class="mb-3">
                <svg class="mx-auto" width="40" height="40" viewbox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 17.5H60V62.5H20V17.5Z" fill="currentColor" fill-opacity="0.1" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 12.5C17.5 12.5 17.5 9.3934 19.6967 7.1967C19.6967 7.1967 21.8934 5 25 5H55C55 5 58.1066 5 60.3033 7.1967C60.3033 7.1967 62.5 9.3934 62.5 12.5V67.5C62.5 67.5 62.5 70.6066 60.3033 72.8033C60.3033 72.8033 58.1066 75 55 75H25C25 75 21.8934 75 19.6967 72.8033C19.6967 72.8033 17.5 70.6066 17.5 67.5V12.5ZM22.5 12.5L22.5 67.5C22.5 67.5 22.5 68.5355 23.2322 69.2678C23.2322 69.2678 23.9645 70 25 70H55C55 70 56.0355 70 56.7678 69.2678C56.7678 69.2678 57.5 68.5355 57.5 67.5V12.5C57.5 12.5 57.5 11.4645 56.7678 10.7322C56.7678 10.7322 56.0355 10 55 10L25 10C25 10 23.9645 10 23.2322 10.7322C23.2322 10.7322 22.5 11.4645 22.5 12.5Z" fill="currentColor" />
                    <path d="M20 20H60C61.3807 20 62.5 18.8807 62.5 17.5C62.5 16.1193 61.3807 15 60 15H20C18.6193 15 17.5 16.1193 17.5 17.5C17.5 18.8807 18.6193 20 20 20Z" fill="currentColor" />
                    <path d="M20 65H60C61.3807 65 62.5 63.8807 62.5 62.5C62.5 61.1193 61.3807 60 60 60H20C18.6193 60 17.5 61.1193 17.5 62.5C17.5 63.8807 18.6193 65 20 65Z" fill="currentColor" />
                </svg>
            </div>






            <form class="mb-4 flex flex-col gap-4 " action="<?= base_url('auth/verify2FA/check') ?>" autocomplete="off" method="post">


                <?php if (isset($validation)) : ?>
                    <div class="mb-4 flex gap-3 flex-col text-center">
                        <?= $validation->listErrors('alert-info-list') ?>
                    </div>
                <?php endif; ?>
                <h1 class="text-[22px] font-semibold  text-center">Authentication code </h1>

                <div id="otp" class="flex flex-row justify-center text-center gap-2 mb-0">
                    <input id="totp" name="totp" class="form-input w-full rounded-l-lg border border-black/10 dark:border-white/10 bg-transparent px-3 py-2.5 placeholder:text-black/60  dark:placeholder:text-white/60 hover:z-10 hover:border-black dark:hover:border-white focus:z-10 focus:border-black dark:focus:border-white" type="text" id="first" maxlength="6" />
                    <input type="hidden" name="token" value="<?= $token ?>">
                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                </div>


                <button type="submit" id="submitbtn" class=" py-2 px-4 bg-black dark:bg-lightpurple-200 w-full rounded-lg text-white dark:text-black text-lg font-semibold border border-black dark:border-lightpurple-200 hover:bg-transparent dark:hover:bg-transparent hover:text-black dark:hover:text-white transition-all duration-300">
                    Verify
                </button>
                <?= validation_list_errors('alert-info-list') ?>

                <div>
                    <div class="text-sm ">
                        Open your two-factor authenticator (TOTP) app or browser extension to view your authentication code.
                    </div>
                </div>



            </form>
            <!-- <p class="text-center text-black/40 dark:text-white/40">Not a Member yet? <a href="/register" class="text-lightpurple-300">Sign Up</a></p> -->
        </div>
    </div>


    <footer class="p-7 flex items-center justify-center">
        <p class="text-xs text-black/40 dark:text-white/40">&copy; 2023 <?= env('app.name') ?></p>
    </footer>


    <script>
        $(document).ready(() => {
            $("#totp").keyup(function() {
                const val = $(this).val();
                if (val.length == 6) {
                    $('#submitbtn').trigger('click');
                }
            })
        })
    </script>



</body>



</html>