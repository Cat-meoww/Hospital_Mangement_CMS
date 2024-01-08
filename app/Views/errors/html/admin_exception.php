<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>


<div class="">

    <div class="border border-black/10 dark:border-white/10 p-5 flex justify-center items-center rounded-md">
        <div>
            <?= nl2br(esc($message)) ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>