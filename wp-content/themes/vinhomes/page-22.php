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
 * @package VinHomes
 */

get_header();
?>

<div id="main" class="all_colors" data-scroll-offset="88">

    <div class="stretch_full container_wrap alternate_color light_bg_color title_container">
        <div class="container">
            <h1 class="main-title entry-title "><a href="https://vinhomesland.vn/lien-he/" rel="bookmark"
                    title="Permanent Link: Liên hệ" itemprop="headline">Liên hệ</a></h1>
        </div>
    </div>
    <div class="main_color container_wrap_first container_wrap fullsize" style=" ">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-20967">
                    <div class="entry-content-wrapper clearfix">
                        <div class="flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_one_half  avia-builder-el-first  "
                            style="border-radius:0px; ">
                            <?php get_template_part('template-parts/content', 'contact'); ?>
                        </div>
                        <div class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-2  el_after_av_one_half  avia-builder-el-last  "
                            style="border-radius:0px; ">
                            <?php get_template_part('template-parts/content', 'account'); ?>
                        </div>
                        <p></p>
                    </div>
                </div>
            </main><!-- close content main element -->
            <!-- section close by builder template -->
        </div>
        <!--end builder template-->
    </div>


    <!-- end main -->
</div>

<?php get_template_part('template-parts/content', 'listProDuctByYear'); ?>

<?php
get_footer();