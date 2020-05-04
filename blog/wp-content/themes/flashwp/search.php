<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="flashwp-main-wrapper clearfix" id="flashwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="flashwp-main-wrapper-inside clearfix">

<?php flashwp_before_main_content(); ?>

<?php flashwp_slider_area(); ?>

<?php flashwp_top_widgets(); ?>

<div class="flashwp-posts-wrapper" id="flashwp-posts-wrapper">

<div class="flashwp-posts flashwp-box">
<div class="flashwp-box-inside">

<header class="page-header">
<div class="page-header-inside">
<h1 class="page-title"><?php /* translators: %s: search query. */ printf( esc_html__( 'Search Results for: %s', 'flashwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>
</header>

<div class="flashwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="flashwp-posts-container">
    <?php $flashwp_total_posts = $wp_query->post_count; ?>
    <?php $flashwp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', flashwp_post_style() ); ?>

    <?php $flashwp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php flashwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div>
</div>

</div><!--/#flashwp-posts-wrapper -->

<?php flashwp_bottom_widgets(); ?>

<?php flashwp_after_main_content(); ?>

</div>
</div>
</div><!-- /#flashwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>