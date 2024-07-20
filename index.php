<?php
get_header();
?>
<div class="container ">
    <?php if ( is_active_sidebar('widget-slider-poster') ) {
        dynamic_sidebar( 'widget-slider-poster' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
    <div class="container " id="wrapper">
        <div class="left-content" style="padding-left: 10px;padding-right: 10px;">
            <?php if ( is_active_sidebar('widget-area') ) {
                dynamic_sidebar( 'widget-area' );
            } else {
                _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
            }
            ?>
        </div>
        <div class="right-content" style="padding-left: 10px;padding-right: 10px;">
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>

<?php
add_action('wp_footer', function (){?>
    <script src="<?= get_template_directory_uri() ?>/assets/js/owl.carousel.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/customize.js"></script>
<?php }) ?>

<?php
get_footer();
?>
