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

<section class="category-main">
    <div class="container">

        <div class="category-head">
            <img src="<?php echo esc_url( get_template_directory_uri()).'/img/category-head.jpg'; ?>" alt="">
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="category-left">
                    <div class="title">
                        <?php $thiscat = get_category($cat); echo $thiscat ->name;?>
                    </div>

                    <?php if(get_category_children($cat)!=""){
						echo '<div class="sub-category">';
						echo get_category_by_id($cat, "second-category");
						echo '</div>';
					}?>
                </div>
            </div>

            <div class="col-md-9 category-content">
                <div class="col-md-12 title-nav">
                    <?php get_category_route($cat); ?>
                </div>
                <div class="col-md-12">
                    <?php
					if(in_category(array( 'company-profile')))
					{
						// Load posts loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/category/category', 'company' );
							break;
						}
					} elseif(in_category(array( 'contact-us'))) {
						// Load posts loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/category/category', 'contact-us' );
							break;
						}

					}else {
						if ( have_posts() ) {

							// Load posts loop.
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content/content', 'excerpt' );
							}

						} else {
							// If no content, include the "No posts found" template.
							get_template_part( 'template-parts/content/content', 'none' );
						}
					}
				?>
                </div>
            </div>

        </div>

    </div>
</section><!-- .content-area -->

<?php
get_footer();