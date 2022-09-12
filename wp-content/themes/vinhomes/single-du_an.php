<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vinhomes
 */

get_header();
?>

	<main id="primary" class="site-main">
        <php
         echo get_the_ID();	
		?>

	</main><!-- #main -->

<?php
get_footer();
