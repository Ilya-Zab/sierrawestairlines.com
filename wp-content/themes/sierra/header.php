<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container header__container">
			<button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20" aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
				<div class="animated-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<a href="/" class="logo">
				<img src="<?= ASSETS_PATH ?>/img/logo.svg" data-mini-logo-url="<?= ASSETS_PATH ?>/img/logo-sticky.svg" alt="Logo">
			</a>
			<div class="nav-wrap">
				<?php
				wp_nav_menu(array(
					'menu' => 'main-menu',
					'menu_class' => 'nav__list',
					'container' => 'nav',
					'container_class' => 'nav',

				));
				?>
				<a href="/request-a-quote/" class="btn btn-danger header__btn_mob mt-4">
					Request a quote
				</a>
			</div>
			<a href="/request-a-quote/" class="btn btn-danger header__btn">
				Request a quote
			</a>
		</div>
	</header>