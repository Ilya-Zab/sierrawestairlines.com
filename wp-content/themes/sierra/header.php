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
			<nav class="nav">
				<ul class="nav__list">
					<li class="nav__item">
						<a href="/about">
							About
						</a>
					</li>
					<li class="nav__item">
						<a href="/services">
							Services
						</a>
					</li>
					<li class="nav__item">
						<a href="/jumpseat">
							Jumpseat
						</a>
					</li>
					<li class="nav__item dropdown">
						<a href="/fleet" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Fleet
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="/executive-fleet.html">Executive Fleet</a></li>
							<li><a class="dropdown-item" href="#">Cargo Fleet</a></li>
						</ul>
					</li>
					<li class="nav__item">
						<a href="/contacts">
							Contact
						</a>
					</li>
					<li class="nav__item">
						<a href="/employees">
							Employees
						</a>
					</li>
					<li class="nav__item">
						<a href="/giving-back">
							Giving
						</a> back
					</li>
					<li class="nav__item">
						<a href="/careers">
							Careers
						</a>
					</li>
					<li class="nav__item">
						<a href="/">
							Blog
						</a>
					</li>
				</ul>
				<a href="/" class="btn btn-danger header__btn_mob">
					Request a quote
				</a>
			</nav>
			<a href="/" class="btn btn-danger header__btn">
				Request a quote
			</a>
		</div>
	</header>