<?php 
$all_sites_args = array(
  'post_type' => 'sites',
  'orderby' => 'date',
  'posts_per_page' => 10,
);
// $all_sites_args['meta_query'][] = array('key' => '_crb_post_mainhide',  'compare' => 'NOT EXISTS');
// $all_sites_args['posts_per_page'] = 5;
// $sites = new WP_Query($all_sites_args);
?>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("CMS", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <ul class="theme-list">
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-wordpress'); ?>">WordPress</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-joomla'); ?>">Joomla</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-prom'); ?>">Prom</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-drupal'); ?>">Drupal</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-opencart'); ?>">OpenCart</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-prestashop'); ?>">Prestashop</a></li>
      <li class="text-lg"><a href="<?php echo get_page_url('page-tilda'); ?>">Tilda</a></li>

    </ul>
  </div>
</div>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Добірки", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <ul class="theme-list">
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-best'); ?>"><?php _e("Найкращі по SEO", "treba-wp"); ?></a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-old'); ?>"><?php _e("Найстаріші сайти", "treba-wp"); ?></a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-free'); ?>"><?php _e("Вільні домени", "treba-wp"); ?></a></li>
      <li class="text-lg"><a href="<?php echo get_page_url('page-our'); ?>"><?php _e("Наш вибір", "treba-wp"); ?></a></li>
    </ul>
  </div>
</div>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Нещодавно перевірені", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <?php 
    $new_sites = new WP_Query( array(
      'post_type' => 'sites',
      'posts_per_page' => 10,
      'orderby' => 'rand',
    ));
    ?>
    <?php if ($new_sites->have_posts()) : while ($new_sites->have_posts()) : $new_sites->the_post(); ?>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Найкращі по SEO", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <?php 
    $seo_sites = new WP_Query( array(
      'post_type' => 'sites',
      'posts_per_page' => 10,
      'meta_key' => 'site_common_rating',
      'orderby' => 'meta_value_num',
    ));
    ?>
    <?php if ($seo_sites->have_posts()) : while ($seo_sites->have_posts()) : $seo_sites->the_post(); ?>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Зараз переглядають", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <?php 
    $now_sites = new WP_Query( array(
      'post_type' => 'sites',
      'posts_per_page' => 10,
      'orderby' => 'rand',
    ));
    ?>
    <?php if ($now_sites->have_posts()) : while ($now_sites->have_posts()) : $now_sites->the_post(); ?>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div class="mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Рекомендуємо", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <?php if (is_home()): ?>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://tarakan.org.ua/">tarakan.org.ua</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://priazovka.com/">priazovka.com</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://icatalog.pro/">icatalog.pro</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://webgolovolomki.com/">webgolovolomki.com</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://sdamkvartiry.com/">sdamkvartiry.com</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://d-art.org.ua/">d-art.org.ua</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://treba-solutions.com/">treba-solutions.com</a></div>
      <div class="border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="https://s-cast.ua/">s-cast.ua</a></div>
    <?php else: ?>
      <div class="super-links">
        <?php 
          $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          $super_links = super_links($current_url);
          // shuffle($super_links);
          foreach ($super_links as $super_link):
        ?>
          <?php echo $super_link->top_links; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="hidden mb-10">
  <div class="bg-theme-sky text-xl text-center rounded border-2 border-gray-700 px-4 py-3 mb-4"><?php _e("Цікаві статті", "treba-wp"); ?></div>
  <div class="bg-white font-light rounded p-3">
    <div class="flex items-center">
      <div class="mr-2">
        <img src="https://internetcashadvanceonline.com/wp-content/uploads/2023/05/about-cctv.jpeg" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy" alt="Видеонаблюдение в частном доме">
      </div>
      <div><a href="https://icatalog.pro/12977-about-cctv/" class="hover:text-blue-600">О важности роли видеонаблюдения в системе охраны частного дома</a></div>
    </div>
  </div>
</div>

