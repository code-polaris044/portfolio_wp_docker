<?php get_header(); ?>

<main class="p-about__main  c-main">
    <div class="c-mainWrap">
        <!-- <section class="l-template u-mb__50">
            <?php
            include('templates/temp.php');
            ?>
        </section> -->
        <section class="p-about__introduction">
            <div class="p-about__bg">
                <div class="p-about__introductionWrap">
                    <div class="p-about__titleWrap u-mb__50">
                        <h2 class="c-contents__title">
                            直道物産について
                        </h2 c-contents__title>
                        <p class="c-contents__lead">
                            <?php
                            global $post;
                            $slug = $post->post_name;
                            echo strtoupper($slug);
                            ?>
                        </p>
                    </div>
                    <p class="p-about__text u-mb__50">
                        長年にわたり札幌市内中心の飲食店に多くの割り箸や食品用プラスチック容器を卸してます。
                        使う料理に合わせて割り箸の長さを最適なものに、とカスタマイズを提案することも可能です。
                        当社はアイデアと技術にこだわりを持ち、他者さまでは難しい小ロットにも対応でき、
                        納期・配達スピードに自信を持ってお客様に提供してます。
                    </p>
                    <div class="p-about__btnWrap">
                        <button class="p-bout__btn">
                            <a href="#p-about__company" class="p-bout__btn__link"><span class="c-btn__icon"><i class="fa-solid fa-caret-down"></i></span>会社概要</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-about__company" id="p-about__company">
            <div class="p-about__companyWrap">
                <div class="p-about__companyWrap-column u-mb__50">
                    <div class="p-about__titleWrap">
                        <h2 class=" c-contents__title">
                            会社概要
                        </h2 c-contents__title>
                        <p class="c-contents__lead">
                            COMPANY INFORMATION
                        </p>
                    </div>
                    <div class="p-about__imgWrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/membership.webp" alt="札幌商工会議所会員之章" class="p-about___img">
                        <p class="p-about__caption">札幌商工会議所会員</p>
                    </div>
                </div>
                <dl class="p-about__company__inner">
                    <dt class="p-about__company__dt">商号</dt>
                    <dd class="p-about__company__dd">直道物産（ナオトブッサン）</dd>
                    <dt class="p-about__company__dt">所在地</dt>
                    <dd class="p-about__company__dd">北海道札幌市豊平区水車町3丁目1-1 旭グランドハイツ1F</dd>
                    <dt class="p-about__company__dt">代表者</dt>
                    <dd class="p-about__company__dd">佐伯 巨人</dd>
                    <dt class="p-about__company__dt">TEL</dt>
                    <dd class="p-about__company__dd">011-817-1360</dd>
                    <dt class="p-about__company__dt">FAX</dt>
                    <dd class="p-about__company__dd">011-817-1361</dd>
                    <dt class="p-about__company__dt">事業内容</dt>
                    <dd class="p-about__company__dd">包装資材・食品容器・完封名入れ箸・割箸・加工全般</dd>
                </dl>
            </div>
        </section>
        <session class="p-about__mapWrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11662.68348156821!2d141.362771!3d43.048356!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a28d91d3f03%3A0x50bf99f2f65c6868!2z55u06YGT54mp55Sj!5e0!3m2!1sja!2sus!4v1685414775494!5m2!1sja!2sus" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="p-about__map u-mb__100"></iframe>
        </session>
        <section class="p-about__contact">
            <div class="p-about__contactWrap u-mb__100">
                <div class="c-contact__tel">
                    <div class="c-contact__tel__icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="c-contact__tel__text">
                        <p class="c-contact__text-green">011-817-1360</p>
                        <p class="c-contact__text">受付時間／平日10:00〜16:00</p>
                    </div>
                </div>
                <div class="c-contact__mail">
                    <div class="c-contact__mail__icon">
                        <a href="<?php echo esc_url(home_url()); ?>/contact/" class="c-contact__mail__link">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                    </div>
                    <div class="c-contact__mail__text">
                        <p class="c-contact__text-green">メールでのお問い合わせ</p>
                        <p class="c-contact__text">2営業日以内に返答いたします</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
</main>
<?php get_footer(); ?>
