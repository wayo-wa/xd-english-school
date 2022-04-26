<?php
/*
Template Name: 料金表ページ
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
    <main class="l-main pg-planPage">
        <!-- pagettlArea -->
        <div class="p-pagetitleArea p-pagetitleArea--plan">
            <h1 class="p-pagetitleArea__ttl">コース・料金</h1>
        </div>
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- plan -->
        <div class="container">
            <div class="l-site__inner l-site__inner--primary">
                <section class="system">
                    <h2 class="p-section__ttl p-section__ttl--m">料金体系</h2>
                    <div class="system__main">
                        <span class="system__parts system__box"><span class="adjusted">入会金</span><span>39,800円</span></span>
                        <span class="system__parts system__plus"></span>
                        <span class="system__parts system__box">月額費用</span>
                    </div>
                    <p class="system__txt">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
                </section>
                <section class="price">
                    <h2 class="p-section__ttl p-section__ttl--m">料金表</h2>
                    <div class="price__container">
                        <ul class="price__menu js-scrollable">
                            <li class="price__li">
                                <h3 class="price__li__ttl"> 基礎プラン</h3>
                                <div class="price__li__body">
                                    <p class="price__li__fee"><?php the_field('plan-1'); ?><span>円~</span></p>
                                    <p class="price__li__tax">*月額（税抜価格）</p>
                                    <ul class="price__desc">
                                        <li class="price__desc__li">
                                            カリキュラム作成
                                        </li>
                                        <li class="price__desc__li">
                                            TOEFL学習サポート
                                        </li>
                                        <li class="price__desc__li">
                                            週一回のビデオMTG
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="price__li">
                                <h3 class="price__li__ttl">演習プラン</h3>
                                <div class="price__li__body">
                                    <p class="price__li__fee"><?php the_field('plan-2'); ?><span>円~</span></p>
                                    <p class="price__li__tax">*月額（税抜価格）</p>
                                    <ul class="price__desc">
                                        <li class="price__desc__li">
                                            カリキュラム作成
                                        </li>
                                        <li class="price__desc__li">
                                            TOEFL学習サポート
                                        </li>
                                        <li class="price__desc__li">
                                            週一回のビデオMTG
                                        </li>
                                        <li class="price__desc__li">
                                            月二回の模試（解説付き）
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="price__li">
                                <h3 class="price__li__ttl price__li__ttl--best">
                                    おすすめ<br>志望校対策プラン
                                </h3>
                                <div class="price__li__body">
                                    <p class="price__li__fee price__li__fee--best"><?php the_field('plan-3'); ?><span>円~</span></p>
                                    <p class="price__li__tax">*月額（税抜価格）</p>
                                    <ul class="price__desc">
                                        <li class="price__desc__li">
                                            カリキュラム作成
                                        </li>
                                        <li class="price__desc__li">
                                            TOEFL学習サポート
                                        </li>
                                        <li class="price__desc__li">
                                            週一回のビデオMTG
                                        </li>
                                        <li class="price__desc__li">
                                            週一の英語面接対策
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="price__li">
                                <h3 class="price__li__ttl"> フレックスプラン</h3>
                                <div class="price__li__body">
                                    <p class="price__li__fee"><?php the_field('plan-4'); ?><span>円~</span></p>
                                    <p class="price__li__tax">*月額（税抜価格）</p>
                                    <ul class="price__desc">
                                        <li>＊別途ご相談ください</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
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