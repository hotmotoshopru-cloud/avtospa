<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<header class="site-header"><div class="container header-inner">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоСпа — главная"><span class="brand-logo">Авто<b>Спа</b><small class="brand-tag">Чистота. Забота. Движение.</small></span></a>
<nav class="main-nav" aria-label="Основное меню"><?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'avtospa_fallback_menu')); ?></nav>
<div class="header-actions">
<a class="header-phone" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><span class="phone-circle">☎</span><span><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></span></a>
<?php $wa=get_theme_mod('avtospa_whatsapp','https://wa.me/79162999859'); $tg=get_theme_mod('avtospa_telegram','https://t.me/share/url'); ?>
<a class="social-link whatsapp-link" href="<?php echo esc_url($wa); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">WA</a>
<a class="social-link telegram-link" href="<?php echo esc_url($tg); ?>" target="_blank" rel="noopener" aria-label="Telegram">➤</a>
<a class="social-link phone-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>" aria-label="Позвонить">☎</a>
<button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Открыть меню">☰</button>
</div></div><div id="mobile-menu" hidden class="container mobile-panel"></div></header>