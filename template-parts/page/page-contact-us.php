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

    <div class="page-contact-us">
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>
        <div class="container-fluid banner" style="background-image:url(<?php echo $thumb ?>)">
        </div>

        <div class="container">
            <div class="title">
                <span>首页</span>
                <span class="glyphicon glyphicon-menu-right"></span>
                <?php the_title(sprintf('<span><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></span>'); ?>
            </div>

            <div class="entry-content row">
                <div class="col-md-12" style="display: flex;flex-direction: column;align-items: center;">
                    <?php the_content(); ?>
                </div>
            </div><!-- .entry-content -->

        </div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} --> 