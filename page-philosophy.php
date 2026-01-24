<?php
/**
 * Template Name: Product Philosophy
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
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        html { scroll-behavior: smooth; }
    </style>

    <!-- ================= SECTION 1: HERO PHILOSOPHY ================= -->
    <section class="relative h-[80vh] min-h-[600px] w-full bg-tech-grid overflow-hidden border-b border-gray-100 dark:border-white/5 flex items-center">
         <div class="absolute inset-0 z-0">
             <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?q=80&w=2068&auto=format&fit=crop" class="w-full h-full object-cover opacity-10 dark:opacity-20" alt="Design Abstract">
             <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 dark:from-[#050505] dark:via-[#050505]/80 to-transparent"></div>
             <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-orange-500/5 dark:from-orange-900/10 via-transparent to-transparent"></div>
         </div>
         
         <div class="container mx-auto px-6 relative z-10 pt-20">
             <div class="max-w-5xl">
                 <div class="flex items-center gap-3 mb-8">
                    <div class="w-12 h-px bg-orange-600 dark:bg-orange-500"></div>
                    <span class="text-orange-600 dark:text-orange-500 text-xs font-bold uppercase tracking-[0.25em]">Design Philosophy</span>
                 </div>
                 <h1 class="font-display text-5xl md:text-8xl font-black text-slate-900 dark:text-white mb-8 leading-[0.9] uppercase tracking-tighter">
                    Hình thức tuân theo <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-600">Công năng</span>
                 </h1>
                 <p class="text-slate-600 dark:text-slate-400 text-base md:text-xl max-w-2xl leading-relaxed border-l-4 border-orange-600 pl-8 italic">
                    "Tại TavaVision, chúng tôi tin rằng một sản phẩm an ninh hoàn hảo không chỉ cần thông minh vượt trội mà còn phải vô hình trong không gian sống, tôn trọng kiến trúc và bền bỉ với thời gian."
                 </p>
             </div>
         </div>
         
         <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-96 h-96 border border-gray-100 dark:border-white/5 rounded-full animate-spin-slow-reverse hidden md:block"></div>
    </section>

    <!-- ================= SECTION 2: 3 PILLARS ================= -->
    <section class="py-32 bg-white dark:bg-[#050505] relative border-b border-gray-100 dark:border-white/5">
         <div class="container mx-auto px-6">
            <div class="text-center mb-24">
               <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-4 block">// 03 TRỤ CỘT THIẾT KẾ</span>
               <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white uppercase">Triết lý cốt lõi</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
               <!-- Pillar 1 -->
               <div class="group relative">
                  <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-px h-20 bg-gradient-to-b from-transparent to-orange-600 z-0 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                  <div class="cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-10 h-full hover:border-orange-500/50 transition-all duration-500 relative z-10 group-hover:-translate-y-2">
                     <div class="w-16 h-16 bg-white dark:bg-white/5 btn-cut flex items-center justify-center text-slate-400 mb-8 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                        <i data-lucide="pen-tool" class="w-8 h-8"></i>
                     </div>
                     <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wide">Tinh Tế</h3>
                     <p class="text-orange-600 font-bold text-sm leading-relaxed mb-6">Minimalism.</p>
                     <p class="text-slate-500 text-sm leading-relaxed">Loại bỏ mọi chi tiết thừa. Thiết kế nguyên khối (Unibody) giúp camera hòa mình vào không gian, không gây cảm giác bị "giám sát" nặng nề.</p>
                  </div>
               </div>

               <!-- Pillar 2 -->
               <div class="group relative mt-12 md:mt-0">
                  <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-px h-20 bg-gradient-to-b from-transparent to-blue-500 z-0 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                  <div class="cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-10 h-full hover:border-blue-500/50 transition-all duration-500 relative z-10 group-hover:-translate-y-2">
                     <div class="w-16 h-16 bg-white dark:bg-white/5 btn-cut flex items-center justify-center text-slate-400 mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i data-lucide="component" class="w-8 h-8"></i>
                     </div>
                     <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wide">Bền Bỉ</h3>
                     <p class="text-blue-500 font-bold text-sm leading-relaxed mb-6">Durability.</p>
                     <p class="text-slate-500 text-sm leading-relaxed">Sử dụng vật liệu cao cấp: Hợp kim hàng không, Kính cường lực. Đạt chuẩn IP67/IK10 để thách thức mọi điều kiện thời tiết khắc nghiệt.</p>
                  </div>
               </div>

               <!-- Pillar 3 -->
               <div class="group relative mt-12 md:mt-0">
                  <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-px h-20 bg-gradient-to-b from-transparent to-green-500 z-0 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                  <div class="cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-10 h-full hover:border-green-500/50 transition-all duration-500 relative z-10 group-hover:-translate-y-2">
                     <div class="w-16 h-16 bg-white dark:bg-white/5 btn-cut flex items-center justify-center text-slate-400 mb-8 group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <i data-lucide="brain-circuit" class="w-8 h-8"></i>
                     </div>
                     <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wide">Thông Minh</h3>
                     <p class="text-green-500 font-bold text-sm leading-relaxed mb-6">Intelligence.</p>
                     <p class="text-slate-500 text-sm leading-relaxed">Phần cứng được tối ưu hóa cho AI. Chip xử lý NPU chuyên biệt được đặt tại vị trí tản nhiệt tốt nhất để vận hành bền bỉ 24/7.</p>
                  </div>
               </div>
            </div>
         </div>
    </section>

    <!-- ================= SECTION 3: INDUSTRIAL AESTHETICS ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] border-b border-gray-100 dark:border-white/5">
         <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
               <div class="w-full lg:w-1/2">
                   <div class="relative w-full aspect-square bg-white dark:bg-[#050505] cyber-cut border border-gray-100 dark:border-white/10 flex items-center justify-center group overflow-hidden shadow-2xl">
                      <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/5 to-transparent opacity-50"></div>
                      <img src="https://images.unsplash.com/photo-1542835245-12b70d510a95?q=80&w=2070&auto=format&fit=crop" class="w-[80%] h-[80%] object-contain drop-shadow-2xl transition-transform duration-700 group-hover:scale-105 filter grayscale group-hover:grayscale-0" alt="Material Detail">
                      
                      <!-- Annotation Lines -->
                      <div class="absolute top-1/4 right-10 flex items-center gap-2 opacity-60">
                         <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                         <div class="w-12 h-px bg-slate-300 dark:bg-white/50"></div>
                         <span class="text-[10px] uppercase font-mono text-slate-500">Aluminium Alloy</span>
                      </div>
                      <div class="absolute bottom-1/3 left-10 flex items-center gap-2 opacity-60">
                         <span class="text-[10px] uppercase font-mono text-slate-500">Matte Finish</span>
                         <div class="w-12 h-px bg-slate-300 dark:bg-white/50"></div>
                         <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                      </div>
                   </div>
               </div>
               
               <div class="w-full lg:w-1/2">
                   <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-4 block">// MATERIAL & FINISH</span>
                   <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">Vẻ đẹp của sự <br/>Chuẩn xác</h2>
                   <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-8 border-l-2 border-slate-200 dark:border-slate-700 pl-6">
                      Mỗi chiếc camera TavaVision là một khối hợp kim nhôm hàng không 6000-series được cắt CNC chính xác đến từng micromet. Bề mặt được xử lý Anodized hóa tạo độ cứng bề mặt như kim cương và khả năng chống ăn mòn tuyệt đối.
                   </p>
                   <div class="grid grid-cols-2 gap-6">
                      <div>
                         <h4 class="text-slate-900 dark:text-white font-bold text-2xl mb-1">6000<span class="text-sm align-top text-orange-500">Series</span></h4>
                         <p class="text-xs text-slate-500 uppercase">Hợp kim nhôm</p>
                      </div>
                      <div>
                         <h4 class="text-slate-900 dark:text-white font-bold text-2xl mb-1">0.02<span class="text-sm align-top text-orange-500">mm</span></h4>
                         <p class="text-xs text-slate-500 uppercase">Độ sai số CNC</p>
                      </div>
                   </div>
               </div>
            </div>
         </div>
    </section>

    <!-- ================= SECTION 4: DESIGN PROCESS ================= -->
    <section class="py-24 bg-white dark:bg-[#050505] relative overflow-hidden border-b border-gray-100 dark:border-white/5">
         <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row-reverse gap-16 items-center">
               
               <div class="w-full lg:w-1/2">
                  <div class="relative">
                     <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-4 block">// FROM SKETCH TO REALITY</span>
                     <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white mb-8 leading-tight">Quy trình <br/>Hiện thực hóa</h2>
                     
                     <div class="space-y-12 relative pl-8 border-l border-gray-100 dark:border-white/10">
                        <div class="relative">
                           <div class="absolute -left-[37px] top-0 w-4 h-4 bg-white dark:bg-[#050505] border-2 border-orange-500 rounded-full"></div>
                           <h4 class="text-slate-900 dark:text-white font-bold uppercase mb-2 text-lg">01. Phác thảo & Ý tưởng</h4>
                           <p class="text-slate-500 dark:text-slate-400 text-sm">Mọi sản phẩm bắt đầu từ hàng trăm bản vẽ tay, tìm kiếm tỉ lệ vàng trong thiết kế công nghiệp.</p>
                        </div>
                        <div class="relative">
                           <div class="absolute -left-[37px] top-0 w-4 h-4 bg-white dark:bg-[#050505] border-2 border-slate-300 dark:border-slate-600 rounded-full"></div>
                           <h4 class="text-slate-900 dark:text-white font-bold uppercase mb-2 text-lg">02. Prototyping & AI Tuning</h4>
                           <p class="text-slate-500 dark:text-slate-400 text-sm">Dựng mô hình 3D, in mẫu thử nghiệm và tinh chỉnh vị trí cảm biến để AI đạt hiệu suất cao nhất.</p>
                        </div>
                        <div class="relative">
                           <div class="absolute -left-[37px] top-0 w-4 h-4 bg-white dark:bg-[#050505] border-2 border-slate-300 dark:border-slate-600 rounded-full"></div>
                           <h4 class="text-slate-900 dark:text-white font-bold uppercase mb-2 text-lg">03. Kiểm thử khắc nghiệt</h4>
                           <p class="text-slate-500 dark:text-slate-400 text-sm">Sản phẩm phải vượt qua các bài test sốc nhiệt (-30°C đến 60°C), ngâm nước, va đập trước khi xuất xưởng.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="w-full lg:w-1/2 relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-red-600 blur-[80px] opacity-10 dark:opacity-20"></div>
                    <div class="relative z-10 w-full aspect-square cyber-cut border border-gray-100 dark:border-white/10 overflow-hidden bg-gray-50 dark:bg-[#0A0A0A]">
                       <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a782?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 transition-all duration-700 hover:scale-105" alt="Prototyping">
                       
                       <div class="absolute inset-0 p-8 pointer-events-none">
                          <div class="absolute top-8 left-8 w-16 h-16 border-t-2 border-l-2 border-slate-200 dark:border-white/20"></div>
                          <div class="absolute bottom-8 right-8 w-16 h-16 border-b-2 border-r-2 border-slate-200 dark:border-white/20"></div>
                          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-slate-200 dark:text-white/10">
                             <i data-lucide="crosshair" class="w-32 h-32"></i>
                          </div>
                       </div>
                    </div>
               </div>
            </div>
         </div>
    </section>

    <!-- ================= SECTION 5: CTA ================= -->
    <section class="py-24 bg-gray-50 dark:bg-[#080808] relative overflow-hidden border-t border-gray-100 dark:border-white/5">
         <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/grid-me.png')] opacity-[0.03] dark:opacity-5"></div>
         <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="font-display text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8 uppercase tracking-tighter">Trải nghiệm sự khác biệt</h2>
            <p class="text-slate-500 dark:text-slate-400 text-sm md:text-base max-w-2xl mx-auto mb-12">
               Khám phá dải sản phẩm kết tinh từ triết lý thiết kế của TavaVision.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
               <button class="btn-cut px-10 py-5 bg-orange-600 text-white font-bold text-sm uppercase tracking-widest hover:bg-orange-700 transition shadow-lg shadow-orange-500/20 dark:shadow-orange-900/20">Xem sản phẩm</button>
               <button class="btn-cut px-10 py-5 bg-transparent border border-gray-200 dark:border-white/20 text-slate-900 dark:text-white font-bold text-sm uppercase tracking-widest hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-black transition">Liên hệ tư vấn</button>
            </div>
         </div>
    </section>

</div>

<?php get_footer(); ?>
