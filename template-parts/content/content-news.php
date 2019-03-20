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

<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="col-md-3 img">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="col-md-9">
        <div class="content">
            <div class="article-title">
                <div>
                    <?php the_title(); ?>
                </div>
                <span class="time"><?php the_time('Y-m-d G:i:s') ?></span>
            </div>
            <div class="article-excerpt">
                <?php the_excerpt(); ?>
                <a class="link" href="<?php (the_permalink()) ?>">[了解更多]</a>
            </div>
        </div>
    </div>
</article><!-- #post-${ID} --> 