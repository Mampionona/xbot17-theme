<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package xbot17-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function xbot17_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'xbot17_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function xbot17_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'xbot17_pingback_header' );

function append_elements_menu_items($items, $args) {
	switch ($args->theme_location) {
		case 'primary':
			$investir = __('Investir', 'xbot17');
			$investir_url = get_the_permalink(15);
			$items .= '<li class="menu-item item-invest"><a title="' . $investir . '" href="' . $investir_url . '">' . $investir . '</a></li>';

			$languages = apply_filters('wpml_active_languages', null);

			// var_dump($languages);

			if (is_array($languages) && count($languages)) {
				$items .= '<li class="menu-item item_lang">';
					foreach ($languages as $_ => $language) {
						$url = $language['url'];
						$code = $language['code'];
						$native_name = $language['native_name'];
						$flag = get_template_directory_uri() . '/assets/images/lang_' . $code . '.png';
						$classes = array('lang-item', 'lang_' . $code);

						if ($language['active']) {
							$classes[] = 'active';
						}

						$classes = join(' ', $classes);
						$items .= '<a class="' . $classes . '" href="' . $url . '"><img title="' . $native_name . '" src="' . $flag . '" alt="' . $native_name . '"></a>';
					}
				$items .= '</li>';
			}
		break;

		case 'footer':
			$items .= '<li><a href="https://www.facebook.com/Xbot17-348177115853887/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>';
			$items .= '<li><a href="https://www.instagram.com/xbot17_officiel/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>';
	}
	return $items;
}

add_filter('wp_nav_menu_items', 'append_elements_menu_items', 10, 2);

function telephone() {
	return get_theme_mod('telephone');
}

function get_translated_post_id($post_id) {
	if (function_exists('icl_object_id')) {
		return icl_object_id($post_id, 'page', false, ICL_LANGUAGE_CODE);
	}
	return $post_id;
}

function wp_title_cb($title) {
	$name = get_bloginfo('name');
	return $title . $name;
}
add_filter('wp_title', 'wp_title_cb', 10, 1);

function page_redirect() {
	if (is_front_page()) {
		wp_redirect(apply_filters('translated_post_link', 13));
		exit;
	}
}

add_action('template_redirect', 'page_redirect');
