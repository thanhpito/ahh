<?php
/**
 * The template part for displaying the featured content.
 *
 * @license For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package Bimber_Theme 4.10
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$bimber_template_data                      = bimber_get_template_part_data();
$bimber_featured_entries                   = $bimber_template_data['featured_entries'];


$bimber_featured_ids = bimber_get_featured_posts_ids( $bimber_featured_entries );

$bimber_query_args = array();

if ( ! empty( $bimber_featured_ids ) ) {
	$bimber_query_args['post__in']            = $bimber_featured_ids;
	$bimber_query_args['orderby']             = 'post__in';
	$bimber_query_args['ignore_sticky_posts'] = true;
}

$bimber_query = new WP_Query( $bimber_query_args );

$bimber_featured_class = array(
	'archive-featured',
	'archive-featured-stretched',
);

if ( ! $bimber_template_data['featured_entries_title_hide'] ) {
	$bimber_featured_class[] = 'archive-featured-with-title';
}

if ( $bimber_template_data['featured_entries_gutter'] ) {
	$bimber_featured_class[] = 'archive-featured-with-gutter';
}

$bimber_title_class = array(
	'g1-delta',
	'g1-delta-2nd',
	'archive-featured-title',
);

if ( $bimber_template_data['featured_entries_title_hide'] ) {
	$bimber_title_class[] = 'screen-reader-text';
}
?>

<?php if ( $bimber_query->have_posts() ) {
	$bimber_index = 0;

	bimber_set_template_part_data( $bimber_featured_entries );
	?>

	<section class="<?php echo implode( ' ', array_map( 'sanitize_html_class', $bimber_featured_class ) ); ?>">
		<h2 class="<?php echo implode( ' ', array_map( 'sanitize_html_class', $bimber_title_class ) ); ?>"><strong><?php echo wp_kses_post( $bimber_template_data['featured_entries_title'] ); ?></strong></h2>

		<div class="g1-mosaic g1-mosaic-2-2">
			<?php while ( $bimber_query->have_posts() ) : $bimber_query->the_post();
				$bimber_index ++; ?>

				<div class="g1-mosaic-item g1-mosaic-item-<?php echo absint( $bimber_index ); ?>">
					<?php get_template_part( 'template-parts/content-tile-xl', get_post_format() ); ?>
				</div>

			<?php endwhile; ?>
		</div>
	</section>

	<?php

	bimber_reset_template_part_data();
	wp_reset_postdata();
}
