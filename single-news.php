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
    <main class="l-main pg-single-newsPage">
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--primary">
                <!-- お知らせ記事ループ -->
                <?php if(have_posts()): ?><!-- もし投稿があったら -->
                <?php while(have_posts()): ?><!-- 投稿表示を繰り返す -->
                <?php the_post(); ?><!-- 1件分のデータを取り出す -->
                <div <?php post_class(); ?>>
                <div class="header">
                    <h1 class="header__ttl"><?php the_title_attribute(); ?></h1>
                    <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                    <!-- お知らせ詳細 -->
                    <article class="news-main">
                        <?php the_content(); ?>
                        <?php if(get_field('news-heading-m')): ?>
                            <h2 class="p-heading p-heading--m heading--m"><?php the_field('news-heading-m'); ?></h2>
                        <?php endif; ?>
                        <?php if(get_field('news-text-m')): ?>
                            <p class="txt"><?php the_field('news-text-m'); ?></p>
                        <?php endif; ?>
                        <?php if(get_field('news-heading-s')): ?>
                            <h3 class="p-heading p-heading--s heading--s"><?php the_field('news-heading-s'); ?></h3>
                        <?php endif; ?>
                        <?php if(get_field('news-text-s')): ?>
                            <p class="txt"><?php the_field('news-text-s'); ?></p>
                        <?php endif; ?>
                        <?php if(get_field('news-quote')):?>
                                <blockquote>
                                    <p class="txt"><?php the_field('news-quote'); ?>
                                </blockquote>
                        <?php endif; ?>
                        <?php if(get_field('news-img-insert')):?>
                                <div class="insert-img">
                                    <img class="c-imgfit" src="<?php echo wp_get_attachment_image(the_field('news-img-insert'),'large'); ?>" alt="<?php the_field('blog-heading-s'); ?>">
                                </div>
                            <?php endif; ?>
                        <ul class="list-menu">
                        <?php if(get_field('news-list-1')):?>
                            <li class="list-item"><a href=""><?php the_field('news-list-1'); ?></a></li>
                        <?php endif; ?>
                        <?php if(get_field('news-list-2')):?>
                            <li class="list-item"><a href=""><?php the_field('news-list-2'); ?></a></li>
                        <?php endif; ?>
                        <?php if(get_field('news-list-3')):?>
                            <li class="list-item"><a href=""><?php the_field('news-list-3'); ?></a></li>
                        <?php endif; ?>
                        </ul>
                        <?php if(get_field('news-text-link')):?>
                            <a class="text-link c-link__deco" href="#"><?php the_field('news-text-link'); ?></a>
                        <?php endif; ?>
                    </article>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- promotionArea -->
        <?php get_template_part('includes/promotionArea'); ?>
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>