<?php
/**
 * TavaCam functions and definitions
 * 
 * @package TavaCam
 * @version 1.3
 */

if (!function_exists('tavacam_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function tavacam_setup()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Set custom image sizes
        add_image_size('tavacam-featured', 1200, 675, true); // 16:9 ratio
        add_image_size('tavacam-thumbnail', 600, 400, true);  // Card thumbnails
        add_image_size('tavacam-hero', 1920, 1080, true);     // Hero images

        // Register navigation menus
        register_nav_menus(array(
            'primary'   => esc_html__('Primary Menu', 'tavacam'),
            'footer'    => esc_html__('Footer Menu', 'tavacam'),
            'mobile'    => esc_html__('Mobile Menu', 'tavacam'),
        ));

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_setup_theme', 'tavacam_setup');

/**
 * Enqueue scripts and styles.
 */
function tavacam_scripts()
{
    // Main stylesheet
    wp_enqueue_style('tavacam-style', get_stylesheet_uri(), array(), '1.3');

    // Custom Animations
    wp_enqueue_style('tavacam-animations', get_template_directory_uri() . '/animations.css', array(), '1.3');

    // Google Fonts - Inter & Share Tech Mono
    wp_enqueue_style(
        'tavacam-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Share+Tech+Mono&display=swap', 
        array(), 
        null
    );

    // Lucide Icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, false);
}
add_action('wp_enqueue_scripts', 'tavacam_scripts');

/**
 * Custom excerpt length
 */
function tavacam_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'tavacam_excerpt_length');

/**
 * Custom excerpt more string
 */
function tavacam_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'tavacam_excerpt_more');

/**
 * Register widget areas.
 */
function tavacam_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'tavacam'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'tavacam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-8 bg-white dark:bg-slate-900 rounded-lg p-6 shadow-lg">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4 text-slate-900 dark:text-white">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 1', 'tavacam'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Footer widget area 1', 'tavacam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-bold mb-4">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 2', 'tavacam'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Footer widget area 2', 'tavacam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-bold mb-4">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 3', 'tavacam'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Footer widget area 3', 'tavacam'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-bold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'tavacam_widgets_init');

/**
 * Add custom body classes
 */
function tavacam_body_classes($classes)
{
    // Add page slug to body class
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }

    // Add class if not logged in
    if (!is_user_logged_in()) {
        $classes[] = 'not-logged-in';
    }

    return $classes;
}
add_filter('body_class', 'tavacam_body_classes');
