<?php get_header(); ?>
<style>
.tire-booking-banner{padding:28px 0 70px;background:linear-gradient(135deg,#fff8e9 0%,#effffc 48%,#eaf7ff 100%);position:relative;overflow:hidden}
.tire-booking-card{min-height:300px;display:grid;grid-template-columns:180px 1fr auto;align-items:center;gap:28px;padding:34px 40px;border-radius:36px;background:linear-gradient(120deg,#fff0d9 0%,#ffffff 42%,#e1faf6 100%);border:2px solid #ffd6a8;box-shadow:0 24px 60px rgba(255,155,82,.18);position:relative;overflow:hidden;isolation:isolate}
.tire-booking-card:before{content:"";position:absolute;width:420px;height:420px;border-radius:50%;right:-150px;top:-180px;background:rgba(88,185,232,.15);z-index:-1}
.tire-booking-card:after{content:"";position:absolute;left:-100px;bottom:-180px;width:360px;height:360px;border-radius:50%;background:rgba(243,154,203,.13);z-index:-1}
.tire-bubbles span{position:absolute;border-radius:50%;border:2px solid rgba(24,183,173,.22);animation:bookingBubble 6s ease-in-out infinite}
.tire-bubbles span:nth-child(1){width:18px;height:18px;left:24%;top:22%}.tire-bubbles span:nth-child(2){width:11px;height:11px;left:43%;bottom:14%;animation-delay:1s}.tire-bubbles span:nth-child(3){width:25px;height:25px;right:31%;bottom:17%;animation-delay:2s}
.tire-booking-visual{height:190px;position:relative;display:flex;align-items:center;justify-content:center}
.tire-ring{width:154px;height:154px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:92px;background:linear-gradient(145deg,#fff,#e5fbf8);border:10px solid #18b7ad;box-shadow:0 14px 35px rgba(24,183,173,.22);animation:tireFloat 4s ease-in-out infinite;transform-origin:center}
.tire-spark{position:absolute;font-size:28px;color:#ff9b52;animation:bookingSpark 2.6s ease-in-out infinite}.spark-one{right:3px;top:10px}.spark-two{left:8px;bottom:15px;color:#f39acb;animation-delay:1.1s}
.booking-kicker{display:inline-flex;padding:8px 13px;border-radius:999px;background:#dff9f4;color:#168c86;font-size:12px;font-weight:900;text-transform:uppercase;letter-spacing:.08em}
.tire-booking-content{position:relative;z-index:2}.tire-booking-content h2{font-size:clamp(30px,4vw,48px);line-height:1.03;letter-spacing:-.045em;margin:13px 0 10px;color:#244b5a}.tire-booking-content p{margin:0;color:#5f8790;font-size:17px;max-width:600px}.booking-actions{display:flex;align-items:center;gap:16px;flex-wrap:wrap;margin-top:22px}.booking-button{background:#ff9b52!important;color:#fff!important;font-size:16px;padding:16px 23px;border-radius:17px;box-shadow:0 12px 28px rgba(255,155,82,.25);animation:bookingPulse 2.5s ease-in-out infinite}.booking-button:hover{background:#f08a39!important;transform:translateY(-3px) scale(1.01)}.booking-phone{font-size:18px;font-weight:900;color:#168c86;white-space:nowrap}
.booking-badge{min-width:145px;padding:18px 16px;border-radius:24px;background:#fff;border:1px solid #bfe8e2;box-shadow:0 12px 30px rgba(24,183,173,.12);display:flex;flex-direction:column;align-items:center;text-align:center;transform:rotate(2deg);position:relative;z-index:2}.booking-badge strong{font-size:38px;line-height:1}.booking-badge span{font-weight:900;color:#168c86;margin-top:7px}.booking-badge small{color:#5f8790;margin-top:2px}
.tire-service-card{border-color:#ffd5b1!important;box-shadow:0 14px 34px rgba(255,155,82,.12)!important}.tire-service-card .service-icon{background:#fff0df}
@keyframes tireFloat{0%,100%{transform:translateY(0) rotate(-8deg)}50%{transform:translateY(-9px) rotate(8deg)}}
@keyframes bookingPulse{0%,100%{box-shadow:0 12px 28px rgba(255,155,82,.22)}50%{box-shadow:0 16px 38px rgba(255,155,82,.38)}}
@keyframes bookingBubble{0%,100%{transform:translateY(0) scale(1);opacity:.65}50%{transform:translateY(-18px) scale(1.15);opacity:1}}
@keyframes bookingSpark{0%,100%{transform:scale(.85) rotate(0);opacity:.65}50%{transform:scale(1.2) rotate(15deg);opacity:1}}
@media(max-width:1000px){.tire-booking-card{grid-template-columns:150px 1fr}.booking-badge{position:absolute;right:25px;top:22px}.tire-booking-content{padding-right:155px}}
@media(max-width:700px){.tire-booking-banner{padding-top:12px;padding-bottom:50px}.tire-booking-card{grid-template-columns:1fr;gap:15px;padding:25px 20px;text-align:center}.tire-booking-visual{height:150px}.tire-ring{width:122px;height:122px;font-size:70px;border-width:8px}.tire-booking-content{padding-right:0}.tire-booking-content h2{font-size:34px}.tire-booking-content p{font-size:16px}.booking-actions{justify-content:center}.booking-button{width:100%}.booking-phone{width:100%;font-size:17px}.booking-badge{position:static;justify-self:center;transform:none;min-width:170px}.spark-one{right:24%}.spark-two{left:24%}}
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
  <div class="hero-card"><div class="hero-card-content"><strong>АвтоСпа</strong><small>Полярный проезд, 18, стр. 2 • Москва</small></div></div>
 </div>
</section>

<section class="tire-booking-banner" id="tire-booking">
 <div class="container">
  <div class="tire-booking-card">
   <div class="tire-bubbles"><span></span><span></span><span></span></div>
   <div class="tire-booking-visual" aria-hidden="true"><div class="tire-ring">🛞</div><div class="tire-spark spark-one">✦</div><div class="tire-spark spark-two">✦</div></div>
   <div class="tire-booking-content">
    <span class="booking-kicker">АвтоСпа • Шиномонтаж</span>
    <h2>Запишитесь на шиномонтаж</h2>
    <p>Позвоните в АвтоСпа и согласуйте удобное время записи.</p>
    <div class="booking-actions"><a class="button booking-button" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">📞 Записаться по телефону</a><a class="booking-phone" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">+7 916 299-98-59</a></div>
   </div>
   <div class="booking-badge"><strong>🛞</strong><span>Быстрая запись</span><small>по телефону</small></div>
  </div>
 </div>
</section>

<section id="services" class="section">
 <div class="container">
  <div class="section-head"><div><h2>Услуги</h2><p class="section-intro">На главной странице выделены основные направления АвтоСпа: автомойка, мойка двигателя и шиномонтаж. Актуальный перечень и условия можно уточнить по телефону.</p></div></div>
  <div class="cards">
   <article class="card"><div class="service-icon">🚿</div><h3>Автомойка</h3><p>Уточните доступные виды мойки и актуальные условия по телефону.</p></article>
   <article class="card engine-wash-card"><div class="service-icon">🔧</div><h3>Мойка двигателя</h3><p>Одна из важных услуг автомойки АвтоСпа. Актуальные условия и возможность выполнения услуги уточняйте по телефону.</p><a class="button button-secondary" style="margin-top:18px" href="#engine-wash">Подробнее об услуге</a></article>
   <article class="card tire-service-card"><div class="service-icon">🛞</div><h3>Шиномонтаж</h3><p>Запишитесь на шиномонтаж по телефону и согласуйте удобное время.</p><a class="button button-primary" style="margin-top:18px" href="#tire-booking">Записаться</a></article>
  </div>
 </div>
</section>

<section id="engine-wash" class="section engine-section">
 <div class="container"><div class="engine-box"><div class="engine-copy"><span class="eyebrow">Отдельная услуга</span><h2>Мойка двигателя</h2><p>Мойка двигателя — отдельное направление АвтоСпа, которое важно учитывать при выборе услуг. Возможность выполнения услуги и актуальные условия уточняйте по телефону.</p><a class="button button-primary" href="#contacts">Уточнить условия мойки двигателя</a></div><div class="engine-note"><span class="service-icon">🔧</span><strong>Мойка двигателя</strong><span>АвтоСпа • Москва</span></div></div></div>
</section>

<section id="tire-service" class="section tire-section">
 <div class="container"><div class="tire-box"><div><span class="eyebrow">Шиномонтаж</span><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоСпа, чтобы уточнить актуальные условия и согласовать удобное время.</p></div><a class="button tire-cta" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Записаться на шиномонтаж</a></div></div>
</section>

<section class="section autotech-banner" id="autotech">
 <div class="container"><div class="autotech-banner-inner"><div class="autotech-copy"><span class="eyebrow">Отдельное направление</span><h2>Автосервис Автотех</h2><p>Ремонт, диагностика и техническое обслуживание автомобилей. Перейдите на отдельный сайт автосервиса, чтобы посмотреть услуги и записаться на ремонт.</p></div><a class="button button-primary" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">Перейти в автосервис</a></div></div>
</section>

<section class="section reviews-location-section" id="reviews-location">
 <div class="container">
  <div class="section-head"><div><span class="eyebrow">АвтоСпа • Москва</span><h2>Отзывы и расположение</h2><p class="section-intro">Посмотрите отзывы в карточке АвтоСпа на Яндекс Картах и сразу проложите маршрут до автомойки.</p></div></div>
  <div class="reviews-location-grid">
   <div class="yandex-review-card">
    <div class="review-card-head"><div><strong>Отзывы об АвтоСпа</strong><span>Яндекс Карты</span></div><a class="button button-primary" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&text=%D0%90%D0%B2%D1%82%D0%BE%D0%A1%D0%BF%D0%B0%2C%20%D0%9F%D0%BE%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%2C%2018" target="_blank" rel="noopener noreferrer">Открыть Яндекс</a></div>
    <iframe class="yandex-rating-widget" src="https://yandex.ru/sprav/widget/rating-badge/58733743477" title="Рейтинг АвтоСпа на Яндекс Картах" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <p class="review-note">Нажмите «Открыть Яндекс», чтобы перейти в карточку организации и посмотреть отзывы, рейтинг и информацию о месте.</p>
   </div>
   <div class="map-card">
    <div class="map-card-head"><div><strong>Где находится АвтоСпа</strong><span>Москва, Полярный проезд, 18, стр. 2</span></div><a class="map-link" href="https://yandex.ru/maps/?ll=37.6288%2C55.8960&z=17&pt=37.6288%2C55.8960%2Cpm2rdm&mode=search" target="_blank" rel="noopener noreferrer">Маршрут ↗</a></div>
    <iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/?ll=37.6288%2C55.8960&z=16&l=map&pt=37.6288%2C55.8960%2Cpm2rdm" title="Карта расположения АвтоСпа, Полярный проезд, 18, стр. 2, Москва" loading="lazy" allowfullscreen></iframe>
   </div>
  </div>
 </div>
</section>

<section class="section alt">
 <div class="container"><div class="section-head"><div><h2>АвтоСпа в Москве</h2><p class="section-intro">Контактная информация и основные действия собраны в одном месте.</p></div></div><div class="benefits"><div class="benefit"><strong>Телефон</strong><span>Позвоните для записи и уточнения условий.</span></div><div class="benefit"><strong>Адрес</strong><span>Полярный проезд, 18, стр. 2, Москва.</span></div><div class="benefit"><strong>Шиномонтаж</strong><span>Отдельный блок для быстрой записи.</span></div><div class="benefit"><strong>Мойка двигателя</strong><span>Важная услуга автомойки, вынесенная на главную.</span></div></div></div>
</section>

<section id="contacts" class="section">
 <div class="container"><div class="contact-card contact-card-wide"><h2>Контакты АвтоСпа</h2><p>Позвоните, чтобы уточнить актуальные услуги и записаться.</p><div class="contact-row"><strong>Телефон</strong><a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a></div><div class="contact-row"><strong>Адрес</strong><span><?php echo esc_html(get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2')); ?></span></div><a class="button contact-map-button" href="#reviews-location">Посмотреть на карте</a></div></div>
</section>

<section class="section alt"><div class="container"><div class="section-head"><div><h2>Частые вопросы</h2></div></div><div class="faq"><details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру, указанному на сайте, и согласуйте удобное время.</p></details><details><summary>Где находится АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2. Карта и кнопка маршрута находятся в блоке «Отзывы и расположение».</p></details><details><summary>Как посмотреть отзывы?</summary><p>Откройте карточку АвтоСпа в Яндекс Картах через блок отзывов на этой странице.</p></details><details><summary>Как узнать актуальный перечень услуг?</summary><p>Позвоните нам — специалисты уточнят доступные услуги и условия.</p></details></div></div></section>
</main>
<?php get_footer(); ?>
