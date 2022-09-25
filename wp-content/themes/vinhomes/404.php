<?php
/**
* Display when page 404
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VinHomes
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php get_template_part('templates-part/content', 'mainSlider'); ?>
    <?php get_template_part('templates-part/content', 'listProDuctByAddress'); ?>
    <?php get_template_part('templates-part/content', 'listNews'); ?>
    <?php get_template_part('templates-part/content', 'listProDuctByYear'); ?>

</main><!-- #main -->

<?php get_template_part('templates-part/content', 'fixed'); ?>

<?php

get_footer();
