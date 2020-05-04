<?php
/**
* Slider
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'flashwp_slider' ) ) :

function flashwp_slider() { ?>

<?php flashwp_before_slider(); ?>

<div class="flashwp-posts-carousel-wrapper">

    <?php
    $slider_length = 5;
    if ( flashwp_get_option('slider_length') ) {
        $slider_length = flashwp_get_option('slider_length');
    }

    $slider_post_type = 'recent-posts';
    if ( flashwp_get_option('slider_post_type') ) {
        $slider_post_type = flashwp_get_option('slider_post_type');
    }

    $slider_cat = flashwp_get_option('slider_cat');

    if(($slider_post_type === 'category-posts') && $slider_cat) {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post&cat=$slider_cat");
    } else {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post");
    }

    if ($slider_query->have_posts()) : ?>

    <div class="flashwp-posts-carousel">
    <div class="flashwp-box">
    <div class="flashwp-box-inside">
    <div class="owl-carousel">
    <?php while ($slider_query->have_posts()) : $slider_query->the_post();  ?>
    <div class="flashwp-slide-item">
        <?php if(has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('flashwp-slider-image', array('class' => 'flashwp-fp07-post-thumbnail-img', 'title' => get_the_title())); ?>
        <?php } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-675-400.jpg' ); ?>" class="flashwp-fp07-post-thumbnail-img"/>
        <?php } ?>
        <div class="text-over">
            <?php
            if ( 'post' == get_post_type() ) {
                /* translators: used between list items, there is a space */
                $categories_list = get_the_category_list( ' ' );
                if ( $categories_list ) {
                    /* translators: 1: list of categories. */
                    printf( '<div class="flashwp-carousel-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'flashwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
                }
            }
            ?>
            <h4 class="flashwp-carousel-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'flashwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_title(); ?></a></h4>
            <div class="flashwp-carousel-post-footer">
            <span class="flashwp-carousel-post-author flashwp-carousel-post-meta"><i class="fa fa-user-circle-o"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'flashwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span>
            <span class="flashwp-carousel-post-date flashwp-carousel-post-meta"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date('Y-m-d'); ?></span>
            <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?><span class="flashwp-carousel-post-comment flashwp-carousel-post-meta"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comments<span class="screen-reader-text"> on %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span><?php } ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    </div>
    </div>
    </div>
    </div>

    <?php wp_reset_postdata();  // Restore global post data stomped by the_post().
    endif; ?>

</div>

<?php flashwp_after_slider(); ?>

<?php }

endif;


function flashwp_slider_area() {

if ( flashwp_get_option('enable_slider') ) {

if ( 'front-page' === flashwp_get_option('slider_display') ) {
    if ( is_front_page() && is_home() && !is_paged() ) {
        flashwp_slider();
    }
} elseif ( 'front-page-static' === flashwp_get_option('slider_display') ) {
    if ( is_front_page() && is_singular() ) {
        flashwp_slider();
    }
} else {
    if ( is_front_page() && is_home() && !is_paged() ) {
        flashwp_slider();
    }
}

}

}