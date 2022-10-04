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
            <h1 class="main-title entry-title "><a href="https://vinhomesland.vn/du-an/" rel="bookmark"
                    title="Permanent Link: Các dự án Vinhomes của Vingroup" itemprop="headline">Các dự án Vinhomes của
                    Vingroup</a></h1>
        </div>
    </div>
    <div class="main_color container_wrap_first container_wrap fullsize" style=" ">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-21210">
                    <div class="entry-content-wrapper clearfix">
                        <section class="av_textblock_section " itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class="avia_textblock  " itemprop="text">
                                <p><strong>Vinhomes là thương hiệu bất động sản cao cấp của tập đoàn Vingroup, đồng thời
                                        cũng là thương hiệu doanh nghiệp có giá trị đứng thứ 3 tại Việt Nam (Sau Viettel
                                        &amp; Vinamilk). Tính đến thời điểm năm 2022, tập đoàn Vingroup đang triển khai
                                        tất cả 22 dự án bất động sản mang thương hiệu “Vinhomes” trên khắp toàn
                                        quốc.</strong></p>
                            </div>
                        </section>
                        <div style="padding-bottom:10px; "
                            class="av-special-heading av-special-heading-h2  blockquote modern-quote  avia-builder-el-1  el_after_av_textblock  el_before_av_textblock  ">
                            <h2 class="av-special-heading-tag " itemprop="headline">Dự án Vinhomes tại Hà Nội</h2>
                            <div class="special-heading-border">
                                <div class="special-heading-inner-border"></div>
                            </div>
                        </div>

                        <section class="av_textblock_section " itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class="avia_textblock  " itemprop="text">
                                <p>Được xem là đầu tàu của nền kinh tế Việt Nam, thị trường bất động sản tại thủ đô Hà
                                    Nội những năm qua luôn không ngừng phát triển và mở rộng, thu hút sự quan tâm của
                                    nhiều người dân cũng như các nhà đầu tư bất động sản trên khắp toàn quốc. Tính đến
                                    đầu năm 2022, tại thành phố Hà Nội đã có tất cả 14 dự án Vinhomes (Bao gồm cả đã
                                    hoàn thiện và đang trong quá trình xây dựng).</p>
                            </div>
                        </section>

                        <?php 
                            $args = array(
                                'post_type' => 'du_an',
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    
                                    array(
                                        'taxonomy' => 'khu_vuc',
                                        'field' => 'slug',
                                        'terms' => 'vinhomes-hanoi',
                                    ),
                                   
                                ),
                            );

                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                        <div class="flex_column av_one_third  flex_column_div avia-builder-el-41  el_after_av_textblock  el_before_av_one_third  column-top-margin"
                            style="border-width:1px; border-color:#eeeeee; border-style:solid; padding:20px; background-color:#f8f8f8; border-radius:0px; ">
                            <section class="av_textblock_section " itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock  " itemprop="text">
                                    <h3 style="text-align: center;"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><a href="<?php the_permalink(); ?>"
                                            style="position: relative; overflow: hidden;"><img loading="lazy"
                                                class="wp-image-38781 size-full" src="<?php
                                                $id = get_the_ID();
                                                echo get_field('du_an_thumbnail', $id)['url']; ?>" width="800"
                                                height="450" sizes="(max-width: 800px) 100vw, 800px"><span
                                                class="image-overlay overlay-type-extern"><span
                                                    class="image-overlay-inside"></span></span></a></p>
                                    <?php the_excerpt(); ?>
                                </div>
                            </section>
                        </div>

                        <?php endwhile; ?>

                        <?php else: ?>
                        <!-- Not posts found -->
                        <?php endif; 
                        wp_reset_query();
                        ?>


                        <div style="padding-bottom:10px; "
                            class="av-special-heading av-special-heading-h2  blockquote modern-quote  avia-builder-el-31  el_after_av_one_third  el_before_av_textblock  ">
                            <h2 class="av-special-heading-tag " itemprop="headline">Dự án Vinhomes tại TP.HCM</h2>
                            <div class="special-heading-border">
                                <div class="special-heading-inner-border"></div>
                            </div>
                        </div>
                        <section class="av_textblock_section " itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class="avia_textblock  " itemprop="text">
                                <p>Song song với các dự án được triển khai tại Hà Nội, tập đoàn Vingroup cũng triển khai
                                    3 dự án mang thương hiệu Vinhomes tại thành phố Hồ Chí Minh là Vinhomes Central Park
                                    Tân Cảng, Vinhomes Golden River Ba Son và Vinhomes Grand Park Quận 9. Trong đó, cả 3
                                    dự án đều được phát triển theo mô hình chung cư cao tầng kết hợp biệt thự liền kề
                                    thấp tầng.</p>
                            </div>
                        </section>

                        <?php 
                            $args = array(
                                'post_type' => 'du_an',
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'khu_vuc',
                                        'field' => 'slug',
                                        'terms' => 'vinhomes-hcm',
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                        <div class="flex_column av_one_third  flex_column_div avia-builder-el-41  el_after_av_textblock  el_before_av_one_third  column-top-margin"
                            style="border-width:1px; border-color:#eeeeee; border-style:solid; padding:20px; background-color:#f8f8f8; border-radius:0px; ">
                            <section class="av_textblock_section " itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock  " itemprop="text">
                                    <h3 style="text-align: center;"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><a href="<?php the_permalink(); ?>"
                                            style="position: relative; overflow: hidden;"><img loading="lazy"
                                                class="wp-image-38781 size-full" src="<?php
                                                $id = get_the_ID();
                                                echo get_field('du_an_thumbnail', $id)['url']; ?>" width="800"
                                                height="450" sizes="(max-width: 800px) 100vw, 800px"><span
                                                class="image-overlay overlay-type-extern"><span
                                                    class="image-overlay-inside"></span></span></a></p>
                                    <?php the_excerpt(); ?>
                                </div>
                            </section>
                        </div>

                        <?php endwhile; ?>

                        <?php else: ?>
                        <!-- Not posts found -->
                        <?php endif; 
                        wp_reset_query();
                        ?>


                    </div>
                    <div style="padding-bottom:10px; "
                        class="av-special-heading av-special-heading-h2  blockquote modern-quote  avia-builder-el-39  el_after_av_one_third  el_before_av_textblock  ">
                        <h2 class="av-special-heading-tag " itemprop="headline">Dự án Vinhomes tại tỉnh thành</h2>
                        <div class="special-heading-border">
                            <div class="special-heading-inner-border"></div>
                        </div>
                    </div>
                    <section class="av_textblock_section " itemscope="itemscope"
                        itemtype="https://schema.org/CreativeWork">
                        <div class="avia_textblock  " itemprop="text">
                            <p>Ngoài 2 thành phố lớn Hà Nội &amp; TP.HCM, tập đoàn Vingroup cũng mở rộng và phát
                                triển hàng loạt các dự án mang thương hiệu Vinhomes tại các tỉnh thành khác trên
                                khắp toàn quốc, nổi bật như Hải Phòng, Thanh Hóa, Hạ Long, Hà Tĩnh… Các dự án đa
                                phần được phát triển theo mô hình biệt thự, liền kề &amp; Shophouse với phong cách
                                kiến trúc Tây Âu hiện đại, mang đến những trải nghiệm sống mới lạ với người dân khu
                                vực.</p>
                        </div>
                    </section>

                    <?php 
                            $args = array(
                                'post_type' => 'du_an',
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'khu_vuc',
                                        'field' => 'slug',
                                        'terms' => 'vinhomes-province',
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                        <div class="flex_column av_one_third  flex_column_div avia-builder-el-41  el_after_av_textblock  el_before_av_one_third  column-top-margin"
                            style="border-width:1px; border-color:#eeeeee; border-style:solid; padding:20px; background-color:#f8f8f8; border-radius:0px; ">
                            <section class="av_textblock_section " itemscope="itemscope"
                                itemtype="https://schema.org/CreativeWork">
                                <div class="avia_textblock  " itemprop="text">
                                    <h3 style="text-align: center;"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><a href="<?php the_permalink(); ?>"
                                            style="position: relative; overflow: hidden;"><img loading="lazy"
                                                class="wp-image-38781 size-full" src="<?php
                                                $id = get_the_ID();
                                                echo get_field('du_an_thumbnail', $id)['url']; ?>" width="800"
                                                height="450" sizes="(max-width: 800px) 100vw, 800px"><span
                                                class="image-overlay overlay-type-extern"><span
                                                    class="image-overlay-inside"></span></span></a></p>
                                    <?php the_excerpt(); ?>
                                </div>
                            </section>
                        </div>

                        <?php endwhile; ?>

                        <?php else: ?>
                        <!-- Not posts found -->
                        <?php endif; 
                        wp_reset_query();
                        ?>



                    <div class="flex_column av_one_full  flex_column_div av-zero-column-padding first  avia-builder-el-55  el_after_av_one_third  avia-builder-el-last  column-top-margin"
                        style="border-radius:0px; ">
                        <section class="av_textblock_section " itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class="avia_textblock  " itemprop="text">
                                <p>Trên đây là thông tin về toàn bộ các dự án mang thương hiệu Vinhomes, đã và đang
                                    được Vingroup triển khai xây dựng tính đến đầu năm 2022. Dự kiến trong giai đoạn
                                    giữa năm 2022 – 2023, Vingroup sẽ triển khai thêm dự án mới tại các khu vực
                                    Giảng Võ, Nguyễn Trãi, Cổ Loa, Đan Phượng (Hà Nội). Mọi thông tin chi tiết sẽ
                                    được chúng tôi cập nhật trong thời gian sớm nhất.</p>
                            </div>
                        </section>
                    </div>
                </div>
        </div>
        </main><!-- close content main element -->
        <!-- section close by builder template -->
    </div>
    <!--end builder template-->
</div><!-- close default .container_wrap element -->



<?php get_template_part('templates-part/content', 'listProDuctByYear'); ?>
<!-- end main -->
</div>
  
<?php get_template_part('templates-part/content', 'fixed'); ?>


<?php
get_footer();