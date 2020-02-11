<?php
/**
 * Posts displayed on the front page
 *
 * @package FcoVeraPersonalSite
 */

$entries = new WP_Query(
	array(
		'posts_per_page' => 99,
	)
);

if ( ! $entries->have_posts() ) {
	return;
}
?>
<section class="grid-X">
	<div class="cell home-section blog">
		<h2>Thoughts, ideas and experiences</h2>
		<ul>
		<?php
		while ( $entries->have_posts() ) :
			$entries->the_post();
			?>
			<li class="grid-x align-middle">
				<a class="cell large-9 medium-10 small-12" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<time class="cell large-3 medium-2 small-12"><?php the_date(); ?></time>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
</section>
