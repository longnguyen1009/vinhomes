<?php
/**
 * Template part for displaying a list product bt address
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VinHomes
 */

?>

<div id="av_section_1"
    class="avia-section main_color avia-section-default avia-no-shadow  avia-bg-style-scroll  avia-builder-el-8  el_after_av_tab_section  avia-builder-el-last   container_wrap fullsize"
    style="background-color: #f8f8f8;  ">
    <div class="container">
        <div class="template-page content  av-content-full alpha units">
            <div class="post-entry post-entry-type-page post-entry-2343">
                <div class="entry-content-wrapper clearfix">
                    <div style="padding-bottom:10px; "
                        class="av-special-heading av-special-heading-h2  blockquote modern-quote modern-centered  avia-builder-el-9  el_before_av_postslider  avia-builder-el-first  ">
                        <h2 class="av-special-heading-tag " itemprop="headline">Tin tức mới nhất</h2>
                        <div class="special-heading-border">
                            <div class="special-heading-inner-border"></div>
                        </div>
                    </div>
                    <div data-autoplay="" data-interval="5" data-animation="fade" data-show_slide_delay="90"
                        class="avia-content-slider avia-content-slider-active avia-content-slider1 avia-content-slider-odd avia-builder-el-10 el_after_av_heading avia-builder-el-last"
                        itemscope="itemscope" itemtype="https://schema.org/Blog">
                        <div class="avia-content-slider-inner" style="padding: 0px; height: 373px;">
                            <div class="slide-entry-wrap active-slide"
                                style="visibility: visible; opacity: 1; transition: none 0s ease 0s; transform: translateZ(0px);">
                                <?php
                                    $args = array(
                                        'post_status' => 'public',
                                        'post_type' => 'tin_tuc',
                                        'posts_per_page' => 2,
                                        'orderby' => 'ID',
                                        'order' => 'DESC',
                                    );
                                    $query = new WP_Query($args);
                                    if($query ->have_posts() ){
                                        while($query -> have_posts() ){
                                            $query -> the_post();
                                     ?>
                                <article
                                    class="slide-entry flex_column  post-entry post-entry-38245 slide-entry-overview  av_one_third real-thumbnail post-format-standard"
                                    itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><a
                                        href="<?php the_permalink(); ?>" data-rel="slide-1" class="slide-image"
                                        title="<?php the_title(); ?>"><img width="495" height="400" setsrc="<?php the_post_thumbnail(); ?></a>
                                    <div class="slide-content">
                                        <header class="entry-content-header">
                                            <h3 class="slide-entry-title entry-title " itemprop="headline"><a
                                                    href="<?php the_permalink(); ?>"
                                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h3><span
                                                class="av-vertical-delimiter"></span>
                                        </header>
                                    </div>
                                </article>
                                <?php
                                    }
                                    next_posts_link();
                                    echo get_next_posts_link();
                                }
                                ?>
                            </div>
                            

                        </div>
                        <div class="avia-slideshow-arrows avia-slideshow-controls">

                            <a href="" class="prev-slide" aria-hidden="true"
                                data-av_icon="" data-av_iconfont="entypo-fontello">Previous</a>
                            <a href="" class="next-slide" aria-hidden="true" data-av_icon=""
                                data-av_iconfont="entypo-fontello">Next</a>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div><!-- close content main div -->
        <!-- section close by builder template -->
    </div>
    <!--end builder template-->
</div>