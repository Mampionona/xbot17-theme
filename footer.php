<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xbot17-theme
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 text-left copy-wrapper">
					&copy; <?php printf(esc_html__('Copyright %s. Tous droits réservés.', 'xbot17'), date('Y')); ?>
				</div>
				<div class="col-md-7 col-sm-7">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer',
						'menu_class' => 'menu',
						'menu_id' => 'menu-menu-footer'
					)); ?>
				</div>
			</div>
		</div>
		<div class="avert">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
