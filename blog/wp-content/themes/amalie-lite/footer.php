<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Amalie
 * @since Amalie 1.0
 */
?>
<?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true">|</span>' );
			}
		?>
		<?php
			/**
			* Fires before the Amalie Lite footer text for footer customization.
			*
			* @since Amalie Lite 1.0
			*/
			do_action( 'amalie_lite_credits' );
		?>
		<?php if(!get_theme_mod('amalie_copyright')) : ?>
		    <a href="<?php echo esc_url( esc_html__( 'https://www.anarieldesign.com/amalie-lite-free-wordpress-theme/', 'amalie-lite' ) ); ?>"><?php printf( esc_html__( 'Theme: %1$s', 'amalie' ), 'Amalie Lite' ); ?></a>
		<?php else: ?>
		    <?php esc_attr_e('&copy;', 'amalie-lite'); ?>
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> <?php echo esc_html( get_theme_mod( 'amalie_copyright', __( 'Built using Amalie Lite Theme. Proudly powered by WordPress.', 'amalie-lite' ) ) ); ?> </a>
		<?php endif; ?>
		
	    </div>
		<!-- .site-info -->
	</footer><!-- .site-footer -->
<?php } // end if ?>
	
	</div><!-- .site-content -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>