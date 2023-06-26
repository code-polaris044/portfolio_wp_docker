<?php get_header(); ?>
<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv">
      <div class="p-mvWrap">
        <picture class="p-mv__picture">
          <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.avif" class="p-mv__img">
          <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.webp" class="p-mv__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.png" alt="mv1" class="p-mv__img">
        </picture>
        <!-- <picture class="p-mv__picture">
          <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv2.avif" class="p-mv__img">
          <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv2.webp" class="p-mv__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv2.png" alt="mv1" class="p-mv__img1">
        </picture>
        <picture class="p-mv__picture">
          <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv3.avif" class="p-mv__img">
          <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv3.webp" class="p-mv__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv3.png" alt="mv1" class="p-mv__img">
        </picture> -->



        <div class="p-mv__limp">
          <h1 class="p-mv__title">
            SHUNYA SUGAWARA’s<br>
            profile website.
          </h1>
        </div>
      </div>
    </section>
  </div>
</main>



<?php get_footer(); ?>
