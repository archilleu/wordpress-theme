<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" >
	<header class="entry-header">
			<?php
			the_title( '<h3 class="entry-title">', '</h3>' );

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
			?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="content">
			<?php echo the_content(); ?>
		</div>
		<div class="nav-back">
			<a id="return_a" href="javascript:history.go(-1);" class="l_link">&lt; 返回</a>
		</div>
	</div><!-- .entry-content -->
</article>
