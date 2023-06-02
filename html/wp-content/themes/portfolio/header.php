<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
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

<body id="<?php echo esc_attr($post->post_name); ?>">
	<div class="wrapper">
		<!-- header -->
		<header id="header" class="header">
			<div class="logo">
				<a href="<?php echo esc_url(home_url()); ?>/">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/common/" alt="">

				</a>
			</div>
			<!-- navigation -->
			<nav id="headerNav" class="headerNav">
				<div class="container">
					<ul class="list">
						<li class="listItem">
							<a href="<?php echo esc_url(home_url()); ?>/about/">
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
