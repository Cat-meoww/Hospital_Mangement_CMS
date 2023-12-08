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
    <div class="flex justify-end">
        <div x-data="modals">
            <div class="flex items-center ">
                <button type="button" title="Create service" class="btn text-black dark:text-white border hover:bg-indigo-300 dark:hover:bg-indigo-300 border-indigo-300 bg-transparent hover:text-black" @click="toggle">
                    Create Doctor
                </button>
            </div>
            <div class="fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                <div class="flex items-center justify-center min-h-screen px-4" @click.self="open = false">
                    <div x-show="open" x-transition x-transition.duration.300 class="bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl my-8">
                        <div class="flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                            <h5 class="font-semibold text-lg">Create service</h5>
                            <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" @click="toggle">
                                <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor" />
                                    <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-black dark:text-white flex flex-col gap-3">
                                <form action="<?= base_url("api/admin/all-master/doctors-list/create") ?>" method="post" id="doc-upload" data-reload="true" class="grid grid-cols-2 gap-3  fetch-form" enctype="multipart/form-data">

                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Doctors name</label>
                                        <input type="text" value="" required minlength="2" placeholder="...Type branch name unique " name="name" class="form-input">
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Enter Slug</label>
                                        <input type="text" value="" required minlength="2" placeholder="...Type slug  unique " pattern="[A-Za-z0-9\-]+" name="slug" class="form-input">
                                    </div>


                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Departments</label>
                                        <?= form_dropdown('departments[]', $Options['departments'], [], 'id="create-departments" multiple required width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Services</label>
                                        <?= form_dropdown('services[]', [], [], 'id="create-services" multiple  width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Experience</label>
                                        <input type="number" value="" required minlength="2" placeholder="...Type Experience in numbers " pattern="[0-9\-]+" name="experience" class="form-input">
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Education</label>
                                        <input type="text" value="" required minlength="2" placeholder="... Education eg: MS.(Gen.Surg.).,Mch.(SGE) " name="education" class="form-input">
                                    </div>

                                    <div class="mt-2 flex justify-center rounded-lg bg-lightpurple/50 dark:bg-white/5 px-6 pt-5 pb-6">
                                        <div class="space-y-1 text-center">


                                            <label for="file-upload" class="flex text-sm text-gray-600">
                                                <p class="pr-4 pt-1 text-black/40 dark:text-white/40">Drop fileshere or upload files</p>
                                                <div class="relative cursor-pointer rounded-lg bg-black/5 dark:bg-white/5 py-1.5 px-2 text-xs text-black dark:text-white focus-within:outline-none focus-within:ring-0 focus-within:ring-offset-0">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="imagefile" required type="file" accept="image/*" class="sr-only" />
                                                </div>

                                            </label>

                                        </div>
                                    </div>


                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Role</label>
                                        <?= form_dropdown('role',  $Options['roles'], [], ' required width="100%" data-placeholder="Select an option" class=" form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>

                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Visiblity</label>
                                        <?= form_dropdown('visiblity', $Options['visiblity'], '', 'required class="form-select py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>

                                    <div class="relative ">
                                        <textarea id="floating_filled" name="description" rows="2" class="block rounded-lg px-5 pb-4 pt-[38px] w-full text-black dark:text-white bg-white dark:bg-white/5 border border-black/10 dark:border-white/10 appearance-none focus:outline-none focus:ring-0 focus:border-black/10 dark:focus:border-white/10 peer" placeholder=" "></textarea>
                                        <label for="floating_filled" class="absolute text-sm text-black/40 dark:text-white/40 duration-300 transform -translate-y-2 scale-90 top-6 z-10 origin-[0] left-5 peer-focus:text-black/40 dark:peer-focus:text-white/40 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-2">
                                            Description
                                        </label>
                                    </div>
                                    <div class="msg-block col-span-2">

                                    </div>

                                    <div class="flex justify-end items-center mt-4 gap-4 col-span-2">
                                        <button type="submit" class="btn text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black">Submit</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <a href="<?= base_url("stream/channel/create") ?>" type="button" class="btn text-black dark:text-white border hover:bg-indigo-300 dark:hover:bg-indigo-300 border-indigo-300 bg-transparent hover:text-black">Create Faq</a> -->
    </div>



    <include src="/"></include>
    <?php if (count($Dataset) == 0) : ?>
        <div class="border border-black/10 dark:border-white/10 p-5 flex justify-center items-center rounded-md">
            <div>
                <p class="text-sm font-semibold">No Doctors</p>
            </div>
        </div>
    <?php else : ?>
        <div x-data="basic" class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Doctors List </h2>
            </div>
            <div class>
                <table id="dt-table" class="whitespace-nowrap table-hover table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Doctor Name</th>
                        <th>Slug</th>
                        <th>Departments</th>
                        <th>Services</th>
                        <th>Visiblity</th>
                        <th class="text-center">Operations</th>
                    </thead>
                    <tbody>
                        <?php foreach ($Dataset as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item->name ?></td>
                                <td><?= $item->slug ?></td>
                                <td class="tab-md-normal">
                                    <?php if ($item->dept_ids ?? false) : ?>
                                        <?php foreach (explode(',', $item->dept_ids) ?? []  as  $dept) : ?>
                                            <p class="px-1.5 text-[#8A8CD9] bg-[#EDEDFF] text-xs rounded-[18px] inline-block"><?= $Options['departments'][$dept] ?? "unknown"  ?></p>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </td>
                                <td class="tab-md-normal">
                                    <?php if ($item->services ?? false) : ?>
                                        <?php foreach (explode(',', $item->services) ?? []  as  $service) : ?>
                                            <p class="px-1.5 text-[#8A8CD9] bg-[#EDEDFF] text-xs rounded-[18px] inline-block"><?= $Options['services'][$service] ?? "unknown"  ?></p>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </td>
                                <?php if ($item->visibility === "Public") : ?>
                                    <td class="flex items-center text-xs text-[#4AA785] py-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                        </svg>
                                        <p>Public</p>
                                    </td>
                                <?php else : ?>
                                    <td class="flex items-center text-xs text-black/40 dark:text-white/40 py-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                        </svg>
                                        <p>Private</p>
                                    </td>
                                <?php endif; ?>
                                <td>
                                    <div class="flex gap-1 flex-row justify-center" data-id="<?= $item->id ?>" data-name="<?= esc($item->name) ?>" data-description="<?= esc($item->description) ?>" data-education="<?= esc($item->education) ?>" data-experience="<?= esc($item->experience) ?>" data-role="<?= esc($item->role) ?>" data-services="<?= esc($item->services) ?>" data-slug="<?= esc($item->slug) ?>" data-departments="<?= esc($item->dept_ids) ?>" data-visiblity="<?= $item->visibility ?>">
                                        <a role="button" title="Edit cms" href="<?= base_url('admin/cms-page/doctor/'.$item->id) ?>" class="p-1 text-black dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                <path d="M48,64a8,8,0,0,1,8-8H72V40a8,8,0,0,1,16,0V56h16a8,8,0,0,1,0,16H88V88a8,8,0,0,1-16,0V72H56A8,8,0,0,1,48,64ZM184,192h-8v-8a8,8,0,0,0-16,0v8h-8a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-8h8a8,8,0,0,0,0-16Zm56-48H224V128a8,8,0,0,0-16,0v16H192a8,8,0,0,0,0,16h16v16a8,8,0,0,0,16,0V160h16a8,8,0,0,0,0-16ZM219.31,80,80,219.31a16,16,0,0,1-22.62,0L36.68,198.63a16,16,0,0,1,0-22.63L176,36.69a16,16,0,0,1,22.63,0l20.68,20.68A16,16,0,0,1,219.31,80Zm-54.63,32L144,91.31l-96,96L68.68,208ZM208,68.69,187.31,48l-32,32L176,100.69Z"></path>
                                            </svg>
                                        </a>
                                        <button type="button" title="Edit" data-bs-toggle="modal" data-bs-target="#edit-modal" class="p-1 text-black dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,120v88a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h88a8,8,0,0,1,0,16H48V208H208V120a8,8,0,0,1,16,0Z"></path>
                                            </svg>
                                        </button>
                                        <button type="button" title="Delete" data-bs-toggle="modal" data-bs-target="#delete-modal" class="p-1 text-black dark:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                <path d="M216,48H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM192,208H64V64H192ZM80,24a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H88A8,8,0,0,1,80,24Z"></path>
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
                <h5 class="font-semibold text-lg">Edit Doctor</h5>
                <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" data-bs-dismiss="modal">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                        <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-5">
                <form action="<?= base_url("api/admin/all-master/doctors-list/update") ?>" method="post" data-reload="true" class="grid grid-cols-2 gap-3 fetch-form" enctype="multipart/form-data">
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Doctors name</label>
                        <input type="text" id="form-doctor-name" value="" required minlength="2" placeholder="...Type branch name unique " name="name" class="form-input">
                    </div>
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Enter Slug</label>
                        <input type="text" id="form-doctor-slug" value="" required minlength="2" placeholder="...Type slug  unique " pattern="[A-Za-z0-9\-]+" name="slug" class="form-input">
                    </div>
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Departments</label>
                        <?= form_dropdown('departments[]', $Options['departments'], [], 'id="form-doctor-departments" multiple required width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Services</label>
                        <?= form_dropdown('services[]', [], [], 'id="form-doctor-services" multiple  width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Experience</label>
                        <input type="number" id="form-doctor-experience" value="" required minlength="2" placeholder="...Type Experience in numbers " pattern="[0-9\-]+" name="experience" class="form-input">
                    </div>
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Education</label>
                        <input type="text" id="form-doctor-education" value="" required minlength="2" placeholder="... Education eg: MS.(Gen.Surg.).,Mch.(SGE) " name="education" class="form-input">
                    </div>

                    <div class="mt-2 flex justify-center rounded-lg bg-lightpurple/50 dark:bg-white/5 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">


                            <label for="file-upload-edit" class="flex text-sm text-gray-600">
                                <p class="pr-4 pt-1 text-black/40 dark:text-white/40">Drop fileshere or upload files</p>
                                <div class="relative cursor-pointer rounded-lg bg-black/5 dark:bg-white/5 py-1.5 px-2 text-xs text-black dark:text-white focus-within:outline-none focus-within:ring-0 focus-within:ring-offset-0">
                                    <span>Upload a file</span>
                                    <input id="file-upload-edit" name="imagefile" type="file" accept="image/*" class="sr-only" />
                                </div>

                            </label>

                        </div>
                    </div>


                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Role</label>
                        <?= form_dropdown('role',  $Options['roles'], [], ' id="form-doctor-role" required width="100%" data-placeholder="Select an option" class=" form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>







                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <?= form_dropdown('visiblity', $Options['visiblity'], '', 'id="form-doctor-visiblity" required class="form-select py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>
                    <div class="relative ">
                        <textarea id="form-doctor-description" name="description" rows="2" class="block rounded-lg px-5 pb-4 pt-[38px] w-full text-black dark:text-white bg-white dark:bg-white/5 border border-black/10 dark:border-white/10 appearance-none focus:outline-none focus:ring-0 focus:border-black/10 dark:focus:border-white/10 peer" placeholder=" "></textarea>
                        <label for="form-doctor-description" class="absolute text-sm text-black/40 dark:text-white/40 duration-300 transform -translate-y-2 scale-90 top-6 z-10 origin-[0] left-5 peer-focus:text-black/40 dark:peer-focus:text-white/40 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-2">
                            Description
                        </label>
                    </div>
                    <input type="hidden" name="id" id="form-doctor-id">
                    <div class="msg-block">

                    </div>

                    <div class="flex justify-end items-center mt-8 gap-4">
                        <button type="button" class="btn !bg-lightred !text-white" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn">Save</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<!-- DELETE Modal -->
<div class="modal fade fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog flex items-center justify-center min-h-screen px-4">
        <div class="modal-content bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
            <div class="modal-header flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                <h5 class="font-semibold text-lg">Delete Doctor</h5>
                <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" data-bs-dismiss="modal">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                        <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-5">
                <form action="<?= base_url("api/admin/all-master/doctors-list/delete") ?>" method="post" data-reload="true" class="flex  flex-col fetch-form" enctype="multipart/form-data">
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
            current_id: null,
            __init: () => {
                const myModalEl = document.getElementById('edit-modal')
                myModalEl.addEventListener('show.bs.modal', event => {
                    try {
                        $("#form-doctor-departments").select2('destroy');
                        const parent = $(event.relatedTarget).parent();
                        const id = parent.data('id');
                        const name = parent.data('name');
                        const description = parent.data('description');
                        let departments = parent.data('departments');
                        const services = parent.data('services');
                        const slug = parent.data('slug');
                        const education = parent.data('education');
                        const experience = parent.data('experience');
                        const role = parent.data('role');
                        const visiblity = parent.data('visiblity');
                        editModal.current_id = id;
                        departments += ",0"

                        $.each(departments.split(","), function(i, e) {
                            $("#form-doctor-departments option[value='" + e + "']").prop("selected", true);
                        });


                        $("#form-doctor-id").val(id);
                        $("#form-doctor-name").val(name);
                        $("#form-doctor-description").text(description);
                        $("#form-doctor-slug").val(slug);
                        $("#form-doctor-education").val(education);
                        $("#form-doctor-experience").val(experience);
                        $("#form-doctor-role").val(role);
                        $("#form-doctor-visiblity").val(visiblity);

                        //$('#form-doctor-departments').trigger('change.select2');

                    } catch (error) {
                        console.warn(error)
                    } finally {
                        $('#form-doctor-departments').select2({
                            tags: false
                        });
                        $('#form-doctor-departments').trigger('change')
                    }



                })
            },

        }
        editModal.__init();
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


        $('.select2').select2({
            tags: false
        });

        const services = {
            __init: () => {
                $('#create-departments').on('change', async function(e) {
                    try {
                        const departments = $(this).val();
                        $("#create-services option").remove();
                        const options = await services.ping(departments)

                        $("#create-services").select2({
                            data: options,
                            tags: false,
                        });

                    } catch (error) {
                        console.error(error);
                    }
                });
                $('#form-doctor-departments').on('change', async function(e) {
                    try {
                        const departments = $(this).val();
                        //$("#form-doctor-services").select2('destroy');
                        $("#form-doctor-services option").remove();

                        const options = await services.ping(departments, editModal.current_id);

                        $("#form-doctor-services").select2({
                            data: options,
                            tags: false,
                        });

                    } catch (error) {
                        console.error(error);
                    }
                });
            },
            ping: async (departments, doctor_id = false) => {
                try {

                    const url = "<?= base_url('api/admin/all-master/doctors-list/generate-services') ?>";
                    const formdata = new FormData()
                    console.log()
                    for (const dept of departments) {
                        formdata.append('departments[]', dept)
                    }

                    if (doctor_id) {
                        formdata.append('doctor_id', doctor_id)
                    }

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
        services.__init();


    });
</script>

<?= $this->endSection() ?>