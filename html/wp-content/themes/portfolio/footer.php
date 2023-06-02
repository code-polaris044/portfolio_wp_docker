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
<?php wp_footer(); ?>
</body>

</html>
