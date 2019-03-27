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

    <div class="page-smart-glasses">
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
                        <div>Smart Glasses</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        浩亚公司提供第一视角的视频、音频、图片、文字直播，并嵌入语音识别、手势识别、增强实现(AR)等创新交互方式，随时随地洞悉现场。借助大数据和深度学习技术，智能分析沉淀数据，形成知识库。为用户提供远程运维支持的整体解决方案
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/smart-glasses2.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        现状及存在的问题
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/smart-glasses3.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        智能眼镜应用特点
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/smart-glasses4.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        智能眼镜-硬件部分
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/smart-glasses5.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        智能眼镜-解决方案架构
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/smart-glasses1.jpg'; ?>" alt="">
                    </div>
                </div>

            </div><!-- .entry-content -->
        </div>

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>

</article><!-- #post-${ID} --> 