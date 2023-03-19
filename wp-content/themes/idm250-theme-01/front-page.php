<?php get_header(); ?>


<!-- <h1><?php echo get_the_title(); ?></h1> -->
<div class="hero-wrapper backgroundColor  pt-0 pb-10 sm:py-16">
    <div class="grid grid-cols-5 px-8 xl:pl-28 z-10">
        <div class="hero-text  col-span-5 sm:col-span-2 flex justify-between mt-16">
            <div class="info z-10">
                <p class=" text-sm sm:text-md font-normal yellow sm:text-xl">Welcome to</p>
                <h1 class=" text-3xl sm:text-6xl font-normal text-white"><?php the_field('restaurant_title'); ?></h1>
                <button type="button" class=" text-lg bg-transparent rounded-sm px-4 py-1 mt-8 sm:my-4 yellow font-light yellowBorder hover:border-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                Book Now
                </button>
                <p class=" my-3 text-xs sm:text-sm font-normal text-white ">M-F: 4-10PM</p>
                <p class="  text-xs sm:text-sm font-normal text-white">S-S: 11AM-11PM</p>
            </div>
            <div class="titlebox border-solid border-8 border-white p-6 z-10 ml-10">
            <h1 class=" font-normal mb-0 text-4xl leading-normal text-white text-center pt-3">掲載こと</h1>
            </div>
        </div>
        <div class="hero-image hidden sm:block col-span-5 sm:col-start-3 sm:col-span-3 z-0">
            <img class=""src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
    </div>
</div>
<div class="wrapper flex justify-center flex-wrap">
  <div class="content-wrapper px-3 mt-10 sm:px-6 max-w-6xl">
      <div class=" w-full text-image-container flex flex-wrap justify-center mb-20 sm:justify-between ">
        <div class="text-container w-full sm:w-2/5 flex flex-wrap content-center">
          <h3 class=" font-semibold leading-8">
          <?php the_field('section_header_1'); ?>
          </h3>
          <p class=" font-normal text-lg leading-8 mb-0">
          <?php the_field('section_1_content'); ?>
          </p>
            <div class="button-container flex justify-center mt-8">
                <button type="button" class="bg-transparent rounded-sm  mb-4 px-6 py-1 red font-normal text-lg redBorder hover:border-red-900 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                Learn More
                </button>
            </div>
        </div>
        <div class="home-black-box border-solid border-black border-8"></div>
        <div class="starter-image-container flex flex-wrap justify-center w-full  sm:w-2/5 ">
        <div class="home-red-bar mb-4 px-2"></div>
        <?php 
          $image = get_field('section_1_image');
          if( !empty( $image ) ): ?>
          <img  class='starter-image w-full sm:h-4/5 md:h-auto rounded drop-shadow-md' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
    </div>
  </div>
  <div class="content-wrapper px-3 mt-10 sm:px-6 max-w-6xl">
      <div class=" w-full text-image-container flex flex-wrap justify-center mb-20 sm:justify-between ">
      <div class="text-container w-full sm:w-2/5 flex flex-wrap content-center">
          <h3 class=" font-semibold leading-8">
          <?php the_field('section_header_2'); ?>
          </h3>
          <p class=" font-normal text-lg leading-8 mb-0">
          <?php the_field('section_2_content'); ?>
          </p>
            <div class="button-container flex justify-center mt-8">
                <button type="button" class="bg-transparent rounded-sm mb-4 px-6 py-1 red font-normal text-lg redBorder hover:border-red-900 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                Learn More
                </button>
            </div>
        </div>
        <div class="home-black-box-2 border-solid border-black border-8"></div>
        <div class="starter-image-container flex flex-wrap justify-center w-full  sm:w-2/5 ">
        <div class="home-red-bar mb-4 px-2"></div>
        <?php 
          $image = get_field('section_2_image');
          if( !empty( $image ) ): ?>
          <img  class='starter-image w-full sm:h-4/5 md:h-auto rounded drop-shadow-md' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
    </div>
  </div>
</div>
<div class="flex justify-center">
<div class="home-footer-hero grid grid-cols-3 max-w-7xl my-10">
<?php 
          $image = get_field('first_gallery_image');
          if( !empty( $image ) ): ?>
          <img  class='col-start-1 col-span-1 test w-full block align-bottom' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php 
          $image = get_field('second_gallery_image');
          if( !empty( $image ) ): ?>
          <img  class='w-full col-start-2 col-span-1' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php 
          $image = get_field('third_gallery_image');
          if( !empty( $image ) ): ?>
          <img  class='w-full col-start-3 col-span-1' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php 
          $image = get_field('fourth_gallery_image');
          if( !empty( $image ) ): ?>
          <img  class='w-full  col-start-1 col-span-3' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
    </div> 
</div>
</div>


<?php get_footer(); ?>