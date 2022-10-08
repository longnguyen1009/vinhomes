<?php
/**
 * The template for displaying all tin_tuc single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VinHomes
 */

get_header();
?>
    <?php
    

    get_template_part('templates-part/content', 'listProDuctByYear'); 
  
    get_template_part('templates-part/content', 'fixed'); 
    ?>
<?php
get_footer();