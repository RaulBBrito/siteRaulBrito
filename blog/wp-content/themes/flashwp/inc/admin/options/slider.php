<?php
/**
* Slider options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_slider_options($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_slider', array( 'title' => esc_html__( 'Slider', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 250 ) );

    $wp_customize->add_setting( 'flashwp_options[enable_slider]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_enable_slider_control', array( 'label' => esc_html__( 'Enable Slider', 'flashwp' ), 'section' => 'sc_flashwp_slider', 'settings' => 'flashwp_options[enable_slider]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[slider_display]', array( 'default' => 'front-page', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_slider_display' ) );

    $wp_customize->add_control( 'flashwp_slider_display_control', array( 'label' => esc_html__( 'Slider Display Location', 'flashwp' ), 'description' => esc_html__('Select the slider display location.', 'flashwp'), 'section' => 'sc_flashwp_slider', 'settings' => 'flashwp_options[slider_display]', 'type' => 'select', 'choices' => array( 'front-page' => esc_html__('Home Page', 'flashwp'), 'front-page-static' => esc_html__('Static Home Page', 'flashwp') ) ) );

    $wp_customize->add_setting( 'flashwp_options[slider_length]', array( 'default' => 5, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'flashwp_slider_length_control', array( 'label' => esc_html__( 'Number of Slider Posts', 'flashwp' ), 'description' => esc_html__('Enter the number of posts you need to display in the slider area. Default is 5 posts.', 'flashwp'), 'section' => 'sc_flashwp_slider', 'settings' => 'flashwp_options[slider_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[slider_post_type]', array( 'default' => 'recent-posts', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_slider_type' ) );

    $wp_customize->add_control( 'flashwp_slider_post_type_control', array( 'label' => esc_html__( 'Slider Posts Type', 'flashwp' ), 'description' => esc_html__('Select a post type to display in slider.', 'flashwp'), 'section' => 'sc_flashwp_slider', 'settings' => 'flashwp_options[slider_post_type]', 'type' => 'select', 'choices' => array( 'recent-posts' => esc_html__('Recent Posts', 'flashwp'), 'category-posts' => esc_html__('Category Posts', 'flashwp') ) ) );

    $wp_customize->add_setting( 'flashwp_options[slider_cat]', array( 'default' => 0, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'absint' ) );

    $wp_customize->add_control( new FlashWP_Customize_Category_Control( $wp_customize, 'flashwp_slider_cat_control', array( 'label' => esc_html__( 'Slider Posts Category', 'flashwp' ), 'section' => 'sc_flashwp_slider', 'settings' => 'flashwp_options[slider_cat]', 'description' => esc_html__( 'Select a category if Posts Type option is Category Posts', 'flashwp' ) ) ) );

}