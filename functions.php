<?php
/**
 * Aquila Functions file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Aquila
 * @since Aquila 1.0
 */

function aquila_enqueue_scripts()
{
    // Registering styles and scripts
    wp_register_style('style-css', get_stylesheet_uri(), ['bootstrap-css'], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], '5.3', 'all');
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], '5.3', true);
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', ['bootstrap-js'], filemtime(get_template_directory() . '/assets/main.js'), true);

    // Enqueqing styles and scripts
    wp_enqueue_style('style-css');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');