<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php flashwp_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flashwp-post-singular flashwp-box'); ?>>
<div class="flashwp-box-inside">

    <?php flashwp_before_single_post_title(); ?>

    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header><!-- .entry-header -->

    <?php flashwp_after_single_post_title(); ?>

    <div class="entry-content clearfix">
            <?php
            if ( has_post_thumbnail() ) {
                if ( !(flashwp_get_option('hide_thumbnail')) ) {
                    if ( !(flashwp_get_option('hide_thumbnail_single')) ) {
                        if ( flashwp_get_option('thumbnail_link') == 'no' ) {
                            the_post_thumbnail('flashwp-featured-hauto-image', array('class' => 'flashwp-post-thumbnail-single'));
                        } else { ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'flashwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('flashwp-featured-hauto-image', array('class' => 'flashwp-post-thumbnail-single')); ?></a>
                <?php   }
                    }
                }
            }

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'flashwp' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'flashwp' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php flashwp_after_single_post_content(); ?>

</div>
</article>

<?php flashwp_after_single_post(); ?>