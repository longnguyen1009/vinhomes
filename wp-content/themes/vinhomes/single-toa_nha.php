<?php
$id = get_the_ID();
$du_an_banner = get_field('du_an_banner', $id);

get_header();

?>
<?php if(empty($du_an_banner)){ ?>

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


    <!-- end main -->
</div>
<?php } else { ?>
    <div id="main" class="all_colors" data-scroll-offset="88">

    <?php get_template_part('templates-du_an/du_an', 'breadcrumb'); ?>

    <?php get_template_part('templates-du_an/du_an', 'banner-odd'); ?>

    <div id="after_submenu_1" class="main_color av_default_container_wrap container_wrap sidebar_right" style=" ">
        <div class="container">
           <?php 
                echo get_the_content();
                get_template_part('templates-part/sidebar', 'main'); 
           ?>
        </div>
        <!--end builder template-->
    </div><!-- close default .container_wrap element -->
</div>
<?php } ?>
<?php

    get_template_part('templates-part/content', 'listProDuctByYear'); 
  
    get_template_part('templates-part/content', 'fixed'); 
?>
<?php
get_footer();