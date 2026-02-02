<?php
/**
 * Vite Integration for WordPress
 *
 * Handles loading assets from Vite dev server in development
 * and from the dist/ folder in production.
 */

/**
 * Check if Vite dev server is running
 */
function trunorse_is_vite_dev_server_running() {
    // Priority 1: Check for VITE_DEV_MODE constant
    if (defined('VITE_DEV_MODE') && VITE_DEV_MODE === true) {
        return true;
    }

    // Priority 2: Check for manifest file (no manifest = dev mode)
    $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
    if (!file_exists($manifest_path)) {
        return true;
    }

    // Priority 3: Check environment type + manifest age
    if (function_exists('wp_get_environment_type') && wp_get_environment_type() === 'development') {
        $manifest_age = time() - filemtime($manifest_path);
        // If manifest is older than 1 hour in dev, assume dev server
        if ($manifest_age > 3600) {
            return true;
        }
    }

    return false;
}

/**
 * Get Vite server URL
 */
function trunorse_get_vite_server_url() {
    if (defined('VITE_SERVER')) {
        return VITE_SERVER;
    }
    return 'http://localhost:5173';
}

/**
 * Enqueue Vite assets
 */
function trunorse_enqueue_vite_assets() {
    $is_dev = trunorse_is_vite_dev_server_running();

    if ($is_dev) {
        // Development: Load from Vite dev server
        $vite_server = trunorse_get_vite_server_url();

        // Vite client for HMR
        wp_enqueue_script(
            'vite-client',
            $vite_server . '/@vite/client',
            [],
            null,
            false
        );
        wp_script_add_data('vite-client', 'type', 'module');

        // Main entry point
        wp_enqueue_script(
            'trunorse-main',
            $vite_server . '/src/main.js',
            [],
            null,
            false
        );
        wp_script_add_data('trunorse-main', 'type', 'module');

    } else {
        // Production: Load from dist/ folder using manifest
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';

        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);

            if (isset($manifest['src/main.js'])) {
                $entry = $manifest['src/main.js'];

                // Enqueue JavaScript
                wp_enqueue_script(
                    'trunorse-main',
                    get_template_directory_uri() . '/dist/' . $entry['file'],
                    [],
                    filemtime(get_template_directory() . '/dist/' . $entry['file']),
                    true
                );
                wp_script_add_data('trunorse-main', 'type', 'module');

                // Enqueue CSS
                if (isset($entry['css']) && is_array($entry['css'])) {
                    foreach ($entry['css'] as $index => $css_file) {
                        wp_enqueue_style(
                            'trunorse-style-' . $index,
                            get_template_directory_uri() . '/dist/' . $css_file,
                            [],
                            filemtime(get_template_directory() . '/dist/' . $css_file)
                        );
                    }
                }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'trunorse_enqueue_vite_assets');

/**
 * Add type="module" to Vite scripts
 */
function trunorse_add_module_type_to_scripts($tag, $handle, $src) {
    $module_handles = ['vite-client', 'trunorse-main'];

    if (in_array($handle, $module_handles)) {
        $tag = str_replace(' src', ' type="module" src', $tag);
    }

    return $tag;
}
add_filter('script_loader_tag', 'trunorse_add_module_type_to_scripts', 10, 3);

/**
 * Preload critical fonts (optional - add your fonts here)
 */
function trunorse_preload_fonts() {
    $is_dev = trunorse_is_vite_dev_server_running();

    if (!$is_dev) {
        // Add font preloads for production
        // Example:
        // echo '<link rel="preload" href="' . get_template_directory_uri() . '/dist/fonts/your-font.woff2" as="font" type="font/woff2" crossorigin>';
    }
}
add_action('wp_head', 'trunorse_preload_fonts', 1);
