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

<div class="category-news-trends">
    <div class="banner">
    </div>

    <div class="container">
        <div class="row">
            <div class="title-nav col-md-12">
                <?php get_category_route(get_category_root_id($cat)); ?>
            </div>
        </div>

        <div class="row">
            <div class="title col-md-12">
                <?php
                    $cat1 = get_category_by_slug("technology-information");
                    $cat2 = get_category_by_slug("activity-information");
                    $class1 = "title-item";
                    $class2 = "title-item";
                    if (in_category(array('technology-information'))) {
                        $class1 = $class1." active";
                    }
                    if (in_category(array('activity-information'))) {
                        $class2 = $class2." active";
                    }
                ?>
                <div class="<?php echo $class1 ?>"><a href="<?php echo get_category_link( $cat1->term_id);?>"><?php echo $cat1->name ?></a></div>
                <div class="<?php echo $class2 ?>"><a href="<?php echo get_category_link( $cat2->term_id);?>"><?php echo $cat2->name ?></a></div>
            </div>
        </div>

        <div class="content">
            <?php
            if (have_posts()) {
                // Load posts loop.
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content/content', 'news');
                }
            } else {
                // If no content, include the "No posts found" template.
                get_template_part('template-parts/content/content', 'none');
            }
            ?>
        </div>
    </div>
</div> 