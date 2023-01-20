<?php 
/*
Template Name: Хорошоп
*/
get_header(); 
?>

<?php echo get_template_part('template-parts/menu'); ?>

<main>
  <div class="container">
    <h1 class="inline-block text-2xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-8"><?php _e("Сайти на CMS", "treba-wp"); ?> Хорошоп</h1>
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6 mb-12 lg:mb-0">
        <div class="mb-12">
          <?php 
          global $wp_query, $wp_rewrite;  
          $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
          $all_sites = new WP_Query( array(
            'post_type' => 'sites',
            'orderby' => 'date',
            'posts_per_page' => 10,
            'paged' => $current, 
            'meta_query' => array(
              array(
                'key' => 'check_site_cms_meta',
                'value' => 'Хорошоп',
                'compare' => 'IN',
              ),
            ),
          ));
          if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
            <?php get_template_part('template-parts/site-item'); ?>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="b_pagination text-center mb-12">
          <?php 
            $big = 9999999991; // уникальное число
            echo paginate_links( array(
              'format' => '?paged=%#%',
              'total' => $all_sites->max_num_pages,
              'current' => $current,
              'prev_next' => true,
              'next_text' => (''),
              'prev_text' => (''),
            )); 
          ?>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part('template-parts/sidebar'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>