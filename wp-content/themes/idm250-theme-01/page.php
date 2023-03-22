<?php get_header(); ?>
<div class=" relative isolate overflow-hidden py-24 px-6 sm:py-32 lg:px-8">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
    class="absolute inset-0 -z-10 h-full w-full object-cover">
  <div class="mx-2 text-left">
    <p class=" text-md font-normal yellow sm:text-xl">Explore</p>
    <h2 class="text-4xl font-normal text-white sm:text-5xl">
      <?php echo get_the_title(); ?>
    </h2>
  </div>
</div>  
<div class="wrapper flex justify-center flex-wrap pt-5">
<?php get_template_part('components/content'); ?> 
</div>
<div class="button-container flex justify-center mb-5">
    <button type="button" class="bg-transparent rounded-sm px-6 py-1 red font-normal text-lg redBorder hover:border-red-900 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
      Book Now
    </button>
</div>


<?php get_footer(); ?>