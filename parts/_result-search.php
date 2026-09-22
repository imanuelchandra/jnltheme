<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:32:46+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _result-search.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T16:53:58+07:00

?>

<div class="result-search">
     <?php
        # @Author: Waris Agung Widodo <user>
        # @Date:   2018-01-23T11:27:04+07:00
        # @Email:  ido.alit@gmail.com
        # @Filename: _home.php
        # @Last modified by:   user
        # @Last modified time: 2018-01-26T18:43:45+07:00

        $main_menus = [
          'home' => [
            'text' => __('Home'),
            'url' => 'index.php'
          ],
          'katalog' => [
            'text' => __('Katalog'),
            'url' => 'index.php?keywords=&search=search'
          ],
          'tajuk' => [
            'text' => __('Tajuk'),
            'url' => 'index.php?p=tajuk_subjek'
          ],
          'libinfo' => [
            'text' => __('Information'),
            'url' => 'index.php?p=libinfo'
          ],
          'news' => [
            'text' => __('News'),
            'url' => 'index.php?p=news'
          ],
          'help' => [
            'text' => __('Help'),
            'url' => 'index.php?p=help'
          ],
          'librarian' => [
            'text' => __('Librarian'),
            'url' => 'index.php?p=librarian'
          ]
        ];
        ?>
        <div class="bg-sttbethel text-white border-b border-white/10 py-4 px-4 hidden lg:block">

                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <a href="#" class="flex items-center gap-4 group">
                        <div class="w-16 h-16 flex items-center justify-center transition-transform group-hover:scale-105 duration-300">
                          <img src="<?php echo assets('images/logo.webp'); ?>" alt="Logo STT BETHEL AMBON" class="w-full h-full object-contain logo-outline" loading="eager"> 
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="text-[9px] font-bold tracking-[0.4em] text-white/70 uppercase leading-none mb-1.5">
                            SEKOLAH TINGGI TEOLOGI
                            </span>
                            <h1 class="font-serif font-black text-2xl leading-none text-white tracking-tight uppercase">
                                BETHEL AMBON
                            </h1>
                        </div>
                    </a>
                    <div class="flex flex-col items-end gap-3">
                        <a href="index.php?p=member" wire:navigate="" class="px-6 py-2 bg-primary text-white rounded-full text-sm font-bold hover:bg-primary/90 transition-all shadow-lg">
                            Login
                        </a>
                    </div>
                </div>
                
        </div>
        <header id="header-nav" :class="scrolledHeader ? 'bg-white/95 backdrop-blur-lg shadow-xl border-slate-200/50' : 'bg-white/60 backdrop-blur-md border-transparent'" class="transition-[background-color,padding,box-shadow] duration-500 w-full border-b sticky top-0 z-50">
                <!-- <div class="mask"></div> -->
            <!-- <div v-scroll="handleScroll"></div> -->

        <div class="bg-white max-w-7xl mx-auto px-4 flex justify-between items-center transition-all duration-500 h-20 lg:h-16" :class="scrolled ? 'h-16 lg:h-14' : 'h-20 lg:h-16'">

            <a href="https://sttb-ambon.ac.id" wire:navigate="" class="flex lg:hidden items-center gap-2 group" data-current="">
                    <div class="w-10 h-10 flex items-center justify-center shrink-0">
                        <img src="<?php echo assets('images/logo.webp'); ?>" alt="Logo STT" class="w-full h-full object-contain logo-outline">
                    </div>
                    <div class="flex flex-col justify-center min-w-0">
                        <span class="text-[6px] sm:text-[7px] font-bold tracking-[0.15em] text-slate-500 uppercase leading-none mb-0.5 whitespace-nowrap">
                            SEKOLAH TINGGI TEOLOGI
                        </span>
                        <span class="font-serif font-black text-[11px] sm:text-sm leading-tight text-primary tracking-tight uppercase whitespace-nowrap">
                            BETHEL AMBON
                        </span>
                    </div>
            </a>
            <a href="https://sttb-ambon.ac.id" wire:navigate="" class="hidden lg:flex items-center gap-3 group transition-all duration-500 transform origin-left" :class="scrolledHeader ? 'opacity-100 translate-x-0 w-auto visible' : 'opacity-0 -translate-x-10 w-0 invisible overflow-hidden pointer-events-none'" data-current="">
                    <div class="w-10 h-10 flex items-center justify-center shrink-0">
                        <img src="<?php echo assets('images/logo.webp'); ?>" alt="Logo STT" class="w-full h-full object-contain logo-outline">
                    </div>
                    <div class="flex flex-col whitespace-nowrap justify-center">
                        <span class="text-[7px] font-bold tracking-[0.25em] text-slate-500 uppercase leading-none mb-1">
                            SEKOLAH TINGGI TEOLOGI
                        </span>
                        <span class="font-serif font-black text-base leading-none text-primary tracking-tight uppercase">
                            BETHEL AMBON
                        </span>
                    </div>
                </a>
              <?php
              // ------------------------------------------------------------------------
              // include navbar
              // ------------------------------------------------------------------------
              include '_navbar.php'; ?>
              <!-- <button @click="isOpen = !isOpen" class="lg:hidden p-2 text-slate-700 hover:text-primary transition-colors" aria-label="Buka menu navigasi">
                    <svg :style="{ !isOpen ?: display: none }" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg :style="{ isOpen ?: display: block }" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
              </button> -->

              <button @click="isNavOpen = !isNavOpen" class="lg:hidden p-2 text-slate-700 hover:text-primary transition-colors" aria-label="Buka menu navigasi">
                    <svg :style="!isNavOpen ? 'display: block' : 'display: none'" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg :style="isNavOpen ? 'display: block' : 'display: none'" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
            </button>

            <div class="lg:hidden border-t border-slate-100 shadow-xl bg-white w-full absolute top-full left-0 z-50 transition-all duration-500" :class="isNavOpen ? 'max-h-screen opacity-100' : 'max-h-0 opacity-0 overflow-hidden pointer-events-none'">
                <div id="navbarSupportedContent">
                    <ul class="navbar-nav flex flex-col lg:flex-row gap-1 lg:gap-3 items-center">
                    <?php
                    foreach ($main_menus as $key => $main_menu) {
                        $active = '';
                        if (isset($_GET['p'])) {
                        if ($key === $_GET['p']) $active = 'active';
                        } elseif ($key === 'home') {
                        $active = 'active';
                        }
                        $menu_str = <<<HTML
            <li class="nav-item {$active}">
                <a class="nav-link text-sm font-semibold px-2.5 py-3 block text-primary transition-colors" href="{$main_menu['url']}">{$main_menu['text']}</a>
            </li>
            HTML;
                        echo $menu_str;
                    }
                    ?>
                    <?php
                    $menu_member_active = isset($_GET['p']) && $_GET['p'] === 'member' ? 'active' : '';
                    if ($is_login) {
                        ?>
                        <li class="nav-item <?= $menu_member_active; ?>">
                            <a class="nav-link text-sm font-semibold px-2.5 py-3 block text-primary transition-colors" href="index.php?p=member&sec=title_basket">
                                <i class="fas fa-shopping-basket"></i>
                                <?php
                                $count_basket = count($_SESSION['m_mark_biblio']);
                                ?>
                                <sup id="count-basket" class="badge badge-danger"><?php echo $count_basket; ?></sup>
                            </a>
                        </li>
                        <li class="nav-item dropdown <?= $menu_member_active; ?>">
                            <a class="nav-link dropdown-toggle text-sm font-semibold px-2.5 py-3 block text-primary transition-colors" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="w-6 h-6 rounded-full ml-2 mr-2"
                                    src="<?php echo $member_image_path; ?>"
                                    alt="Avatar of Jonathan Reinink">
                                <?php echo $_SESSION['m_name']; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="index.php?p=member"><i class="fas fa-user-circle mr-3"></i> <?= __('Profile');?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?p=member&sec=bookmark"><i class="fas fa-bookmark mr-3"></i> <?= __('Bookmark');?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?p=member&logout=1"><i class="fas fa-sign-out-alt mr-3"></i> <?= __('Logout'); ?></a>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item <?= $menu_member_active; ?>">
                            <a class="nav-link text-sm font-semibold px-2.5 py-3 block text-primary transition-colors" href="index.php?p=member"><?= __('Member Area') ?></a>
                        </li>
                    <?php } ?>
                        <li class="nav-item dropdown">
                        <?php
                        $langstr = '';
                        $current_lang = '';
                        $select_lang = isset($_COOKIE['select_lang'])?$_COOKIE['select_lang']:$sysconf['default_lang'];
                        // require_once(LANG . 'localisation.php');
                        foreach ($available_languages??[] AS $lang_index) {
                            $selected = null;
                            $lang_code = $lang_index[0];
                            $lang_name = $lang_index[1];
                            $code_arr = explode('_', $lang_code);
                            $code_flag = strtolower($code_arr[1]);
                            if ($lang_code == $select_lang) {
                            $current_lang = [
                                'name' => $lang_name,
                                'code' => $code_flag
                            ];
                            }
                            $langstr .= <<<HTML
                <a class="dropdown-item" href="index.php?select_lang={$lang_code}">
                    <span class="flag-icon flag-icon-{$code_flag} mr-2" style="border-radius: 2px;"></span> {$lang_name}
                </a>
            HTML;
                        }
                        ?>
                            <a class="nav-link dropdown-toggle cursor-pointer" type="button" id="languageMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-<?= $current_lang['code'] ?>" style="border-radius: 2px;"></span>
                            </a>
                            <div class="dropdown-menu bg-grey-lighter dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header"><?= __('Select Language'); ?> : </h6>
                            <?= $langstr; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            </div>
        </header>
    <section id="section1 container-fluid">
      <?php
      // ------------------------------------------------------------------------
      // include search form part
      // ------------------------------------------------------------------------
      include '_search-form.php'; ?>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h4><?= __('Filter by') ?></h4>
                <?= $engine->getFilter($opac, true) ?>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mt-1 mb-2 text-sm">
                    <div>
                        <?php
                        $keywords_info = '<span class="search-keyword-info" title="' . htmlentities($keywords) . '">' . ((strlen($keywords) > 30) ? substr($keywords, 0, 30) . '...' : $keywords) . '</span>';
                        $search_result_info = '<div class="search-found-info">';
                        $search_result_info .= __('Found <strong>{biblio_list->num_rows}</strong> from your keywords') . ': <strong class="search-found-info-keywords">' . $keywords_info . '</strong>';
                        $search_result_info .= '</div>';
                        echo str_replace('{biblio_list->num_rows}', $engine->getNumRows(), $search_result_info);
                        ?>
                    </div>
                    <div class="form-inline pl-3">
                        <label class="mr-2 font-weight-bold" for="result-sort"><?= __('Sort by') ?></label>
                        <select class="custom-select custom-select-sm" id="search-order"><?= $sort_select ?></select>
                        <form class="ml-2" method="POST" action="<?= $_SERVER['PHP_SELF'] . '?' . http_build_query(array_filter($_GET, fn($key) => $key !== 'csrf_token', ARRAY_FILTER_USE_KEY)) ?>">
                            <?php if(($_SESSION['LIST_VIEW'] ?? 'list') === 'list'): ?>
                                <input type="hidden" name="csrf_token" value="<?= $opac->getCsrf() ?>"/>
                                <input type="hidden" name="view" value="grid" />
                                <button type="submit" class="btn btn-sm btn-outline-secondary items-center flex py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                                    </svg>
                                </button>
                            <?php else: ?>
                                <input type="hidden" name="view" value="list" />
                                <button type="submit" class="btn btn-sm btn-outline-secondary items-center flex py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                        <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                                    </svg>
                                </button>
                            <?php endif; ?>
                            </form>
                    </div>
                </div>
                <div class="wrapper">
                    <?php
                    if (ENVIRONMENT == 'development' && !empty($engine->getError())) echo '<div class="alert alert-danger mt-2 text-center">' . $engine->getError() . '</div>';
                    // catch empty list
                    if (trim(strip_tags($main_content)) === '') {
                        echo '<div class="d-flex justify-content-center border-t">
                                <img src="'.assets('images/empty.svg').'" />
                              </div>
                              <div class="text-center text-danger"><strong>'.__('No Result').'.</strong> '.__('Please try again').'</div>';
                    } else {
                        echo $main_content;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php if(($_SESSION['LIST_VIEW'] ?? 'list') === 'grid'): ?>
    <script>
        // This code modified from: https://www.seancdavis.com/posts/wait-until-all-images-loaded/
        $(document).ready(function () {
            // Images loaded is zero because we're going to process a new set of images.
            let imagesLoaded = 0;
            // Total images is still the total number of <img> elements on the page.
            let totalImages = $(".grid-item .img-thumbnail").length;

            // Step through each image in the DOM, clone it, attach an onload event
            // listener, then set its source to the source of the original image. When
            // that new image has loaded, fire the imageLoaded() callback.
            $(".grid-item .img-thumbnail").each(function (idx, img) {
                $("<img>").on("load", imageLoaded).attr("src", $(img).attr("src"));
            });

            // Do exactly as we had before -- increment the loaded count and if all are
            // loaded, call the allImagesLoaded() function.
            function imageLoaded() {
                imagesLoaded++;
                if (imagesLoaded == totalImages) {
                allImagesLoaded();
                }
            }

            function allImagesLoaded() {
                $('.biblioResult').addClass('row').masonry({ itemSelector: '.grid-item', columnWidth: '.grid-item' })
                $('.dropdown-toggle').dropdown()
            }
        });
    </script>
<?php endif; ?>