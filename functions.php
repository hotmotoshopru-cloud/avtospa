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
    $wp_customize->add_control('avtospa_whatsapp', array('label'=>'WhatsApp URL (необязательно)','section'=>'avtospa_contacts','type'=>'url'));
    $wp_customize->add_setting('avtospa_telegram', array('default'=>'','sanitize_callback'=>'esc_url_raw'));
    $wp_customize->add_control('avtospa_telegram', array('label'=>'Telegram URL (необязательно)','section'=>'avtospa_contacts','type'=>'url'));
}
add_action('customize_register','avtospa_customize_register');

function avtospa_phone_href() {
    return preg_replace('/[^0-9+]/','', (string) get_theme_mod('avtospa_phone','+7 916 299-98-59'));
}
function avtospa_whatsapp_url() {
    $custom = get_theme_mod('avtospa_whatsapp','');
    return $custom ? $custom : 'https://wa.me/' . preg_replace('/\\D+/', '', avtospa_phone_href());
}
function avtospa_telegram_url() {
    $custom = get_theme_mod('avtospa_telegram','');
    return $custom ? $custom : 'https://t.me/share/url?url=' . rawurlencode(home_url('/')) . '&text=' . rawurlencode('АвтоСпа — автомойка и шиномонтаж в Москве');
}

function avtospa_service_pages() {
    return array(
        'avtomoyka' => array('title'=>'Автомойка','description'=>'Услуга автомойки АвтоСпа в Москве. Актуальные виды мойки и условия уточняйте по телефону.'),
        'moyka-dvigatelya' => array('title'=>'Мойка двигателя','description'=>'Мойка двигателя в АвтоСпа в Москве. Возможность выполнения услуги и актуальные условия уточняйте по телефону.'),
        'shinomontazh' => array('title'=>'Шиномонтаж','description'=>'Шиномонтаж в АвтоСпа в Москве. Запись и актуальные условия уточняйте по телефону.')
    );
}
function avtospa_service_page_url($slug, $fallback = '#services') {
    $page = get_page_by_path($slug, OBJECT, 'page');
    return $page ? get_permalink($page) : home_url('/' . trim($slug, '/') . '/');
}
function avtospa_create_service_pages() {
    foreach (avtospa_service_pages() as $slug => $service) {
        if (get_page_by_path($slug, OBJECT, 'page')) { continue; }
        wp_insert_post(array(
            'post_title'=>$service['title'],
            'post_name'=>$slug,
            'post_status'=>'publish',
            'post_type'=>'page',
            'post_content'=>'',
            'comment_status'=>'closed'
        ));
    }
}
add_action('after_switch_theme','avtospa_create_service_pages');

function avtospa_service_template($template) {
    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        if (array_key_exists($slug, avtospa_service_pages())) {
            $service_template = locate_template('template-service.php');
            if ($service_template) { return $service_template; }
        }
    }
    return $template;
}
add_filter('template_include','avtospa_service_template',99);

function avtospa_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/#services')) . '">Услуги</a></li>';
    echo '<li><a href="' . esc_url(avtospa_service_page_url('moyka-dvigatelya')) . '">Мойка двигателя</a></li>';
    echo '<li><a href="' . esc_url(avtospa_service_page_url('shinomontazh')) . '">Шиномонтаж</a></li>';
    echo '<li><a href="' . esc_url(home_url('/#contacts')) . '">Контакты</a></li>';
    echo '</ul>';
}
function avtospa_has_seo_plugin() {
    return defined('WPSEO_VERSION') || defined('AIOSEO_VERSION') || class_exists('RankMath');
}
function avtospa_head_seo() {
    if (avtospa_has_seo_plugin()) { return; }
    if (is_front_page() || is_home()) {
        echo '<meta name="description" content="' . esc_attr('АвтоСпа в Москве — автомойка, мойка двигателя и шиномонтаж. Полярный проезд, 18, стр. 2. Запись и контакты на сайте.') . '">' . "
";
    }
}
add_action('wp_head','avtospa_head_seo',2);
function avtospa_service_seo() {
    if (avtospa_has_seo_plugin() || !is_page()) { return; }
    $slug = get_post_field('post_name', get_queried_object_id());
    $services = avtospa_service_pages();
    if (isset($services[$slug])) {
        echo '<meta name="description" content="' . esc_attr($services[$slug]['description']) . '">' . "
";
    }
}
add_action('wp_head','avtospa_service_seo',2);

function avtospa_schema() {
    if (!is_front_page()) { return; }
    $phone = get_theme_mod('avtospa_phone','+7 916 299-98-59');
    $address = get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2');
    $data = array(
        '@context'=>'https://schema.org','@type'=>'LocalBusiness','name'=>'АвтоСпа','url'=>home_url('/'),'telephone'=>$phone,
        'address'=>array('@type'=>'PostalAddress','streetAddress'=>$address,'addressLocality'=>'Москва','addressCountry'=>'RU'),
        'hasOfferCatalog'=>array('@type'=>'OfferCatalog','name'=>'Услуги АвтоСпа','itemListElement'=>array(
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Автомойка')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Мойка двигателя')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Шиномонтаж'))
        ))
    );
    $same_as=array();
    $wa=get_theme_mod('avtospa_whatsapp',''); $tg=get_theme_mod('avtospa_telegram','');
    if($wa){$same_as[]=esc_url_raw($wa);} if($tg){$same_as[]=esc_url_raw($tg);}
    if($same_as){$data['sameAs']=$same_as;}
    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . '</script>' . "
";
}
add_action('wp_head','avtospa_schema',20);
