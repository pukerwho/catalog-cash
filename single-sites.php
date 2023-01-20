<?php 
  get_header(); 
  $current_id = get_the_ID();
  $current_title = get_the_title();
  $countNumber = tutCount($current_id);
  //GET HTML
  // $html = file_get_html('http://'.$current_title);
  //META TAGS
  // $get_meta = getUrlData('http://'.$current_title);
  //title
  $site_title = get_site_title($current_title, $current_id);
  $site_title_count = mb_strlen($site_title, 'UTF-8');
  //description
  $site_description = get_site_description($current_title, $current_id);
  $site_description_count = mb_strlen($site_description, 'UTF-8');
  
  //lang
  $site_lang = get_site_lang($current_title, $current_id);
  //site_name
  $site_name = get_site_name($current_title, $current_id);
  //cms
  $site_cms = get_site_cms($current_title, $current_id);
?>

<?php echo get_template_part('template-parts/menu'); ?>

<main>
  <div class="container">
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6 mb-12 lg:mb-0">
        <div class="bg-white rounded-lg p-4 lg:p-8">
          <h1 class="text-2xl lg:text-3xl font-bold mb-6"><?php _e("Аналіз сайту", "treba-wp"); ?> <span class="theme-underline brown"><?php the_title(); ?></span></h1>
          <div class="border-b border-gray-200 pb-4 mb-4">
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
          <!-- Загальна інформація -->
          <div class="border-b border-gray-200 pb-4 mb-4">
            <div class="inline-block text-xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-4"><?php _e("Загальна інформація", "treba-wp"); ?></div>
            <div class="font-light">
              <?php if ($site_name): ?>
                <div class="mb-2"><span class="font-bold"><?php _e("Назва сайту", "treba-wp"); ?>:</span> <?php echo $site_name; ?></div>
              <?php endif; ?>
              <div class="mb-2"><span class="font-bold">Title:</span> <?php echo $site_title; ?></div>
              <div class="mb-2"><span class="font-bold">Description:</span> <?php echo $site_description; ?></div>
              <?php if ($site_cms): ?>
                <?php if ($site_cms != '🤷‍♂️'): ?>
                  <div class="mb-2"><span class="font-bold"><?php _e("Сайт працює на CMS", "treba-wp"); ?>:</span> <?php echo $site_cms; ?></div>
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($site_lang): ?>
                <?php if ($site_lang != 'Невідомо'): ?>
                  <div class="mb-2"><span class="font-bold"><?php _e("Основна мова сайта", "treba-wp"); ?>:</span> <?php echo $site_lang; ?></div>
                <?php endif; ?>
              <?php endif; ?>
              <div class="mb-2"><span class="font-bold"><?php _e("Приблизна вартість сайту", "treba-wp"); ?>:</span> <?php echo site_price($current_id); ?>$</div>
            </div>
          </div>
          <!-- END Загальна інформація -->

          <!-- Оцінки -->
          <div class="border-b border-gray-200 pb-6 mb-6">
            <div class="inline-block text-xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-4"><?php _e("Оцінки сайту", "treba-wp"); ?></div>
            <!-- SEO -->
            <div class="flex items-center mb-4">
              <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("SEO оцінка", "treba-wp"); ?>: </div>
              <div class="rating-row w-full relative font-semibold">
                <div class="flex items-center text-sm text-center border bg-gray-200 rounded-xl py-1">
                  <div class="relative z-1" style="width:<?php echo common_rating($current_id); ?>%">
                    <span><?php echo common_rating($current_id); ?> / 100</span>
                  </div>
                  <div class="h-full absolute left-0 top-0 bg-green-400 border border-gray-700 rounded-xl text-center" style="width:<?php echo common_rating($current_id); ?>%"></div>
                </div>
              </div>
            </div>
            <!-- END SEO -->
            <!-- Дизайн -->
            <div class="flex items-center mb-4">
              <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Оцінка дизайну", "treba-wp"); ?>: </div>
              <div class="rating-row w-full relative font-semibold">
                <div class="flex items-center text-sm text-center border bg-gray-200 rounded-xl py-1">
                  <div class="relative z-1" style="width:<?php echo design_rating($current_id); ?>%">
                    <span><?php echo design_rating($current_id); ?> / 100</span>
                  </div>
                  <div class="h-full absolute left-0 top-0 bg-green-400 border border-gray-700 rounded-xl text-center" style="width:<?php echo design_rating($current_id); ?>%"></div>
                </div>
              </div>
            </div>
            <!-- END Дизайн -->
            <!-- Текст -->
            <div class="flex items-center mb-4">
              <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Оцінка тексту", "treba-wp"); ?>: </div>
              <div class="rating-row w-full relative font-semibold">
                <div class="flex items-center text-sm text-center border bg-gray-200 rounded-xl py-1">
                  <div class="relative z-1" style="width:<?php echo text_rating($current_id); ?>%">
                    <span><?php echo text_rating($current_id); ?> / 100</span>
                  </div>
                  <div class="h-full absolute left-0 top-0 bg-green-400 border border-gray-700 rounded-xl text-center" style="width:<?php echo text_rating($current_id); ?>%"></div>
                </div>
              </div>
            </div>
            <!-- END Текст -->
            <!-- Загальна -->
            <?php 
              $main_rating = main_rating($current_id);
              $width_rating = ($main_rating/5)*100; 
            ?>
            <div class="flex items-center">
              <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Загальна оцінка", "treba-wp"); ?>: </div>
              <div class="rating-row w-full relative font-semibold">
                <div class="flex items-center text-sm text-center border bg-gray-200 rounded-xl py-1">
                  <div class="relative z-1" style="width:<?php echo $width_rating; ?>%">
                    <span><?php echo $main_rating; ?> / 5</span>
                  </div>
                  <div class="h-full absolute left-0 top-0 bg-green-400 border border-gray-700 rounded-xl text-center" style="width:<?php  echo $width_rating; ?>%"></div>
                </div>
              </div>
            </div>
            <!-- END Загальна -->
          </div>
          <!-- END оцінки -->

          <!-- Показники -->
          <div class="mb-10">
            <div class="inline-block text-xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-4"><?php _e("Показники сайту", "treba-wp"); ?></div>
            <div class="overflow-x-auto bg-white border-2 border-gray-700">
              <table class="w-full table-auto">
                <thead class="bg-theme-sky border-b-2 border-gray-700">
                  <tr>
                    <th class="text-left whitespace-nowrap px-2 py-3">
                      <div class="text-left font-bold"><?php _e("Показник", "treba-wp"); ?></div>
                    </th>
                    <th class="text-left whitespace-nowrap px-2 py-3">
                      <div class="text-left font-bold"><?php _e("Значення", "treba-wp"); ?></div>
                    </th>
                  </tr>
                </thead>
                <tbody class="text-sm">
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Trust Rank</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_trust_rank"); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Trust Flow</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_tf"); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Citation Flow</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_cf"); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Domain Authority</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_da"); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Domain Rating</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_dr"); ?> / 100</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>cPR Score</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_cpr"); ?> / 10</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>PageRank</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_pr"); ?> / 10</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>ИКС</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_iks"); ?>0</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>PR-CY</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_prcy"); ?> / 100</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Semrush AS</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_as"); ?> / 100</div>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Спам</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo site_theme_meta($current_id, "site_meta_spam"); ?></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Показники -->

          <!-- WHOIS -->
          <div class="border-b border-gray-200 pb-6 mb-6">
            <div class="inline-block text-xl bg-theme-brown border-2 border-gray-700 rounded px-4 py-2 mb-4"><?php _e("Дані WHOIS", "treba-wp"); ?></div>
            <div class="overflow-x-auto bg-theme-yellow border-2 border-gray-700">
              <table class="w-full table-auto">
                <tbody class="text-sm">
                  <tr class="border-b-2 border-gray-500 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php _e("Дата реестрації", "treba-wp"); ?></div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo carbon_get_the_post_meta('crb_site_whois_start'); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b-2 border-gray-500 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php _e("Дата закінчення", "treba-wp"); ?></div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo carbon_get_the_post_meta('crb_site_whois_end'); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b-2 border-gray-500 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php _e("Скільки років сайту", "treba-wp"); ?></div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo carbon_get_the_post_meta('crb_site_whois_age'); ?></div>
                    </td>
                  </tr>
                  <tr class="border-b-2 border-gray-500 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php _e("Реєстратор", "treba-wp"); ?></div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <div><?php echo carbon_get_the_post_meta('crb_site_whois_registrator'); ?></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END WHOIS -->
          <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between border-b border-gray-200 pb-6 mb-6">
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
          <!-- breadcrumbs -->
          <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <ul class="flex items-center flex-wrap -mr-4">
              <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
                <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-500">
                  <span itemprop="name"><?php _e( 'Головна', 'treba-wp' ); ?></span>
                </a>                        
                <meta itemprop="position" content="1">
              </li>
              <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
                <a itemprop="item" href="<?php echo get_post_type_archive_link('sites'); ?>" class="text-blue-500">
                  <span itemprop="name"><?php _e( 'Каталог сайтів', 'treba-wp' ); ?></span>
                </a>                        
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 px-4">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li>
            </ul>
          </div>
          <!-- end breadcrumbs -->
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part('template-parts/sidebar'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>