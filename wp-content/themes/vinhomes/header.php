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
<html <?php language_attributes(); ?> class = "responsive">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body id = "top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="header"
            class="all_colors header_color light_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking_disabled av_header_stretch_disabled av_mobile_menu_tablet av_header_searchicon av_header_unstick_top_disabled av_bottom_nav_disabled  av_header_border_disabled"
            role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

            <div id="header_main" class="container_wrap container_wrap_logo">

                <div class="container av-logo-container">
                    <div class="inner-container"><span class="logo"><a href="#"><img height="100" width="300"
                                    src="http://localhost/vungnguyen/wp-content/uploads/2020/04/vinhomes-land-logo.png"
                                    alt="Vinhomes Land" title=""></a></span>
                        <nav class="main_menu" data-selectname="Select a page" role="navigation" itemscope="itemscope"
                            itemtype="https://schema.org/SiteNavigationElement">
                            <div class="avia-menu av-main-nav-wrap">
                                <ul id="avia-menu" class="menu av-main-nav">
                                    <li id="menu-item-29969"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-top-level menu-item-top-level-1 current-menu-item">
                                        <a href="http://localhost/vungnguyen/#top" itemprop="url"><span
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
                                                <li id="menu-item-20971"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children avia_mega_menu_columns_3 three units  avia_mega_menu_columns_first">
                                                    <span class="mega_menu_title heading-color av-special-font">VINHOMES
                                                        HÀ NỘI</span>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-30134"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-symphony/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Symphony</span></a>
                                                        </li>
                                                        <li id="menu-item-38291"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="http://localhost/vungnguyen/vinhomes-green-villas/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Green
                                                                    Villas</span></a>
                                                        </li>
                                                        <li id="menu-item-29943"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-smart-city/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Smart
                                                                    City</span></a>
                                                        </li>
                                                        <li id="menu-item-37848"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="http://localhost/vungnguyen/vinhomes-ocean-park/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Ocean
                                                                    Park</span></a>
                                                        </li>
                                                        <li id="menu-item-30451"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-west-point/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes West
                                                                    Point</span></a>
                                                        </li>
                                                        <li id="menu-item-31634"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-green-bay/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Green Bay</span></a>
                                                        </li>
                                                        <li id="menu-item-31510"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-skylake/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Skylake</span></a>
                                                        </li>
                                                        <li id="menu-item-31562"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-metropolis/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes
                                                                    Metropolis</span></a>
                                                        </li>
                                                        <li id="menu-item-31776"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-thang-long/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Thăng
                                                                    Long</span></a>
                                                        </li>
                                                        <li id="menu-item-31705"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-gardenia/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Gardenia</span></a>
                                                        </li>
                                                        <li id="menu-item-30214"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-nguyen-chi-thanh/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Nguyễn Chí
                                                                    Thanh</span></a>
                                                        </li>
                                                        <li id="menu-item-30786"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-times-city/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Times
                                                                    City</span></a>
                                                        </li>
                                                        <li id="menu-item-31444"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-royal-city/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Royal
                                                                    City</span></a>
                                                        </li>
                                                        <li id="menu-item-30870"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-riverside/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Riverside</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-20972"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children avia_mega_menu_columns_3 three units ">
                                                    <span class="mega_menu_title heading-color av-special-font">VINHOMES
                                                        TP.HCM</span>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-31921"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-grand-park/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Grand
                                                                    Park</span></a>
                                                        </li>
                                                        <li id="menu-item-35544"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-golden-river/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Golden
                                                                    River</span></a>
                                                        </li>
                                                        <li id="menu-item-32487"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-central-park/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Central
                                                                    Park</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-20973"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children avia_mega_menu_columns_3 three units avia_mega_menu_columns_last">
                                                    <span class="mega_menu_title heading-color av-special-font">VINHOMES
                                                        TỈNH THÀNH</span>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-36952"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="http://localhost/vungnguyen/vinhomes-ocean-park-2-the-empire/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Ocean Park 2 The
                                                                    Empire</span></a>
                                                        </li>
                                                        <li id="menu-item-35687"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-marina/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Marina</span></a>
                                                        </li>
                                                        <li id="menu-item-37984"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="http://localhost/vungnguyen/vinhomes-new-center/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes New
                                                                    Center</span></a>
                                                        </li>
                                                        <li id="menu-item-31993"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-star-city/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Star City</span></a>
                                                        </li>
                                                        <li id="menu-item-35617"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-imperia/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Imperia</span></a>
                                                        </li>
                                                        <li id="menu-item-31967"
                                                            class="menu-item menu-item-type-post_type menu-item-object-post">
                                                            <a href="http://localhost/vungnguyen/vinhomes-dragon-bay/"
                                                                itemprop="url"><span class="avia-bullet"></span><span
                                                                    class="avia-menu-text">Vinhomes Dragon
                                                                    Bay</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </li>
                                    <li id="menu-item-29972"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-top-level menu-item-top-level-4">
                                        <a href="<?php echo get_post_type_archive_link('tin_tuc'); ?>" itemprop="url"><span
                                                class="avia-bullet"></span><span class="avia-menu-text">TIN
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

<form role=&quot;search&quot; action=&quot;http://localhost/vungnguyen/&quot; id=&quot;searchform&quot; method=&quot;get&quot; class=&quot;&quot;>
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