<header class="l-header">
    <div class="l-header__inner">
        <div class="l-header__left">
            <p class="l-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="<?php bloginfo('name'); ?>"></a></p>
            <nav class="l-header__nav">
                <?php wp_nav_menu(
                    array(
                        'theme_location'    => 'globalnav',
                        'container'         => 'div',
                        'container_class'   => 'globalnav_wrap',
                        'menu_class'        => 'l-header__menu',
                        'add_li_class'      => 'l-header__li',
                        'add_a_class'       => 'l-header__li__link',
                    )
                );?>
            </nav>
        </div>
        <div class="l-header__right">
            <div class="l-header__info--sp"><!-- スマホ用電話ボタン -->
                <a href="tel:0123-456-7890"></a>
                <img src="<?php echo esc_url(get_theme_file_uri('images/under-nav-phone.png')); ?>" alt="">
            </div>
            <div class="l-header__info">
                <p class="l-header__info__time">平日08:00〜20:00</p>
                <a class="c-phone l-header__info__phone" href="tel:0123-456-7890">0123-456-7890</a>
            </div>
            <p class="l-header__btn">
                <a class="c-btn c-btn--point" href="<?php echo esc_url(home_url('/contact/')); ?>">資料請求</a>
            </p>
            <p class="l-header__btn">
                <a class="c-btn c-btn--base" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </p>
            <!-- ハンバーガーアイコン -->
            <div class="p-hamburger js-buttonHamburger">
                <span class="p-hamburger__line"></span>
                <span class="p-hamburger__name">MENU</span>
            </div>
        </div>
    </div>
    <!-- ドロワーメニュー -->
    <nav class="p-drawer js-drawer">
        <ul>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/plan/')); ?>">コース・料金</a></li>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/contact/')); ?>">資料請求</a></li>
            <li class="p-drawer__li js-drawer-li"><a class="u-db" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
    </nav>
</header>