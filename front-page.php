<?php get_header(); ?>
<style>
.hero-visual{min-height:430px;border-radius:38px;background:linear-gradient(145deg,#dff9f4 0%,#eaf7ff 48%,#fff0df 100%);border:1px solid #cceee9;box-shadow:0 24px 60px rgba(24,183,173,.14);position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;isolation:isolate}
.hero-visual:before{content:"";position:absolute;width:330px;height:330px;border-radius:50%;right:-100px;top:-100px;background:rgba(88,185,232,.2);z-index:-1}
.hero-visual:after{content:"";position:absolute;width:230px;height:230px;border-radius:50%;left:-90px;bottom:-100px;background:rgba(243,154,203,.18);z-index:-1}
.car-art{width:82%;height:190px;position:relative;margin-top:55px;filter:drop-shadow(0 20px 20px rgba(47,145,151,.16))}
.car-body{position:absolute;left:4%;right:4%;bottom:35px;height:82px;border-radius:55px 70px 24px 24px;background:linear-gradient(180deg,#fff,#bdeee9);border:5px solid #18b7ad}
.car-roof{position:absolute;left:23%;top:16px;width:47%;height:76px;border-radius:70px 70px 0 0;background:linear-gradient(135deg,#ffffff,#dff9f4);border:5px solid #18b7ad;border-bottom:0;transform:skewX(-8deg)}
.car-window{position:absolute;left:31%;top:28px;width:32%;height:45px;border-radius:28px 34px 6px 6px;background:#bfe9f7;border:3px solid #58b9e8;transform:skewX(-8deg)}
.car-window:after{content:"";position:absolute;left:48%;top:0;height:100%;border-left:3px solid #58b9e8}
.car-wheel{position:absolute;width:57px;height:57px;border-radius:50%;bottom:7px;background:#fff;border:9px solid #18b7ad;box-shadow:inset 0 0 0 8px #dff9f4}.wheel-left{left:16%}.wheel-right{right:16%}
.car-light{position:absolute;width:24px;height:15px;border-radius:50%;right:3%;top:43px;background:#ffd86b;box-shadow:0 0 18px rgba(255,216,107,.65)}
.hero-visual-label{position:absolute;left:26px;top:24px;padding:9px 13px;border-radius:999px;background:#fff;color:#168c86;font-size:11px;font-weight:900;letter-spacing:.08em}
.hero-visual-brand{position:absolute;left:28px;bottom:25px}.hero-visual-brand strong{display:block;font-size:28px;color:#18b7ad}.hero-visual-brand span{font-size:13px;color:#5f8790}
.hero-bubble{position:absolute;border-radius:50%;border:2px solid rgba(24,183,173,.25);animation:heroBubble 5s ease-in-out infinite}.hb1{width:20px;height:20px;right:22%;top:28%;}.hb2{width:12px;height:12px;left:18%;top:20%;animation-delay:1s}.hb3{width:28px;height:28px;right:15%;bottom:18%;animation-delay:2s}
.hero-mini-cta{position:absolute;right:25px;bottom:24px;padding:11px 14px;border-radius:15px;background:#ff9b52;color:#fff;font-weight:900;box-shadow:0 10px 22px rgba(255,155,82,.22);transition:transform .2s ease}.hero-mini-cta:hover{transform:translateY(-3px)}
@keyframes heroBubble{0%,100%{transform:translateY(0);opacity:.5}50%{transform:translateY(-15px);opacity:1}}
@media(max-width:700px){.hero-visual{min-height:320px}.car-art{width:92%;height:145px}.car-body{height:65px}.car-roof{height:58px}.car-window{height:35px}.car-wheel{width:46px;height:46px;border-width:7px}.hero-visual-label{left:16px;top:16px}.hero-visual-brand{left:18px;bottom:18px}.hero-visual-brand strong{font-size:22px}.hero-mini-cta{right:16px;bottom:17px;font-size:12px}}
</style>
<main>
<section class="hero">
 <div class="container hero-grid">
  <div>
   <span class="eyebrow">АвтоСпа • Москва</span>
   <h1>Автомойка и шиномонтаж в Москве</h1>
   <p>АвтоСпа — автомойка и шиномонтаж по адресу: Москва, Полярный проезд, 18, стр. 2. Актуальные услуги и условия уточняйте по телефону.</p>
   <div class="hero-buttons"><a class="button button-primary" href="#tire-booking">🛞 Записаться на шиномонтаж</a><a class="button button-secondary" href="#services">Услуги</a></div>
  </div>
  <div class="hero-visual" aria-label="Автомобильная иллюстрация АвтоСпа">
   <span class="hero-visual-label">АВТОМОЙКА • ШИНОМОНТАЖ</span>
   <span class="hero-bubble hb1"></span><span class="hero-bubble hb2"></span><span class="hero-bubble hb3"></span>
   <div class="car-art" aria-hidden="true"><div class="car-roof"></div><div class="car-window"></div><div class="car-body"><span class="car-light"></span></div><span class="car-wheel wheel-left"></span><span class="car-wheel wheel-right"></span></div>
   <div class="hero-visual-brand"><strong>АвтоСпа</strong><span>Москва • Полярный проезд, 18, стр. 2</span></div>
   <a class="hero-mini-cta" href="#tire-booking">🛞 Запись</a>
  </div>
 </div>
</section>

<section class="tire-booking-banner" id="tire-booking">
 <div class="container">
  <div class="tire-booking-card">
   <div class="tire-bubbles"><span></span><span></span><span></span></div>
   <div class="tire-booking-visual" aria-hidden="true"><div class="tire-ring">🛞</div><div class="tire-spark spark-one">✦</div><div class="tire-spark spark-two">✦</div></div>
   <div class="tire-booking-content"><span class="booking-kicker">АвтоСпа • Шиномонтаж</span><h2>Запишитесь на шиномонтаж</h2><p>Позвоните в АвтоСпа и согласуйте удобное время записи.</p><div class="booking-actions"><a class="button booking-button" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">📞 Записаться по телефону</a><a class="booking-phone" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">+7 916 299-98-59</a></div></div>
   <div class="booking-badge"><strong>🛞</strong><span>Быстрая запись</span><small>по телефону</small></div>
  </div>
 </div>
</section>

<section id="services" class="section">
 <div class="container"><div class="section-head"><div><h2>Услуги</h2><p class="section-intro">Основные направления АвтоСпа: автомойка, мойка двигателя и шиномонтаж. Актуальный перечень и условия можно уточнить по телефону.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Уточните доступные виды мойки и актуальные условия по телефону.</p></article>
   <article class="card engine-wash-card"><div class="service-icon">🔧</div><h3>Мойка двигателя</h3><p>Отдельное направление АвтоСпа. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p><a class="button button-secondary" style="margin-top:18px" href="#engine-wash">Подробнее об услуге</a></article>
   <article class="card tire-service-card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Запишитесь на шиномонтаж по телефону и согласуйте удобное время.</p><a class="button button-primary" style="margin-top:18px" href="#tire-booking">Записаться</a></article>
  </div>
 </div>
</section>

<section id="engine-wash" class="section engine-section"><div class="container"><div class="engine-box"><div class="engine-copy"><span class="eyebrow">Отдельная услуга</span><h2>Мойка двигателя</h2><p>Мойка двигателя — отдельное направление АвтоСпа. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p><a class="button button-primary" href="#contacts">Уточнить условия мойки двигателя</a></div><div class="engine-note"><span class="service-icon">🔧</span><strong>Мойка двигателя</strong><span>АвтоСпа • Москва</span></div></div></div></section>

<section id="tire-service" class="section tire-section"><div class="container"><div class="tire-box"><div><span class="eyebrow">Шиномонтаж</span><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоСпа, чтобы уточнить актуальные условия и согласовать удобное время.</p></div><a class="button tire-cta" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Записаться на шиномонтаж</a></div></div></section>

<section class="section autotech-banner" id="autotech"><div class="container"><div class="autotech-banner-inner"><div class="autotech-copy"><span class="eyebrow">Отдельное направление</span><h2>Автосервис Автотех</h2><p>Ремонт, диагностика и техническое обслуживание автомобилей. Перейдите на отдельный сайт автосервиса, чтобы посмотреть услуги и записаться на ремонт.</p></div><a class="button button-primary" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Перейти в автосервис</a></div></div></section>

<section class="section reviews-location-section" id="reviews-location"><div class="container"><div class="section-head"><div><span class="eyebrow">АвтоСпа • Москва</span><h2>Отзывы и расположение</h2><p class="section-intro">Посмотрите отзывы в карточке АвтоСпа на Яндекс Картах и сразу проложите маршрут до автомойки.</p></div></div><div class="reviews-location-grid"><div class="yandex-review-card"><div class="review-card-head"><div><strong>Отзывы об АвтоСпа</strong><span>Яндекс Карты</span></div><a class="button button-primary" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&text=%D0%90%D0%B2%D1%82%D0%BE%D0%A1%D0%BF%D0%B0%2C%20%D0%9F%D0%BE%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%2C%2018" target="_blank" rel="noopener noreferrer">Открыть Яндекс</a></div><iframe class="yandex-rating-widget" src="https://yandex.ru/sprav/widget/rating-badge/58733743477" title="Рейтинг АвтоСпа на Яндекс Картах" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><p class="review-note">Нажмите «Открыть Яндекс», чтобы перейти в карточку организации и посмотреть отзывы, рейтинг и информацию о месте.</p></div><div class="map-card"><div class="map-card-head"><div><strong>Где находится АвтоСпа</strong><span>Москва, Полярный проезд, 18, стр. 2</span></div><a class="map-link" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&pt=37.6288%2C55.8960%2Cpm2rdm&mode=search" target="_blank" rel="noopener noreferrer">Маршрут ↗</a></div><iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/?ll=37.6288%2C55.8960&z=16&l=map&pt=37.6288%2C55.8960%2Cpm2rdm" title="Карта расположения АвтоСпа, Полярный проезд, 18, стр. 2, Москва" loading="lazy" allowfullscreen></iframe></div></div></div></section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>АвтоСпа в Москве</h2><p class="section-intro">Контактная информация и основные действия собраны в одном месте.</p></div></div><div class="benefits"><div class="benefit"><strong>Телефон</strong><span>Позвоните для записи и уточнения условий.</span></div><div class="benefit"><strong>Адрес</strong><span>Полярный проезд, 18, стр. 2, Москва.</span></div><div class="benefit"><strong>Шиномонтаж</strong><span>Отдельный блок для быстрой записи.</span></div><div class="benefit"><strong>Мойка двигателя</strong><span>Важная услуга автомойки, вынесенная на главную.</span></div></div></div></section>

<section id="contacts" class="section"><div class="container"><div class="contact-card contact-card-wide"><h2>Контакты АвтоСпа</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div><a class="button contact-map-button" href="#reviews-location">Посмотреть на карте</a></div></div></section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>Частые вопросы</h2></div></div><div class="faq"><details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру, указанному на сайте, и согласуйте удобное время.</p></details><details><summary>Где находится АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2. Карта и кнопка маршрута находятся в блоке «Отзывы и расположение».</p></details><details><summary>Как посмотреть отзывы?</summary><p>Откройте карточку АвтоСпа в Яндекс Картах через блок отзывов на этой странице.</p></details><details><summary>Как узнать актуальный перечень услуг?</summary><p>Позвоните нам — специалисты уточнят доступные услуги и условия.</p></details></div></div></section>
</main>
<?php get_footer(); ?>
