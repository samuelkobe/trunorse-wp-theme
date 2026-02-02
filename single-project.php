<?php get_header(); ?>

<main role="main" class="bg-white">
    <section class="overflow-x-hidden">
        <div class="flex flex-col items-center justify-center w-full h-80 md:h-128 bg-tertiary text-lightest-gray overflow-hidden z-0">
            <h1 class="w-full text-center text-3xl md:text-5xl 2xl:text-6xl text-white font-title uppercase lg:leading-snug mb-2 lg:mb-12"><?php the_title(); ?></h1>
        </div>
        <div class="flex flex-row justify-center z-10 -mt-20 md:-mt-32 mb-6 sm:mb-8 lg:mb-12">
            <?php if ( have_rows( 'project_content' ) ): ?>
                <?php while ( have_rows( 'project_content' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'gallery' ) : ?>
                        <div class="w-full relative">
                            <div id="post-type-gallery" class="swiper-container swiper-post-type mb-6 lg:mb-12">
                                <?php $gallery_urls = get_sub_field( 'gallery' ); ?>
                                <?php if ( $gallery_urls ) :  ?>
                                    <div class="swiper-wrapper">
                                        <?php foreach ( $gallery_urls as $image ): ?>
                                            <div class="swiper-slide flex justify-center">
                                                <div class="w-auto flex justify-center items-center relative">
                                                    <img class="w-full aspect-square object-cover" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="Job site image from the project <?php the_title(); ?>" />
                                                    <span class="absolute bg-primary w-full text-center text-white left-0 bottom-0 text-xl lg:text-2xl p-2 font-bold"><?php echo esc_html($image['caption']); ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="hidden sm:flex custom-swiper-navigation w-full h-full items-center justify-center absolute top-0 2xl:-top-4">
                                <div class="swiper-button-prev flex items-center justify-center prev-button-override w-12 h-12 2xl:w-24 2xl:h-24 text-lightest-gray bg-primary rounded-full ml-2 md:ml-6 2xl:ml-16"></div>
                                <div class="swiper-button-next flex items-center justify-center w-12 h-12 2xl:w-24 2xl:h-24 text-lightest-gray bg-primary rounded-full mr-2 md:mr-6 2xl:mr-16"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
            <?php endif; ?>
        </div>
    </section>
    <section>
        <div class="flex flex-col px-6 lg:px-12 2xl:container 2xl:mx-auto">
            <div class="flex flex-col items-center mb-8 lg:mb-16 details">
                <?php if ( have_rows( 'project_details' ) ) : ?>
                    <?php while ( have_rows( 'project_details' ) ) : the_row(); ?>
                    <div class="w-full lg:w-3/4 flex flex-col lg:flex-row items-center border-t-2 border-b-2 border-lightest-gray py-2 lg:py-6">
                        <p class="text-tertiary-bright text-base lg:text-lg w-full lg:w-1/4"><?php the_sub_field( 'detail_title' ); ?></p>
                        <p class="text-tertiary-bright text-base lg:text-lg w-full lg:w-3/4"><?php the_sub_field( 'detail_information' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col px-6 lg:px-12 2xl:container 2xl:mx-auto">
            <div class="flex flex-col mx-0 sm:mx-16 lg:mx-40 mb-8 lg:mb-32">
                <p class="text-tertiary text-base lg:text-lg mb-6"><?php the_field( 'project_snapshot' ); ?></p>
                <div class="text-tertiary text-sm lg:text-base paragraphs"><?php the_field( 'about_project' ); ?></div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col px-6 lg:px-12 2xl:container 2xl:mx-auto items-center justify-center pb-12 lg:pb-24">
            <a class="button alt" href="/projects">Back to Projects</a>
        </div>
    </section>    

</main>

<?php get_footer(); ?>

