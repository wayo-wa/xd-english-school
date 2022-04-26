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
    <main class="l-main pg-frontPage">
        <!-- fv -->
        <div class="fv">
            <div class="fv__wrap">
                <h1 class="fv__ttl">TOEFL対策はEngress</h1>
                <p class="fv__txt">
                    日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFL<span>スクール</span>
                </p>
                <p class="fv__btn">
                    <a class="c-btn c-btn--point" href="<?php echo esc_url(home_url('/contact/')); ?>">資料請求</a>
                </p>
                <a class="c-link c-link__deco" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </div>
        </div>
        <!-- intro -->
        <section class="intro">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--l p-section__ttl--white">TOEFL学習でこんな悩みありませんか？</h2>
                <div class="intro__wrap">
                    <ul class="intro__read">
                        <li class="intro__read__item">勉強の習慣が<br>身についていない</li>
                        <li class="intro__read__item">勉強しているはず<br>なのに点数が<span>伸びない</span></li>
                        <li class="intro__read__item">正しい勉強方法が<br>わからない</li>
                    </ul>
                    <div class="intro__main">
                        <div class="intro__main__inner">
                            <div class="intro__main__content">
                                <h3 class="intro__main__ttl">Engressは<br>
                                    <span>TOEFLに特化したスクールです</span>
                                </h3>
                                <p class="intro__main__txt">
                                    完全オーダーメイドで、１人１人の悩みに合わせた<span>最適な指導で</span><br>
                                    TOEFLの苦手分野を克服します。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
        <!-- feature -->
        <section class="feature">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--l">TOEFL対策に特化したEngress3つの強み</h2>
                    <ul class="feature__menu">
                        <li class="feature__item">
                            <div class="feature__item__desc">
                                <span class="feature__item__tag">特長 １</span>
                                <h3 class="feature__item__ttl">TOEFLに最適化された<br>
                                    無駄のないカリキュラム
                                </h3>
                                <p class="feature__item__txt">
                                    TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                                </p>
                            </div>
                            <div class="feature__item__img">
                                <img class="c-imgfit" src="<?php echo esc_url(get_theme_file_uri('images/feature01.jpg')); ?>" alt="TOEFLに最適化された無駄のないカリキュラム">
                            </div>
                        </li>
                        <li class="feature__item">
                            <div class="feature__item__desc">
                                <span class="feature__item__tag">特長 ２</span>
                                <h3 class="feature__item__ttl">日本人指導歴10年以上の<br>経験豊富な講師陣
                                </h3>
                                <p class="feature__item__txt">
                                    Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                                </p>
                            </div>
                            <div class="feature__item__img">
                                <img class="c-imgfit" src="<?php echo esc_url(get_theme_file_uri('images/feature02.jpg')); ?>" alt="日本人指導歴10年以上の経験豊富な講師陣">
                            </div>
                        </li>
                        <li class="feature__item">
                            <div class="feature__item__desc">
                                <span class="feature__item__tag">特長 ３</span>
                                <h3 class="feature__item__ttl">平均3ヶ月でTOEFL iBT20点アップ</h3>
                                <p class="feature__item__txt">
                                    Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                                </p>
                            </div>
                            <div class="feature__item__img">
                                <img class="c-imgfit" src="<?php echo esc_url(get_theme_file_uri('images/feature03.jpg')); ?>" alt="平均3ヶ月でTOEFL iBT20点アップ">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="feature__banner">
                    <h3 class="feature__banner__ttl">Engressの料金プランはこちら</h3>
                    <p class="feature__banner__btn">
                        <a class="c-btn" href="<?php echo esc_url(home_url('/plan/')); ?>">料金を見てみる</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- voice -->
        <section class="voice">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--l p-section__ttl--white">TOEFL成功事例</h2>
                    <ul class="voice__menu">
                        <li class="voice__item">
                            <p class="voice__item__txt"><?php the_field('headline-1'); ?></p>
                            <div class="voice__item__img">
                                <img src="<?php the_field('img-1'); ?>" alt="<?php the_field('name-1'); ?>">
                            </div>
                            <ul class="voice__tagList">
                                <li class="voice__tag job"><?php the_field('job-1'); ?></li>
                                <li class="voice__tag name"><?php the_field('name-1'); ?></li>
                                <li class="voice__tag score"><?php the_field('score-1'); ?></li>
                            </ul>
                        </li>
                        <li class="voice__item">
                            <p class="voice__item__txt"><?php the_field('headline-2'); ?></p>
                            <div class="voice__item__img">
                                <img src="<?php the_field('img-2'); ?>" alt="<?php the_field('name-2'); ?>">
                            </div>
                            <ul class="voice__tagList">
                                <li class="voice__tag job"><?php the_field('job-2'); ?></li>
                                <li class="voice__tag name"><?php the_field('name-2'); ?></li>
                                <li class="voice__tag score"><?php the_field('score-2'); ?></li>
                            </ul>
                        </li>
                        <li class="voice__item">
                            <p class="voice__item__txt"><?php the_field('headline-3'); ?></p>
                            <div class="voice__item__img">
                                <img src="<?php the_field('img-3'); ?>" alt="<?php the_field('name-3'); ?>">
                            </div>
                            <ul class="voice__tagList">
                                <li class="voice__tag job"><?php the_field('job-3'); ?></li>
                                <li class="voice__tag name"><?php the_field('name-3'); ?></li>
                                <li class="voice__tag score"><?php the_field('score-3'); ?></li>
                            </ul>
                        </li>
                    </ul>
            </div>
        </section>
        <!-- guide -->
        <section class="guide">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--l">ご利用の流れ</h2>
                <table class="guide__wrap">
                    <tr class="guide__item">
                        <th class="guide__item__num">01</th>
                        <td class="guide__item__ttl">お問い合わせ</td>
                        <td class="guide__item__txt">まずはフォームまたはお電話からお申し込みください。</td>
                    </tr>
                    <tr class="guide__item">
                        <th class="guide__item__num">02</th>
                        <td class="guide__item__ttl">ヒアリング</td>
                        <td class="guide__item__txt">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
                    </tr>
                    <tr class="guide__item">
                        <th class="guide__item__num">03</th>
                        <td class="guide__item__ttl">学習プランのご提供</td>
                        <td class="guide__item__txt">目標達成のために最適な学習プランをご提案致します。</td>
                    </tr>
                    <tr class="guide__item">
                        <th class="guide__item__num">04</th>
                        <td class="guide__item__ttl">ご入会</td>
                        <td class="guide__item__txt">お申込み完了後、レッスンがスタートします。</td>
                    </tr>
                </table>
            </div>
        </section>
        <!-- faq -->
        <section class="faq">
            <div class="l-site__inner l-site__inner--primary">
                <h2 class="p-section__ttl p-section__ttl--l">よくある質問</h2>
                    <dl class="faq__wrap js-faqAccordion">
                        <dt class="faq__item faq__item__ques is-open">Engressはサラリーマンでも学習を続けられるでしょうか？</dt>
                        <dd class="faq__item faq__item__ans is-open">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
                        <dt class="faq__item faq__item__ques">教材はオリジナルのものを使用しているのでしょうか？</dt>
                        <dd class="faq__item faq__item__ans">オリジナルの教材と厳選した複数の市販の教材を組み合わせて最適なものをセレクトしています。</dd>
                        <dt class="faq__item faq__item__ques">講師に日本人はいますか？</dt>
                        <dd class="faq__item faq__item__ans">日本人講師も多数在籍しております。</dd>
                        <dt class="faq__item faq__item__ques">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</dt>
                        <dd class="faq__item faq__item__ans">TOEFL以外のサポートもできるフリープランもございますのでお気軽にお問い合わせください。</dd>
                    </dl>
            </div>
        </section>
        <!-- postArea -->
        <section class="postArea">
            <div class="l-site__inner l-site__inner--primary">
                <div class="postArea__wrap">
                    <div class="postArea__blog">
                        <h2 class="postArea__ttl">ブログ</h2>
                        <!-- 投稿記事 -->
                        <ul class="postArea__blog__menu">
                            <?php
                                $wp_query = new WP_Query();
                                $my_posts = array(
                                    'post_type' => 'post',
                                    'posts_per_page'=> '3',
                                );
                                $wp_query->query( $my_posts );
                                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
                            ?>
                                <li class="c-card postArea__blog__item">
                                    <a class="c-card__link postArea__blog__item__inner" href="<?php the_permalink(); ?>"></a>
                                    <div class="postArea__blog__img">
                                        <span class="c-cat postArea__blog__cat">
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
                                            <div class="postArea__blog__thumb" style="background-image: url( '<?php echo $url; ?>' );"></div>
                                        <?php else : ?>
                                            <div class="postArea__blog__thumb" style="background-image: url( '<?php echo $noimage; ?>' );"></div>
                                        <?php endif; ?>
                                        
                                    </div>
                                    <div class="c-card__desc postArea__blog__desc">
                                        <h3 class="postArea__blog__ttl">
                                            <?php
                                                if(mb_strlen($post->post_title)>30) {
                                                    $title= mb_substr($post->post_title,0,30) ;
                                                        echo $title . '...';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                            ?>
                                        </h3>
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                                    </div>
                                </li>
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="postArea__news">
                        <h2 class="postArea__ttl">お知らせ</h2>
                        <ul class="postArea__news__menu">
                            <?php
                                $wp_query = new WP_Query();
                                $my_posts = array(
                                    'post_type' => 'news',
                                    'posts_per_page'=> '3',
                                );
                                $wp_query->query( $my_posts );
                                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
                            ?>
                            <li class="postArea__news__item">
                                <a href="<?php the_permalink(); ?>">
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                                    <p class="postArea__news__txt"><?php the_title_attribute(); ?></p>
                                </a>
                            </li>
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- promotionArea -->
        <?php get_template_part('includes/promotionArea'); ?>
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
    </body>
</html>