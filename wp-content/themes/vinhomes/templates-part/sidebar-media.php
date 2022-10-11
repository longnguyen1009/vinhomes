<?php
$id = get_the_ID();
$sidebar_image = get_field('sidebar_image', $id);
?>

<section id="media_image-3" class="widget clearfix widget_media_image"><a
                href=""><img width="300" height="600"
                    src="<?php if(empty($sidebar_image)){
                        echo wp_get_attachment_url(320);
                    }else {
                        echo $sidebar_image['url'];
                    } ?>"
                    class="image wp-image-35842  attachment-full size-full" alt=""
                    loading="lazy" style="max-width: 100%; height: auto;"></a><span
                class="seperator extralight-border"></span>
</section>
        