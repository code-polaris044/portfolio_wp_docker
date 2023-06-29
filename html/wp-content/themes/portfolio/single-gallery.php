<?php get_header(); ?>

<main class="p-single__gallery__main">
  <section class="l-underlayer__common u-mb__100">
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
  <section class="p-single__gallery">
    <div class="p-single__galleryWrap u-mb__100">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="p-single__gallery__textWrap  u-mb__100">
            <h2 class="p-single__gallery__title">
              <?php the_title(); ?>
            </h2>
            <div class="p-single__gallery__linkwrap">
              <a href="<?php echo esc_url(home_url()); ?>/gallery/" class="p-single__gallery__date__link">
                <time class="p-single__gallery__date" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datepublished"><?php echo get_the_date('Y年m月d日'); ?></time>
              </a>
            </div>
          </div>
          <?php
          $gallery_posts = get_posts(array('post_type' => 'gallery'));
          foreach ($gallery_posts as $post) : setup_postdata($post);
          ?>
            <?php
            $gallery_img1 = get_field('gallery_img1');
            $gallery_img2 = get_field('gallery_img2');
            $gallery_img3 = get_field('gallery_img3');
            $gallery_img_sp = get_field('gallery_img_sp');
            if (!empty($gallery_img1 || $gallery_img2 || $gallery_img3)) : ?>
              <div class="p-single__splideWrap">
                <div class="splide  u-mb__50">
                  <div class="splide__track">
                    <ul class="p-gallery__single__imgWrap splide__list">
                      <li class="splide__slide">
                        <figure class="slide__figure">
                          <figcaption class="slide__figcaption">
                            MV
                          </figcaption>
                          <img src="<?php echo esc_url($gallery_img1['url']); ?>" alt="<?php echo esc_attr($gallery_img1['alt']); ?>" class="p-single__gallery__img" />
                        </figure>
                      </li>
                      <li class="splide__slide">
                        <figure class="slide__figure">
                          <figcaption class="slide__figcaption">
                            インタビューセクション
                          </figcaption>
                          <img src="<?php echo esc_url($gallery_img2['url']); ?>" alt="<?php echo esc_attr($gallery_img2['alt']); ?>" class="p-single__gallery__img" />
                        </figure>
                      </li>
                      <li class="splide__slide">
                        <figure class="slide__figure">
                          <figcaption class="slide__figcaption">
                            CTAボタン
                          </figcaption>
                          <img src="<?php echo esc_url($gallery_img3['url']); ?>" alt="<?php echo esc_attr($gallery_img3['alt']); ?>" class="p-single__gallery__img" />
                        </figure>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="p-single__gallery__imgSpWrap u-mb__100">
                  <img src="<?php echo esc_url($gallery_img_sp['url']); ?>" alt="<?php echo esc_attr($gallery_img_sp['alt']); ?>" class="p-single__gallery__imgSp" />
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
          <div class="blog_contents">
            <div class="blog_text_wrap">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="post__none">投稿がありません。</p>
      <?php endif; ?>

      <div class="p-pager__linkWrap u-mb__100">
        <div class="pager__prev">
          <?php previous_post_link('<i class="fa-solid fa-caret-left"></i> %link', '%title', true); ?>
        </div>
        <div class="pager__next">
          <?php next_post_link(' %link <i class="fa-solid fa-caret-right"></i>', '%title', true); ?>
        </div>
      </div>
      <div class="p-single__gallery__btnWrap">
        <div class="p-single__gallery__top__btnWrap">
          <button class="p-single__gallery__btn btn__color__reverse">
            <a href="https://github.com/code-polaris044/YOSHIDA_LP" rel="noopener noreferrer" target="_blank" class="btn__link">
              Githubへ
            </a>
          </button>
          <button class="p-single__gallery__btn">
            <a href="https://yoshida-g.ac.jp/saishushoku/" rel="noopener noreferrer" target="_blank" class="btn__link">
              サイトへ
            </a>
          </button>
        </div>
        <button class="p-single__gallery__back__btn">
          <a href="<?php echo esc_url(home_url()); ?>/gallery/" rel="noopener noreferrer" class="btn__link">
            一覧へ戻る
          </a>
        </button>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
