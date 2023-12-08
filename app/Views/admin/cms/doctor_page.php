<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>

<style>
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 10;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url("api/admin/cms-page/doctor/upsert") ?>" method="post" data-reload="true" class="grid grid-cols-1 gap-3 fetch-form">
    <input type="hidden" name="id" value="<?= $doctor->id ?>">
    <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
        <h2 class="text-lg font-semibold">Doctor CMS - <?= $doctor->slug ?></h2>
        <div class="flex items-center gap-2">
            <a href="<?= base_url('admin/all-master/doctors/list') ?>" class="btn px-2 py-[5px] text-xs">Back</a>
            <button type="submit" class="btn px-2 py-[5px] text-xs">Save Changes</button>
        </div>
    </div>
    <div class="msg-block col-span-2">

    </div>
    <div class="flex flex-col gap-7">

        <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
            <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                <h2 class="text-sm font-semibold">SEO</h2>

            </div>
            <div class=" grid grid-flow-row gap-4">
                <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                    <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Meta Title</label>
                    <input type="text" name="meta_title" value="<?= $Dataset->meta_title ?? "" ?>" placeholder="... Type" class="form-input">
                </div>
                <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                    <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Meta Description</label>
                    <input type="text" name="meta_description" value="<?= $Dataset->meta_description ?? "" ?>" placeholder="... Type" class="form-input">
                </div>
            </div>
        </div>
        <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
            <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                <h2 class="text-sm font-semibold">CMS Data</h2>
            </div>
            <div class=" grid grid-flow-row gap-4 text-black">
                <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                    <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Heading</label>
                    <input type="text" name="cms_heading" value="<?= $Dataset->heading ?? "" ?>" placeholder="... Type" class="form-input">
                </div>

                <div class="relative mb-1">

                    <div class="bg-white dark:bg-black text-black dark:text-white rounded-lg  mb-4 sticky-top" id="document-editor__toolbar"></div>
                    <textarea id="editor" name="cms_content" rows="2" class="block rounded-lg px-5 pb-4 pt-[38px] w-full text-black dark:text-white bg-white dark:bg-white/5 border border-black/10 dark:border-white/10 appearance-none focus:outline-none focus:ring-0 focus:border-black/10 dark:focus:border-white/10 peer" placeholder=" "><?= $Dataset->content ?? "" ?></textarea>

                </div>
            </div>
        </div>


    </div>





</form>


<!-- DELETE Modal -->
<div class="modal fade fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog flex items-center justify-center min-h-screen px-4">
        <div class="modal-content bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
            <div class="modal-header flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                <h5 class="font-semibold text-lg">Delete Faq</h5>
                <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" data-bs-dismiss="modal">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                        <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-5">
                <form action="<?= base_url("api/admin/all-master/cms/faq/delete") ?>" method="post" data-reload="true" class="flex  flex-col fetch-form" enctype="multipart/form-data">
                    <div class="flex items-center rounded border border-lightyellow p-3 justify-center text-black dark:text-white">
                        <span class="pr-2">Are you sure do want to delete this ?</span>
                    </div>
                    <input type="hidden" name="id" id="delete-id">
                    <div class="msg-block">

                    </div>

                    <div class="flex justify-end items-center mt-8 gap-4">
                        <button type="button" class="btn !bg-lightred !text-white" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn">Delete</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<style>
    .ck-content {
        /* rtl:raw: [type="tel"], [type="url"], [type="email"], [type="number"] {
		 direction: ltr;
	}
	 */
    }

    .ck-content :root,
    .ck-content [data-bs-theme=light] {
        --bs-blue: #0d6efd;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #198754;
        --bs-teal: #20c997;
        --bs-cyan: #0dcaf0;
        --bs-black: #000;
        --bs-white: #fff;
        --bs-gray: #6c757d;
        --bs-gray-dark: #343a40;
        --bs-gray-100: #f8f9fa;
        --bs-gray-200: #e9ecef;
        --bs-gray-300: #dee2e6;
        --bs-gray-400: #ced4da;
        --bs-gray-500: #adb5bd;
        --bs-gray-600: #6c757d;
        --bs-gray-700: #495057;
        --bs-gray-800: #343a40;
        --bs-gray-900: #212529;
        --bs-primary: #0d6efd;
        --bs-secondary: #6c757d;
        --bs-success: #198754;
        --bs-info: #0dcaf0;
        --bs-warning: #ffc107;
        --bs-danger: #dc3545;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
        --bs-primary-rgb: 13, 110, 253;
        --bs-secondary-rgb: 108, 117, 125;
        --bs-success-rgb: 25, 135, 84;
        --bs-info-rgb: 13, 202, 240;
        --bs-warning-rgb: 255, 193, 7;
        --bs-danger-rgb: 220, 53, 69;
        --bs-light-rgb: 248, 249, 250;
        --bs-dark-rgb: 33, 37, 41;
        --bs-primary-text-emphasis: #052c65;
        --bs-secondary-text-emphasis: #2b2f32;
        --bs-success-text-emphasis: #0a3622;
        --bs-info-text-emphasis: #055160;
        --bs-warning-text-emphasis: #664d03;
        --bs-danger-text-emphasis: #58151c;
        --bs-light-text-emphasis: #495057;
        --bs-dark-text-emphasis: #495057;
        --bs-primary-bg-subtle: #cfe2ff;
        --bs-secondary-bg-subtle: #e2e3e5;
        --bs-success-bg-subtle: #d1e7dd;
        --bs-info-bg-subtle: #cff4fc;
        --bs-warning-bg-subtle: #fff3cd;
        --bs-danger-bg-subtle: #f8d7da;
        --bs-light-bg-subtle: #fcfcfd;
        --bs-dark-bg-subtle: #ced4da;
        --bs-primary-border-subtle: #9ec5fe;
        --bs-secondary-border-subtle: #c4c8cb;
        --bs-success-border-subtle: #a3cfbb;
        --bs-info-border-subtle: #9eeaf9;
        --bs-warning-border-subtle: #ffe69c;
        --bs-danger-border-subtle: #f1aeb5;
        --bs-light-border-subtle: #e9ecef;
        --bs-dark-border-subtle: #adb5bd;
        --bs-white-rgb: 255, 255, 255;
        --bs-black-rgb: 0, 0, 0;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #212529;
        --bs-body-color-rgb: 33, 37, 41;
        --bs-body-bg: #fff;
        --bs-body-bg-rgb: 255, 255, 255;
        --bs-emphasis-color: #000;
        --bs-emphasis-color-rgb: 0, 0, 0;
        --bs-secondary-color: rgba(33, 37, 41, 0.75);
        --bs-secondary-color-rgb: 33, 37, 41;
        --bs-secondary-bg: #e9ecef;
        --bs-secondary-bg-rgb: 233, 236, 239;
        --bs-tertiary-color: rgba(33, 37, 41, 0.5);
        --bs-tertiary-color-rgb: 33, 37, 41;
        --bs-tertiary-bg: #f8f9fa;
        --bs-tertiary-bg-rgb: 248, 249, 250;
        --bs-heading-color: inherit;
        --bs-link-color: #0d6efd;
        --bs-link-color-rgb: 13, 110, 253;
        --bs-link-decoration: underline;
        --bs-link-hover-color: #0a58ca;
        --bs-link-hover-color-rgb: 10, 88, 202;
        --bs-code-color: #d63384;
        --bs-highlight-color: #212529;
        --bs-highlight-bg: #fff3cd;
        --bs-border-width: 1px;
        --bs-border-style: solid;
        --bs-border-color: #dee2e6;
        --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
        --bs-border-radius: 0.375rem;
        --bs-border-radius-sm: 0.25rem;
        --bs-border-radius-lg: 0.5rem;
        --bs-border-radius-xl: 1rem;
        --bs-border-radius-xxl: 2rem;
        --bs-border-radius-2xl: var(--bs-border-radius-xxl);
        --bs-border-radius-pill: 50rem;
        --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
        --bs-focus-ring-width: 0.25rem;
        --bs-focus-ring-opacity: 0.25;
        --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
        --bs-form-valid-color: #198754;
        --bs-form-valid-border-color: #198754;
        --bs-form-invalid-color: #dc3545;
        --bs-form-invalid-border-color: #dc3545;
    }

    .ck-content [data-bs-theme=dark] {
        color-scheme: dark;
        --bs-body-color: #dee2e6;
        --bs-body-color-rgb: 222, 226, 230;
        --bs-body-bg: #212529;
        --bs-body-bg-rgb: 33, 37, 41;
        --bs-emphasis-color: #fff;
        --bs-emphasis-color-rgb: 255, 255, 255;
        --bs-secondary-color: rgba(222, 226, 230, 0.75);
        --bs-secondary-color-rgb: 222, 226, 230;
        --bs-secondary-bg: #343a40;
        --bs-secondary-bg-rgb: 52, 58, 64;
        --bs-tertiary-color: rgba(222, 226, 230, 0.5);
        --bs-tertiary-color-rgb: 222, 226, 230;
        --bs-tertiary-bg: #2b3035;
        --bs-tertiary-bg-rgb: 43, 48, 53;
        --bs-primary-text-emphasis: #6ea8fe;
        --bs-secondary-text-emphasis: #a7acb1;
        --bs-success-text-emphasis: #75b798;
        --bs-info-text-emphasis: #6edff6;
        --bs-warning-text-emphasis: #ffda6a;
        --bs-danger-text-emphasis: #ea868f;
        --bs-light-text-emphasis: #f8f9fa;
        --bs-dark-text-emphasis: #dee2e6;
        --bs-primary-bg-subtle: #031633;
        --bs-secondary-bg-subtle: #161719;
        --bs-success-bg-subtle: #051b11;
        --bs-info-bg-subtle: #032830;
        --bs-warning-bg-subtle: #332701;
        --bs-danger-bg-subtle: #2c0b0e;
        --bs-light-bg-subtle: #343a40;
        --bs-dark-bg-subtle: #1a1d20;
        --bs-primary-border-subtle: #084298;
        --bs-secondary-border-subtle: #41464b;
        --bs-success-border-subtle: #0f5132;
        --bs-info-border-subtle: #087990;
        --bs-warning-border-subtle: #997404;
        --bs-danger-border-subtle: #842029;
        --bs-light-border-subtle: #495057;
        --bs-dark-border-subtle: #343a40;
        --bs-heading-color: inherit;
        --bs-link-color: #6ea8fe;
        --bs-link-hover-color: #8bb9fe;
        --bs-link-color-rgb: 110, 168, 254;
        --bs-link-hover-color-rgb: 139, 185, 254;
        --bs-code-color: #e685b5;
        --bs-highlight-color: #dee2e6;
        --bs-highlight-bg: #664d03;
        --bs-border-color: #495057;
        --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
        --bs-form-valid-color: #75b798;
        --bs-form-valid-border-color: #75b798;
        --bs-form-invalid-color: #ea868f;
        --bs-form-invalid-border-color: #ea868f;
    }

    .ck-content *,
    .ck-content *::before,
    .ck-content *::after {
        box-sizing: border-box;
    }

    @media (prefers-reduced-motion: no-preference) {
        .ck-content :root {
            scroll-behavior: smooth;
        }
    }

    .ck-content body {
        margin: 0;
        font-family: var(--bs-body-font-family);
        font-size: var(--bs-body-font-size);
        font-weight: var(--bs-body-font-weight);
        line-height: var(--bs-body-line-height);
        color: var(--bs-body-color);
        text-align: var(--bs-body-text-align);
        background-color: var(--bs-body-bg);
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .ck-content hr {
        margin: 1rem 0;
        color: inherit;
        border: 0;
        border-top: var(--bs-border-width) solid;
        opacity: 0.25;
    }

    .ck-content h6,
    .ck-content h5,
    .ck-content h4,
    .ck-content h3,
    .ck-content h2,
    .ck-content h1 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        color: var(--bs-heading-color);
    }

    .ck-content h1 {
        font-size: calc(1.375rem + 1.5vw);
    }

    @media (min-width: 1200px) {
        .ck-content h1 {
            font-size: 2.5rem;
        }
    }

    .ck-content h2 {
        font-size: calc(1.325rem + 0.9vw);
    }

    @media (min-width: 1200px) {
        .ck-content h2 {
            font-size: 2rem;
        }
    }

    .ck-content h3 {
        font-size: calc(1.3rem + 0.6vw);
    }

    @media (min-width: 1200px) {
        .ck-content h3 {
            font-size: 1.75rem;
        }
    }

    .ck-content h4 {
        font-size: calc(1.275rem + 0.3vw);
    }

    @media (min-width: 1200px) {
        .ck-content h4 {
            font-size: 1.5rem;
        }
    }

    .ck-content h5 {
        font-size: 1.25rem;
    }

    .ck-content h6 {
        font-size: 1rem;
    }

    .ck-content p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .ck-content abbr[title] {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
    }

    .ck-content address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    .ck-content ol,
    .ck-content ul {
        padding-left: 2rem;
    }

    .ck-content ol,
    .ck-content ul,
    .ck-content dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .ck-content ol ol,
    .ck-content ul ul,
    .ck-content ol ul,
    .ck-content ul ol {
        margin-bottom: 0;
    }

    .ck-content dt {
        font-weight: 700;
    }

    .ck-content dd {
        margin-bottom: 0.5rem;
        margin-left: 0;
    }

    .ck-content blockquote {
        margin: 0 0 1rem;
    }

    .ck-content b,
    .ck-content strong {
        font-weight: bolder;
    }

    .ck-content small {
        font-size: 0.875em;
    }

    .ck-content mark {
        padding: 0.1875em;
        color: var(--bs-highlight-color);
        background-color: var(--bs-highlight-bg);
    }

    .ck-content sub,
    .ck-content sup {
        position: relative;
        font-size: 0.75em;
        line-height: 0;
        vertical-align: baseline;
    }

    .ck-content sub {
        bottom: -0.25em;
    }

    .ck-content sup {
        top: -0.5em;
    }

    .ck-content a {
        color: rgba(0, 0, 0, );
        text-decoration: underline;
    }

    .ck-content a:hover {
        --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
    }

    .ck-content a:not([href]):not([class]),
    .ck-content a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none;
    }

    .ck-content pre,
    .ck-content code,
    .ck-content kbd,
    .ck-content samp {
        font-family: var(--bs-font-monospace);
        font-size: 1em;
    }

    .ck-content pre {
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        font-size: 0.875em;
    }

    .ck-content pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    .ck-content code {
        font-size: 0.875em;
        color: var(--bs-code-color);
        word-wrap: break-word;
    }

    .ck-content a>code {
        color: inherit;
    }

    .ck-content kbd {
        padding: 0.1875rem 0.375rem;
        font-size: 0.875em;
        color: var(--bs-body-bg);
        background-color: var(--bs-body-color);
        border-radius: 0.25rem;
    }

    .ck-content kbd kbd {
        padding: 0;
        font-size: 1em;
    }

    .ck-content figure {
        margin: 0 0 1rem;
    }

    .ck-content img,
    .ck-content svg {
        vertical-align: middle;
    }

    .ck-content table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    .ck-content caption {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: var(--bs-secondary-color);
        text-align: left;
    }

    .ck-content th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    .ck-content thead,
    .ck-content tbody,
    .ck-content tfoot,
    .ck-content tr,
    .ck-content td,
    .ck-content th {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .ck-content label {
        display: inline-block;
    }

    .ck-content button {
        border-radius: 0;
    }

    .ck-content button:focus:not(:focus-visible) {
        outline: 0;
    }

    .ck-content input,
    .ck-content button,
    .ck-content select,
    .ck-content optgroup,
    .ck-content textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .ck-content button,
    .ck-content select {
        text-transform: none;
    }

    .ck-content [role=button] {
        cursor: pointer;
    }

    .ck-content select {
        word-wrap: normal;
    }

    .ck-content select:disabled {
        opacity: 1;
    }

    .ck-content [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
        display: none !important;
    }

    .ck-content button,
    .ck-content [type=button],
    .ck-content [type=reset],
    .ck-content [type=submit] {
        -webkit-appearance: button;
    }

    .ck-content button:not(:disabled),
    .ck-content [type=button]:not(:disabled),
    .ck-content [type=reset]:not(:disabled),
    .ck-content [type=submit]:not(:disabled) {
        cursor: pointer;
    }

    .ck-content ::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    .ck-content textarea {
        resize: vertical;
    }

    .ck-content fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    .ck-content legend {
        float: left;
        width: 100%;
        padding: 0;
        margin-bottom: 0.5rem;
        font-size: calc(1.275rem + 0.3vw);
        line-height: inherit;
    }

    @media (min-width: 1200px) {
        .ck-content legend {
            font-size: 1.5rem;
        }
    }

    .ck-content legend+* {
        clear: left;
    }

    .ck-content ::-webkit-datetime-edit-fields-wrapper,
    .ck-content ::-webkit-datetime-edit-text,
    .ck-content ::-webkit-datetime-edit-minute,
    .ck-content ::-webkit-datetime-edit-hour-field,
    .ck-content ::-webkit-datetime-edit-day-field,
    .ck-content ::-webkit-datetime-edit-month-field,
    .ck-content ::-webkit-datetime-edit-year-field {
        padding: 0;
    }

    .ck-content ::-webkit-inner-spin-button {
        height: auto;
    }

    .ck-content [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
    }

    .ck-content ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    .ck-content ::-webkit-color-swatch-wrapper {
        padding: 0;
    }

    .ck-content ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    .ck-content ::file-selector-button {
        font: inherit;
        -webkit-appearance: button;
    }

    .ck-content output {
        display: inline-block;
    }

    .ck-content iframe {
        border: 0;
    }

    .ck-content summary {
        display: list-item;
        cursor: pointer;
    }

    .ck-content progress {
        vertical-align: baseline;
    }

    .ck-content [hidden] {
        display: none !important;
    }
</style>
<script src="<?= base_url('admin/assets/js/ckeditor/build/ckeditor.js') ?>"></script>
<style src="<?= base_url('admin/assets/js/ckeditor/build/style.css') ?>"></style>
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    $(document).ready(() => {
        const forms = {
            __init: () => {
                $('.fetch-form').submit(async function(e) {
                    try {
                        e.preventDefault();
                        $(this).children('.msg-block').html("");

                        const url = $(this).attr('action');;
                        const formdata = new FormData(this);
                        const reload = $(this).data('reload');

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
                            $(this).children('.msg-block').html(forms.html_success(res.msg));

                            if (reload == true) {
                                await sleep(1000);
                                window.location.reload();
                            }


                        } else if (res.status === "bad") {

                            if (typeof res.errors === "string") {
                                $(this).children('.msg-block').html(forms.html_error(res.errors));
                            } else {
                                let errors = Object.values(res.errors);
                                $(this).children('.msg-block').html(forms.html_error(errors.join("<br>")));
                            }

                        }
                    } catch (e) {
                        console.log(e);
                        return Promise.reject(new Error("fetch error"))
                    }

                })
                $(document).on("click", ".remove-parent", function() {
                    $(this).parent().remove();
                })
            },
            html_error: (data) => {
                return `<div class="mt-3 flex items-center rounded bg-lightred p-3 text-white"><div>${data} </div> <button type="button" class="ml-auto hover:opacity-50 rotate-0 hover:rotate-180 transition-all duration-300 remove-parent">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                    <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                    </button></div>`;
            },
            html_success: (data) => {
                return `<div class="rounded bg-lightgreen-100 p-3 mt-3 text-black">${data}</div>`;
            }
        }
        forms.__init();


        const deleteModal = {

            __init: () => {
                const myModalEl = document.getElementById('delete-modal')
                myModalEl.addEventListener('show.bs.modal', event => {
                    const parent = $(event.relatedTarget).parent();
                    const id = parent.data('id');
                    $("#delete-id").val(id);

                })
            }
        }
        deleteModal.__init();

    });

    const ckcss = {
        "--ck-color-button-default-hover-background": "#000",
        '--ck-color-button-default-active-background': '#000',
        "--ck-color-base-foreground": "#fafafa",
        "--ck-color-base-background": "#fff",
        "--ck-color-base-border": "#ccced1",
        "--ck-color-base-action": "#53a336",
        "--ck-color-base-focus": "#6cb5f9",
        "--ck-color-base-text": "#333",
        "--ck-color-base-active": "#2977ff",
        "--ck-color-base-active-focus": "#0d65ff",
        "--ck-color-base-error": "#db3700",
        "--ck-color-focus-border-coordinates": "218,81.8%,56.9%",
        "--ck-color-focus-border": "hsl(var(--ck-color-focus-border-coordinates))",
        "--ck-color-focus-outer-shadow": "#cae1fc",
        "--ck-color-focus-disabled-shadow": "rgba(119,186,248,.3)",
        "--ck-color-focus-error-shadow": "rgba(255,64,31,.3)",
        "--ck-color-text": "var(--ck-color-base-text)",
        "--ck-color-shadow-drop": "rgba(0,0,0,.15)",
        "--ck-color-shadow-drop-active": "rgba(0,0,0,.2)",
        "--ck-color-shadow-inner": "rgba(0,0,0,.1)",
        "--ck-color-button-default-background": "transparent",
        "--ck-color-button-default-disabled-background": "transparent",
        "--ck-color-button-on-background": "#f0f7ff",
        "--ck-color-button-on-hover-background": "#dbecff",
        "--ck-color-button-on-active-background": "#dbecff",
        "--ck-color-button-on-disabled-background": "#f0f2f4",
        "--ck-color-button-on-color": "#000",
        "--ck-color-button-action-background": "var(--ck-color-base-action)",
        "--ck-color-button-action-hover-background": "#4d9d30",
        "--ck-color-button-action-active-background": "#4d9d30",
        "--ck-color-button-action-disabled-background": "#7ec365",
        "--ck-color-button-action-text": "var(--ck-color-base-background)",
        "--ck-color-button-save": "#008a00",
        "--ck-color-button-cancel": "#db3700",
        "--ck-color-switch-button-off-background": "#939393",
        "--ck-color-switch-button-off-hover-background": "#7d7d7d",
        "--ck-color-switch-button-on-background": "var(--ck-color-button-action-background)",
        "--ck-color-switch-button-on-hover-background": "#4d9d30",
        "--ck-color-switch-button-inner-background": "var(--ck-color-base-background)",
        "--ck-color-switch-button-inner-shadow": "rgba(0,0,0,.1)",
        "--ck-color-dropdown-panel-background": "#252525",
        "--ck-color-dropdown-panel-border": "var(--ck-color-base-border)",
        "--ck-color-input-background": "var(--ck-color-base-background)",
        "--ck-color-input-border": "var(--ck-color-base-border)",
        "--ck-color-input-error-border": "var(--ck-color-base-error)",
        "--ck-color-input-text": "var(--ck-color-base-text)",
        "--ck-color-input-disabled-background": "#f2f2f2",
        "--ck-color-input-disabled-border": "var(--ck-color-base-border)",
        "--ck-color-input-disabled-text": "#757575",
        "--ck-color-list-background": "#282828",
        "--ck-color-list-button-hover-background": "var(--ck-color-button-default-hover-background)",
        "--ck-color-list-button-on-background": "var(--ck-color-button-on-color)",
        "--ck-color-list-button-on-background-focus": "var(--ck-color-button-on-color)",
        "--ck-color-list-button-on-text": "var(--ck-color-base-background)",
        "--ck-color-panel-background": "var(--ck-color-base-background)",
        "--ck-color-panel-border": "var(--ck-color-base-border)",
        "--ck-color-toolbar-background": "#252525",
        "--ck-color-toolbar-border": "var(--ck-color-base-border)",
        "--ck-color-tooltip-background": "var(--ck-color-base-text)",
        "--ck-color-tooltip-text": "var(--ck-color-base-background)",
        "--ck-color-engine-placeholder-text": "#707070",
        "--ck-color-upload-bar-background": "#6cb5f9",
        "--ck-color-link-default": "#0000f0",
        "--ck-color-link-selected-background": "rgba(31,176,255,.1)",
        "--ck-color-link-fake-selection": "rgba(31,176,255,.3)",
        "--ck-color-highlight-background": "#ff0",
        "--ck-color-light-red": "#fcc",
        "ck-disabled-opacity": ".5",
        "ck-focus-outer-shadow-geometry": "0 0 0 3px",
        "ck-focus-outer-shadow": "var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-outer-shadow)",
        "ck-focus-disabled-outer-shadow": "var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-disabled-shadow)",
        "ck-focus-error-outer-shadow": "var(--ck-focus-outer-shadow-geometry) var(--ck-color-focus-error-shadow)",
        "ck-focus-ring": "1px solid var(--ck-color-focus-border)",
        "ck-font-size-base": "13px",
        "ck-line-height-base": "1.84615",
        "ck-font-face": "Helvetica,Arial,Tahoma,Verdana,Sans-Serif",
        "ck-font-size-tiny": "0.7em",
        "ck-font-size-small": "0.75em",
        "ck-font-size-normal": "1em",
        "ck-font-size-big": "1.4em",
        "ck-font-size-large": "1.8em",
        "ck-ui-component-min-height": "2.3em",
        "--ck-color-focus-outer-shadow": "#333"
    };
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // Editor configuration.

            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'uploadImage', 'blockQuote', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            }

        })
        .then(editor => {
            window.editor = editor;

            //Set a custom container for the toolbar.
            //console.log(editor.ui.view.toolbar.element);
            document.querySelector('#document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            $(":root").css(ckcss);
            $('.ck.ck-toolbar').css('background', "inherit").css('border', 'none').css('--ck-color-base-background', '#282828')
            console.log($('.ck .ck-list').css('background', "#282828"))


            // document.querySelector('.ck.ck-toolbar').classList.add('ck-reset_all');
        })
        .catch(handleSampleError);

    function handleSampleError(error) {
        const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

        const message = [
            'Oops, something went wrong!',
            `Please, report the following error on ${ issueUrl } with the build id "1ftwbosfobib-32rhnh6therg" and the error stack trace:`
        ].join('\n');

        console.error(message);
        console.error(error);
    }
</script>
<?= $this->endSection() ?>