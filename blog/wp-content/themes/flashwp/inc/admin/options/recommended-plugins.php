<?php
/**
* Recommended plugins options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'flashwp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => 'flashwp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new FlashWP_Customize_Recommended_Plugins( $wp_customize, 'flashwp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'flashwp' ), 'section' => 'sc_recommended_plugins', 'settings' => 'flashwp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins', 'capability' => 'install_plugins' ) ) );

}