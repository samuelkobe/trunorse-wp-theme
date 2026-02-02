<div class="flex flex-row flex-wrap">

  <div class="flex flex-col items-start lg:items-end w-full lg:w-1/2 xl:w-2/5 p-8 sm:p-16">

    <div class="w-full lg:w-112 max-w-full mb-10">
      <h2 class="text-3xl xl:text-4xl leading-normal font-bold mb-4">Region</h2>
      <p class="text-xl leading-relaxed font-light lg:max-w-xs"><?php the_field( 'regions_message', 'option' ); ?></p>
    </div>


    <div class="flex flex-row flex-wrap w-full lg:w-112 max-w-full">
      <?php if ( have_rows( 'regions', 'option' ) ) : ?>
      	<?php while ( have_rows( 'regions', 'option' ) ) : the_row(); ?>
      		<p class="text-xl leading-relaxed font-bold w-full sm:w-1/2"><?php the_sub_field( 'title' ); ?></p>
      	<?php endwhile; ?>
      <?php else : ?>
      	<?php // no rows found ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="w-full lg:w-1/2 xl:w-3/5 h-64 lg:h-auto bg-primary-light">
    <?php echo get_field( 'google_map_embed', 'option', false ); ?>
  </div>

</div>
