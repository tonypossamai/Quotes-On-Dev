<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">

					<div class="logo">
					
						<h1 class="site-title screen-reader-text"></h1>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"rel="home"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/qod-logo.svg"></a>
						
					</div>

				</div><!-- .site-branding -->


			</header><!-- #masthead -->

			<div id="content" class="site-content">
