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
</head>

<body class="antialiased relative font-inter bg-lightwhite dark:bg-black text-black dark:text-white text-sm font-normal overflow-x-hidden">

    <header>
        <nav class="bg-lightwhite dark:bg-black px-4 lg:px-7 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <a href="<?= base_url('/') ?>" class="flex items-center">
                    <img src="<?= base_url() ?>admin/assets/images/dark-logo.svg" alt="logo" class="hidden dark:block" /> 
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="/register" class="text-black dark:text-white border border-transparent hover:border-black/10 dark:hover:border-white/10 rounded-lg text-sm px-2 py-1 mr-2 transition-all duration-300">Sign
                        in</a>
                    <a href="/login" class="text-black dark:text-white bg-transparent border border-black/10 dark:border-white/10 hover:bg-black dark:hover:bg-white hover:text-white dark:hover:text-black rounded-lg text-sm px-2 py-1 mr-2 transition-all duration-300">Login</a>
                </div>
            </div>
        </nav>
    </header>


    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center">
        <div class="max-w-[680px] flex-none w-full bg-white dark:bg-white/5 p-4 sm:p-10 lg:px-[146px] lg:py-[107px] rounded-2xl loginform">
            <h1 class="text-2xl font-semibold mb-2 text-center">Sign In</h1>
            <p class="text-center text-black/40 dark:text-white/40 mb-7">Welcome to <?= env('app.name') ?></p>
            <!-- <div class="flex flex-wrap items-center gap-4 mb-7">
                <a href="javaScript:;" class="flex flex-1 items-center gap-1 py-1 pl-2 pr-3 border border-black/10 dark:border-white/10 hover:border-black dark:hover:border-white rounded-lg transition-all duration-300">
                    <div class="w-8 h-8 flex-none bg-white rounded-full p-2">
                        <img src="<?= base_url() ?>admin/assets/images/google.svg" />
                    </div>
                    <p class="whitespace-nowrap">Sign in with Google</p>
                </a>
                <a href="javaScript:;" class="flex flex-1 items-center gap-1 py-1 pl-2 pr-3 border border-black/10 dark:border-white/10 hover:border-black dark:hover:border-white rounded-lg transition-all duration-300">
                    <div class="w-8 h-8 flex-none bg-white rounded-full p-2">
                        <img src="<?= base_url() ?>admin/assets/images/apple-icon.svg" />
                    </div>
                    <p class="whitespace-nowrap">Sign in with Apple</p>
                </a>
            </div> -->
            <div class="flex items-center mb-7">
                <div class="w-full h-[2px] bg-black/10 dark:bg-white/10"></div>
                <div class="text-black/40 dark:text-white/40 px-5 whitespace-nowrap">Login with Email</div>
                <div class="w-full h-[2px] bg-black/10 dark:bg-white/10"></div>
            </div>
            <form class="mb-4" action="<?= base_url('auth/login/check') ?>" autocomplete="off" method="post">
                <div class="mb-4">
                    <input type="email" name="email"  autocomplete="off" value="<?= old('email')?>" placeholder="Email" class="form-input" />
                </div>
                <div class="mb-2">
                    <input type="password" name="password" autocomplete="off" placeholder="Password" class="form-input" />
                </div>
                <div class="mb-7 text-right">
                    <a href="/forgot-password" class="text-lightpurple-300">Forgot Password?</a>
                </div>
                <?php if (isset($validation)) : ?>
                    <div class="mb-4 flex gap-3 flex-col text-center">
                        <?= $validation->listErrors('alert-info-list') ?>
                    </div>
                <?php endif; ?>
                <button type="submit" class="py-2 px-4 bg-black dark:bg-lightpurple-200 w-full rounded-lg text-white dark:text-black text-lg font-semibold border border-black dark:border-lightpurple-200 hover:bg-transparent dark:hover:bg-transparent hover:text-black dark:hover:text-white transition-all duration-300 ">
                    Sign In
                </button>
            </form>
            <p class="text-center text-black/40 dark:text-white/40">Not a Member yet? <a href="/register" class="text-lightpurple-300">Sign Up</a></p>
        </div>
    </div>


    <footer class="p-7 flex items-center justify-center">
        <p class="text-xs text-black/40 dark:text-white/40">&copy; 2023 <?= env('app.name') ?></p>
    </footer>



    <script src="<?= base_url() ?>admin/assets/js/alpine-collaspe.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/js/alpine-persist.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/js/alpine.min.js" defer></script>

    <script src="<?= base_url() ?>admin/assets/js/custom.js"></script>
</body>



</html>