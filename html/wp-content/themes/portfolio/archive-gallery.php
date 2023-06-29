<?php get_header(); ?>

<main class="p-gallery__main">
  <div class="l-lower__bgWrap l-lower__bg__gallery">
    <h1 class="l-lower__mv__title">
      Gallery
    </h1>
  </div>
  <div>
    <?php if (have_posts()) : ?>
      <dl>
        <?php while (have_posts()) : the_post(); ?>
          <div>
            <dt><?php echo get_the_date('Y.m.d'); ?></dt>
            <dd>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                <!-- <i class="fa-solid fa-angle-right"></i> -->
              </a>
            </dd>
          </div>
        <?php endwhile; ?>
      </dl>
      <?php the_posts_pagination(
        array(
          'prev_text' => '<i class="fa-solid fa-angle-left"></i>前のページ',
          'next_text' => '次のページ<i class="fa-solid fa-angle-right"></i>',
        )
      ); ?>
    <?php else : ?>
      <p>投稿がありません。</p>
    <?php endif; ?>

  </div>




  </section>


</main>

<?php get_footer(); ?>
