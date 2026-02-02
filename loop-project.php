<div class="w-full hidden sm:flex flex-row items-center justify-center h-20 border-b-2 border-lightest-gray mb-8 lg:mb-24">
	<div class="h-20 flex flex-row items-center justify-center text-xs lg:text-sm">
		<?php echo get_field( 'projects_filter', 'option' ); ?>
	</div>
</div>

<div class="flex sm:hidden mb-12 lg:mb-24"></div>

<div id="projects" class="w-full flex flex-row flex-wrap items-start justify-start mb-8 lg:mb-20">
	<?php $args = array(
		'post_type' => 'project',
		'search_filter_id' => 525,
		'orderby' => 'date',
		'order' => 'DESC',
	);

	$loop = new WP_Query($args); ?>

  	<?php if ($loop->have_posts()) : 
		while ( $loop->have_posts() ) : 
		$loop->the_post(); 
	?>
  	<a class="w-full md:w-1/2 xl:w-1/3 mb-8 lg:mb-20" href="<?php the_permalink(); ?>" title="Learn more about <?php the_title(); ?>">
		<div class="flex flex-col w-full px-2">
			<div class="flex items-center justify-center w-full order-1 lg:order-1">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail('projects', array('class' => 'project-card-image')); // Declare specific WP sized thumbnail here ?>				
				<?php endif; ?>
			</div>
			<div class="flex flex-col items-center justify-center w-full px-8 py-6 order-2 lg:order-2 bg-lightest-gray">
				<h2 class="text-base lg:text-2xl text-tertiary font-title uppercase lg:leading-snu text-center"><?php the_title(); ?></h2>
					
				<div class="w-full flex flex-row flex-wrap items-center justify-center mt-1 lg:mt-3">
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
								echo '<span class="text-xs text-primary bg-white p-1 mr-2 my-1">' .$tag->name. '</span>'; 
							}
						}
					?>
				</div>
			</div>
		</div>
	</a>

	<?php 
		endwhile; 
		else : 
	?>

		<div class="w-full hidden sm:flex flex-row items-center justify-center mb-8">

			<div class="flex flex-row items-center justify-center text-xs lg:text-sm">
				<p class="text-xl lg:text-2xl">Oops! Currently there are no projects under that category</p>
			</div>

		</div>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

</div>