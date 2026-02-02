
<div class="swiper-container swiper-testimonial flex flex-col items-center justify-center py-4">

  <h3 class="text-2xl lg:text-4xl font-bold mb-6 md:mb-12">What our clients are saying</h3>

  <div class="swiper-wrapper">
    <?php if ( have_rows( 'testimonials' ) ) : ?>
      <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
        <div class="swiper-slide h-auto flex items-center justify-center bg-secondary">
          <div class="lg:container flex flex-col text-center items-center justify-center mx-auto">
            <div class="max-w-3xl px-8 lg:px-0">
              <h4 class="text-xl lg:text-2xl font-bold mb-2 md:mb-6"><?php the_sub_field( 'testimonial_title' ); ?></h4>
              <p class="text-base font-medium leading-snug lg:leading-relaxed">“<?php the_sub_field( 'testimonial_paragraph' ); ?>”</p>
              <h5 class="text-lg lg:text-xl font-bold mt-8"><?php the_sub_field( 'testimonial_author' ); ?></h4>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <?php // no rows found ?>
    <?php endif; ?>
  </div>
  <!-- Add Arrows -->
  <div class="container swiper-button-custom-arrow flex justify-between absolute mx-auto h-full lg:px-8 xl:px-4">
    <div class="swiper-button-prev swiper-button-black invisible lg:visible" role="button" aria-label="Previous testimonial"></div>
    <div class="swiper-button-next swiper-button-black invisible lg:visible" role="button" aria-label="Next testimonial"></div>
  </div>

</div>
