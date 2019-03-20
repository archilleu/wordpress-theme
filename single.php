<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hoya 
 * @subpackage hoya
 * @since 1.0.0
 */

get_header();
?>

<section class="category-single-main">
    <div class="banner">
    </div>

    <div class="container">
        <div class="row">
            <div class="title-nav col-md-12">
				<span>首页</span><span class="glyphicon glyphicon-menu-right"></span><?php the_category( '<span class="glyphicon glyphicon-menu-right"></span>' ); ?>
            </div>
		</div>

		<div class="row">
        <div class="col-md-12">
            <?php
			if (have_posts()) {

				// Load posts loop.
				while (have_posts()) {
					the_post();
					get_template_part('template-parts/content/content', 'single');
				}
			}
			?>
        </div>
        </div>
    </div>

</section><!-- .content-area -->

<?php
get_footer();
