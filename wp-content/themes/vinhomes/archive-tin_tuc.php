<?php
/**
 * The template for displaying archive pages
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
            <h1 class="main-title entry-title "><a href="https://vinhomesland.vn/category/tin-tuc/" rel="bookmark"
                    title="Permanent Link: Tin tức" itemprop="headline">Tin tức</a></h1>
        </div>
    </div>
    <div class="container_wrap container_wrap_first main_color fullsize">

        <div class="container template-blog ">

            <main class="content av-content-full alpha units" role="main" itemprop="mainContentOfPage"
                itemscope="itemscope" itemtype="https://schema.org/Blog">



                <div class="entry-content-wrapper">
                    <div data-autoplay="" data-interval="5" data-animation="fade" data-show_slide_delay="90"
                        class="avia-content-slider avia-content-grid-active avia-content-slider1 avia-content-slider-odd avia-builder-el-no-sibling "
                        itemscope="itemscope" itemtype="https://schema.org/Blog">
                        <div class="avia-content-slider-inner">
                            <?php
                                $args = array(
                                    'post_type' => 'tin_tuc',
                                    'posts _per_page' => 12,
                                    'orderby' => "ID",
                                    'order' => 'DESC',
                                    'post_status' => 'publish',

                                );
                                $query = new WP_Query($args);
                                $i = 1;
                                if( $query ->have_posts() ){
                                    while( $query ->have_posts()){
                                        $query -> the_post();
                                        if($i % 3 == 1){
                                        ?>
                            <div class="slide-entry-wrap">
                                <?php } ?>

                                <article
                                    class="slide-entry flex_column  post-entry post-entry-38852 slide-entry-overview slide-loop-2 slide-parity-even  av_one_third  real-thumbnail post-format-standard"
                                    itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
                                    <a href="<?php the_permalink(); ?>" data-rel="slide-1" class="slide-image"
                                        title="Vingroup ra mắt giai đoạn 3 Vinhomes Ocean Park"><img width="495"
                                            height="400" src="<?php 
                                                $id = get_the_ID();
                                                echo get_field('tin_tuc_thumbnail', $id)['url'];
                                             ?>"
                                            class="wp-image-38781 attachment-portfolio size-portfolio wp-post-image"
                                            loading="lazy"><span class="image-overlay overlay-type-extern"
                                            style="left: -5px; top: 0px; overflow: hidden; display: block; height: 272.578px; width: 347.328px;"><span
                                                class="image-overlay-inside"></span></span></a>
                                    <div class="slide-content">
                                        <header class="entry-content-header">
                                            <h3 class="slide-entry-title entry-title " itemprop="headline"><a
                                                    href="<?php the_permalink(); ?>"
                                                    title="Vingroup ra mắt giai đoạn 3 Vinhomes Ocean Park"><?php the_title(); ?></a>
                                            </h3><span class="av-vertical-delimiter"></span>
                                        </header>
                                        <div class="slide-meta"><time class="slide-meta-time updated"
                                                itemprop="datePublished"
                                                datetime="<?php echo get_post_datetime( $source = 'gmt'); ?>"><?php echo get_the_date(); ?></time>
                                        </div>
                                        <div class="slide-entry-excerpt entry-content" itemprop="text">
                                            <?php the_excerpt(); ?></div>
                                        <footer class="entry-footer"></footer>
                                    </div>
                                </article>

                                <?php 
                                        $i++; 
                                        if($i %3 == 1 && $i != 1){ 
                                    ?>
                            </div>
                            <?php } ?>

                            <?php
                                        }
                                    }
                                 ?>

                        </div>
                        <?php the_posts_pagination( array( 
                            'prev_next' => false,
                         ) ); ?>

                        
                    </div>
                </div>
                <!--end content-->
            </main>


        </div>
        <!--end container-->

    </div><!-- close default .container_wrap element -->



    <?php get_template_part('templates-part/content', 'listProDuctByYear'); ?>
    <!-- end main -->
</div>

<?php get_template_part('templates-part/content', 'fixed'); ?>

<?php
get_footer();