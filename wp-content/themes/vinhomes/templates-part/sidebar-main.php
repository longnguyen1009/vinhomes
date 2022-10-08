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
        <?php if($show_toa_nha){ ?>

        <div id="nav_menu-94" class="widget clearfix widget_nav_menu">
            <h3 class="widgettitle"><?php the_title(); ?></h3>
            <div class="menu-vinhomes-symphony-container">
                <ul id="menu-vinhomes-symphony" class="menu">
                    <li id="menu-item-31293"
                        class="menu-item menu-item-type-post_type menu-item-object-post current-menu-item menu-item-31293">
                        <a href="http://localhost/vungnguyen/vinhomes-symphony/" aria-current="page">Tổng
                            quan
                            dự án</a>
                    </li>

                    <li id="menu-item-31394"
                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-31394"><a
                            href="http://localhost/vungnguyen/toa-s1-vinhomes-symphony/">Tòa S1</a></li>

                </ul>
            </div>
        </div>

        <?php } ?>

        <?php 
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