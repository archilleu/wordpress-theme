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

<section class="category-main">
    <div class="container">

        <div class="category-head">
            <img src="<?php echo esc_url( get_template_directory_uri()).'/img/category-head.jpg'; ?>" alt="">
        </div>

        <div class="row">
            <div class="col-md-3">
				<?php 
					$cat_name = '新闻动态';
					$cat_id = get_cat_ID( $cat_name );
					$categories = get_the_category();
					$cur_catetory = null;
					foreach($categories as $category) {
						if(get_category_children($category->term_id) == "") {
							$cur_catetory = $category->term_id;
						}
					}
				?>
                <div class="category-left">
                    <div class="title">
                        <?php $thiscat = get_category($cat_id); echo $thiscat ->name;?>
                    </div>

                    <?php if(get_category_children($cat_id) != "") {
						echo '<div class="sub-category">';
						echo get_category_by_id($cat_id, "second-category");
						echo '</div>';
					}?>
                </div>
            </div>

            <div class="col-md-9 category-content">
                <div class="col-md-12 title-nav">
                    <?php get_category_route($cur_catetory); ?>
                </div>
                <div class="col-md-12">
                    <?php
						if ( have_posts() ) {

							// Load posts loop.
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content/content', 'single');
							}

						} else {
							// If no content, include the "No posts found" template.
							get_template_part( 'template-parts/content/content', 'none' );
						}
				?>
                </div>
            </div>

        </div>

    </div>
</section><!-- .content-area -->

<?php
get_footer();