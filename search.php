<?php
get_header();
?>
<div class="container ">
    <div class="container " id="wrapper">
        <div class="left-content" style="padding-left: 10px;padding-right: 10px;">
            <div class="block-film">
                <h2 class="caption">
                    <i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tìm kiếm : <?php echo "$s"; ?> </span>
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                </h2>
                <ul class="list-film">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post(); ?>
                            <?php include THEMETEMPLADE . '/section/block_thumb_item.php' ?>

                        <?php } wp_reset_postdata(); } ?>
                </ul>
                <div class="clear"></div>
                <?php ophim_pagination(); ?>
            </div>
        </div>
        <div class="right-content" style="padding-left: 10px;padding-right: 10px;">
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
