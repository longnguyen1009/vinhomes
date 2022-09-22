<?php

$id = get_the_ID();
$du_an_intro = get_field('du_an_intro', $id);
$du_an_banner = get_field('du_an_banner', $id);

?>

<div id="av_section_1"
    class="avia-section main_color avia-section-default avia-no-border-styling  avia-full-stretch avia-bg-style-scroll  avia-builder-el-0  el_before_av_one_half  avia-builder-el-first   av-minimum-height av-minimum-height-custom  container_wrap fullsize"
    style="background-repeat: no-repeat; background-image: url(<?php echo $du_an_banner['url']; ?>);background-attachment: scroll; background-position: bottom left;  "
    data-section-bg-repeat="stretch">
    <div class="container" style="height:500px">
        <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
            <div class="post-entry post-entry-type-page post-entry-38255">
                <div class="entry-content-wrapper clearfix">
                    <div class="flex_column av_one_half  flex_column_div first  avia-builder-el-1  avia-builder-el-no-sibling  "
                        style="background: #ffffff; padding:30px; background-color:#ffffff; border-radius:0px; ">
                        <div style="padding-bottom:10px; "
                            class="av-special-heading av-special-heading-h1  blockquote modern-quote modern-centered  avia-builder-el-2  el_before_av_textblock  avia-builder-el-first  ">
                            <h1 class="av-special-heading-tag " itemprop="headline"><?php the_title(); ?></h1>
                            <div class="special-heading-border">
                                <div class="special-heading-inner-border"></div>
                            </div>
                        </div>
                        <section class="av_textblock_section " itemscope="itemscope"
                            itemtype="https://schema.org/CreativeWork">
                            <div class="avia_textblock  " itemprop="text">
                                <p><?php echo $du_an_intro; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main><!-- close content main element -->
    </div>
</div>