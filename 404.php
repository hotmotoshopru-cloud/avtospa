<?php get_header(); ?>
<main class="section"><meta name="robots" content="noindex, follow">
  <div class="container">
    <article class="content-page" style="max-width:900px;margin:0 auto;text-align:center;">
      <span class="eyebrow">АвтоСпа • Москва</span>
      <h1>Страница не найдена</h1>
      <p>Похоже, такой страницы нет или адрес был изменён. Перейдите к нужному разделу сайта.</p>
      <div class="page-actions" style="justify-content:center;">
        <a class="button button-primary" href="<?php echo esc_url(home_url('/')); ?>">На главную</a>
        <a class="button button-secondary" href="<?php echo esc_url(home_url('/#services')); ?>">Услуги АвтоСпа</a>
        <a class="button button-secondary" href="<?php echo esc_url(home_url('/#contacts')); ?>">Контакты</a>
      </div>
      <div class="service-page-bottom" style="text-align:left;">
        <a class="service-bottom-card service-bottom-tire" href="<?php echo esc_url(avtospa_service_page_url('Шиномонтаж','/#tire-booking')); ?>">
          <span>🛞</span><div><strong>Шиномонтаж</strong><small>Перейти к странице услуги</small></div>
        </a>
        <a class="service-bottom-card service-bottom-engine" href="<?php echo esc_url(avtospa_service_page_url('Мойка двигателя','/#engine-wash')); ?>">
          <span>🔧</span><div><strong>Мойка двигателя</strong><small>Перейти к странице услуги</small></div>
        </a>
        <a class="service-bottom-card service-bottom-contact" href="<?php echo esc_url(home_url('/#contacts')); ?>">
          <span>📍</span><div><strong>АвтоСпа</strong><small>Москва, Полярный проезд, 18, стр. 2</small></div>
        </a>
      </div>
    </article>
  </div>
</main>
<?php get_footer(); ?>