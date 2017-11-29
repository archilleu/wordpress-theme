<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

includeLinkStyle(get_template_directory_uri().'/static/css/category.css');
get_header(); ?>

<div class="wrap">

	<header class="page-header">
		<h1><?php single_cat_title(); ?>
		<div class="title-desc"><?php echo category_description();?></div>
		</h1>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( 'post' === get_post_type() ) {
						echo '<div class="entry-meta">';
						echo '<span>发布于:</span>';
						the_date('Y-m-d', '<span>', '</span>');
						echo '<span>';
						the_time('G:i');
						echo '</span>';
						edit_post_link();
						echo '</div><!-- .entry-meta -->';
					};

					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					?>
				</header><!-- .entry-header -->

				<?php if ( '' !== get_the_post_thumbnail() ) : ?>
					<div class="post-thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						</a>
					</div><!-- .post-thumbnail -->
				<?php endif; ?>

				<div class="entry-content">
					<?php
					/* translators: %s: Name of current post */
					the_excerpt();

					?>
				</div><!-- .entry-content -->
				<div class="clearfix"></div>

				<?php
				if ( is_single() ) {
					twentyseventeen_entry_footer();
				}
				?>

				</article><!-- #post-## -->
			<?php endwhile; ?>

			<?php
			echo "<div class='pagination-center'>";
			the_posts_pagination(
				array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>')
			);
			echo "</div>";
			?>

		<?php else : ?>
			<div class='cotent-none'>没有相关内容</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
