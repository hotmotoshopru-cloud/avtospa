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
      <a class="social-link whatsapp-link" href="<?php echo esc_url(avtospa_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть WhatsApp" title="WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5 3.7 10.1c-.9.35-.88 1.2-.16 1.48l4.2 1.65 1.62 5.05c.22.68.12.95.84.95.56 0 .8-.26 1.1-.56l2.04-1.98 4.24 3.13c.78.43 1.34.2 1.54-.72L22 4.8c.29-1.12-.43-1.62-1.5-1.3Z" fill="currentColor"/></svg></a>
      <a class="social-link telegram-link" href="<?php echo esc_url(avtospa_telegram_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть Telegram" title="Telegram"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21.3 3.1 2.9 10.2c-1.05.42-1.04 1.42-.18 1.76l4.67 1.84 1.82 5.66c.25.77.14 1.08.95 1.08.63 0 .9-.3 1.23-.63l2.29-2.22 4.74 3.5c.88.49 1.5.22 1.73-.8l2.9-13.98c.33-1.3-.49-1.85-1.74-1.31ZM8.1 13.45l8.88-5.6c.44-.26.86-.12.52.16l-7.3 6.59-.28 2.96-1.82-4.11Z" fill="currentColor"/></svg></a>
      <a class="social-link phone-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>" aria-label="Позвонить" title="Позвонить"><span>☎</span></a>
      <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Открыть меню">☰</button>
    </div>
  </div>
  <div id="mobile-menu" hidden class="container mobile-panel"></div>
</header>
