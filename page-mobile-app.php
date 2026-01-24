<?php
/**
 * Template Name: Mobile App
 */

get_header();
?>

<div class="font-sans text-slate-600 dark:text-slate-300 bg-white dark:bg-[#050505] selection:bg-orange-500/30 selection:text-white overflow-x-hidden transition-colors duration-300">
    
    <style>
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
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
    </style>

    <!-- ================= SECTION 1: HERO APP ================= -->
    <section class="relative h-[90vh] min-h-[700px] w-full bg-white dark:bg-[#050505] overflow-hidden border-b border-gray-100 dark:border-white/5 flex items-center pt-20">
         <!-- Background Elements -->
         <div class="absolute inset-0 bg-tech-grid opacity-30"></div>
         <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-orange-500/5 dark:bg-orange-600/10 rounded-full blur-[120px] pointer-events-none"></div>
         <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-500/5 dark:bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

         <div class="container mx-auto px-6 relative z-10 h-full">
             <div class="flex flex-col lg:flex-row items-center h-full gap-16">
                 
                 <!-- Left Content -->
                 <div class="w-full lg:w-5/12 pt-10 lg:pt-0">
                     <div class="inline-flex items-center gap-2 px-3 py-1 mb-8 border border-gray-200 dark:border-white/20 bg-gray-50 dark:bg-white/5 backdrop-blur-md rounded-sm">
                        <i data-lucide="smartphone" class="w-3.5 h-3.5 text-orange-600 dark:text-orange-500"></i>
                        <span class="text-xs font-bold text-slate-800 dark:text-white uppercase tracking-widest">Tava Smart App</span>
                     </div>
                     
                     <h1 class="font-display text-5xl md:text-7xl font-black text-slate-900 dark:text-white mb-6 leading-[0.9] uppercase tracking-tighter">
                        Quyền năng <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-600">Trong tay bạn</span>
                     </h1>
                     
                     <p class="text-slate-500 dark:text-slate-400 text-sm md:text-base leading-relaxed mb-10 border-l-4 border-orange-600 pl-6 max-w-md">
                        Kiểm soát toàn bộ hệ sinh thái an ninh chỉ với một chạm. Giao diện trực quan, thông báo tức thì, kết nối vạn vật.
                     </p>

                     <div class="flex flex-wrap gap-4">
                        <button class="flex items-center gap-3 px-6 py-3 bg-slate-900 dark:bg-white text-white dark:text-black btn-cut hover:bg-orange-600 dark:hover:bg-orange-500 hover:text-white transition-all group">
                           <i data-lucide="apple" class="w-5 h-5"></i>
                           <div class="text-left">
                              <span class="block text-[9px] uppercase font-bold tracking-wider">Download on the</span>
                              <span class="block text-sm font-bold leading-none">App Store</span>
                           </div>
                        </button>
                        <button class="flex items-center gap-3 px-6 py-3 border border-gray-200 dark:border-white/20 text-slate-900 dark:text-white btn-cut hover:bg-gray-100 dark:hover:bg-white/10 transition-all">
                           <i data-lucide="play" class="w-5 h-5 fill-current"></i>
                           <div class="text-left">
                              <span class="block text-[9px] uppercase font-bold tracking-wider">Get it on</span>
                              <span class="block text-sm font-bold leading-none">Google Play</span>
                           </div>
                        </button>
                     </div>
                 </div>

                 <!-- Right Visual: Floating Phones -->
                 <div class="w-full lg:w-7/12 relative h-full flex items-center justify-center lg:justify-end">
                     <!-- Phone 1: Main -->
                     <div class="relative z-20 w-[280px] md:w-[320px] aspect-[9/19.5] bg-black rounded-[3rem] border-[8px] border-[#1a1a1a] shadow-2xl animate-float">
                        <div class="absolute top-0 w-full h-full bg-slate-900 rounded-[2.5rem] overflow-hidden">
                           <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-80" alt="App Main">
                           
                           <!-- UI Overlay -->
                           <div class="absolute top-12 left-6 right-6">
                              <div class="flex justify-between text-white text-xs font-bold mb-6">
                                 <span>Hello, Admin</span>
                                 <div class="w-8 h-8 rounded-full bg-orange-600 flex items-center justify-center">TV</div>
                              </div>
                              <div class="grid grid-cols-2 gap-3">
                                 <div class="bg-white/10 backdrop-blur p-3 rounded-xl border border-white/5">
                                    <i data-lucide="shield" class="w-5 h-5 text-green-500 mb-2"></i>
                                    <span class="text-[10px] uppercase text-slate-400 block">System</span>
                                    <span class="text-white font-bold">Armed</span>
                                 </div>
                                 <div class="bg-white/10 backdrop-blur p-3 rounded-xl border border-white/5">
                                    <i data-lucide="activity" class="w-5 h-5 text-orange-500 mb-2"></i>
                                    <span class="text-[10px] uppercase text-slate-400 block">Events</span>
                                    <span class="text-white font-bold">12 New</span>
                                 </div>
                              </div>
                           </div>

                           <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-32 h-1 bg-white/20 rounded-full"></div>
                        </div>
                     </div>

                     <!-- Phone 2: Behind -->
                     <div class="absolute z-10 w-[260px] md:w-[300px] aspect-[9/19.5] bg-black rounded-[3rem] border-[8px] border-[#1a1a1a] shadow-2xl transform translate-x-16 translate-y-12 rotate-6 opacity-40 dark:opacity-60 filter blur-[1px]">
                        <div class="absolute top-0 w-full h-full bg-slate-800 rounded-[2.5rem] overflow-hidden">
                           <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop" class="w-full h-full object-cover" alt="App Detail">
                        </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>

    <!-- ================= SECTION 2: KEY FEATURES GRID ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] border-b border-gray-100 dark:border-white/5">
         <div class="container mx-auto px-6">
            <div class="text-center mb-20">
               <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-4 block">// CORE FUNCTIONS</span>
               <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white uppercase">Tính năng thông minh</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
               <?php
               $features = [
                  ['icon' => 'bell', 'title' => "Cảnh báo tức thì", 'desc' => "Nhận thông báo Push Notification kèm hình ảnh (Snapshot) ngay khi có sự kiện."],
                  ['icon' => 'play', 'title' => "Xem lại thông minh", 'desc' => "Smart Playback lọc sự kiện theo màu sắc, giúp tìm kiếm khoảnh khắc trong tích tắc."],
                  ['icon' => 'share-2', 'title' => "Chia sẻ QR Code", 'desc' => "Phân quyền truy cập cho người thân hoặc nhân viên chỉ bằng một mã QR."],
                  ['icon' => 'user-check', 'title' => "Quản lý tập trung", 'desc' => "Thêm và quản lý không giới hạn thiết bị, địa điểm trên cùng một tài khoản."]
               ];
               foreach ($features as $item): ?>
                  <div class="cyber-cut bg-white dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-8 hover:bg-slate-50 dark:hover:bg-[#0F172A] hover:border-orange-500/50 transition-all group">
                     <div class="w-12 h-12 bg-gray-100 dark:bg-white/5 btn-cut flex items-center justify-center text-slate-500 dark:text-slate-400 mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                        <i data-lucide="<?php echo $item['icon']; ?>" class="w-6 h-6"></i>
                     </div>
                     <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3 uppercase"><?php echo $item['title']; ?></h3>
                     <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-700 dark:group-hover:text-slate-300"><?php echo $item['desc']; ?></p>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
    </section>

    <!-- ================= SECTION 3: INTERACTIVE UI SHOWCASE ================= -->
    <section class="py-24 bg-white dark:bg-[#050505] relative overflow-hidden">
         <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16">
               
               <!-- Left: Interactive Menu -->
               <div class="w-full lg:w-1/3">
                  <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-6 block">// INTERFACE DESIGN</span>
                  <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-900 dark:text-white uppercase mb-10">Trải nghiệm <br/>Mượt mà</h2>
                  
                  <div class="space-y-4" id="app-screen-selector">
                     <?php
                     $screens = [
                        ['title' => "Dashboard", 'desc' => "Giao diện trực quan. Quản lý tất cả thiết bị tại một nơi duy nhất.", 'img' => "https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop"],
                        ['title' => "Live View", 'desc' => "Xem trực tiếp đa kênh với độ trễ thấp. Hỗ trợ zoom kỹ thuật số 16x.", 'img' => "https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop"],
                        ['title' => "Smart Playback", 'desc' => "Tìm kiếm sự kiện thông minh theo thời gian, đối tượng hoặc hành vi.", 'img' => "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop"]
                     ];
                     foreach ($screens as $idx => $screen): ?>
                        <div 
                           data-screen-idx="<?php echo $idx; ?>"
                           data-screen-img="<?php echo $screen['img']; ?>"
                           class="screen-btn p-6 cursor-pointer border-l-2 transition-all duration-300 <?php echo $idx === 0 ? 'border-orange-500 bg-gray-50 dark:bg-white/5' : 'border-gray-200 dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/5'; ?>"
                        >
                           <h4 class="screen-title text-lg font-bold uppercase mb-2 <?php echo $idx === 0 ? 'text-slate-900 dark:text-white' : 'text-slate-400 dark:text-slate-500 hover:text-slate-600'; ?>"><?php echo $screen['title']; ?></h4>
                           <p class="screen-desc text-sm <?php echo $idx === 0 ? 'text-slate-600 dark:text-slate-300' : 'text-slate-400 dark:text-slate-600'; ?>"><?php echo $screen['desc']; ?></p>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>

               <!-- Right: Phone Display -->
               <div class="w-full lg:w-2/3 flex items-center justify-center relative">
                  <!-- Geometric Background -->
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-[500px] h-[500px] border border-gray-100 dark:border-white/5 rounded-full animate-spin-slow-reverse"></div>
                     <div class="w-[300px] h-[300px] border border-gray-200 dark:border-white/10 rounded-full animate-pulse-slow absolute"></div>
                  </div>

                  <!-- Phone Frame -->
                  <div class="relative w-[320px] h-[650px] bg-black rounded-[3.5rem] border-[8px] border-[#222] shadow-2xl z-10 transition-transform duration-500 hover:scale-[1.02]">
                     <div class="relative w-full h-full bg-slate-900 rounded-[2.5rem] overflow-hidden">
                         <img 
                           id="main-app-screen"
                           src="<?php echo $screens[0]['img']; ?>" 
                           class="w-full h-full object-cover transition-opacity duration-500" 
                           alt="Screen"
                         >
                         
                         <!-- Dynamic Island -->
                         <div class="absolute top-5 left-1/2 -translate-x-1/2 w-28 h-8 bg-black rounded-full flex items-center justify-center gap-3">
                           <div class="w-2 h-2 rounded-full bg-[#111] border border-[#333]"></div>
                         </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
    </section>

    <!-- ================= SECTION 4: ECOSYSTEM INTEGRATION ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] border-y border-gray-100 dark:border-white/5 relative">
         <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/grid-me.png')] opacity-[0.03] dark:opacity-5"></div>
         
         <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between mb-16">
               <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white uppercase max-w-xl leading-tight">
                  Kết nối <span class="text-orange-600">Vạn vật</span>
               </h2>
               <p class="text-slate-500 dark:text-slate-400 text-sm max-w-sm text-center md:text-right mt-4 md:mt-0">
                  Tava Smart App là trung tâm điều khiển của hệ sinh thái TavaVision, kết nối liền mạch giữa Camera AI và Màn hình TavaLED.
               </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
               <!-- Card 1 -->
               <div class="cyber-cut bg-white dark:bg-[#050505] border border-gray-100 dark:border-white/10 p-8 hover:border-blue-500/50 hover:bg-blue-50/10 dark:hover:bg-blue-900/10 transition-all group">
                  <div class="flex justify-between items-start mb-8">
                     <i data-lucide="smartphone" class="w-8 h-8 text-slate-900 dark:text-white"></i>
                     <i data-lucide="arrow-right" class="w-6 h-6 text-slate-300 dark:text-slate-600 group-hover:text-blue-500 transition-colors"></i>
                  </div>
                  <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Điều khiển từ xa</h4>
                  <p class="text-slate-500 text-sm">Bật/tắt chế độ báo động, xoay camera PTZ, đàm thoại 2 chiều từ bất kỳ đâu.</p>
               </div>
               
               <!-- Card 2 -->
               <div class="cyber-cut bg-white dark:bg-[#050505] border border-gray-100 dark:border-white/10 p-8 hover:border-orange-500/50 hover:bg-orange-50/10 dark:hover:bg-orange-900/10 transition-all group">
                  <div class="flex justify-between items-start mb-8">
                     <i data-lucide="monitor" class="w-8 h-8 text-slate-900 dark:text-white"></i>
                     <i data-lucide="arrow-right" class="w-6 h-6 text-slate-300 dark:text-slate-600 group-hover:text-orange-500 transition-colors"></i>
                  </div>
                  <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Đồng bộ TavaLED</h4>
                  <p class="text-slate-500 text-sm">Đẩy hình ảnh từ Camera lên màn hình lớn TavaLED chỉ với một thao tác vuốt.</p>
               </div>

               <!-- Card 3 -->
               <div class="cyber-cut bg-white dark:bg-[#050505] border border-gray-100 dark:border-white/10 p-8 hover:border-green-500/50 hover:bg-green-50/10 dark:hover:bg-green-900/10 transition-all group">
                  <div class="flex justify-between items-start mb-8">
                     <i data-lucide="lock" class="w-8 h-8 text-slate-900 dark:text-white"></i>
                     <i data-lucide="arrow-right" class="w-6 h-6 text-slate-300 dark:text-slate-600 group-hover:text-green-500 transition-colors"></i>
                  </div>
                  <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Bảo mật đa lớp</h4>
                  <p class="text-slate-500 text-sm">Xác thực vân tay/FaceID khi đăng nhập. Mã hóa dữ liệu đường truyền chuẩn AES-256.</p>
               </div>
            </div>
         </div>
    </section>

    <!-- ================= SECTION 5: DOWNLOAD CTA ================= -->
    <section class="py-32 bg-white dark:bg-[#050505] relative overflow-hidden">
         <!-- Background Glow -->
         <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-500/5 dark:bg-orange-600/10 rounded-full blur-[100px] pointer-events-none"></div>

         <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="font-display text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8 uppercase tracking-tighter">Tải ứng dụng ngay</h2>
            <p class="text-slate-500 dark:text-slate-400 text-base max-w-xl mx-auto mb-12">
               Trải nghiệm sự tiện lợi và an tâm tuyệt đối. Miễn phí trọn đời cho khách hàng sử dụng thiết bị TavaVision.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-6">
               <button class="flex items-center gap-4 bg-slate-900 dark:bg-white text-white dark:text-black px-8 py-4 btn-cut hover:bg-orange-600 dark:hover:bg-orange-500 transition-all group w-full sm:w-auto justify-center shadow-xl">
                  <i data-lucide="apple" class="w-6 h-6"></i>
                  <div class="text-left">
                     <span class="block text-[10px] uppercase font-bold tracking-wider opacity-70">Download on the</span>
                     <span class="block text-lg font-bold leading-none">App Store</span>
                  </div>
               </button>
               <button class="flex items-center gap-4 bg-transparent border border-gray-200 dark:border-white/20 text-slate-900 dark:text-white px-8 py-4 btn-cut hover:bg-gray-50 dark:hover:bg-white/10 transition-all w-full sm:w-auto justify-center">
                  <i data-lucide="play" class="w-6 h-6 fill-current"></i>
                  <div class="text-left">
                     <span class="block text-[10px] uppercase font-bold tracking-wider opacity-70">Get it on</span>
                     <span class="block text-lg font-bold leading-none">Google Play</span>
                  </div>
               </button>
            </div>
            
            <div class="mt-12 flex flex-wrap justify-center gap-8 text-slate-400 dark:text-slate-500 text-xs uppercase tracking-widest font-mono">
               <div class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i> Free Updates</div>
               <div class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i> No Ads</div>
               <div class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i> 24/7 Support</div>
            </div>
         </div>
    </section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.screen-btn');
        const mainImg = document.getElementById('main-app-screen');

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Reset all
                buttons.forEach(b => {
                    b.classList.remove('border-orange-500', 'bg-gray-50', 'dark:bg-white/5');
                    b.classList.add('border-gray-200', 'dark:border-white/10', 'hover:bg-gray-50', 'dark:hover:bg-white/5');
                    
                    const title = b.querySelector('.screen-title');
                    title.classList.remove('text-slate-900', 'dark:text-white');
                    title.classList.add('text-slate-400', 'dark:text-slate-500');

                    const desc = b.querySelector('.screen-desc');
                    desc.classList.remove('text-slate-600', 'dark:text-slate-300');
                    desc.classList.add('text-slate-400', 'dark:text-slate-600');
                });

                // Active this
                this.classList.remove('border-gray-200', 'dark:border-white/10', 'hover:bg-gray-50', 'dark:hover:bg-white/5');
                this.classList.add('border-orange-500', 'bg-gray-50', 'dark:bg-white/5');

                const title = this.querySelector('.screen-title');
                title.classList.remove('text-slate-400', 'dark:text-slate-500');
                title.classList.add('text-slate-900', 'dark:text-white');

                const desc = this.querySelector('.screen-desc');
                desc.classList.remove('text-slate-400', 'dark:text-slate-600');
                desc.classList.add('text-slate-600', 'dark:text-slate-300');

                // Change image
                mainImg.style.opacity = '0';
                setTimeout(() => {
                    mainImg.src = this.getAttribute('data-screen-img');
                    mainImg.style.opacity = '1';
                }, 300);
            });
        });
    });
</script>

<?php get_footer(); ?>
