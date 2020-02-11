<?php
/**
 * Site footer
 *
 * @package FcoVeraPersonalSite
 */

?>
			<footer class="grid-x align-middle">
				<div class="cell large-2 medium-4">
					<?php if ( is_customize_preview() || get_theme_mod( 'footer_link_url' ) ) : ?>
					<a href="<?php echo esc_url( get_theme_mod( 'footer_link_url' ) ); ?>" class="cv wp-customize__footer-link"><?php echo esc_html( get_theme_mod( 'footer_link_label' ) ); ?></a>
					<?php endif; ?>
				</div>
				<section class="cell large-6 medium-8">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social_networks',
							'container'      => false,
							'menu_class'     => 'social-networks',
							'depth'          => 1,
							'fallback_cb'    => null,
						)
					);
					?>
				</section>
				<div class="cell large-4 medium-12 small-8 collaboration">
					<p>Sitio diseñado por mi e implementado por <a href="https://felipe.lavin.blog">Felipe Lavín</a>.</p>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
