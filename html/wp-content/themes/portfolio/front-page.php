<?php get_header();
?><main class="p-front__main">
  <div class="p-frontWrap">
    <section class="p-mv u-mb__100">
      <div class="p-mvWrap">
        <div class="p-slide">
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
          <div class="p-slide__image"></div>
        </div>
        <h1 class="p-mv__title"><span>Shunya</span><span>Sugawara’s</span><br><span>Profile</span><span>Website</span></h1>
        <div class="p-front__scrollDown"><span>Scroll</span></div>
      </div>
    </section>
    <div class="p-front__news__picker u-mb__100">
      <div class="sliderbox">
        <ul class="sliderlist"><?php if (have_posts()) : ?><?php while (have_posts()) : the_post();
                                                            ?><li class="sliderlist__item"><time class="slider__date" datetime="<?php echo get_the_date('Y.m.d'); ?>" itemprop="”datepublished”"><a href="<?php echo get_the_permalink(); ?>" class="slider__date__link"><?php echo get_the_date('Y.m.d');
                                                                                                                                                                                                              ?></a></time><span class="slider__text"><a href="<?php echo get_the_permalink(); ?>" class="slider__text__link"><?php the_title();
                                                                                                                ?></a></span></li><?php endwhile;
                  ?><?php else : ?><p>投稿がありません</p><?php endif;
                                ?></ul>
      </div>
      <div class="prev"></div>
      <div class="next"></div>
    </div>
    <section class="p-front__fade wrap u-mb__100">
      <div class="p-front__fade__title title"><span class="one">
          <h2 class="u-mb__50">自己紹介</h2>
          <p>氏名: 菅原俊哉</p>
          <p>生年月日: 1995年9月16日</p>
          <p>住所: 札幌市 北区 新琴似</p>
          <p>好きな食べ物: カプレーゼ</p>
          <p>趣味: 読書</p>
        </span><span class="two">職務経歴</span><span class="three">制作実績</span><span class="four">サイト情報</span></div>
      <div class="images"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade1.webp" alt="ロゴ" class="one"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade2.webp" alt="ロゴ" class="two"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade3.webp" alt="" class="three"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/only/fade4.webp" alt="ロゴ" class="four"></div>
    </section>
    <section class="p-front__contact">
      <div class="p-front__contactWrap">
        <div class="p-front__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23037.818019467726!2d141.3254432754836!3d43.10908003415067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b28b9df4066d3%3A0x507d400b452d8353!2z6bq755Sf6aeF!5e0!3m2!1sja!2sjp!4v1687806058381!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="p-front__contact__text">
          <h3>お問い合わせ</h3>
        </div>
      </div>
    </section>
  </div>
</main><?php get_footer();
        ?>
