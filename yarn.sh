#!/bin/sh

#まず、yarn initしてpackage.jsonを作成する

# それから、必要なファイルをまとめて記述する（下記）

yarn config set network-timeout 1000000 #タイムアウト時間を長くしておく
yarn add gulp --dev             # gulp本体をインストール
yarn add sass --dev             # sass本体をインストール
yarn add gulp-pleeease --dev    # sassをcssに。ベンダープレフィックス付与など
yarn add gulp-sass-glob --dev   # sassファイルのimportを使えるようにする
yarn add gulp-plumber --dev     # sassの構文エラーがあってもgulp-watchを止めない
yarn global add gulp-cli --dev  # gulpをコマンドから使えるように（グローバルのみインストール）
yarn add gulp-rename --dev      # ファイル名変更
yarn add gulp-imagemin --dev    # 画像圧縮
yarn add gulp-changed --dev     # 変更されたファイルを返す
yarn add imagemin-pngquant --dev # 画像圧縮(pngオプション設定)
yarn add imagemin-mozjpeg --dev # 画像圧縮(jpegオプション設定)
yarn add gulp-clean-css --dev   # css圧縮
yarn add gulp-uglify --dev     # js圧縮
yarn add scroll-hint --dev
# yarn add global browserify --dev  # jsファイルをまとめるビルドする（globalとローカル両方必要らしい）
# yarn add vinyl-source-stream --dev # browserifyをgulp.watchを使って自動で実行したい場合必要
# yarn add jquery                 # サービスで必要なので--devなしで
# yarn add gulp-sass --dev      # sassをcssにビルドする。現在はgulp-pleeeaseを使用している。


# コマンドで「yarn.sh」ファイルがあるディレクトリまで移動する。
# 今回の場合だと、 cd で dental_clinic まで移動する
# コマンドでsh yarn.sh 実行
# gulp-imageminを7.1.0にダウングレードする(yarn upgrade gulp-imagemin@^7.1.0)
# imagemin-mozjpegを9.0.0にダウングレードする(yarn upgrade imagemin-mozjpeg@^9.0.0)

# gulp-sassを使っていた時、エラー回避の為ダウングレードしていた。下記参照
# 現在はgulp-pleeeaseを使用しているので必要ないが、メモとして残しておく。
# gulp-sassを4.1.0にダウングレードする(yarn upgrade gulp-sass@^4.1.0)