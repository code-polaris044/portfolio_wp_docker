<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_home() || is_front_page()) : ?>
		<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>

<?php get_header(); ?>

<body <?php body_class(); ?> id="id-<?php esc_attr(the_ID()); ?>">
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

		<header id="header" class="header">
			<div class="logo">
				<a href="<?php echo esc_url(home_url()); ?>/">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/common/" alt="ロゴ">
				</a>
			</div>

			<nav id="headerNav" class="headerNav">
				<div class="container">
					<ul class="list">
						<li class="listItem  mb-5">
							<a href="<?php echo esc_url(home_url('about')); ?>">
								<span class="jp">私たち</span><span class="en">About</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="menuBox">
				<?php
				//ページタイトル
				$test = '菅原';
				?>
				<?php
				//ページタイトル
				echo $test;
				?>
				<div id="menu" class="menu">
					<span class="menuTop"></span>
					<span class="menuBottom"></span>
				</div>
			</div>
		</header>
