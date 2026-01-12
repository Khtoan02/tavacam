<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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

    <?php wp_head(); ?>
    <style>
        /* Scrolled State Overrides */
        #masthead.is-scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            border-bottom-color: #f3f4f6;
            /* gray-100 */
        }

        #masthead.is-scrolled .top-bar {
            height: 0;
            opacity: 0;
            padding-top: 0;
            padding-bottom: 0;
            border-bottom-width: 0;
            overflow: hidden;
        }

        #masthead.is-scrolled .logo-box {
            background-color: #0f172a;
            /* slate-900 */
            color: white;
        }

        #masthead.is-scrolled .logo-text-primary {
            color: #0f172a;
            /* slate-900 */
        }

        #masthead.is-scrolled .logo-subtext {
            color: #64748b;
            /* slate-500 */
        }

        #masthead.is-scrolled .nav-link-item {
            color: #334155;
            /* slate-700 */
        }

        #masthead.is-scrolled .nav-link-item:hover {
            color: #ea580c;
            /* orange-600 */
        }

        #masthead.is-scrolled .mobile-menu-btn {
            color: #0f172a;
            /* slate-900 */
        }

        #masthead.is-scrolled .action-search-btn {
            color: #64748b;
            /* slate-500 */
        }

        #masthead.is-scrolled .action-search-btn:hover {
            background-color: #f1f5f9;
            /* slate-100 */
        }

        /* Initial transparent state defaults (already in inline classes but enforced here if needed) */
        /* ... */
    </style>
</head>

<body <?php body_class('bg-gray-50 text-gray-900 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site min-h-screen flex flex-col">
        <a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:p-4 focus:bg-white focus:z-50"
            href="#primary"><?php esc_html_e('Skip to content', 'tavacam'); ?></a>

        <header id="masthead"
            class="fixed top-0 z-50 w-full transition-all duration-300 bg-slate-900/80 backdrop-blur-md border-b border-white/10">

            <!-- Top Bar -->
            <div
                class="top-bar transition-all duration-300 bg-slate-950 text-slate-400 py-2 text-[11px] border-b border-white/5 font-medium tracking-wide">
                <div class="container mx-auto px-6 flex justify-between items-center">
                    <div class="flex items-center space-x-6">
                        <a href="#" class="hover:text-white transition flex items-center gap-1.5 group/item">
                            <i data-lucide="briefcase"
                                class="w-3 h-3 text-orange-500 group-hover/item:text-orange-400"></i>
                            <span>Kênh Doanh nghiệp (B2B)</span>
                        </a>
                        <span class="text-slate-700">|</span>
                        <a href="#" class="hover:text-white transition flex items-center gap-1.5 group/item">
                            <i data-lucide="monitor" class="w-3 h-3 text-blue-500 group-hover/item:text-blue-400"></i>
                            <span>Hệ sinh thái TavaLED</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="tel:19006600" class="hover:text-white transition font-bold text-orange-500">Hotline:
                            1900 6600</a>
                        <div class="w-px h-3 bg-slate-700"></div>
                        <button class="flex items-center hover:text-white transition gap-1 uppercase">
                            <i data-lucide="globe" class="w-3 h-3"></i>
                            <span>Global (EN)</span>
                            <i data-lucide="chevron-down" class="w-2.5 h-2.5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Main Navbar -->
            <div class="container mx-auto px-6 h-[80px]">
                <div class="flex justify-between items-center h-full">

                    <!-- 1. Logo Area -->
                    <div class="flex items-center z-50">
                        <button class="lg:hidden mr-4 text-white mobile-menu-btn" id="mobile-menu-toggle">
                            <i data-lucide="menu" class="w-6 h-6"></i>
                        </button>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                            <div
                                class="logo-box relative w-10 h-10 rounded-xl flex items-center justify-center shadow-lg transition-colors duration-300 bg-white text-slate-900">
                                <i data-lucide="scan" class="w-6 h-6 text-orange-500" stroke-width="2.5"></i>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="logo-text-primary text-2xl font-extrabold tracking-tight leading-none transition-colors uppercase text-white">
                                    TAVA<span class="text-orange-600">VISION</span>
                                </span>
                                <span
                                    class="logo-subtext text-[9px] uppercase tracking-[0.25em] font-semibold mt-0.5 text-white/60">
                                    AI Intelligence
                                </span>
                            </div>
                        </a>
                    </div>

                    <!-- 2. Desktop Menu -->
                    <nav class="hidden lg:flex h-full items-center gap-1">

                        <!-- Link: Trang chủ -->
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full text-white/90 hover:text-white hover:bg-orange-500/10">
                            Trang chủ
                        </a>

                        <!-- MEGA MENU: Sản phẩm -->
                        <div class="group h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-white/90 group-hover:text-white group-hover:bg-orange-500/10">
                                Sản phẩm <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>

                            <!-- Mega Menu Content -->
                            <div
                                class="absolute top-full left-0 w-full bg-white shadow-2xl border-t border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="container mx-auto p-8">
                                    <div class="grid grid-cols-12 gap-8">
                                        <!-- Column 1: Camera -->
                                        <div class="col-span-3 text-left">
                                            <h4
                                                class="flex items-center gap-2 text-orange-600 font-bold uppercase text-xs tracking-widest mb-4 pb-2 border-b border-orange-100">
                                                <i data-lucide="eye" class="w-4 h-4"></i> Camera Thông Minh
                                            </h4>
                                            <ul class="space-y-3">
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="scan"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-orange-600">
                                                                Camera Trong nhà</div>
                                                            <div class="text-xs text-slate-500">Nhỏ gọn, đàm thoại 2
                                                                chiều</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="shield"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-orange-600">
                                                                Camera Ngoài trời</div>
                                                            <div class="text-xs text-slate-500">Chống nước IP67, AI báo
                                                                động</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="settings"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-orange-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-orange-600">
                                                                Camera PTZ</div>
                                                            <div class="text-xs text-slate-500">Zoom quang học 30x, xoay
                                                                360</div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 2: Storage -->
                                        <div class="col-span-3 text-left">
                                            <h4
                                                class="flex items-center gap-2 text-blue-600 font-bold uppercase text-xs tracking-widest mb-4 pb-2 border-b border-blue-100">
                                                <i data-lucide="box" class="w-4 h-4"></i> Lưu trữ & Hiển thị
                                            </h4>
                                            <ul class="space-y-3">
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="box"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-blue-600">
                                                                Đầu ghi NVR AI</div>
                                                            <div class="text-xs text-slate-500">Phân tích khuôn mặt tại
                                                                biên</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="cloud"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-blue-600">
                                                                Cloud Storage</div>
                                                            <div class="text-xs text-slate-500">Server Việt Nam, bảo mật
                                                                cao</div>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#"
                                                        class="flex items-start gap-3 group/item hover:bg-slate-50 p-2 rounded-lg transition"><i
                                                            data-lucide="monitor"
                                                            class="w-4.5 h-4.5 text-slate-400 group-hover/item:text-blue-500 mt-1"></i>
                                                        <div>
                                                            <div
                                                                class="font-bold text-slate-800 group-hover/item:text-blue-600">
                                                                Màn hình TavaLED</div>
                                                            <div class="text-xs text-slate-500">Giải pháp Video Wall
                                                                đồng bộ</div>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </div>

                                        <!-- Column 3: Banner New Product -->
                                        <div
                                            class="col-span-3 bg-slate-50 rounded-xl p-5 border border-slate-100 relative overflow-hidden group/banner text-left">
                                            <div
                                                class="absolute top-0 right-0 bg-orange-600 text-white text-[10px] font-bold px-2 py-1 rounded-bl-lg">
                                                NEW</div>
                                            <h4 class="font-bold text-slate-900 mb-2">TavaVision Eagle Eye Pro</h4>
                                            <p class="text-xs text-slate-500 mb-4">Dòng camera mắt thần mới nhất với khả
                                                năng nhìn đêm có màu.</p>
                                            <div class="w-full h-32 bg-gray-200 rounded-lg mb-4 overflow-hidden">
                                                <!-- Placeholder Image -->
                                                <img src="https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974&auto=format&fit=crop"
                                                    class="w-full h-full object-cover transform group-hover/banner:scale-105 transition duration-500"
                                                    alt="New Camera" />
                                            </div>
                                            <a href="#"
                                                class="text-xs font-bold text-orange-600 flex items-center gap-1 hover:gap-2 transition-all">Xem
                                                chi tiết <i data-lucide="arrow-right" class="w-3 h-3"></i></a>
                                        </div>

                                        <!-- Column 4: Banner Software -->
                                        <div
                                            class="col-span-3 bg-slate-900 rounded-xl p-6 text-white relative overflow-hidden text-left">
                                            <div class="relative z-10">
                                                <div
                                                    class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center mb-4">
                                                    <i data-lucide="cpu" class="w-5 h-5"></i>
                                                </div>
                                                <h4 class="font-bold text-lg mb-2">Tava VMS Platform</h4>
                                                <p class="text-xs text-slate-400 mb-6 leading-relaxed">Phần mềm quản trị
                                                    tập trung hàng ngàn thiết bị trên một giao diện duy nhất.</p>
                                                <button
                                                    class="w-full py-2 bg-white text-slate-900 text-xs font-bold rounded hover:bg-orange-50 transition">Đăng
                                                    ký Demo</button>
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
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-white/90 group-hover:text-white group-hover:bg-orange-500/10">
                                Giải pháp <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>

                            <div
                                class="absolute top-full left-0 w-full bg-white shadow-2xl border-t border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="container mx-auto p-8">
                                    <div class="grid grid-cols-4 gap-8 text-left">
                                        <a href="#"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-orange-100">
                                            <div
                                                class="w-12 h-12 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-orange-600 group-hover/card:text-white transition">
                                                <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 mb-1">Bán lẻ & Chuỗi</h4>
                                            <p class="text-xs text-slate-500">Đếm người, Heatmap, quản lý quầy thu ngân.
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-blue-100">
                                            <div
                                                class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-blue-600 group-hover/card:text-white transition">
                                                <i data-lucide="factory" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 mb-1">Nhà máy & KCN</h4>
                                            <p class="text-xs text-slate-500">Kiểm soát ra vào, an toàn lao động, hàng
                                                rào ảo.</p>
                                        </a>
                                        <a href="#"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-green-100">
                                            <div
                                                class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-green-600 group-hover/card:text-white transition">
                                                <i data-lucide="landmark" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 mb-1">Ngân hàng & Tài chính</h4>
                                            <p class="text-xs text-slate-500">Nhận diện VIP/Blacklist, an ninh kho quỹ.
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="group/card block p-4 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-purple-100">
                                            <div
                                                class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover/card:bg-purple-600 group-hover/card:text-white transition">
                                                <i data-lucide="truck" class="w-6 h-6"></i>
                                            </div>
                                            <h4 class="font-bold text-slate-900 mb-1">Giao thông thông minh</h4>
                                            <p class="text-xs text-slate-500">Đọc biển số, phát hiện vi phạm, giám sát
                                                bãi xe.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DROPDOWN: Công nghệ -->
                        <div class="group relative h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-white/90 group-hover:text-white group-hover:bg-orange-500/10">
                                Công nghệ <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>
                            <div
                                class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-xl border border-gray-100 mt-2 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="text-left">
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="cpu" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">TavaVision AI Core</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="cloud" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Cloud Platform</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="lock" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Bảo mật dữ liệu</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- DROPDOWN: Hỗ trợ -->
                        <div class="group relative h-full flex items-center">
                            <button
                                class="nav-link-item relative px-4 py-2 text-[14px] font-bold uppercase tracking-wide transition-colors rounded-full flex items-center gap-1 text-white/90 group-hover:text-white group-hover:bg-orange-500/10">
                                Hỗ trợ <i data-lucide="chevron-down"
                                    class="w-3.5 h-3.5 opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                            </button>
                            <div
                                class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-xl border border-gray-100 mt-2 p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-40">
                                <div class="text-left">
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="download" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Trung tâm tải về</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="wrench" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Kích hoạt bảo hành</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="file-text" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Tài liệu hướng dẫn</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-3 p-3 hover:bg-slate-50 rounded-lg transition">
                                        <i data-lucide="map-pin" class="w-4.5 h-4.5 text-slate-400"></i>
                                        <span class="text-sm font-semibold text-slate-700">Hệ thống đại lý</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </nav>

                    <!-- 3. Right Actions -->
                    <div class="hidden lg:flex items-center gap-4 z-50">
                        <button
                            class="action-search-btn w-10 h-10 rounded-full flex items-center justify-center transition text-white hover:bg-white/10">
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