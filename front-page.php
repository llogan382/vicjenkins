<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>


			<div class="header-img">
				<div class="d-flex align-items-center icon-row flex-row justify-content-between">
					<div class="row-1-l">
					<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<div class="row-1-r">
						icon
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="m-2">
						icon
					</div>
					<div class="m-2">
						icon
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-center">
					<div class="row-3-l">
						icon
					</div>
					<div class="row-3-r">
						icon
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="p-2">
						icon
					</div>

				</div>
			</div>




<?php
get_footer();
