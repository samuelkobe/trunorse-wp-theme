<?php if ( have_rows( 'hero_banner' ) ) : ?>
  <?php while ( have_rows( 'hero_banner' ) ) : the_row(); ?>
<div class="flex items-end justify-center mx-auto h-80 md:h-112">

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
      </div>

</div>

<div class="w-full relative flex flex-col lg:flex-row lg:items-end lg:justify-between text-secondary z-2">

  <div class="flex items-start justify-start lg:justify-end w-full pl-8 sm:pl-16 lg:pl-0 lg:w-1/2 xl:w-2/5 mb-8 xl:mb-16">
    <div class="flex flex-col w-112 pr-16">
      <h2 class="text-tertiary text-xl lg:text-2.5xl xl:text-3xl font-bold w-full pt-8"><?php the_sub_field( 'hero_banner_statement' ); ?></h2>
      <div class="bg-tertiary h-1 w-24 mt-8"></div>
    </div>
  </div>

  <div class="w-full lg:w-1/2 xl:w-3/5">
    <p class="text-lg lg:text-xl xl:text-2xl leading-normal p-8 sm:p-16 xl:p-32 md:py-12 bg-primary-light text-primary lg:-mt-16"><span class="max-w-2xl block"><?php the_sub_field( 'hero_banner_page_description' ); ?></span></p>
  </div>

</div>

<?php endwhile; ?>
<?php endif; ?>
