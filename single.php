<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<div
    class="font-sans text-slate-800 bg-white dark:bg-slate-950 dark:text-gray-300 selection:bg-orange-100 selection:text-orange-900 transition-colors duration-300">

    <main class="pt-24 pb-16 bg-white dark:bg-slate-950">

        <?php
        while (have_posts()):
            the_post();

            // Get Category
            $categories = get_the_category();
            $first_category = !empty($categories) ? $categories[0]->name : 'Uncategorized';
            $first_category_link = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';

            // Get Author Info
            $author_id = get_the_author_meta('ID');
            $author_name = get_the_author();
            $author_avatar = get_avatar_url($author_id);

            // Stats
            $post_date = get_the_date('d Tháng m, Y');
            // Reading time approximation (200 words per minute)
            $content = get_post_field('post_content', $post->ID);
            $word_count = str_word_count(strip_tags($content));
            $reading_time = ceil($word_count / 200);
            ?>

            <!-- --- 1. BREADCRUMB --- -->
            <div class="container mx-auto px-6 mb-8">
                <nav
                    class="flex items-center text-sm text-slate-500 dark:text-gray-400 gap-2 overflow-x-auto whitespace-nowrap pb-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="hover:text-orange-600 dark:hover:text-orange-400 transition">
                        <?php esc_html_e('Trang chủ', 'tavacam'); ?>
                    </a>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    <a href="<?php echo esc_url($first_category_link); ?>"
                        class="hover:text-orange-600 dark:hover:text-orange-400 transition">
                        <?php echo esc_html($first_category); ?>
                    </a>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    <span class="text-slate-900 dark:text-white font-medium truncate">
                        <?php the_title(); ?>
                    </span>
                </nav>
            </div>

            <!-- --- 2. ARTICLE HEADER --- -->
            <div class="container mx-auto px-6 mb-12">
                <div class="max-w-4xl mx-auto text-center">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 text-xs font-bold uppercase tracking-widest mb-6">
                        <?php echo esc_html($first_category); ?>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-black text-slate-900 dark:text-white mb-6 leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <div
                        class="flex flex-wrap items-center justify-center gap-6 text-sm text-slate-500 dark:text-gray-400 border-b border-gray-100 dark:border-gray-800 pb-8 mb-8">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>"
                                class="w-10 h-10 rounded-full object-cover border-2 border-white dark:border-slate-800 shadow-sm" />
                            <div class="text-left">
                                <span class="block font-bold text-slate-900 dark:text-white">
                                    <?php echo esc_html($author_name); ?>
                                </span>
                                <span class="text-xs">Author</span>
                            </div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-gray-200 dark:bg-gray-700"></div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>
                                <?php echo esc_html($post_date); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>
                                <?php echo esc_html($reading_time); ?> phút đọc
                            </span>
                        </div>
                        <!-- Example View Count - Usually requires a plugin or custom meta field -->
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>1,240 lượt xem</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()): ?>
                    <div
                        class="relative w-full aspect-video md:aspect-[21/9] rounded-2xl overflow-hidden shadow-2xl mb-12 group">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover transition duration-700 group-hover:scale-105')); ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                        <?php if (get_post_meta(get_the_ID(), 'image_source', true)): ?>
                            <div
                                class="absolute bottom-6 right-6 text-white text-xs opacity-80 bg-black/30 px-3 py-1 rounded-full backdrop-blur-sm">
                                Nguồn ảnh:
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'image_source', true)); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- --- 3. MAIN CONTENT LAYOUT --- -->
            <div class="container mx-auto px-6">
                <div class="flex flex-col lg:flex-row gap-12">

                    <!-- LEFT: SOCIAL SHARE (Sticky on Desktop) -->
                    <div class="hidden lg:flex flex-col gap-4 sticky top-32 h-fit w-12 z-10">
                        <span
                            class="text-[10px] font-bold text-slate-400 uppercase tracking-widest text-center writing-mode-vertical py-4 transform -rotate-180">Chia
                            sẻ</span>
                        <button
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-gray-400 flex items-center justify-center hover:bg-[#1877F2] hover:text-white transition-all shadow-sm transform hover:scale-110"><i
                                data-lucide="facebook" class="w-4.5 h-4.5"></i></button>
                        <button
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-gray-400 flex items-center justify-center hover:bg-[#1DA1F2] hover:text-white transition-all shadow-sm transform hover:scale-110"><i
                                data-lucide="twitter" class="w-4.5 h-4.5"></i></button>
                        <button
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-gray-400 flex items-center justify-center hover:bg-[#0A66C2] hover:text-white transition-all shadow-sm transform hover:scale-110"><i
                                data-lucide="linkedin" class="w-4.5 h-4.5"></i></button>
                        <div class="w-10 h-px bg-gray-200 dark:bg-slate-700 my-2"></div>
                        <button
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-gray-400 flex items-center justify-center hover:bg-orange-600 hover:text-white transition-all shadow-sm transform hover:scale-110"><i
                                data-lucide="bookmark" class="w-4.5 h-4.5"></i></button>
                    </div>

                    <!-- CENTER: CONTENT BODY -->
                    <div class="lg:w-2/3">
                        <article
                            class="prose prose-lg prose-slate dark:prose-invert max-w-none 
                    prose-headings:font-bold prose-headings:text-slate-900 dark:prose-headings:text-white 
                    prose-a:text-orange-600 hover:prose-a:text-orange-700 
                    prose-img:rounded-xl prose-img:shadow-lg
                    prose-blockquote:border-l-4 prose-blockquote:border-orange-500 prose-blockquote:pl-6 prose-blockquote:py-4 prose-blockquote:my-10 prose-blockquote:bg-orange-50 dark:prose-blockquote:bg-orange-900/20 prose-blockquote:italic prose-blockquote:text-slate-700 dark:prose-blockquote:text-gray-300 prose-blockquote:rounded-r-lg prose-blockquote:shadow-sm">

                            <?php the_content(); ?>

                        </article>

                        <!-- Tags -->
                        <?php
                        $tags = get_the_tags();
                        if ($tags):
                            ?>
                            <div class="mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-wrap gap-2">
                                <?php foreach ($tags as $tag): ?>
                                    <span
                                        class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-gray-400 text-xs font-medium rounded-full hover:bg-orange-100 dark:hover:bg-orange-900/30 hover:text-orange-600 dark:hover:text-orange-400 cursor-pointer transition">#
                                        <?php echo esc_html($tag->name); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Author Box -->
                        <div
                            class="mt-12 bg-slate-50 dark:bg-slate-900 rounded-2xl p-8 flex flex-col md:flex-row gap-6 items-center md:items-start text-center md:text-left border border-slate-100 dark:border-slate-800">
                            <div class="shrink-0 relative">
                                <img src="<?php echo esc_url($author_avatar); ?>"
                                    alt="<?php echo esc_attr($author_name); ?>"
                                    class="w-20 h-20 rounded-full object-cover border-4 border-white dark:border-slate-800 shadow-md" />
                                <div
                                    class="absolute bottom-0 right-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white border-2 border-white dark:border-slate-800">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        strokeWidth="3" strokeLinecap="round" strokeLinejoin="round">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900 dark:text-white mb-1">
                                    <?php echo esc_html($author_name); ?>
                                </h4>
                                <span
                                    class="text-xs font-bold text-orange-600 uppercase tracking-widest mb-3 block">Writer</span>
                                <p class="text-sm text-slate-600 dark:text-gray-400 leading-relaxed mb-4">
                                    <?php echo esc_html(get_the_author_meta('description')); ?>
                                </p>
                                <div class="flex justify-center md:justify-start gap-3">
                                    <a href="#"
                                        class="w-8 h-8 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center text-slate-400 border border-slate-200 dark:border-slate-700 hover:border-blue-600 hover:text-blue-600 transition"><i
                                            data-lucide="linkedin" class="w-3.5 h-3.5"></i></a>
                                    <a href="#"
                                        class="w-8 h-8 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center text-slate-400 border border-slate-200 dark:border-slate-700 hover:border-blue-400 hover:text-blue-400 transition"><i
                                            data-lucide="twitter" class="w-3.5 h-3.5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: SIDEBAR (Sticky) -->
                    <div class="lg:w-1/3 space-y-8">

                        <!-- Widget: Table of Contents -->
                        <div id="toc-widget"
                            class="bg-white dark:bg-slate-900 rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm sticky top-32 transition-colors duration-300 z-[40]">
                            <h4
                                class="font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2 border-b border-gray-50 dark:border-gray-800 pb-2">
                                <i data-lucide="list" class="w-4.5 h-4.5 text-orange-600"></i> Mục lục bài viết
                            </h4>
                            <ul id="toc-list"
                                class="space-y-3 text-sm text-slate-600 dark:text-gray-400 max-h-[70vh] overflow-y-auto pr-2 custom-scrollbar">
                                <!-- Generated by JS -->
                            </ul>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const article = document.querySelector('article.prose');
                                const tocList = document.getElementById('toc-list');
                                const tocWidget = document.getElementById('toc-widget');

                                if (!article || !tocList) return;

                                const headings = article.querySelectorAll('h2, h3');
                                if (headings.length === 0) {
                                    if (tocWidget) tocWidget.style.display = 'none';
                                    return;
                                }

                                let h2Count = 0;

                                headings.forEach((heading, index) => {
                                    // Generate ID if not exists
                                    if (!heading.id) {
                                        heading.id = 'heading-' + index;
                                    }
                                    // Add Scroll Margin for sticky header
                                    heading.classList.add('scroll-mt-28');

                                    // Create List Item
                                    const li = document.createElement('li');
                                    const a = document.createElement('a');
                                    a.href = '#' + heading.id;
                                    a.className = 'hover:text-orange-600 dark:hover:text-orange-400 transition flex gap-2 items-start';

                                    // Numbering for H2
                                    if (heading.tagName.toLowerCase() === 'h2') {
                                        h2Count++;
                                        const numSpan = document.createElement('span');
                                        numSpan.className = 'text-orange-500 font-bold shrink-0 mt-[1px]';
                                        numSpan.textContent = (h2Count < 10 ? '0' + h2Count : h2Count) + '.';
                                        a.appendChild(numSpan);
                                    } else {
                                        // H3 Styling (Indent)
                                        a.classList.add('pl-7', 'text-xs', 'opacity-90');
                                        const bullet = document.createElement('span');
                                        bullet.className = 'w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700 mt-1.5 shrink-0 mr-1';
                                        //  a.appendChild(bullet); // Optional bullet
                                    }

                                    const textSpan = document.createElement('span');
                                    textSpan.textContent = heading.textContent;
                                    a.appendChild(textSpan);

                                    li.appendChild(a);
                                    tocList.appendChild(li);
                                });

                                // Optional: Smooth scroll behavior integrated in CSS usually, but ensuring:
                                document.documentElement.style.scrollBehavior = 'smooth';
                            });
                        </script>

                        <!-- Widget: Recommended Posts -->
                        <div
                            class="bg-white dark:bg-slate-900 rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm">
                            <h4
                                class="font-bold text-slate-900 dark:text-white mb-6 pb-2 border-b border-gray-50 dark:border-gray-800">
                                Bài viết nổi bật</h4>
                            <div class="space-y-6">
                                <?php
                                // Query for random or latest posts
                                $related_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'post__not_in' => array(get_the_ID()),
                                    'orderby' => 'rand'
                                );
                                $related_query = new WP_Query($related_args);
                                if ($related_query->have_posts()):
                                    while ($related_query->have_posts()):
                                        $related_query->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="group flex gap-4">
                                            <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0 bg-slate-100">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition duration-500'));
                                                } ?>
                                            </div>
                                            <div>
                                                <span class="text-[10px] font-bold text-orange-600 uppercase">Blog</span>
                                                <h5
                                                    class="text-sm font-bold text-slate-900 dark:text-white line-clamp-2 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition mt-1">
                                                    <?php the_title(); ?>
                                                </h5>
                                                <span class="text-xs text-slate-400 mt-2 block">
                                                    <?php echo get_the_date(); ?>
                                                </span>
                                            </div>
                                        </a>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>

                        <!-- Widget: CTA Product -->
                        <div
                            class="bg-slate-900 dark:bg-black rounded-xl p-6 text-center text-white relative overflow-hidden group">
                            <div class="relative z-10">
                                <span
                                    class="inline-block px-3 py-1 bg-orange-600 text-[10px] font-bold uppercase tracking-wider rounded-full mb-4">Sản
                                    phẩm mới</span>
                                <h4 class="text-xl font-bold mb-2">Tava Outdoor IQ</h4>
                                <p class="text-sm text-slate-400 mb-6">Camera ngoài trời bền bỉ nhất với chuẩn IP67 và AI
                                    nhận diện người.</p>
                                <div class="w-48 mx-auto rounded-lg mb-6 shadow-2xl overflow-hidden bg-white/10">
                                    <!-- Placeholder CTA Image -->
                                    <img src="https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974&auto=format&fit=crop"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500"
                                        alt="Product" />
                                </div>
                                <button
                                    class="w-full py-3 bg-white text-slate-900 font-bold rounded hover:bg-orange-50 transition">Xem
                                    chi tiết</button>
                            </div>
                            <div
                                class="absolute top-0 right-0 w-64 h-64 bg-orange-600 rounded-full blur-[100px] opacity-20 -mr-20 -mt-20">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- --- 4. RELATED POSTS (Bottom) --- -->
            <div class="bg-slate-50 dark:bg-slate-900/50 py-16 mt-20 border-t border-slate-200 dark:border-slate-800">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between items-center mb-10">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Bài viết cùng chủ đề</h3>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>"
                            class="text-orange-600 font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">Xem
                            tất cả <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php
                        // Related Category Logic
                        $categories = get_the_category();
                        if ($categories) {
                            $category_ids = array();
                            foreach ($categories as $individual_category)
                                $category_ids[] = $individual_category->term_id;
                            $args = array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page' => 3,
                                'caller_get_posts' => 1
                            );
                            $my_query = new wp_query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                                    <a href="<?php the_permalink(); ?>"
                                        class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-slate-100 dark:border-slate-800 flex flex-col">
                                        <div class="h-48 overflow-hidden relative bg-slate-200">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition duration-500'));
                                            } ?>
                                            <div
                                                class="absolute top-4 left-4 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-slate-900 dark:text-white text-[10px] font-bold px-3 py-1 rounded uppercase tracking-wider">
                                                Blog</div>
                                        </div>
                                        <div class="p-6 flex-1 flex flex-col">
                                            <h4
                                                class="font-bold text-lg text-slate-900 dark:text-white mb-3 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition line-clamp-2">
                                                <?php the_title(); ?>
                                            </h4>
                                            <div class="text-sm text-slate-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div
                                                class="flex items-center justify-between text-xs text-slate-400 pt-4 border-t border-gray-50 dark:border-gray-800 mt-auto">
                                                <div class="flex items-center gap-2">
                                                    <i data-lucide="user" class="w-3.5 h-3.5"></i>
                                                    <?php echo get_the_author(); ?>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <i data-lucide="clock" class="w-3.5 h-3.5"></i> 5 min read
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }
                            wp_reset_query();
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
        endwhile; // End of the loop.
        ?>

    </main>

</div>

<?php
get_footer();
