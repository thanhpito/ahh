<?php
/**
 * The template part for displaying the footer of AMP.
 *
 * @package Bimber_Theme 4.10
 */
?>
<div class="g1-row g1-row-layout-page g1-footer">
	<div class="g1-row-inner">
		<div class="g1-column">

			<p class="g1-footer-text"><?php echo wp_kses_post( bimber_get_theme_option( 'footer', 'text' ) ); ?></p>

		</div><!-- .g1-column -->
	</div>
	<div class="g1-row-background">
	</div>
</div><!-- .g1-row -->