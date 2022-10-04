<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VinHomes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
    class="html_stretched responsive av-preloader-disabled av-custom-lightbox html_header_top html_logo_left html_main_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking_disabled html_mobile_menu_tablet html_header_searchicon html_content_align_center html_header_unstick_top_disabled html_header_stretch_disabled html_av-submenu-hidden html_av-submenu-display-click html_av-overlay-side html_av-overlay-side-classic html_av-submenu-noclone html_entry_id_38897 av-cookies-no-cookie-consent av-no-preview html_text_menu_active avia_desktop js_active avia_transform avia_transform3d avia_transform avia_transform3d avia-webkit avia-webkit-105 avia-chrome avia-chrome-105">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id = "top">
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="header"
            class="all_colors header_color light_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking_disabled av_header_stretch_disabled av_mobile_menu_tablet av_header_searchicon av_header_unstick_top_disabled av_bottom_nav_disabled  av_header_border_disabled"
            role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

            <div id="header_main" class="container_wrap container_wrap_logo">

                <div class="container av-logo-container">
                    <div class="inner-container"><span class="logo"><a href="#"><img height="100" width="300"
                                    src="https://vinhomesland.vn/wp-content/uploads/2020/04/vinhomes-land-logo.png"
                                    alt="Vinhomes Land" title=""></a></span>
                        <nav class="main_menu" data-selectname="Select a page" role="navigation" itemscope="itemscope"
                            itemtype="https://schema.org/SiteNavigationElement">
                            <div class="avia-menu av-main-nav-wrap">
                                <ul id="avia-menu" class="menu av-main-nav">
                                    <li id="menu-item-29969"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-top-level menu-item-top-level-1 current-menu-item">
                                        <a href="http://localhost/vungnguyen/ " itemprop="url"><span
                                                class="avia-bullet"></span><span class="avia-menu-text">TRANG
                                                CHỦ</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                        class="avia-arrow"></span></span></span></a>
                                    </li>
                                    <li id="menu-item-32807"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-2">
                                        <a href="http://localhost/vungnguyen/gioi-thieu/" itemprop="url"><span
                                                class="avia-bullet"></span><span class="avia-menu-text">GIỚI
                                                THIỆU</span><span class="avia-menu-fx"><span
                                                    class="avia-arrow-wrap"><span
                                                        class="avia-arrow"></span></span></span></a>
                                    </li>
                                    <li id="menu-item-29970"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-mega-parent menu-item-top-level menu-item-top-level-3 dropdown_ul_available"
                                        style="overflow: hidden;"><a
                                            href="<?php echo get_post_type_archive_link('du_an'); ?>"
                                            itemprop="url"><span class="avia-bullet"></span><span
                                                class="avia-menu-text">DỰ ÁN</span><span class="avia-menu-fx"><span
                                                    class="avia-arrow-wrap"><span
                                                        class="avia-arrow"></span></span></span><span
                                                class="dropdown_available"></span></a>
                                        <div class="avia_mega_div avia_mega3 nine units"
                                            style="opacity: 0; display: none;">

                                            <ul class="sub-menu">


                                                <?php 
                                                   $terms = get_terms([
                                                       'taxonomy' => 'khu_vuc'
                                                   ]); 
                                                    foreach($terms as $key => $termObject){
                                                        ?>
                                                <li id="menu-item-20971"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children avia_mega_menu_columns_3 three units  avia_mega_menu_columns_first">
                                                    <span
                                                        class="mega_menu_title heading-color av-special-font"><?php echo $termObject->name ?></span>
                                                    <ul class="sub-menu">
                                                        <?php
                                                                        $args = array(
                                                                        'tax_query' => array(
                                                                            array(
                                                                                'taxonomy' => 'khu_vuc',
                                                                                'field' => 'name',
                                                                                'terms' => $termObject->name
                                                                                )
                                                                            )
                                                                        );

                                                                        $query = new WP_Query($args);

                                                                        if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                                                        <li id="menu-item-30134"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="<?php echo get_permalink();?>">
                                                                <span class="avia-bullet"></span>
                                                                <span
                                                                    class="avia-menu-text"><?php the_title(); ?></span>
                                                            </a>
                                                        </li>
                                                        <?php endwhile; ?>

                                                        <?php else: ?>
                                                        <!-- no posts found -->
                                                        <?php endif; 
                                                        wp_reset_query();
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?php 
                                                        }
                                                    ?>
                                            </ul>

                                        </div>
                                    </li>
                                    <li id="menu-item-29972"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-top-level menu-item-top-level-4">
                                        <a href="<?php echo get_post_type_archive_link('tin_tuc'); ?>"
                                            itemprop="url"><span class="avia-bullet"></span><span
                                                class="avia-menu-text">TIN
                                                TỨC</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                        class="avia-arrow"></span></span></span></a>
                                    </li>
                                    <li id="menu-item-29971"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-5">
                                        <a href="http://localhost/vungnguyen/lien-he/" itemprop="url"><span
                                                class="avia-bullet"></span><span class="avia-menu-text">LIÊN
                                                HỆ</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                        class="avia-arrow"></span></span></span></a>
                                    </li>
                                    <li id="menu-item-search"
                                        class="noMobile menu-item menu-item-search-dropdown menu-item-avia-special"><a
                                            aria-label="Search" href="?s=" rel="nofollow" data-avia-search-tooltip="
<form role=&quot;search&quot; action=&quot;<?php echo get_search_link(); ?>&quot; id=&quot;searchform&quot; method=&quot;get&quot; class=&quot;&quot;>
<div>
<input type=&quot;submit&quot; value=&quot;&quot; id=&quot;searchsubmit&quot; class=&quot;button avia-font-entypo-fontello&quot; />
<input type=&quot;text&quot; id=&quot;s&quot; name=&quot;s&quot; value=&quot;&quot; placeholder='Search' />
	</div>
</form>" aria-hidden="false" data-av_icon="" data-av_iconfont="entypo-fontello"><span
                                                class="avia_hidden_link_text">Search</span></a></li>
                                    <li class="av-burger-menu-main menu-item-avia-special ">
                                        <a href="#" aria-label="Menu" aria-hidden="false">
                                            <span class="av-hamburger av-hamburger--spin av-js-hamburger">
                                                <span class="av-hamburger-box">
                                                    <span class="av-hamburger-inner"></span>
                                                    <strong>Menu</strong>
                                                </span>
                                            </span>
                                            <span class="avia_hidden_link_text">Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end container_wrap-->
            </div>
            <div class="header_bg"></div>

            <!-- end header -->
        </header>