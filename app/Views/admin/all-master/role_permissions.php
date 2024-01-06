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

    .line-400 {
        max-width: 300px;
        text-overflow: ellipsis;
        overflow: hidden;
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
                <p class="text-sm font-semibold">No Permissions</p>
            </div>
        </div>
    <?php else : ?>
        <div x-data="basic" class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Routes and Permissions (<?= $SubRole->name ?>)</h2>
            </div>
            <div class>
                <table id="dt-table" class="whitespace-nowrap table-hover table-bordered">
                    <thead>
                        <th>Method</th>
                        <th>Route</th>
                        <th>Name</th>
                        <th class="text-center">Permission</th>
                    </thead>
                    <tbody>
                        <?php foreach ($Dataset as $index => $item) : ?>
                            <tr>

                                <td>
                                    <div class="btn py-1 px-3 text-[11.5px] text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black ">
                                        <?= $item->method ?>
                                    </div>
                                </td>
                                <td><?= $item->route ?></td>
                                <td><?= $item->name ?></td>

                                <td>
                                    <div class="flex gap-1 flex-row justify-center" data-id="<?= $item->id ?>" data-rpid="<?= $item->rpid ?>">


                                        <button type="button" title="Delete" class="btn py-1 px-3 text-[11.5px] permission-action">
                                            <?= ($item->rpid ?? false) ? 'Allowed' : 'Not Allowed' ?>
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



<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    $(document).ready(() => {

        const PermissionHandler = {
            __init: function() {
                $(document).on('click', '.permission-action', this.handleevent.bind(this))
            },
            handleevent: function(event) {

                const parent = $(event.currentTarget).parent();
                const button = event.currentTarget
                const rpid = parent.data('rpid');
                const route_id = parent.data('id');
                this.ping({
                    route_id,
                    rpid,
                    button
                })

            },
            ping: async function(parameter) {
                try {

                    const {
                        route_id,
                        rpid,
                        button
                    } = parameter

                    const url = '<?= base_url('api/admin/all-master/role-permissions/handler') ?>';
                    const formdata = new FormData();
                    formdata.append('route_id', route_id)
                    formdata.append('rp_id', rpid)
                    formdata.append('role_id', '<?= $role ?>')

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


                        $(button).text(res.data)


                    } else if (res.status === "bad") {
                        console.error("something went wrong");

                    }
                } catch (e) {
                    console.error(e);

                }
            }
        }
        PermissionHandler.__init();


    });
</script>

<?= $this->endSection() ?>