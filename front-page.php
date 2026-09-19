<?php get_header(); ?>
<main>
<section class="hero">
 <div class="container hero-grid">
  <div class="hero-copy">
   <span class="eyebrow">АвтоСпа • Москва</span>
   <h1>Автомойка и шиномонтаж <span>в Москве</span></h1>
   <p>АвтоСпа — автомойка и шиномонтаж по адресу: Москва, Полярный проезд, 18, стр. 2. Актуальные услуги и условия уточняйте по телефону.</p>
   <div class="hero-buttons">
    <a class="button button-primary" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>">◉&nbsp; Записаться на шиномонтаж &nbsp;→</a>
    <a class="button button-secondary" href="#services">Услуги</a>
   </div>
   <div class="hero-chips">
    <a class="chip orange" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>">◉&nbsp; Шиномонтаж</a>
    <a class="chip blue" href="<?php echo esc_url(avtospa_service_page_url('moyka-dvigatelya')); ?>">🔧&nbsp; Мойка двигателя</a>
    <a class="chip purple" href="#reviews-location">📍&nbsp; Как добраться</a>
   </div>
  </div>
  <div class="hero-media">
   <img class="hero-visual" src="<?php echo esc_url(get_template_directory_uri().'/assets/img/hero-auto.svg'); ?>" alt="Автомобильные шины и шиномонтаж">
   <div class="hero-benefits">
    <div class="benefit"><i>◇</i><span>Современное<br>оборудование</span></div>
    <div class="benefit"><i>◌</i><span>Качественная<br>автохимия</span></div>
    <div class="benefit"><i>♡</i><span>Опытные<br>мастера</span></div>
    <div class="benefit"><i>◆</i><span>Внимание<br>к автомобилю</span></div>
   </div>
  </div>
 </div>
</section>

<section id="services" class="section">
 <div class="container">
  <div class="section-head"><div><h2>Услуги АвтоСпа</h2><p class="section-intro">Основные направления АвтоСпа собраны на одной странице.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Автомойка АвтоСпа в Москве. Актуальные виды мойки и условия уточняйте по телефону.</p><a class="button button-secondary" href="<?php echo esc_url(avtospa_service_page_url('avtomoyka')); ?>">Подробнее →</a></article>
   <article class="card"><div class="service-icon">🔧</div><h3>Мойка двигателя</h3><p>Отдельная услуга АвтоСпа. Возможность выполнения и условия уточняйте по телефону.</p><a class="button button-secondary" href="<?php echo esc_url(avtospa_service_page_url('moyka-dvigatelya')); ?>">Открыть услугу →</a></article>
   <article class="card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Запись на шиномонтаж и согласование удобного времени по телефону.</p><a class="button button-primary" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>">Записаться →</a></article>
  </div>
 </div>
</section>

<section class="section tire-section" id="tire-service">
 <div class="container">
  <div class="section-head"><div><h2>Варианты баннера для раздела «Шиномонтаж»</h2><p class="section-intro">Визуальный блок по утверждённому референсу.</p></div></div>
  <div class="banner-grid">
   <a class="banner-card" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-1.svg'); ?>" alt="Шиномонтаж в Москве"><div class="banner-caption">Вариант 1 — современный</div></a>
   <a class="banner-card" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-2.svg'); ?>" alt="Сезонная замена шин"><div class="banner-caption">Вариант 2 — светлый</div></a>
   <a class="banner-card" href="<?php echo esc_url(avtospa_service_page_url('shinomontazh')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/tire-3.svg'); ?>" alt="Профессиональный шиномонтаж"><div class="banner-caption">Вариант 3 — премиальный</div></a>
  </div>
 </div>
</section>

<section id="engine-wash" class="section engine-section">
 <div class="container engine-box">
  <div class="engine-copy"><span class="eyebrow">Отдельная услуга</span><h2>Мойка двигателя</h2><p>Мойка двигателя — отдельное направление АвтоСпа. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p><a class="button button-primary" href="<?php echo esc_url(avtospa_service_page_url('moyka-dvigatelya')); ?>">Открыть страницу услуги →</a></div>
  <div class="engine-note"><div><div class="service-icon">🔧</div><strong>Мойка двигателя</strong><span>АвтоСпа • Москва</span></div></div>
 </div>
</section>

<section class="section">
 <div class="container tire-box"><div><span class="eyebrow">Шиномонтаж</span><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоСпа, чтобы уточнить актуальные условия и согласовать удобное время.</p></div><a class="button button-primary tire-cta" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Записаться на шиномонтаж →</a></div>
</section>

<section class="section autotech-banner" id="autotech">
 <div class="container"><div class="autotech-banner-inner"><div class="autotech-copy"><span class="eyebrow">Отдельное направление</span><h2>Автосервис «Автотех»</h2><p>Перейдите на отдельный сайт автосервиса, чтобы посмотреть услуги и записаться на ремонт.</p></div><a class="button button-primary" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Автотех →</a></div></div>
</section>

<section class="section reviews-location-section" id="reviews-location">
 <div class="container">
  <div class="section-head"><div><span class="eyebrow">АвтоСпа • Москва</span><h2>Отзывы и расположение</h2><p class="section-intro">Отзывы и маршрут собраны в одном блоке.</p></div></div>
  <div class="reviews-location-grid">
   <div class="yandex-review-card"><div class="review-card-head"><div><strong>Отзывы об АвтоСпа</strong><span>Яндекс Карты</span></div><a class="button button-primary" href="https://yandex.ru/maps/org/avto_spa/58733743477/?ll=37.617700%2C55.755874&utm_campaign=v1&utm_medium=rating&utm_source=badge&z=9" target="_blank" rel="noopener noreferrer">Открыть Яндекс</a></div><iframe class="yandex-rating-widget" src="https://yandex.ru/sprav/widget/rating-badge/58733743477" title="Рейтинг АвтоСпа на Яндекс Картах" loading="lazy"></iframe><p class="review-note">Откройте карточку АвтоСпа в Яндекс Картах для отзывов и информации о месте.</p></div>
   <div class="map-card"><div class="map-card-head"><div><strong>Где находится АвтоСпа</strong><span>Москва, Полярный проезд, 18, стр. 2</span></div><a class="map-link" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&pt=37.6288%2C55.8960%2Cpm2rdm&mode=search" target="_blank" rel="noopener noreferrer">Маршрут ↗</a></div><iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/?ll=37.6288%2C55.8960&z=16&l=map&pt=37.6288%2C55.8960%2Cpm2rdm" title="Карта расположения АвтоСпа" loading="lazy" allowfullscreen></iframe></div>
  </div>
 </div>
</section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>АвтоСпа в Москве</h2><p class="section-intro">Контактная информация и основные действия собраны в одном месте.</p></div></div><div class="benefits"><div class="benefit-card"><strong>Телефон</strong><span>Позвоните для записи и уточнения условий.</span></div><div class="benefit-card"><strong>Адрес</strong><span>Полярный проезд, 18, стр. 2, Москва.</span></div><div class="benefit-card"><strong>Шиномонтаж</strong><span>Быстрая запись по телефону.</span></div><div class="benefit-card"><strong>Мойка двигателя</strong><span>Отдельная страница услуги.</span></div></div></div></section>

<section id="contacts" class="section"><div class="container"><div class="contact-card"><h2>Контакты АвтоСпа</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div><a class="button button-secondary contact-map-button" href="#reviews-location">Посмотреть на карте</a></div></div></section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>Частые вопросы</h2></div></div><div class="faq"><details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру, указанному на сайте, и согласуйте удобное время.</p></details><details><summary>Где находится АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2.</p></details><details><summary>Как посмотреть отзывы?</summary><p>Откройте карточку АвтоСпа в Яндекс Картах через блок отзывов.</p></details></div></div></section>
</main>
<?php get_footer(); ?>