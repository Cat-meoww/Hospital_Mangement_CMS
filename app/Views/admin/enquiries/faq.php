<?= $this->extend('layout/admin/main') ?>

<?= $this->section('head') ?>

<link rel="stylesheet" type="text/css" media="screen" href=" <?= base_url("admin/assets/css/simple-datatables.css") ?>" />
<script src="<?= base_url("admin/assets/js/simple-datatables.js") ?>"></script>
<script src="<?= base_url("admin/assets/js/init-datatables.js") ?>"></script>
<style>
    .cell-size {
        width: 40vw;
        white-space: break-spaces;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="grid grid-cols-1 gap-7">






    <div x-data="basic" class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg font-semibold">Faq Enquires</h2>
        </div>
        <div class>
            <table id="dt-table" class="whitespace-nowrap table-hover table-bordered" style="width: 100%;">
                <thead>
                    <th>ID</th>
                    <th style="width:40%">Question</th>
                    <th>Email</th>
                    <th>Name</th>

                </thead>
                <tbody>
                    <?php foreach ($leads as $index => $lead) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td>
                                <div class="cell-size"><?= $lead->question ?></div>
                            </td>
                            <td><?= $lead->email ?></td>
                            <td><?= $lead->name ?></td>


                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>



</div>

<?= $this->endSection() ?>