<?php get_header(); ?>

<?php echo get_template_part('template-parts/menu'); ?>

<main>
  <div class="container">
    <div class="welcome text-center border-4 border-gray-700 rounded-lg py-8 lg:py-16 px-12 mb-12">
      <div class="flex justify-center">
        <div class="relative">
          <h1 class="text-3xl lg:text-5xl font-bold mb-6"><?php _e("Каталог сайтів", "treba-wp"); ?></h1>
          <div class="w-full absolute left-0 bottom-[16px] -z-1">
            <svg class="mx-auto" viewBox="0 0 223 17" fill="none">
              <path opacity="0.5" d="M2 11.3686C17.6603 8.02778 33.9464 6.93097 49.9106 6.13771C76.6733 4.80789 103.638 4.48984 130.396 6.01883C154.367 7.38859 178.015 10.6844 201.964 7.92099C208.097 7.21339 216.371 7.08879 222.413 7.08879" stroke="#ECA674" stroke-width="10" stroke-linejoin="round"></path>
            </svg>
            <svg class="hidden mx-auto" width="244" height="36" viewBox="0 0 244 36" fill="none">
              <path opacity="0.5" d="M3 21C20.1231 17.8525 37.9303 16.8192 55.3857 16.0719C84.6481 14.819 114.132 14.5194 143.388 15.9599C169.598 17.2503 195.455 20.3554 221.642 17.7519C228.347 17.0853 237.394 16.9679 244 16.9679" stroke-width="30" stroke-linejoin="round" stroke="#ECA674"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="text-lg lg:text-xl text-gray-600 mb-8 lg:mb-12"><?php _e("SEO-аналіз, вартість сайту та його рейтинг - це, та багато іншого, ви знайдете в нашому каталозі", "treba-wp"); ?></div>
      <div class="flex flex-col lg:flex-row lg:justify-center lg:items-center -mx-2">
        <div class="px-2 mb-4 lg:mb-0">
          <a href="<?php echo get_post_type_archive_link('sites'); ?>" class="min-w-full lg:min-w-[175px] inline-block bg-white border-2 border-gray-700 rounded-lg px-4 py-3"><?php _e("Каталог сайтів", "treba-wp"); ?></a>
        </div>
        <div class="px-2">
          <a href="/add" class="min-w-full lg:min-w-[175px] inline-block bg-white border-2 border-gray-700 rounded-lg px-4 py-3"><?php _e("Додати сайт", "treba-wp"); ?></a>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6">
        <div class="inline-block text-2xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-8"><?php _e("Лідери нашого рейтингу", "treba-wp"); ?></div>
        <div>
          <?php 
          $all_sites = new WP_Query( array(
            'post_type' => 'sites',
            'posts_per_page' => 10,
          ));
          if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
            <?php get_template_part('template-parts/site-item'); ?>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part('template-parts/sidebar'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>