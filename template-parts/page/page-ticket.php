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

    <div class="page-ticket">
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
                        <div>Haya Travel</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        好丫通航营销平台瞄准支撑通航企业“短途运输+空中旅游”的战略目标，为通航企业提供通航机票+旅游营销管理系统。通航公司上线后，首要关心的就是营销问题，卖什么、卖给谁、谁来卖、怎么卖。好丫通航营销平台提供了精准营销、产品管理、渠道管理、销售、订单管理等模块，为通航行业的打造一站式新型营销平台
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/page-ticket2.jpg'; ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/page-ticket3.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 f-title">核心应用</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/page-ticket1.jpg'; ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo esc_url(get_template_directory_uri()) . '/img/page-ticket4.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 f-title">客户价值</div>
                </div>
                <div class="row" style="margin-bottom:80px;">
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="item-title">
                                <span>营销能力</span>
                            </div>
                        </div>
                        <div class="col-md-12 item-content">
                            大数据营销平台进行潜在客户行为分析，用户群地域分析、年龄段、旅游时间段分析
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="item-title">
                                <span>渠道能力</span>
                            </div>
                        </div>
                        <div class="col-md-12 item-content">
                            统一库存管理，支持官方小程序销售，以及对接多个OTA销售
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="item-title">
                                <span>产品能力</span>
                            </div>
                        </div>
                        <div class="col-md-12 item-content">
                            通过系统销售丰富多样的产品，不但能销售机票，还提供各种打包产品的销售平台，不管是旅游航线、景点直升机、直升机直播，直升机婚纱摄影等，都可以通过它进行销售。强大的后台管理功能支持多种产品规则。灵活的退改签政策，支持多种优惠方案，学生票，亲子行等。高效退款流程，起飞前退款立即到账。
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="item-title">
                                <span>旅客服务能力</span>
                            </div>
                        </div>
                        <div class="col-md-12 item-content">
                            集成机场值机，登机
                        </div>
                    </div>

                </div>

            </div><!-- .entry-content -->

            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
        </div>

</article><!-- #post-${ID} --> 