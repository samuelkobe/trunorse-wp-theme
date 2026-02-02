<div class="container mx-auto">
	<?php if ( have_rows( 'accolades', 'option' ) ) : ?>
		<div class="flex flex-row flex-wrap items-start justify-center">
			<?php while ( have_rows( 'accolades', 'option' ) ) : the_row(); ?>
				<div class="flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-1/4 px-8 py-4 sm:px-4 lg:px-2 text-center">
					
					<?php if ( get_sub_field( 'icon_type' ) == 1 ) : ?>
						<div class="h-20 mb-4">
							<?php echo get_sub_field( 'accolade_icon_embed_bbb' ); ?>
						</div>
					<?php else : ?>
						<?php $accolade_icon = get_sub_field( 'accolade_icon' ); ?>
						<?php if ( $accolade_icon ) : ?>
							<img class="w-auto h-20 mb-4" src="<?php echo esc_url( $accolade_icon['url'] ); ?>" alt="<?php the_sub_field( 'accolade_title' ); ?> icon" loading="lazy" />
						<?php endif; ?>
					<?php endif; ?>
								
					<h4 class="text-xl lg:text-2xl leading-loose"><?php the_sub_field( 'accolade_title' ); ?></h4>
					<p class="text-sm leading-mid font-light text-light-gray"><?php the_sub_field( 'accolade_description' ); ?></p>

					<?php if ( get_sub_field( 'icon_type' ) == 1 ) : ?>
					<?php else : ?>
						<?php $accolade_link = get_sub_field( 'accolade_link' ); ?>
						<?php if ( $accolade_link ) : ?>
							<a class="py-2 block font-bold text-light-gray hover:text-primary hover:transition-colors duration-250" href="<?php echo esc_url( $accolade_link['url'] ); ?>" target="<?php echo esc_attr( $accolade_link['target'] ); ?>"><?php echo esc_html( $accolade_link['title'] ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</div>
