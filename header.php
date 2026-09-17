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
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоСпа — главная">АвтоСпа</a>
    <nav class="main-nav" aria-label="Основное меню">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'avtospa_fallback_menu')); ?>
      <a class="nav-external" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Автосервис Автотех</a>
    </nav>
    <div class="header-actions">
      <?php $wa=get_theme_mod('avtospa_whatsapp',''); $tg=get_theme_mod('avtospa_telegram',''); ?>
      <?php if($wa): ?><a class="social-link whatsapp-link" href="<?php echo esc_url($wa); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть WhatsApp">WhatsApp</a><?php endif; ?>
      <?php if($tg): ?><a class="social-link telegram-link" href="<?php echo esc_url($tg); ?>" target="_blank" rel="noopener noreferrer" aria-label="Открыть Telegram">Telegram</a><?php endif; ?>
      <a class="call-link" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><span class="call-icon" aria-hidden="true">☎</span><span>Позвонить</span></a>
      <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" aria-label="Открыть меню"><span aria-hidden="true">☰</span></button>
    </div>
  </div>
  <div id="mobile-menu" hidden class="container mobile-panel"></div>
</header>
