<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.jpg" />

<!-- Template CSS Files
================================================== -->
<!-- Twitter Bootstrs CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css" rel="stylesheet">
<!-- Ionicons Fonts Css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/ionicons.min.css">
<!-- animate css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/animate.css">
<!-- responsive css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/responsive.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">

	<header>

		<!--  网站导航栏，导航顺序按照录入后台顺序显示-->
		<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

		<!-- 首页增加轮播和客户定制 -->
		<?php if ( is_home()) : ?>
			<!-- 客户定制首页导航栏下面显示区域 -->
			<?php get_template_part( 'template-parts/header/header', 'custom' ); ?>

			<!-- bootstrap banner 轮播 -->
			<?php
				get_template_part( 'template-parts/header/site', 'banner' );
			?>
		<?php endif; ?>

	</header><!-- #masthead -->
