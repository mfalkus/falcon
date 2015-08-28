<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Falcon-scaffold
 */

?>

<article <?php post_class('lone-half'); ?> id="post-<?php the_ID(); ?>">
    <?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'falcon-scaffold' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'falcon-scaffold' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

