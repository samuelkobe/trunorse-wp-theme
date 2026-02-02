<div class="flex flex-row flex-wrap">

  <div class="flex flex-row justify-end w-full lg:w-1/2 xl:w-2/5">

    <div class="flex flex-col w-full items-start lg:items-end p-8 sm:p-16">

      <div class="w-full lg:w-112 max-w-full mb-10">
        <h2 class="text-3xl xl:text-4xl text-tertiary font-bold leading-normal mb-4">Connect with us</h2>
        <div class="bg-primary h-1 w-12"></div>
      </div>

      <div class="flex flex-col sm:flex-wrap sm:flex-row lg:flex-col w-full lg:w-112 max-w-full">
        <?php get_template_part('components/_social-media'); ?>
      </div>

    </div>

  </div>

  <div class="w-0 xl:w-1/10"></div>

  <div class="w-full lg:w-1/2">
    <div class="w-full max-w-full">
      <div class="w-full max-w-full px-8 sm:px-16 lg:px-0 pt-8 lg:pt-16">
        <p class="text-xl font-bold leading-relaxed pb-6 lg:pb-12 lg:w-112"><?php the_field( 'contact_message', 'option', false ); ?></p>
        <div class="lg:w-112 xl:w-144">
          <?php echo get_field( 'contact_form', 'option'); ?>
        </div>
      </div>
    </div>
  </div>

</div>
