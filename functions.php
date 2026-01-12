<?php
/**
 * TavaCam functions and definitions
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

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'tavacam'),
        ));

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comments',
            'gallery',
            'caption',
        ));
    }
endif;
add_action('after_setup_theme', 'tavacam_setup');

/**
 * Enqueue scripts and styles.
 */
function tavacam_scripts()
{
    wp_enqueue_style('tavacam-style', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('tavacam-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);

    // Enqueue Lucide Icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
}
add_action('wp_enqueue_scripts', 'tavacam_scripts');
