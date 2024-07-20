<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div id="footer" style="margin-top: 25px;">
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
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);