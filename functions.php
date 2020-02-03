<?php

class Personal_Site_Theme {
	public function init() {
		add_action( 'wp_enqueue_scripts', [ $this, 'hook_wp_enqueue_scripts'] );
	}
	public function hook_wp_enqueue_scripts() {
		wp_enqueue_style( 'personal-site-theme', get_stylesheet_directory_uri() . '/css/app.css', [], false, 'screen' );
		wp_enqueue_script( 'what-input', get_stylesheet_directory_uri() .'/node_modules/what-input/dist/what-input.js', [], false, true );
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() .'/node_modules/foundation-sites/dist/js/foundation.js', [ 'jquery-core', 'what-input' ], false, true );
		wp_enqueue_script( 'personal-site-js', get_stylesheet_directory_uri() .'/js/app.js', [ 'foundation' ], false, true );
	}

}

(function(){
	return new Personal_Site_Theme();
})()->init();