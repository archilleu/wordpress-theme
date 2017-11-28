<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

get_header();

includeLinkStyle(get_template_directory_uri().'/static/css/single-cat-news.css');
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="title">
				<?php echo the_title(); ?>

			</div>
			<div class="date">
				<?php echo the_date(); ?>

			</div>
			<div class="content">
				<?php echo the_content(); ?>

			</div>
			<div class="nav-back">
				<a id="return_a" href="javascript:history.go(-1);" class="l_link">&lt; 返回</a>
			</div>
			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
