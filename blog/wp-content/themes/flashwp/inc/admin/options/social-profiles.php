<?php
/**
* Social profiles options
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_flashwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'flashwp' ), 'panel' => 'flashwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'flashwp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons + Search Button', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_header_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_header_search_button_control', array( 'label' => esc_html__( 'Hide Header Search Button', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[hide_header_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[hide_header_login_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'flashwp_hide_header_login_link_control', array( 'label' => esc_html__( 'Hide Header Login Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[hide_header_login_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'flashwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'flashwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'flashwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'flashwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'flashwp_sanitize_email' ) );

    $wp_customize->add_control( 'flashwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'flashwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'flashwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'flashwp' ), 'section' => 'sc_flashwp_sociallinks', 'settings' => 'flashwp_options[rsslink]', 'type' => 'text' ) );

}