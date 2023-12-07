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
                    <div x-show="open" x-transition x-transition.duration.300 class="bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8">
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
                                <div class="flex gap-3 flex-col fetch-form">

                                    <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10">
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


                                    <div class="flex justify-end items-center mt-4 gap-4 col-span-2">
                                        <button @click="toggle"  class="reload-datatable btn text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black">Submit</button>
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
    <?php if (count($Dataset) == 0) : ?>
        <div class="border border-black/10 dark:border-white/10 p-5 flex justify-center items-center rounded-md">
            <div>
                <p class="text-sm font-semibold">No Enquiries</p>
            </div>
        </div>
    <?php else : ?>
        <div class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Video Booking Enquiries</h2>
            </div>





            <div class>
                <table id="ss-datatable" class="whitespace-nowrap table-hover table-bordered" role="grid" aria-describedby="user-list-page-info">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Service</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Time Slot</th>
                        </tr>

                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>


        </div>

    <?php endif ?>

</div>



<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?= base_url('admin/assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('admin/assets/js/dataTables.bootstrap4.min.js') ?>"></script>



<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    $(document).ready(() => {
        window.call_datatable = function() {
            if ($("#ss-datatable").length) {
                $('#ss-datatable').dataTable().fnDestroy()
            }

            var dbtable = $('#ss-datatable').DataTable({

                search: {
                    return: true,
                },
                perPageSelect: [10, 20, 30, 40, 50],

                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    url: '<?= base_url("api/admin/datatables/bookings/video") ?>',
                    type: "POST",
                    data: {
                        datetype: $('#ss-datetype').val(),
                        from_date: $('#ss-from').val(),
                        to_date: $('#ss-to').val(),
                    }
                },



                orderClasses: true,
                searchable: true,
                perPage: 10,
                lengthMenu: [10, 20, 30, 40, 50],

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
                        targets: [0, 1, 2, 3, 4, 7, 8],
                        orderable: true
                    }, // Enable sorting for columns with indices 0, 1, and 2
                    {
                        targets: '_all',
                        orderable: false
                    } // Disable sorting for all other columns
                ]
            });
        }
        call_datatable();

        $('.reload-datatable').click(call_datatable);
    });
</script>

<?= $this->endSection() ?>