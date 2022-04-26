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
    <main class="l-main pg-single-blogPage">
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--primary">
                <div class="wrap">
                    <!-- ページメイン -->
                    <article class="blog-main">
                        <!-- 投稿記事 -->
                        <?php if(have_posts()): ?><!-- もし投稿があったら -->
                        <?php while(have_posts()): ?><!-- 投稿表示を繰り返す -->
                        <?php the_post(); ?><!-- 1件分のデータを取り出す -->
                        <div <?php post_class(); ?>>
                            <div class="header">
                                <span class="c-cat header__cat">
                                    <?php
                                        $category = get_the_category(); 
                                        echo $category[0]->cat_name;
                                    ?>
                                </span>
                                <h1 class="header__ttl"><?php the_title_attribute(); ?></h1>
                                <div class="header__bottom">
                                    <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                                    <time class="header__time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </div>
                            </div>
                   
                            <?php 
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                $noimage = get_template_directory_uri() . '/images/img-default.png';
                            ?>
                            <?php if(get_field('blog-img-top')):?>
                                <div class="insert-img">
                                    <img class="c-imgfit" src="<?php echo wp_get_attachment_image(the_field('blog-img-top'),'large'); ?>" alt="<?php the_title_attribute(); ?>">
                                </div>
                            <?php elseif($url):?>
                                <div class="insert-img">
                                    <img class="c-imgfit" src="<?php echo $url; ?>" alt="<?php the_title_attribute(); ?>">
                                </div>
                            <?php else: ?>
                                <div class="insert-img">
                                    <img class="c-imgfit" src="<?php echo $noimage; ?>" alt="<?php the_title_attribute(); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if(get_field('blog-heading-m')):?>
                                <h2 class="p-heading p-heading--m heading--m"><?php the_field('blog-heading-m'); ?></h2>
                            <?php endif; ?>
                            <?php if(get_field('blog-text-m')):?>
                                <p class="txt">
                                    <?php the_field('blog-text-m'); ?>
                                </p>
                            <?php endif ;?>
                            <?php if(get_field('blog-heading-s')):?>
                                <h3 class="p-heading p-heading--s heading--s"><?php the_field('blog-heading-s'); ?></h3>
                            <?php endif; ?>
                            <?php if(get_field('blog-text-s')):?>
                                <p class="txt">
                                    <?php the_field('blog-text-s'); ?>
                                </p>
                            <?php endif; ?>
                            <?php if(get_field('blog-quote')):?>
                                <blockquote>
                                    <p class="txt"><?php the_field('blog-quote'); ?>
                                </blockquote>
                            <?php endif; ?>
                            <?php if(get_field('blog-img-insert')):?>
                                <div class="insert-img">
                                    <img class="c-imgfit" src="<?php echo wp_get_attachment_image(the_field('blog-img-insert'),'large'); ?>" alt="<?php the_field('blog-heading-s'); ?>">
                                </div>
                            <?php endif; ?>
                            <ul class="list-menu">
                                <?php if(get_field('blog-list-1')):?>
                                    <li class="list-item"><a href=""><?php the_field('blog-list-1'); ?></a></li>
                                <?php endif; ?>
                                <?php if(get_field('blog-list-2')):?>
                                    <li class="list-item"><a href=""><?php the_field('blog-list-2'); ?></a></li>
                                <?php endif; ?>
                                <?php if(get_field('blog-list-3')):?>
                                    <li class="list-item"><a href=""><?php the_field('blog-list-3'); ?></a></li>
                                <?php endif; ?>
                            </ul>
                            <?php if(get_field('blog-text-link')):?>
                                <a class="text-link c-link__deco" href="#"><?php the_field('blog-text-link'); ?></a>
                            <?php endif; ?>
                        </div>
                        <!-- 提出したら削除 -->
                        <div class="wp-block">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>


                        <!-- おすすめ記事 -->
                        <section class="recommendArea">
                            <h3 class="recommendArea__ttl">おすすめの記事</h3>
                            <ul>
                            <?php
                                $tag_posts = get_posts(array(
                                    'post_type' => 'post', // 投稿タイプ
                                    'tag'    => 'pickup', // タグをスラッグで指定する場合
                                    'posts_per_page' => 3, // 表示件数
                                    'orderby' => 'date', // 表示順の基準
                                    'order' => 'DESC' // 昇順・降順
                                ));
                                global $post;
                                if($tag_posts): foreach($tag_posts as $post): setup_postdata($post); 
                                ?>
                                    <li class="c-card article-list">
                                        <a href="<?php the_permalink(); ?>" class="c-card__link"></a>
                                        <div class="article-list__img">
                                            <span class="c-cat article-list__cat">
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
                                                <div class="article-list__thumb" style="background-image: url( '<?php echo $url; ?>' );"></div>
                                            <?php else : ?>
                                                <div class="article-list__thumb" style="background-image: url( '<?php echo $noimage; ?>' );"></div>
                                            <?php endif; ?>
                                            
                                        </div>
                                        <div class="c-card__desc article-list__desc">
                                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                                            <h3 class="article-list__ttl">
                                                <?php
                                                    if(mb_strlen($post->post_title)>30) {
                                                        $title= mb_substr($post->post_title,0,30) ;
                                                            echo $title . '...';
                                                    } else {
                                                        echo $post->post_title;
                                                    }
                                                ?>
                                            </h3>
                                        </div>
                                    </li>
                                <?php endforeach; endif; wp_reset_postdata(); ?>
                            </ul>
                        </section>                          
                    </article>
                    <!-- サイドバー -->
                    <aside class="blog-side">
                        <div class="side-block">
                            <h3 class="side-block__ttl">関連記事</h3>
                            <ul class="side-block__article">
                                <!-- 関連記事の取得 -->
                                <?php if(has_category()): ?>
                                <?php 
                                    //表示中の投稿に登録されているカテゴリID（term_id）を全て取得
                                    $categories = get_the_category();
                                    $cat_term_ids = array();
                                    foreach($categories as $category){
                                        $cat_term_ids[] = $category->term_id; //cat_ID でも同じ
                                    }
                                    //関連記事取得用クエリパラメーター
                                    $exclude_id = get_the_ID(); //閲覧中の記事ID（除外する記事ID）を取得
                                    $args = array(
                                        'post_type' => 'post',	//投稿を指定 （固定ページの場合は 'page'）
                                        'exclude' => $exclude_id,
                                        'posts_per_page' => '3',	//取得する件数
                                        'post__not_in' => array( $post->ID ),	//除外する投稿（本記事）
                                        'category__in' => $cat_term_ids,	//対象となるカテゴリID（配列）
                                        'orderby' => 'rand'	//表示順をランダムにしてい（日付順の場合は 'date'）
                                        );
                                    $the_query = new WP_Query( $args );	//クエリ実行
                                ?>
                                <?php if( $the_query->post_count > 0 ): ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <li class="c-card article-list">
                                        <a href="<?php the_permalink(); ?>" class="c-card__link"></a>
                                        <div class="article-list__img">
                                            <?php 
                                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                                $noimage = get_template_directory_uri() . '/images/img-default.png';
                                            ?>
                                            <?php if ($url) : ?>
                                                <div class="article-list__thumb" style="background-image: url( '<?php echo $url; ?>' );"></div>
                                            <?php else : ?>
                                                <div class="article-list__thumb" style="background-image: url( '<?php echo $noimage; ?>' );"></div>
                                            <?php endif; ?>
                                            
                                        </div>
                                        <div class="c-card__desc">
                                            <h3 class="article-list__blogttl">
                                                <?php
                                                if(mb_strlen($post->post_title)>30) {
                                                    $title= mb_substr($post->post_title,0,30) ;
                                                        echo $title . '...';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                                ?>
                                            </h3>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                    <p>関連する記事はありません</p>
                                <?php endif; ?><!-- post_count -->
                                <?php endif; ?><!-- has_category -->
                            </ul>
                        </div>
                        <div class="side-block">
                            <?php dynamic_sidebar('category-widget'); ?>
                        </div>
                    </aside>
                </div>
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