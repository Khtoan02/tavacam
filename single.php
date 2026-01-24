<?php
/**
 * The template for displaying all single posts - Redesigned based on single-post.txt
 */

get_header();

while (have_posts()) :
    the_post();

    // Stats
    $content = get_the_content();
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);

    // Views (Mock or real if plugin exists)
    $views = get_post_meta(get_the_ID(), 'post_views_count', true) ?: '1.2k';
    
    // Category
    $categories = get_the_category();
    $primary_cat = !empty($categories) ? $categories[0] : null;

    // Tags
    $tags = get_the_tags();
?>

<div class="font-sans text-slate-600 dark:text-slate-300 bg-white dark:bg-[#050505] selection:bg-orange-500/30 selection:text-white transition-colors duration-300 cyber-main-single">
    
    <!-- Reading Progress Bar -->
    <div id="reading-progress" class="fixed top-0 left-0 h-[3px] bg-orange-600 transition-all duration-100 ease-out z-[100]" style="width: 0%"></div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap');
        
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .cyber-main-single { font-family: 'Inter', sans-serif; }
        
        /* Layout Container Standardized */
        .container-main { max-width: 1280px; margin: 0 auto; padding: 0 24px; }

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
                linear-gradient(to right, rgba(0, 0, 0, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.02) 1px, transparent 1px);
        }
        .dark .bg-tech-grid {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
        
        /* Typography Content */
        .prose-post { font-size: 17px; line-height: 1.85; }
        
        /* Paragraphs */
        .prose-post p { margin-bottom: 28px; color: #475569; }
        .dark .prose-post p { color: #94a3b8; }
        
        /* Headings */
        .prose-post h2 { 
            font-family: 'Space Grotesk', sans-serif; 
            font-weight: 700; 
            font-size: 2.25rem; 
            margin-top: 4rem; 
            margin-bottom: 2rem; 
            text-transform: uppercase; 
            letter-spacing: -0.025em; 
            color: #0f172a; 
            scroll-margin-top: 100px; 
        }
        .dark .prose-post h2 { color: #ffffff; }
        @media (min-width: 768px) { .prose-post h2 { font-size: 2.5rem; } }

        .prose-post h3 { 
            font-family: 'Space Grotesk', sans-serif; 
            font-weight: 700; 
            font-size: 1.5rem; 
            margin-top: 3.5rem; 
            margin-bottom: 1.5rem; 
            letter-spacing: -0.025em; 
            color: #0f172a; 
            scroll-margin-top: 100px; 
        }
        .dark .prose-post h3 { color: #ffffff; }
        @media (min-width: 768px) { .prose-post h3 { font-size: 1.875rem; } }

        .prose-post h4 { 
            font-family: 'Space Grotesk', sans-serif; 
            font-weight: 700; 
            font-size: 1.25rem; 
            margin-top: 2.5rem; 
            margin-bottom: 1.25rem; 
            color: #0f172a; 
        }
        .dark .prose-post h4 { color: #ffffff; }

        .prose-post strong { font-weight: 700; color: #0f172a; }
        .dark .prose-post strong { color: #ffffff; }

        /* Lists */
        .prose-post ul { list-style-type: none; padding-left: 0; margin-bottom: 2.5rem; }
        .prose-post li { position: relative; padding-left: 1.75rem; margin-bottom: 14px; color: #475569; }
        .dark .prose-post li { color: #94a3b8; }
        .prose-post li::before { 
            content: ''; position: absolute; left: 0; top: 0.7em; width: 8px; height: 8px; 
            background-color: #ea580c; 
            clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
        }
        
        /* Blockquotes */
        .prose-post blockquote {
            margin: 3.5rem 0;
            padding: 2.5rem;
            position: relative;
            font-family: 'Space Grotesk', sans-serif;
            font-style: italic;
            font-size: 1.5rem;
            line-height: 1.375;
            color: #0f172a;
            background-color: #f9fafb;
            border: 1px solid #f3f4f6;
            border-left: 6px solid #F97316;
            clip-path: polygon(20px 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%, 0 20px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .dark .prose-post blockquote {
            color: #ffffff;
            background-color: #0A0A0A;
            border-color: rgba(255, 255, 255, 0.1);
        }
        @media (min-width: 768px) { .prose-post blockquote { padding: 3.5rem; } }

        /* Images (WordPress Blocks) - Aggressive Styling */
        .prose-post .wp-block-image, 
        .prose-post figure.wp-block-image,
        .prose-post figure,
        .prose-post .aligncenter,
        .prose-post .alignleft,
        .prose-post .alignright {
            margin: 4rem 0 !important;
            position: relative !important;
            overflow: hidden !important;
            background-color: rgba(15, 23, 42, 0.1) !important;
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            clip-path: polygon(30px 0, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0 30px) !important;
            display: block !important;
        }
        .dark .prose-post .wp-block-image, 
        .dark .prose-post figure.wp-block-image,
        .dark .prose-post figure,
        .dark .prose-post .aligncenter,
        .dark .prose-post .alignleft,
        .dark .prose-post .alignright {
            background-color: rgba(255, 255, 255, 0.05) !important;
        }
        
        /* Image elements */
        .prose-post .wp-block-image img, 
        .prose-post figure img,
        .prose-post img.aligncenter,
        .prose-post img.alignleft,
        .prose-post img.alignright { 
            display: block !important; 
            width: 100% !important; 
            height: auto !important;
            filter: grayscale(100%) !important; 
            opacity: 0.8 !important;
            object-fit: cover !important;
            transition: all 1s ease !important;
            border-radius: 0 !important;
            margin: 0 !important;
        }
        
        .prose-post figure:hover img,
        .prose-post .wp-block-image:hover img,
        .prose-post img.aligncenter:hover,
        .prose-post img.alignleft:hover,
        .prose-post img.alignright:hover {
            filter: grayscale(0%) !important; 
            opacity: 1 !important; 
            transform: scale(1.05) !important;
        }
        
        /* Viewfinder Overlay for all image containers */
        .prose-post .wp-block-image::before, 
        .prose-post .wp-block-image::after,
        .prose-post figure::before, 
        .prose-post figure::after,
        .prose-post .aligncenter::before,
        .prose-post .aligncenter::after,
        .prose-post .alignleft::before,
        .prose-post .alignleft::after,
        .prose-post .alignright::before,
        .prose-post .alignright::after {
            content: '' !important; 
            position: absolute !important; 
            width: 40px !important; 
            height: 40px !important; 
            border-color: #F97316 !important; 
            z-index: 20 !important; 
            pointer-events: none !important;
            transition: all 0.5s ease !important;
        }
        
        .prose-post .wp-block-image::before, 
        .prose-post figure::before,
        .prose-post .aligncenter::before,
        .prose-post .alignleft::before,
        .prose-post .alignright::before { 
            top: 20px !important; 
            left: 20px !important; 
            border-top: 3px solid #F97316 !important; 
            border-left: 3px solid #F97316 !important; 
        }
        
        .prose-post .wp-block-image::after, 
        .prose-post figure::after,
        .prose-post .aligncenter::after,
        .prose-post .alignleft::after,
        .prose-post .alignright::after { 
            bottom: 20px !important; 
            right: 20px !important; 
            border-bottom: 3px solid #F97316 !important; 
            border-right: 3px solid #F97316 !important; 
        }

        .prose-post figure:hover::before,
        .prose-post .wp-block-image:hover::before,
        .prose-post .aligncenter:hover::before,
        .prose-post .alignleft:hover::before,
        .prose-post .alignright:hover::before { 
            transform: translate(-5px, -5px) !important; 
        }
        .prose-post figure:hover::after,
        .prose-post .wp-block-image:hover::after,
        .prose-post .aligncenter:hover::after,
        .prose-post .alignleft:hover::after,
        .prose-post .alignright:hover::after { 
            transform: translate(5px, 5px) !important; 
        }
        
        /* Captions */
        .prose-post figcaption {
            position: absolute !important; 
            bottom: 0 !important; 
            left: 0 !important; 
            width: 100% !important; 
            padding: 1.5rem !important;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent) !important;
            font-family: 'JetBrains Mono', monospace !important;
            font-size: 10px !important;
            color: #f97316 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.2em !important;
            text-align: left !important;
            font-style: italic !important;
            z-index: 25 !important;
            transition: opacity 0.5s !important;
        }
    </style>

    <!-- ================= SECTION 1: ARTICLE HERO ================= -->
    <section class="relative w-full pt-44 pb-20 bg-tech-grid border-b border-gray-100 dark:border-white/5">
         <div class="container-main relative z-10">
             
             <!-- Breadcrumb -->
             <div class="flex flex-wrap items-center gap-4 text-[10px] md:text-xs font-mono uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-10">
                <a href="<?php echo home_url(); ?>" class="hover:text-orange-600 transition-colors">Trang chủ</a>
                <span class="text-slate-200 dark:text-white/20">/</span>
                <?php if ($primary_cat): ?>
                    <a href="<?php echo get_category_link($primary_cat->term_id); ?>" class="hover:text-orange-600 transition-colors"><?php echo $primary_cat->name; ?></a>
                    <span class="text-slate-200 dark:text-white/20">/</span>
                <?php endif; ?>
                <span class="text-slate-900 dark:text-white font-bold tracking-normal uppercase">Tava Insights</span>
             </div>

             <div class="max-w-4xl">
                 <div class="inline-flex items-center gap-3 px-3 py-1.5 mb-8 border border-orange-500/30 bg-orange-500/10 backdrop-blur-md rounded-sm">
                    <i data-lucide="cpu" class="w-4 h-4 text-orange-600 dark:text-orange-500"></i>
                    <span class="text-[10px] font-bold text-orange-600 dark:text-orange-400 uppercase tracking-widest"><?php echo get_post_meta(get_the_ID(), 'article_series', true) ?: 'Tava Tech Insights'; ?></span>
                 </div>
                 
                 <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-extrabold text-slate-900 dark:text-white leading-[1.05] mb-12 tracking-tighter uppercase">
                    <?php the_title(); ?>
                 </h1>

                 <!-- Author & Stats Bar -->
                 <div class="flex flex-wrap items-center gap-10 py-8 border-y border-gray-100 dark:border-white/10">
                    <div class="flex items-center gap-4">
                       <div class="w-12 h-12 btn-cut overflow-hidden border border-gray-200 dark:border-white/20 bg-gray-100 dark:bg-slate-800">
                           <?php echo get_avatar(get_the_author_meta('ID'), 100, '', '', array('class' => 'w-full h-full object-cover')); ?>
                       </div>
                       <div>
                          <span class="block text-slate-900 dark:text-white font-bold text-xs uppercase tracking-wide"><?php the_author(); ?></span>
                          <span class="block text-slate-400 dark:text-slate-500 text-[10px] font-mono uppercase">Tech Expert</span>
                       </div>
                    </div>

                    <div class="h-10 w-px bg-gray-100 dark:bg-white/10 hidden md:block"></div>

                    <div class="flex items-center gap-8 text-slate-500 dark:text-slate-400 text-xs font-semibold uppercase tracking-wider">
                       <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-4.5 h-4.5 text-orange-600"></i> <?php echo get_the_date('d M, Y'); ?></div>
                       <div class="flex items-center gap-2"><i data-lucide="clock" class="w-4.5 h-4.5 text-blue-600"></i> <?php echo $reading_time; ?> Phút đọc</div>
                       <div class="flex items-center gap-2"><i data-lucide="eye" class="w-4.5 h-4.5 text-green-600"></i> <?php echo $views; ?> Lượt xem</div>
                    </div>
                 </div>
             </div>
         </div>
    </section>

    <!-- ================= SECTION 2: MAIN CONTENT ================= -->
    <section class="relative py-24 bg-white dark:bg-[#050505]">
         <div class="container-main">
            <div class="flex flex-col lg:flex-row gap-20">
               
               <!-- LEFT SIDEBAR (Sticky Controls) -->
               <div class="hidden lg:block w-16 relative">
                  <div class="sticky top-36 flex flex-col gap-8 items-center border-r border-gray-100 dark:border-white/5 pr-8">
                     <button class="w-12 h-12 flex items-center justify-center text-slate-400 hover:text-orange-600 dark:hover:text-white transition-all transform hover:scale-110 group relative">
                        <i data-lucide="thumbs-up" class="w-6 h-6"></i>
                        <span class="absolute left-16 bg-slate-900 dark:bg-white text-white dark:text-black text-[10px] font-bold px-3 py-1.5 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-2xl">Like Article</span>
                     </button>
                     <button class="w-12 h-12 flex items-center justify-center text-slate-400 hover:text-orange-600 dark:hover:text-white transition-all transform hover:scale-110 group relative">
                        <i data-lucide="message-square" class="w-6 h-6"></i>
                        <span class="absolute left-16 bg-slate-900 dark:bg-white text-white dark:text-black text-[10px] font-bold px-3 py-1.5 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-2xl">Drop Comment</span>
                     </button>
                     <div class="w-10 h-px bg-gray-100 dark:bg-white/10 my-2"></div>
                     <button class="w-12 h-12 flex items-center justify-center text-slate-400 hover:text-[#1877F2] transition-all transform hover:scale-110"><i data-lucide="facebook" class="w-6 h-6"></i></button>
                     <button class="w-12 h-12 flex items-center justify-center text-slate-400 hover:text-[#1DA1F2] transition-all transform hover:scale-110"><i data-lucide="twitter" class="w-6 h-6"></i></button>
                     <button class="w-12 h-12 flex items-center justify-center text-slate-400 hover:text-[#0A66C2] transition-all transform hover:scale-110"><i data-lucide="linkedin" class="w-6 h-6"></i></button>
                  </div>
               </div>

               <!-- CENTER CONTENT (The Article) -->
               <div class="flex-1 max-w-3xl">
                  
                  <?php if (has_excerpt()): ?>
                      <!-- Lead Paragraph -->
                      <div class="text-xl md:text-2xl text-slate-600 dark:text-white font-light leading-relaxed mb-16 border-b border-gray-100 dark:border-white/5 pb-14 italic">
                         <p><?php echo get_the_excerpt(); ?></p>
                      </div>
                  <?php endif; ?>

                  <!-- Main Article Content -->
                  <article class="prose-post">
                      <?php the_content(); ?>
                  </article>
                  
                  <!-- Article Footer: Tags -->
                  <div class="mt-20 pt-10 border-t border-gray-100 dark:border-white/10">
                     <div class="flex flex-wrap gap-4">
                        <?php
                        if ($tags) :
                            foreach ($tags as $tag) : ?>
                               <a href="<?php echo get_tag_link($tag->term_id); ?>" class="px-5 py-2 bg-gray-50 dark:bg-white/5 border border-gray-100 dark:border-white/10 text-slate-500 dark:text-slate-400 text-[11px] font-mono hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all uppercase tracking-widest font-bold">#<?php echo $tag->name; ?></a>
                        <?php endforeach; endif; ?>
                     </div>
                  </div>
               </div>

               <!-- RIGHT SIDEBAR (Table of Contents & Related) -->
               <div class="w-full lg:w-1/4 space-y-12">
                  
                  <!-- Widget: Table of Contents -->
                  <div class="cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 p-8 sticky top-36 shadow-2xl z-40">
                     <h4 class="text-slate-900 dark:text-white font-bold uppercase tracking-[0.2em] text-[10px] mb-8 flex items-center gap-3">
                        <i data-lucide="terminal" class="w-4 h-4 text-orange-600"></i>
                        CHƯƠNG TRÌNH NỘI DUNG
                     </h4>
                     <ul id="toc-list" class="space-y-5 text-[12px] font-bold text-slate-500 hover:text-slate-400 cursor-pointer transition-all">
                        <!-- Items injected by JS -->
                     </ul>
                  </div>

                  <!-- Widget: Product Integration -->
                  <div class="bg-slate-950 dark:bg-[#0F172A] border border-white/5 dark:border-blue-900/30 p-8 cyber-cut relative group overflow-hidden shadow-2xl">
                     <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 rounded-full blur-[70px] opacity-20 group-hover:opacity-50 transition-all duration-700"></div>
                     
                     <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400 mb-4 block">// TAVA PRE-ORDER</span>
                     <h4 class="text-white font-extrabold text-2xl mb-5 font-display tracking-tighter italic">Tava AI Bullet 5I</h4>
                     <div class="relative w-full aspect-video bg-black/80 mb-6 border border-white/5 flex items-center justify-center overflow-hidden cyber-cut">
                        <img src="https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-70 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000" alt="Product"/>
                     </div>
                     <p class="text-[12px] text-slate-400 mb-8 leading-relaxed font-medium">Bản lĩnh camera AI thế hệ mới với Chipset độc quyền, xử lý 100+ rủi ro mỗi giây.</p>
                     <button class="w-full btn-cut bg-blue-600 text-white text-[11px] font-bold uppercase py-4 hover:bg-blue-500 transition-all shadow-xl shadow-blue-600/20 active:scale-95">Trải nghiệm ngay</button>
                  </div>

                  <!-- Widget: Newsletter -->
                  <div class="bg-gray-50 dark:bg-gradient-to-br dark:from-orange-950/20 dark:to-black border border-gray-100 dark:border-orange-500/20 p-8 cyber-cut shadow-inner">
                     <i data-lucide="mail" class="w-8 h-8 text-orange-600 mb-6"></i>
                     <h4 class="text-slate-900 dark:text-white font-bold text-sm uppercase mb-3 leading-none tracking-tight">KẾT NỐI TRI THỨC</h4>
                     <p class="text-[12px] text-slate-500 dark:text-slate-400 mb-8 font-medium">Nhận báo cáo phân tích rủi ro an ninh AI mới nhất từ chuyên gia Tava.</p>
                     <form action="#" method="POST" class="space-y-3">
                        <input type="email" placeholder="Địa chỉ email của bạn..." class="w-full bg-white dark:bg-black border border-gray-200 dark:border-white/10 text-slate-900 dark:text-white text-[12px] px-5 py-4 btn-cut focus:outline-none focus:border-orange-600 transition-all"/>
                        <button type="submit" class="w-full btn-cut bg-slate-900 dark:bg-white text-white dark:text-black text-[11px] font-bold uppercase py-4 hover:bg-orange-600 hover:text-white transition-all active:scale-95">Đăng ký nhận tin</button>
                     </form>
                  </div>

               </div>

            </div>
         </div>
    </section>

    <!-- ================= SECTION 3: RELATED POSTS ================= -->
    <section class="py-28 bg-[#020202] border-t border-white/5">
         <div class="container-main">
            <div class="flex justify-between items-end mb-16">
               <div>
                  <span class="text-orange-600 font-mono text-[10px] uppercase tracking-[0.4em] mb-3 block text-center md:text-left">// TIẾP TỤC KHÁM PHÁ</span>
                  <h2 class="font-display text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">BÀI VIẾT CÙNG <span class="text-orange-600">CHỦ ĐỀ</span></h2>
               </div>
               <div class="flex gap-3">
                  <button class="w-12 h-12 border border-white/10 flex items-center justify-center hover:bg-white hover:text-black transition-all btn-cut text-white"><i data-lucide="chevron-left" class="w-5 h-5"></i></button>
                  <button class="w-12 h-12 border border-white/10 flex items-center justify-center hover:bg-white hover:text-black transition-all btn-cut text-white"><i data-lucide="chevron-right" class="w-5 h-5"></i></button>
               </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
               <?php
               $related_args = array(
                   'post_type' => 'post',
                   'posts_per_page' => 3,
                   'post__not_in' => array(get_the_ID()),
                   'category__in' => wp_get_post_categories(get_the_ID()),
                   'orderby' => 'rand'
               );
               $related_query = new WP_Query($related_args);
               if ($related_query->have_posts()): while ($related_query->have_posts()): $related_query->the_post();
               ?>
                  <article class="group cursor-pointer">
                     <a href="<?php the_permalink(); ?>" class="block">
                        <div class="relative h-56 cyber-cut overflow-hidden mb-6 border border-white/10 bg-[#050505]">
                           <?php if (has_post_thumbnail()): ?>
                               <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 opacity-50 group-hover:opacity-100 grayscale group-hover:grayscale-0')); ?>
                           <?php else: ?>
                               <img src="https://picsum.photos/seed/<?php the_ID(); ?>/800/600" class="w-full h-full object-cover opacity-30 grayscale" alt="Placeholder">
                           <?php endif; ?>
                           <div class="absolute top-0 right-0 bg-orange-600 text-white text-[9px] font-bold px-4 py-1.5 btn-cut m-5 tracking-widest">INSIGHTS</div>
                        </div>
                        <span class="text-[10px] text-slate-500 font-mono uppercase mb-3 block tracking-widest"><?php echo get_the_date('d . m . Y'); ?></span>
                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-600 transition-all line-clamp-2 leading-snug font-display uppercase italic">
                           <?php the_title(); ?>
                        </h3>
                        <span class="inline-flex items-center text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all group/link">
                           Đọc bài viết <i data-lucide="move-right" class="w-4 h-4 ml-3 transition-transform group-hover/link:translate-x-2 text-orange-600"></i>
                        </span>
                     </a>
                  </article>
               <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
         </div>
    </section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Reading Progress
        const progressBar = document.getElementById('reading-progress');
        window.addEventListener('scroll', () => {
            const totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            if(progressBar) progressBar.style.width = progress + '%';
        }, { passive: true });

        // TOC Generation
        const article = document.querySelector('article.prose-post');
        const tocList = document.getElementById('toc-list');
        if (article && tocList) {
            const headings = article.querySelectorAll('h2, h3');
            if (headings.length === 0) {
                const widget = tocList.closest('.cyber-cut');
                if(widget) widget.style.display = 'none';
            } else {
                headings.forEach((heading, index) => {
                    const id = 'heading-' + index;
                    heading.id = id;
                    
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = '#' + id;
                    a.className = "hover:text-white flex items-start gap-3 group transition-all " + 
                                  (heading.tagName === 'H3' ? 'pl-6 border-l border-white/5 ml-1 opacity-70 italic font-medium' : 'uppercase tracking-tight');
                    
                    const num = document.createElement('span');
                    num.className = "text-orange-600 group-hover:text-orange-500 font-mono";
                    num.textContent = (heading.tagName === 'H2' ? (index + 1 < 10 ? '0' + (index + 1) : index + 1) + '.' : '');
                    
                    a.appendChild(num);
                    const spanText = document.createElement('span');
                    spanText.textContent = heading.textContent;
                    a.appendChild(spanText);
                    
                    li.appendChild(a);
                    tocList.appendChild(li);
                });
            }
        }
    });
</script>

<?php endwhile; ?>

<?php get_footer(); ?>
