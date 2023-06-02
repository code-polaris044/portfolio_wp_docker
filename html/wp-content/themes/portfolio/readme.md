# wordpress baseフォルダ 2023.0126

## 主に使用しているnpm (パッケージマネージャ)
npm init

npm ci //package-lock.json (サーバーからダウンロードなどした場合このファイルが有った場合[package-lock.json] )

npm install sass

npm install postcss-cli autoprefixer -D



### 生成されたpackage.json > scriptsに記述
"postcss": "postcss dist/css/style.css --use autoprefixer --dir dist/css/ --watch"
"sass": "sass src/sass:dist/css/ --style=compressed --watch"



### 一番下に追加
"browserslist": [
  "last 2 versions",
  "> 1% in JP"
]

※pcにnodeがインストールされていない場合パッケージ使用できないので、src>sassは削除し、dist>css>style.cssで記述
