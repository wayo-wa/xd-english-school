<ul class="p-pagenav">
    <?php the_posts_pagination(
        array(
            'mid_size'           => '2', // 現在のページの両端に表示するページ数
            'prev_next'          => false, // リスト内に「前へ」「後へ」のリンクを表示するかどうか。表示する場合はprev_text, next_textで指定
        )
      ); 
    ?>
</ul>
