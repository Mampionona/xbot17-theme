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
<?php get_template_part('template-parts/guest'); ?>
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
