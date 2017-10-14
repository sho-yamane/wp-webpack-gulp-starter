# Webpack + Gulpで作るWordPressスターターテーマ

Webpack3.7.1で動作確認しました。jsはWebpackでscssとimgはGulpで処理しています。
PHPファイルでは、jsとcssの読み込み設定、不要なコードのremoveしているのみです。

head内にインラインでcssを埋め込む仕様にしていますのでheader.phpは「php/header.php」を編集してください。

## コマンド

```
# npmインストール
npm i

# ファイルをdistに出力
gulp

# ファイルを監視して適宜出力
gulp watch
```
