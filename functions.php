<?php
/**
 * Theme bootstrap file.
 *
 * @package Jurisic
 */

if ( ! defined( 'JURISIC_VERSION' ) ) {
    define( 'JURISIC_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( 'JURISIC_ASSET_DIR' ) ) {
    define( 'JURISIC_ASSET_DIR', trailingslashit( get_template_directory() ) . 'assets' );
}

if ( ! defined( 'JURISIC_ASSET_URL' ) ) {
    define( 'JURISIC_ASSET_URL', trailingslashit( get_template_directory_uri() ) . 'assets' );
}


add_action( 'after_setup_theme', 'jurisic_theme_setup' );
/**
 * Register theme supports and editor configuration.
 */
function jurisic_theme_setup(): void {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'custom-units' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'jurisic' ),
            'footer'  => __( 'Footer Menu', 'jurisic' ),
        )
    );

    $editor_stylesheet = JURISIC_ASSET_DIR . '/css/editor.css';

    if ( file_exists( $editor_stylesheet ) ) {
        add_editor_style( 'assets/css/editor.css' );
    }
}

add_action( 'enqueue_block_assets', 'jurisic_enqueue_theme_styles' );
/**
 * Enqueue compiled Tailwind assets for both front-end and editor.
 */
function jurisic_enqueue_theme_styles(): void {
    $frontend_asset = jurisic_asset_path( 'css/frontend.css' );

    if ( $frontend_asset ) {
        wp_enqueue_style(
            'jurisic-frontend',
            $frontend_asset['url'],
            array(),
            $frontend_asset['ver']
        );
    }

    $editor_override = is_admin() ? jurisic_asset_path( 'css/editor.css' ) : null;

    if ( $editor_override ) {
        wp_enqueue_style(
            'jurisic-editor',
            $editor_override['url'],
            array( 'wp-edit-blocks' ),
            $editor_override['ver']
        );
    }
}

/**
 * Resolve asset URLs with cache busting.
 *
 * @param string $relative Relative path starting from the assets directory.
 */
function jurisic_asset_path( string $relative ): ?array {
    $file_path = trailingslashit( JURISIC_ASSET_DIR ) . ltrim( $relative, '/' );

    if ( ! file_exists( $file_path ) ) {
        return null;
    }

    $file_url = trailingslashit( JURISIC_ASSET_URL ) . ltrim( $relative, '/' );
    $version  = filemtime( $file_path ) ?: JURISIC_VERSION;

    return array(
        'url' => $file_url,
        'ver' => $version,
    );
}
