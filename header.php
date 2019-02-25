<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<?php the_custom_logo();?>
				</div>
				<div class="col-3">
				<img src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/bbb-vicjenkins.png" alt="">
				</div>
				<div class="col-3">
					<a href="tel:1-615-452-3037">(615) 452-3037</a>
				</div>
				<div class="col-2">
					<span>Mon – Fri: 8:00AM – 5:00PM </span>
					<span>Sat-Sun: Closed</span>
				</div>
			</div>

		</div>

		<nav class="navbar navbar-expand-md navbar-light" role="navigation">
		<div class="container menu-container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
