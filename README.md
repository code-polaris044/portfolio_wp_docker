# ポートフォリオサイト

ポートフォリオURL<br>

[https://www.shell-design.online/](https://www.shell-design.online/)

wordpressテーマフォルダです。<br>
https://github.com/code-polaris044/portfolio_wp_docker/tree/main/html/wp-content/themes

<br>

## ポートフォリオサイトについて

こちらのポートフォリオサイトは、菅原俊哉が作成したwordpressのオリジナルテーマのサイトです。

Shell Designという表記は、運用しているX(旧Twitter)及びGitHubのアカンウト名です。

1年半程前に、就職活動のために制作したサイトで、現在の技術力よりも低いですが、実績紹介用のサイトとして今回使用させていただいてます。


## 使用技術の概要

ホスティングは、シン・vpsを使用
※ドメイン管理は、お名前.comで管理しており、ネームサーバーのみシン・vpsに向けてます。

OSは、AlmaLinux ver.9.3を使用

実行環境は、kusanagi ver.9.5.4-1.el9を使用

webサーバーは、nginx ver1.24.0を使用

メールサーバーは、postfixを使用していますが、SPFレコードまでしか登録しておりません。DKIM、DMARCの設定はしていないため、gmailの場合、「お問合せ」フォームからの自動返信が届かない確率が高いです。

Wordpressのローカル環境の構築には、Dockerを使用

CSS設計は、BEM + SMACSS or FLOCSS + ユーティリティCSS(自作)を併用

SASS(scss記法)を使用

postCSSは、autoprefixer(ベンダープレフィックスの最適化)のみ使用

JavaScriptは、基本vanilla.jsで、複雑なコードになりそうな実装や実力的に難しい時はその時々にあったライブラリーを探して使用

フォームやカスタム投稿ポスト等には、プラグインを使用

モジュールバンドルツールは、WebPack5を使用しており、基本的な画像の圧縮やトランスコンパイラ(babel)などをプリセットして使用

## 使用技術の詳細

インスタグラムセクションの表示は、InstagramグラフAPIを使用<br>
※githubで、トークンの公開ができないためgitignoreしています。<br>
https://developers.facebook.com/docs/instagram-api/

ハンバーガーメニュー・文字制限・ニュースピッカー・ローディング画面は、vanilla.js

使用スキル<br>
・ローカル環境:[Docker](https://www.docker.com/)<br>
・モジュールバンドルツール: [webpack5](https://webpack.js.org/)<br>
・html<br>
・sass(scss)<br>
・post-css<br>
・javascript<br>
・php(wordpress)<br>

使用jsライブラリー<br>
・tippy.js<br>
→ツールチップの実装<br>
[https://atomiks.github.io/tippyjs/](https://atomiks.github.io/tippyjs/)
<br>

・splide.js<br>
→スライダーの実装<br>
[https://atomiks.github.io/tippyjs/](https://splidejs.com/)
<br>

・scrollrevealjs.js<br>
→コンテンツの動きの実装<br>
[https://atomiks.github.io/tippyjs/](https://scrollrevealjs.org/)
<br>

・three.js<br>
→メインビジュアルのWebGL<br>
[https://threejs.org/](https://threejs.org/)
<br>

・Vanta.js<br>
→three.jsのライブラリー<br>
[https://www.vantajs.com/?effect=topology](https://www.vantajs.com/?effect=topology)
<br>


<br>
使用しているWordpressのプラグイン<br>
・Secure Custom Fields(旧Advanced Custom Fields)<br>
https://ja.wordpress.org/plugins/advanced-custom-fields/
<br>
・All-in-One WP Migration<br>
https://ja.wordpress.org/plugins/all-in-one-wp-migration/
<br>
・Custom Post Type UI<br>
https://ja.wordpress.org/plugins/custom-post-type-ui/
<br>
・FV Top Level Categories<br>
https://ja.wordpress.org/plugins/fv-top-level-cats/
<br>
・WP Multibyte Patch<br>
https://ja.wordpress.org/plugins/wp-multibyte-patch/
<br>
・Breadcrumb NavXT<br>
https://ja.wordpress.org/plugins/breadcrumb-navxt/
<br>
・MW WP Form<br>
https://ja.wordpress.org/plugins/mw-wp-form/
<br><br>


![スクリーンショット 2023-07-02 18 31 31](https://github.com/code-polaris044/portfolio_wp_docker/blob/main/html/wp-content/themes/portfolio/screenshot.png)




※ iPhone 12 mini(375×812)の実機でChrome・Safariの動作確認済み

以上です。
