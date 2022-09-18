<?php
/**
 * Template part for displaying a sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VinHomes
 */

?>

<aside class="sidebar sidebar_right  smartphones_sidebar_active alpha units" role="complementary" itemscope="itemscope"
    itemtype="https://schema.org/WPSideBar">
    <div class="inner_sidebar extralight-border">
        <?php get_template_part('template-parts/content', 'mediaSideBar'); ?>

        <?php get_template_part('template-parts/content', 'mediaSideBar'); ?>

        <?php get_template_part('template-parts/content', 'laterNews'); ?>

        <section
            style="position: relative; margin-bottom: 0px; transition: all 0s ease 0s; transform: none; margin-top: 0px; padding: 30px 0px; height: 0px; width: 296px; top: 0px; display: none;">
        </section>
        <section id="text-4" class="widget clearfix widget_text FixedWidget__fixed_widget">
            <div class="textwidget">
                <div style="padding: 20px; margin-bottom: 20px; background-color: #345574;">
                    <p style="text-align: center;"><span
                            style="font-size: 20px; text-transform: uppercase; color: #fff;">Đăng ký tư
                            vấn</span></p>
                    <?php get_template_part('template-parts/content', 'contact'); ?>

                    <div id="ajaxresponse_2" class="ajaxresponse ajaxresponse_2 hidden"></div>
                </div>
            </div>
            <span class="seperator extralight-border"></span>
        </section>
    </div>
</aside>