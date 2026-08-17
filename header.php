<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

			<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5JCSKNJC');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Meta tags (description, keywords, og:*) are now handled by SEOPress -->
		<!-- Title tag is handled by WordPress via add_theme_support('title-tag') and SEOPress -->

		<!-- ACF facicon settings -->
		<link href="<?php if ( get_field( 'site_favicon', 'option' ) ) { the_field( 'site_favicon', 'option' ); } ?>" rel="shortcut icon">
		<link href="<?php if ( get_field( 'site_apple_icon', 'option' ) ) { the_field( 'site_apple_icon', 'option' ); } ?>" rel="apple-touch-icon-precomposed">

		<script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
		<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

		<!-- Preconnect to Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<!-- Google Fonts - loaded async to avoid render-blocking -->
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Open+Sans:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Open+Sans:wght@300;400;600;700&display=swap"></noscript>

		<!-- Preload Swiper CSS to reduce render-blocking -->
		<link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"></noscript>

		<!-- Preload LCP image (hero) on homepage -->
		<?php if ( is_front_page() && get_field( 'hero_background_image' ) ) : ?>
			<link rel="preload" href="<?php the_field( 'hero_background_image' ); ?>" as="image" fetchpriority="high">
		<?php endif; ?>

		<?php wp_head(); ?>

				<style>
					.prev-button-override:after {
						-webkit-transform: rotate(180deg) !important;
						transform: rotate(180deg) !important;
					}
				</style>
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JCSKNJC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->


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
									<?php if ( is_front_page() ) : ?>
										<h1 :class="isOpen ? 'text-tertiary' : 'text-white'" class="max-w-logo lg:max-w-none md:text-white text-base lg:text-2xl font-bold -my-1 leading-snug lg:my-0 lg:leading-less"><?php bloginfo('name'); ?></h1>
									<?php else : ?>
										<p :class="isOpen ? 'text-tertiary' : 'text-white'" class="max-w-logo lg:max-w-none md:text-white text-base lg:text-2xl font-bold -my-1 leading-snug lg:my-0 lg:leading-less"><?php bloginfo('name'); ?></p>
									<?php endif; ?>
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
