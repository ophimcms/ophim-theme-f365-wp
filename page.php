<?php
get_header();
?>
<div class="container ">
    <div class="container " id="wrapper">
        <div class="left-content" style="padding-left: 10px;padding-right: 10px;">
            <div class="block-film">

                <?php
                while ( have_posts() ) : the_post();
                    ?>

                    <div class="group-film">
                        <h2><?php the_title(); ?>
                        </h2>
                        <div class="">
                            <?php  the_content(); ?>
                        </div>

                    </div>


                <?php
                endwhile;
                ?>
                <div class="clear"></div>
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
