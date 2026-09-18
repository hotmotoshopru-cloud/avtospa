<?php
/** Дополнительные технические SEO-настройки АвтоСпа. */
if (!defined('ABSPATH')) { exit; }

/**
 * WordPress 6+ сам формирует canonical URL.
 * Если установлен SEO-плагин, canonical также оставляется под его контролем.
 * Тема не дублирует этот тег и не вмешивается в core rel_canonical.
 */

/** 404-страницы не должны индексироваться. */
function avtospa_404_robots($robots) {
    if (is_404()) {
        $robots['noindex'] = true;
        $robots['follow'] = true;
    }
    return $robots;
}
add_filter('wp_robots', 'avtospa_404_robots');
