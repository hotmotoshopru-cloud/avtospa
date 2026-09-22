<?php if (!defined('ABSPATH')) exit; ?>
<footer class="site-footer">
  <div class="container footer-inner footer-inner-full">
    <div class="footer-main">
      <a class="footer-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="АвтоСпа"><img class="footer-logo-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo4.svg'); ?>" alt="АвтоСпа"></a>
      <div class="footer-note">Автомойка • Мойка двигателя • Шиномонтаж • Москва</div>
    </div>
    <nav class="footer-nav" aria-label="Меню в подвале">
      <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
      <a href="<?php echo esc_url(avtospa_service_page_url('Автомойка','/sample-page/')); ?>">Автомойка</a>
      <a href="<?php echo esc_url(home_url('/шиномонтаж/')); ?>">Шиномонтаж</a>
      <a href="<?php echo esc_url(home_url('/#reviews-location')); ?>">Отзывы</a>
      <a href="<?php echo esc_url(home_url('/контакты/')); ?>">Контакты</a>
      <a class="footer-service-link" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">🔧 Автосервис ↗</a>
    </nav>
    <div class="footer-contact">
      <a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a>
      <span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo esc_html(date('Y')); ?> АвтоСпа. Все права защищены.</span>
      <span>Автомойка и шиномонтаж в Москве</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>