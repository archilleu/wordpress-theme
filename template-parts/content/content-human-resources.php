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

    <div class="col-md-12">
        <div class="content">
            <div class="article-title">
                <div>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>
            </div>
            <div class="article-excerpt">
                <div>
                    <span>发布时间:</span><span class="time"><?php the_time('Y-m-d G:i:s') ?></span>
                </div>
                <a class="link" href="<?php (the_permalink()) ?>">[查看详情]</a>
            </div>
        </div>
    </div>
</article><!-- #post-${ID} --> 