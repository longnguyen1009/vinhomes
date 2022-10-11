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

<div id="main" class="all_colors" data-scroll-offset="88">

    <div class="stretch_full container_wrap alternate_color light_bg_color title_container">
        <div class="container"><strong class="main-title entry-title "><a href="https://vinhomesland.vn/" rel="bookmark"
                    title="Permanent Link: Vinhomes Land - Phân phối bất động sản Vingroup" itemprop="headline">Vinhomes
                    Land - Phân phối bất động sản Vingroup</a></strong></div>
    </div>
    <div class="container_wrap container_wrap_first main_color sidebar_right">

        <div class="container template-blog template-single-blog ">

        <?php
            echo get_the_content();
            get_template_part('templates-part/sidebar', 'main'); 
            ?>

        </div>
        <!--end container-->

    </div><!-- close default .container_wrap element -->


<?php
    

    get_template_part('templates-part/content', 'listProDuctByYear'); 
  
    get_template_part('templates-part/content', 'fixed'); 
    ?>
    <!-- end main -->
</div>
<?php
get_footer();