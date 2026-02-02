
  <div class="swiper-container swiper-slider flex items-center justify-center">

    <div class="swiper-wrapper">
      <?php if ( have_rows( 'slider_repeater' ) ) : ?>
      	<?php while ( have_rows( 'slider_repeater' ) ) : the_row(); ?>
      		<?php $slide_image = get_sub_field( 'slide_image' ); ?>
      		<?php if ( $slide_image ) : ?>
            <div class="swiper-slide h-80 md:h-128 lg:h-144 swiper-slide--height-fix flex items-end justify-center bg-tertiary">
              <img class="self-center object-cover min-h-full opacity-75" src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />

              <div class="container absolute mx-auto pb-4">
                <div class="pb-2 md:pb-8 px-4 md:px-8 xl:px-4 max-w-xs lg:max-w-sm">
                  <h4 class="text-secondary text-2xl lg:text-4xl font-bold leading-normal"><?php the_sub_field( 'slide_heading' ); ?></h4>
                </div>
                <?php $slide_link = get_sub_field( 'slide_link' ); ?>
                <?php if ( $slide_link ) : ?>
                  <div class="pb-2 md:pb-8 px-4 md:px-8 xl:px-4 text-base lg:text-lg inline-block">
                    <a class="flex flex-row items-center text-secondary hover:opacity-75 hover:transition-colors duration-250" href="<?php echo esc_url( $slide_link['url'] ); ?>" target="<?php echo esc_attr( $slide_link['target'] ); ?>">
                      <?php echo esc_html( $slide_link['title'] ); ?>
                      <span class="w-5 ml-4 block" aria-hidden="true">
                        <svg class="fill-current" viewBox="0 0 31.49 31.49" aria-hidden="true">
                           <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111,C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587,c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                        </svg>
                      </span>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
      		<?php endif; ?>


      	<?php endwhile; ?>
      <?php else : ?>
      	<?php // no rows found ?>
      <?php endif; ?>
    </div>
    <!-- Add Arrows -->
    <div class="container swiper-button-custom-arrow flex justify-between absolute mx-auto h-full lg:px-8 xl:px-4">
      <div class="swiper-button-prev swiper-button-black invisible lg:visible" role="button" aria-label="Previous slide"></div>
      <div class="swiper-button-next swiper-button-black invisible lg:visible" role="button" aria-label="Next slide"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination pointer-events-none mb-3 md:mb-10 lg:mb-12"></div>

  </div>
