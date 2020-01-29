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
	<title><?php wp_title('-', true, 'right'); ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,600,700,700i,900,900i|Poppins:600">
	<?php wp_head(); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-872490127"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-872490127');
	</script>

	<script>
		function gtag_report_conversion(url, form) {
			var callback = function () {
				if (typeof(url) != 'undefined') {
				window.location = url;
				}
			};
			var to = {
				// contact: 'h3I4CJDT8KoBEI_JhKAD',
				rappel: 'GPqPCKCuyKsBEI_JhKAD',
				// investir: 'O-QdCJ6syKsBEI_JhKAD',
				// distributeur: '-J_OCN_DxqsBEI_JhKAD'
			};
			var id = form in to && to[form] || '';
			gtag('event', 'conversion', {
				// 'send_to': 'AW-872490127/h3I4CJDT8KoBEI_JhKAD',
				'send_to': 'AW-872490127/' + id,
				'event_callback': callback
			});
			return false;
		}
	</script>
	<!-- Chatra messenger -->
	<script>
		(function(d, w, c) {
			w.ChatraID = 'wx6SjD7kiqRd3gdoi';
			var s = d.createElement('script');
			w[c] = w[c] || function() {
				(w[c].q = w[c].q || []).push(arguments);
			};
			s.async = true;
			s.src = 'https://call.chatra.io/chatra.js';
			if (d.head) d.head.appendChild(s);
		})(document, window, 'Chatra');
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="global-container">
		<header id="home" class="header-top-area">
			<div class="containerTopHeader clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<?php
									$custom_logo_id = get_theme_mod( 'custom_logo' );
									$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								?>
								<a title="Logo" href="<?= custom_home_url(); ?>"><img alt="Logo" src="<?= $image[0]; ?>"></a>
							</div>
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

		<?php get_template_part('template-parts/account-activation'); ?>

		<div class="main-content">
