<?php get_header(); ?>

<main class="p-about__main">
    <div class="p-main__Wrap">
        <section class="l-underlayer__common">
            <?php
            include('templates/under-mv.php');
            ?>
        </section>
        <section class="p-about__introduction">
            <div class="p-about__bg">
                <div class="p-about__introductionWrap">
                    <div class="p-about__titleWrap u-mb__50">
                        <h2 class="c-contents__title p-about__title">
                            ポートフォリオサイトについて
                        </h2>
                    </div>
                    <p class="p-about__text u-mb__50">
                        こちらのポートフォリオサイトは、菅原俊哉が作成したwordpressのオリジナルテーマのサイトです。<br><br>
                        Shell Designという表記は、運用しているX(旧Twitter)及びGitHubのアカンウト名です。<br><br>
                        1年半程前に、就職活動のために制作したサイトで、現在の技術力よりも低いですが、実績紹介用のサイトとして今回使用させていただいてます。
                    </p>
                    <div class="p-about__titleWrap u-mb__50">
                        <h2 class="c-contents__title p-about__title">
                            使用技術について
                        </h2>
                    </div>
                    <p class="p-about__text u-mb__50">
                        詳細は、<a href="https://github.com/code-polaris044/portfolio_wp_docker?tab=readme-ov-file" target="_blank" rel="noopener noreferrer">こちら</a>のGithubのreadme.mdに記載しております。また、コードもご確認いただけます。<br><br>
                        ※ドメイン管理は、お名前.comで管理しており、ネームサーバーのみシン・vpsに向けてます。<br><br>
                        ホスティングは、シン・vpsを使用<br><br>
                        OSは、AlmaLinux ver.9.3を使用<br><br>
                        実行環境は、kusanagi ver.9.5.4-1.el9を使用<br><br>
                        webサーバーは、nginx ver1.24.0を使用<br><br>
                        メールサーバーは、postfixを使用していますが、SPFレコードまでしか登録しておりません。DKIM、DMARCの設定はしていないため、gmailの場合、「お問合せ」フォームからの自動返信が届かない確率が高いです。<br><br>                
                        Wordpressのローカル環境の構築には、Dockerを使用<br><br>
                        CSS設計は、BEM + SMACSS or FLOCSS + ユーティリティCSS(自作)を併用<br><br>
                        SASS(scss記法)を使用<br><br>
                        postCSSは、autoprefixer(ベンダープレフィックスの最適化)のみ使用<br><br>
                        JavaScriptは、基本vanilla.jsで、複雑なコードになりそうな実装や実力的に難しい時はその時々にあったライブラリーを探して使用<br><br>
                        フォームやカスタム投稿ポスト等には、プラグインを使用<br><br>
                        モジュールバンドルツールは、WebPack5を使用しており、基本的な画像の圧縮やトランスコンパイラ(babel)などをプリセットして使用<br><br>
                    </p>
                </div>
            </div>
        </section>
        <section class="p-about__info" id="p-about__company">
            <div class="p-about__infoWrap">
                <div class="p-about__infoWrap-column u-mb__50">
                    <div class="p-about__titleWrap">
                        <h2 class="c-contents__title p-about__title">
                            サイト制作者
                        </h2>
                    </div>
                    <div class="p-about__imgWrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/only/pc.webp" alt="githubプロフィール画像" class="p-about___img">
                        <p class="p-about__caption">
                            <a href="https://github.com/code-polaris044" target="_blank" rel="noopener noreferrer">Shell Design</a>
                        </p>
                    </div>
                </div>
                <dl class="p-about__list__inner">
                    <dt class="p-about__dt">氏名</dt>
                    <dd class="p-about__dd">菅原 俊哉（スガワラ シュンヤ）</dd>
                    <dt class="p-about__dt">所在地</dt>
                    <dd class="p-about__dd">北海道札幌市北区新琴似</dd>
                    <dt class="p-about__dt">TEL</dt>
                    <dd class="p-about__dd">080-4167-4690</dd>
                    <dt class="p-about__dt">Mail</dt>
                    <dd class="p-about__dd">shunya_sugawara@icloud.com</dd>
                    <dt class="p-about__dt">職業</dt>
                    <dd class="p-about__dd">フロントエンジニア</dd>
                </dl>
            </div>
        </section>
        <session class="p-about__mapWrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23037.818019467726!2d141.3254432754836!3d43.10908003415067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b28b9df4066d3%3A0x507d400b452d8353!2z6bq755Sf6aeF!5e0!3m2!1sja!2sjp!4v1687806058381!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="p-about__map"></iframe>
        </session>
    </div>
</main>
</main>
<?php get_footer(); ?>
