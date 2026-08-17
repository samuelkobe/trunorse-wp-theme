<div class="container mx-auto flex flex-col items-center justify-center h-64">
	<span class="text-xs uppercase mb-3 inline-block"><?php the_field( 'questions_cta_cta_subtitle' ); ?></span>
	<h3 class="text-2.5xl font-bold mb-10"><?php the_field( 'questions_cta_cta_title_message' ); ?></h3>
	<?php $cta_link = get_field( 'questions_cta_cta_link' ); ?>
	<?php if ( $cta_link ) : ?>
		<a class="button font-bold" href="<?php echo esc_url( $cta_link['url'] ); ?>" target="<?php echo esc_attr( $cta_link['target'] ); ?>"><?php echo esc_html( $cta_link['title'] ); ?></a>
	<?php endif; ?>
</div>
