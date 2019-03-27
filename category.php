<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoya 
 * @subpackage hoya
 * @since 1.0.0
 */

get_header();
?>

<?php
if (in_category(array('news-trends'))) {
    // Load posts loop.
    get_template_part('template-parts/category/category', 'news-trends');
} else if (in_category(array('human-resources'))) {
    // Load posts loop.
    get_template_part('template-parts/category/category', 'human-resources');
} else {
    if (have_posts()) {

        // Load posts loop.
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content/content', 'excerpt');
        }
    } else {
        // If no content, include the "No posts found" template.
        get_template_part('template-parts/content/content', 'none');
    }
}
?>

<?php
get_footer();
