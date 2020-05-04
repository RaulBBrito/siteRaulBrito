<?php
/**
* Upgrade to pro options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'flashwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'flashwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new FlashWP_Customize_Static_Text_Control( $wp_customize, 'flashwp_upgrade_text_control', array(
        'label'       => esc_html__( 'FlashWP Pro', 'flashwp' ),
        'section'     => 'sc_flashwp_upgrade',
        'settings' => 'flashwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy FlashWP? Upgrade to FlashWP Pro now and get:', 'flashwp' ).
            '<ul class="flashwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Layout Options (separate options for singular and non-singular pages)', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Page/Post Templates', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10 Different Posts Styles', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '17 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Slider with More Options(this widget displays recent/popular/random posts or posts from a given category or tag.', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'News Ticker', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4 columns)', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Built-in Contact Form', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'flashwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'flashwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.FLASHWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To FlashWP PRO', 'flashwp' ) . '</a></strong>'
    ) ) ); 

}