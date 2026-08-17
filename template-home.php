<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">

		<section class="min-h-screen bg-secondary pb-8 lg:pb-24">
			<?php get_template_part('components/_hero'); ?>
		</section>

		<?php if ( get_field( 'home_slider_toggle' ) == 1 ) : ?>
			<section class="bg-secondary pb-8 lg:pb-24">
				<?php get_template_part('components/_slider'); ?>
			</section>
		<?php else : ?>

		<?php endif; ?>

		<section class="bg-secondary pb-8 lg:pb-12">
			<?php get_template_part('components/_accolade'); ?>
		</section>

		<section class="bg-primary-light text-primary p-4">
			<?php get_template_part('components/_question-cta-bar'); ?>
		</section>

		<section class="bg-secondary pb-0 lg:pb-4 overflow-x-hidden">
			<?php get_template_part('components/_testimonial'); ?>
		</section>

		<section class="bg-primary-light text-primary p-4">
			<?php get_template_part('components/_estimate-cta-bar'); ?>
		</section>


	</main>

<?php get_footer(); ?>
