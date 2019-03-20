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

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php
		if (is_page(array('company-profile'))) {
			get_template_part('template-parts/page/page', 'company');
		} elseif (is_page(array('business-area', 'e-fly'))) {
			get_template_part('template-parts/page/page', 'e-fly');
		} elseif (is_page(array('uav'))) {
			get_template_part('template-parts/page/page', 'uav');
		} elseif (is_page(array('fly-smart-cloud'))) {
			get_template_part('template-parts/page/page', 'fly-smart-cloud');
		} elseif (is_page(array('about-us'))) {
			get_template_part('template-parts/page/page', 'about-us');
		} else { }
		?>

        <?php endwhile; ?>
        <?php endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
