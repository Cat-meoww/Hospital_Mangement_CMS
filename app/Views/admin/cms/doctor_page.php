<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= base_url('frontend/assets/css/ck-content.css') ?>">
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