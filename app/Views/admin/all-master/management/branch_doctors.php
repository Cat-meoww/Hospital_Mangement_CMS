<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>

<link rel="stylesheet" type="text/css" media="screen" href=" <?= base_url("admin/assets/css/simple-datatables.css") ?>" />
<script src="<?= base_url("admin/assets/js/simple-datatables.js") ?>"></script>
<script src="<?= base_url("admin/assets/js/init-datatables.js") ?>"></script>
<style>
    .tab-md-normal {
        white-space: normal;
        overflow: hidden;
        max-width: 600px !important;
    }
</style>
<link rel="stylesheet" type="text/css" media="screen" href=" <?= base_url("admin/assets/css/select2.css") ?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="grid grid-cols-1 gap-7">




    <include src="/"></include>
    <?php if (count($Dataset) == 0) : ?>
        <div class="border border-black/10 dark:border-white/10 p-5 flex justify-center items-center rounded-md">
            <div>
                <p class="text-sm font-semibold">No Branches</p>
            </div>
        </div>
    <?php else : ?>
        <div x-data="basic" class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Branch Doctors </h2>
            </div>
            <div class>
                <table id="dt-table" class="whitespace-nowrap table-hover table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Branch Name</th>
                        <th class="white-space-normal">Doctors</th>
                        <th class="text-center">Operations</th>
                    </thead>
                    <tbody>
                        <?php foreach ($Dataset as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item->name ?></td>
                                <td class="tab-md-normal">
                                    <?php if ($item->doctors ?? false) : ?>
                                        <?php foreach (explode(',', $item->doctors) ?? []  as  $doctor) : ?>
                                            <p class="px-1.5 text-[#8A8CD9] bg-[#EDEDFF] text-xs rounded-[18px] inline-block"><?= $Options['doctors'][$doctor] ?? "unknown"  ?></p>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <div class="flex gap-1 flex-row justify-center" data-id="<?= $item->id ?>" data-name="<?= esc($item->name) ?>" data-departments="<?= esc($item->departments) ?>">

                                        <button type="button" title="Edit" data-bs-toggle="modal" data-bs-target="#edit-modal" class="p-1 text-black dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,120v88a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h88a8,8,0,0,1,0,16H48V208H208V120a8,8,0,0,1,16,0Z"></path>
                                            </svg>
                                        </button>

                                    </div>
                                </td>
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php endif ?>

</div>

<!-- EDIT Modal -->
<div class="modal fade fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" id="edit-modal" tabindex="-1" aria-labelledby="edit-modalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog flex items-center justify-center min-h-screen px-4">
        <div class="modal-content bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl my-8">
            <div class="modal-header flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                <h5 class="font-semibold text-lg">Edit Branch Doctors</h5>
                <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" data-bs-dismiss="modal">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                        <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-5">
                <form action="<?= base_url("api/admin/all-master/branches/management/doctors/update") ?>" method="post" data-reload="true" class="flex gap-3 flex-col   fetch-form" enctype="multipart/form-data">
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Branch name</label>
                        <input type="text" id="form-branch-name" value="" readonly required minlength="2" placeholder="...Type branch name unique " name="name" class="form-input">
                    </div>





                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Doctors</label>
                        <?= form_dropdown('doctors[]', [], [], 'id="form-branch-doctors" multiple required width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>





                    <input type="hidden" name="id" id="form-branch-id">
                    <div class="msg-block col-span-2">

                    </div>

                    <div class="flex justify-end items-center mt-8 gap-4 col-span-2">
                        <button type="button" class="btn !bg-lightred !text-white" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn">Save</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

        const editModal = {

            __init: () => {
                const myModalEl = document.getElementById('edit-modal')
                myModalEl.addEventListener('show.bs.modal', async (event) => {

                    try {
                        const parent = $(event.relatedTarget).parent();
                        const id = parent.data('id');
                        const name = parent.data('name');
                        let departments = parent.data('departments');

                        departments += ",0"
                        $("#form-branch-doctors").select2('destroy');

                        $("#form-branch-id").val(id);

                        $("#form-branch-name").val(name);
                       
                        $("#form-branch-doctors option").remove();


                        $.each(departments.split(","), function(i, e) {
                            $("#form-branch-doctors option[value='" + e + "']").prop("selected", true);
                        });

                        const branch_options = await fetch_services_options(id);
                        console.log(branch_options);
                        $("#form-branch-doctors").select2({
                            data: branch_options,
                            tags: false,
                        });
                        // $("#form-branch-services").val(departments);
                    } catch (e) {
                        console.log(e)
                    }

                })
                $('.select2').select2({
                    tags: false
                });
            }
        }
        editModal.__init();


        async function fetch_services_options(branchId) {
            try {



                const url = "<?= base_url('api/admin/all-master/branches/management/doctors/generate_options') ?>";
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


    });
</script>

<?= $this->endSection() ?>