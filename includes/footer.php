<footer class="l-footer">
    <div class="l-footer__main">
        <div class="l-footer__main__inner">
            <?php wp_nav_menu(
                array(
                    'theme_location'    => 'globalnav',
                    'container'         => 'div',
                    'container_class'   => 'globalnav_wrap',
                    'menu_class'        => 'l-footer__left',
                    'add_li_class'      => 'l-footer__li',
                    'add_a_class'       => 'l-footer__li__link',
                )
            );?>
            <div class="l-footer__right">
                <a class="l-footer__logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="<?php bloginfo('name'); ?>"></a>
                <a class="c-phone l-footer__phone" href="tel:0123-456-7890">0123-456-7890</a>
                <p class="l-footer__time">平日08:00〜20:00</p>
            </div>
        </div>
    </div>
    <div class="l-footer__copy">
        <div class="l-site__inner l-site__inner--primary">
            <p class="copy">© 2020 Engress. </p>
        </div>
    </div>
    <!-- スマホ用フッターナビ -->
    <ul class="l-footer__under-nav">
        <li class="l-footer__under-nav__li">
            <a href="tel:0123-456-7890"></a>
            <div class="img">
                <img src="<?php echo esc_url(get_theme_file_uri('images/under-nav-phone.png')); ?>" alt="">
            </div>
            <span>電話(無料)</span>
        </li>
        <li class="l-footer__under-nav__li">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"></a>
            <div class="img">
                <img src="<?php echo esc_url(get_theme_file_uri('images/under-nav-file.png')); ?>" alt="">
            </div>
            <span>資料請求</span>
        </li>
        <li class="l-footer__under-nav__li">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"></a>
            <div class="img">
                <img src="<?php echo esc_url(get_theme_file_uri('images/under-nav-pc.png')); ?>" alt="">
            </div>
            <span>お問い合わせ</span>
        </li>
    </ul>
</footer>