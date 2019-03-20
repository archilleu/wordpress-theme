<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-e-fly">
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>
        <div class="container-fluid banner" style="background-image:url(<?php echo $thumb ?>)">
        </div>

        <div class="container">
            <div class="title">
                <span>首页</span><span class="glyphicon glyphicon-menu-right"></span>
                <span>业务领域</span><span class="glyphicon glyphicon-menu-right"></span>
                <?php the_title(sprintf('<span><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></span>'); ?>
            </div>

            <div class="entry-content">
                <div class="row">
                    <div class="col-md-12">
                        <div><?php echo the_title() ?></div>
                        <div>Electronic Flight Bag</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
						<img src="<?php echo esc_url( get_template_directory_uri()).'/img/e-fly_01.jpg'; ?>" alt="">
					</div>
                    <div class="col-md-6">
						E浩飞是为飞行人员提供全方位服务的在线/离线电子飞行包。和飞服智能云无缝衔接,是为飞行人员提供集通信、监视、情报、气象等手持端综合服务，提高飞行人员运行效率，满足飞行人员的服务要求，包括机场信息、目视航图、区图、气象服务、飞行计划、文档信息、画写工具、情报信息（空域、航线、飞行员、飞行器、设备）等功能。“电子飞行包”可以在线自动更新，可以离线使用，在线后可以补传数据。
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<img src="<?php echo esc_url( get_template_directory_uri()).'/img/e-fly_02.jpg'; ?>" alt="">
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<img src="<?php echo esc_url( get_template_directory_uri()).'/img/e-fly_03.jpg'; ?>" alt="">
					</div>
                </div>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
        </div>

</article><!-- #post-${ID} --> 