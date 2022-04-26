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
    <main class="l-main pg-sendPage">
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--min">
            <p class="desc">
                お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします
            </p>
                <a class="c-link c-link__deco" href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
            </div>
        </div>
        
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>