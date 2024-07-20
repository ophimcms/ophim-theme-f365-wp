<div style="box-shadow: 0px 3px 20px 2px rgb(18 24 29);">
    <ul id="top-slide" class="owl-carousel owl-theme" style="opacity: 1; display: block; margin-top: 10px;">
<?php while ($query->have_posts()) : $query->the_post(); ?>
        <li>
            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                <div class="title">
                    <p class="effect-text"
                       style="text-transform: uppercase!important;color: #fff;font-size: 11px;padding: 2px 4px 2px;color: #fff;margin-left: 3px;font-weight: 500;color: #fff;background: linear-gradient( 81.43deg , #c11e1b -26.81%, #6f0c0b 87.89%);box-shadow: 2px 2px 3px 0px rgb(0 0 0 / 75%);border: 0px solid #febb00; border-radius: 2px;white-space: nowrap;">
                        <i class="fa fa-play-circle" aria-hidden="true"></i> <?= op_get_episode() ?> <?= op_get_lang() ?> <?= op_get_quality() ?>
                    </p>
                    <p class="name" style="text-transform: uppercase!important;"><?php the_title(); ?></p>
                    <p class="real-name"><?= op_get_original_title() ?> <?= op_get_year() ?></p>
                </div>
                <img src="<?= op_get_poster_url() ?>"
                     alt="<?php the_title(); ?>">
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
</div>