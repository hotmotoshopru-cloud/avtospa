<?php
/** Дополнительные технические SEO-настройки АвтоСпа. */
if (!defined('ABSPATH')) { exit; }

function avtospa_canonical_url() {
    if (is_front_page() || is_home()) {
        return home_url('/');
    }
    if (is_page()) {
        return get_permalink();
    }
    return '';
}

function avtospa_output_canonical() {
    if (avtospa_has_seo_plugin()) {
        return;
    }
    $canonical = avtospa_canonical_url();
    if ($canonical) {
        echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . PHP_EOL;
    }
}
add_action('wp_head', 'avtospa_output_canonical', 1);

function avtospa_cleanup_head() {
    if (is_front_page() || is_home() || is_page()) {
        remove_action('wp_head', 'rel_canonical');
    }
}
add_action('wp', 'avtospa_cleanup_head');
