<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?>    <div id="footer" style="margin-top: 25px;">
                    <div class="container">
                    <div class="content">
                    <div class="views-row views-row-1" style="width: 100%;text-align: center;">
                    <div class="logo-footer">
                    <a href=""><img alt="logo" style="width: 146px;"
                    src="https://ophim.cc/logo-ophim-5.png" /></a>
                    </div>
                    <div class="copy-right">
                    <p>Copyright ® 2021 OPHIMCMS All Rights Reserved.</p>
                    <p><a href="/sitemap.xml">Sitemap</a> | <a href="">Liên hệ</a> | <a
                    href="/danh-sach/phim-moi.html">Phim Mới </a> | <a href="" target="_blank"
                    title="">Phim Hay </a></p><br>
                    </div>
                    <div class="hidden-sm hidden-xs">
                    <ul class="tags" style="list-style: none;">
                    <li class="tag-item"><a href="/tag/diep-van.html" rel="nofollow"
                    title="Diệp Vấn">Diệp Vấn</a></li>
                    <li class="tag-item"><a href="/tag/spider-man.html" rel="nofollow"
                    title="Spider-Man">Spider-Man</a></li>
                    <li class="tag-item"><a href="/tag/tvb-sctv9.html" rel="nofollow"
                    title="TVB-SCTV9">TVB-SCTV9</a></li>
                    <li class="tag-item"><a href="/tag/marvel.html" rel="nofollow"
                    title="Marvel">Marvel</a></li>
                    <li class="tag-item"><a href="/tag/di-nhan.html" rel="nofollow"
                    title="Dị Nhân">Dị Nhân</a></li>
                    <li class="tag-item"><a href="/tag/x-men.html" rel="nofollow"
                    title="X Men">X Men</a></li>
                    <li class="tag-item"><a href="/tag/one-piece.html" rel="nofollow"
                    title="One Piece">One Piece</a></li>
                    <li class="tag-item"><a href="/tag/friday-the-13th.html" rel="nofollow"
                    title="Friday The 13th">Friday The 13th</a></li>
                    <li class="tag-item"><a href="/tag/paranormal-activity.html"
                    rel="nofollow" title="Paranormal Activity">Paranormal Activity</a></li>
                    <li class="tag-item"><a href="/tag/luoi-cua.html" rel="nofollow"
                    title="Lưỡi Cưa">Lưỡi Cưa</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
