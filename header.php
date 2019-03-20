<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <header id="masthead1" class="site-header container-fluid">

            <div class="site-branding-container">
                <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
            </div><!-- .layout-wrap -->
        </header><!-- #masthead -->

        <header id="masthead2" class="site-header">
            <div class="site-carousel">
                <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
            </div><!-- .entry-header -->

        </header><!-- #masthead -->

        <div id="content" class="site-content">