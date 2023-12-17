<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" media="screen" href=" <?= base_url("admin/assets/css/simple-datatables.css") ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" />

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

<div class="grid grid-cols-1 gap-3">

    <div class="flex gap-3 justify-end">

        <div x-data="modals">
            <div class="flex items-center ">

                <button type="button" title="Filter Bookings" class="text-white dark:text-white border hover:bg-indigo-300 dark:hover:bg-indigo-300 border-indigo-300 bg-transparent hover:text-white  rounded-md h-10 w-10 flex items-center justify-center" @click="toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M200,128a8,8,0,0,1-8,8H64a8,8,0,0,1,0-16H192A8,8,0,0,1,200,128Zm32-56H24a8,8,0,0,0,0,16H232a8,8,0,0,0,0-16Zm-80,96H104a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16Z"></path>
                    </svg>
                </button>
            </div>
            <div class="fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                <div class="flex items-center justify-center min-h-screen px-4" @click.self="open = false">
                    <div x-show="open" x-transition x-transition.duration.300 class="bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8">
                        <div class="flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                            <h5 class="font-semibold text-lg">Filter Entries</h5>
                            <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" @click="toggle">
                                <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor" />
                                    <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-black dark:text-white flex flex-col gap-3">
                                <div class="grid grid-cols-2 gap-3   ">
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Branches</label>
                                        <?= form_dropdown('branch', $Options['branches'], '', 'id="ss-branch"   width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Services</label>
                                        <?= form_dropdown('service', $Options['services'], '', 'id="ss-service"   width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 col-span-2">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Date Type</label>
                                        <?= form_dropdown('date_type', $Options['date_types'], '', 'id="ss-datetype"   width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">From Date</label>
                                        <input type="date" value="<?= date('Y-m-d') ?>" required="" class="form-input" id="ss-from">
                                    </div>
                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">To Date</label>
                                        <input type="date" value="<?= date('Y-m-d') ?>" required="" class="form-input" id="ss-to">
                                    </div>

                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 col-span-2">
                                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Booking Status</label>
                                        <?= form_dropdown('pay-status', $Options['booking_status'], '', 'id="ss-booking-status"   width="100%" data-placeholder="Select an option" class="select2 form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                                    </div>


                                    <div class="flex justify-end items-center mt-4 gap-4 col-span-2">
                                        <button @click="toggle" class="reload-datatable btn text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black">Submit</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <include src="/"></include>

    <div class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
        <div class="px-2 py-1 mb-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold">General Booking Enquires </h2>
            <span id="display-date" class="flex items-center text-xs text-black/40 dark:text-white/40"></span>
        </div>





        <div class>
            <table id="ss-datatable" class="whitespace-nowrap table-hover table-bordered" role="grid" aria-describedby="user-list-page-info">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Service</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Entry Date</th>
                        <th scope="col">Follow Up</th>
                        <th scope="col">Revenue</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>


                </tbody>
            </table>
        </div>


    </div>



</div>

<!-- Update Status Modal -->
<div class="modal fade fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto" id="update-status-modal" tabindex="-1" aria-labelledby="edit-modalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog flex items-center justify-center min-h-screen px-4">
        <div class="modal-content bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
            <div class="modal-header flex bg-white dark:bg-black border-b border-black/10 dark:border-white/10 items-center justify-between px-5 py-3">
                <h5 class="font-semibold text-lg">Update Booking Status <span id="booking-id"> </span></h5>
                <button type="button" class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white" data-bs-dismiss="modal">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                        <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body p-5">
                <form action="<?= base_url("api/admin/datatables/bookings/general/update_status") ?>" method="post" data-reload="false" class="flex gap-3 flex-col fetch-form" enctype="multipart/form-data">
                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Move To</label>
                        <?= form_dropdown('action',  $Options['action'], '', 'id="booking-status" required width="100%"  class=" form-select !bg-none py-2.5 px-4 w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;"'); ?>
                    </div>
                    <div id="booking-revenue" style="display: none;" class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Revenue</label>
                        <input type="text" autocomplete="off" minlength="2" placeholder="... Total Collected Revenue " name="revenue" class="form-input">
                    </div>
                    <div id="booking-followup" style="display: none;" class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
                        <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Follow Up Date</label>
                        <input type="Date" autocomplete="off" minlength="2" placeholder="... Follow Up Date" name="follow_date" class="form-input">
                    </div>



                    <div class="relative ">
                        <textarea id="floating_filled" required name="comments" rows="2" class="block rounded-lg px-5 pb-4 pt-[38px] w-full text-black dark:text-white bg-white dark:bg-white/5 border border-black/10 dark:border-white/10 appearance-none focus:outline-none focus:ring-0 focus:border-black/10 dark:focus:border-white/10 peer" placeholder=" "></textarea>
                        <label for="floating_filled" class="absolute text-sm text-black/40 dark:text-white/40 duration-300 transform -translate-y-2 scale-90 top-6 z-10 origin-[0] left-5 peer-focus:text-black/40 dark:peer-focus:text-white/40 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-2">
                            Comments
                        </label>
                    </div>


                    <input type="hidden" name="id" id="form-booking-id">
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



<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?= base_url('admin/assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('admin/assets/js/dataTables.bootstrap4.min.js') ?>"></script>


<!-- ExcelButton -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src=" https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>




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

                            //Reloading datatable
                            //console.log("Reloading datatable")
                            this.reset();
                            $(this).find("input,select,textarea").trigger('change');
                            await sleep(1000)


                            setTimeout(() => {
                                $(this).children('.msg-block').html("");
                            }, 2000)

                            updateStatus?.modal.hide();
                            $("#ss-datatable").DataTable().ajax.reload(null, false);
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
        const statusColor = {
            'No Action': 'text-black/40 dark:text-white/40',
            'Completed': 'text-[#4AA785]',
            'In Progress': 'text-[#8A8CD9]',
            'Rejected': 'text-[#FFC555]',
        };
        window.call_datatable = function() {
            if ($("#ss-datatable").length) {
                $('#ss-datatable').dataTable().fnDestroy()
            }


            let dbtable = $('#ss-datatable').DataTable({
                createdRow: function(row, data, dataIndex) {

                    $(row).addClass('dt-rows');
                    $(row).data('status', data['status']);
                    $(row).data('id', data['id']);

                },

                "initComplete": function(settings, json) {
                    const from = $('#ss-from').val();
                    const to = $('#ss-to').val();
                    if (from == to) {
                        $("#display-date").html(new Date(from).toLocaleDateString('en-GB'))
                        return
                    }
                    $("#display-date").html(new Date(from).toLocaleDateString('en-GB') + " <=> " + new Date(to).toLocaleDateString('en-GB'))
                },
                search: {
                    return: true,
                },
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: '<?= base_url("api/admin/datatables/bookings/general") ?>',
                    type: "POST",
                    data: {
                        datetype: $('#ss-datetype').val(),
                        from_date: $('#ss-from').val(),
                        to_date: $('#ss-to').val(),
                        booking_status: $('#ss-booking-status').val(),
                        branch: $('#ss-branch').val(),
                        service: $('#ss-service').val(),
                    }
                },
                orderClasses: true,
                searchable: true,
                perPage: 10,
                lengthMenu: [
                    [10, 20, 30, 40, 50, -1],
                    [10, 20, 30, 40, 50, "All"]
                ],
                dom: "<'dataTable-top'<'dataTable-dropdown'l><'dataTable-export'B><'dataTable-search'f>><'dataTable-container'<'col-sm-12'tr>><'dataTable-bottom'<'dataTable-info'i><'dataTable-pagination'p>>",
                buttons: [{
                    extend: 'excel',
                    className: 'btn py-1 px-3 text-[11.5px] text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black ',
                    text: 'Excel'
                }],

                language: {
                    paginate: {
                        first: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        last: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        previous: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        next: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                    },
                    search: "",
                    searchPlaceholder: "Search...",
                    lengthMenu: '_MENU_'

                },
                columnDefs: [{
                        targets: [0, 3, 4, 5, 6],
                        orderable: true
                    }, // Enable sorting for columns with indices 0, 1, and 2
                    {
                        targets: '_all',
                        orderable: false
                    }, // Disable sorting for all other columns
                    {
                        "targets": 10,
                        "render": function(data, type, row) {
                            const status = row['status'];
                            
                            if (statusColor?.[status] ?? false) {
                                return `<div class="flex items-center text-xs ${statusColor[status]} ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                                    </svg>
                                                    <p>${data}</p>
                                        </div>`;
                            } else {
                                return `<div class="flex items-center text-xs text-black/40 dark:text-white/40">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                                    </svg>
                                                    <p>${data}</p>
                                        </div>`;
                            }

                        }
                    },
                    {
                        "targets": 11,
                        "render": function(data, type, row) {

                            const status = row['status'];
                            if (status == "Completed" || status == "Rejected") {
                                return "";
                            }
                            return `<button class="btn py-1 px-3 text-[11.5px] update-status-btn">Move to</button>`

                        }
                    }
                ]
            });
        }
        call_datatable();



        $('.reload-datatable').click(call_datatable);

        const updateStatus = {
            modal: false,
            __init: function() {
                this.modal = new bootstrap.Modal('#update-status-modal', {
                    backdrop: true
                })

                $('body').on('click', '.update-status-btn', function() {
                    const tr = $(this).closest('tr');
                    $('#booking-id').html('#' + tr.data("id"))
                    $('#form-booking-id').val(tr.data("id"))
                    updateStatus.modal?.show();
                });

                $("#booking-status").change(function() {
                    const val = $(this).val();

                    // 3 = Completed
                    // 2 = Progress
                    if (val == "3") {
                        $('#booking-revenue').show()
                    } else {
                        $('#booking-revenue').hide()
                    }
                    if (val == "2") {
                        $('#booking-followup').show()
                    } else {
                        $('#booking-followup').hide()
                    }
                })
            },

        }
        updateStatus.__init();
    });
</script>

<?= $this->endSection() ?>