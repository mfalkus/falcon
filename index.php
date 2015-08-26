<?php
/**
 * The most general of all template files
 *
 * @package Falcon
 */

get_header(); ?>

	<div class="content-wrapper">
		<main class="main-site" role="main">

		<?php if ( have_posts() ) : ?>
        <!-- coming soon -->
		<?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>
