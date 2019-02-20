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
					<i class="fa fa-users fa-3x" aria-hidden="true"></i>
					</div>
					<div class="row-1-r">
					<i class="fa fa-car fa-3x" aria-hidden="true"></i>

					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="m-2">
					<i class="fa fa-key fa-3x" aria-hidden="true"></i>
					</div>
					<div class="m-2">
					<i class="fa fa-money fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-center">
					<div class="row-3-l">
					<i class="fa fa-calendar-check-o fa-3x" aria-hidden="true"></i>
					</div>
					<div class="row-3-r">
					<i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="p-2">
					<i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i>
					</div>

				</div>
			</div>
			<div class="featured-tiles">
				<div class="container">
					<div class="row">
						<div class="col">
							Narrow it Down By Lifestyle
						</div>

					</div>
					<div class="row">
						<div class="col">
						Box 1
						</div>
						<div class="col">
						Box 2
						</div>
						<div class="col">
							Box 3
						</div>

					</div>
					<div class="row">
						<div class="col">
								Check Our Inventory
						</div>

					</div>
				</div>


			</div>




<?php
get_footer();
