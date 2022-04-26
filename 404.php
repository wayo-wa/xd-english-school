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
    <main class="l-main pg-404Page">
        <div class="inner">
            <p class="notfound__ttl">404 - File Not Found</p>
            <p class="notfound__txt">お探しのページが見つかりません。<br>一時的にアクセスできない状況にあるか、<br>移動もしくは削除された可能性があります。</p>
        </div>
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
    </body>
</html>