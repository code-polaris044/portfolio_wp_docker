<?php get_header(); ?>
<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv u-mb__1">
      <div class="p-mvWrap">
        <div class="p-slide">
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
        </div>

        <div class="p-mv__limp">
          <h1 class="p-mv__title">
            SHUNYA SUGAWARA’s<br>
            profile website.
          </h1>
        </div>
        <div class="p-scrolldown1"><span>Scroll</span></div>
      </div>
    </section>
    <section class="p-front__news">
      <div class="p-front__newsWrap">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
            <h2><?php the_title(); ?></h2>
            <div class="singleNews__cotntainerContent"><?php the_content(); ?></div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿がありません</p>
        <?php endif; ?>
      </div>
    </section>
    <section class="p-front__introduction">
      <div class="p-front__introductionWrap">

      </div>
    </section>
  </div>
</main>



<?php get_footer(); ?>
