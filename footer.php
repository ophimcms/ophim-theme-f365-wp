
</div>
</div>

<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</body>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/functions.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/actions.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.aside_star').raty({
            readOnly: true,
            numberMax: 5,
            half: true,
            starOff: '<?= get_template_directory_uri() ?>/assets/images/star-off-20.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/images/star-on-20.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/images/star-half-20.png',
            score: function() {
                return $(this).attr('data-rating');
            },
            space: false
        });
    });

    var $menu = $("#main-menu");
    var $over_lay = $('#overlay_menu');
    var hw = $(window).height();

    function set_height_menu() {
        var w_scroll_top = $(window).scrollTop();
        if (w_scroll_top >= 50) {
            pos_top_menu = 0;
        } else {
            pos_top_menu = 50 - w_scroll_top;
        }
        $menu.css('top', pos_top_menu + 'px');
        $("#overlay_menu").css('top', pos_top_menu + 'px');
    }

    function open_menu() {
        $menu.height(hw);
        $menu.addClass('expanded');
        set_height_menu();
        $("#overlay_menu").removeClass('hide');
        $('body,html').addClass('overlow-hidden');
        $(".btn-humber").addClass('active');

    }

    function close_menu() {
        $menu.removeClass('expanded');
        var w_scroll_top = $(window).scrollTop();
        if (w_scroll_top >= 50) {
            pos_top_menu = 0;
        } else {
            pos_top_menu = w_scroll_top;
        }
        set_height_menu();
        $("#overlay_menu").addClass('hide');
        $('body,html').removeClass('overlow-hidden');
        $(".btn-humber").removeClass('active');
    }

    $(document).ready(function() {
        //Xử lý khi ấn vào nút menu
        $(".btn-humber").click(function() {
            if ($menu.hasClass('expanded')) {
                close_menu();
            } else {
                open_menu();
            }
        });


        //Xu ly khi vuot tren man hinh
        /*
        $("#content").swipe({
            swipeRight:function(event, direction, distance, duration, fingerCount){
                open_menu();
            },
            threshold:20,
            fingers:'all',
        });
        $("#overlay_menu").swipe({
            swipeLeft:function(event, direction, distance, duration, fingerCount){
                close_menu();
            },
            threshold:10,
            fingers:'all',
        });
        */

        $(window).scroll(function() {
            set_height_menu();
        });

        $(".parent-menu").click(function() {
            $this = $(this);
            $arrow = $this.find('.fa-expand');
            if ($arrow.hasClass('fa-angle-down')) {
                $arrow.removeClass('fa-angle-down').addClass('fa-angle-up');
            } else {
                $arrow.addClass('fa-angle-down').removeClass('fa-angle-up');
            }
            $this.find('.sub-menu').toggle();
        });

    });
</script>
<?php wp_footer(); ?>
</html>