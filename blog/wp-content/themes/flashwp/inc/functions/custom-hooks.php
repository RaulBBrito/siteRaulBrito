<?php
/**
* Custom Hooks and their functions
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_before_header() {
    do_action('flashwp_before_header');
}

function flashwp_after_header() {
    do_action('flashwp_after_header');
}

function flashwp_after_primary_menu() {
    do_action('flashwp_after_primary_menu');
}

function flashwp_before_slider() {
    do_action('flashwp_before_slider');
}

function flashwp_after_slider() {
    do_action('flashwp_after_slider');
}

function flashwp_before_main_content() {
    do_action('flashwp_before_main_content');
}

function flashwp_after_main_content() {
    do_action('flashwp_after_main_content');
}

function flashwp_before_sidebar() {
    do_action('flashwp_before_sidebar');
}

function flashwp_after_sidebar() {
    do_action('flashwp_after_sidebar');
}

function flashwp_before_single_post() {
    do_action('flashwp_before_single_post');
}

function flashwp_before_single_post_title() {
    do_action('flashwp_before_single_post_title');
}

if ( !(flashwp_get_option('hide_post_categories')) ) {
    add_action('flashwp_before_single_post_title', 'flashwp_single_cats', 5 );
}

function flashwp_after_single_post_title() {
    do_action('flashwp_after_single_post_title');
}

add_action('flashwp_after_single_post_title', 'flashwp_single_postmeta', 5 );

function flashwp_after_single_post_content() {
    do_action('flashwp_after_single_post_content');
}

if ( !(flashwp_get_option('hide_post_tags')) ) {
    add_action('flashwp_after_single_post_content', 'flashwp_single_post_footer', 5 );
}

if ( !(flashwp_get_option('hide_author_bio_box')) ) {
    add_action('flashwp_after_single_post_content', 'flashwp_add_author_bio_box', 15 );
}

function flashwp_after_single_post() {
    do_action('flashwp_after_single_post');
}

function flashwp_before_single_page() {
    do_action('flashwp_before_single_page');
}

function flashwp_before_single_page_title() {
    do_action('flashwp_before_single_page_title');
}

function flashwp_after_single_page_title() {
    do_action('flashwp_after_single_page_title');
}

function flashwp_after_single_page_content() {
    do_action('flashwp_after_single_page_content');
}

function flashwp_after_single_page() {
    do_action('flashwp_after_single_page');
}