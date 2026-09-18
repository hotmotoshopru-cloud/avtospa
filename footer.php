<?php if (!defined('ABSPATH')) exit; ?>
<footer class="site-footer">
 <div class="container footer-inner">
  <div>
   <div class="footer-brand">АвтоСпа</div>
   <div class="footer-note">Автомойка и шиномонтаж в Москве</div>
   <div class="footer-address"><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></div>
   <a class="footer-phone" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">☎ <?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a>
   <div class="footer-actions"><a class="footer-booking" href="<?php echo esc_url(home_url('/#tire-booking')); ?>">🛞 Записаться на шиномонтаж</a></div>
   <div class="footer-mini-links" aria-label="Навигация по сайту">
    <a href="<?php echo esc_url(home_url('/#services')); ?>">Услуги</a>
    <a href="<?php echo esc_url(home_url('/#engine-wash')); ?>">Мойка двигателя</a>
    <a href="<?php echo esc_url(home_url('/#tire-booking')); ?>">Шиномонтаж</a>
    <a href="<?php echo esc_url(home_url('/#contacts')); ?>">Контакты</a>
   </div>
  </div>
  <div class="footer-note">© <?php echo esc_html(date('Y')); ?> АвтоСпа</div>
 </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
