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

    <div class="page-fly-smart-cloud">
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
                        <div>Flight Service System</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        低空飞行服务智能云（简称“飞服智能云”）是按照统一服务标准、统一服务模式为通用航空用户提供通信、监视、情报、气象等综合服务，提高通航用户运行效率，满足通用航空的服务要求，为通用航空行业提供全方位服务的智能云平台。包括目视航图、飞行计划、情报信息、气象服务、飞行监视、数据统计、信息管理等功能。
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        核心应用
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/fly-smart-cloud_01.jpg'; ?>" alt="">
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/fly-smart-cloud_02.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        需求背景
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/fly-smart-cloud_03.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        成功案例
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/fly-smart-cloud_04.jpg'; ?>" alt="">
                    </div>
                </div>
            </div><!-- .entry-content -->

        </div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} --> 