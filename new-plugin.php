<?php

/**
 * Plugin Name: new plugin
 * Plugin URI: https://truthseekers.io
 * Description: registering scripts styles and stuff
 * Author: John
 * Author URI: https://truthseekers.io
 */


function new_plugin_setup()
{
    $asset_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');

    wp_register_script(
        'truth-new-plugin-script',
        plugins_url('build/index.js', __FILE__),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    wp_register_style(
        'truth-new-block-style',
        plugins_url('/src/style.css', __FILE__),
        array('wp-edit-blocks')
    );

    wp_register_script(
        'jsc-courses-frontend-script', //handle
        plugins_url('/src/frontend.js', __FILE__),
        array('jquery')
    );

    register_block_type('truth/new-plugin-block', array(
        'editor_script' => 'truth-new-plugin-script',
        'editor_style'  => 'truth-new-block-style',
        'script' => 'jsc-courses-frontend-script'
    ));
}

add_action('init', 'new_plugin_setup');
