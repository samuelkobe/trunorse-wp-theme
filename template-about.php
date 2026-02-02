<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner-about'); ?>
		</section>

		<section class="bg-secondary p-8 lg:p-16 xl:p-24 xl:pt-20">
			<?php get_template_part('components/_about-info'); ?>
		</section>

		<section class="bg-tertiary-bright p-8 lg:p-16 xl:p-40">
			<?php get_template_part('components/_steps'); ?>
		</section>

		<section class="bg-secondary p-8 lg:p-16 lg:py-24">
			<?php get_template_part('components/_mission'); ?>
		</section>

		<section class="bg-lightest-gray p-8 lg:pb-12 lg:pt-20">
			<?php get_template_part('components/_accolade'); ?>
		</section>

		<section class="bg-primary-light text-primary">
			<?php get_template_part('components/_region'); ?>
		</section>

		<?php if ( get_field( 'team_section_toggle' ) == 1 ) : ?>
			<section class="bg-lightest-gray lg:bg-secondary relative text-tertiary p-8 sm:p-16 lg:p-32">
				<?php get_template_part('components/_team'); ?>
				<div class="invisible lg:visible absolute bottom-0 left-0 bg-lightest-gray w-full h-1/2"></div>
			</section>
		<?php else : ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
