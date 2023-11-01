<?php if (!empty($errors)) : ?>
    <div class="flex flex-row items-center justify-center rounded  text-black px-3 ">
        <span class=" text-center"><?= esc(implode(" | ", $errors)) ?></span>
    </div>
<?php endif ?>