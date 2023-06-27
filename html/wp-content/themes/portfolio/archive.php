<?php get_header(); ?>

<main class="blogArchiveMain">
  <!-- <section class="s_underlayer_common">
    <?php
    include('underlayer_mv/template02.php');
    ?>
  </section> -->
  <section class="blog-archive">
    <div class="post-list_wrap">
      <ul class="post-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="post-list__item">
              <figure class="post-list__item_wrap">
                <a href="<?php the_permalink(); ?>" class="thumbnail_link post_bm_8">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="noimage" class="wp-post-image">
                  <?php endif; ?>
                </a>
                <figcaption class="post-explanation__wrap">
                  <div class="post-link__wrap">
                    <button class="post-category_btn">
                      <a href="<?php echo esc_url(home_url()); ?>/blog/" class="btn_link">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                          echo esc_html($categories[0]->name);
                        }
                        ?>
                      </a>
                    </button>
                    <a href="<?php echo esc_url(home_url()); ?>/blog/" class="date_link">
                      <time class="post-list_date" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop=”datepublished”><?php echo get_the_date('Y年m月d日'); ?></time>
                    </a>
                  </div>
                  <div class="post-title_wrap">
                    <a href="<?php the_permalink(); ?>" class="post-title_link">
                      <?php the_title(); ?>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </li>
          <?php endwhile; ?>
      </ul>
    <?php else : ?>
      <p class="post_none">投稿がありません。</p>
    <?php endif; ?>
  </section>
  <section class="post_pagination">
    <?php the_posts_pagination(
      array(
        'mid_size' => 1,
        'prev_text' => '<span class="pagination-angle-left-sp">前の9件</span>',
        'next_text' => '<span class="pagination-angle-right-sp">次の9件</span>',
        'show_all' => false,
      )
    ); ?>
  </section>
</main>

<?php get_footer(); ?>
