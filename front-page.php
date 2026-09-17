<?php get_header(); ?>
<main>
<section class="hero">
 <div class="container hero-grid">
  <div>
   <span class="eyebrow">АвтоSPA • Москва</span>
   <h1>Автомойка и шиномонтаж в Москве</h1>
   <p>Удобное место для ухода за автомобилем. Узнайте об услугах АвтоSPA и запишитесь на шиномонтаж.</p>
   <div class="hero-buttons"><a class="button button-primary" href="#tire-service">Записаться на шиномонтаж</a><a class="button button-secondary" href="#services">Все услуги</a></div>
  </div>
  <div class="hero-card"><div class="hero-card-content"><strong>АвтоSPA</strong><small>Полярный проезд, 18, стр. 2 • Москва</small></div></div>
 </div>
</section>

<section id="services" class="section">
 <div class="container">
  <div class="section-head"><div><h2>Услуги</h2><p class="section-intro">Основные направления АвтоSPA. Актуальный перечень и условия можно уточнить по телефону.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Уход за автомобилем с акцентом на аккуратность и удобство.</p></article>
   <article class="card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Сезонные работы с колесами. Запишитесь заранее.</p><a class="button button-primary" style="margin-top:18px" href="#tire-service">Записаться</a></article>
   <article class="card"><div class="service-icon">✨</div><h3>Уход за автомобилем</h3><p>Подберите подходящую услугу и уточните детали у специалистов АвтоSPA.</p></article>
  </div>
 </div>
</section>

<section id="tire-service" class="section tire-section">
 <div class="container"><div class="tire-box"><div><span class="eyebrow">Главная услуга</span><h2>Шиномонтаж</h2><p>Нужен шиномонтаж в Москве? Оставьте заявку или позвоните, чтобы согласовать удобное время.</p></div><a class="button tire-cta" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Записаться на шиномонтаж</a></div></div>
</section>

<section class="section alt">
 <div class="container"><div class="section-head"><div><h2>Почему выбирают АвтоSPA</h2><p class="section-intro">Понятная навигация, удобная связь и запись без лишних действий.</p></div></div>
  <div class="benefits"><div class="benefit"><strong>Удобная запись</strong><span>Свяжитесь с нами по телефону.</span></div><div class="benefit"><strong>Москва</strong><span>Полярный проезд, 18, стр. 2.</span></div><div class="benefit"><strong>Шиномонтаж</strong><span>Выделенное направление на сайте.</span></div><div class="benefit"><strong>АвтоSPA</strong><span>Единый бренд для услуг по уходу за автомобилем.</span></div></div>
 </div>
</section>

<section id="contacts" class="section">
 <div class="container contact-grid">
  <div class="contact-card"><h2>Контакты</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div></div>
  <div class="map-placeholder" aria-label="Карта местоположения">АвтоSPA<br>Москва, Полярный проезд, 18, стр. 2</div>
 </div>
</section>

<section class="section alt">
 <div class="container"><div class="section-head"><div><h2>Частые вопросы</h2></div></div><div class="faq">
  <details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру, указанному на сайте, и согласуйте удобное время.</p></details>
  <details><summary>Где находится АвтоSPA?</summary><p>Москва, Полярный проезд, 18, стр. 2.</p></details>
  <details><summary>Как узнать актуальный перечень услуг?</summary><p>Позвоните нам — специалисты уточнят доступные услуги и условия.</p></details>
 </div></div>
</section>
</main>
<?php get_footer(); ?>
