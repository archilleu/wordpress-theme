<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <div class="title">
            <?php the_title(); ?>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div><!-- .entry-content -->

</article><!-- #post-${ID} -->