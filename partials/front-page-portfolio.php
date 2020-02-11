<?php
/**
 * Portfolio section on the front page
 *
 * @package FcoVeraPersonalSite
 */

$projects = new WP_Query(
	array(
		'post_type'      => 'jetpack-portfolio',
		'posts_per_page' => 99,
		'order_by'       => 'menu_order',
		'order'          => 'ASC',
	)
);

if ( ! $projects->have_posts() ) {
	return;
}
?>
<section class="grid-x">
	<div class="cell home-section portfolio">
		<h2>Selected projects of my portfolio</h2>
		<div class="grid-x grid-margin-x">
		<?php
		while ( $projects->have_posts() ) :
			$projects->the_post();
			?>
			<a class="cell xlarge-3 large-4 small-6 work-post" href="<?php the_permalink(); ?>">
				<div class="img thumb-img"></div>
				<p><?php the_title(); ?></p>
			</a>
		<?php endwhile; ?>
		</div>
	</div>
</section>
