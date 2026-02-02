<div class="container mx-auto relative z-10">

  <h2 class="text-3xl xl:text-4xl text-tertiary font-bold leading-normal mb-4">Meet our team</h2>
  <div class="bg-primary h-1 w-12 mb-8"></div>

  <?php if ( have_rows( 'meet_our_team' ) ) : ?>
    <div class="flex flex-row flex-wrap">
    	<?php while ( have_rows( 'meet_our_team' ) ) : the_row(); ?>
        <div class="flex flex-col w-full sm:w-1/2 xl:w-1/4 p-4 first:pl-0 last:pr-0">
    		<?php if ( get_sub_field( 'team_card_image' ) ) : ?>
    			<img class="min-w-full h-64 object-cover" src="<?php the_sub_field( 'team_card_image' ); ?>" />
    		<?php endif ?>
        <div class="flex flex-row justify-between bg-secondary p-4 xl-p8">
          <p class="font-body text-tertiary text-sm sm:text-base xl:text-lg font-bold"><?php the_sub_field( 'team_card_name' ); ?></p>
          <p class="font-body text-light-gray text-sm sm:text-base xl:text-lg font-bold"><?php the_sub_field( 'team_card_title' ); ?></p>
        </div>
      </div>
    	<?php endwhile; ?>
    </div>
  <?php else : ?>
  	<?php // no rows found ?>
  <?php endif; ?>
</div>
