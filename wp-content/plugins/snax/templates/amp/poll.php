<?php
/**
 * Quiz template part
 *
 * @package snax 1.11
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}
?>

<?php
$snax_quiz_class = array(
	'quiz',
);
$snax_quiz_class[] = 'snax-quiz-amp';
?>

<div class="<?php echo implode( ' ', array_map( 'sanitize_html_class', $snax_quiz_class ) ); ?>">

	<p class="snax-quiz-actions">
		<a class="snax-amp-lets-play" href="<?php echo esc_attr( get_permalink( ) ); ?>">
			<?php esc_html_e( 'Take the poll', 'snax' ); ?>
		</a>
	</p>


</div><!-- .quiz -->
