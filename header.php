<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Content_First
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'content-first' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="header-logo">
      <a href="<?php echo home_url(); ?>">
        <span>C</span><span>C</span><span>L</span><span>a</span><span>P</span>
      </a>
    </div>

    <div class="header-subtitle">
      CHICAGO CENTER FOR LITERATURE AND PHOTOGRAPHY
    </div>

    <div class="header-menu">
      <a class="header-menu__single-width" href="<?php echo get_page_link( get_page(3696) ); ?>">Archives</a>
      <a class="header-menu__double-width" href="<?php echo get_page_link( get_page(3698) ); ?>">Books & Merchandise</a>
      <a class="header-menu__single-width" href="<?php echo get_page_link( get_page(3700) ); ?>">Events</a>
      <a class="header-menu__single-width" href="<?php echo get_page_link( get_page(3702) ); ?>">Newsletter</a>
      <span class="header-menu__single-width"><?php get_search_form(); ?></span>
    </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
