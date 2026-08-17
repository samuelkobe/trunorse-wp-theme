			<!-- footer -->
			<footer class="bg-tertiary-light" role="contentinfo">

				<div class="container mx-auto">

					<div class="flex flex-row flex-wrap items-center justify-between py-16 lg:py-32">
						<div class="flex flex-col w-full lg:w-2/5 px-8 sm:px-4 lg:px-0 pb-16 lg:pb-0">
							<a href="<?php echo home_url(); ?>" class="flex items-start mb-5">
								<?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
									<img src="<?php the_field( 'footer_logo', 'option' ); ?>" alt="<?php bloginfo('name'); ?>" class="h-12 pr-2" loading="lazy" />
								<?php endif ?>
								<div class="flex flex-col items-left pl-3">
									<h2 class="text-white text-2xl font-bold leading-less"><?php bloginfo('name'); ?></h2>
									<p class="block text-white leading-more"><?php bloginfo('description'); ?></p>
								</div>
							</a>
							<h3 class="text-secondary text-xl lg:text-2xl font-bold leading-relaxed max-w-full lg:max-w-md mb-10"><?php the_field( 'footer_content', 'option' ); ?></h3>
							<a class="button" href="/contact">Request Estimate</a>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 pb-8 md:pb-0 sm:px-4 lg:p-0">
							<h3 class="text-xl font-bold mb-4">Pages</h3>
							<?php html5blank_nav_footer(); ?>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 pb-8 md:pb-0 sm:px-4 lg:p-0">
							<h3 class="text-xl font-bold mb-4">Services</h3>
							<ul class="text-sm">
								<li class="mb-2">Custom Renovations</li>
								<li class="mb-2">Resorations</li>
								<li class="mb-2">New Construction</li>
								<li class="mb-2">Commercial</li>
							</ul>
						</div>

						<div class="flex flex-col w-full md:w-1/3 lg:w-1/5 text-secondary px-8 sm:px-4 lg:px-0">
							<h3 class="text-xl font-bold mb-4">Contact</h3>
							<ul class="text-sm">
								<li class="mb-2"><a class="hover:opacity-75 hover:transition-colors duration-250" href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>"><?php the_field( 'menu_phone_number_text', 'option' ); ?></a></li>
								<li class="mb-6"><a class="hover:opacity-75 hover:transition-colors duration-250" href="mailto:trunorse@Outlook.com">trunorse@Outlook.com</a></li>
								<li>V2P 5A3</li>
								<li>Chilliwack, British Columbia</li>
							</ul>
						</div>

					</div>
				</div>


				<!-- copyright -->
				<div class="flex flex-col md:flex-row items-start md:items-center justify-start md:justify-between w-full bg-tertiary text-sm text-secondary p-7">
					<p class="py-2 text-lg md:text-base">&copy; <?php echo date('Y'); ?> Trunorse Construction</p>
					<p class="py-2"> All Rights Reserved. <?php if ( get_field( 'copyright_text', 'option' ) ) { the_field( 'copyright_text', 'option' ); } ?>
						<span class="text-xs inline lg:block"><?php _e('Powered by', 'web-ok-starter'); ?> <a href="https://webok.ca" target="_blank" rel="noopener" class="text-xs hover:text-primary transition-colors duration-200">Web Ok Solutions Inc.</a></span>
					</p>
					<span class="text-lg md:text-base flex flex-row text-secondary items-center justify-start md:justify-between w-full md:w-fit py-2">
						<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/privacy">Privacy</a>
						<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/terms">Terms</a>
						<a class="hover:opacity-75 hover:transition-colors duration-250 pr-4" href="/cookies">Cookies</a>
					</span>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

		<!-- Hide reCAPTCHA badge -->
		<script>
			setTimeout(function() {
				var badge = document.querySelector('.grecaptcha-badge');
				if (badge) {
					badge.style.transition = 'transform 500ms ease-out';
					badge.style.transform = 'translateX(200px)';
				}
			}, 2500);
		</script>
		<style>
			html, body {
				overflow-x: hidden;
			}
		</style>

	</body>
</html>
