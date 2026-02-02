<?php if ( have_rows( 'services' ) ) : ?>
	<?php while ( have_rows( 'services' ) ) : the_row(); ?>

    <div class=" flex flex-col lg:flex-row items-center justify-center w-full relative text-secondary bg-tertiary-light z-2 service">

      <div class="flex items-center justify-start lg:justify-around w-full h-64 lg:h-112 xl:h-128 lg:w-1/2 service-image">
        <?php $service_image = get_sub_field( 'service_image' ); ?>
        <?php if ( $service_image ) : ?>
          <img class="object-cover min-h-full h-full w-full" src="<?php echo esc_url( $service_image['url'] ); ?>" alt="<?php echo esc_attr( $service_image['alt'] ); ?>" />
        <?php endif; ?>
      </div>

      <div class="w-full h-full lg:w-1/2 text-secondary p-16 xl:px-32">
        <h2 class="text-3xl xl:text-4xl font-bold leading-normal mb-4"><?php the_sub_field( 'service_title' ); ?></h2>
				<div class="bg-secondary h-1 w-12 mb-8"></div>
        <p class="text-base xl:text-lg font-normal leading-relaxed mb-12"><?php the_sub_field( 'service_description' ); ?></p>
				<a class="button" href="/contact">Request Estimate</a>
      </div>

    </div>
  <?php endwhile; ?>
<?php else : ?>
<?php // no rows found ?>
<?php endif; ?>
