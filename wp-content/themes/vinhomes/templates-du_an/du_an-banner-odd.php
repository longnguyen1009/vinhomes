<?php
$id = get_the_ID();
$du_an_banner = get_field('du_an_banner', $id);

?>

<div id="av-layout-grid-1"
    class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells     avia-builder-el-0  el_before_av_textblock  avia-builder-el-first  container_wrap sidebar_right"
    style=" ">
    <div class="flex_cell no_margin av_one_full  avia-builder-el-1  avia-builder-el-no-sibling   av-zero-padding "
        style="vertical-align:top; padding:0px; ">
        <div class="flex_cell_inner">
            <div class="avia-image-container  av-styling-    avia-builder-el-2  avia-builder-el-no-sibling  avia-align-center "
                itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                <div class="avia-image-container-inner">
                    <div class="avia-image-overlay-wrap"><img loading="lazy" class="wp-image-29323 avia_image"
                            src="<?php echo $du_an_banner['url']; ?>"
                            alt="vinhomes-symphony-background" title="Vinhomes Symphony Background" height="600"
                            width="1500" itemprop="thumbnailUrl"
                            srcset="<?php echo $du_an_banner['url']; ?> 1500w, <?php echo $du_an_banner['url']; ?> 768w, <?php echo $du_an_banner['url']; ?> 1030w, <?php echo $du_an_banner['url']; ?> 705w"
                            sizes="(max-width: 1500px) 100vw, 1500px"></div>
                </div>
            </div>
        </div>
    </div>
</div>