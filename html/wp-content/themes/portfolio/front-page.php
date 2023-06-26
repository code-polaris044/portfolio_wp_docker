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
    <section class="wrap">
      <div class="title">
        <span class="one">Efficacious</span>
        <span class="two">Craven</span>
        <span class="three">Intelligent</span>
        <span class="four">Dazzling</span>
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
