<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner'); ?>
		</section>

		<section class="bg-secondary pb-8 lg:pb-16">
			<?php get_template_part('components/_social-contact-form'); ?>
		</section>
		
		<section class="bg-secondary text-primary pb-8 lg:pb-16">
			<?php get_template_part('components/_reviews'); ?>
		</section>

		<section class="bg-primary-light text-primary">
			<?php get_template_part('components/_region'); ?>
		</section>

	</main>

<?php get_footer(); ?>
