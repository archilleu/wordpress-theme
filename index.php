<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="business-areas">
            <div class="business-title">
                <div class="container">
                    <div class="row">
                        <div>BUSINESS AREAS</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>业务领域</div>
                            <div>BUSINESS AREAS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="business-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <img src="./wp-content/themes/wordpress-theme/img/business-areas-1.png" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="./wp-content/themes/wordpress-theme/img/business-areas-2.png" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="./wp-content/themes/wordpress-theme/img/business-areas-3.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>更 多</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="about-title">
                <div class="container">
                    <div class="row">
                        <div>ABOUT US</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>关于我们</div>
                            <div>ABOUT US</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
								$id=84;
								$post = get_post($id);
								$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
							?>
                            <div class="col-md-6">
                                <img src="<?php echo $thumb ?>">
                            </div>
                            <div class="col-md-6 content">
                                <div><?php echo $post->post_content; ?><div>
                                        <div class="more">了解更多<span class="glyphicon glyphicon-plus"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news">
            <div class="news-title">
                <div class="container">
                    <div class="row">
                        <div>NEWS</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>新闻资讯</div>
                            <div>NEWS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4 item">
                                <?php
										$cat_name = '科技资讯';
										$cat_id = get_cat_ID( $cat_name );
										$args = array(
											'numberposts'      => 1,
											'category'         => $cat_id
										);
										$latest_posts = get_posts( $args );
										?>
                                <div class="category">
                                    <?php echo $cat_name; ?>
                                </div>
                                <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>
                                <div class="image">
                                    <?php the_post_thumbnail("medium");?>
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="excerpt">
                                        <?php the_excerpt(); ?>
									</div>
									<div class="meta">
										<span class="glyphicon glyphicon-time"></span><span class="time"><?php the_time('Y-m-d G:i:s')?></span>
										<a class="link" href="<?php ( the_permalink() ) ?>">阅读更多<span class="glyphicon glyphicon-menu-right"></span></a>
									</div>
                                </div>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </div>
                            <?php
										$cat_name = '活动资讯';
										$cat_id = get_cat_ID( $cat_name );
										$args = array(
											'numberposts'      => 2,
											'category'         => $cat_id
										);
										$latest_posts = get_posts( $args );
									?>
                            <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>
                            <div class="col-md-4 item">
                                <div class="category">
                                    <?php echo $cat_name; ?>
                                </div>
                                <div class="image">
                                    <?php the_post_thumbnail("medium");?>
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
									<div class="meta">
										<span class="glyphicon glyphicon-time"></span><span class="time"><?php the_time('Y-m-d G:i:s')?></span>
										<a class="link" href="<?php ( the_permalink() ) ?>">阅读更多<span class="glyphicon glyphicon-menu-right"></span></a>
									</div>
                                </div>
                            </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-md-12">
                            <div class="more">更多资讯</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();