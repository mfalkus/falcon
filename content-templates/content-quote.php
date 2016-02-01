<?php
/**
 * Template part for displaying quotes.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Falcon
 */

?>

<article <?php post_class('lone-content'); ?> id="post-<?php the_ID(); ?>">
    <?php
        // don't bother with a title for quotes...
        // the_title( ... ) usually goes here
    ?>

    <div class="entry-content">
        <div class="entry-meta"><?php falcon_posted_on(); ?></div>
        <?php
            // for quotes, always display in full
            the_content();
        ?>
    </div>

    <footer class="entry-footer">
        <div class="grid meta-row">
        <div class="grid__item one-half category-row">
            <span>Category:</span>
            <?php echo get_the_category_list(' '); ?>
        </div><!--
     --><div class="grid__item one-half tag-row">
            <?php if (get_the_tags()) { ?>
            <span>Tags:</span>
            <?php the_tags('', ' '); ?>
            <?php } ?>
        </div>
        </div>
    </footer>
</article>
