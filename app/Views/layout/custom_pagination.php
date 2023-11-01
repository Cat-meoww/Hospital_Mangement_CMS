<!-- Limit to 3 Links each side of the current page -->
<?php $pager->setSurroundCount(2)  ?>
<!-- END-->


<div class="row">
    <div class="col-12">
        <ul class="pagination mt-3">


            <li class="page-item me-auto <?= !$pager->hasPreviousPage() ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true">Prev</span>
                </a>
            </li>


            <?php foreach ($pager->links() as $link) : ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                    <a class="page-link " href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <li class="page-item ms-auto <?= !$pager->hasNextPage() ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            
        </ul>
    </div>
</div>

