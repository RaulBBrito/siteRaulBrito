<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="flashwp-fp04-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(flashwp_get_option('hide_thumbnail')) ) { ?>
    <div class="flashwp-fp04-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'flashwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('flashwp-medium-image', array('class' => 'flashwp-fp04-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(flashwp_get_option('hide_thumbnail'))) { ?><div class="flashwp-fp04-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (flashwp_get_option('hide_thumbnail'))) { ?><div class="flashwp-fp04-post-details-full"><?php } ?>

    <?php if ( !(flashwp_get_option('hide_post_categories_home')) ) { ?><?php flashwp_style_4_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="flashwp-fp04-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php flashwp_style_4_postmeta(); ?>

    <?php if ( !(flashwp_get_option('hide_post_snippet')) ) { ?><div class="flashwp-fp04-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php if ( !(flashwp_get_option('hide_read_more_button')) ) { ?><div class='flashwp-fp04-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><span class="flashwp-read-more-text"><?php echo esc_html( flashwp_read_more_text() ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></span></span></a></div><?php } ?>

    <?php if(!(has_post_thumbnail()) || (flashwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(flashwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>