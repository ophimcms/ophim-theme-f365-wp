<div class="block-film">
    <h2 class="caption">
        <i class="fa fa-plus-square" aria-hidden="true"></i> <span><?php echo $title; ?></span>
        <i class="fa fa-caret-right" aria-hidden="true"></i>
        <a class="view-all" title="<?php echo $title; ?>" href="<?php echo $slug; ?>">Xem tất cả <i
                    class="fa fa-angle-double-right"></i>
        </a>
    </h2>

    <ul class="list-film">
        <?php while ($query->have_posts()) : $query->the_post();
            include THEMETEMPLADE . '/section/block_thumb_item.php';
        endwhile; ?>
    </ul>
</div>

