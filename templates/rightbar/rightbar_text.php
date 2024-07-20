<div class="most-view block" style="margin-top: 10px; margin-bottom: 50px">
    <img src="<?= get_template_directory_uri() ?>/assets/images/TOP_PHIM_HOT_365.png" style="width:100%">
    <div class="tabs">
        <div data-id="day" class="tab active"><?php echo $title; ?></div>
    </div>
    <div class="clear"></div>
    <ul class="list-film">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="film-item-ver">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img class="avatar lazyload" alt="<?php the_title(); ?>" data-src="<?= op_get_thumb_url() ?>" />
                <div class="title">
                    <p class="name" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        <?php the_title(); ?></p>
                    <p class="real-name" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        <?= op_get_original_title() ?> (<?= op_get_year() ?>)</p>
                </div>
            </a>
            <p class="view" style="color:#aaa;"><i class="fa fa-eye" aria-hidden="true"></i>
                <?= op_get_post_view() ?> lượt xem</p>
            <p class="aside_star" data-rating="<?= op_get_rating(); ?>" style="margin-bottom: 10px;"></p>
            <span
                    style="font-size: 11px;right: 2px; bottom: 52px;color: #fff;font-size: 11px;padding: 2px 4px 2px;color: #fff;margin-left: 3px;font-weight: 500;color: #fff;background: linear-gradient( 81.43deg , #c11e1b -26.81%, #6f0c0b 87.89%);box-shadow: 2px 2px 3px 0px rgb(0 0 0 / 75%);border: 0px solid #febb00; border-radius: 2px;white-space: nowrap;transition: .7s;text-transform: capitalize;"><i
                        class="fa fa-play-circle" aria-hidden="true"></i> <?= op_get_episode() ?>
                        <?= op_get_lang() ?></span>
        </li>
        <?php endwhile; ?>
    </ul>
</div>