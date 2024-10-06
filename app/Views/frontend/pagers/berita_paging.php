<?php $pager->setSurroundCount(1) ?>

<div class="text-center">
    <div class="pagination" style="padding-top: 0px; padding-bottom: 0px;">
        <!-- <a href="#">&laquo;</a> -->
        <?php foreach ($pager->links() as $link) : ?>
            <a class=" <?= $link['active'] ? 'active' : '' ?>" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        <?php endforeach ?>
        <!-- <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a> -->
    </div>
</div>

<!-- <div class="row"> -->

<!-- </div> -->