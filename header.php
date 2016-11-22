<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="<?php echo get_theme_root_uri(); ?>/Alberca/css/animate.css" rel="stylesheet">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="alberca" ng-controller="InitialController" style="background-image:url({{albercaDatos.image_bg}});">
<div id="page" class="site">
	<div class="site-inner">

		<header id="masthead" class="site-header" role="banner">

				<nav class="menu">
					<div class="containerHamb">
						<div id="nav-icon2" class="hamburguer">
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
						</div>
					</div>

					<h1>{{albercaDatos.titulo}}</h1>
					<?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'menu_principal') ) ?>

					<h4 class="info telefono">Tlf: (+34) {{albercaDatos.telefono}}</h4>
					<h4 class="info"><a href="#/">www.albercacordoba.com</a></h4>
					<p class="info">Todos los derechos reservados</p>
				</nav>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
