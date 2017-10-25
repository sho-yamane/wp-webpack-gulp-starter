# Webpack + Gulpで作るWordPressスターターテーマ

Webpack3.7.1で動作確認しました。jsはWebpackでscssとimgはGulpで処理しています。
PHPファイルでは、jsとcssの読み込み設定、不要なコードのremoveしているのみです。

head内にインラインでcssを埋め込む仕様にしていますのでheader.phpは「php/header.php」を編集してください。

Pjax遷移対応のため、jQueryとBarba.jsに依存。またスライダーはSlick、reset.cssはres.cssを使用しています。必要ない方は該当の箇所を削除してください。

## コマンド

```
# npmインストール
npm i

# ファイルをdistに出力
gulp

# ファイルを監視して適宜出力
gulp watch
```
