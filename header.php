<?php if (!defined('ABSPATH')) { exit; } ?>
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
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоСпа — главная">
      <span class="brand-main">Авто<span>Спа</span></span>
      <small>Чистота. Забота. Движение.</small>
    </a>
    <nav class="main-nav" aria-label="Основное меню">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'avtospa_fallback_menu')); ?>
      <a class="nav-external" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Автотех <span>→</span></a>
    </nav>
    <div class="header-actions">
      <a class="header-phone" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>" aria-label="Позвонить"><span class="header-phone-icon">☎</span><span><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></span></a>
      <a class="social-link whatsapp-link" href="<?php echo esc_url(avtospa_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть WhatsApp" title="WhatsApp"><span>◔</span></a>
      <a class="social-link telegram-link" href="<?php echo esc_url(avtospa_telegram_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть Telegram" title="Telegram"><span>➤</span></a>
      <a class="social-link phone-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>" aria-label="Позвонить" title="Позвонить"><span>☎</span></a>
      <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Открыть меню">☰</button>
    </div>
  </div>
  <div id="mobile-menu" hidden class="container mobile-panel"></div>
</header>
