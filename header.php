<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>
<link rel="stylesheet" id="style-switch" href="http://localhost/mdblog/wp-content/themes/md-blog/assets/css/style.css?ver=3.0.4" media="all">

<?php wp_body_open(); ?>
<!-- Top alert START -->
<div class="alert alert-warning py-2 m-0 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
	<!-- SVG shape START -->
	<figure class="position-absolute top-50 start-50 translate-middle">
		<svg width="1848" height="481" viewBox="0 0 1848.9 481.8" xmlns="http://www.w3.org/2000/svg">
			<path class="fill-success" d="m779.4 251c-10.3-11.5-19.9-23.8-29.4-36.1-9-11.6-18.4-22.8-27.1-34.7-15.3-21.2-30.2-45.8-54.8-53.3-10.5-3.2-21.6-3.2-30.6 2.5-7.6 4.8-13 12.6-17.3 20.9-10.8 20.6-16.1 44.7-24.6 66.7-7.9 20.2-19.4 38.6-33.8 54.3-14.7 16.2-31.7 30-50.4 41-15.9 9.4-33.4 17.2-52 19.3-18.4 2-38-2.5-56.5-6.2-22.4-4.4-45.1-9.7-67.6-10.9-9.8-0.5-19.8-0.3-29.1 2.3-9.8 2.8-18.7 8.6-26.6 15.2-17.3 14.5-30.2 34.4-43.7 52.9-12.9 17.6-26.8 34.9-45.4 45.4-19.5 11-42.6 12.1-65 6.6-52.3-13.1-93.8-56.5-127.9-101.5-8.8-11.6-17.3-23.4-25.6-35.4-0.6-0.9-1.1-1.8-1.6-2.7-1.1-2.4-0.9-2.6 0.6-1.2 1 0.9 1.9 1.9 2.7 3 35.3 47.4 71.5 98.5 123.2 123.9 22.8 11.2 48.2 17.2 71.7 12.2 23-5 40.6-21.2 55.3-39.7 24.5-30.7 46.5-75.6 87.1-83 19.5-3.5 40.7 0.1 60.6 3.7 21.2 3.9 42.3 9.1 63.6 11.7 17.8 2.3 35.8-0.1 52.2-7 20-8.1 38.4-20.2 54.8-34.6 16.2-14.1 31-30.7 41.8-50.4 11.1-20.2 17-43.7 24.9-65.7 6.1-16.9 13.8-36.2 29.3-44.5 16.1-8.6 37.3-1.9 52.3 10.6 18.7 15.6 31.2 39.2 46.7 58.2"/>
			<path class="fill-warning" d="m1157.9 344.9c9.8 7.6 18.9 15.8 28.1 24 8.6 7.7 17.6 15.2 26 23.2 14.8 14.2 29.5 30.9 51.2 34.7 9.3 1.6 18.8 0.9 26.1-3.8 6.1-3.9 10.2-9.9 13.2-16.2 7.6-15.6 10.3-33.2 15.8-49.6 5.2-15.1 13.6-29 24.7-41.3 11.4-12.6 24.8-23.6 40-32.8 12.9-7.8 27.3-14.6 43.1-17.3 15.6-2.6 32.8-0.7 49 0.7 19.6 1.7 39.4 4 58.8 3.4 8.4-0.3 17-1.1 24.8-3.6 8.2-2.7 15.4-7.4 21.6-12.7 13.7-11.6 23.1-26.7 33.3-40.9 9.6-13.5 20.2-26.9 35.3-35.6 15.8-9.2 35.6-11.6 55.2-9.1 45.7 5.8 84.8 34.3 117.6 64.4 8.7 8 17.2 16.2 25.6 24.6 2.5 3.2 1.9 3-1.2 1-34.3-32-69.7-66.9-116.5-81.9-20.5-6.5-42.7-9.2-62.4-4-19.3 5.1-33.1 17.9-44.3 32.2-18.5 23.7-33.9 57.5-68.1 65.5-16.5 3.8-34.9 2.6-52.3 1.3-18.5-1.4-37-3.7-55.4-4.2-15.5-0.5-30.7 2.5-44.2 8.5-16.5 7.2-31.3 17.1-44.3 28.5-12.8 11.2-24.1 24.1-31.9 39-7.9 15.3-11.1 32.5-16.2 48.9-3.9 12.6-9 26.9-21.6 33.9-13.1 7.3-31.9 3.8-45.7-4.1-17.2-10-29.9-26.1-44.6-38.8"/>
			<path class="fill-warning" d="m1840.8 379c-8.8 40.3-167.8 79.9-300.2 45.3-42.5-11.1-91.4-32-138.7-11.6-38.7 16.7-55 66-90.8 67.4-25.1 1-48.6-20.3-58.1-39.8-31-63.3 50.7-179.9 155.7-208.1 50.4-13.5 97.3-3.2 116.1 1.6 36.3 9.3 328.6 87.4 316 145.2z"/>
			<path class="fill-success" d="M368.3,247.3C265.6,257.2,134,226,110.9,141.5C85,47.2,272.5-9.4,355.5-30.7s182.6-31.1,240.8-18.6    C677.6-31.8,671.5,53.9,627,102C582.6,150.2,470.9,237.5,368.3,247.3z"/>
		</svg>
	</figure>
	<!-- SVG shape END -->
  <div class="position-relative">
  	<p class="text-white m-0">Unlimited download! Starting from just $15/m <a href="#" class="btn btn-xs btn-dark ms-3 mb-0">Grab now!</a></p>
  </div>
  <!-- Close button -->
  <button type="button" class="btn-close btn-close-white opacity-9 p-3" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<!-- Top alert END -->

<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header justify-content-end">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column pt-0">
		<div>
			<img class="light-mode-item my-3" src="assets/images/logo.svg" alt="logo">
			<img class="dark-mode-item my-3" src="assets/images/logo-light.svg" alt="logo">
			<p>The next-generation blog, news, and magazine theme for you to start sharing your stories today! </p>
			<!-- Nav START -->
			<ul class="nav d-block flex-column my-4">
				<li class="nav-item">
					<a href="index.html" class="nav-link h5">Home</a>
				<li class="nav-item">
					<a class="nav-link h5" href="about-us.html">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="post-grid.html">Our Journal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="contact-us.html">Contact Us</a>
				</li>
			</ul>
			<!-- Nav END -->
			<div class="bg-primary-soft p-4 mb-4 text-center w-100 rounded">
				<span>The Blogzine</span>
				<h3>Save on Premium Membership</h3>
				<p>Get the insights report trusted by experts around the globe. Become a Member Today!</p>
				<a href="#" class="btn btn-warning">View pricing plans</a>
			</div>
		</div>
		<div class="mt-auto pb-3">
			<!-- Address -->
			<p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
			<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
			<p class="mb-2">Call: <a href="#" class="text-body"><u>469-537-2410</u> (Toll-free)</a> </p>
			<a href="#" class="text-body d-block">hello@blogzine.com</a>
		</div>
  </div>
</div>
<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<div class="navbar-top d-none d-lg-block small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- Top bar left -->
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link ps-0" href="about-us.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Buy now!</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signin.html">Login / Join</a>
					</li>
				</ul>
				<!-- Top bar right -->
				<div class="d-flex align-items-center">
					<!-- Font size accessibility START -->
					<div class="btn-group me-2" role="group" aria-label="font size changer">
						<input type="radio" class="btn-check" name="fntradio" id="font-sm">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-lg">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
					</div>

					<!-- Dark mode switch -->
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>

					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>

	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img class="navbar-brand-item light-mode-item" src="<?php echo esc_url( $header_logo ); ?>" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="<?php echo esc_url( $header_logo ); ?>" alt="logo">	
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php 	wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav navbar-nav-scroll mx-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						); ?>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
					<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
						<?php if ( '1' === $search_enabled ) :
					?>
					 <form class="input-group">
					 <input type="text" name="s" class="form-control border-success" placeholder="<?php esc_attr_e( 'Search', 'md-blog' ); ?>" title="<?php esc_attr_e( 'Search', 'md-blog' ); ?>" />
									<button type="submit" name="submit" class="btn btn-success m-0"><?php esc_html_e( 'Search', 'md-blog' ); ?></button>
					   
					  </form>
					<?php
						endif;
					?>
					 
					</div>
				</div>
				<!-- Offcanvas menu toggler -->
				<div class="nav-item">
					<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
						<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
					</a>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<div id="wrapper">


	<main id="main" class="container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
	