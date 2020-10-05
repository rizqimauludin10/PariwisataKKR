<?php $pager->setSurroundCount(2) ?>
<div class="row mt-4">
    <div class="col text-center">
        <div class="block-27">
            <nav aria-label="Page navigation">
                <ul>
                    <?php if ($pager->hasPrevious()) : ?>
                        <li>
                            <!-- <a href="#">&lt;</a> -->
                            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                                <span aria-hidden="true"><?= lang('Pager.first') ?>&lt;</span>
                            </a>
                        </li>

                        <li>
                            <!-- <a href="#">&gt;</a> -->
                            <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                                <span aria-hidden="true"><?= lang('Pager.previous') ?>&gt;</span>
                            </a>
                        </li>
                    <?php endif ?>

                    <?php foreach ($pager->links() as $link) : ?>
                        <li class="<?= $link['active'] ? 'active' : '' ?>">
                            <a href="<?= $link['uri'] ?>">
                                <?= $link['title'] ?>
                            </a>
                        </li>
                    <?php endforeach ?>

                    <?php if ($pager->hasNext()) : ?>
                        <li>
                            <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                                <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                            </a>
                        </li>
                    <?php endif ?>

                </ul>
            </nav>
        </div>
    </div>
</div>