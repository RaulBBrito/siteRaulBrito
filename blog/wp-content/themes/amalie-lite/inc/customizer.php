<?php
/**
 * Amalie Customizer functionality
 *
 * @package Amalie
 * @since Amalie 1.0
 */

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Amalie 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function amalie_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	
	$wp_customize->add_section( 'amalie_theme_options', array(
		'title'    => esc_html__( 'Front Page Featured Page', 'amalie-lite' ),
		'priority' => 131,
	) );

	/* Front Page: Featured Page One */
	$wp_customize->add_setting( 'amalie_featured_page_one_front_page_first_block', array(
		'default'           => '',
		'sanitize_callback' => 'amalie_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'amalie_featured_page_one_front_page_first_block', array(
		'label'             => esc_html__( 'Featured Page', 'amalie-lite' ),
		'section'           => 'amalie_theme_options',
		'priority'          => 8,
		'type'              => 'dropdown-pages',
	) );

	/**
	* Adds the individual sections for copyright
	*/
	$wp_customize->add_section( 'amalie_copyright_section' , array(
		'title'    => esc_html__( 'Copyright Settings', 'amalie-lite' ),
	) );

	$wp_customize->add_setting( 'amalie_copyright', array(
		'default'           => esc_html__( 'Proudly powered by WordPress. Built with Amalie Lite WordPress Theme', 'amalie-lite' ),
		'sanitize_callback' => 'amalie_sanitize_text',
	) );
	$wp_customize->add_control( 'amalie_copyright', array(
		'label'             => esc_html__( 'Copyright text', 'amalie-lite' ),
		'section'           => 'amalie_copyright_section',
		'settings'          => 'amalie_copyright',
		'type'		        => 'text',
		'priority'          => 1,
	) );

	$wp_customize->add_setting( 'hide_copyright', array(
		'sanitize_callback' => 'amalie_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'hide_copyright', array(
		'label'             => esc_html__( 'Hide copyright text', 'amalie-lite' ),
		'section'           => 'amalie_copyright_section',
		'settings'          => 'hide_copyright',
		'type'		        => 'checkbox',
		'priority'          => 2,
	) );


	// Add an additional description to the header image section.
	$wp_customize->get_section( 'header_image' )->description = esc_html__( 'Applied to the header on small screens and the sidebar on wide screens.', 'amalie-lite' );


	/***** Register Custom Controls *****/

	class Amalie_Upgrade extends WP_Customize_Control {
		public function render_content() {  ?>
			<p class="didi-upgrade-thumb">
				<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
			</p>
			<p class="customize-control-title didi-upgrade-title">
				<?php esc_html_e('Amalie Pro', 'amalie-lite'); ?>
			</p>
			<p class="textfield didi-upgrade-text">
				<?php esc_html_e('Full version of this theme includes additional features; additional page templates, WooCommerce support, color options & premium theme support.', 'amalie-lite'); ?>
			</p>
			<p class="customize-control-title didi-upgrade-title">
				<?php esc_html_e('Additional Features:', 'amalie-lite'); ?>
			</p>
			<ul class="didi-upgrade-features">
				<li class="didi-upgrade-feature-item">
					<?php esc_html_e('Additional Page Templates', 'amalie-lite'); ?>
				</li>
				<li class="didi-upgrade-feature-item">
					<?php esc_html_e('WooCommerce Support', 'amalie-lite'); ?>
				</li>
				<li class="didi-upgrade-feature-item">
					<?php esc_html_e('Color Options', 'amalie-lite'); ?>
				</li>
				<li class="didi-upgrade-feature-item">
					<?php esc_html_e('Premium Theme Support', 'amalie-lite'); ?>
				</li>
			</ul>
			<p class="didi-upgrade-button">
				<a href="http://www.anarieldesign.com/themes/personal-blog-wordpress-theme/" target="_blank" class="button button-secondary">
					<?php esc_html_e('Read more about Amalie', 'amalie-lite'); ?>
				</a>
			</p><?php
		}
	}

	/***** Add Sections *****/

	$wp_customize->add_section('amalie_upgrade', array(
		'title' => esc_html__('Pro Features', 'amalie-lite'),
		'priority' => 300
	) );

	/***** Add Settings *****/

	$wp_customize->add_setting('amalie_options[premium_version_upgrade]', array(
		'default' => '',
		'type' => 'option',
		'sanitize_callback' => 'esc_attr'
	) );

	/***** Add Controls *****/

	$wp_customize->add_control(new Amalie_Upgrade($wp_customize, 'premium_version_upgrade', array(
		'section' => 'amalie_upgrade',
		'settings' => 'amalie_options[premium_version_upgrade]',
		'priority' => 1
	) ) );
}
add_action( 'customize_register', 'amalie_customize_register', 11 );

/**
 * Sanitization
 */
//Checkboxes
function amalie_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

//Integers
function amalie_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//Text
function amalie_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function amalie_no_sanitize( $input ) {
}

/**
 * Sanitize the dropdown pages.
 *
 * @param interger $input.
 * @return interger.
 */
function amalie_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Amalie 1.0
 */
function amalie_customize_preview_js() {
	wp_enqueue_script( 'amalie-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'amalie_customize_preview_js' );
/***** Enqueue Customizer CSS *****/

function amalie_customizer_base_css() {
	wp_enqueue_style('amalie-customizer', get_template_directory_uri() . '/admin/customizer.css', array());
}
add_action('customize_controls_print_styles', 'amalie_customizer_base_css');
/***** Enqueue Customizer JS *****/

function amalie_customizer_js() {
	wp_enqueue_script('amalie-customizer', get_template_directory_uri() . '/js/amalie-customizer.js', array(), '1.0.0', true);
	wp_localize_script('amalie-customizer', 'amalie_links', array(
		'upgradeURL' => esc_url('http://www.anarieldesign.com/themes/personal-blog-wordpress-theme/'),
		'upgradeLabel' => esc_html__('Upgrade to Amalie Pro', 'amalie-lite'),
		'title'	=> esc_html__('Theme Related Links:', 'amalie-lite'),
		'themeURL' => esc_url('http://www.anarieldesign.com/themes/personal-blog-wordpress-theme/'),
		'themeLabel' => esc_html__('Theme Info Page', 'amalie-lite'),
		'docsURL' => esc_url('http://www.anarieldesign.com/documentation/amalielite/'),
		'docsLabel'	=> esc_html__('Theme Documentation', 'amalie-lite'),
		'rateURL' => esc_url('https://wordpress.org/support/view/theme-reviews/amalie-lite?filter=5'),
		'rateLabel'	=> esc_html__('Rate this theme', 'amalie-lite'),
	));
}
add_action('customize_controls_enqueue_scripts', 'amalie_customizer_js');