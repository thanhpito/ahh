<?php
/**
 * Poll settings template part
 *
 * @package snax 1.11
 * @subpackage Forms
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$snax_reveal_correct_wrong_answers 	= snax_get_poll_setting( 'reveal_correct_wrong_answers' );
$snax_one_question_per_page 		= snax_get_poll_setting( 'one_question_per_page' );
$snax_shuffle_questions 			= snax_get_poll_setting( 'shuffle_questions' );
$snax_questions_per_poll 			= snax_get_poll_setting( 'questions_per_poll' );
$snax_shuffle_answers 				= snax_get_poll_setting( 'shuffle_answers' );
$snax_share_results 				= snax_get_poll_setting( 'share_results' );
$snax_share_to_unlock 				= snax_get_poll_setting( 'share_to_unlock' );
?>

<table class="form-table">
	<tbody>
		<!-- Reveal results -->
		<tr>
			<th>
				<label for="snax_reveal_correct_wrong_answers">
					<?php esc_html_e( 'Reveal results', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_reveal_correct_wrong_answers" name="snax_reveal_correct_wrong_answers">
					<option value="immediately"<?php selected( $snax_reveal_correct_wrong_answers, 'immediately' ); ?>><?php esc_html_e( 'right after user answers a question', 'snax' ); ?></option>
					<option value="poll-end"<?php selected( $snax_reveal_correct_wrong_answers, 'poll-end' ); ?>><?php esc_html_e( 'at the end of the poll', 'snax' ); ?></option>
				</select>
			</td>
		</tr>
		<!-- One question per page? -->
		<tr>
			<th>
				<label for="snax_one_question_per_page">
					<?php esc_html_e( 'One question per page?', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_one_question_per_page" name="snax_one_question_per_page">
					<option value="standard"<?php selected( $snax_one_question_per_page, 'standard' ); ?>><?php esc_html_e( 'yes', 'snax' ); ?></option>
					<option value="none"<?php selected( $snax_one_question_per_page, 'none' ); ?>><?php esc_html_e( 'no', 'snax' ); ?></option>
				</select>
			</td>
		</tr>

		<!-- Shuffle questions? -->
		<tr>
			<th>
				<label for="snax_shuffle_questions">
					<?php esc_html_e( 'Shuffle questions?', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_shuffle_questions" name="snax_shuffle_questions">
					<option value="standard"<?php selected( $snax_shuffle_questions, 'standard' ); ?>><?php esc_html_e( 'yes', 'snax' ); ?></option>
					<option value="none"<?php selected( $snax_shuffle_questions, 'none' ); ?>><?php esc_html_e( 'no', 'snax' ); ?></option>
				</select>
			</td>
		</tr>

		<!-- Questions per poll -->
		<tr>
			<th>
				<label for="snax_questions_per_poll">
					<?php esc_html_e( 'Questions per poll', 'snax' ); ?>
				</label>
			</th>
			<td>
				<input type="number" id="snax_questions_per_poll" name="snax_questions_per_poll" value="<?php echo esc_attr( $snax_questions_per_poll ); ?>" placeholder="<?php esc_attr_e( 'Leave empty to show all available questions', 'snax' ); ?>" />
				<span class="description"><?php esc_html_e( 'works only with "Shuffle questions" options enabled', 'snax' ); ?></span>
			</td>
		</tr>


		<!-- Shuffle answers? -->
		<tr>
			<th>
				<label for="snax_shuffle_answers">
					<?php esc_html_e( 'Shuffle answers?', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_shuffle_answers" name="snax_shuffle_answers">
					<option value="standard"<?php selected( $snax_shuffle_answers, 'standard' ); ?>><?php esc_html_e( 'yes', 'snax' ); ?></option>
					<option value="none"<?php selected( $snax_shuffle_answers, 'none' ); ?>><?php esc_html_e( 'no', 'snax' ); ?></option>
				</select>
			</td>
		</tr>

		<!-- Share results -->
		<tr>
			<th>
				<label for="snax_share_results">
					<?php esc_html_e( 'Allow users to share results?', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_share_results" name="snax_share_results">
					<option value="standard"<?php selected( $snax_share_results, 'standard' ); ?>><?php esc_html_e( 'yes', 'snax' ); ?></option>
					<option value="none"<?php selected( $snax_share_results, 'none' ); ?>><?php esc_html_e( 'no', 'snax' ); ?></option>
				</select>
			</td>
		</tr>

		<!-- Share to unlock -->
		<tr>
			<th>
				<label for="snax_share_to_unlock">
					<?php esc_html_e( 'User have to share the poll to see results?', 'snax' ); ?>
				</label>
			</th>
			<td>
				<select id="snax_share_to_unlock" name="snax_share_to_unlock">
					<option value="standard"<?php selected( $snax_share_to_unlock, 'standard' ); ?>><?php esc_html_e( 'yes', 'snax' ); ?></option>
					<option value="none"<?php selected( $snax_share_to_unlock, 'none' ); ?>><?php esc_html_e( 'no', 'snax' ); ?></option>
				</select>
			</td>
		</tr>
	</tbody>
</table>


