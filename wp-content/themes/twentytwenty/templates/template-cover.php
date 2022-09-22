<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'templates-part/content-cover' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'templates-part/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
