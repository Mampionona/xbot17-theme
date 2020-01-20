<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xbot17-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="global-container">
		<header id="home" class="header-top-area">
			<div class="containerTopHeader clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo"><?php the_custom_logo(); ?></div>
						</div>
						<div class="col-md-9">
							<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<?php wp_nav_menu(array(
									'theme_location' => 'primary',
									'menu_class' => 'nav navbar-nav',
									'container_class' => 'collapse navbar-collapse',
									'container_id' => 'bs-example-navbar-collapse-1'
								)); ?>
							</nav>
						</div>
					</div>
				</div>
				<div class="banner-rappel">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p style="display:none;" class="slogan"></p>
							</div>
							<div class="col-md-6 contact-banner-rappel">
								<?php $telephone = telephone(); ?>
								<?php if ($telephone): ?>
									<p class="phone-rappel">
										<a href="tel:<?= str_replace(' ', '', $telephone); ?>">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<?= $telephone; ?>
										</a>
									</p>
								<?php endif; ?>
								<p class="demande-rappel">
									<a title="Demande de rappel" href="#" data-toggle="modal" data-target="#rappel"><?= __('Demande de rappel', 'xbot17'); ?></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="main-content">
