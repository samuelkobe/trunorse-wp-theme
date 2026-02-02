<?php if ( have_rows( 'about_info' ) ) : ?>
	<div class="lg:container lg:mx-auto">
		<?php while ( have_rows( 'about_info' ) ) : the_row(); ?>
			<div class="flex flex-row flex-wrap">
				<p class="w-full lg:w-1/2 px-0 py-4 sm:px-8 text-base xl:text-xl leading-loose text-tertiary"><?php the_sub_field( 'about_info_p1' ); ?></p>
				<p class="w-full lg:w-1/2 px-0 py-4 sm:px-8 text-base xl:text-xl leading-loose text-tertiary"><?php the_sub_field( 'about_info_p2' ); ?></p>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
