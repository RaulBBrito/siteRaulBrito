<?php
/**
* More Custom Functions
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function flashwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $flashwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $flashwp_logo = wp_get_attachment_image_src( $flashwp_custom_logo_id , 'full' );
    return $flashwp_logo[0];
}

// Site Title
function flashwp_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_singular() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_category() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_tag() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_author() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_search() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } elseif ( is_404() ) { ?>
            <p class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php } else { ?>
            <h1 class="flashwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="flashwp-site-description"><?php bloginfo( 'description' ); ?></p>
    <?php }
}

function flashwp_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading', 'flashwp' );
        if ( flashwp_get_option('read_more_text') ) {
                $readmoretext = flashwp_get_option('read_more_text');
        }
       return $readmoretext;
}

// Category ids in post class
function flashwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'flashwp_category_id_class');

// Change excerpt length
function flashwp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    if ( flashwp_get_option('read_more_length') ) {
        $read_more_length = flashwp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'flashwp_excerpt_length');

// Change excerpt more word
function flashwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'flashwp_excerpt_more');

// Adds custom classes to the array of body classes.
function flashwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'flashwp-group-blog';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'flashwp-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'flashwp-layout-full-width';
    }

    return $classes;
}
add_filter( 'body_class', 'flashwp_body_classes' );


function flashwp_post_style() {
       $post_style = 'style-4';
        if ( flashwp_get_option('post_style') ) {
                $post_style = flashwp_get_option('post_style');
        }
       return $post_style;
}


function flashwp_footer_grid_cols() {
       $footer_column = 'flashwp-footer-4-col';
       return $footer_column;
}

function flashwp_single_post_footer() { ?>
    <footer class="entry-footer flashwp-entry-bottom-block">
        <?php flashwp_post_tags(); ?>
    </footer><!-- .entry-footer -->
<?php }


if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;