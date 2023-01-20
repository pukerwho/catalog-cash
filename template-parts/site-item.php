<?php 
  $current_id = get_the_ID();
?>

<div class="relative bg-white shadow rounded-lg p-4 mb-6">
  <div class="flex justify-between items-center mb-4">
    <div class="flex items-center">
      <div class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b4c9f9" class="w-6 h-6">
          <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z" />
        </svg>
      </div>
      <div class="text-xl font-bold">Сайт <?php the_title(); ?></div>
    </div>
    <div class="flex items-center text-lg text-gray-500">
      <div class="text-yellow-300 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
        </svg>
      </div>
      <div><?php echo get_post_meta( get_the_ID(), 'site_main_rating', true ); ?> / 5</div>
    </div>
  </div>
  <div class="mb-4">
    <span class="text-gray-600 font-bold">Статус: </span>
    <?php 
    $status_site = carbon_get_the_post_meta('crb_site_whois_status');
    if ($status_site === 'Занят'):
    ?>
      <span class="text-red-400"><?php _e("Зайнятий", "treba-wp"); ?></span>
    <?php else: ?>
      <span class="text-green-500"><?php _e("Вільний", "treba-wp"); ?></span>
    <?php endif; ?>
  </div>
  <div class="flex items-center border-b border-gray-200 pb-6 mb-6">
    <div class="text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("SEO оцінка", "treba-wp"); ?>: </div>
    <div class="rating-row w-full relative font-semibold">
      <div class="flex items-center text-sm text-center border bg-gray-200 rounded-xl py-1">
        <div class="relative z-1" style="width:<?php echo common_rating($current_id); ?>%">
          <span><?php echo common_rating($current_id); ?> / 100</span>
        </div>
        <div class="h-full absolute left-0 top-0 bg-green-400 border border-gray-700 rounded-xl text-center" style="width:<?php echo common_rating($current_id); ?>%"></div>
      </div>
    </div>
  </div>
  <div class="text-gray-600 font-bold mb-4"><?php _e("Показники сайту", "treba-wp"); ?></div>
  <div class="flex flex-wrap font-light border-b border-gray-200 pb-3 -mx-3 mb-3">
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      Trust Flow: <?php echo site_theme_meta($current_id, "site_meta_tf"); ?>
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      Citation Flow: <?php echo site_theme_meta($current_id, "site_meta_cf"); ?>
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      Domain Authority: <?php echo site_theme_meta($current_id, "site_meta_da"); ?>/100
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      Domain Rating: <?php echo site_theme_meta($current_id, "site_meta_dr"); ?>/100
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      cPR Score: <?php echo site_theme_meta($current_id, "site_meta_cpr"); ?>/10
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      PageRank: <?php echo site_theme_meta($current_id, "site_meta_pr"); ?>/10
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      ИКС: <?php echo site_theme_meta($current_id, "site_meta_iks"); ?>0
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      PR-CY: <?php echo site_theme_meta($current_id, "site_meta_prcy"); ?>/100
    </div>
    <div class="w-1/2 lg:w-1/3 px-3 mb-3">
      <div class="inline-block border-b-2 border-theme-brown"><a href="<?php the_permalink(); ?>"><?php _e("Більше інформації", "treba-wp"); ?></a></div>
    </div>
  </div>
  <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
    <div class="flex items-center mb-4 lg:mb-0">
      <div class="relative flex items-center mr-10">
        <a href="http://<?php the_title(); ?>" target="_blank" rel="nofollow" class="absolute-link"></a>
        <div class=" mr-2 z-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
          </svg>
        </div>
        <div>Сайт</div>
      </div>
      <div class="relative flex items-center">
        <a href="https://web.archive.org/web/20230901000000*/<?php the_title(); ?>" target="_blank" rel="nofollow" class="absolute-link"></a>
        <div class=" mr-2 z-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
          </svg>
        </div>
        <div>WebArchive</div>
      </div>
    </div>
    <div class="flex items-center font-light">
      <div class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
        </svg>
      </div>
      <div><?php echo get_the_modified_time('F j, Y'); ?></div>
    </div>
  </div>
  
</div>