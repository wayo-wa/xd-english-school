//ハンバーガーアイコンとドロワーメニュー
$('.js-buttonHamburger').on('click', function() {
    $('.p-hamburger').toggleClass('is-active');
    $('.p-drawer').toggleClass('is-active');
});

//Q&Aのアコーディオン
$(function(){
    $('.faq__wrap > dt').on('click',function(){
        $(this).next('dd').slideToggle();
        //openクラスをつける
        $(this).toggleClass("is-open");
        $(this).next('dd').toggleClass("is-open");
        //クリックされていないdtのis-openクラスを取る
        $('.faq__item__ques').not($(this)).removeClass('is-open');
        // 一つ開くと他は閉じるように
        $('.faq__item__ques').not($(this)).next('.faq__item__ans').slideUp();
    });
});
  
//ハンバーガー内のリストクリックでメニュー閉じる
$('.js-drawer-li').on('click', function() {
  $('.p-hamburger').removeClass('is-active');
  $('.p-drawer').removeClass('is-active');
});

//スクロールヒント
window.addEventListener('DOMContentLoaded', function(){
  new ScrollHint('.js-scrollable', {
    i18n: {
      scrollable: 'スクロールできます',
    }
  });
});
