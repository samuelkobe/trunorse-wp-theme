<?php // INSTAGRAM ?>
<?php if ( have_rows( 'instagram_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'instagram_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'instagram_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank" rel="noopener" aria-label="Follow us on Instagram (opens in new tab)">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-instagram.png" alt="Instagram Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // FACEBOOK ?>
<?php if ( have_rows( 'facebook_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'facebook_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'facebook_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank" rel="noopener" aria-label="Follow us on Facebook (opens in new tab)">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-facebook.png" alt="Facebook Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // TWITTER ?>
<?php if ( have_rows( 'twitter_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'twitter_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'twitter_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank" rel="noopener" aria-label="Follow us on Twitter (opens in new tab)">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-twitter.png" alt="Twitter Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // LINKEDIN ?>
<?php if ( have_rows( 'linkedin_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'linkedin_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'linkedin_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="<?php the_sub_field( 'url' ); ?>" target="_blank" rel="noopener" aria-label="Follow us on LinkedIn (opens in new tab)">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-linkedin.png" alt="LinkedIn Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'handle' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // PHONE ?>
<?php if ( have_rows( 'phone_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'phone_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'phone_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="tel:<?php the_field( 'menu_phone_number', 'option' ); ?>" aria-label="Call us at <?php the_field( 'menu_phone_number_text', 'option' ); ?>">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-phone.png" alt="Phone Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_field( 'menu_phone_number_text', 'option' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php // EMAIL ?>
<?php if ( have_rows( 'email_group', 'option' ) ) : ?>
  <?php while ( have_rows( 'email_group', 'option' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'email_toggle' ) == 1 ) : ?>
      <a class="flex flex-row items-center text-primary text-base md:text-lg leading-normal w-full sm:w-1/2 lg:w-full pr-0 sm:pr-4 lg:pr-0 mb-4" href="mailto:<?php the_sub_field( 'email' ); ?>" aria-label="Email us at <?php the_sub_field( 'email' ); ?>">
        <img class="max-w-full w-8 lg:w-12 h-8 lg:h-12 mr-8 sm:mr-2 lg:mr-8" src="<?php bloginfo('template_url'); ?>/img/icons/social-media-email.png" alt="Email Icon" loading="lazy">
        <span class="whitespace-no-wrap"><?php the_sub_field( 'email' ); ?></span>
      </a>
    <?php else : ?>
      <?php // echo 'false'; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
