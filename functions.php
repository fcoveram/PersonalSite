<?php
/**
 * Theme functions
 *
 * @package FcoVeraPersonalSite
 */

( function() {
	require_once __DIR__ . '/inc/class-personal-site-template.php';
	return new Personal_Site_Template();
} )()->init();
