<?php
/**
 * Display a generic post
 *
 * @package Falcon
 */
?>

<article <?php post_class('lone-content'); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' === get_post_type() ) { ?>
            <div class="entry-meta"><?php falcon_posted_on(); ?></div>
        <?php } ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="pagination-wrapper">',
                'after'  => '</div>',
            ) );
        ?>
    </div>

    <!-- some neat post splitter here? -->
</article>
