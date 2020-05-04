<?php
/**
* Enqueue scripts and styles
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_scripts() {
    wp_enqueue_style('flashwp-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
    wp_enqueue_style('flashwp-webfont', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700|Roboto+Condensed:400,400i,700,700i|Patua+One', array(), NULL);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);

    $flashwp_primary_menu_active = FALSE;
    if ( !flashwp_get_option('disable_primary_menu') ) {
        $flashwp_primary_menu_active = TRUE;
    }
    $flashwp_secondary_menu_active = FALSE;
    if ( !flashwp_get_option('disable_secondary_menu') ) {
        $flashwp_secondary_menu_active = TRUE;
    }

    $flashwp_sticky_menu = TRUE;
    $flashwp_sticky_mobile_menu = TRUE;
    if ( !flashwp_get_option('enable_sticky_mobile_menu') ) {
        $flashwp_sticky_mobile_menu = FALSE;
    }

    $flashwp_sticky_sidebar = TRUE;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $flashwp_sticky_sidebar = FALSE;
    }
    if ( is_404() ) {
        $flashwp_sticky_sidebar = FALSE;
    }
    if ( $flashwp_sticky_sidebar ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    $flashwp_slider = FALSE;
    if ( flashwp_get_option('enable_slider') ) {
        $flashwp_slider = TRUE;
    }
    if ( $flashwp_slider ) {
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), NULL );
        wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array( 'jquery', 'imagesloaded' ), NULL, true);
    }

    wp_enqueue_script('flashwp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('flashwp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('flashwp-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery' ), NULL, true);
    wp_localize_script( 'flashwp-customjs', 'flashwp_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'primary_menu_active' => $flashwp_primary_menu_active,
            'secondary_menu_active' => $flashwp_secondary_menu_active,
            'sticky_menu' => $flashwp_sticky_menu,
            'sticky_menu_mobile' => $flashwp_sticky_mobile_menu,
            'sticky_sidebar' => $flashwp_sticky_sidebar,
            'slider' => $flashwp_slider,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'flashwp_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function flashwp_ie_scripts() {
    wp_enqueue_script( 'html5shiv', get_template_directory_uri(). '/assets/js/html5shiv.min.js', array(), NULL, false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.min.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'flashwp_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function flashwp_enqueue_customizer_styles() {
    wp_enqueue_style( 'flashwp-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'flashwp_enqueue_customizer_styles' );