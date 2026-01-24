<!doctype html>
<html <?php language_attributes(); ?> class="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6', // Example custom color
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <script>
        // Check local storage for theme preference or default to light
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            // User specifically asked to default to light mode, but let's respect previous choice if explicitly set.
            // If nothing set, default to light as requested.
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }
    </script>
    <?php wp_head(); ?>
    
    <!-- Mobile Critical Fixes - Load LAST to override Tailwind -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile-critical.css?v=1.4">
    <style>
        /* Scrolled State Overrides */
        /* Light Mode Scrolled */
        #masthead.is-scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            border-bottom-color: #f3f4f6;
            /* gray-100 */
        }

        /* Dark Mode Scrolled */
        .dark #masthead.is-scrolled {
            background-color: rgba(15, 23, 42, 0.95);
            /* slate-900 */
            border-bottom-color: rgba(255, 255, 255, 0.05);
        }

        #masthead.is-scrolled .top-bar {
            height: 0;
            opacity: 0;
            padding-top: 0;
            padding-bottom: 0;
            border-bottom-width: 0;
            overflow: hidden;
        }

        /* Logo Box */
        #masthead.is-scrolled .logo-box {
            background-color: #0f172a;
            /* slate-900 */
            color: white;
        }

        .dark #masthead.is-scrolled .logo-box {
            background-color: white;
            color: #0f172a;
        }

        /* Logo Text */
        #masthead.is-scrolled .logo-text-primary {
            color: #0f172a;
            /* slate-900 */
        }

        .dark #masthead.is-scrolled .logo-text-primary {
            color: white;
        }

        /* Logo Subtext */
        #masthead.is-scrolled .logo-subtext {
            color: #64748b;
            /* slate-500 */
        }

        .dark #masthead.is-scrolled .logo-subtext {
            color: #94a3b8;
            /* slate-400 */
        }

        /* Nav Links */
        #masthead.is-scrolled .nav-link-item {
            color: #334155;
            /* slate-700 */
        }

        .dark #masthead.is-scrolled .nav-link-item {
            color: #e2e8f0;
            /* slate-200 */
        }

        #masthead.is-scrolled .nav-link-item:hover {
            color: #ea580c;
            /* orange-600 */
        }

        /* Mobile Menu Btn */
        #masthead.is-scrolled .mobile-menu-btn {
            color: #0f172a;
            /* slate-900 */
        }

        .dark #masthead.is-scrolled .mobile-menu-btn {
            color: white;
        }

        /* Action Search Btn */
        #masthead.is-scrolled .action-search-btn {
            color: #64748b;
            /* slate-500 */
        }

        .dark #masthead.is-scrolled .action-search-btn {
            color: #cbd5e1;
            /* slate-300 */
        }

        #masthead.is-scrolled .action-search-btn:hover {
            background-color: #f1f5f9;
            /* slate-100 */
        }

        .dark #masthead.is-scrolled .action-search-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body <?php body_class('bg-gray-50 text-gray-900 antialiased dark:bg-slate-950 dark:text-gray-100 transition-colors duration-300'); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site min-h-screen flex flex-col">
        <a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:p-4 focus:bg-white focus:z-50"
            href="#primary"><?php esc_html_e('Skip to content', 'tavacam'); ?></a>

        <header id="masthead"
            class="fixed top-0 z-50 w-full transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-200 dark:bg-slate-900/80 dark:border-white/10">

            <!-- Top Bar -->
            <div
                class="top-bar transition-all duration-300 bg-slate-100 text-slate-600 dark:bg-slate-950 dark:text-slate-400 py-2 text-[11px] border-b border-gray-200 dark:border-white/5 font-medium tracking-wide">
                <div class="container mx-auto px-6 flex justify-between items-center">
                    <div class="flex items-center space-x-6">
                        <a href="#"
                            class="hover:text-orange-600 dark:hover:text-white transition flex items-center gap-1.5 group/item">
                            <i data-lucide="briefcase"
                                class="w-3 h-3 text-orange-500 group-hover/item:text-orange-400"></i>
                            <span
                                class="border-b border-transparent group-hover/item:border-orange-600 dark:group-hover/item:border-white transition-all">Kênh
                                Doanh nghiệp (B2B)</span>
                        </a>
                        <span class="text-slate-300 dark:text-slate-700">|</span>
                        <a href="#"
                            class="hover:text-blue-600 dark:hover:text-white transition flex items-center gap-1.5 group/item">
                            <i data-lucide="monitor" class="w-3 h-3 text-blue-500 group-hover/item:text-blue-400"></i>
                            <span
                                class="border-b border-transparent group-hover/item:border-blue-600 dark:group-hover/item:border-white transition-all">Hệ
                                sinh thái TavaLED</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="tel:19006600" class="hover:text-white transition font-bold text-orange-500">Hotline:
                            1900 6600</a>
                        <div class="w-px h-3 bg-slate-700"></div>

                        <!-- Language Dropdown -->
                        <div class="relative group cursor-pointer z-[60]">
                            <button class="flex items-center hover:text-white transition gap-1 uppercase"
                                id="lang-toggle-btn">
                                <span id="current-lang-flag" class="flex items-center justify-center"><i
                                        data-lucide="globe" class="w-3 h-3"></i></span>
                                <span id="current-lang-text">Global (EN)</span>
                                <i data-lucide="chevron-down"
                                    class="w-2.5 h-2.5 transition-transform group-hover:rotate-180"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 top-full pt-2 w-36 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-1 group-hover:translate-y-0">
                                <div
                                    class="bg-white dark:bg-slate-800 rounded-md shadow-lg border border-gray-100 dark:border-gray-700 py-1 overflow-hidden">
                                    <a href="javascript:void(0)" onclick="setLanguage('vn')"
                                        class="block px-4 py-2 text-xs text-slate-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-white/10 hover:text-orange-600 dark:hover:text-white flex items-center gap-2">
                                        <img src="https://flagcdn.com/w20/vn.png" width="14" alt="VN" class="shrink-0">
                                        Vietnam (VN)
                                    </a>
                                    <a href="javascript:void(0)" onclick="setLanguage('en')"
                                        class="block px-4 py-2 text-xs text-slate-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-white/10 hover:text-orange-600 dark:hover:text-white flex items-center gap-2">
                                        <img src="https://flagcdn.com/w20/us.png" width="14" alt="US" class="shrink-0">
                                        Global (EN)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navbar -->
            <div class="container mx-auto px-6 h-[80px]">
                <div class="flex justify-between items-center h-full">

                    <!-- 1. Logo Area -->
                    <div class="flex items-center z-50">
                        <button class="lg:hidden mr-4 text-slate-900 dark:text-white mobile-menu-btn"
                            id="mobile-menu-toggle">
                            <i data-lucide="menu" class="w-6 h-6"></i>
                        </button>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                            <div
                                class="logo-box relative w-10 h-10 rounded-xl flex items-center justify-center shadow-lg transition-colors duration-300 bg-slate-900 text-white dark:bg-white dark:text-slate-900">
                                <i data-lucide="scan" class="w-6 h-6 text-orange-500" stroke-width="2.5"></i>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="logo-text-primary text-2xl font-extrabold tracking-tight leading-none transition-colors uppercase text-slate-900 dark:text-white">
                                    TAVA<span class="text-orange-600">VISION</span>
                                </span>
                                <span
                                    class="logo-subtext text-[9px] uppercase tracking-[0.25em] font-semibold mt-0.5 text-slate-500 dark:text-white/60">
                                    AI Intelligence
                                </span>
                            </div>
                        </a>
                    </div>

                    <!-- 2. Desktop Menu -->
                    <nav class="hidden lg:flex h-full items-center gap-1">

                        <!-- Link: Trang chủ -->
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full text-slate-700 hover:text-orange-600 hover:bg-orange-50 dark:text-white/90 dark:hover:text-white dark:hover:bg-orange-500/10">
                            Trang chủ
                        </a>

                        <!-- Link: Tin tức -->
                        <?php 
                        $insights_page = get_page_by_path('tin-tuc');
                        if (!$insights_page) $insights_page = get_page_by_path('insights');
                        if (!$insights_page) $insights_page = get_page_by_path('news');
                        ?>
                        <a href="<?php echo $insights_page ? esc_url(get_permalink($insights_page->ID)) : esc_url(home_url('/tin-tuc')); ?>"
                            class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full text-slate-700 hover:text-orange-600 hover:bg-orange-50 dark:text-white/90 dark:hover:text-white dark:hover:bg-orange-500/10">
                            Tin tức
                        </a>

                        <!-- DROPDOWN: Về chúng tôi -->
                        <div class="group relative h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-slate-700 group-hover:text-orange-600 group-hover:bg-orange-50 dark:text-white/90 dark:group-hover:text-white dark:group-hover:bg-orange-500/10">
                                Về chúng tôi <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>
                            <div
                                class="absolute top-full left-0 w-64 bg-white dark:bg-slate-900 shadow-xl rounded-xl border border-gray-100 dark:border-gray-800 mt-2 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="text-left">
                                    <?php 
                                    $about_page = get_page_by_path('ve-chung-toi');
                                    if (!$about_page) $about_page = get_page_by_path('about');
                                    if (!$about_page) $about_page = get_page_by_path('gioi-thieu');
                                    ?>
                                    <a href="<?php echo $about_page ? esc_url(get_permalink($about_page->ID)) : esc_url(home_url('/ve-chung-toi')); ?>"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="info" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Giới thiệu</span>
                                    </a>
                                    <a href="<?php echo esc_url(home_url('/cong-nghe')); ?>"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="cpu" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Công nghệ</span>
                                    </a>
                                    <?php 
                                    $philosophy_page = get_page_by_path('triet-ly');
                                    if (!$philosophy_page) $philosophy_page = get_page_by_path('philosophy');
                                    ?>
                                    <a href="<?php echo $philosophy_page ? esc_url(get_permalink($philosophy_page->ID)) : esc_url(home_url('/triet-ly')); ?>"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="lightbulb" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Triết lý</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- MEGA MENU: Sản phẩm -->
                        <div class="group h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-slate-700 group-hover:text-orange-600 group-hover:bg-orange-50 dark:text-white/90 dark:group-hover:text-white dark:group-hover:bg-orange-500/10">
                                Sản phẩm <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>

                            <!-- Mega Menu Content -->
                            <div
                                class="absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-2xl border-t border-gray-100 dark:border-gray-800 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="container mx-auto p-8">
                                    <div class="grid grid-cols-12 gap-8">
                                        <!-- Column 1: Camera -->
                                        <div class="col-span-3 text-left">
                                            <h4
                                                class="flex items-center gap-2 text-orange-600 font-bold uppercase text-xs tracking-widest mb-4 pb-2 border-b border-orange-100 dark:border-orange-500/20">
                                                <i data-lucide="eye" class="w-4 h-4"></i> Camera Thông Minh
                                            </h4>
                                            <ul class="space-y-3">
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="scan"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-orange-600">
                                                                Camera Trong nhà</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">Nhỏ
                                                                gọn, đàm thoại 2 chiều</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="shield"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-orange-600">
                                                                Camera Ngoài trời</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">
                                                                Chống nước IP67, AI báo động</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="settings"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-orange-600">
                                                                Camera PTZ</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">Zoom
                                                                quang học 30x, xoay 360</div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 2: Storage -->
                                        <div class="col-span-3 text-left">
                                            <h4
                                                class="flex items-center gap-2 text-blue-600 font-bold uppercase text-xs tracking-widest mb-4 pb-2 border-b border-blue-100 dark:border-blue-500/20">
                                                <i data-lucide="box" class="w-4 h-4"></i> Lưu trữ & Hiển thị
                                            </h4>
                                            <ul class="space-y-3">
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="box"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-blue-600">
                                                                Đầu ghi NVR AI</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">Phân
                                                                tích khuôn mặt tại biên</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="cloud"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-blue-600">
                                                                Cloud Storage</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">
                                                                Server Việt Nam, bảo mật cao</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 dark:hover:bg-white/5 p-2 rounded-lg transition"><i
                                                            data-lucide="monitor"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 dark:text-slate-200 group-hover/item:text-blue-600">
                                                                Màn hình TavaLED</div>
                                                            <div class="text-xs text-slate-500 dark:text-slate-400">Giải
                                                                pháp Video Wall đồng bộ</div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 3: Banner New Product -->
                                        <div
                                            class="col-span-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl p-5 border border-slate-100 dark:border-slate-700 relative overflow-hidden group/banner text-left">
                                            <div
                                                class="absolute top-0 right-0 bg-orange-600 text-white text-[10px] font-bold px-2 py-1 rounded-bl-lg">
                                                NEW</div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">TavaVision Eagle
                                                Eye Pro</h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400 mb-4">Dòng camera mắt
                                                thần mới nhất với khả năng nhìn đêm có màu.</p>
                                            <div
                                                class="w-full h-32 bg-gray-200 dark:bg-slate-700 rounded-lg mb-4 overflow-hidden">
                                                <!-- Placeholder Image -->
                                                <img src="https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974&auto=format&fit=crop"
                                                    class="w-full h-full object-cover transform group-hover/banner:scale-105 transition duration-500 opacity-80 hover:opacity-100"
                                                    alt="New Camera" />
                                            </div>
                                            <?php 
                                            $app_page = get_page_by_path('ung-dung-mobile');
                                            if (!$app_page) $app_page = get_page_by_path('mobile-app');
                                            ?>
                                            <a href="<?php echo $app_page ? esc_url(get_permalink($app_page->ID)) : esc_url(home_url('/ung-dung-mobile')); ?>"
                                                class="text-xs font-bold text-orange-600 flex items-center gap-1 hover:gap-2 transition-all">Xem
                                                chi tiết <i data-lucide="arrow-right" class="w-3 h-3"></i></a>
                                        </div>

                                        <!-- Column 4: Banner Software -->
                                        <div
                                            class="col-span-3 bg-slate-900 dark:bg-black rounded-xl p-6 text-white relative overflow-hidden text-left">
                                            <div class="relative z-10">
                                                <div
                                                    class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center mb-4">
                                                    <i data-lucide="cpu" class="w-5 h-5"></i>
                                                </div>
                                                <h4 class="font-bold text-lg mb-2">Tava VMS Platform</h4>
                                                <p class="text-xs text-slate-400 mb-6 leading-relaxed">Phần mềm quản trị
                                                    tập trung hàng ngàn thiết bị trên một giao diện duy nhất.</p>
                                                <?php 
                                                $philosophy_page = get_page_by_path('triet-ly');
                                                if (!$philosophy_page) $philosophy_page = get_page_by_path('philosophy');
                                                ?>
                                                <a href="<?php echo $philosophy_page ? esc_url(get_permalink($philosophy_page->ID)) : esc_url(home_url('/triet-ly')); ?>"
                                                    class="block w-full py-2 bg-white text-slate-900 text-xs font-bold rounded hover:bg-orange-50 transition text-center">Tìm hiểu
                                                    thêm</a>
                                            </div>
                                            <div
                                                class="absolute top-0 right-0 w-32 h-32 bg-orange-500 rounded-full blur-[60px] opacity-20">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MEGA MENU: Giải pháp -->
                        <div class="group h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-slate-700 group-hover:text-orange-600 group-hover:bg-orange-50 dark:text-white/90 dark:group-hover:text-white dark:group-hover:bg-orange-500/10">
                                Giải pháp <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>

                            <div
                                class="absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-2xl border-t border-gray-100 dark:border-gray-800 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="container mx-auto p-8">
                                    <div class="grid grid-cols-3 gap-6 text-left">
                                        <!-- Cá nhân -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-ca-nhan')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-pink-100 dark:hover:border-pink-500/30">
                                            <div
                                                class="w-12 h-12 bg-pink-100 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-pink-600 group-hover/card:text-white transition">
                                                <i data-lucide="user" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Cá nhân
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Giải pháp an ninh cho gia đình và nhà riêng.</p>
                                        </a>
                                        
                                        <!-- Doanh nghiệp -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-doanh-nghiep')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-indigo-100 dark:hover:border-indigo-500/30">
                                            <div
                                                class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-indigo-600 group-hover/card:text-white transition">
                                                <i data-lucide="briefcase" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Doanh nghiệp
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Hệ thống giám sát toàn diện cho công ty.</p>
                                        </a>
                                        
                                        <!-- Mobile App -->
                                        <?php 
                                        $app_page = get_page_by_path('ung-dung-mobile');
                                        if (!$app_page) $app_page = get_page_by_path('mobile-app');
                                        ?>
                                        <a href="<?php echo $app_page ? esc_url(get_permalink($app_page->ID)) : esc_url(home_url('/ung-dung-mobile')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-cyan-100 dark:hover:border-cyan-500/30">
                                            <div
                                                class="w-12 h-12 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 dark:text-cyan-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-cyan-600 group-hover/card:text-white transition">
                                                <i data-lucide="smartphone" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Mobile App
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Quản lý camera mọi lúc mọi nơi.</p>
                                        </a>
                                        
                                        <!-- Bán lẻ & Chuỗi -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-ban-le')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-orange-100 dark:hover:border-orange-500/30">
                                            <div
                                                class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-orange-600 group-hover/card:text-white transition">
                                                <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Bán lẻ & Chuỗi
                                            </h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Đếm người, Heatmap, quản lý quầy thu ngân.</p>
                                        </a>
                                        
                                        <!-- Nhà máy & KCN -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-nha-may')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-blue-100 dark:hover:border-blue-500/30">
                                            <div
                                                class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-blue-600 group-hover/card:text-white transition">
                                                <i data-lucide="factory" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Nhà máy & KCN</h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Kiểm soát ra vào, an toàn lao động, hàng rào ảo.</p>
                                        </a>
                                        
                                        <!-- Ngân hàng & Tài chính -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-ngan-hang')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-green-100 dark:hover:border-green-500/30">
                                            <div
                                                class="w-12 h-12 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-green-600 group-hover/card:text-white transition">
                                                <i data-lucide="landmark" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Ngân hàng & Tài chính</h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Nhận diện VIP/Blacklist, an ninh kho quỹ.</p>
                                        </a>
                                        
                                        <!-- Giao thông thông minh -->
                                        <a href="<?php echo esc_url(home_url('/giai-phap-giao-thong')); ?>"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-white/5 transition border border-transparent hover:border-purple-100 dark:hover:border-purple-500/30">
                                            <div
                                                class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-purple-600 group-hover/card:text-white transition">
                                                <i data-lucide="truck" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Giao thông thông minh</h4>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Đọc biển số, phát hiện vi phạm, giám sát bãi xe.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- DROPDOWN: Hỗ trợ -->
                        <div class="group relative h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-slate-700 group-hover:text-orange-600 group-hover:bg-orange-50 dark:text-white/90 dark:group-hover:text-white dark:group-hover:bg-orange-500/10">
                                Hỗ trợ <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>
                            <div
                                class="absolute top-full left-0 w-64 bg-white dark:bg-slate-900 shadow-xl rounded-xl border border-gray-100 dark:border-gray-800 mt-2 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="text-left">
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="download" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Trung tâm
                                            tải về</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="wrench" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Kích hoạt
                                            bảo hành</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="file-text" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Tài liệu
                                            hướng dẫn</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 dark:hover:bg-white/5 rounded-lg transition">
                                        <i data-lucide="map-pin" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Hệ thống
                                            đại lý</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </nav>

                    <!-- 3. Right Actions -->
                    <div class="hidden lg:flex items-center gap-4 z-50">
                        <!-- Theme Toggle Button -->
                        <button onclick="toggleTheme()"
                            class="w-10 h-10 rounded-full flex items-center justify-center transition text-slate-500 hover:bg-slate-100 dark:text-white dark:hover:bg-white/10"
                            title="Toggle Dark Mode">
                            <!-- Sun Icon (Hidden manually via CSS if dark) -->
                            <i data-lucide="sun" class="w-5 h-5 hidden dark:block"></i>
                            <!-- Moon Icon (Hidden manually via CSS if light) -->
                            <i data-lucide="moon" class="w-5 h-5 block dark:hidden"></i>
                        </button>

                        <button
                            class="action-search-btn w-10 h-10 rounded-full flex items-center justify-center transition text-slate-500 hover:bg-slate-100 dark:text-white dark:hover:bg-white/10">
                            <i data-lucide="search" class="w-5 h-5"></i>
                        </button>
                        <a href="#"
                            class="px-6 py-2.5 bg-gradient-to-r from-orange-600 to-orange-500 text-white text-[13px] font-bold uppercase tracking-wider rounded-sm hover:from-orange-700 hover:to-orange-600 transition shadow-lg shadow-orange-500/30 transform hover:-translate-y-0.5 flex items-center gap-2">
                            <i data-lucide="zap" class="w-3.5 h-3.5 fill-white text-white"></i> Báo giá ngay
                        </a>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <!-- Mobile Menu Sidebar -->
        <div id="mobile-menu" class="hidden fixed inset-0 z-[100] lg:hidden">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
            
            <!-- Menu Sidebar -->
            <div class="absolute right-0 top-0 h-full w-[300px] bg-white dark:bg-slate-900 shadow-2xl flex flex-col">
                <!-- Header -->
                <div class="flex justify-between items-center p-6 border-b border-gray-200 dark:border-gray-800">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center">
                            <i data-lucide="scan" class="w-5 h-5 text-white"></i>
                        </div>
                        <span class="font-bold text-lg text-slate-900 dark:text-white">Menu</span>
                    </div>
                    <button onclick="document.getElementById('mobile-menu').classList.add('hidden')" 
                            class="w-8 h-8 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>

                <!-- Menu Items -->
                <nav class="flex-1 overflow-y-auto p-6">
                    <ul class="space-y-2">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:text-orange-600 dark:hover:text-orange-500 transition font-semibold">
                                <i data-lucide="home" class="w-5 h-5"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        
                        <?php 
                        $about_page = get_page_by_path('ve-chung-toi');
                        if (!$about_page) $about_page = get_page_by_path('about');
                        ?>
                        <li>
                            <a href="<?php echo $about_page ? esc_url(get_permalink($about_page->ID)) : esc_url(home_url('/ve-chung-toi')); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:text-orange-600 dark:hover:text-orange-500 transition font-semibold">
                                <i data-lucide="info" class="w-5 h-5"></i>
                                <span>Về chúng tôi</span>
                            </a>
                        </li>
                        
                        <?php 
                        $insights_page = get_page_by_path('tin-tuc');
                        if (!$insights_page) $insights_page = get_page_by_path('insights');
                        ?>
                        <li>
                            <a href="<?php echo $insights_page ? esc_url(get_permalink($insights_page->ID)) : esc_url(home_url('/tin-tuc')); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:text-orange-600 dark:hover:text-orange-500 transition font-semibold">
                                <i data-lucide="newspaper" class="w-5 h-5"></i>
                                <span>Tin tức</span>
                            </a>
                        </li>
                        
                        <?php 
                        $app_page = get_page_by_path('ung-dung-mobile');
                        if (!$app_page) $app_page = get_page_by_path('mobile-app');
                        if (!$app_page) $app_page = get_page_by_path('app');
                        ?>
                        <li>
                            <a href="<?php echo $app_page ? esc_url(get_permalink($app_page->ID)) : esc_url(home_url('/ung-dung-mobile')); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:text-orange-600 dark:hover:text-orange-500 transition font-semibold">
                                <i data-lucide="smartphone" class="w-5 h-5"></i>
                                <span>Mobile App</span>
                            </a>
                        </li>
                        
                        <?php 
                        $philosophy_page = get_page_by_path('triet-ly');
                        if (!$philosophy_page) $philosophy_page = get_page_by_path('philosophy');
                        if (!$philosophy_page) $philosophy_page = get_page_by_path('triet-ly-san-pham');
                        ?>
                        <li>
                            <a href="<?php echo $philosophy_page ? esc_url(get_permalink($philosophy_page->ID)) : esc_url(home_url('/triet-ly')); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:text-orange-600 dark:hover:text-orange-500 transition font-semibold">
                                <i data-lucide="lightbulb" class="w-5 h-5"></i>
                                <span>Triết Lý</span>
                            </a>
                        </li>
                        
                        <li>
                            <div class="px-4 py-2 text-xs font-bold uppercase text-slate-400 dark:text-slate-500 tracking-wider mt-4 mb-2">Sản phẩm</div>
                        </li>
                        
                        <li>
                            <a href="#" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-white/5 transition">
                                <i data-lucide="eye" class="w-4 h-4 text-orange-500"></i>
                                <span class="text-sm">Camera Thông Minh</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-white/5 transition">
                                <i data-lucide="box" class="w-4 h-4 text-blue-500"></i>
                                <span class="text-sm">Lưu trữ & Hiển thị</span>
                            </a>
                        </li>
                        
                        <li>
                            <div class="px-4 py-2 text-xs font-bold uppercase text-slate-400 dark:text-slate-500 tracking-wider mt-4 mb-2">Giải pháp</div>
                        </li>
                        
                        <li>
                            <a href="#" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-white/5 transition">
                                <i data-lucide="shopping-cart" class="w-4 h-4 text-orange-500"></i>
                                <span class="text-sm">Bán lẻ & Chuỗi</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" 
                               class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-white/5 transition">
                                <i data-lucide="factory" class="w-4 h-4 text-blue-500"></i>
                                <span class="text-sm">Nhà máy & KCN</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Footer Actions -->
                <div class="p-6 border-t border-gray-200 dark:border-gray-800 space-y-3">
                    <button onclick="toggleTheme()" 
                            class="w-full px-4 py-3 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition flex items-center justify-center gap-2 font-semibold">
                        <i data-lucide="sun" class="w-4 h-4 hidden dark:block"></i>
                        <i data-lucide="moon" class="w-4 h-4 block dark:hidden"></i>
                        <span>Chế độ tối</span>
                    </button>
                    <a href="tel:19006600" 
                       class="block w-full px-4 py-3 bg-gradient-to-r from-orange-600 to-orange-500 text-white rounded-lg hover:from-orange-700 hover:to-orange-600 transition text-center font-bold flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span>Hotline: 1900 6600</span>
                    </a>
                </div>
            </div>
        </div>