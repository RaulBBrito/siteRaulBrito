<?php
/**
* Getting started options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'flashwp' ), 'description' => esc_html__( 'Thanks for your interest in FlashWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'flashwp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FlashWP_Customize_Button_Control( $wp_customize, 'flashwp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'flashwp' ), 'section' => 'sc_flashwp_getting_started', 'settings' => 'flashwp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/flashwp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'flashwp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FlashWP_Customize_Button_Control( $wp_customize, 'flashwp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'flashwp' ), 'section' => 'sc_flashwp_getting_started', 'settings' => 'flashwp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}