<?php
/**
* Post options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_post_options($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_posts', array( 'title' => esc_html__( 'Post Options', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'flashwp_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide Blog Posts Heading', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'flashwp' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'flashwp_posts_heading_control', array( 'label' => esc_html__( 'Blog Posts Heading', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'flashwp_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'flashwp_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'flashwp' ), 'description' => esc_html__('Do you want single post thumbnail to be linked to their post?', 'flashwp'), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'flashwp'), 'no' => esc_html__('No', 'flashwp') ) ) );

    $wp_customize->add_setting( 'flashwp_options[post_style]', array( 'default' => 'style-4', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_post_style' ) );

    $wp_customize->add_control( 'flashwp_post_style_control', array( 'label' => esc_html__( 'Non-Singular Posts Style', 'flashwp' ), 'description' => esc_html__('Select the post style you want for home/categories/tags/archive/search-results pages.', 'flashwp'), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[post_style]', 'type' => 'select', 'choices' => array( 'style-4' => esc_html__('List', 'flashwp'), 'style-5' => esc_html__('Grid', 'flashwp'), 'style-9' => esc_html__('Full', 'flashwp') ) ) );

    $wp_customize->add_setting( 'flashwp_options[read_more_length]', array( 'default' => 25, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'flashwp_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'flashwp' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 25 words.', 'flashwp'), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[read_more_text]', array( 'default' => esc_html__( 'Continue Reading', 'flashwp' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'flashwp_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[read_more_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Date from Posts Summaries', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_posted_date_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Single Posts', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_author_home_control', array( 'label' => esc_html__( 'Hide Post Author from Posts Summaries', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_author_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author from Single Posts', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Posts Summaries', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories from Single Posts', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_tags_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_tags_home_control', array( 'label' => esc_html__( 'Hide Post Tags from Posts Summaries', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_tags_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags from Single Posts', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_comments_link_home_control', array( 'label' => esc_html__( 'Hide Comment Link from Posts Summaries', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link from Single Posts', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippet', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_read_more_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_read_more_button_control', array( 'label' => esc_html__( 'Hide Read More Button', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_read_more_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'flashwp' ), 'section' => 'sc_flashwp_posts', 'settings' => 'flashwp_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}