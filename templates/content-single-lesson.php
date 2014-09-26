<?php
/**
 * The Template for displaying all single courses.
 *
 * @author 		codeBOX
 * @package 	lifterLMS/Templates
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div id="lesson-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="llms-summary">

		<?php

			do_action( 'lifterlms_single_lesson_summary' );

		?>

	</div>

</div>
