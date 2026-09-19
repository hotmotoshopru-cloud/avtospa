<?php
/** АвтоСпа theme functions. */
if (!defined('ABSPATH')) { exit; }
function avtospa_setup(){add_theme_support('title-tag');add_theme_support('post-thumbnails');add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script'));register_nav_menus(array('primary'=>'Основное меню','footer'=>'Меню в подвале'));}
add_action('after_setup_theme','avtospa_setup');
function avtospa_assets(){ $v=wp_get_theme()->get('Version'); wp_enqueue_style('avtospa-style',get_stylesheet_uri(),array(),$v); wp_enqueue_script('avtospa-navigation',get_template_directory_uri().'/assets/js/navigation.js',array(),$v,true);}
add_action('wp_enqueue_scripts','avtospa_assets');
function avtospa_customize_register($wp_customize){
$wp_customize->add_section('avtospa_contacts',array('title'=>'АвтоСпа — контакты','priority'=>30));
foreach(array('avtospa_phone'=>array('Телефон','+7 916 299-98-59','text'),'avtospa_address'=>array('Адрес','Россия, Москва, Полярный проезд, 18, стр. 2','text'),'avtospa_whatsapp'=>array('WhatsApp URL (необязательно)','','url'),'avtospa_telegram'=>array('Telegram URL (необязательно)','','url')) as $id=>$c){$wp_customize->add_setting($id,array('default'=>$c[1],'sanitize_callback'=>$c[2]==='url'?'esc_url_raw':'sanitize_text_field'));$wp_customize->add_control($id,array('label'=>$c[0],'section'=>'avtospa_contacts','type'=>$c[2]));}}
add_action('customize_register','avtospa_customize_register');
function avtospa_phone_href(){return preg_replace('/[^0-9+]/','',(string)get_theme_mod('avtospa_phone','+7 916 299-98-59'));}
function avtospa_whatsapp_url(){$custom=get_theme_mod('avtospa_whatsapp','');return $custom?$custom:'https://wa.me/'.preg_replace('/\D+/','',avtospa_phone_href());}
function avtospa_telegram_url(){$custom=get_theme_mod('avtospa_telegram','');return $custom?$custom:'https://t.me/share/url?url='.rawurlencode(home_url('/')).'&text='.rawurlencode('АвтоСпа — автомойка и шиномонтаж в Москве');}
function avtospa_service_pages(){return array(
'avtomoyka'=>array('title'=>'Автомойка','description'=>'Услуга автомойки АвтоСпа в Москве. Актуальные виды мойки и условия уточняйте по телефону.'),
'moyka-dvigatelya'=>array('title'=>'Мойка двигателя','description'=>'Мойка двигателя в АвтоСпа в Москве. Возможность выполнения услуги и актуальные условия уточняйте по телефону.'),
'shinomontazh'=>array('title'=>'Шиномонтаж','description'=>'Шиномонтаж в АвтоСпа в Москве. Запись и актуальные условия уточняйте по телефону.'));}

/* Находим существующую страницу услуги и по slug, и по точному названию. */
function avtospa_find_service_page($service_slug){
$services=avtospa_service_pages(); if(!isset($services[$service_slug]))return null;
$page=get_page_by_path($service_slug,OBJECT,'page'); if($page)return $page;
$pages=get_pages(array('post_type'=>'page','post_status'=>'publish','number'=>100));
foreach($pages as $candidate){if(trim(wp_strip_all_tags($candidate->post_title))===$services[$service_slug]['title'])return $candidate;}
return null;
}
function avtospa_service_page_url($slug,$fallback='#services'){
$page=avtospa_find_service_page($slug); return $page?get_permalink($page->ID):home_url('/#services');
}
function avtospa_create_service_pages(){
$created=false;
foreach(avtospa_service_pages() as $slug=>$service){
if(avtospa_find_service_page($slug))continue;
$id=wp_insert_post(array('post_title'=>$service['title'],'post_name'=>$slug,'post_status'=>'publish','post_type'=>'page','post_content'=>'','comment_status'=>'closed'));
if($id&&!is_wp_error($id))$created=true;
}
if($created)flush_rewrite_rules(false);
}
add_action('after_switch_theme','avtospa_create_service_pages');
/* Если тема уже активна, недостающие страницы создаются безопасно один раз. */
add_action('after_setup_theme','avtospa_create_service_pages',20);

function avtospa_current_service_slug(){
if(!is_page())return '';
$slug=get_post_field('post_name',get_queried_object_id());$services=avtospa_service_pages();
if(isset($services[$slug]))return $slug;
$title=trim(wp_strip_all_tags(get_the_title(get_queried_object_id())));
foreach($services as $service_slug=>$service){if($title===$service['title'])return $service_slug;}
return '';
}
function avtospa_service_template($template){
if(avtospa_current_service_slug()){$t=locate_template('template-service.php');if($t)return $t;}
return $template;
}
add_filter('template_include','avtospa_service_template',99);

function avtospa_fallback_menu(){
echo '<ul>';
echo '<li><a href="'.esc_url(home_url('/#services')).'">Услуги</a></li>';
echo '<li><a href="'.esc_url(avtospa_service_page_url('avtomoyka')).'">Автомойка</a></li>';
echo '<li><a href="'.esc_url(avtospa_service_page_url('moyka-dvigatelya')).'">Мойка двигателя</a></li>';
echo '<li><a href="'.esc_url(avtospa_service_page_url('shinomontazh')).'">Шиномонтаж</a></li>';
echo '<li><a href="'.esc_url(home_url('/#contacts')).'">Контакты</a></li>';
echo '</ul>';
}
function avtospa_has_seo_plugin(){return defined('WPSEO_VERSION')||defined('AIOSEO_VERSION')||class_exists('RankMath');}
function avtospa_head_seo(){if(avtospa_has_seo_plugin())return;if(is_front_page()||is_home())echo '<meta name="description" content="'.esc_attr('АвтоСпа в Москве — автомойка, мойка двигателя и шиномонтаж. Полярный проезд, 18, стр. 2. Запись и контакты на сайте.').'">'."\n";}
add_action('wp_head','avtospa_head_seo',2);
function avtospa_service_seo(){if(avtospa_has_seo_plugin())return;$slug=avtospa_current_service_slug();$services=avtospa_service_pages();if($slug&&isset($services[$slug]))echo '<meta name="description" content="'.esc_attr($services[$slug]['description']).'">'."\n";}
add_action('wp_head','avtospa_service_seo',2);
function avtospa_schema(){
if(!is_front_page())return;$phone=get_theme_mod('avtospa_phone','+7 916 299-98-59');$address=get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2');
$data=array('@context'=>'https://schema.org','@type'=>'LocalBusiness','name'=>'АвтоСпа','url'=>home_url('/'),'telephone'=>$phone,'address'=>array('@type'=>'PostalAddress','streetAddress'=>$address,'addressLocality'=>'Москва','addressCountry'=>'RU'),'hasOfferCatalog'=>array('@type'=>'OfferCatalog','name'=>'Услуги АвтоСпа','itemListElement'=>array(array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Автомойка')),array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Мойка двигателя')),array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Шиномонтаж')))));
$same_as=array();$wa=get_theme_mod('avtospa_whatsapp','');$tg=get_theme_mod('avtospa_telegram','');if($wa)$same_as[]=esc_url_raw($wa);if($tg)$same_as[]=esc_url_raw($tg);if($same_as)$data['sameAs']=$same_as;
echo '<script type="application/ld+json">'.wp_json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'</script>'."\n";
}
add_action('wp_head','avtospa_schema',20);
