<?php
/**
* The header for FlashWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('flashwp-animated flashwp-fadein'); ?> id="flashwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#flashwp-posts-wrapper"><?php esc_html_e( 'Skip to content', 'flashwp' ); ?></a>

<?php if ( !(flashwp_get_option('disable_secondary_menu')) ) { ?>
<div class="flashwp-container flashwp-secondary-menu-container clearfix">
<div class="flashwp-secondary-menu-container-inside clearfix">
<nav class="flashwp-nav-secondary" id="flashwp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'flashwp' ); ?>">
<div class="flashwp-outer-wrapper">
<button class="flashwp-secondary-responsive-menu-icon" aria-controls="flashwp-menu-secondary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'flashwp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'flashwp-menu-secondary-navigation', 'menu_class' => 'flashwp-secondary-nav-menu flashwp-menu-secondary', 'fallback_cb' => 'flashwp_top_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(flashwp_get_option('hide_header_social_buttons')) ) { flashwp_header_social_buttons(); } ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<div class="flashwp-container" id="flashwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="flashwp-head-content clearfix" id="flashwp-head-content">
<div class="flashwp-outer-wrapper">

<?php flashwp_before_header(); ?>

<?php if ( get_header_image() ) : ?>
<div class="flashwp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flashwp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="flashwp-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(flashwp_get_option('hide_header_content')) ) { ?>
<div class="flashwp-header-inside clearfix">
<div id="flashwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flashwp-logo-img-link">
        <img src="<?php echo esc_url( flashwp_custom_logo() ); ?>" alt="" class="flashwp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php flashwp_site_title(); ?>
    </div>
<?php endif; ?>
</div><!--/#flashwp-logo -->

<div id="flashwp-header-banner">
<?php dynamic_sidebar( 'flashwp-header-banner' ); ?>
</div><!--/#flashwp-header-banner -->
</div>
<?php } ?>

<?php flashwp_after_header(); ?>

</div>
</div><!--/#flashwp-head-content -->
</div><!--/#flashwp-header -->

<?php if ( !(flashwp_get_option('disable_primary_menu')) ) { ?>
<div class="flashwp-container flashwp-primary-menu-container clearfix">
<div class="flashwp-primary-menu-container-inside clearfix">
<nav class="flashwp-nav-primary" id="flashwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'flashwp' ); ?>">
<div class="flashwp-outer-wrapper">
<button class="flashwp-primary-responsive-menu-icon" aria-controls="flashwp-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'flashwp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'flashwp-menu-primary-navigation', 'menu_class' => 'flashwp-primary-nav-menu flashwp-menu-primary', 'fallback_cb' => 'flashwp_fallback_menu', 'container' => '', ) ); ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<?php flashwp_after_primary_menu(); ?>

<div id="flashwp-search-overlay-wrap" class="flashwp-search-overlay">
  <button class="flashwp-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'flashwp' ); ?>" title="<?php esc_attr_e('Close Search','flashwp'); ?>">&#xD7;</button>
  <div class="flashwp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>

<div class="flashwp-outer-wrapper">
<?php flashwp_top_wide_widgets(); ?>
</div>

<div class="flashwp-outer-wrapper">

<div class="flashwp-container clearfix" id="flashwp-wrapper">
<div class="flashwp-content-wrapper clearfix" id="flashwp-content-wrapper">