<?php get_header(); ?>
<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv u-mb__100">
      <div class="p-mvWrap">
        <div class="p-slide">
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
        </div>
        <h1 class="p-mv__title"><span>Shunya</span><span>Sugawara’s</span><br><span>Profile</span><span>Website</span></h1>
        <div class="p-front__scrollDown"><span>Scroll</span></div>
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
          <div class="glass__text__box">
            <h3 class="glass__title u-mb__20">菅原 俊哉</h3>
            <p class="glass__text">
              札幌出身で、フロントエンジニアとして活動中。<br>
              常に新しい技術に挑戦し、使いやすく魅力的なウェブ開発を追求しています。
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class=" p-front__jobCareer">
      <div class="p-front__jobCareerWrap">

      </div>
    </section>
    <section class="p-front__pastProjects">
      <div class="p-front__pastProjectsWrap">
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
            <p class="p-front__section__text u-mb__20">080-0000-000</p>
            <h3 class="p-front__section__subtitle u-mb__20">住所</h3>
            <p class="p-front__section__text u-mb__50">札幌市 北区 新琴似</p>
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
