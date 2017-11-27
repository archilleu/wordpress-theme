<?php
/**
 * The category news template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<style>

.banner>img {
  width: 100%;
}

</style>

<div class="row">
<div class="banner col-md-12 col-xs-12">
  <img src="<?php echo get_template_directory_uri(); ?>/static/images/news/banner.jpg" alt="...">
</div>
</div>

<?php get_footer();
