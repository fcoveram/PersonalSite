<?php
/**
 * Theme functions
 *
 * @package FcoVeraPersonalSite
 */

( function() {
	require_once __DIR__ . '/inc/class-personal-site-theme.php';
	return new Personal_Site_Theme();
} )()->init();
