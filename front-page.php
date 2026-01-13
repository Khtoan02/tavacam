<?php
/**
 * The front page template file
 */

get_header();

// Centralized Content Data for consistency
$hero_slides = [
    [
        'img' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?q=80&w=2070&auto=format&fit=crop',
        'sub' => 'An ninh thông minh',
        'title' => 'Tava Smart Camera',
        'desc' => 'Giải pháp giám sát AI hàng đầu cho gia đình và doanh nghiệp.'
    ],
    [
        'img' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop',
        'sub' => 'Công nghệ đột phá',
        'title' => 'Trải nghiệm 4K Ultra HD',
        'desc' => 'Từng chi tiết sắc nét, quan sát ban đêm có màu sinh động.'
    ],
    [
        'img' => 'https://images.unsplash.com/photo-1558002038-10917738179d?q=80&w=2070&auto=format&fit=crop',
        'sub' => 'Kết nối mọi nơi',
        'title' => 'Tava Cloud Storage',
        'desc' => 'Lưu trữ đám mây bảo mật, truy cập dữ liệu mọi lúc mọi nơi.'
    ]
];

$features_flip = [
    ['icon' => 'shield-check', 'title' => 'Bảo mật tuyệt đối', 'img' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80', 'desc' => 'Mã hóa dữ liệu 2 lớp theo tiêu chuẩn quốc tế, bảo vệ quyền riêng tư tối đa.'],
    ['icon' => 'cpu', 'title' => 'Trí tuệ nhân tạo AI', 'img' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80', 'desc' => 'Phát hiện chuyển động của người và vật chính xác, giảm thiểu báo động giả.'],
    ['icon' => 'cloud-lightning', 'title' => 'Lưu trữ Cloud', 'img' => 'https://images.unsplash.com/photo-1544197150-b99a580bbcbf?auto=format&fit=crop&q=80', 'desc' => 'Dữ liệu lưu trữ tại Việt Nam, tốc độ truy xuất nhanh và ổn định.'],
    ['icon' => 'smartphone', 'title' => 'Ứng dụng thuần Việt', 'img' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80', 'desc' => 'Giao diện mượt mà, dễ sử dụng, hỗ trợ kỹ thuật 24/7.']
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="bg-white dark:bg-slate-950 transition-colors duration-500 overflow-x-hidden">

    <!-- Hero Slider -->
    <section class="relative">
        <div class="swiper mainHeroSwiper h-[600px] md:h-[850px]">
            <div class="swiper-wrapper">
                <?php foreach($hero_slides as $slide): ?>
                <div class="swiper-slide relative overflow-hidden">
                    <img src="<?php echo $slide['img']; ?>" class="w-full h-full object-cover transform scale-105" alt="Hero">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-slate-900/40 to-transparent flex items-center">
                        <div class="container mx-auto px-6">
                            <div class="max-w-2xl text-white">
                                <span class="inline-block bg-[#f84b2f] text-white text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-1 rounded-full mb-6 italic"><?php echo $slide['sub']; ?></span>
                                <h1 class="text-5xl md:text-7xl font-black mb-6 leading-[1.1] tracking-tight"><?php echo $slide['title']; ?></h1>
                                <p class="text-lg md:text-xl text-gray-200 mb-10 font-medium opacity-90 max-w-lg"><?php echo $slide['desc']; ?></p>
                                <div class="flex gap-4">
                                    <a href="#" class="btn-primary">Khám phá ngay</a>
                                    <a href="#" class="px-8 py-4 rounded-full font-bold border-2 border-white/30 hover:bg-white hover:text-slate-900 transition-all backdrop-blur-sm">Sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination !bottom-10"></div>
        </div>
    </section>

    <!-- Why Choose Section (Premium Upgrade) -->
    <section class="py-32 bg-slate-50 dark:bg-slate-950 transition-colors duration-500">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="section-subtitle">Tại sao nên chọn chúng tôi</span>
                <h2 class="section-title">Điểm khác biệt của Tava Camera</h2>
                <div class="w-20 h-1.5 bg-orange-600 mx-auto mt-6 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-20">
                <?php 
                $why_data = [
                    [
                        'img' => 'https://fptcameraiq.vn/storage/trang-chu/full-hd-1080.jpg',
                        'title' => 'Made by FPT <br> Made in Việt Nam',
                        'desc' => 'Độ phân giải Full HD 1080p. Hiển thị tốt trong điều kiện thiếu sáng. Xem trực tuyến độ trễ gần như bằng 0.',
                        'icon' => '<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M45 68.25H27C10.71 68.25 3.75 61.29 3.75 45V27C3.75 10.71 10.71 3.75 27 3.75H45C61.29 3.75 68.25 10.71 68.25 27V45C68.25 61.29 61.29 68.25 45 68.25ZM27 8.25C13.17 8.25 8.25 13.17 8.25 27V45C8.25 58.83 13.17 63.75 27 63.75H45C58.83 63.75 63.75 58.83 63.75 45V27C63.75 13.17 58.83 8.25 45 8.25H27Z" fill="currentColor"></path><path d="M64.4401 23.5801H7.56006C6.33006 23.5801 5.31006 22.5601 5.31006 21.3301C5.31006 20.1001 6.30006 19.0801 7.56006 19.0801H64.4401C65.6701 19.0801 66.6901 20.1001 66.6901 21.3301C66.6901 22.5601 65.7001 23.5801 64.4401 23.5801Z" fill="currentColor"></path><path d="M25.5601 23.1601C24.3301 23.1601 23.3101 22.1401 23.3101 20.9101V6.33008C23.3101 5.10008 24.3301 4.08008 25.5601 4.08008C26.7901 4.08008 27.8101 5.10008 27.8101 6.33008V20.9101C27.8101 22.1401 26.7901 23.1601 25.5601 23.1601Z" fill="currentColor"></path><path d="M46.4399 21.8101C45.2099 21.8101 44.1899 20.7901 44.1899 19.5601V6.33008C44.1899 5.10008 45.2099 4.08008 46.4399 4.08008C47.6699 4.08008 48.6899 5.10008 48.6899 6.33008V19.5601C48.6899 20.8201 47.6999 21.8101 46.4399 21.8101Z" fill="currentColor"></path><path d="M32.4311 53.225C31.3511 53.225 30.3311 52.955 29.4011 52.445C27.3611 51.245 26.1611 48.845 26.1611 45.815V38.615C26.1611 35.585 27.3611 33.155 29.4311 31.955C31.5011 30.755 34.2011 30.935 36.8111 32.465L43.0511 36.065C45.6611 37.565 47.1911 39.815 47.1911 42.215C47.1911 44.615 45.6611 46.865 43.0211 48.365L36.7811 51.965C35.3411 52.805 33.8411 53.225 32.4311 53.225ZM32.4611 35.675C32.1611 35.675 31.8911 35.735 31.6811 35.855C31.0511 36.215 30.6611 37.235 30.6611 38.615V45.815C30.6611 47.165 31.0511 48.185 31.6811 48.575C32.3111 48.935 33.3911 48.755 34.5611 48.065L40.8011 44.465C41.9711 43.775 42.6911 42.935 42.6911 42.215C42.6911 41.495 42.0011 40.655 40.8011 39.965L34.5611 36.365C33.7811 35.915 33.0311 35.675 32.4611 35.675Z" fill="currentColor"></path></svg>'
                    ],
                    [
                        'img' => 'https://fptcameraiq.vn/storage/trang-chu/cloud-server.jpg',
                        'title' => 'Giải pháp toàn diện <br> Tiên phong công nghệ',
                        'desc' => 'Lưu trữ Cloud của FPT, chuẩn Tier III. Không phụ thuộc phần cứng, bảo mật 2 lớp tuyệt đối.',
                        'icon' => '<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.9995 68.2502C35.2795 68.2502 34.5596 68.1602 33.8696 67.9502C18.2996 63.6602 7.01953 49.1101 7.01953 33.3301V20.1601C7.01953 16.8001 9.44955 13.1702 12.5695 11.8802L29.2796 5.04015C33.6296 3.27015 38.3995 3.27015 42.7195 5.04015L59.4295 11.8802C62.5495 13.1702 64.9796 16.8001 64.9796 20.1601V33.3301C64.9796 49.0801 53.6695 63.6302 38.1295 67.9502C37.4395 68.1602 36.7195 68.2502 35.9995 68.2502ZM35.9995 8.25017C34.2895 8.25017 32.6095 8.58022 30.9895 9.24022L14.2796 16.0801C12.8396 16.6801 11.5195 18.6301 11.5195 20.1901V33.3602C11.5195 47.1302 21.4195 59.8502 35.0695 63.6302C35.6695 63.8102 36.3295 63.8102 36.9295 63.6302C50.5795 59.8502 60.4796 47.1302 60.4796 33.3602V20.1901C60.4796 18.6301 59.1595 16.6801 57.7195 16.0801L41.0096 9.24022C39.3896 8.58022 37.7095 8.25017 35.9995 8.25017Z" fill="currentColor"></path><path d="M36 39.75C31.44 39.75 27.75 36.06 27.75 31.5C27.75 26.94 31.44 23.25 36 23.25C40.56 23.25 44.25 26.94 44.25 31.5C44.25 36.06 40.56 39.75 36 39.75ZM36 27.75C33.93 27.75 32.25 29.43 32.25 31.5C32.25 33.57 33.93 35.25 36 35.25C38.07 35.25 39.75 33.57 39.75 31.5C39.75 29.43 38.07 27.75 36 27.75Z" fill="currentColor"></path><path d="M36 48.75C34.77 48.75 33.75 47.73 33.75 46.5V37.5C33.75 36.27 34.77 35.25 36 35.25C37.23 35.25 38.25 36.27 38.25 37.5V46.5C38.25 47.73 37.23 48.75 36 48.75Z" fill="currentColor"></path></svg>'
                    ],
                    [
                        'img' => 'https://fptcameraiq.vn/storage/trang-chu/ai-thong-minh.jpg',
                        'title' => 'Hạ tầng viễn thông <br> Hàng đầu khu vực',
                        'desc' => 'Công nghệ trí tuệ nhân tạo phân biệt chuyển động của con người và vật thể chính xác.',
                        'icon' => '<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.5 33.75H46.5C47.73 33.75 48.75 32.73 48.75 31.5C48.75 30.27 47.73 29.25 46.5 29.25H25.5C24.27 29.25 23.25 30.27 23.25 31.5C23.25 32.73 24.27 33.75 25.5 33.75Z" fill="currentColor"></path><path d="M24 66.9598C25.02 66.9598 26.04 66.6599 26.91 66.0899L39.69 57.5698H51C61.32 57.5698 68.25 50.6398 68.25 40.3198V22.3198C68.25 11.9998 61.32 5.06982 51 5.06982H21C10.68 5.06982 3.75 11.9998 3.75 22.3198V40.3198C3.75 49.8598 9.69 56.5199 18.75 57.4499V61.7098C18.75 63.6598 19.8 65.4298 21.51 66.3298C22.29 66.7498 23.16 66.9598 24 66.9598ZM51 9.53979C58.74 9.53979 63.75 14.5498 63.75 22.2898V40.2898C63.75 48.0298 58.74 53.0398 51 53.0398H39C38.55 53.0398 38.13 53.1598 37.74 53.4298L24.39 62.3099C24.06 62.5199 23.76 62.4299 23.61 62.3399C23.46 62.2499 23.22 62.0698 23.22 61.6798V55.2898C23.22 54.0598 22.2 53.0398 20.97 53.0398C13.23 53.0398 8.21997 48.0298 8.21997 40.2898V22.2898C8.21997 14.5498 13.23 9.53979 20.97 9.53979H51Z" fill="currentColor"></path></svg>'
                    ],
                    [
                        'img' => 'https://fptcameraiq.vn/storage/trang-chu/cskh-fpt.jpg',
                        'title' => 'Dịch vụ CSKH <br> Hàng đầu Việt Nam',
                        'desc' => 'Hỗ trợ kỹ thuật 24/7 tại 63 tỉnh thành. Miễn phí bảo trì trọn đời và đổi mới thiết bị 24 tháng.',
                        'icon' => '<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.8"><path d="M36 68.2499C34.2 68.2499 32.43 67.8299 30.99 67.0199L16.8 58.8299C10.92 54.8699 10.53 54.1499 10.53 47.9399V33.0599C10.53 26.8499 10.92 26.1299 16.68 22.2599L31.02 13.9799C33.87 12.3299 38.16 12.3299 41.01 13.9799L55.2 22.1699C61.08 26.1299 61.47 26.8499 61.47 33.0599V47.9399C61.47 54.1499 61.08 54.8699 55.32 58.7399L40.98 67.0199C39.57 67.8599 37.77 68.2499 36 68.2499ZM36 17.2499C34.98 17.2499 33.96 17.4599 33.24 17.8799L19.05 26.0699C15.03 28.7999 15.03 28.7999 15.03 33.0599V47.9399C15.03 52.1999 15.03 52.1999 19.2 55.0199L33.27 63.1199C34.71 63.9599 37.32 63.9599 38.76 63.1199L52.95 54.9299C56.97 52.1999 56.97 52.1999 56.97 47.9399V33.0599C56.97 28.7999 56.97 28.7999 52.8 25.9799L38.73 17.8799C38.04 17.4599 37.02 17.2499 36 17.2499Z" fill="currentColor"></path><path d="M52.5 25.14C51.27 25.14 50.25 24.12 50.25 22.89V15C50.25 10.26 48.24 8.25 43.5 8.25H28.5C23.76 8.25 21.75 10.26 21.75 15V22.68C21.75 23.91 20.73 24.93 19.5 24.93C18.27 24.93 17.25 23.94 17.25 22.68V15C17.25 7.74 21.24 3.75 28.5 3.75H43.5C50.76 3.75 54.75 7.74 54.75 15V22.89C54.75 24.12 53.73 25.14 52.5 25.14Z" fill="currentColor"></path><path d="M40.89 52.8901C40.26 52.8901 39.6 52.7701 38.94 52.5001L36 51.3601L33.06 52.5301C31.47 53.1601 29.85 53.0101 28.65 52.1401C27.45 51.2701 26.82 49.7701 26.91 48.0601L27.09 44.9101L25.08 42.4801C24 41.1301 23.64 39.5701 24.12 38.1301C24.57 36.7201 25.8 35.6401 27.45 35.2201L30.51 34.4401L32.22 31.7701C34.05 28.8901 37.98 28.8901 39.81 31.7701L41.52 34.4401L44.58 35.2201C46.23 35.6401 47.46 36.7201 47.91 38.1301C48.36 39.5401 48 41.1301 46.92 42.4501L44.91 44.8801L45.09 48.0301C45.18 49.7401 44.55 51.2101 43.35 52.1101C42.63 52.6201 41.79 52.8901 40.89 52.8901ZM28.56 39.6001L30.57 42.0301C31.26 42.8401 31.65 44.1301 31.59 45.1801L31.41 48.3301L34.35 47.1601C35.34 46.7701 36.66 46.7701 37.65 47.1601L40.59 48.3301L40.41 45.1801C40.35 44.1301 40.74 42.8701 41.43 42.0301L43.44 39.6001L40.38 38.8201C39.36 38.5501 38.28 37.7701 37.71 36.9001L36.03 34.2601L34.32 36.9001C33.75 37.8001 32.67 38.5801 31.65 38.8501L28.56 39.6001Z" fill="currentColor"></path></g></svg>'
                    ]
                ];
                foreach($why_data as $item):
                ?>
                <div class="item-why-premium group">
                    <div class="avarta">
                        <img src="<?php echo $item['img']; ?>" alt="Why">
                    </div>
                    <div class="info-card">
                        <div class="icon-wrapper">
                            <?php echo $item['icon']; ?>
                        </div>
                        <h4><?php echo $item['title']; ?></h4>
                        <p><?php echo $item['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Video Demo Section -->
    <section id="video-demo" class="py-32 bg-white dark:bg-slate-950 transition-colors duration-500">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-end justify-between mb-20 gap-8">
                <div class="max-w-2xl">
                    <span class="section-subtitle">Trải nghiệm thực tế</span>
                    <h2 class="section-title">Tính năng AI đột phá</h2>
                </div>
                <div class="flex gap-2 bg-slate-100 dark:bg-white/5 p-1.5 rounded-2xl border border-slate-200 dark:border-white/10 overflow-x-auto no-scrollbar">
                    <button class="video-tab whitespace-nowrap px-6 py-3 rounded-xl font-bold transition-all text-sm text-slate-600 dark:text-gray-400" data-video="https://videos.pexels.com/video-files/3129957/3129957-uhd_2560_1440_25fps.mp4">Nhận diện người</button>
                    <button class="video-tab whitespace-nowrap px-6 py-3 rounded-xl font-bold transition-all text-sm text-slate-600 dark:text-gray-400 opacity-50 hover:opacity-100" data-video="https://videos.pexels.com/video-files/5377700/5377700-uhd_2560_1440_25fps.mp4">Khoanh vùng an ninh</button>
                    <button class="video-tab whitespace-nowrap px-6 py-3 rounded-xl font-bold transition-all text-sm text-slate-600 dark:text-gray-400 opacity-50 hover:opacity-100" data-video="https://videos.pexels.com/video-files/3205368/3205368-uhd_2560_1440_25fps.mp4">Phát hiện thú cưng</button>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="phone-frame-landscape w-full max-w-5xl group">
                    <video id="feature-video" class="w-full h-full object-cover" muted playsinline preload="none" poster="https://images.unsplash.com/photo-1557597774-9d273605dfa9?q=80&w=1000&fit=crop">
                        <source data-src="https://videos.pexels.com/video-files/3129957/3129957-uhd_2560_1440_25fps.mp4" type="video/mp4">
                    </video>
                    <div id="video-overlay" class="absolute inset-0 bg-slate-100 dark:bg-slate-900 flex items-center justify-center opacity-0 transition-opacity">
                        <div class="w-10 h-10 border-4 border-[#f84b2f] border-t-transparent rounded-full animate-spin"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase (Sync with FPT Style) -->
    <section class="py-32 bg-white dark:bg-slate-950">
        <div class="container mx-auto px-6">
            <div class="bg-white dark:bg-slate-900 rounded-[48px] overflow-hidden shadow-2xl border border-slate-100 dark:border-slate-800">
                <div class="bg-gradient-to-r from-[#f84b2f] to-[#ff6b52] p-10 text-center">
                    <h2 class="text-3xl md:text-4xl font-black text-white italic uppercase tracking-wider">Hệ sinh thái Camera AI</h2>
                </div>
                
                <div class="flex flex-col lg:flex-row p-8 md:p-16 gap-16">
                    <div class="w-full lg:w-1/2">
                        <div class="flex flex-wrap gap-3 mb-12" id="product-tabs">
                            <button class="product-tab active px-6 py-3 rounded-full font-bold border-2 border-slate-100 dark:border-slate-800 transition-all whitespace-nowrap text-sm" data-product="dome-5i">AI Dome 5I</button>
                            <button class="product-tab px-6 py-3 rounded-full font-bold border-2 border-slate-100 dark:border-slate-800 transition-all whitespace-nowrap text-sm" data-product="bullet-5i">AI Bullet 5I</button>
                        </div>
                        <h3 id="product-title" class="text-4xl font-black text-slate-900 dark:text-white mb-10">Tava AI Dome 5I</h3>
                        <div id="product-specs" class="grid grid-cols-1 gap-4">
                            <!-- Injected JS -->
                        </div>
                    </div>
                    
                    <div class="w-full lg:w-1/2 flex flex-col">
                        <div class="bg-slate-50 dark:bg-slate-800/50 rounded-[32px] p-12 aspect-square flex items-center justify-center relative mb-8 group">
                            <img id="main-product-img" src="" class="max-w-[80%] max-h-[80%] object-contain transition-transform duration-700 group-hover:scale-110" alt="Product">
                            <div id="gallery-counter" class="absolute bottom-8 right-8 bg-white/90 dark:bg-slate-800 px-4 py-1.5 rounded-full text-xs font-bold shadow-lg">1 / 5</div>
                            <button id="prev-gallery" class="absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white dark:bg-slate-800 shadow-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all"><i data-lucide="chevron-left"></i></button>
                            <button id="next-gallery" class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white dark:bg-slate-800 shadow-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all"><i data-lucide="chevron-right"></i></button>
                        </div>
                        <div id="thumbnail-row" class="flex gap-4 justify-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature ZigZag -->
    <section>
        <?php 
        $rows = [
            ['title' => 'Tự hào Made in Vietnam', 'sub' => 'Vận hành tin cậy', 'img' => 'https://images.unsplash.com/photo-1544256718-3bcf237f3974?auto=format&fit=crop&q=80', 'side' => 'right'],
            ['title' => 'Tư vấn tận tâm 24/7', 'sub' => 'Dịch vụ hoàn hảo', 'img' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80', 'side' => 'left'],
        ];
        foreach($rows as $idx => $row):
            $is_left = $row['side'] === 'left';
        ?>
        <div class="flex flex-col md:flex-row items-stretch min-h-[500px] md:h-[650px]">
            <div class="w-full md:w-1/2 flex items-center p-12 md:p-24 <?php echo $is_left ? 'order-2' : 'order-1'; ?> bg-white dark:bg-slate-950">
                <div>
                    <span class="section-subtitle"><?php echo $row['sub']; ?></span>
                    <h2 class="text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8"><?php echo $row['title']; ?></h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg mb-10 max-w-md">Đội ngũ kỹ thuật viên giàu kinh nghiệm luôn sẵn sàng hỗ trợ lắp đặt và bảo trì định kỳ, đảm bảo hệ thống an ninh của bạn luôn ở trạng thái tốt nhất.</p>
                    <a href="#" class="btn-primary w-fit">Tìm hiểu sản phẩm</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 <?php echo $is_left ? 'order-1' : 'order-2'; ?> overflow-hidden">
                <img src="<?php echo $row['img']; ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-[2s]" alt="Feature">
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- Algorithms -->
    <section class="py-32 bg-slate-50 dark:bg-slate-950 relative overflow-hidden transition-colors duration-500">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-24">
                <span class="section-subtitle">Thuật toán thông minh</span>
                <h2 class="section-title italic">Hệ điều hành Tava AI OS</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach(['FaceID v3', 'Hàng rào ảo AI', 'Báo động âm thanh'] as $algo): ?>
                <div class="bg-white dark:bg-white/5 backdrop-blur-xl border border-slate-200 dark:border-white/10 p-12 rounded-[40px] hover:bg-white/80 dark:hover:bg-white/10 transition-all duration-500 group shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 rounded-2xl bg-[#f84b2f]/10 text-[#f84b2f] flex items-center justify-center mb-8 border border-[#f84b2f]/20 group-hover:rotate-12 transition-transform">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4"><?php echo $algo; ?></h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">Công nghệ xử lý Neural Processing Unit tích hợp trực tiếp, cho kết quả phản hồi chỉ trong mili giây.</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- App Promotion (Phone Mockup) -->
    <section class="py-32 bg-slate-50 dark:bg-slate-900 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2">
                    <span class="section-subtitle">Tava Smart Vision App</span>
                    <h2 class="section-title mb-8">Một chạm - Kết nối vạn giải pháp</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-lg mb-12">Ứng dụng được phát triển bởi đội ngũ kỹ sư Việt, tối ưu trải nghiệm người dùng với tốc độ load cực nhanh và tính bảo mật tuyệt đối.</p>
                    <div class="flex flex-col gap-6 mb-12">
                        <div class="flex gap-4 items-center">
                            <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-2xl shadow-lg flex items-center justify-center text-[#f84b2f]"><i data-lucide="shield"></i></div>
                            <span class="font-bold text-slate-800 dark:text-white">Bảo mật đa lớp xác thực OTP/Biometric</span>
                        </div>
                        <div class="flex gap-4 items-center">
                            <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-2xl shadow-lg flex items-center justify-center text-[#f84b2f]"><i data-lucide="message-circle"></i></div>
                            <span class="font-bold text-slate-800 dark:text-white">Thông báo trạng thái theo thời gian thực</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <img src="https://fptcameraiq.vn/images/badge-ios.png" class="h-14 cursor-pointer" alt="AppStore">
                        <img src="https://fptcameraiq.vn/images/badge-android.png" class="h-14 cursor-pointer" alt="GooglePlay">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="phone-frame-portrait">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="py-32 bg-white dark:bg-slate-950">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <span class="section-subtitle">Blog & News</span>
                    <h2 class="section-title">Góc nhìn chuyên gia</h2>
                </div>
                <a href="/blog" class="p-4 rounded-full border border-slate-100 hover:border-[#f84b2f] hover:text-[#f84b2f] transition-all"><i data-lucide="arrow-right"></i></a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <?php
                $posts = new WP_Query(['posts_per_page' => 3]);
                if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
                ?>
                <article class="group relative bg-white dark:bg-slate-900 rounded-[32px] overflow-hidden border border-slate-50 dark:border-slate-800 hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[4/3] overflow-hidden">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700']); ?>
                    </div>
                    <div class="p-8">
                        <span class="text-[10px] font-bold text-[#f84b2f] uppercase tracking-widest mb-4 block italic"><?php echo get_the_date(); ?></span>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white group-hover:text-[#f84b2f] transition-colors mb-4 line-clamp-2"><?php the_title(); ?></h3>
                        <p class="text-slate-500 text-sm line-clamp-2 mb-8"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="flex items-center gap-2 font-black text-sm uppercase tracking-wider text-slate-900 dark:text-white border-b-2 border-slate-900/5 hover:border-[#f84b2f] transition-all w-fit">Đọc tiếp <i data-lucide="chevron-right" class="w-4 h-4 text-[#f84b2f]"></i></a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Swiper
    new Swiper(".mainHeroSwiper", {
        effect: "fade",
        speed: 1000,
        autoplay: { delay: 5000 },
        pagination: { el: ".swiper-pagination", clickable: true }
    });

    // 2. Video Tabs
    const vTabs = document.querySelectorAll('.video-tab');
    const vPlayer = document.getElementById('feature-video');
    const vOverlay = document.getElementById('video-overlay');

    vTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            vTabs.forEach(t => {
                t.classList.remove('active', 'bg-white', 'text-slate-900', 'shadow-xl', 'bg-[#f84b2f]', 'text-white');
                t.classList.add('opacity-50');
            });
            
            tab.classList.add('active', 'bg-[#f84b2f]', 'text-white', 'shadow-xl');
            tab.classList.remove('opacity-50');
            
            const src = tab.dataset.video;
            vOverlay.classList.remove('opacity-0');
            vPlayer.src = src;
            vPlayer.load();
            vPlayer.oncanplay = () => { vOverlay.classList.add('opacity-0'); vPlayer.play(); };
        });
    });
    // Init first tab style
    if(vTabs[0]) {
        vTabs[0].classList.add('bg-[#f84b2f]', 'text-white', 'shadow-xl');
        vTabs[0].classList.remove('opacity-50');
    }

    // 3. Product Showcase
    const productData = {
        'dome-5i': {
            title: 'Tava AI Dome 5I',
            specs: [['Ống kính', '3.6mm'], ['Độ phân giải', '5.0 MP'], ['Cảm biến', 'Sony Starvis'], ['Vỏ', 'Hợp kim']],
            images: ['https://doanhnghiep.fptcameraiq.vn/_next/image?url=%2Fimages%2Fhome%2Fcamera%2FDome5I_Housing(2).png&w=1080&q=100', 'https://doanhnghiep.fptcameraiq.vn/_next/image?url=%2Fimages%2Fhome%2Fcamera%2FDome5I_Housing(3).png&w=1080&q=100']
        },
        'bullet-5i': {
            title: 'Tava AI Bullet 5I',
            specs: [['Tầm xa hồng ngoại', '50m'], ['Chuẩn kháng nước', 'IP67'], ['Chống va đập', 'IK10']],
            images: ['https://doanhnghiep.fptcameraiq.vn/_next/image?url=%2Fimages%2Fhome%2Fcamera%2FBullet5i_Housing(1).png&w=1080&q=100']
        }
    };

    let curProd = 'dome-5i';
    let curIdx = 0;

    const updateProd = (slug) => {
        const d = productData[slug];
        document.getElementById('product-title').textContent = d.title;
        document.getElementById('product-specs').innerHTML = d.specs.map(s => `
            <div class="flex justify-between items-center py-4 border-b border-slate-100 dark:border-slate-800">
                <span class="text-slate-500 font-medium">${s[0]}</span>
                <span class="font-black text-slate-900 dark:text-white uppercase text-sm">${s[1]}</span>
            </div>
        `).join('');
        curProd = slug; curIdx = 0;
        updateGal();
    };

    const updateGal = () => {
        const d = productData[curProd];
        document.getElementById('main-product-img').src = d.images[curIdx];
        document.getElementById('gallery-counter').textContent = `${curIdx+1} / ${d.images.length}`;
        document.getElementById('thumbnail-row').innerHTML = d.images.map((img, i) => `
            <div class="w-20 h-20 rounded-2xl border-2 transition-all cursor-pointer overflow-hidden ${i===curIdx ? 'border-[#f84b2f] scale-110 shadow-lg' : 'border-transparent opacity-40'}" onclick="window.setGal(${i})">
                <img src="${img}" class="w-full h-full object-contain bg-white dark:bg-slate-800">
            </div>
        `).join('');
    };

    window.setGal = (i) => { curIdx = i; updateGal(); };
    document.getElementById('next-gallery').onclick = () => { curIdx = (curIdx+1) % productData[curProd].images.length; updateGal(); };
    document.getElementById('prev-gallery').onclick = () => { curIdx = (curIdx-1 + productData[curProd].images.length) % productData[curProd].images.length; updateGal(); };

    document.querySelectorAll('.product-tab').forEach(t => {
        t.onclick = () => {
            document.querySelectorAll('.product-tab').forEach(x => x.classList.remove('bg-[#f84b2f]', 'text-white', 'border-transparent'));
            t.classList.add('bg-[#f84b2f]', 'text-white', 'border-transparent');
            updateProd(t.dataset.product);
        }
    });

    updateProd('dome-5i');
    document.querySelector('.product-tab[data-product="dome-5i"]').classList.add('bg-[#f84b2f]', 'text-white', 'border-transparent');

    // 4. Lazy Video
    const observer = new IntersectionObserver((es) => {
        es.forEach(e => {
            if(e.isIntersecting) {
                const v = e.target;
                const s = v.querySelector('source');
                if(s.dataset.src) { v.src = s.dataset.src; v.load(); v.play(); }
                observer.unobserve(v);
            }
        });
    });
    if(vPlayer) observer.observe(vPlayer);
});
</script>

<style>
.active-tab-style { @apply bg-white text-slate-900 shadow-xl; }
</style>

<?php get_footer(); ?>
