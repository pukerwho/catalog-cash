<div class="menu">
  <div class="menu-wrap h-full flex flex-col justify-between px-2 lg:px-0 py-4 lg:py-5 lg:m-2">
    <div>
      <div class="flex items-center justify-between mb-4">
        <div class="relative px-2">
          <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
          <span class="logo text-2xl">IC Advance</span>
        </div>
        <div class="menu-toggle-close block lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <!-- menu -->
      <nav class="mb-6">
        <ul class="font-medium text-gray-700 dark:text-gray-300">
          <li class="menu-item relative hover:bg-theme-yellow rounded-lg mb-1">
            <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
              </div>
              <div>
                <?php _e("Головна", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-theme-yellow rounded-lg mb-1">
            <a href="/about" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
              </div>
              <div>
                <?php _e("Про сайт", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-theme-yellow rounded-lg mb-1">
            <a href="<?php echo get_post_type_archive_link('sites'); ?>" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
              </div>
              <div>
                <?php _e("Каталог сайтів", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-theme-yellow rounded-lg mb-1">
            <a href="/add" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>
              </div>
              <div>
                <?php _e("Додати сайт", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="relative hover:bg-theme-yellow rounded-lg mb-1">
            <a href="/contacts" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
              </div>
              <div>
                <?php _e("Контакти", "treba-wp"); ?>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="border-b border-gray-200 mb-6"></div>
      <?php if (function_exists('pll_the_languages')): ?>
      <div class="px-2">
        <div class="flex items-center text-zinc-600 dark:text-zinc-300 mb-2">
          <div class="mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
            </svg>
          </div>
          <div class="text-sm font-bold uppercase"><?php _e("Мова", "treba-wp"); ?>:</div>
        </div>
        <div class="lang">
          <?php
            pll_the_languages(); 
          ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
    
  </div>
  
    
</div>