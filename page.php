<?php
/**
 * The template for displaying all pages
 *
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
<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer();
