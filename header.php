<?php if (!defined('ABSPATH')) { exit; } ?>
<?php if (file_exists(get_template_directory() . '/inc/seo.php')) { require_once get_template_directory() . '/inc/seo.php'; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-whatsapp="<?php echo esc_attr(get_theme_mod('avtospa_whatsapp','https://wa.me/79162999859')); ?>" data-telegram="<?php echo esc_attr(get_theme_mod('avtospa_telegram','https://t.me/+79162999859')); ?>" data-home-url="<?php echo esc_url(home_url('/')); ?>" data-phone="<?php echo esc_attr(avtospa_phone_href()); ?>" data-phone-display="<?php echo esc_attr(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?>">
<a class="skip-link" href="#content">Перейти к содержимому</a>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоСпа — главная">
      <img class="brand-logo-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo4.svg'); ?>" alt="АвтоСпа — автомойка, шиномонтаж, автосервис">
    </a>
    <nav class="main-nav" aria-label="Основное меню">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Главная</a></li>
        <li class="has-dropdown">
          <a href="<?php echo esc_url(avtospa_service_page_url('Автомойка','/sample-page/')); ?>">Автомойка <span class="menu-arrow">⌄</span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo esc_url(avtospa_service_page_url('Автомойка','/sample-page/')); ?>">Автомойка</a></li>
            <li><a href="<?php echo esc_url(home_url('/автомойка-цены/')); ?>">Цены на автомойку</a></li>
            <li><a href="<?php echo esc_url(avtospa_service_page_url('Мойка двигателя','/мойка-двигателя-автомобиля/')); ?>">Мойка двигателя</a></li>
            <li><a href="<?php echo esc_url(home_url('/мойка-днища-автомобиля/')); ?>">Мойка днища</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="<?php echo esc_url(avtospa_service_page_url('Шиномонтаж','/шиномонтаж/')); ?>">Шиномонтаж <span class="menu-arrow">⌄</span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo esc_url(avtospa_service_page_url('Шиномонтаж','/шиномонтаж/')); ?>">Шиномонтаж</a></li>
            <li><a href="<?php echo esc_url(home_url('/шиномонтаж-цены/')); ?>">Цены на шиномонтаж</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="#prices">Цены <span class="menu-arrow">⌄</span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo esc_url(home_url('/автомойка-цены/')); ?>">Цены на автомойку</a></li>
            <li><a href="<?php echo esc_url(home_url('/шиномонтаж-цены/')); ?>">Цены на шиномонтаж</a></li>
          </ul>
        </li>
        <li><a href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Автосервис</a></li>
        <li><a href="<?php echo esc_url(home_url('/контакты/')); ?>">Контакты</a></li>
      </ul>
    </nav>
    <div class="header-actions">
      <?php $display_phone=get_theme_mod('avtospa_phone','+7 916 299-98-59'); $wa=get_theme_mod('avtospa_whatsapp','https://wa.me/79162999859'); $tg=get_theme_mod('avtospa_telegram','https://t.me/+79162999859'); ?>
      <a class="social-link whatsapp-link" href="<?php echo esc_url($wa); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть WhatsApp" title="WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A10 10 0 0 0 4.2 15.7L3 21l5.4-1.2A10 10 0 1 0 20.5 3.5Zm-8.4 16a8.3 8.3 0 0 1-4.2-1.1l-.3-.2-3.2.7.7-3.1-.2-.3A8.3 8.3 0 1 1 12.1 19.5Zm4.6-6.2c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.8 6.8 0 0 1-2-1.2 7.6 7.6 0 0 1-1.4-1.8c-.1-.2 0-.4.1-.5l.4-.5.3-.5c.1-.2 0-.4 0-.5l-.7-1.7c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.2-.9.9-.9 2.2s.9 2.5 1 2.7c.1.2 1.8 2.9 4.5 4 .6.3 1.1.4 1.5.5.6.2 1.2-.1 1.7-.1.5-.1 1.4-.6 1.6-1.2.2-.6.2-1.1.1-1.2 0-.1-.2-.2-.4-.3Z"/></svg></a>
      <a class="social-link telegram-link" href="<?php echo esc_url($tg); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть Telegram" title="Telegram"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21.4 4.2 18.2 19c-.2 1-.8 1.2-1.6.8l-4.5-3.3-2.2 2.1c-.2.2-.4.4-.8.4l.3-4.5 8.1-7.3c.4-.4-.1-.6-.6-.2L7 13.3 2.6 12c-1-.3-1-1 .2-1.4L20 3.9c.8-.3 1.5.2 1.4.3Z"/></svg></a>
      <a class="call-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><span class="call-icon" aria-hidden="true">☎</span><span class="call-copy"><strong><?php echo esc_html($display_phone); ?></strong><small>Позвонить</small></span></a>
      <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-haspopup="true" aria-label="Открыть меню"><span class="menu-bars" aria-hidden="true"><i></i><i></i><i></i></span></button>
    </div>
  </div>
  <div id="mobile-menu" hidden class="container mobile-panel"></div>
</header>
