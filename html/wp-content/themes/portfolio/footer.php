<!-- footer -->
<footer id="footer" class="footer">
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/" alt="">
      </a>
    </div>

    <nav id="footerNav" class="footerNav">
      <ul class="list">
        <li class="listItem">
          <a href="<?php echo esc_url(home_url()); ?>/about/">
            <span class="jp">私たち</span><span class="en">About</span>
          </a>
        </li>
      </ul>
    </nav>

  </div>

  <p class="copy">&copy;2022 inc.</p>

</footer>
<!-- wrapper -->
</div>

<!-- swiper -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/swiper-bundle.min.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/swiper.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/swiper.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/function.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/function.js')); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>