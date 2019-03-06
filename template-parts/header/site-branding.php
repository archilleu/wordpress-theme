<?php
/**
 * Displays header site branding
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */
?>
<div class="container">
    <div class="site-branding row">

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

        <?php if ( has_nav_menu( 'nav-menu' ) ) : ?>
        <nav id="site-navigation" class="main-navigation col-md-offset-2 col-md-8"
            aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'nav-menu',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
        </nav><!-- #site-navigation -->
        <?php endif; ?>
        <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
        </nav><!-- .social-navigation -->
        <?php endif; ?>
    </div><!-- .site-branding -->
</div>