<?php
/**
 * Template for portfolio single
 *
 * @package FcoVeraPersonalSite
 */

the_post();
get_header(); ?>

<article class="post-work">
	<header class="grid-container">
		<div class="grid-x">
			<section class="cell">
				<h1><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
				<?php the_excerpt(); ?>
				<?php endif; ?>
				<?php if ( $post->portfolio_made_with || $post->portfolio_project_date ) : ?>
				<div class="organization float-left">
					<span><?php echo esc_html( $post->portfolio_made_with ); ?></span>
					<time><?php echo esc_html( date_i18n( 'F, Y', strtotime( $post->portfolio_project_date ) ) ); ?></time>
				</div>
				<?php endif; ?>
			</section>
		</div>
	</header>

	<section class="grid-container full">
		<div class="grid-x">
			<div class="cell white-background"> <!-- white background -->
			<div class="grid-container">
				<div class="grid-x grid-margin-x project-info">
				<div class="cell large-3 medium-10 small-12">
					<div class="stakeholders float-left">
					<?php if ( ! empty( $post->portfolio_client_name ) ) : ?>
					<h3>Stakeholder</h3>
					<!-- <a href="#">Dirección de transporte público metropolitano</a> -->
					<?php echo esc_html( $post->portfolio_client_name ); ?>
					</div>
					<?php endif; ?>
					<?php if ( ! empty( $post->portfolio_equipo ) ) : ?>
					<div class="project-team float-left">
					<h3>Project’s team</h3>
						<ul>
						<?php foreach ( get_post_meta( $post->ID, 'portfolio_equipo', false ) as $person ) : ?>
						<?php if ( ! empty( $person['team_member_url'] ) ) : ?>
							<li><a href="<?php echo esc_url( $person['team_member_url'] ); ?>"><?php echo esc_html( $person['team_member_name'] ); ?></a></li>
						<?php else : ?>
							<li><?php echo esc_html( $person['team_member_name'] ); ?></li>
						<?php endif; ?>
						<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
				<div class="cell large-9 small-12">
					<?php the_post_thumbnail( 'portfolio-featured', array( 'class' => 'main-photo' ) ); ?>
				</div>
				</div>
			</div>
			</div> <!-- end white background -->
		</div>
	</section>

	<div class="grid-container"> <!-- content post -->
		<div class="grid-x">
			<div class="cell large-10 small-12 large-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>