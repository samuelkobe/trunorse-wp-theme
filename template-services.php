<?php /* Template Name: Services Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-24">
			<?php get_template_part('components/_services'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-12">
			<?php get_template_part('components/_accolade'); ?>
		</section>

		<section class="bg-primary-light text-primary p-4">
			<?php get_template_part('components/_estimate-cta-bar'); ?>
		</section>

	</main>

<?php get_footer(); ?>
