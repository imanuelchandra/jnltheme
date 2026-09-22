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
  // --------------------------------------------------------------------------
  // include search form part
  // --------------------------------------------------------------------------
  include '_search-form.php'; ?>
</section>

<div id="slims-home">
<section class="mt-5 container">
    <h4 class="text-secondary text-center text-thin mt-5 mb-4"><?php echo __('Select the topic you are interested in'); ?></h4>
    <ul class="topic d-flex flex-wrap justify-content-center px-0">
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Literature'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Social Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Applied Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Art & Recreation'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80"
                     class="mb-3 mx-auto"/>
                <?php echo __('see more..'); ?>
            </a>
        </li>
    </ul>
</section>

<?php if ($sysconf['template']['classic_popular_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('Popular among our collections'); ?>
        <br>
        <small class="subtitle-section"><?php echo __('Our library\'s line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_new_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('New collections + updated');?>
        <br>
        <small class="subtitle-section"><?php echo __('These are new collections list. Hope you like them. Maybe not all of them are new. But in term of time, we make sure that these are fresh from our processing oven');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_top_reader']) : ?>
<section class="mt-5 bg-white">
    <div class="container py-5">
        <h4 class="mb-4">
            <?php echo __('Top reader of the year');?>
            <br>
            <small class="subtitle-section"><?php echo __('Our best users, readers, so far. Continue to read if you want your name being mentioned here');?></small>
        </h4>
        <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
    </div>
</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_map']) : ?>
<section class="my-5 container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <iframe class="embed-responsive"
                    src="<?= $sysconf['template']['classic_map_link']; ?>"
                    height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pt-8 md:pt-0">
            <h4><?= $sysconf['library_name']; ?></h4>
            <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            <p class="d-flex flex-row pt-2">
                <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
            </p>
        </div>
    </div>
</section>
<?php endif; ?>
</div>