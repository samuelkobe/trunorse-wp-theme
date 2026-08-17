<div class="lg:container lg:mx-auto px-8 lg:px-0">

  <div class="absolute z-0 top-0 left-0 h-auto w-full">
    <?php if ( get_field( 'hero_background_image' ) ) : ?>
      <img src="<?php the_field( 'hero_background_image' ); ?>" alt="<?php the_field( 'hero_title' ); ?>" class="max-h-full h-192 object-cover w-full" width="1920" height="768" fetchpriority="high" />
    <?php endif ?>
  </div>

  <div class="relative flex flex-col z-10 pt-32 md:pt-40 lg:pt-64 xl:pt-80 px-4 sm:px-8 md:px-16 lg:px-16">

    <h2 class="w-full xl:w-4/6 text-3xl lg:text-4xl text-white font-bold leading-normal"><?php the_field( 'hero_title' ); ?></h2>

    <p class="w-full xl:w-1/2 text-lg lg:text-xl text-white mt-4 leading-relaxed font-medium "><?php the_field( 'hero_content' ); ?></p>

    <?php $hero_cta = get_field( 'hero_cta' ); ?>
    <?php if ( $hero_cta ) : ?>
      <a class="button mt-8" href="<?php echo esc_url( $hero_cta['url'] ); ?>" target="<?php echo esc_attr( $hero_cta['target'] ); ?>"><?php echo esc_html( $hero_cta['title'] ); ?></a>
    <?php endif; ?>

  </div>

</div>
<div class="lg:container lg:mx-auto px-8 md:px-16 lg:px-8 overflow-hidden fade-in-up-ready" id="hero-slider-section">
    <div class="swiper-container swiper-hero flex flex-row flex-wrap mt-8 overflow-visible pr-16">
      <?php if ( have_rows( 'hero_repeater' ) ) : ?>
         <div class="swiper-wrapper m-4 sm:m-8">
          <?php while ( have_rows( 'hero_repeater' ) ) : the_row(); ?>
            <div class="swiper-slide shadow-xl">
              <?php if ( get_sub_field( 'card_image' ) ) : ?>
                <img class="min-w-full h-48 object-cover hero-slider-img" src="<?php the_sub_field( 'card_image' ); ?>" alt="<?php the_sub_field( 'card_title' ); ?> slider image" width="270" height="192" />
              <?php endif ?>
              <div class="bg-white">
                <h3 class="whitespace-no-wrap text-xl md:text-2xl px-5 pt-3 font-bold text-black"><?php the_sub_field( 'card_title' ); ?></h3>
                <p class="text-light-gray font-light text-sm min-h-full h-32 px-5 pt-4"><?php the_sub_field( 'card_information' ); ?></p>
                <?php $card_cta_url = get_sub_field( 'card_cta_url' ); ?>
                <?php if ( $card_cta_url ) : ?>
                  <?php $card_title = get_sub_field( 'card_title' ); ?>
                  <div class="flex flex-col items justify-center bg-primary text-white w-full text-center text-base lg:text-base leading-normal h-12 hover:bg-tertiary hover:transition-colors duration-250">
                    <a href="<?php echo esc_url( $card_cta_url['url'] ); ?>" target="<?php echo esc_attr( $card_cta_url['target'] ); ?>">View <?php echo esc_html( $card_title ); ?> Services</a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>
    </div>

    <?php $hero_cards_cta = get_field( 'hero_cards_cta' ); ?>
    <?php if ( $hero_cards_cta ) : ?>
      <div class="mt-4 pt-4 m-4 sm:mx-8 text-lg inline-block">
        <a class="flex flex-row items-center text-primary hover:text-tertiary hover:transition-colors duration-250" href="<?php echo esc_url( $hero_cards_cta['url'] ); ?>" target="<?php echo esc_attr( $hero_cards_cta['target'] ); ?>">
          <?php echo esc_html( $hero_cards_cta['title'] ); ?>
          <span class="w-5 ml-4 block" aria-hidden="true">
            <svg class="fill-current" viewBox="0 0 31.49 31.49" aria-hidden="true">
               <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111,C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587,c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
            </svg>
          </span>
        </a>
      </div>
    <?php endif; ?>

</div>

<script>
(function() {
  var section = document.getElementById('hero-slider-section');
  if (!section) return;

  var images = section.querySelectorAll('img');
  var loadedCount = 0;
  var totalImages = images.length;

  function checkAllLoaded() {
    loadedCount++;
    if (loadedCount >= totalImages) {
      section.classList.add('loaded');
    }
  }

  if (totalImages === 0) {
    section.classList.add('loaded');
  } else {
    images.forEach(function(img) {
      if (img.complete) {
        checkAllLoaded();
      } else {
        img.addEventListener('load', checkAllLoaded);
        img.addEventListener('error', checkAllLoaded);
      }
    });
  }

  // Fallback: show after 2 seconds regardless
  setTimeout(function() {
    section.classList.add('loaded');
  }, 2000);
})();
</script>
