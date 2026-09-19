<?php get_header(); ?>
<main>
<section class="hero">
 <div class="container hero-grid">
  <div class="hero-copy">
   <span class="eyebrow">АВТОСПА • МОСКВА</span>
   <h1>Автомойка и шиномонтаж <span>в Москве</span></h1>
   <p>АвтоСпа — автомойка и шиномонтаж по адресу: Москва, Полярный проезд, 18, стр. 2. Актуальные услуги и условия уточняйте по телефону.</p>
   <div class="hero-buttons"><a class="button button-primary" href="#tire-service">◉&nbsp; Записаться на шиномонтаж &nbsp;→</a><a class="button button-secondary" href="#services">Услуги</a></div>
   <div class="hero-chips"><a class="hero-chip orange" href="#tire-service">◉&nbsp; Шиномонтаж</a><a class="hero-chip blue" href="#engine-wash">🔧&nbsp; Мойка двигателя</a><a class="hero-chip violet" href="#contacts">📍&nbsp; Как добраться</a></div>
  </div>
  <div class="hero-media">
   <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/hero-tire.svg'); ?>" alt="Шиномонтаж АвтоСпа в Москве">
   <div class="hero-benefits">
    <div class="benefit-pill"><i>◇</i><span>Современное<br>оборудование</span></div>
    <div class="benefit-pill"><i>◌</i><span>Качественная<br>автохимия</span></div>
    <div class="benefit-pill"><i>♡</i><span>Опытные<br>мастера</span></div>
    <div class="benefit-pill"><i>◆</i><span>Внимание<br>к автомобилю</span></div>
   </div>
  </div>
 </div>
</section>

<section id="services" class="section">
 <div class="container">
  <div class="section-head"><div><h2>Услуги АвтоСпа</h2><p class="section-intro">Основные направления АвтоСпа собраны на одной странице.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Уточните доступные виды мойки и актуальные условия по телефону.</p><a class="service-link" href="#contacts">Подробнее →</a></article>
   <article class="card engine-wash-card"><div class="service-icon">🔧</div><h3>Мойка двигателя</h3><p>Отдельная услуга АвтоСпа. Возможность выполнения и условия уточняйте по телефону.</p><a class="button button-secondary" style="margin-top:18px" href="#engine-wash">Открыть услугу →</a></article>
   <article class="card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Запись на шиномонтаж и согласование удобного времени по телефону.</p><a class="button button-primary" style="margin-top:18px" href="#tire-service">Записаться →</a></article>
  </div>
 </div>
</section>

<section class="section visual-section" id="tire-visuals">
 <div class="container">
  <div class="section-head"><div><h2>Шиномонтаж</h2><p class="section-intro">Яркие визуальные варианты для раздела шиномонтажа.</p></div></div>
  <div class="visual-grid">
   <a class="visual-card" href="#tire-service"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-banner-1.svg'); ?>" alt="Шиномонтаж в Москве"><figcaption>Вариант 1 — современный</figcaption></a>
   <a class="visual-card" href="#tire-service"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-banner-2.svg'); ?>" alt="Сезонная замена шин"><figcaption>Вариант 2 — светлый</figcaption></a>
   <a class="visual-card" href="#tire-service"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-banner-3.svg'); ?>" alt="Профессиональный шиномонтаж"><figcaption>Вариант 3 — премиальный</figcaption></a>
  </div>
 </div>
</section>

<section id="engine-wash" class="section engine-section">
 <div class="container engine-box">
  <div class="engine-copy"><span class="eyebrow">ОТДЕЛЬНАЯ УСЛУГА</span><h2>Мойка двигателя</h2><p>Мойка двигателя — отдельное направление АвтоСпа. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p><a class="button button-primary" href="#contacts">Уточнить условия →</a></div>
  <div class="engine-art"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/engine-service.svg'); ?>" alt="Мойка двигателя АвтоСпа"></div>
 </div>
</section>

<section id="tire-service" class="section tire-section">
 <div class="container"><div class="tire-box"><div><span class="eyebrow">ШИНОМОНТАЖ</span><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоСпа, чтобы уточнить актуальные условия и согласовать удобное время.</p></div><a class="button tire-cta button-primary" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Позвонить и записаться →</a></div></div>
</section>

<section class="section autotech-banner" id="autotech">
 <div class="container"><div class="autotech-banner-inner"><div class="autotech-copy"><span class="eyebrow">ОТДЕЛЬНОЕ НАПРАВЛЕНИЕ</span><h2>Автосервис «Автотех»</h2><p>Перейдите на отдельный сайт автосервиса.</p></div><a class="button button-primary" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Автотех →</a></div></div>
</section>

<section class="section reviews-location-section" id="reviews-location">
 <div class="container">
  <div class="section-head"><div><span class="eyebrow">АВТОСПА • МОСКВА</span><h2>Отзывы и расположение</h2><p class="section-intro">Отзывы и маршрут до АвтоСпа.</p></div></div>
  <div class="reviews-location-grid">
   <div class="yandex-review-card"><div class="review-card-head"><div><strong>Отзывы об АвтоСпа</strong><span>Яндекс Карты</span></div><a class="button button-primary" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&text=%D0%90%D0%B2%D1%82%D0%BE%D0%A1%D0%BF%D0%B0%2C%20%D0%9F%D0%BE%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%2C%2018" target="_blank" rel="noopener noreferrer">Открыть Яндекс</a></div><iframe class="yandex-rating-widget" src="https://yandex.ru/sprav/widget/rating-badge/58733743477" title="Рейтинг АвтоСпа на Яндекс Картах" loading="lazy"></iframe><p class="review-note">Откройте карточку организации, чтобы посмотреть отзывы и рейтинг.</p></div>
   <div class="map-card"><div class="map-card-head"><div><strong>Где находится АвтоСпа</strong><span>Москва, Полярный проезд, 18, стр. 2</span></div><a class="map-link" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&pt=37.6288%2C55.8960%2Cpm2rdm&mode=search" target="_blank" rel="noopener noreferrer">Маршрут ↗</a></div><iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/?ll=37.6288%2C55.8960&z=16&l=map&pt=37.6288%2C55.8960%2Cpm2rdm" title="Карта расположения АвтоСпа" loading="lazy" allowfullscreen></iframe></div>
  </div>
 </div>
</section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>АвтоСпа в Москве</h2><p class="section-intro">Важная информация всегда под рукой.</p></div></div><div class="benefits"><div class="benefit"><strong>Телефон</strong><span>Позвоните для записи и уточнения условий.</span></div><div class="benefit"><strong>Адрес</strong><span>Полярный проезд, 18, стр. 2, Москва.</span></div><div class="benefit"><strong>Шиномонтаж</strong><span>Быстрый переход к записи.</span></div><div class="benefit"><strong>Мойка двигателя</strong><span>Отдельный блок услуги.</span></div></div></div></section>

<section id="contacts" class="section"><div class="container"><div class="contact-card"><h2>Контакты АвтоСпа</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div><a class="button button-secondary" style="margin-top:18px" href="#reviews-location">Посмотреть на карте</a></div></div></section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>Частые вопросы</h2></div></div><div class="faq"><details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру, указанному на сайте, и согласуйте удобное время.</p></details><details><summary>Где находится АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2.</p></details><details><summary>Как посмотреть отзывы?</summary><p>Откройте карточку АвтоСпа в Яндекс Картах через блок отзывов.</p></details><details><summary>Как узнать актуальный перечень услуг?</summary><p>Позвоните нам — специалисты уточнят доступные услуги и условия.</p></details></div></div></section>
</main>
<?php get_footer(); ?>