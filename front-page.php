<?php get_header(); ?>
<main>
<section class="hero">
 <div class="container hero-grid">
  <div>
   <span class="eyebrow">АвтоSPA • Москва</span>
   <h1>Автомойка и шиномонтаж в Москве</h1>
   <p>АвтоSPA — автомойка и шиномонтаж по адресу: Москва, Полярный проезд, 18, стр. 2. Актуальные услуги и условия уточняйте по телефону.</p>
   <div class="hero-buttons"><a class="button button-primary" href="#tire-service">Записаться на шиномонтаж</a><a class="button button-secondary" href="#services">Услуги</a></div>
  </div>
  <div class="hero-card"><div class="hero-card-content"><strong>АвтоSPA</strong><small>Полярный проезд, 18, стр. 2 • Москва</small></div></div>
 </div>
</section>

<section id="services" class="section">
 <div class="container">
  <div class="section-head"><div><h2>Услуги</h2><p class="section-intro">На главной странице выделены основные направления АвтоSPA: автомойка, мойка двигателя и шиномонтаж. Актуальный перечень и условия можно уточнить по телефону.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Уточните доступные виды мойки и актуальные условия по телефону.</p></article>
   <article class="card engine-wash-card"><div class="service-icon">🔧</div><h3>Мойка двигателя</h3><p>Одна из важных услуг автомойки АвтоSPA. Актуальные условия и возможность выполнения услуги уточняйте по телефону.</p><a class="button button-secondary" style="margin-top:18px" href="#engine-wash">Подробнее об услуге</a></article>
   <article class="card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Запишитесь на шиномонтаж по телефону и согласуйте удобное время.</p><a class="button button-primary" style="margin-top:18px" href="#tire-service">Записаться</a></article>
  </div>
 </div>
</section>

<section id="engine-wash" class="section engine-section">
 <div class="container">
  <div class="engine-box">
   <div class="engine-copy">
    <span class="eyebrow">Отдельная услуга</span>
    <h2>Мойка двигателя</h2>
    <p>Мойка двигателя — отдельное направление АвтоSPA, которое важно учитывать при выборе услуг. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p>
    <a class="button button-primary" href="#contacts">Уточнить условия мойки двигателя</a>
   </div>
   <div class="engine-note"><span class="service-icon">🔧</span><strong>Мойка двигателя</strong><span>АвтоSPA • Москва</span></div>
  </div>
 </div>
</section>

<section id="tire-service" class="section tire-section">
 <div class="container"><div class="tire-box"><div><span class="eyebrow">Шиномонтаж</span><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоSPA, чтобы уточнить актуальные условия и согласовать удобное время.</p></div><a class="button tire-cta" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Записаться на шиномонтаж</a></div></div>
</section>

<section class="section autotech-banner" id="autotech">
 <div class="container">
  <div class="autotech-banner-inner">
   <div class="autotech-copy">
    <span class="eyebrow">Отдельное направление</span>
    <h2>Автосервис Автотех</h2>
    <p>Ремонт, диагностика и техническое обслуживание автомобилей. Перейдите на отдельный сайт автосервиса, чтобы посмотреть услуги и записаться на ремонт.</p>
   </div>
   <a class="button button-primary" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Перейти в автосервис</a>
  </div>
 </div>
</section>

<section class="section alt">
 <div class="container"><div class="section-head"><div><h2>АвтоSPA в Москве</h2><p class="section-intro">Контактная информация и основные действия собраны в одном месте.</p></div></div>
  <div class="benefits"><div class="benefit"><strong>Телефон</strong><span>Позвоните для записи и уточнения условий.</span></div><div class="benefit"><strong>Адрес</strong><span>Полярный проезд, 18, стр. 2, Москва.</span></div><div class="benefit"><strong>Шиномонтаж</strong><span>Отдельный блок для быстрой записи.</span></div><div class="benefit"><strong>Мойка двигателя</strong><span>Важная услуга автомойки, вынесенная на главную.</span></div></div>
 </div>
</section>

<section id="contacts" class="section">
 <div class="container contact-grid">
  <div class="contact-card"><h2>Контакты</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div></div>
  <div class="map-placeholder" aria-label="Место расположения">АвтоSPA<br>Москва, Полярный проезд, 18, стр. 2</div>
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
