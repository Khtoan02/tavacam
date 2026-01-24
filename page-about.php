<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<div class="font-sans text-slate-600 dark:text-slate-300 bg-white dark:bg-[#050505] selection:bg-orange-500/30 selection:text-white overflow-x-hidden transition-colors duration-300">
    
    <style>
        /* Shapes */
        .cyber-cut {
            clip-path: polygon(
                20px 0, 100% 0, 
                100% calc(100% - 20px), calc(100% - 20px) 100%, 
                0 100%, 0 20px
            );
        }
        .btn-cut {
            clip-path: polygon(
                10px 0, 100% 0, 
                100% calc(100% - 10px), calc(100% - 10px) 100%, 
                0 100%, 0 10px
            );
        }
        .bg-tech-grid {
            background-size: 50px 50px;
            background-image: 
                linear-gradient(to right, rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
        }
        .dark .bg-tech-grid {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
    </style>

    <!-- ================= SECTION 1: HERO BANNER (About Us) ================= -->
    <section class="relative h-[60vh] min-h-[500px] w-full bg-tech-grid overflow-hidden border-b border-gray-100 dark:border-white/5 flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-20 dark:opacity-30 grayscale mix-blend-luminosity" alt="Office">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 dark:from-[#050505] dark:via-[#050505]/90 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 pt-20">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-px bg-orange-500"></div>
                    <span class="text-orange-600 dark:text-orange-500 text-xs font-bold uppercase tracking-[0.25em]">Our Story</span>
                </div>
                <h1 class="font-display text-5xl md:text-7xl font-black text-slate-900 dark:text-white mb-8 leading-tight uppercase tracking-tighter">
                    Định hình <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 via-slate-700 to-slate-500 dark:from-white dark:to-slate-500">Chuẩn mực An ninh Số</span>
                </h1>
                <p class="text-slate-500 dark:text-slate-400 text-base md:text-lg max-w-2xl leading-relaxed border-l-2 border-gray-200 dark:border-white/10 pl-6">
                    TavaVision không chỉ sản xuất thiết bị. Chúng tôi kiến tạo hệ sinh thái an ninh chủ động, nơi trí tuệ nhân tạo bảo vệ cuộc sống con người một cách thầm lặng và hiệu quả nhất.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 2: INTRODUCTION (Split Layout) ================= -->
    <section class="py-24 bg-white dark:bg-[#050505] relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                
                <!-- Left: Image Grid -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 w-full aspect-[4/3] cyber-cut border border-gray-100 dark:border-white/10 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=2069&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-700" alt="Tech Lab">
                        <!-- Overlay Stats -->
                        <div class="absolute bottom-0 right-0 bg-orange-600 p-8 cyber-cut">
                            <span class="block text-4xl font-display font-bold text-white mb-1">10+</span>
                            <span class="block text-[10px] uppercase tracking-widest text-orange-200">Năm kinh nghiệm</span>
                        </div>
                    </div>
                    <!-- Decor elements -->
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-orange-600/50 z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-full h-full border border-gray-100 dark:border-white/5 z-0"></div>
                </div>

                <!-- Right: Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6 uppercase">
                        Từ khát vọng Việt <br/><span class="text-slate-400 dark:text-slate-500">Vươn tầm quốc tế</span>
                    </h2>
                    <div class="space-y-6 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        <p>
                            Được thành lập vào năm 2016 bởi đội ngũ kỹ sư AI hàng đầu, TavaVision khởi đầu với niềm tin rằng công nghệ an ninh không nên chỉ là "ghi hình thụ động". Chúng tôi muốn camera phải biết "tư duy".
                        </p>
                        <p>
                            Trải qua một thập kỷ nghiên cứu và phát triển (R&D), TavaVision tự hào làm chủ hoàn toàn công nghệ lõi từ phần cứng (Cảm biến, Chipset) đến phần mềm (VMS, AI Algorithms). Sản phẩm của chúng tôi hiện diện tại các công trình trọng điểm quốc gia, chuỗi bán lẻ lớn và hàng ngàn hộ gia đình Việt.
                        </p>
                    </div>
                    
                    <div class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-100 dark:border-white/10 pt-8">
                        <div>
                            <h4 class="text-slate-900 dark:text-white font-bold text-lg mb-2">Sứ mệnh</h4>
                            <p class="text-xs text-slate-500">Phổ cập công nghệ an ninh AI tiên tiến nhất, giúp mọi người dân Việt Nam được sống và làm việc an toàn hơn.</p>
                        </div>
                        <div>
                            <h4 class="text-slate-900 dark:text-white font-bold text-lg mb-2">Tầm nhìn 2030</h4>
                            <p class="text-xs text-slate-500">Trở thành biểu tượng công nghệ quốc gia (National Tech Icon) trong lĩnh vực Thị giác máy tính & IoT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 3: CORE VALUES (Geometric Cards) ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] border-y border-gray-100 dark:border-white/5 relative">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-orange-500/5 dark:from-orange-900/10 to-transparent"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-2 block">// DNA CỦA CHÚNG TÔI</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white uppercase">Giá trị cốt lõi</h2>
                </div>
                <div class="hidden md:block w-32 h-1 bg-slate-200 dark:bg-white/10"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $values = [
                    ['icon' => 'zap', 'title' => "Tốc độ", 'desc' => "Không ngừng cải tiến. Phản ứng nhanh với thay đổi của thị trường và nhu cầu khách hàng."],
                    ['icon' => 'target', 'title' => "Chính xác", 'desc' => "Cam kết chất lượng tuyệt đối. Mỗi sản phẩm là một lời hứa về sự an toàn không sai sót."],
                    ['icon' => 'award', 'title' => "Tiên phong", 'desc' => "Luôn dẫn đầu xu hướng công nghệ. Dám thử thách những giới hạn vật lý của thiết bị."],
                    ['icon' => 'users', 'title' => "Tận tâm", 'desc' => "Khách hàng là trung tâm. Dịch vụ hỗ trợ kỹ thuật không chỉ là trách nhiệm mà là văn hóa."],
                    ['icon' => 'shield', 'title' => "Bảo mật", 'desc' => "Quyền riêng tư là tối thượng. Bảo vệ dữ liệu người dùng bằng những chuẩn mã hóa cao nhất."],
                    ['icon' => 'globe', 'title' => "Toàn cầu", 'desc' => "Tư duy sản phẩm đạt chuẩn quốc tế (CE, FCC) để sẵn sàng vươn ra biển lớn."]
                ];
                foreach ($values as $item): ?>
                    <div class="group cyber-cut bg-white dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/5 p-8 hover:bg-slate-50 dark:hover:bg-[#0F172A] hover:border-orange-500/30 transition-all duration-300">
                        <div class="w-12 h-12 bg-gray-100 dark:bg-white/5 btn-cut flex items-center justify-center text-slate-500 dark:text-slate-400 mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                            <i data-lucide="<?php echo $item['icon']; ?>" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3 uppercase tracking-wide"><?php echo $item['title']; ?></h3>
                        <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-700 dark:group-hover:text-slate-300 transition-colors"><?php echo $item['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 4: MILESTONES (Timeline) ================= -->
    <section class="py-24 bg-white dark:bg-[#050505] relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white uppercase mb-4">Hành trình phát triển</h2>
                <div class="w-12 h-1 bg-orange-600 mx-auto"></div>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-px h-full bg-slate-200 dark:bg-white/10 hidden md:block"></div>
                
                <div class="space-y-12 md:space-y-24">
                    <?php
                    $milestones = [
                        ['year' => "2018", 'title' => "Khởi đầu", 'desc' => "Thành lập TavaVision tại Hà Nội với đội ngũ R&D nòng cốt gồm 10 kỹ sư AI."],
                        ['year' => "2020", 'title' => "Đột phá công nghệ", 'desc' => "Ra mắt dòng Camera AI đầu tiên tích hợp nhận diện khuôn mặt Edge Computing."],
                        ['year' => "2022", 'title' => "Mở rộng hệ sinh thái", 'desc' => "Phát triển thành công hệ thống TavaLED và nền tảng quản trị VMS tập trung."],
                        ['year' => "2025", 'title' => "Vị thế dẫn đầu", 'desc' => "Đạt mốc 500+ khách hàng doanh nghiệp và phủ sóng 63/63 tỉnh thành."]
                    ];
                    foreach ($milestones as $idx => $item): ?>
                        <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-0 <?php echo $idx % 2 !== 0 ? 'md:flex-row-reverse' : ''; ?>">
                            
                            <!-- Content Side -->
                            <div class="w-full md:w-5/12 group">
                                <div class="cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-8 hover:border-orange-500/50 transition-all relative <?php echo $idx % 2 === 0 ? 'md:text-right' : 'md:text-left'; ?>">
                                    <span class="text-4xl font-black text-slate-200 dark:text-white/10 absolute top-4 right-4 z-0 group-hover:text-orange-500/10 dark:group-hover:text-orange-900/20 transition-colors uppercase italic"><?php echo $item['year']; ?></span>
                                    <div class="relative z-10">
                                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 uppercase"><?php echo $item['title']; ?></h3>
                                        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed"><?php echo $item['desc']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Center Point -->
                            <div class="relative z-10 flex items-center justify-center w-12 h-12">
                                <div class="w-3 h-3 bg-orange-600 rotate-45 transform"></div>
                                <div class="absolute w-8 h-8 border border-orange-200 dark:border-white/20 rotate-45 animate-spin-slow"></div>
                            </div>

                            <!-- Empty Side -->
                            <div class="w-full md:w-5/12"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 5: PARTNERS & CERTIFICATIONS ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] border-t border-gray-100 dark:border-white/5 relative">
        <div class="container mx-auto px-6 relative z-10">
            
            <div class="text-center mb-16">
                <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-4 block">// GLOBAL NETWORK</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white uppercase mb-6">Đối tác & Chứng nhận</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm max-w-2xl mx-auto">
                    Hợp tác với những tên tuổi hàng đầu thế giới để mang lại chất lượng vượt trội. Sản phẩm đạt chuẩn quốc tế cho thị trường khó tính nhất.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20">
                <?php
                $partners = ['NVIDIA', 'SONY', 'INTEL', 'AMAZON AWS', 'MICROSOFT', 'SEAGATE', 'QUALCOMM', 'SAMSUNG'];
                foreach ($partners as $partner): ?>
                    <div class="group cyber-cut bg-white dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/5 h-24 flex items-center justify-center hover:bg-slate-50 dark:hover:bg-[#0F172A] hover:border-orange-500/30 transition-all duration-300 cursor-default">
                        <span class="text-slate-400 dark:text-slate-500 font-display font-bold text-lg group-hover:text-orange-600 dark:group-hover:text-white transition-colors tracking-wide"><?php echo $partner; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="flex flex-wrap justify-center gap-8 md:gap-16 border-t border-slate-200 dark:border-white/5 pt-16">
                <?php
                $certs = [
                    ['code' => "ISO 9001", 'name' => "Quality Management", 'icon' => 'badge-check'],
                    ['code' => "CE", 'name' => "European Standard", 'icon' => 'shield-check'],
                    ['code' => "FCC", 'name' => "Federal Comm. (USA)", 'icon' => 'wifi'],
                    ['code' => "RoHS", 'name' => "Eco Friendly", 'icon' => 'file-check'],
                    ['code' => "IP67", 'name' => "Waterproof Standard", 'icon' => 'cloud']
                ];
                foreach ($certs as $cert): ?>
                    <div class="flex flex-col items-center gap-3 group">
                        <div class="w-20 h-20 rounded-full border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 flex items-center justify-center group-hover:border-orange-500 group-hover:text-orange-600 dark:group-hover:text-orange-500 text-slate-400 transition-all">
                            <i data-lucide="<?php echo $cert['icon']; ?>" class="w-8 h-8"></i>
                        </div>
                        <div class="text-center">
                            <span class="block text-slate-900 dark:text-white font-bold text-lg"><?php echo $cert['code']; ?></span>
                            <span class="block text-slate-400 dark:text-slate-500 text-[10px] uppercase tracking-wide"><?php echo $cert['name']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 6: CTA / CONTACT ================= -->
    <section class="py-24 bg-white dark:bg-[#050505] relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/grid-me.png')] opacity-[0.03] dark:opacity-5"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="font-display text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8 uppercase tracking-tighter">Sẵn sàng hợp tác?</h2>
            <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base max-w-2xl mx-auto mb-12">
                Hãy để TavaVision đồng hành cùng doanh nghiệp của bạn trong kỷ nguyên số hóa an ninh. Liên hệ ngay để được tư vấn giải pháp chuyên biệt.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <button class="btn-cut px-10 py-5 bg-orange-600 text-white font-bold text-sm uppercase tracking-widest hover:bg-orange-700 transition shadow-lg shadow-orange-500/20 dark:shadow-orange-900/20">Liên hệ kinh doanh</button>
                <button class="btn-cut px-10 py-5 bg-transparent border border-gray-200 dark:border-white/20 text-slate-900 dark:text-white font-bold text-sm uppercase tracking-widest hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-black transition">Tải hồ sơ năng lực</button>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
