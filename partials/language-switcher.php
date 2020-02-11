<?php
/**
 * Language switcher
 *
 * @package FcoVeraPersonalSite
 */

if ( ! function_exists( 'pll_the_languages' ) ) {
	return;
}
$languages = pll_the_languages(
	array(
		'raw'  => true,
		'echo' => 0,
	)
);
if ( count( $languages ) < 2 ) {
	return '';
}
?>
<div class="cell small-6">
	<?php
	foreach ( $languages as $language ) :
		if ( $language['current_lang'] ) {
			continue; }
		?>
	<a href="<?php echo esc_url( $language['url'] ); ?>" class="float-right language"><?php echo esc_html( $language['name'] ); ?></a>
	<?php endforeach; ?>
</div>
