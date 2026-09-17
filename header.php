<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоSPA — главная">Авто<span>SPA</span></a>
    <nav class="main-nav" aria-label="Основное меню">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'avtospa_fallback_menu')); ?>
    </nav>
    <div class="header-actions">
      <?php $wa=get_theme_mod('avtospa_whatsapp',''); $tg=get_theme_mod('avtospa_telegram',''); ?>
      <?php if($wa): ?><a class="icon-link" href="<?php echo esc_url($wa); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">WA</a><?php endif; ?>
      <?php if($tg): ?><a class="icon-link" href="<?php echo esc_url($tg); ?>" target="_blank" rel="noopener" aria-label="Telegram">TG</a><?php endif; ?>
      <a class="call-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Позвонить</a>
      <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu">☰</button>
    </div>
  </div>
  <div id="mobile-menu" hidden class="container"></div>
</header>
