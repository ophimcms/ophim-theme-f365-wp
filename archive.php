<?php
get_header();
?>
<div class="container ">
    <div class="container " id="wrapper">
        <div class="left-content" style="padding-left: 10px;padding-right: 10px;">
            <div class="block-film">
                <h2 class="caption">
                    <i class="fa fa-plus-square" aria-hidden="true"></i> <span><?php echo single_tag_title(); ?></span>
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                </h2>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="TpRwCont" style="margin-bottom: 20px">
                            <div class="col-md-12 blogShort">

                                <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                         alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                                <br>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <article>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p></article>
                                <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                            </div>

                        </div>
                    <?php }
                    wp_reset_postdata();
                } ?>
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
