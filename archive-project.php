<?php get_header(); ?>

	<main class="text-brand-dim bg-white" role="main">

		<section class="bg-secondary">
			<?php get_template_part('components/_hero-banner-option'); ?>
		</section>

		<section class="object-reveal bg-brand-bright">
			<div class="w-full flex flex-col px-6 lg:px-12 2xl:container 2xl:mx-auto relative">
                <?php get_template_part('loop-project'); ?>
                <?php get_template_part('pagination'); ?>
			</div>
		</section>

		<section class="bg-primary-light text-primary p-4">
			<?php get_template_part('components/_estimate-cta-bar-option'); ?>
		</section>

	</main>

<?php get_footer(); ?>