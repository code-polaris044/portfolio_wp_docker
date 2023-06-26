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

        <h1 class="p-mv__title">
          <span>Shunya</span>
          <span>Sugawara’s</span>
          <br>
          <span>Profile</span>
          <span>Website</span>
        </h1>

        <div class="p-front__scrollDown"><span>Scroll</span></div>
      </div>
    </section>
    <div class="p-front__news__picker u-mb__100">
      <div class="sliderbox">
        <ul class="sliderlist">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="sliderlist__item">
                <time class="slider__date" datetime="<?php echo get_the_date('Y.m.d'); ?>" itemprop="”datepublished”">
                  <a href="<?php echo get_the_permalink(); ?>" class="slider__date__link"><?php echo get_the_date('Y.m.d'); ?></a>
                </time>
                <span class="slider__text">
                  <a href="<?php echo get_the_permalink(); ?>" class="slider__text__link"><?php the_title(); ?></a>
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

    <section class="p-front__fade wrap u-mb__100">
      <div class="p-front__fade__title title">
        <span class="one">
          <h2 class="u-mb__50">自己紹介</h2>
          <p>氏名: 菅原俊哉</p>
          <p>生年月日: 1995年9月16日</p>
          <p>住所: 札幌市 北区 新琴似</p>
          <p>好きな食べ物: カプレーゼ</p>
          <p>趣味: 読書</p>
        </span>
        <span class="two">職務経歴</span>
        <span class="three">制作実績</span>
        <span class="four">サイト情報</span>
      </div>
      <div class="images">
        <img src="https://source.unsplash.com/dwKiHoqqxk8/400x350" alt="" class="one">
        <img src="https://source.unsplash.com/LxVxPA1LOVM/400x350" alt="" class="two">
        <img src="https://source.unsplash.com/J2-wAQDckus/400x350" alt="" class="three">
        <img src="https://source.unsplash.com/jvoZ-Aux9aw/400x350" alt="" class="four">
      </div>
    </section>

  </div>
</main>







<?php get_footer(); ?>
