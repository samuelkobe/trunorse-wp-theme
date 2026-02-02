<?php /* Template Name: Projects Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-24">
			<?php get_template_part('components/_projects'); ?>
		</section>

		<section class="bg-primary-light text-primary p-4">
			<?php get_template_part('components/_estimate-cta-bar'); ?>
		</section>

	</main>

<?php get_footer(); ?>
