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
					<i class="fa fa-top-feature fa-users fa-3x" aria-hidden="true"></i>
					</div>
					<div class="row-1-r">
					<i class="fa fa-top-feature fa-car fa-3x" aria-hidden="true"></i>

					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="m-2">
					<i class="fa fa-top-feature fa-key fa-3x" aria-hidden="true"></i>
					</div>
					<div class="m-2">
					<i class="fa fa-top-feature fa-money fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-center">
					<div class="row-3-l">
					<i class="fa fa-top-feature fa-calendar-check-o fa-3x" aria-hidden="true"></i>
					</div>
					<div class="row-3-r">
					<i class="fa fa-top-feature fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="d-flex align-items-center icon-row flex-row justify-content-around">
					<div class="p-2">
					<i class="fa fa-top-feature fa-check-square-o fa-3x" aria-hidden="true"></i>
					</div>

				</div>
			</div>


<!-- Begin Middle Section -->
<div class="container featured-tiles">
	<div class="row">
		<div class="col featured-text">
		Vic Jenkins Automotive in Gallatin, TN is a family owned and operated business. We've proudly served the Gallatin community since 1955. We're proud of our many repeat customers who count on Vic Jenkins Automotive for all of their automotive needs. Our modern, well equipped facilities offer customers the latest technology, no matter what make or model you own. We also offer rental cars to help you during extensive repairs.

		When you need to purchase a used car, we're ready to provide you the best experience, including a wide selection of quality used cars for sale and multiple financing options. Each of our vehicles is handpicked by our experts. We can also acquire almost any vehicle you need so if you don't see the used car you're looking for on our lot, let us know! We'll help you find it.

		We hope you'll let us help you with all of your automotive needs. Contact us at 615-452-3037 to become part of the Vic Jenkins Automotive family.
		</div>

	</div>
	<div class="row">
		<div class="col card box">
			<div class="card-body text-center">
				<i class="fa fa-2x fa-diamond" aria-hidden="true"></i>
				<h5 class="card-title">Specials</h5>
				<img src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/pngpix-com-mercedes-amg-gt-luxury-car-png-image@2x.png" class="card-img-top" alt="...">
			
			</div>
		</div>
		<div class="col card box">
			<div class="card-body text-center">
				<i class="fa fa-2x fa-car" aria-hidden="true"></i>
				<h5 class="card-title">Cars</h5>
				<img src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/purepng-com-lexuslexusluxury-vehicletoyotapremium-cars-1701527516008-knveo@2x.png" class="card-img-top" alt="...">
			
			</div>
		</div>
		<div class="col card box">
			<div class="card-body text-center">
				<i class="fa fa-2x fa-truck" aria-hidden="true"></i>
				<h5 class="card-title">Trucks</h5>
				<img src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/trucks-png@2x.png" class="card-img-top" alt="...">
			
			</div>
		</div>
	</div>
	
	<div class="d-flex justify-content-center" style="height: 200px">
		<div class="h-30">
			<button type="button" class="btn btn-danger browse-inventory rounded-pill">Browse Our Inventory</button>
			</div>

		</div>
	</div>
</div>

<!-- Begin Bottom Section -->
<div class="container">
	<div class="row card-row-top">
		<div class="col card">
			<div class="card-body card-left">
				<h5 class="card-title">Because Car Buying</h5>
				<h6 class="card-subtitle">
				Shouldnt Suck
				</h6>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
		<div class="col card">
			<div class="card-body card-right">
				<h5 class="card-title">Real-time Financins</h5>
				<h6 class="card-subtitle"> With No Middle Man
				</h6>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
	</div>
	<!-- Image In Center -->
	<div class="row justify-content-center">
		<div class="card">
			<img class="bottom-feature-img" src="/wp-content/themes/vicjenkins/inc/img/assets_pngs/layer-36.png">
		</div>	
	</div>
	<div class="row card-row-bottom">
		<div class="col card">
			<div class="card-body card-left">
				<h5 class="card-title">We Have One Standard</h5>
				<h6 class="card-subtitle"> The Highest
				</h6>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
		<div class="col card">
			<div class="card-body card-right">
				<h5 class="card-title">Online Means</h5>
				<h6 class="card-subtitle"> We Save You Money
				</h6>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
	</div>

</div>


<!-- Bottom Image Banner -->
<div class="d-flex bottom-container justify-content-center">
	<img class="bottom-banner" src="/wp-content/themes/vicjenkins/inc/img/assets-jpgs/auto-car-cold-376361.jpg" alt="">
</div>
			


<?php
get_footer();
