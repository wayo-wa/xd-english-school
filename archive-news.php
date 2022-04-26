<?php
/*
Template Name: お知らせ一覧ページ
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- head -->
<head>
    <?php get_template_part('includes/head'); ?>
</head>
<body <?php body_class(); ?>>
    <!-- header -->
    <?php get_template_part('includes/header'); ?>
    <!-- main -->
    <main class="l-main pg-archive-newsPage">
        <!-- page-ttlArea -->
        <div class="p-pagetitleArea p-pagetitleArea--news">
            <h1 class="p-pagetitleArea__ttl">お知らせ</h1>
        </div>
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--m">お知らせ一覧</h2>
                <ul class="news__menu">
                    <!-- お知らせ記事ループ -->
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div <?php post_class(); ?>>
                        <li class="news__li">
                            <a class="news__li__inner" href="<?php the_permalink(); ?>">
                                <time class="news__time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <p class="news__txt"><?php the_title_attribute(); ?></p>
                            </a>
                        </li>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                </ul>
                <!-- pagenav -->
                <?php get_template_part('includes/pageNav'); ?>
            </div>
        </div>
        c
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>