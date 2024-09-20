<?php

/**
 * Plugin Name: Add Background Animations
 * Description: Add Background Animations to group blocks
 * Version: 0.0.1
 * Author Jacob Gruber
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

function background_animations_scripts()
{
    wp_enqueue_script(
        'background-animations-script',
        plugins_url('build/index.js', __FILE__),
        array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
    );
}
add_action('enqueue_block_editor_assets', 'background_animations_scripts');


function background_animations_styles()
{
    wp_enqueue_style(
        'background-animations-style',
        plugins_url('build/index.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.css')
    );
}
add_action('enqueue_block_assets', 'background_animations_styles');
