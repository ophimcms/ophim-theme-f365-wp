<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 600px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        margin-top: 10px;
        width: 80%;
    }

    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #262525;
    }
</style>
<div id="header" class="mobile-header">
    <div class="btn-humber">
        <i class="fa fa-bars"></i>
    </div>
    <a class="logo" href="<?= get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
        <?php op_the_logo('width:20px') ?>
    </a>
    <i class="fa fa-search btn-search" onclick="$('.mobile-search-bar').removeClass('hide');$('#keyword').focus();"></i>

    <div class="mobile-search-bar hide">
        <form method="GET" action="/" id="form_search">
            <input id="keyword" type="text" name="s" placeholder="Tìm kiếm phim..." value="<?php echo "$s"; ?>">
        </form>
        <i class="fa fa-search mobile-search-submit" onclick="$('#form_search_mobile').submit()"></i>
        <i class="fa fa-times close-button" onclick="$('.mobile-search-bar').addClass('hide')"></i>
    </div>
</div>
<div id="main-menu" class="mobile-main-menu" style="height: 667px; top: 50px;">
    <div class="container">
        <ul>
            <?php
            $menu_items = wp_get_menu_array('primary-menu');
            foreach ($menu_items as $key => $item) : ?>
                <?php if (empty($item['children'])) { ?>
                    <li>
                        <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>"><i
                                class="fa fa-film"></i><span><?= $item['title'] ?></span></a>
                    </li>
                <?php } else { ?>
                    <li class="parent-menu">
                        <a href="javascript:void(0)" title="<?= $item['title'] ?>">
                            <i class="fa fa-clone"></i>
                            <span><?= $item['title'] ?></span>
                            <i class="fa fa-expand fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                    <?php foreach ($item['children'] as $k => $child): ?>
                            <li class="sub-menu-item"><a href="<?= $child['url'] ?>"><?= $child['title'] ?></a></li>
                    <?php endforeach; ?>
                        </ul>
                    </li>
                <?php } ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div id="header" class="only-pc">
    <div class="container">
        <a class="logo" href="<?= get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
            <?php op_the_logo('width:20px') ?>
        </a>
        <div class="search-container relative">
            <form method="GET" action="/" class="form-search">
                <input id="keyword" class="keyword" type="text" name="s" onkeyup="fetch()" placeholder="Tìm kiếm phim..." value="<?php echo "$s"; ?>" />
                <i class="fa fa-search" onclick="$(this).parent().submit()" style="cursor:pointer"></i>
            </form>
            <ul class="" id="result"></ul>
        </div>
    </div>
</div>
<div id="main-menu" class="desktop">
    <div class="container">
        <ul>
            <?php
            $menu_items = wp_get_menu_array('primary-menu');
            foreach ($menu_items as $key => $item) : ?>
                <?php if (empty($item['children'])) { ?>
                    <li>
                        <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>">
                            <i class="fa fa-film"></i><span><?= $item['title'] ?></span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="javascript:void(0)" title="<?= $item['title'] ?>">
                            <i class="fa fa-clone"></i> <span><?= $item['title'] ?> <i class="fa fa-caret-down"></i></span>
                        </a>
                        <ul class="sub-menu span-2 absolute">
                    <?php foreach ($item['children'] as $k => $child): ?>
                            <li class="sub-menu-item"><a href="<?= $child['url'] ?>"><?= $child['title'] ?></a></li>
                    <?php endforeach; ?>
                        </ul>
                    </li>

                <?php } ?>
            <?php endforeach; ?>

        </ul>
    </div>
</div>
