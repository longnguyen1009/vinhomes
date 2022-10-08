<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VinHomes
 */

get_header();
?>
    <?php
        $id = get_the_ID();
        get_template_part('templates-du_an-id/du_an', $id);
        get_template_part('templates-part/content', 'listProDuctByYear');
        get_template_part('templates-part/content', 'fixed');  
    ?>

<?php
get_footer();