<?php

$theme = null;

// Constants
defined('I18N_DOMAIN') or define('I18N_DOMAIN', 'noah.dev');

// Includes
include('inc/navwalker.php');
include('inc/template_tags.php');
include('inc/themebuilder.php');
include('inc/pagebuilder.php');

// Launch Theme
if ( class_exists('ThemeBuilder') && $theme === null ) {
    $theme = new ThemeBuilder();
}

function prepare_theme() {
  add_theme_support( 'wp-block-styles' );
}

function custom_format_script_register() {
  wp_register_script(
    'custom-format-js',
    get_template_directory_uri() . '/custom-format.js',
    array( 'wp-rich-text' )
  );
}

function custom_format_enqueue_assets_editor() {
  wp_enqueue_script( 'custom-format-js' );
}

add_action( 'init', 'custom_format_script_register' );
add_action( 'enqueue_block_editor_assets', 'custom_format_enqueue_assets_editor' );
add_action( 'after_setup_theme', 'prepare_theme' );
// add_action( 'enqueue_block_editor_assets', 'block_editor_styles' );


