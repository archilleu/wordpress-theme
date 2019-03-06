<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="branding col-md-2">
                <div class="site-logo">
                    <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    没有设置logo
                    <?php endif; ?>
                </div>

                <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php $blog_info = get_bloginfo( 'name' ); ?>
                        <?php if ( ! empty( $blog_info ) ) : ?>
                        <?php bloginfo( 'description' ); ?>
                        <?php else : ?>
                        <?php echo '浩亚信息科技有限公司'; ?>
                        <?php endif; ?>
                </div>
            </div>

            <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
            <nav id="site-navigation" class="main-navigation col-md-8"
                aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
            </nav><!-- #site-navigation -->
            <?php endif; ?>
            <div class="wechat-QR col-md-2">
				<img src="">
				<?php
					$id = 80;
					$wechat = get_post($id);
					echo $wechat;
				?>
				<div>微信公众号</div>
            </div>

        </div>
        <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
    </div>
    <div class="copyright">
        版权所有：
        <?php $blog_info = get_bloginfo( 'name' ); ?>
        <?php if ( ! empty( $blog_info ) ) : ?>
        <?php bloginfo( 'description' ); ?>
        <?php else : ?>
        <?php echo '浩亚信息科技有限公司'; ?>
        <?php endif; ?>
        PC:510623
        地址：广州市天河区珠江西路17号19楼
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>