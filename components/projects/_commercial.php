<?php if ( have_rows( 'commercial_project' ) ) : ?>
<div class="w-full lg:pl-32 xl:pl-64 overflow-hidden">
  <h2 class="text-3xl xl:text-4xl text-tertiary font-bold leading-normal px-8 pt-4 lg:pt-16 mb-4">Commercial</h2>
  <div class="bg-primary h-1 w-12 mx-8 mb-2"></div>
  <div class="swiper-container swiper-commercial relative pr-16 pb-12 overflow-visible">
      <div class="swiper-wrapper m-8">
      	<?php while ( have_rows( 'commercial_project' ) ) : the_row(); ?>
          <div class="swiper-slide shadow-xl">
      		<?php if ( get_sub_field( 'card_image' ) ) : ?>
      			<img class="min-w-full h-40 object-cover" src="<?php the_sub_field( 'card_image' ); ?>" alt="<?php the_sub_field( 'card_title' ); ?> image" />
      		<?php endif ?>
          <div class="bg-white">
            <h3 class="whitespace-no-wrap text-xl md:text-2xl px-6 pt-4 font-bold text-black"><?php the_sub_field( 'card_title' ); ?></h3>
            <p class="text-light-gray font-light text-sm min-h-full h-40 px-6 pt-4"><?php the_sub_field( 'card_information' ); ?></p>
            <?php $card_cta_url = get_sub_field( 'card_cta_url' ); ?>
            <?php if ( $card_cta_url ) : ?>
              <div class="flex flex-col items justify-center bg-secondary text-primary w-full text-left text-lg leading-normal h-12 px-6 hover:transition-colors duration-250">
                <a class="flex flex-row items-center whitespace-no-wrap text-primary pb-4 hover:text-tertiary hover:transition-colors duration-250" href="<?php echo esc_url( $card_cta_url['url'] ); ?>" target="<?php echo esc_attr( $card_cta_url['target'] ); ?>">
                  <?php echo esc_html( $card_cta_url['title'] ); ?>
                  <span class="w-5 ml-4 block">
                    <svg class="fill-current" viewBox="0 0 31.49 31.49">
                       <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111,C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587,c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                    </svg>
                  </span>
                </a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      	<?php endwhile; ?>
      </div>
      <div class="swiper-button-custom-arrow-alt flex flex-row justify-between w-32 h-12 absolute bottom-0 right-0 pb-2">
        <div class="swiper-button-prev flex items-center justify-center w-12 h-12 invisible sm:visible"></div>
        <div class="swiper-button-next flex items-center justify-center w-12 h-12 invisible sm:visible"></div>
      </div>
    </div>
  </div>
  <?php else : ?>
    <?php // no rows found ?>
  <?php endif; ?>
