<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MX3C9753');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_home() || is_front_page()) : ?>
		<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/common/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>


<?php get_header(); ?>

<body <?php body_class(); ?> id="id-<?php esc_attr(the_ID()); ?>">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX3C9753"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<div id="loading" class="loading">
			<div class="loading__spinner">
				<span class="loading__title">LOADING</span>
				<span class="loading__circle1 loading__circle"></span>
				<span class="loading__circle2 loading__circle"></span>
				<span class="loading__circle3 loading__circle"></span>
			</div>
		</div>

		<header id="l-header" class="l-header">
			<div class="l-headerWrap">
				<div class="l-header__leftWrap">
					<div class="l-logo">
						<a href="<?php echo esc_url(home_url()); ?>/">
							<picture class="l-logo__picture">
								<!-- <source type="image/avif" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/common/logo.avif">
								<source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/common/logo.webp"> -->
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/common/logo.png" alt="ロゴ">
							</picture>
						</a>
					</div>
					<div class="l-githubWrap">
						<a href="https://github.com/code-polaris044" target="_blank" rel="noopener noreferrer" class="l-github__link">
							<i class="fa-brands fa-github"></i>
						</a>
					</div>
				</div>
				<nav id="l-header__nav" class="l-header__nav">
					<div class="l-header__navWrap">
						<button class="l-hamburger">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<?php
						wp_nav_menu(array(
							'menu' => 'globalNav',
							'menu_class' => 'l-menu',
						));
						?>
						<?php
						wp_nav_menu(array(
							'menu' => 'globalNavSP',
							'menu_class' => 'l-sp__menu',
						));
						?>
					</div>
				</nav>
			</div>
		</header>
