<?php get_header(); ?>
<main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv">
      <div class="p-mvWrap">
        <picture class="p-mv__imgWrap">
          <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.avif">
          <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.webp">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/mv1.png" alt="mv1">
        </picture>
        <div class="r">
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
