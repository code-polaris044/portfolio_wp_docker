<?php get_header(); ?>
<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv u-mb__50">
      <div class="p-mvWrap">
        <picture class="p-mv__picture">
          <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.avif" class="p-mv__img">
          <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.webp" class="p-mv__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.png" alt="mv1" class="p-mv__img">
        </picture>
        <div class="p-mv__limp">
          <h1 class="p-mv__title">
            SHUNYA SUGAWARA’s<br>
            profile website.
          </h1>
        </div>
        <div class="p-scrolldown1"><span>Scroll</span></div>
      </div>
    </section>
  </div>
</main>



<?php get_footer(); ?>
