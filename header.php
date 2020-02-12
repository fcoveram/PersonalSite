<?php
/**
 * Site header
 *
 * @package FcoVeraPersonalSite
 */

?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="grid-container">
			<header class="header-site">
				<nav class="grid-x align-middle">
					<div class="cell small-6">
						<a href="<?php echo esc_url( home_url() ); ?>" class="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
					</div>
					<?php get_template_part( 'partials/language-switcher' ); ?>
				</nav>
			</header>
		</div>
