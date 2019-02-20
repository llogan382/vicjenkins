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
					<div style="height: 200px" class="d-flex justify-content-center">
						<div class="h-30">
							Narrow it Down By Lifestyle
						</div>

					</div>
					<div class="row" style="height: 200px">
						<div class="box-left h-30 col text-center">
						Box 1
						</div>
						<div class="box-left h-30 col text-center">
						Box 2
						</div>
						<div class="box-left h-30 col text-center">
							Box 3
						</div>

					</div>
					<div class="d-flex justify-content-center" style="height: 200px">
						<div class="h-30">
							<button type="button" class="btn btn-danger browse-inventory rounded-pill">Browse Our Inventory</button>
						</div>

					</div>
				</div>


			</div>
			<div class="d-flex flex-row justify-content-around">
				<div class="p-2 bottom-feature bd-highlight">
					<h4>Title for Feature</h4>
					<p>Content for Feature</p>
				</div>
				<div class="p-2 bottom-feature bd-highlight">
					<h4>Title for Feature</h4>
					<p>Content for Feature</p>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<div>
					<img src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/layer-36.png" alt="">
				</div>
			</div>
			<div class="d-flex flex-row justify-content-around">
				<div class="p-2 bottom-feature bd-highlight">
					<h4>Title for Feature</h4>
					<p>Content for Feature</p>
				</div>
				<div class="p-2 bottom-feature bd-highlight">
					<h4>Title for Feature</h4>
					<p>Content for Feature</p>
				</div>
			</div>

			<div class="d-flex bottom-container justify-content-center">
			<img class="bottom-banner" src="/wp-content/themes/vicjenkins/inc/img/assets-jpgs/auto-car-cold-376361.jpg" alt="">
			</div>


<?php
get_footer();
