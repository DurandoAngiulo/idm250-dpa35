<?php get_header(); ?>
<div class=" relative isolate overflow-hidden py-24 px-6 sm:py-32 lg:px-8">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
    class="absolute inset-0 -z-10 h-full w-full object-cover">
  <div class="mx-2 text-left">
    <p class=" text-md font-normal yellow sm:text-xl">Learn</p>
    <h2 class="text-4xl font-normal text-white sm:text-5xl">
      <?php echo get_the_title(); ?>
    </h2>
  </div>
</div>  
<div class="wrapper flex justify-center flex-wrap">
  <div class="content-wrapper px-3 mt-10 sm:px-6 max-w-6xl">
      <div class=" w-full text-image-container flex flex-wrap justify-center mb-20 sm:justify-between ">
        <div class="text-container w-full sm:w-2/5 flex flex-wrap content-center">
          <h3 class="font-light italic leading-8">
          <?php the_field('text_next_to_image'); ?>
          </h3>
        </div>
        <div class="red-bar rounded-sm"></div>
        <div class="starter-image-container flex justify-center w-full  sm:w-2/5 ">
          <?php 
          $image = get_field('image_next_to_text');
          if( !empty( $image ) ): ?>
          <img  class='starter-image w-full sm:h-4/5 md:h-auto rounded drop-shadow-md' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="text-section-container mb-10 w-full ">
        <h3 class="text-center"><?php the_field('section_header'); ?></h3>
        <p class="text-center">
        <?php the_field('section_content'); ?>
        </p>
        <div class="button-container flex justify-center mt-8">
          <button type="button" class="bg-transparent rounded-sm px-6 py-1 red font-normal text-lg redBorder hover:border-red-900 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            Contact Us
          </button>
        </div>
        
      </div>
  </div>
</div>
<div class="bottom-hero-image flex justify-center">
  <div class="footer-hero-box border-solid border-black border-8"></div>
  <?php 
    $image = get_field('footer_hero_image');
    if( !empty( $image ) ): ?>
      <img  class='w-full object-cover max-w-6xl rounded drop-shadow-md' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
</div>
<!-- <?php get_template_part('components/content'); ?> -->
<?php get_footer(); ?>