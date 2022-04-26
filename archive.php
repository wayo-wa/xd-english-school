<?php
/*
Template Name: ブログ一覧ページ
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
    <main class="l-main pg-archive-blogPage">
        <!-- page-ttlArea -->
        <div class="p-pagetitleArea p-pagetitleArea--blog">
            <h1 class="p-pagetitleArea__ttl">ブログ</h1>
        </div>
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--primary">
                <?php if(is_category()): ?>
                    <?php the_archive_title('<h2 class="p-section__ttl p-section__ttl--m">','</h2>'); ?>
                <?php else: ?>
                        <h2 class="p-section__ttl p-section__ttl--m">新着一覧</h2>
                <?php endif; ?>
                <ul class="blog__menu">
                    <!-- 記事ループ -->
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                        <li class="c-card blog__item <?php post_class(); ?>">
                            <a class="c-card__link" href="<?php the_permalink(); ?>"></a>
                                <div class="blog__img">
                                    <span class="c-cat blog__cat">
                                        <?php
                                            $category = get_the_category(); 
                                            echo $category[0]->cat_name;
                                        ?>
                                    </span>
                                    <?php 
                                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                        $noimage = get_template_directory_uri() . '/images/img-default.png';
                                    ?>
                                    <?php if ($url) : ?>
                                        <div class="blog__thumb" style="background-image: url( '<?php echo $url; ?>' );"></div>
                                    <?php else : ?>
                                        <div class="blog__thumb" style="background-image: url( '<?php echo $noimage; ?>' );"></div>
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="c-card__desc">
                                    <time datetime="<?php the_time('Y.m.d'); ?>" class="blog__time"><?php the_time('Y.m.d'); ?></time>
                                    <h3 class="blog__ttl">
                                        <?php
                                            if(mb_strlen($post->post_title)>30) {
                                                $title= mb_substr($post->post_title,0,30);
                                                    echo $title . '...';
                                            } else {
                                                echo $post->post_title;
                                            }
                                        ?>
                                    </h3>
                                    <p class="blog__txt">
                                        <?php if(!empty($post->post_content)): ?>
                                            <?php the_excerpt(); ?>
                                        <?php else: ?>
                                            <?php
                                                if(mb_strlen(get_field('blog-text-m'))>50){
                                                    $text= mb_substr(strip_tags(get_field('blog-text-m')), 0, 50);
                                                    echo $text.'[…]';
                                                }else{
                                                    echo strip_tags(get_field('blog-text-m'));
                                                }
                                            ?>
                                        <?php endif; ?>
                                        
                                    </p>
                                </div>
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <!-- pagenav -->
                <?php get_template_part('includes/pageNav'); ?>
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