<div class="flex items-end justify-center mx-auto h-80 md:h-112">
  <?php if ( have_rows( 'hero_banner' ) ) : ?>
  	<?php while ( have_rows( 'hero_banner' ) ) : the_row(); ?>

      <div class="absolute z-0 top-0 left-0 h-auto w-full">
        <?php if ( get_sub_field( 'hero_banner_image' ) ) : ?>
          <img src="<?php the_sub_field( 'hero_banner_image' ); ?>" alt="<?php the_title(); ?> image" class="max-h-full h-80 md:h-112 object-cover w-full" />
        <?php endif ?>
        <div class="absolute bg-tan opacity-50 top-0 left-0 w-full h-full"></div>
      </div>

      <div class="w-full relative flex flex-col lg:flex-row lg:items-end lg:justify-between text-secondary z-2">

        <div class="flex items-center justify-start lg:justify-around w-full pl-8 sm:pl-16 lg:pl-0 lg:w-1/2 mb-8 lg:mb-20">
          <h1 class="text-4xl md:text-6xl font-bold"><?php the_title(); ?></h1>
        </div>

        <div class="w-full lg:w-1/2 bg-primary-light text-primary">
          <p class="text-lg md:text-2.5xl leading-normal font-bold px-8 sm:px-16 py-8 xl:px-32 md:py-12"><?php the_sub_field( 'hero_banner_page_description' ); ?></p>
        </div>

      </div>

    <?php endwhile; ?>
  <?php endif; ?>
</div>
