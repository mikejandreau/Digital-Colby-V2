<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class('site'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'dcv2' ); ?></a>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top site-header" id="mainNav">
    <div class="container">

    <?php 
      // These fields are controlled using the theme options located in Appearance -> Theme Options
      if ($logo = get_option('dcv2_options')['dcv2-logo']) { 
        echo '<a class="navbar-brand js-scroll-trigger p-0" href="#page-top" rel="home"><img src="' . $logo . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
      } else {
        echo '<a class="navbar-brand js-scroll-trigger" href="#page-top" rel="home">' . get_bloginfo( 'name' ) . '</a>';
      }
    ?>

    <?php /* <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> // navbar brand if we change to a multi-page structure  */ ?>

    <?php /*
    <a class="navbar-brand js-scroll-trigger" href="#page-top" rel="home"><?php bloginfo( 'name' ); ?></a>  navbar brand set to target #page-top anchor while we're using a one-page-site structure */ ?>

    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <?php
    wp_nav_menu([
      'menu'            => 'top',
      'theme_location'  => 'menu-1',
      'container'       => 'div',
      'container_id'    => 'navbarResponsive',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => 'primary-menu',
      'menu_class'      => 'navbar-nav ml-auto',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
    ?>
  </div>
</nav>
  
  <div class="site-content">
