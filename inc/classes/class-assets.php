<?php
/**
 * Enqueue Theme assets.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions & filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Registering styles
        wp_register_style('style-css', get_stylesheet_uri(), ['bootstrap-css'], filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], '5.3', 'all');
        // Enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_script('bootstrap-js');
    }

    public function register_scripts()
    {
        // Register scripts
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], '5.3', true);
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/main.js', ['bootstrap-js'], filemtime(AQUILA_DIR_PATH . '/assets/main.js'), true);
        // Enqueue scripts
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('main-js');
    }
}