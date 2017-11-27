<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


	<footer class="site-footer row">
		<div class="col-md-12 col-xs-12">
			<?php
			get_template_part( 'template-parts/footer/footer', 'widgets' );

			if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif;

			get_template_part( 'template-parts/footer/site', 'info' );
			?>
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>

</div><!-- div.container-->

<!-- Template Javascript Files
	================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/static/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/static/js/bootstrap.min.js"></script>
<!-- modernizr js -->
<script src="<?php echo get_template_directory_uri(); ?>/static/js/modernizr-2.6.2.min.js"></script>
<!-- wow js -->
<script src="<?php echo get_template_directory_uri(); ?>/static/js/wow.min.js"></script>

</body>
</html>
