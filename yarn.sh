#!/bin/sh

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
yarn add scroll-hint --dev
