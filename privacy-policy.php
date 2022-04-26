<?php
/*
Template Name: プライバシーポリシー
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
    <main class="l-main pg-privacyPolicy">
        <!-- bread -->
        <?php get_template_part('includes/bread'); ?>
        <!-- container -->
        <div class="container">
            <div class="l-site__inner l-site__inner--min">
                <h2 class="title title__en"><?php the_title_attribute(); ?></h2>
                <p class="title title__ja">プライバシーポリシー</p>
                    <?php the_content(); ?>
                
            </div>
        </div>
        
    </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>