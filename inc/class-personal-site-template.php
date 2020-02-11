<?php
/**
 * Main theme class
 *
 * @package FcoVeraPersonalSite
 */

/**
 * Personal_Site_Template
 */
class Personal_Site_Template {

	/**
	 * Register theme hooks
	 */
	public function init() {
		add_action( 'after_setup_theme', array( $this, 'do_after_setup_theme' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'do_wp_enqueue_scripts' ) );
		add_filter( 'script_loader_tag', array( $this, 'filter_script_loader_tag' ), 10, 3 );
		add_action( 'customize_register', array( $this, 'do_customize_register' ) );
	}

	/**
	 * Add settings to the WordPress customizer
	 *
	 * @param WP_Customize_Manager $wp_customize WordPress customizer instance.
	 * @return WP_Customize_Manager
	 */
	public function do_customize_register( WP_Customize_Manager $wp_customize ) : WP_Customize_Manager {
		$wp_customize->add_section(
			'fcovera',
			array(
				'title' => 'Theme settings',
			)
		);
		$wp_customize->add_setting(
			'footer_link_label',
			array(
				'default' => _x( 'CV en español', 'footer link', 'fcovera' ),
			)
		);
		$wp_customize->add_control(
			'footer_link_label',
			array(
				'label'       => 'Footer link label',
				'description' => _x( 'The text label for the link displayed on the left side of the footer of the page', 'theme setting description', 'fcovera' ),
				'section'     => 'fcovera',
				'type'        => 'text',
				'input_attrs' => array(
					'maxlength' => '20',
				),
			)
		);
		$wp_customize->add_setting(
			'footer_link_url',
			array(
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'footer_link_url',
			array(
				'label'       => 'Footer link URL',
				'description' => _x( 'The link URL for the footer link', 'theme setting description', 'fcovera' ),
				'section'     => 'fcovera',
				'type'        => 'url',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'footer_link',
			array(
				'settings'            => array( 'footer_link_label', 'footer_link_url' ),
				'selector'            => '.wp-customize__footer-link',
				'container_inclusive' => false,
				'render_calback'      => function( $input ) use ( $wp_customize ) {
					echo esc_html( $wp_customize->get_setting( 'footer_link_label' ) );
				},
			)
		);
		return $wp_customize;
	}

	/**
	 * Configure various theme features
	 *
	 * @return void
	 */
	public function do_after_setup_theme() {
		add_theme_support( 'automatic-feed-links' );
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1048;
		}
		add_theme_support( 'title-tag' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
		add_theme_support( 'align-wide' );
		add_theme_support( 'jetpack-portfolio' );
		register_nav_menus(
			array(
				'social_networks' => _x( 'Social networks', 'nav menu', 'fcovera' ),
			)
		);
	}

	/**
	 * Add "defer" attribute to optimize script loading
	 *
	 * @param string $tag The original <script> tag.
	 * @param string $handle The script handle.
	 * @param string $src The script file URL.
	 * @return string Filtered script tag
	 */
	public function filter_script_loader_tag( string $tag, string $handle, string $src ) : string {
		if ( ! is_admin() ) {
			// phpcs:disable WordPress.WP.EnqueuedResources
			return "<script src='$src' defer></script>";
			// phpcs:enable WordPress.WP.EnqueuedResources
		}
		return $tag;
	}

	/**
	 * Enqueue styles and scripts
	 */
	public function do_wp_enqueue_scripts() {
		wp_enqueue_style( 'personal-site-theme', get_stylesheet_directory_uri() . '/css/app.css', array(), '1.0.0', 'screen' );
		wp_enqueue_script( 'what-input', get_stylesheet_directory_uri() . '/node_modules/what-input/dist/what-input.js', array(), '5.2.6', true );
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/node_modules/foundation-sites/dist/js/foundation.js', array( 'jquery-core', 'what-input' ), '6.5.3', true );
		wp_enqueue_script( 'personal-site-js', get_stylesheet_directory_uri() . '/js/app.js', array( 'foundation' ), '1.0.0', true );
	}

}
