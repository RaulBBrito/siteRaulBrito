<?php
/**
* Post meta functions
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'flashwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function flashwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'flashwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="flashwp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'flashwp' ) . '</span>', $tags_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'flashwp_style_9_cats' ) ) :
function flashwp_style_9_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'flashwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="flashwp-fp09-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'flashwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'flashwp_style_9_postmeta' ) ) :
function flashwp_style_9_postmeta() { ?>
    <?php if ( !(flashwp_get_option('hide_post_author_home')) || !(flashwp_get_option('hide_posted_date_home')) || !(flashwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="flashwp-fp09-post-footer">
    <?php if ( !(flashwp_get_option('hide_post_author_home')) ) { ?><span class="flashwp-fp09-post-author flashwp-fp09-post-meta"><i class="fa fa-user-circle-o"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'flashwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_posted_date_home')) ) { ?><span class="flashwp-fp09-post-date flashwp-fp09-post-meta"><i class="fa fa-clock-o"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Published Date: ', 'flashwp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="flashwp-fp09-post-comment flashwp-fp09-post-meta"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'flashwp_style_4_cats' ) ) :
function flashwp_style_4_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'flashwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="flashwp-fp04-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'flashwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'flashwp_style_4_postmeta' ) ) :
function flashwp_style_4_postmeta() { ?>
    <?php if ( !(flashwp_get_option('hide_post_author_home')) || !(flashwp_get_option('hide_posted_date_home')) || !(flashwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="flashwp-fp04-post-footer">
    <?php if ( !(flashwp_get_option('hide_post_author_home')) ) { ?><span class="flashwp-fp04-post-author flashwp-fp04-post-meta"><i class="fa fa-user-circle-o"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'flashwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_posted_date_home')) ) { ?><span class="flashwp-fp04-post-date flashwp-fp04-post-meta"><i class="fa fa-clock-o"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Published Date: ', 'flashwp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="flashwp-fp04-post-comment flashwp-fp04-post-meta"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'flashwp_style_5_cats' ) ) :
function flashwp_style_5_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'flashwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="flashwp-fp05-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'flashwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'flashwp_style_5_postmeta' ) ) :
function flashwp_style_5_postmeta() { ?>
    <?php if ( !(flashwp_get_option('hide_post_author_home')) || !(flashwp_get_option('hide_posted_date_home')) || !(flashwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="flashwp-fp05-post-footer">
    <?php if ( !(flashwp_get_option('hide_post_author_home')) ) { ?><span class="flashwp-fp05-post-author flashwp-fp05-post-meta"><i class="fa fa-user-circle-o"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'flashwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_posted_date_home')) ) { ?><span class="flashwp-fp05-post-date flashwp-fp05-post-meta"><i class="fa fa-clock-o"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Published Date: ', 'flashwp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="flashwp-fp05-post-comment flashwp-fp05-post-meta"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'flashwp_single_cats' ) ) :
function flashwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'flashwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="flashwp-entry-meta-single flashwp-entry-meta-single-top"><span class="flashwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'flashwp' ) . '</span></div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'flashwp_single_postmeta' ) ) :
function flashwp_single_postmeta() { ?>
    <?php if ( !(flashwp_get_option('hide_post_author')) || !(flashwp_get_option('hide_posted_date')) || !(flashwp_get_option('hide_comments_link')) || !(flashwp_get_option('hide_post_edit')) ) { ?>
    <div class="flashwp-entry-meta-single">
    <?php if ( !(flashwp_get_option('hide_post_author')) ) { ?><span class="flashwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'flashwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_posted_date')) ) { ?><span class="flashwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Published Date: ', 'flashwp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(flashwp_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="flashwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(flashwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="screen-reader-text"> %s</span>', 'flashwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;