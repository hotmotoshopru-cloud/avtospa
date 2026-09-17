<?php
/** АвтоСпа theme functions. */
if (!defined('ABSPATH')) { exit; }

function avtospa_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array('primary'=>'Основное меню','footer'=>'Меню в подвале'));
}
add_action('after_setup_theme','avtospa_setup');

function avtospa_assets() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('avtospa-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_script('avtospa-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $version, true);
}
add_action('wp_enqueue_scripts','avtospa_assets');

function avtospa_customize_register($wp_customize) {
    $wp_customize->add_section('avtospa_contacts', array('title'=>'АвтоСпа — контакты','priority'=>30));
    $wp_customize->add_setting('avtospa_phone', array('default'=>'+7 916 299-98-59','sanitize_callback'=>'sanitize_text_field'));
    $wp_customize->add_control('avtospa_phone', array('label'=>'Телефон','section'=>'avtospa_contacts','type'=>'text'));
    $wp_customize->add_setting('avtospa_address', array('default'=>'Россия, Москва, Полярный проезд, 18, стр. 2','sanitize_callback'=>'sanitize_text_field'));
    $wp_customize->add_control('avtospa_address', array('label'=>'Адрес','section'=>'avtospa_contacts','type'=>'text'));
    $wp_customize->add_setting('avtospa_whatsapp', array('default'=>'','sanitize_callback'=>'esc_url_raw'));
    $wp_customize->add_control('avtospa_whatsapp', array('label'=>'WhatsApp URL','section'=>'avtospa_contacts','type'=>'url'));
    $wp_customize->add_setting('avtospa_telegram', array('default'=>'','sanitize_callback'=>'esc_url_raw'));
    $wp_customize->add_control('avtospa_telegram', array('label'=>'Telegram URL','section'=>'avtospa_contacts','type'=>'url'));
}
add_action('customize_register','avtospa_customize_register');

function avtospa_phone_href() {
    return preg_replace('/[^0-9+]/','', (string) get_theme_mod('avtospa_phone','+7 916 299-98-59'));
}

function avtospa_fallback_menu() {
    echo '<ul><li><a href="' . esc_url(home_url('/#services')) . '">Услуги</a></li><li><a href="' . esc_url(home_url('/#engine-wash')) . '">Мойка двигателя</a></li><li><a href="' . esc_url(home_url('/#tire-service')) . '">Шиномонтаж</a></li><li><a href="' . esc_url(home_url('/#contacts')) . '">Контакты</a></li></ul>';
}

function avtospa_has_seo_plugin() {
    return defined('WPSEO_VERSION') || defined('AIOSEO_VERSION') || class_exists('RankMath');
}

function avtospa_head_seo() {
    if (avtospa_has_seo_plugin()) { return; }
    if (is_front_page() || is_home()) {
        echo '<meta name="description" content="' . esc_attr('АвтоСпа в Москве — автомойка, мойка двигателя и шиномонтаж. Полярный проезд, 18, стр. 2. Запись и контакты на сайте.') . '">\n';
    }
}
add_action('wp_head','avtospa_head_seo',2);

function avtospa_schema() {
    if (!is_front_page()) { return; }
    $phone = get_theme_mod('avtospa_phone','+7 916 299-98-59');
    $address = get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2');
    $data = array(
        '@context'=>'https://schema.org',
        '@type'=>'LocalBusiness',
        'name'=>'АвтоСпа',
        'url'=>home_url('/'),
        'telephone'=>$phone,
        'address'=>array('@type'=>'PostalAddress','streetAddress'=>$address,'addressLocality'=>'Москва','addressCountry'=>'RU'),
        'hasOfferCatalog'=>array(
            '@type'=>'OfferCatalog',
            'name'=>'Услуги АвтоСпа',
            'itemListElement'=>array(
                array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Автомойка')),
                array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Мойка двигателя')),
                array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Шиномонтаж'))
            )
        )
    );
    foreach (array('avtospa_whatsapp','avtospa_telegram') as $field) {
        $url = get_theme_mod($field,'');
        if ($url) { $data['sameAs'][] = esc_url_raw($url); }
    }
    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . '</script>\n';
}
add_action('wp_head','avtospa_schema',20);
