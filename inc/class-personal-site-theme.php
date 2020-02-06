<?php
/**
 * Main theme class
 *
 * @package FcoVeraPersonalSite
 */

/**
 * Personal_Site_Theme
 */
class Personal_Site_Theme {

	/**
	 * Register theme hooks
	 */
	public function init() {
		add_action( 'wp_enqueue_scripts', array( $this, 'hook_wp_enqueue_scripts' ) );
	}

	/**
	 * Enqueue styles and scripts
	 */
	public function hook_wp_enqueue_scripts() {
		wp_enqueue_style( 'personal-site-theme', get_stylesheet_directory_uri() . '/css/app.css', array(), '1.0.0', 'screen' );
		wp_enqueue_script( 'what-input', get_stylesheet_directory_uri() . '/node_modules/what-input/dist/what-input.js', array(), '5.2.6', true );
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/node_modules/foundation-sites/dist/js/foundation.js', array( 'jquery-core', 'what-input' ), '6.5.3', true );
		wp_enqueue_script( 'personal-site-js', get_stylesheet_directory_uri() . '/js/app.js', array( 'foundation' ), '1.0.0', true );
	}

}
