<?php
/**
 * Main site template
 *
 * @package FcoVeraPersonalSite
 */

get_header();
the_post();
?>
	<aside class="grid-x">
		<div class="cell small-12 medium-12 xlarge-9 home-section">
			<div class="about-me">
				<?php the_content(); ?>
			</div>
		</div>
	</aside>

	<?php get_template_part( 'partials/front-page-portfolio' ); ?>

	<?php get_template_part( 'partials/front-page-posts' ); ?>

<?php get_footer(); ?>
