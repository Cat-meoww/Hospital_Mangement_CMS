<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>


<div class="">

    <div class="flex items-center rounded bg-lightyellow/50 dark:bg-lightyellow p-3 text-black/80 dark:text-black p-5 flex justify-center items-center rounded-md ">
        <div>
            <?= nl2br(esc($message)) ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>