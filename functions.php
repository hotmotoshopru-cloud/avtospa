<?php
/** АвтоSPA theme functions. */
if (!defined('ABSPATH')) exit;

function avtospa_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array('primary'=>'Основное меню','footer'=>'Меню в подвале'));
}
add_action('after_setup_theme','avtospa_setup');

function avtospa_assets() {
    wp_enqueue_style('avtospa-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('avtospa-navigation', get_template_directory_uri().'/assets/js/navigation.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','avtospa_assets');

function avtospa_customize_register($wp_customize) {
    $wp_customize->add_section('avtospa_contacts', array('title'=>'АвтоSPA — контакты','priority'=>30));
    $fields = array(
        'phone'=>array('Телефон','+7 916 299-98-59'),
        'address'=>array('Адрес','Россия, Москва, Полярный проезд, 18, стр. 2'),
        'whatsapp'=>array('WhatsApp URL',''),
        'telegram'=>array('Telegram URL',''),
    );
    foreach($fields as $id=>$data){
        $wp_customize->add_setting('avtospa_'.$id,array('default'=>$data[1],'sanitize_callback'=>'sanitize_text_field'));
        $wp_customize->add_control('avtospa_'.$id,array('label'=>$data[0],'section'=>'avtospa_contacts','type'=>'text'));
    }
}
add_action('customize_register','avtospa_customize_register');

function avtospa_phone_href(){ return preg_replace('/[^0-9+]/','',get_theme_mod('avtospa_phone','+7 916 299-98-59')); }

function avtospa_fallback_menu(){
    echo '<ul><li><a href="#services">Услуги</a></li><li><a href="#tire-service">Шиномонтаж</a></li><li><a href="#contacts">Контакты</a></li></ul>';
}

function avtospa_fallback_description(){
    return 'АвтоSPA в Москве — автомойка и шиномонтаж. Полярный проезд, 18, стр. 2. Запись и контакты на сайте.';
}
function avtospa_head_seo(){
    if (defined('WPSEO_VERSION') || class_exists('RankMath')) return;
    if (is_front_page() || is_home()) echo '<meta name="description" content="'.esc_attr(avtospa_fallback_description()).'">\n';
    echo '<meta name="robots" content="index,follow,max-image-preview:large">\n';
}
add_action('wp_head','avtospa_head_seo',2);

function avtospa_schema(){
    if (!is_front_page()) return;
    $phone = get_theme_mod('avtospa_phone','+7 916 299-98-59');
    $address = get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2');
    $data = array('@context'=>'https://schema.org','@type'=>'AutoWash','name'=>'АвтоSPA','url'=>home_url('/'),'telephone'=>$phone,'address'=>array('@type'=>'PostalAddress','streetAddress'=>'Полярный проезд, 18, стр. 2','addressLocality'=>'Москва','addressCountry'=>'RU'));
    echo '<script type="application/ld+json">'.wp_json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'</script>';
}
add_action('wp_head','avtospa_schema',20);
