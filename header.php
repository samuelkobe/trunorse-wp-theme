<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179337304-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-179337304-2');
		</script>


		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="keywords" content="<?php if ( have_rows( 'site_keywords', 'option' ) ) : ?><?php while ( have_rows( 'site_keywords', 'option' ) ) : the_row(); ?><?php the_sub_field( 'keywords' ); ?>, <?php endwhile; ?><?php else : ?>Keywords<?php endif; ?>" />
		<meta property="og:title" content="<?php the_field( 'open_graph_title', 'option' ); ?>" />
		<meta property="og:url" content="<?php the_field( 'open_graph_url', 'option' ); ?>" />
		<meta property="og:image" content="<?php if ( get_field( 'open_graph_image', 'option' ) ) { the_field( 'open_graph_image', 'option' ); } ?>" />

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- analytics -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<!-- ACF facicon settings -->
		<link href="<?php if ( get_field( 'site_favicon', 'option' ) ) { the_field( 'site_favicon', 'option' ); } ?>" rel="shortcut icon">
		<link href="<?php if ( get_field( 'site_apple_icon', 'option' ) ) { the_field( 'site_apple_icon', 'option' ); } ?>" rel="apple-touch-icon-precomposed">

		<script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		<?php wp_head(); ?>

				<style>
					.prev-button-override:after {
						-webkit-transform: rotate(180deg) !important;
						transform: rotate(180deg) !important;
					}
				</style>
	</head>
	<body <?php body_class(); ?>>


		<!-- wrapper -->
		<div id="app" class="wrapper bg-gray-900 ">

			<!-- header -->
			<header :class="[isOpen ? 'bg-white open-menu' : 'bg-transparent', {'scrolled' : !view.atTopOfPage}]" class="md:bg-transparent fixed w-full z-50" role="banner">
				<div class="container mx-auto md:flex md:justify-start md:items-center">

					<div class="flex items-center justify-between md:mr-auto px-4 py-8">

						<!-- logo -->
						<div class="flex">
							<a href="<?php echo home_url(); ?>" class="flex items-start">
								<?php if ( get_field( 'menu_logo', 'option' ) ) : ?>
									<img src="<?php the_field( 'menu_logo', 'option' ); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 lg:h-16" />
								<?php endif ?>
								<div class="flex flex-col items-left pl-3">
									<h1 :class="isOpen ? 'text-tertiary' : 'text-white'" class="max-w-logo lg:max-w-none md:text-white text-base lg:text-2xl font-bold -my-1 leading-snug lg:my-0 lg:leading-less"><?php bloginfo('name'); ?></h1>
									<p class="hidden lg:block lg:text-white leading-more"><?php bloginfo('description'); ?></p>
								</div>
							</a>
						</div>
						<!-- /logo -->

						<div class="block md:hidden">
							<button @click="isOpen = !isOpen" type="button" name="hamburger-menu" aria-label="Toggle navigation menu" :aria-expanded="isOpen ? 'true' : 'false'" :class="isOpen ? 'text-tertiary' : 'text-white'"  class="hamburger text-white focus:outline-none">
								<svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
									<path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
									<path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H12a1 1 0 0 1 0-2z"/>
								</svg>
							</button>
						</div>

					</div>

					<div :class="isOpen ? 'flex h-screen' : 'hidden h-auto'" class="flex-col md:h-auto md:flex md:flex-row">

						<div class="md:h-auto md:flex md:flex-col justify-start md:justify-center pl-16 md:pl-0">
							<!-- nav -->
							<nav :class="isOpen ? 'text-tertiary' : 'text-white'" class="md:flex text-24 md:text-white" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div>

						<div :class="isOpen ? 'block' : 'hidden'" class="px-4 md:block mt-8 md:mt-0 ml-12 md:ml-0">
							<a href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>" class="button flex flex-row items-center justify-center text-sm font-bold whitespace-no-wrap" aria-label="Call us at <?php the_field( 'menu_phone_number_text', 'option' ); ?>">
								<svg class="h-4 w-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
									<path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/>
								</svg>
								<?php the_field( 'menu_phone_number_text', 'option' ); ?>
							</a>
						</div>

					</div>


				</div>
			</header>
			<!-- /header -->
