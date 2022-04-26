const gulp = require('gulp');//gulp本体
const sassGlob = require('gulp-sass-glob');//sassファイルのimportを使えるようにする
const pleeease = require("gulp-pleeease");//sassをcssに、ベンダープレフィックス付与
const plumber = require('gulp-plumber');//構文エラーがあってもgulpを止めない
const mincss = require('gulp-clean-css');//css圧縮
const rename = require('gulp-rename');//ファイル名の変更
const imagemin = require('gulp-imagemin');//画像圧縮
const pngquant = require('imagemin-pngquant');//画像圧縮(pngオプション設定)
const mozjpeg = require('imagemin-mozjpeg');//画像圧縮(jpegオプション設定)
const changed = require('gulp-changed');//画像圧縮されたファイルを返す


//sassをcssにコンパイル
gulp.task('sass', function() {
    return gulp.src('./app.scss')
      .pipe(sassGlob())//sassファイルのimportを使えるようにする
      .pipe(plumber())//構文エラーあってもgulpを止めない.
      .pipe(pleeease({
        autoprefixer:{ // ベンダープレフィックスの自動付与
            browsers:[                  
              "last 2 versions",// 対象ブラウザの2つ前のバージョン指定
              "ie >= 11",       // IE11以上
              "Android >= 4"    // Android4以上
            ],
          },
        sass: true,//sassをcssに
        minifier: false,//css圧縮は下記mincssのtaskで別途実行
        out: 'style.css'
      }))
      .pipe(gulp.dest('./css/src'));
  });
  
//cssを圧縮
gulp.task('mincss', function() {
    return gulp.src('./css/src/*.css')//元ファイル
    .pipe(plumber())//構文エラーあってもgulpを止めない.
    .pipe(mincss())//css圧縮
    .pipe(rename('app.min.css'))//ファイル名と拡張子の変更
    .pipe(gulp.dest('./css'));//出力先（cssフォルダに自動で作成される）
});

//画像を圧縮
const paths = {
    srcDir : './img',//元ディレクトリ
    dstDir : './images'//出力ディレクトリ
}
gulp.task('imagemin', function() {
    const srcGlob = paths.srcDir + '/*.+(jpg|jpeg|png|gif)';//元ファイル
    const dstGlob = paths.dstDir;//出力ファイル
    return gulp.src(srcGlob)//元ファイル
        .pipe(plumber()) // 構文エラーあってもgulp止めない
        .pipe(changed(dstGlob))//srcGlobとdstGlobの差分を、changedで変更されていないファイルだけ返す
        .pipe(imagemin([//画像圧縮のオプション
            // imagemin.gifsicle({interlaced: true}),//gif
            mozjpeg({progressive: true}),//jpeg
            mozjpeg({ quality: 80 }),//jpeg画質
            mozjpeg({
                quality     : 85,
                progressive : false // ここがfalseならベースライン。デフォルト値はture
              }),
            pngquant({//png
                quality: [.60, .70],//画質
                speed: 1//処理速度。基本1のままで。
            })
        ])
    )
    .pipe(gulp.dest(dstGlob));//出力
});


//watch 
gulp.task('watch', function(){
    gulp.watch('./scss/**', gulp.series('sass'));//scss以下すべてのファイルをwatch
    gulp.watch('./css/src/*.css', gulp.series('mincss'));//css圧縮
    gulp.watch(paths.srcDir + '/*', gulp.series('imagemin'));//画像圧縮
    // gulp.watch('./js/src/base.js', gulp.series('minjs'));//js圧縮
});