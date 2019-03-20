<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-uav">
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
                        <div>UAS Traffic Management</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
					无人机监管云（简称“无人机云”）是为无人机爱好者个人、无人机相关企业、无人机监管部门提供全方位服务的无人机云平台。是为无人机相关用户提供通信、监视、情报、气象等综合服务，提高无人机用户运行效率，满足对无人机的服务要求，为无人机行业提供全方位服务的智能云平台。包括无人机（飞手）管理、飞行计划、情报信息、气象服务、飞行监视、数据统计。
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<img src="<?php echo esc_url( get_template_directory_uri()).'/img/uav_01.jpg'; ?>" alt="">
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<div>系统应用</div>
						<div>一站可控多型无人机，对多型无人机远程指挥控制、状态监视、状态检测告警</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<img src="<?php echo esc_url( get_template_directory_uri()).'/img/uav_02.jpg'; ?>" alt="">
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                </div>
            </div><!-- .entry-content -->

        </div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} --> 