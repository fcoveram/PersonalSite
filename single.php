<?php
/**
 * Single post template
 *
 * @package FcoVeraPersonalSite
 */

the_post();
get_header(); ?>
<article class="post-blog">
	<header class="grid-x">
		<div class="cell xlarge-10 xlarge-offset-1">
			<?php if ( has_post_thumbnail() ) : ?>
			<figure>
				<?php the_post_thumbnail( 'single-featured', array( 'class' => 'post-img border-img' ) ); ?>
				<figcaption><?php echo esc_html( get_the_title( get_post_thumbnail_id() ) ); ?></figcaption>
			</figure>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<time><?php the_date(); ?></time>
		</div>
	</header>
	<section class="grid-x post-content">
		<div class="cell xlarge-10 xlarge-offset-1">
			<?php the_content(); ?>
		</div>
	</section>
</article>

<?php get_footer(); ?>
