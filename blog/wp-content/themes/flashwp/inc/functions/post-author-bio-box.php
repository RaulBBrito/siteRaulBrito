<?php
/**
* Author bio box
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_add_author_bio_box() {
    if (is_single()) { ?>

            <div class="flashwp-author-bio flashwp-entry-bottom-block">
            <div class="flashwp-author-bio-top">
            <div class="flashwp-author-bio-gravatar"><?php echo wp_kses_post( force_balance_tags( get_avatar( get_the_author_meta('email') , 80 ) ) ); ?></div>
            <div class="flashwp-author-bio-text">
                <h4><?php esc_html_e( 'Author: ', 'flashwp' ); ?><span><?php echo wp_kses_post( force_balance_tags( get_the_author_link() ) ); ?></span></h4>
                <?php echo wp_kses_post( force_balance_tags( get_the_author_meta('description',get_query_var('author') ) ) ); ?>
            </div>
            </div>
            </div>

    <?php }
}