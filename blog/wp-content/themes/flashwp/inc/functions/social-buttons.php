<?php
/**
* Social buttons
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_header_social_buttons() { ?>

<div class='flashwp-top-social-icons'>
    <?php if ( flashwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('twitterlink') ); ?>" target="_blank" class="flashwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','flashwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('facebooklink') ); ?>" target="_blank" class="flashwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','flashwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('googlelink') ); ?>" target="_blank" class="flashwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','flashwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('pinterestlink') ); ?>" target="_blank" class="flashwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','flashwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('linkedinlink') ); ?>" target="_blank" class="flashwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','flashwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('instagramlink') ); ?>" target="_blank" class="flashwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','flashwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('flickrlink') ); ?>" target="_blank" class="flashwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','flashwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('youtubelink') ); ?>" target="_blank" class="flashwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','flashwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('vimeolink') ); ?>" target="_blank" class="flashwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','flashwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('soundcloudlink') ); ?>" target="_blank" class="flashwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','flashwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('lastfmlink') ); ?>" target="_blank" class="flashwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','flashwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('githublink') ); ?>" target="_blank" class="flashwp-social-icon-github" title="<?php esc_attr_e('Github','flashwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('bitbucketlink') ); ?>" target="_blank" class="flashwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','flashwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('tumblrlink') ); ?>" target="_blank" class="flashwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','flashwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('digglink') ); ?>" target="_blank" class="flashwp-social-icon-digg" title="<?php esc_attr_e('Digg','flashwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('deliciouslink') ); ?>" target="_blank" class="flashwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','flashwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('stumblelink') ); ?>" target="_blank" class="flashwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','flashwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('redditlink') ); ?>" target="_blank" class="flashwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','flashwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('dribbblelink') ); ?>" target="_blank" class="flashwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','flashwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('behancelink') ); ?>" target="_blank" class="flashwp-social-icon-behance" title="<?php esc_attr_e('Behance','flashwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('vklink') ); ?>" target="_blank" class="flashwp-social-icon-vk" title="<?php esc_attr_e('VK','flashwp'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('codepenlink') ); ?>" target="_blank" class="flashwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','flashwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('jsfiddlelink') ); ?>" target="_blank" class="flashwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','flashwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('stackoverflowlink') ); ?>" target="_blank" class="flashwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','flashwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('stackexchangelink') ); ?>" target="_blank" class="flashwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','flashwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('bsalink') ); ?>" target="_blank" class="flashwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','flashwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('slidesharelink') ); ?>" target="_blank" class="flashwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','flashwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( flashwp_get_option('skypeusername') ); ?>?chat" class="flashwp-social-icon-skype" title="<?php esc_attr_e('Skype','flashwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( flashwp_get_option('emailaddress') ); ?>" class="flashwp-social-icon-email" title="<?php esc_attr_e('Email Us','flashwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( flashwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( flashwp_get_option('rsslink') ); ?>" target="_blank" class="flashwp-social-icon-rss" title="<?php esc_attr_e('RSS','flashwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( !(flashwp_get_option('hide_header_login_link')) ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" title="<?php esc_attr_e( 'Logout', 'flashwp' ); ?>" class="flashwp-social-icon-login"><i class="fa fa-sign-out" aria-hidden="true"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" title="<?php esc_attr_e( 'Login / Register', 'flashwp' ); ?>" class="flashwp-social-icon-login"><i class="fa fa-sign-in" aria-hidden="true"></i></a><?php endif;?><?php } ?>
    <?php if ( !(flashwp_get_option('hide_header_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','flashwp'); ?>" class="flashwp-social-icon-search"><i class="fa fa-search"></i></a><?php } ?>
</div>

<?php }