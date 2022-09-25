<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package VinHomes
 */

get_header();
?>

<div id="main" class="all_colors" data-scroll-offset="88">

    <div class="stretch_full container_wrap alternate_color light_bg_color title_container">
        <div class="container">
            <h1 class="main-title entry-title ">To search the site please enter a valid term</h1>
        </div>
    </div>

    <div class="container_wrap container_wrap_first main_color sidebar_right">

        <div class="container">

            <main class="content template-search av-content-small alpha units" role="main" itemprop="mainContentOfPage"
                itemscope="itemscope" itemtype="https://schema.org/SearchResultsPage">

                <div class="page-heading-container clearfix">
                    <section class="search_form_field">
                        <h4>New Search</h4>
                        <p>If you are not happy with the results below please do another search</p>

                        <form action="https://vinhomesland.vn/" id="searchform" method="get" class="">
                            <div>
                                <input type="submit" value="" id="searchsubmit"
                                    class="button avia-font-entypo-fontello">
                                <input type="text" id="s" name="s" value="" placeholder="Search">
                            </div>
                        </form><span class="author-extra-border"></span>
                    </section>
                </div>



                <!--end content-->
            </main>

            <aside class="sidebar sidebar_right  smartphones_sidebar_active alpha units" role="complementary"
                itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
                <div class="inner_sidebar extralight-border">

                    <?php get_template_part('templates-part/sidebar', 'media'); ?>
                    <?php get_template_part('templates-part/sidebar', 'laterNews'); ?>
                    
                    <section
                        style="position: relative; margin-bottom: 0px; transition: all 0s ease 0s; transform: none; margin-top: 0px; padding: 30px 0px; height: 0px; width: 296px; top: 0px; display: none;">
                    </section>
                    
                    <?php get_template_part('templates-part/sidebar', 'account'); ?>

                </div>
            </aside>
        </div>
        <!--end container-->

    </div><!-- close default .container_wrap element -->

	<?php get_template_part('templates-part/content', 'listProductByYear'); ?>

    <!-- end main -->
</div>

<?php
get_footer();