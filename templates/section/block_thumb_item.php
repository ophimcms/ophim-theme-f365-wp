<li class="film-item no-margin-right">
    <span class="current-status" style="text-transform: uppercase;font-weight: 500;">
    <i class="fa fa-play-circle" aria-hidden="true"></i> <?= op_get_episode() ?></span>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img class="lazyload" alt="<?php the_title(); ?>" data-src="<?= op_get_thumb_url() ?>" />
        <div class="title">
            <div class="post-title">
                <span class="label-quality"> <?= op_get_lang() ?></span>
                <p class="name"><?php the_title(); ?></p>
                <p class="real-name"> <?= op_get_original_title() ?> (<?= op_get_year() ?>)</p>
            </div>
        </div>
    </a>
</li>
