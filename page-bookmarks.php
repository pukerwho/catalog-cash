<?php 
/*
Template Name: Bookmarks
*/
get_header(); ?>

<?php echo get_template_part('template-parts/menu'); ?>

<main>
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="bg-white rounded-lg p-8">
      <div class="flex justify-center ">
        <div class="relative">
          <h1 class="relative text-4xl lg:text-5xl font-bold mb-6 z-1"><?php the_title(); ?></h1>
          <div class="w-full absolute left-0 bottom-[16px] ">
            <svg class="mx-auto" viewBox="0 0 223 17" fill="none">
              <path opacity="0.5" d="M2 11.3686C17.6603 8.02778 33.9464 6.93097 49.9106 6.13771C76.6733 4.80789 103.638 4.48984 130.396 6.01883C154.367 7.38859 178.015 10.6844 201.964 7.92099C208.097 7.21339 216.371 7.08879 222.413 7.08879" stroke="#ECA674" stroke-width="10" stroke-linejoin="round"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>