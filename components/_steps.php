<div class="container mx-auto">
	<?php if ( have_rows( 'our_process' ) ) : ?>
		<div class="flex flex-row flex-wrap items-start justify-center text-secondary">
      <?php $counter = 1; ?>
			<?php while ( have_rows( 'our_process' ) ) : the_row(); ?>
				<div class="flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-1/4 px-8 py-4 sm:px-4 lg:px-2 text-center">
          <?php $step_icon = get_sub_field( 'step_icon' ); ?>
          <?php if ( $step_icon ) : ?>
            <img class="w-16 h-16 mb-4" src="<?php echo esc_url( $step_icon['url'] ); ?>" alt="<?php echo esc_attr( $step_icon['alt'] ); ?>" />
          <?php endif; ?>
          <div class="flex flex-row">
            <span class="font-body font-bold text-lg pr-4"><?php echo $counter; ?>.</span>
            <p class="text-sm leading-mid font-light text-secondary text-left"><?php the_sub_field( 'step_description' ); ?></p>
          </div>
				</div>
        <?php $counter ++; ?>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</div>
