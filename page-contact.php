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
    <main class="l-main pg-contactPage">
        <!-- page-ttlArea -->
        <div class="p-pagetitleArea p-pagetitleArea--contact">
            <h1 class="p-pagetitleArea__ttl">お問い合わせ・資料請求</h1>
        </div>
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        </div>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--min">
                <p class="desc">
                    弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
                </p>
                <div class="form">
                <?php echo do_shortcode('[mwform_formkey key="211"]'); ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>