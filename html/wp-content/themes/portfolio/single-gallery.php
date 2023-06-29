<?php get_header(); ?>

<main class="blogMain">
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
  <section class="blog_single">
    <div class="blog_wrap">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="blog_links_wrap">
            <button class="blog-category_btn">
              <a href="<?php echo esc_url(home_url()); ?>/news/" class="btn_link">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo esc_html($categories[0]->name);
                }
                ?>
              </a>
            </button>
            <a href="<?php echo esc_url(home_url()); ?>/news/" class="date_link">
              <time class="post-list_date" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop=”datepublished”><?php echo get_the_date('Y年m月d日'); ?></time>
            </a>
          </div>
          <div class="blog_contents">
            <h2 class="blog_title"><?php the_title(); ?></h2>
            <div class="subtitel_line"></div>
            <div class="blog_text_wrap">
              <?php the_content(); ?>
            </div>
          </div>
          <button class="blog_btn">
            <a href="<?php echo esc_url(home_url()); ?>/news/" rel="noopener noreferrer" class="btn_link">
              一覧へ戻る
            </a>
          </button>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
