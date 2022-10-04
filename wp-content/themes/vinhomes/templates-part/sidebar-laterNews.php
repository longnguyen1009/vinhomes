<?php
/**
 * Template part for displaying a later news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VinHomes
 */

?>

<section id="newsbox-2" class="widget clearfix newsbox">
    <h3 class="widgettitle">Tin tức mới nhất</h3>
    <ul class="news-wrap image_size_widget">

        <?php
            $args = array(
                'post_type' => 'tin_tuc',
                'posts_per_page' => 10,
                'orderby' => 'ID',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            if( $query ->have_posts()){
                while($query ->have_posts()){
                    $query -> the_post();
                    ?>
        <li class="news-content post-format-standard"><a class="news-link" title="<?php the_title(); ?>"
                href="<?php the_permalink(); ?>"><span class="news-thumb "><img width="80" height="80" 
                src="<?php
                    $id = get_the_ID();
                    echo get_field('tin_tuc_thumbnail', $id)['url']; ?>"
                        class="wp-image-37749 attachment-widget size-widget wp-post-image" loading="lazy"
                        sizes="(max-width: 80px) 100vw, 80px"></span><strong class="news-headline"><?php the_title(); ?>
                    <span
                        class="news-time"><?php echo get_post_datetime($field = 'date',$source = 'gmt'); ?></span></strong></a>
        </li>
        <?php
                }
            }

        ?>


    </ul><span class="seperator extralight-border"></span>
</section>