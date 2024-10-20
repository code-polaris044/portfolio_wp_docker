<?php get_header(); ?>

<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv u-mb__100">
      <div class="p-mvWrap">
        <div id="MV">
          <h1 class="p-mv__title"><span>Shunya</span><br class="sp__br"><span>Sugawara’s</span><br><span>Profile</span><br class="sp__br"><span>Website</span></h1>
          <div class="p-front__scrollDown"><span>Scroll</span></div>
        </div>
      </div>
    </section>
    <section class="p-front__news">
      <div class="p-front__newsWrap">
        <div class="p-front__news__picker u-mb__100">
          <div class="sliderbox">
            <ul class="sliderlist"><?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
              <li class="sliderlist__item"><time class="slider__date" datetime="<?php echo get_the_date('Y.m.d'); ?>" itemprop="”datepublished”">
                  <a href="<?php echo get_the_permalink(); ?>" class="slider__date__link">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </a>
                </time>
                <span class="slider__text">
                  <a href="<?php echo get_the_permalink(); ?>" class="slider__text__link">
                    <?php the_title(); ?>
                  </a>
                </span>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿がありません</p>
          <?php endif; ?>
            </ul>
          </div>
          <div class="prev"></div>
          <div class="next"></div>
        </div>
      </div>
    </section>
    <section class="p-front__selfIntroduction">
      <div class="p-front__selfIntroductionWrap">
        <h2 class="p-front__selfIntroduction__title u-mb__50">自己紹介</h2>
        <div class="p-front__selfIntroduction__inner">
          <div class="selfIntroduction__picWrap">
            <picture class="selfIntroduction__pic">
              <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade1.avif" class="selfIntroduction__src">
              <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade1.webp" class="selfIntroduction__src">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade1.png" alt="ロゴ" class="selfIntroduction__img">
            </picture>
          </div>
          <div class="glass__text__box p-selfIntroduction__glass">
            <h3 class="glass__title p-selfIntroduction__glass__title u-mb__20">菅原 俊哉</h3>
            <p class="glass__text p-selfIntroduction__glass__text">
              札幌出身で、フロントエンジニアとして活動中。<br>
              常に新しい技術に挑戦し、使いやすく魅力的なウェブ開発を追求しています。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class=" p-front__jobCareer">
      <div class="p-front__jobCareerWrap">
        <h2 class="p-front__jobCareer__title u-mb__50">職務経歴</h2>
        <div class="p-front__jobCareer__inner">
          <div class="glass__text__box  p-jobCareer__glass">
            <p class="glass__text p-jobCareer__glass__text">・2019年 4月 北海道糖業株式会社 入社 人事課配属</p>
            <p class="glass__text p-jobCareer__glass__text">・2021年 9月 北海道糖業株式会社 一身上の都合で退職</p>
            <p class="glass__text p-jobCareer__glass__text">・2022年 4月 〜 11月 web開発のインターンシップ・アルバイトを経験</p>
            <p class="glass__text p-jobCareer__glass__text">・2022年 12月 株式会社Workup 入社 web制作部配属</p>
            <p class="glass__text p-jobCareer__glass__text">・2023年 5月 株式会社Workup 会社都合退職</p>
            <p class="glass__text p-jobCareer__glass__text">・2023年 8月 株式会社アリスタイル 入社</p>
          </div>
          <div class="jobCareer__picWrap">
            <picture class="jobCareer__pic">
              <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade2.avif" class="jobCareer__src">
              <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade2.webp" class="jobCareer__src">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade2.jpg" alt="ロゴ" class="jobCareer__img">
            </picture>
          </div>
        </div>
      </div>
    </section>
    <section class="p-front__pastProjects">
      <div class="p-front__pastProjectsWrap">
        <h2 class="p-front__pastProjects__title u-mb__50">制作実績</h2>
        <div class="p-front__pastProjects__inner">
          <div class="pastProjects__picWrap">
            <picture class="jobCareer__pic">
              <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade3.avif" class="pastProjects__src">
              <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade3.webp" class="pastProjects__src">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade3.jpg" alt="ロゴ" class="pastProjects__img">
            </picture>
          </div>
          <div class="glass__text__box p-pastProjects__glass">
            <h3 class="glass__title u-mb__20 p-pastProjects__glass__title">制作物について</h3>
            <p class="glass__text u-mb__50 p-pastProjects__glass__text">
              LP/WordPress/CakePHPなどのフロントエンド開発・制作で実際に納品したものを掲載しています。
            </p>
            <button class="p-front__btn p-pastProjects__glass__btn">
              <a href="<?php echo esc_url(get_post_type_archive_link('gallery')) ?>" class="p-front__btn__link">Galleryへ</a>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="p-front__instagram">
      <div class="p-front__instagramWrap">
        <h2 class="p-front__section__title u-mb__100 p-instagram__title">Instagram</h2>
        <?php
        include('templates/insta.php');
        ?>
      </div>
    </section>
    <section class="p-front__sns">
      <h2 class="p-front__section__title u-mb__100 p-x__title">X(旧 twitter)</h2>
      <div class="p-front__sns__inner">
          <div class="p-front_x">
            <div class="p-front_my_x_contents">
              <h3 class="p-front__section__lead p-x_subtitle">個人で運用しているX</h3>
              <p class="u-mb__30 p-front__sns__text">Shell Designというアカウント名で、読書した技術本・スキル・日常を投稿しています。</p>
              <div class="p-front_x_containerA">
                <a class="twitter-timeline" data-lang="ja" data-width="550" data-height="740" href="https://twitter.com/code_polaris044?ref_src=twsrc%5Etfw">Tweets by code_polaris044</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
          </div>
          <div class="p-front_company_x_contents_wrap">
            <div class="p-front_company_x_contents">
              <div class="p-front_company_x_item">
                  <h3 class="p-front__section__lead p-x_subtitle">会社で運用しているX</h3>
                  <p class="u-mb__30">自社マーケティングのリーダーをしており、会社の公式アカウントを運営しています。</p>
                  <div class="p-front_x_container">
                    <a class="twitter-timeline" data-lang="ja" data-width="550" data-height="280" href="https://twitter.com/alistyle_inc?ref_src=twsrc%5Etfw">Tweets by alistyle_inc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>
              </div>
              <div class="p-front_company_x_item">
                  <h3 class="p-front__section__lead p-x_subtitle">会社で提供しているサービス名で運用しているX</h3>
                  <p class="u-mb__30">DX関連の自社サービスを展開しており、会社のアカウントとは別に運営しています。</p>
                  <div class="p-front_x_container">
                    <a class="twitter-timeline" data-lang="ja" data-width="550" data-height="280" href="https://twitter.com/AlistyleDx51541?ref_src=twsrc%5Etfw">Tweets by AlistyleDx51541</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="p-front__contact">
      <div class="p-front__contactWrap">
        <div class="p-front__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23037.818019467726!2d141.3254432754836!3d43.10908003415067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b28b9df4066d3%3A0x507d400b452d8353!2z6bq755Sf6aeF!5e0!3m2!1sja!2sjp!4v1687806058381!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="p-front__contact__textarea">
          <h2 class="p-front__section__title u-mb__30">お問い合わせ</h2>
          <p class="p-front__section__lead u-mb__20">お気軽にお問い合わせください</p>
          <address class="p-front__address">
            <h3 class="p-front__section__subtitle u-mb__20">TEL</h3>
            <p class="p-front__section__text u-mb__20">080-4167-4690</p>
            <h3 class="p-front__section__subtitle u-mb__20">住所</h3>
            <p class="p-front__section__text u-mb__50">北海道 札幌市 北区 新琴似</p>
          </address>
          <button class="p-front__btn">
            <a href="<?php echo get_the_permalink(); ?>/contact/" class="p-front__btn__link">Contact</a>
          </button>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
