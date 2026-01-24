<?php
/**
 * Template Name: Tava Insights (Blog)
 */

get_header();

// Fetch dynamic data
$featured_args = array(
    'posts_per_page' => 1,
    'meta_key' => '_is_ns_featured_post', // Example meta key or just get the latest
    'post_status' => 'publish'
);
$featured_query = new WP_Query($featured_args);
$featured_post_data = null;
if ($featured_query->have_posts()) {
    $featured_query->the_post();
    $featured_post_data = [
        'title' => get_the_title(),
        'excerpt' => get_the_excerpt(),
        'author' => get_the_author(),
        'date' => get_the_date('d M, Y'),
        'img' => get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop',
        'url' => get_permalink(),
        'cat' => get_the_category()[0]->name ?? 'General'
    ];
}
wp_reset_postdata();

// Regular posts
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 6
);
$posts_query = new WP_Query($posts_args);
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
                linear-gradient(to right, rgba(0, 0, 0, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.02) 1px, transparent 1px);
        }
        .dark .bg-tech-grid {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
    </style>

    <!-- ================= PAGE TITLE ================= -->
    <section class="pt-40 pb-12 bg-tech-grid border-b border-gray-100 dark:border-white/5">
         <div class="container mx-auto px-6">
             <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div>
                   <span class="text-orange-600 dark:text-orange-500 font-mono text-xs uppercase tracking-widest mb-2 block">// KNOWLEDGE HUB</span>
                   <h1 class="font-display text-4xl md:text-6xl font-bold text-slate-900 dark:text-white uppercase tracking-tight">Tava <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-600">Insights</span></h1>
                </div>
                
                <!-- Category Filter -->
                <div class="flex flex-wrap gap-2">
                   <?php
                   $categories = get_categories();
                   echo '<a href="'.get_permalink().'" class="px-4 py-2 text-[11px] font-bold uppercase tracking-wider btn-cut transition-all bg-orange-600 text-white">All</a>';
                   foreach ($categories as $cat) {
                       echo '<a href="'.get_category_link($cat->term_id).'" class="px-4 py-2 text-[11px] font-bold uppercase tracking-wider btn-cut transition-all bg-gray-100 dark:bg-white/5 text-slate-500 dark:text-slate-400 hover:bg-orange-50 dark:hover:bg-white/10 hover:text-orange-600 dark:hover:text-white">'.$cat->name.'</a>';
                   }
                   ?>
                </div>
             </div>
         </div>
    </section>

    <main class="container mx-auto px-6 py-16">
         
         <!-- ================= FEATURED POST ================= -->
         <?php if ($featured_post_data): ?>
         <section class="mb-24">
            <div class="group relative w-full h-[500px] cyber-cut overflow-hidden border border-gray-100 dark:border-white/10 bg-gray-900">
               <img src="<?php echo $featured_post_data['img']; ?>" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-[2s] grayscale group-hover:grayscale-0" alt="Featured">
               <div class="absolute inset-0 bg-gradient-to-t from-white via-white/40 to-transparent dark:from-[#050505] dark:via-[#050505]/50 dark:to-transparent"></div>
               
               <div class="absolute bottom-0 left-0 w-full p-8 md:p-12 flex flex-col items-start z-10">
                  <div class="inline-flex items-center gap-2 px-3 py-1 mb-4 border border-orange-500/30 bg-orange-500/10 backdrop-blur-md rounded-sm">
                     <i data-lucide="star" class="w-3 h-3 text-orange-600 dark:text-orange-500 fill-orange-500"></i>
                     <span class="text-[10px] font-bold text-orange-600 dark:text-orange-400 uppercase tracking-widest">Featured Article</span>
                  </div>
                  <h2 class="font-display text-3xl md:text-5xl font-bold text-slate-900 dark:text-white mb-4 leading-tight max-w-4xl hover:text-orange-600 transition-colors cursor-pointer">
                    <a href="<?php echo $featured_post_data['url']; ?>"><?php echo $featured_post_data['title']; ?></a>
                  </h2>
                  <p class="text-slate-700 dark:text-slate-300 text-sm md:text-base max-w-2xl mb-8 leading-relaxed border-l-2 border-orange-600 pl-4"><?php echo $featured_post_data['excerpt']; ?></p>
                  
                  <div class="flex items-center gap-6 text-xs font-mono text-slate-500 dark:text-slate-400">
                     <span class="flex items-center gap-2"><i data-lucide="user" class="w-3.5 h-3.5"></i> <?php echo $featured_post_data['author']; ?></span>
                     <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5"></i> <?php echo $featured_post_data['date']; ?></span>
                     <a href="<?php echo $featured_post_data['url']; ?>" class="flex items-center gap-2 text-slate-900 dark:text-white hover:text-orange-600 dark:hover:text-orange-500 transition-colors uppercase font-bold tracking-wider ml-auto md:ml-0">
                        Read Full Story <i data-lucide="arrow-right" class="w-4 h-4"></i>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <?php endif; ?>

         <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- ================= LEFT CONTENT: POST LIST ================= -->
            <div class="w-full lg:w-3/4">
               <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                  <?php if ($posts_query->have_posts()): while ($posts_query->have_posts()): $posts_query->the_post(); ?>
                     <div class="group cyber-cut bg-gray-50 dark:bg-[#0A0A0A] border border-gray-100 dark:border-white/10 hover:bg-slate-50 dark:hover:bg-[#0F172A] transition-all overflow-hidden flex flex-col">
                        <div class="relative h-64 overflow-hidden border-b border-gray-100 dark:border-white/5">
                           <?php if (has_post_thumbnail()): ?>
                               <img src="<?php the_post_thumbnail_url('large'); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100 grayscale group-hover:grayscale-0" alt="<?php the_title(); ?> shadow-2xl">
                           <?php endif; ?>
                           <div class="absolute top-4 left-4 bg-slate-900/80 backdrop-blur px-2 py-1 text-[10px] font-bold uppercase text-white border border-white/20">
                               <?php echo get_the_category()[0]->name; ?>
                           </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                           <div class="flex items-center gap-4 text-[10px] font-mono text-slate-400 mb-4 uppercase">
                               <span><i data-lucide="calendar" class="w-3 h-3 inline mr-1"></i><?php echo get_the_date(); ?></span>
                               <span><i data-lucide="clock" class="w-3 h-3 inline mr-1"></i>5 min read</span>
                           </div>
                           <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-4 line-clamp-2 group-hover:text-orange-600 transition-colors">
                               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </h4>
                           <p class="text-slate-500 dark:text-slate-400 text-sm line-clamp-3 mb-8 leading-relaxed"><?php echo get_the_excerpt(); ?></p>
                           <a href="<?php the_permalink(); ?>" class="mt-auto text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white flex items-center gap-2 hover:gap-3 transition-all group/link">
                               Đọc tiếp <i data-lucide="move-right" class="w-4 h-4 text-orange-600 transition-transform group-hover/link:translate-x-1"></i>
                           </a>
                        </div>
                     </div>
                  <?php endwhile; ?>
                  <?php else: ?>
                     <p>Không có bài viết nào.</p>
                  <?php endif; wp_reset_postdata(); ?>
               </div>

               <!-- Pagination -->
               <div class="mt-16 flex justify-center gap-4">
                  <?php
                  echo paginate_links(array(
                      'total' => $posts_query->max_num_pages,
                      'prev_text' => '<i data-lucide="chevron-left" class="w-4 h-4"></i>',
                      'next_text' => '<i data-lucide="chevron-right" class="w-4 h-4"></i>'
                  ));
                  ?>
               </div>
            </div>

            <!-- ================= RIGHT SIDEBAR ================= -->
            <div class="w-full lg:w-1/4 space-y-12">
               
               <!-- Search Widget -->
               <div class="relative">
                  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                      <input type="text" name="s" placeholder="Tìm kiếm bài viết..." class="w-full bg-gray-50 dark:bg-[#0A0A0A] border border-gray-200 dark:border-white/10 text-slate-900 dark:text-white text-xs px-4 py-4 btn-cut focus:outline-none focus:border-orange-500 transition-colors"/>
                      <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                          <i data-lucide="search" class="w-4 h-4"></i>
                      </button>
                  </form>
               </div>

               <!-- Popular Tags -->
               <div>
                  <h4 class="font-bold text-slate-900 dark:text-white uppercase text-xs tracking-widest mb-6 flex items-center gap-2">
                    <i data-lucide="tag" class="w-4 h-4 text-orange-600"></i> Trending Tags
                  </h4>
                  <div class="flex flex-wrap gap-2">
                     <?php
                     $tags = get_tags();
                     foreach ($tags as $tag) {
                         echo '<a href="'.get_tag_link($tag->term_id).'" class="px-3 py-1.5 bg-gray-50 dark:bg-[#0A0A0A] border border-gray-200 dark:border-white/10 text-slate-500 dark:text-slate-400 text-[10px] font-mono hover:border-orange-500 hover:text-orange-600 dark:hover:text-white cursor-pointer transition-all">#'.$tag->name.'</a>';
                     }
                     ?>
                  </div>
               </div>

               <!-- Most Popular -->
               <div>
                  <h4 class="font-bold text-slate-900 dark:text-white uppercase text-xs tracking-widest mb-6 flex items-center gap-2">
                    <i data-lucide="activity" class="w-4 h-4 text-orange-600"></i> Xem nhiều nhất
                  </h4>
                  <ul class="space-y-8">
                     <?php
                     $popular_posts = new WP_Query(array('posts_per_page' => 3, 'order' => 'DESC'));
                     $pop_idx = 1;
                     if ($popular_posts->have_posts()): while ($popular_posts->have_posts()): $popular_posts->the_post(); ?>
                        <li class="group cursor-pointer relative pl-8">
                           <span class="text-[32px] font-black text-slate-100 dark:text-white/5 leading-none absolute left-0 top-0 group-hover:text-orange-50 dark:group-hover:text-orange-500/10 transition-colors">0<?php echo $pop_idx++; ?></span>
                           <h5 class="text-sm font-bold text-slate-800 dark:text-slate-200 relative z-10 group-hover:text-orange-600 transition-colors line-clamp-2">
                               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </h5>
                           <span class="text-[10px] text-slate-400 mt-1 block uppercase font-mono"><?php echo get_the_date(); ?></span>
                        </li>
                     <?php endwhile; endif; wp_reset_postdata(); ?>
                  </ul>
               </div>

               <!-- Banner Ad -->
               <div class="relative aspect-[3/4] cyber-cut overflow-hidden bg-slate-900 group cursor-pointer shadow-2xl">
                  <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700 grayscale" alt="Ad">
                  <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 to-transparent p-8 flex flex-col justify-end items-center text-center">
                     <span class="text-white font-black text-3xl uppercase mb-2 leading-none">TavaVision <br/>Eagle Eye</span>
                     <p class="text-orange-100 text-[11px] mb-6 font-medium italic">Camera AI thế hệ mới với khả năng nhìn đêm có màu siêu thực.</p>
                     <button class="w-full py-3 bg-white text-slate-900 btn-cut text-xs font-bold uppercase hover:bg-orange-500 hover:text-white transition-all shadow-lg">Khám phá ngay</button>
                  </div>
               </div>

            </div>
         </div>
    </main>

</div>

<?php get_footer(); ?>
