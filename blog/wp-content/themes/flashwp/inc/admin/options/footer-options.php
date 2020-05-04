<?php
/**
* Footer options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_footer', array( 'title' => esc_html__( 'Footer', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'flashwp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_html', ) );

    $wp_customize->add_control( 'flashwp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'flashwp' ), 'section' => 'sc_flashwp_footer', 'settings' => 'flashwp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'flashwp' ), 'section' => 'sc_flashwp_footer', 'settings' => 'flashwp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}