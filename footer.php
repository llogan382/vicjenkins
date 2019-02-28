<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
				Help
					<nav class="navbar navbar-expand-md navbar-dark" role="navigation">
					<div class="container footer-menu-container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
							<?php
							wp_nav_menu( array(
								'theme_location'    => 'footer-help',
								'depth'             => 1,
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
				</div>
				<div class="col">
					Service
				
					<nav class="navbar navbar-expand-md navbar-dark" role="navigation">
					<div class="container footer-menu-container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
							<?php
							wp_nav_menu( array(
								'theme_location'    => 'footer-help',
								'depth'             => 1,
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
				</div>

				<div class="col social-footer">
					Social Network
						<div class="row">
						<i class="fa fa-footer fa-2x fa-facebook-official" aria-hidden="true"></i>
						</div>

						<div class="row">
						<i class="fa fa-footer fa-2x fa-facebook-official" aria-hidden="true"></i>
						</div>
						<div class="row">
						<i class="fa fa-footer fa-2x fa-facebook-official" aria-hidden="true"></i>
						</div>
				</div>

			</div>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
