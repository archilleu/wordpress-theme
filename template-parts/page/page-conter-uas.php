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

    <div class="page-conter-uas">
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
                        <div>Conter-UAS System</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/conter-uas2.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        应用场景
                    </div>
                    <div class="col-md-12">
                        主要是监狱、机场、科研中心、看守所、审讯室、法院、劳改队以及各类军事重地等禁止无人机拍摄的场所。
                    </div>
                    <div class="col-md-12">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/conter-uas3.jpg'; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 f-title">
                        产品介绍
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/conter-uas4.jpg'; ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>A:便携式浩亚LHD-1S进阶版</p>
                            <p>1.多频段混合式攻击，（GPS，2.4G,2.4G扩频，5.8G，5.8G扩频）</p>
                            <p>2.定向安全防卫距离600米，可攻可防</p>
                            <p>3.具有驱赶，强制迫降，原地返航功能</p>
                            <p>4.内置信号发射器</p>
                            <p>5.配置多功能瞄准镜可实时拍照，录制视频，激光测距，GPS定位，夜视功能，蓝牙连接，电子罗盘，红外线照明，WIFI连接实时视频操作功能</p>
                            <p>6.大容量锂电池，使用时间2-3小时</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/conter-uas1.jpg'; ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>B: 固定式浩亚LHD3/3P</p>
                            <p>1.多频段混合式攻击，（GPS，2.4G,2.4G扩频，5.8G，5.8G扩频）</p>
                            <p>2.全天侯工作，定向发射信号，垂直极化角度65度</p>
                            <p>3.水平360度旋转，40度俯仰调节（可自定义角度）</p>
                            <p>4.具有驱赶，强制迫降，原地返航功能</p>
                            <p>5.安全防卫距离2000米</p>
                            <p>6.防卫距离内未起飞的飞机不能起飞</p>
                            <p>7.可配置U浩飞地空锁进行网格式攻击，达到指点降落</p>
                            <p>8.配合地勤车快速反应，提高机动能力</p>
                            <p>9.可配合低空雷达对目标进行自动追踪防御</p>
                        </div>
                    </div>
                </div>

            </div><!-- .entry-content -->

            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
        </div>

</article><!-- #post-${ID} --> 