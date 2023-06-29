<?php get_header(); ?>

<main class="p-gallery__main">
  <div class="p-gallery__mainWrap">
    <section class="l-underlayer__common">
      <div class="l-lower__bgWrap l-lower__bg__gallery">
        <h1 class="l-lower__mv__title">
          Gallery
        </h1>
      </div>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </section>
    <section>
      <div class="p-post__list__wrap">
        <ul class="p-post-list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-post__list__item">
                <figure class="p-post__list__item__wrap">
                  <a href="<?php the_permalink(); ?>" class="p-post__thumbnail__link u-mb__20">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/noImage.jpg" alt="noimage" class="noimage">
                    <?php endif; ?>
                  </a>
                  <figcaption class="post-explanation__wrap">
                    <div class="p-post__link__wrap">
                      <button class="p-post__category__btn">
                        <a href="<?php echo esc_url(home_url()); ?>/news/" class="btn__link">
                          <?php
                          $categories = get_the_category();
                          if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                          }
                          ?>
                        </a>
                      </button>
                      <a href="<?php echo esc_url(home_url()); ?>/news/" class="date__link">
                        <time class="post-list_date" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop=”datepublished”><?php echo get_the_date('Y年m月d日'); ?></time>
                      </a>
                    </div>
                    <div class="p-post__title__wrap">
                      <a href="<?php the_permalink(); ?>" class="p-post__title__link">
                        <?php the_title(); ?>
                      </a>
                    </div>
                  </figcaption>
                </figure>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="post__none">投稿がありません。</p>
          <?php endif; ?>
        </ul>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
