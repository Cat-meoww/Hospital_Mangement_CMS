<!-- Limit to 3 Links each side of the current page -->
<?php $pager->setSurroundCount(2)  ?>
<!-- END-->


<div class="row">
    <div class="col-12">
        <ul class="pagination mt-3">


            <li class="page-item  <?= !$pager->hasPreviousPage() ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </a>
            </li>


            <?php foreach ($pager->links() as $link) : ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                    <a class="page-link " href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <li class="page-item  <?= !$pager->hasNextPage() ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
            </li>
            
        </ul>
    </div>
</div>

