<?php
//コンテンツ幅をセット
if(!isset($content_width)) {
    $content_width = 900;
}

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

 function custom_theme_setup() {
     //head内にフィードリンクを追加
     add_theme_support('automatic-feed-links');
     //titleタグを動的に
     add_theme_support('title-tag');
     //カスタムメニューの有効化（グローバルナビゲーション）
     register_nav_menus(
         array(
             'globalnav' => 'グローバルナビゲーション',
         )
     );
     //アイキャッチ画像の機能設定
     add_theme_support('post-thumbnails');
    //  set_post_thumbnail_size(240, 180, false);
 }
 add_action('after_setup_theme', 'custom_theme_setup');

 // サイト名とページタイトルの区切り文字変更
 function change_title_separator( $separator ) {
    $separator = '|'; return $separator;
  }
  add_filter( 'document_title_separator', 'change_title_separator' );

  //ブラウザのページタブのタイトルの変更
  function wp_custom_title_output( $title ) {
    $newtitle = str_replace('投稿', 'ブログ', $title['title']);
    $title['title'] = $newtitle;
    return $title;
}
add_filter( 'document_title_parts', 'wp_custom_title_output' );

/*=====================================================
 Gutenbergブロック用のCSSファイルを読み込まないようにするコード
=======================================================*/
 add_action('wp_enqueue_scripts', function() {
    wp_deregister_style('wp-block-library');
 });
 
 /*=====================================================
 jqueryをフロントはGoogle CDN、管理画面はWPデフォルトのjQueryを使う
=======================================================*/
function load_google_cdn() {
    // if(!is_admin()) {//管理画面以外
        //WPデフォルトのjQueryの解除
        wp_deregister_script('jquery');
        //GoogleのCDNのjQueryを出力
        wp_enqueue_script(
            'jquery',//scriptのハンドル名
            /* local時だけhttp://から記述！！！！！！！！！ */
            'http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',//src
            // 'ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',//src
            array(),//このscriptより前に読み込む必要があるscript
            '3.6.0',//バージョンがある
            true//footerに出力
        );
    // }
}
add_action('wp_enqueue_scripts', 'load_google_cdn');

 /*=====================================================
 圧縮したCSSファイル、Jsファイルの読み込み
=======================================================*/
function custom_enqueue_styles() {
    wp_enqueue_style(//自作のCSSファイル p148参照
        'base-style',
        // get_stylesheet_uri(),//テーマ認識用のデフォルトcssファイル　←これいらない？
        get_template_directory_uri().'/css/app.min.css',//sassコンパイル＆css圧縮後のファイル
        array(),// style.cssより先に読み込むCSSは無いので配列は空
        null,//バージョン指定
        'all'//p149参照
    );
    wp_enqueue_style(//scroll-hintのCSSファイル
        'scroll-hint-style',
        'https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css',//CDNファイルのURL
        array(),// style.cssより先に読み込むCSSは無いので配列は空
        null,//バージョン指定
        'all'//p149参照
    );
    wp_enqueue_script(//自作のJaveScriptファイル読み込み
        'main-script',
        get_template_directory_uri().'/js/main.js',
        // get_template_directory_uri().'/js/app.min.js',
        array('jquery'),//このscriptより前に読み込む必要があるscript
        null,
        true
    );
    wp_enqueue_script(//object-fitのJaveScriptファイル読み込み
        'object-fit-script',
        get_template_directory_uri().'/js/ofi.min.js',
        array('jquery'),//このscriptより前に読み込む必要があるscript
        null,
        true
    );
    wp_enqueue_script(//scroll-hintのJaveScriptファイル読み込み
        'scroll-hint-script',
        'https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js',//CDNファイルのURL
        array('jquery'),//このscriptより前に読み込む必要があるscript
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

/*=====================================================
 object-fitの実行
=======================================================*/
function my_add_object_fit_scripts() {
    $script = 'objectFitImages();';
    wp_add_inline_script( 'object-fit', $script );
}
add_action( 'wp_enqueue_scripts', 'my_add_object_fit_scripts' );

/*=====================================================
 カスタム投稿の登録(お知らせの投稿)
=======================================================*/
function add_custom_post_type(){
    //お知らせ
    register_post_type(
        'news', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => 'お知らせ', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
                'author',
                'thumbnail',
                'revisions'
            )
        )
    );
}
add_action('init', 'add_custom_post_type');

/*=====================================================
 ウィジェットエリアの登録（カテゴリー）
=======================================================*/
// ウィジェットブロックエディターを無効にする
add_filter( 'use_widgets_block_editor', '__return_false' );
// ウィジェットエリアの登録
function custom_widget_rigister() {
    register_sidebar(array(
        'name'          =>'カテゴリーウィジェットエリア',
        'id'            =>'category-widget',
        'description'   =>'ブログページのサイドバーに表示されます',
        'before_widget' =>'<div id="%1$s" class="widget-category"%2$s">',
        'after_widget'  =>'</div>',
        'before_title'  =>'<h3 class="side-block__ttl">',
        'after_title'  =>'</h3>',

    ));
}
add_action('widgets_init', 'custom_widget_rigister');

/*=====================================================
 archive.phpを使えるように設定(ブログ一覧ページ)
=======================================================*/
/* ※この関数記述後、ダッシュボードから「設定」-「パーマリンク」-「変更を保存」
   をしないと反映されない　*/
function post_has_archive( $args, $post_type ) {
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //ブログ一覧ページのurlは/blog/
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/*=====================================================
 the_excerpt()タグの文字数やタグ、[…]表示を変更したい
=======================================================*/
function wpdocs_custom_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

remove_filter('the_excerpt', 'wpautop');

/*=====================================================
 アーカイブページのタイトルを変更して出力する
=======================================================*/
function my_archive_title($title) {
	if ( is_category() ) {
    	$title = single_cat_title( '', false ); 
    } elseif ( is_tag() ) { 
        $title = single_tag_title( '', false ); 
    } 
    $title = $title. '一覧'; 
    return $title; 
}; 
add_filter( 'get_the_archive_title', 'my_archive_title');

/*=====================================================
 お問い合わせフォーム　WM WP form
=======================================================*/

remove_filter( 'the_content', 'wpautop' );
the_content();

// フォーム識別子が211の場合の例
add_action( 'mwform_enqueue_scripts_mw-wp-form-211', function () {
    wp_dequeue_style('mw-wp-form');
  } );







