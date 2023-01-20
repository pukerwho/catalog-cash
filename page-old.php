<?php 
/*
Template Name: Old
*/
get_header(); 
?>

<?php echo get_template_part('template-parts/menu'); ?>

<main>
  <div class="container">
    <h1 class="inline-block text-2xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-8"><?php _e("Найстаріші сайти", "treba-wp"); ?></h1>
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6 mb-12 lg:mb-0">
        <div class="mb-12">
          <?php 
          $all_sites = new WP_Query( array(
            'post_type' => 'sites',
            'posts_per_page' => 20,
            'meta_key' => '_crb_site_whois_age',
            'orderby' => 'meta_value_num',
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