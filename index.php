<?php
/**
 * The main template file
 */

get_header();
?>

<main id="primary" class="site-main flex-grow container mx-auto px-4 py-8">

    <?php
    if (have_posts()):

        if (is_home() && !is_front_page()):
            ?>
            <header class="mb-8">
                <h1 class="page-title text-3xl font-bold text-gray-900">
                    <?php single_post_title(); ?>
                </h1>
            </header>
            <?php
        endif;

        /* Start the Loop */
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            while (have_posts()):
                the_post(); // Typically we'd use get_template_part() here, but for basic struct putting inline or simple.
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300'); ?>>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail h-48 w-full overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transform hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="p-6">
                        <header class="entry-header mb-4">
                            <?php
                            if (is_singular()):
                                the_title('<h1 class="entry-title text-3xl font-bold mb-2">', '</h1>');
                            else:
                                the_title('<h2 class="entry-title text-xl font-semibold mb-2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-blue-600">', '</a></h2>');
                            endif;

                            if ('post' === get_post_type()):
                                ?>
                                <div class="entry-meta text-sm text-gray-500">
                                    <?php
                                    echo get_the_date();
                                    ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content text-gray-600 line-clamp-3">
                            <?php
                            the_excerpt();
                            ?>
                        </div><!-- .entry-content -->

                        <div class="mt-4">
                            <a href="<?php the_permalink(); ?>"
                                class="text-blue-600 font-medium hover:text-blue-800 hover:underline">Read more &rarr;</a>
                        </div>
                    </div>
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php

            endwhile;
            ?>
        </div>
        <?php

        the_posts_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'tavacam') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'tavacam') . '</span> <span class="nav-title">%title</span>',
            'class' => 'mt-8 flex justify-between'
        ));

    else:

        // If no content, include the "No posts found" template.
        ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e('Nothing Found', 'tavacam'); ?>
                </h1>
            </header>
            <div class="page-content">
                <p>
                    <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tavacam'); ?>
                </p>
                <?php get_search_form(); ?>
            </div>
        </section>
        <?php

    endif;
    ?>

</main><!-- #primary -->

<?php
get_footer();
