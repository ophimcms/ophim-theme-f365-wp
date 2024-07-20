<div class="container ">
    <div class="container " id="wrapper">
        <div class="left-content" style="padding-left: 10px;padding-right: 10px;">
            <div class="film-info">
                <div class="poster">
                    <a href="<?= watchUrl() ?>">
                        <img alt="<?php the_title(); ?>"
                             src="<?= op_get_thumb_url() ?>" />
                    </a>
                    <ul class="buttons">
                        <?php if (op_get_trailer_url()) { ?>
                        <li>
                            <a class="popup-youtube btn btn-trailer btn-success" href="<?= op_get_trailer_url() ?>">
                                <i class="fa fa-forward"></i> Trailer
                            </a>
                        </li>
                        <?php } ?>
                        <li>
                            <a class="btn-see btn btn-danger" href="<?= watchUrl() ?>">
                                <i class="fa fa-play-circle-o"></i> Xem Phim
                            </a>
                        </li>
                    </ul>
                </div>
                <h1 class="name"
                    style="font-weight: 700; padding: 5px 0 0;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;margin: 0 0 5px;font-family: Tahoma;line-height: 1.6em; text-transform: uppercase;font: 20px utmcafetaregular; color: #ff9601;display: block;">
                    <?php the_title(); ?> </h1>
                <h2 class="real-name"
                    style="font-family: inherit;font-weight: 300;line-height: 1.1;color: #ccc;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                    <?= op_get_original_title() ?> (<?= op_get_year() ?>) </h2>

                <div class="p-2">
                    <div class="tags-info"
                         style="border-bottom: 1px solid rgba(255,255,255,.1);border-top: 1px solid rgba(255,255,255,.1);">
                        <span class="dd1"><i class="imdb-icon"></i> N/A</span>
                        <span class="tags-item-info" style="color: #fff;">
                                 <?= op_get_regions() ?>
                </span>
                        <span class="tags-item-info" style="color: #fff;">
                    <?= op_get_year() ?>
                </span>
                        <span class="tags-item-info"><?= op_get_total_episode() ?></span>
                    </div>

                    <ul class="meta-data" style="color: #BBB;">
                        <label><i class="fa fa-check"></i> Trạng thái :</label>
                        <strong
                                style="color: #fff;font-size: 11px;padding: 2px 4px 2px;color: #fff;margin-left: 3px;font-weight: 500;color: #febb00;border: 1px solid #febb00; border-radius: 5px;white-space: nowrap;">
                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                            <?= op_get_status() ?>
                        </strong>
                        </li>
                        <li>
                            <label><i class="fa fa-check"></i> Chất Lượng :</label>
                            <strong><?= op_get_quality() ?> <?= op_get_lang() ?></strong>
                        </li>
                        <li>
                            <label><i class="fa fa-user" aria-hidden="true"></i> Đạo diễn :</label>
                            <?= op_get_directors(10,', ') ?>
                        </li>
                        <li>
                            <label><i class="fa fa-user" aria-hidden="true"></i> Diễn viên :</label>
                            <?= op_get_actors(10,', ') ?>
                        </li>
                        <li>
                            <label><i class="app-menu__icon fa fa-archive"></i> Thể loại : </label>
                            <?= op_get_genres(', ') ?>
                        </li>
                        <li>
                            <label><i class="fa fa-clock-o" aria-hidden="true"></i> Thời lượng :</label>
                            <span><?= op_get_runtime() ?></span>
                        </li>
                        <li>
                            <label><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem :</label>
                            <span><?= op_get_post_view() ?> views</span>
                        </li>
                        <li>
                            <div class="sbox">
                                <div class="dt_social_single"><a data-id="<?php echo get_the_ID(); ?>" rel="nofollow" href="javascript: void(0);"
                                                                 onclick="window.open(&quot;https://facebook.com/sharer.php?u=<?php the_permalink(); ?>&quot;,&quot;facebook&quot;,&quot;toolbar=0, status=0, width=650, height=450&quot;)"
                                                                 class="facebook dt_social" style="color: #fbfbfb;"><b>Facebook</b></a><a data-id="<?php echo get_the_ID(); ?>"
                                                                                                                                          rel="nofollow" href="javascript: void(0);"
                                                                                                                                          onclick="window.open(&quot;https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>&quot;,&quot;twitter&quot;,&quot;toolbar=0, status=0, width=650, height=450&quot;)"
                                                                                                                                          data-rurl="<?php the_permalink(); ?>" class="twitter dt_social"
                                                                                                                                          style="color: #fbfbfb;"><b>Twitter</b></a><a data-id="<?php echo get_the_ID(); ?>" rel="nofollow"
                                                                                                                                                                                       href="javascript: void(0);"
                                                                                                                                                                                       onclick="window.open(&quot;https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?= op_get_thumb_url() ?>&amp;description=<?php the_title(); ?>&quot;,&quot;pinterest&quot;,&quot;toolbar=0, status=0, width=650, height=450&quot;)"
                                                                                                                                                                                       class="pinterest dt_social" style="color: #fbfbfb;"><b>Pinterest</b></a><a data-id="<?php echo get_the_ID(); ?>"
                                                                                                                                                                                                                                                                  rel="nofollow" href="javascript: void(0);"
                                                                                                                                                                                                                                                                  onclick="window.open(&quot;https://telegram.me/share/url?url=<?php the_permalink(); ?>&amp;media=<?= op_get_thumb_url() ?>&amp;description=<?php the_title(); ?>&quot;,&quot;telegram&quot;,&quot;toolbar=0, status=0, width=650, height=450&quot;)"
                                                                                                                                                                                                                                                                  class="telagram dt_social" style="color: #fbfbfb;"><b>Telegram</b></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="box-rating">
                                <div class="rate-title">
                                    <span class="rate-lable"></span>
                                </div>
                                <div id="star" data-score="<?= op_get_rating() ?>" style="cursor: pointer;">
                                </div>
                                <div>
                                    <div id="div_average" style="float: left; line-height: 16px; margin: 0 5px;margin-top: 5px; ">
                                <span class="average" id="average" itemprop="ratingValue">
                                    <?= op_get_rating() ?>
                                </span>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span id="rate_count" itemprop="reviewCount"><?= op_get_rating_count() ?></span> lượt đánh giá
                                    </div>
                                    <span id="hint"></span>
                                    <meta itemprop="bestRating" content="10" />
                                    <meta itemprop="worstRating" content="1" />
                                    <meta itemprop="ratingValue" content="<?= op_get_rating() ?>" />
                                    <meta itemprop="ratingCount" content="<?= op_get_rating_count() ?>" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="block-film" id="film-trailer">
                <p class="caption"> <i class="app-menu__icon  fa fa-pencil-square-o" aria-hidden="true"></i> Nội dung phim
                </p>
                <div class="film-content" style="padding: 5px 8px;margin: 0px 0 5px 0;font-size: 14px;color: #BBB;">
                    <p><?php the_content();?></p>
                    <p>Hãy xem phim để cảm nhận...</p>
                    <p><img alt="" src="<?= op_get_poster_url() ?>" /></p>
                </div>
            </div>
            <div class="block-film" id="film-trailer">
                <p class="caption"><i class="fa fa-facebook-square" aria-hidden="true"></i>Bình Luận Facebook</p>
                <div class="box-comment" id="tabs-facebook" style="background: linear-gradient(to right, #ffff, #ffff);">
                    <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="tags" style="margin-top: 10px;}">
                <label>
                    <i class="fa fa-tags"></i> Từ khóa <i class="fa fa-caret-right"></i>
                </label>
                <?= op_get_tags() ?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="right-content" style="padding-left: 10px;padding-right: 10px;">
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>

<?php add_action('wp_footer', function (){?>

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/popup.youtube.js"></script>

    <script>
        var rated = false;
        $('#star').raty({
            score: <?= op_get_rating() ?>,
        number: 10,
            numberMax: 10,
            hints: ['quá tệ', 'tệ', 'không hay', 'không hay lắm', 'bình thường', 'xem được', 'có vẻ hay', 'hay',
            'rất hay', 'siêu phẩm'
        ],
            starOff: '<?= get_template_directory_uri() ?>/assets/images/star-off-20.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/images/star-on-20.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/images/star-half-20.png',
            click: function(score, evt) {
            if (rated) return
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php')?>',
                type: 'POST',
                data:{
                    action: "ratemovie",
                    rating: score,
                    postid: '<?php echo get_the_ID(); ?>',
                },
            }).done(function (data) {
                $('#rate_count').html(<?= op_get_rating_count()+1 ?>);
                $('#average').html(score);
                rated = true;
                $('#star').data('raty').readOnly(true);
            });
        }
        });
    </script>
<?php }) ?>


