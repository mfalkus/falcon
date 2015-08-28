<?php
/**
 * Displaying all pages since 2015...
 *
 * @package Falcon
 */

get_header(); ?>

	<div class="content-wrapper">
		<main class="main-site" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content-templates/content', 'page' ); ?>
        <?php endwhile; // End of the loop. ?>

		</main>
	</div>

<?php get_footer(); ?>
