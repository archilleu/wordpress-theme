<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-business-area">
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>
        <div class="container-fluid banner" style="background-image:url(<?php echo $thumb ?>)">
        </div>

        <div class="container">
            <div class="entry-content row">
                <?php the_content(); ?>
			</div><!-- .entry-content -->

        </div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} --> 