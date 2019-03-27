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

?>

<div class="category-human-resources">
    <div class="banner">
    </div>

    <div class="container">
        <div class="row">
            <div class="title-nav col-md-12">
                <?php get_category_route(get_category_root_id($cat)); ?>
            </div>
        </div>

        <div class="content">
            <?php
            if (have_posts()) {
                // Load posts loop.
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content/content', 'human-resources');
                }
            } else {
                // If no content, include the "No posts found" template.
                get_template_part('template-parts/content/content', 'none');
            }
            ?>
        </div>
    </div>
</div> 