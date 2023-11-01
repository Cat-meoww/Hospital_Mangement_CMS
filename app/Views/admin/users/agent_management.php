<?= $this->extend('layout/admin/main') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" type="text/css" media="screen" href=" <?= base_url("admin/assets/css/simple-datatables.css") ?>" />
<script src="<?= base_url("admin/assets/js/simple-datatables.js") ?>"></script>
<script src="<?= base_url("admin/assets/js/init-datatables.js") ?>"></script>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="grid grid-cols-1 gap-7">






    <div x-data="basic" class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg font-semibold">Agent Management</h2>
        </div>
        <div class>
            <table id="dt-table" class="whitespace-nowrap table-hover table-bordered">
                <thead>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Created On</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php foreach ($user as $index => $users) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $users['username']; ?></td>
                            <td><?= $users['email']; ?></td>
                            <td><?= $users['created_on']; ?></td>
                            <?php if ($users['in_active'] == 0) {
                                $status = "Active User";
                            } else {
                                $status = "Not Active";
                            } ?>
                            <td><?= $status ?></td>

                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>



</div>

<?= $this->endSection() ?>