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

                        <form action="http://localhost/vungnguyen/" id="searchform" method="get" class="">
                            <div>
                                <input type="submit" value="" id="searchsubmit"
                                    class="button avia-font-entypo-fontello">
                                <input type="text" id="s" name="s" value="<?php echo get_search_query() ?>" placeholder="Search">
                            </div>
                        </form><span class="author-extra-border"></span>
                    </section>
                </div>

                <?php 
                    $args = array(
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        's' => 'keyword',
                    );
                    $query = new WP_Query($args);
                    ?>
                <h4 class="extra-mini-title widgettitle">225 search results for: hà nội</h4>
                <?php
                    if( $query ->have_posts()) : while( $query -> have_posts()): $query -> the_post(); 
                ?>
                <article
                    class="post-entry post-entry-type-standard post-entry-36520 post-loop-1 post-parity-odd blog-grid  post-36520 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc tag-biet-thu tag-lien-ke tag-thi-truong"
                    itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
                    <div class="entry-content-wrapper clearfix standard-content">

                        <header class="entry-content-header">
                            <span class="search-result-counter ">1</span>
                            <h2 class="post-title entry-title "><a title="<?php the_title(); ?>"
                                    href="<?php the_permalink(); ?>" itemprop="headline"><?php the_title(); ?></a></h2>
                            <span class="post-meta-infos">
                                <time class="date-container minor-meta updated" itemprop="datePublished"
                                    datetime="<?php echo get_post_datetime( $source = 'gmt'); ?>"><?php echo get_the_date(); ?></time>
                                <span class="text-sep">/</span><span class="blog-categories minor-meta">in <a
                                        href="<?php echo get_post_type_archive_link(get_post_type(get_the_ID())); ?>"
                                        rel="tag"></a> </span>
                            </span>
                        </header>

                        <div class="entry-content" itemprop="text">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php else: ?>
                    <!-- Not posts found -->
                    <?php endif; 
                        wp_reset_query();
                        ?>

                    <footer class="entry-footer"></footer>

                </article>



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

    <?php get_template_part('templates-part/content', 'listProDuctByYear'); ?>



    <!-- end main -->
</div>
<?php get_template_part('templates-part/content', 'fixed'); ?>

<?php
get_footer();