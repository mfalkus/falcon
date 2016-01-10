<?php
/**
 * As expected, the front page of our site
 *
 * @package Falcon
 */

get_header(); ?>

	<div class="content-wrapper">
        <div class="grid">
        <div class="grid__item one-whole">
            <div class="floating-blog-preview">
                <?php get_sidebar('home'); ?>
            </div>
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div id="content" role="main">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post -->
                </div><!-- #content -->
            <?php endwhile; // end of the loop. ?>
            <?php endif; ?>
        </div>
	</div>

<?php get_footer(); ?>
