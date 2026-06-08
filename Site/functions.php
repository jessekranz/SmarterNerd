<?php
/**
 * Kadence Child Theme - SmarterNerd functions.
 *
 * Add custom PHP snippets here instead of editing the Kadence parent theme.
 * This keeps your changes safe when Kadence updates.
 *
 * @package Kadence_Child_SmarterNerd
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue child theme stylesheet.
 */
function smarternerd_kadence_child_enqueue_styles() {
    wp_enqueue_style(
        'kadence-child-smarternerd-style',
        get_stylesheet_uri(),
        array( 'kadence-global' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'smarternerd_kadence_child_enqueue_styles', 20 );

/**
 * Enqueue neonspec design system styles.
 */
function smarternerd_enqueue_neonspec_styles() {
    wp_enqueue_style(
        'smarternerd-neonspec',
        get_stylesheet_directory_uri() . '/neonspec-styles.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'smarternerd_enqueue_neonspec_styles', 25 );
