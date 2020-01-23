<?php
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xbot17-theme
 */
 ?>
<?php
    // Alefa mankany @page Mon compte raha efa connecté
    if (is_user_logged_in()) {
        $page_id = get_translated_post_id(13);
        $mon_compte_url = get_the_permalink($page_id);
        wp_redirect($mon_compte_url);
        exit;
    }
?>
<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
    <div class="register-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer();
