<?php
/**
 * The most general of all template files
 *
 * @package Falcon
 */

get_header(); ?>

    <div class="content-wrapper">
        <main class="main-site" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content-templates/content', get_post_format() ); ?>
        <?php endwhile; ?>

        </main>
        <?php the_posts_navigation(); ?>
    </div>

<?php get_footer(); ?>
