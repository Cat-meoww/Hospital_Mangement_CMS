<?php if (!empty($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="flex items-center justify-center rounded border border-lightred p-3 text-black dark:text-white">
            <span class="pr-2 text-center"><?= esc($error) ?></span>
        </div>
    <?php endforeach ?>
<?php endif ?>