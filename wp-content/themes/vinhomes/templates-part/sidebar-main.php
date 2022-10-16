<?php
$id = get_the_ID();
$show_sidebar = get_field('show_sidebar', $id);
$show_toa_nha = get_field('show_toa_nha', $id);
$show_ads = get_field('show_ads', $id);
$show_listnews = get_field('show_listnews', $id);
$show_contact = get_field('show_contact', $id);


if($show_sidebar){
    ?>
<aside class="sidebar sidebar_right  smartphones_sidebar_active alpha units" role="complementary" itemscope="itemscope"
    itemtype="https://schema.org/WPSideBar">
    <div class="inner_sidebar extralight-border">

        <?php 
        if($show_toa_nha){
            get_template_part('templates-part/sidebar', 'toa_nha');
        }
        if($show_ads){
            get_template_part('templates-part/sidebar', 'media');
        } 
        if($show_listnews){
            get_template_part('templates-part/sidebar', 'laterNews');
        }
        if($show_contact){
            get_template_part('templates-part/sidebar', 'account');
        } 
        ?>
    </div>
</aside>

<?php
}
?>