<?php
/**
 * Template Name: Страница услуги АвтоСпа
 * Template Post Type: page
 */
get_header();

$service_title = trim(wp_strip_all_tags(get_the_title()));
$service_intro = get_the_excerpt();
$service_content = trim(get_the_content());

$service_fallbacks = array(
    'Автомойка' => array(
        'intro' => 'Автомойка АвтоСпа в Москве на Полярном проезде, 18, стр. 2.',
        'content' => '<h2>Автомойка в Москве</h2><p>АвтоСпа предлагает услугу автомойки в Москве. Если вы ищете автомойку на Полярном проезде, здесь можно уточнить актуальные условия обслуживания автомобиля и доступное время обращения.</p><h2>Что уточнить перед записью</h2><ul><li>актуальные условия и доступные варианты мойки;</li><li>возможность обслуживания вашего автомобиля;</li><li>удобное время обращения.</li></ul><p>Актуальную информацию можно получить по телефону АвтоСпа.</p><h2>Как записаться на автомойку</h2><p>Позвоните в АвтоСпа по номеру <a href="tel:+79162999859">+7 916 299-98-59</a>. Адрес: Москва, Полярный проезд, 18, стр. 2.</p><section class="service-faq"><h2>Частые вопросы об автомойке</h2><details><summary>Где находится автомойка АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2.</p></details><details><summary>Как узнать условия мойки?</summary><p>Позвоните по телефону АвтоСпа и уточните актуальные условия перед обращением.</p></details><details><summary>Как записаться?</summary><p>Для записи позвоните по номеру +7 916 299-98-59.</p></details></section>'
    ),
    'Мойка двигателя' => array(
        'intro' => 'Мойка двигателя в АвтоСпа в Москве на Полярном проезде, 18, стр. 2.',
        'content' => '<h2>Мойка двигателя в Москве</h2><p>Мойка двигателя — отдельная услуга АвтоСпа. Она представлена отдельно от основной услуги автомойки, поэтому условия её выполнения можно уточнить непосредственно перед обращением.</p><h2>Перед обращением</h2><p>Уточните по телефону возможность выполнения мойки двигателя для вашего автомобиля, актуальные условия и удобное время.</p><h2>Запись на мойку двигателя</h2><p>Для записи свяжитесь с АвтоСпа по телефону <a href="tel:+79162999859">+7 916 299-98-59</a>. Адрес: Москва, Полярный проезд, 18, стр. 2.</p><section class="service-faq"><h2>Частые вопросы о мойке двигателя</h2><details><summary>Мойка двигателя — отдельная услуга?</summary><p>Да. На сайте АвтоСпа она выделена в отдельное направление.</p></details><details><summary>Как узнать, можно ли выполнить услугу для моего автомобиля?</summary><p>Позвоните в АвтоСпа и уточните возможность выполнения услуги и актуальные условия.</p></details><details><summary>Как записаться на мойку двигателя?</summary><p>Позвоните по номеру +7 916 299-98-59.</p></details></section>'
    ),
    'Шиномонтаж' => array(
        'intro' => 'Шиномонтаж АвтоСпа в Москве на Полярном проезде, 18, стр. 2.',
        'content' => '<h2>Шиномонтаж в Москве</h2><p>АвтоСпа предлагает шиномонтаж в Москве. Страница посвящена записи и информации об услуге на Полярном проезде, 18, стр. 2.</p><h2>Запись на шиномонтаж</h2><p>Позвоните в АвтоСпа, чтобы уточнить актуальные условия и согласовать удобное время. Телефон: <a href="tel:+79162999859">+7 916 299-98-59</a>.</p><h2>Перед обращением</h2><p>Актуальный перечень работ и условия обслуживания лучше уточнить по телефону перед визитом.</p><section class="service-faq"><h2>Частые вопросы о шиномонтаже</h2><details><summary>Где находится шиномонтаж АвтоСпа?</summary><p>Москва, Полярный проезд, 18, стр. 2.</p></details><details><summary>Как записаться на шиномонтаж?</summary><p>Позвоните по номеру +7 916 299-98-59 и согласуйте удобное время.</p></details><details><summary>Как узнать актуальные условия шиномонтажа?</summary><p>Позвоните в АвтоСпа перед обращением и уточните доступные работы и условия.</p></details></section>'
    )
);

if (isset($service_fallbacks[$service_title])) {
    if (!$service_intro) {
        $service_intro = $service_fallbacks[$service_title]['intro'];
    }
    if (!$service_content) {
        $service_content = $service_fallbacks[$service_title]['content'];
    }
}
if (!$service_intro) {
    $service_intro = 'Услуга АвтоСпа в Москве. Уточните условия и запишитесь по телефону.';
}

$service_pages = array();
foreach (array('Автомойка','Мойка двигателя','Шиномонтаж') as $related_title) {
    $related_page = get_page_by_title($related_title, OBJECT, 'page');
    if ($related_page && (int)$related_page->ID !== (int)get_the_ID()) {
        $service_pages[$related_title] = get_permalink($related_page->ID);
    }
}
?>
<main class="section service-page">
    <div class="container">
        <article class="content-page service-page-card">
            <nav class="breadcrumbs" aria-label="Хлебные крошки">
                <a href="<?php echo esc_url(home_url('/')); ?>">АвтоСпа</a>
                <span aria-hidden="true">›</span>
                <span aria-current="page"><?php echo esc_html($service_title); ?></span>
            </nav>

            <div class="service-page-hero">
                <div>
                    <span class="eyebrow">АвтоСпа • Москва</span>
                    <h1><?php echo esc_html($service_title); ?></h1>
                    <p class="service-page-intro"><?php echo esc_html($service_intro); ?></p>
                    <div class="page-actions">
                        <a class="button button-primary" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">📞 Записаться и уточнить условия</a>
                        <a class="button button-secondary" href="<?php echo esc_url(home_url('/#services')); ?>">Все услуги</a>
                    </div>
                </div>
                <div class="service-page-visual" aria-hidden="true">
                    <span class="service-page-orbit orbit-one"></span>
                    <span class="service-page-orbit orbit-two"></span>
                    <span class="service-page-icon"><?php echo $service_title === 'Шиномонтаж' ? '🛞' : ($service_title === 'Мойка двигателя' ? '🔧' : '🚿'); ?></span>
                    <strong>АвтоСпа</strong>
                    <small>Москва · Полярный проезд, 18, стр. 2</small>
                </div>
            </div>

            <div class="entry-content service-entry-content">
                <div class="service-seo-intro">
                    <span class="eyebrow">АвтоСпа • Москва</span>
                    <p><strong><?php echo esc_html($service_title); ?></strong> в Москве, Полярный проезд, 18, стр. 2. Актуальные условия и запись уточняйте по телефону.</p>
                </div>
                <?php if ($service_content) : ?>
                    <?php echo wp_kses_post($service_content); ?>
                <?php endif; ?>
            </div>

            <?php if ($service_pages) : ?>
                <section class="service-related" aria-labelledby="service-related-title">
                    <h2 id="service-related-title">Другие услуги АвтоСпа</h2>
                    <div class="service-related-grid">
                        <?php foreach ($service_pages as $related_title => $related_url) : ?>
                            <a class="service-related-card" href="<?php echo esc_url($related_url); ?>">
                                <span><?php echo $related_title === 'Шиномонтаж' ? '🛞' : ($related_title === 'Мойка двигателя' ? '🔧' : '🚿'); ?></span>
                                <strong><?php echo esc_html($related_title); ?></strong>
                                <small>Открыть страницу услуги →</small>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>

            <div class="service-page-bottom">
                <a class="service-bottom-card service-bottom-tire" href="<?php echo esc_url(isset($service_pages['Шиномонтаж']) ? $service_pages['Шиномонтаж'] : home_url('/#tire-booking')); ?>">
                    <span>🛞</span><div><strong>Шиномонтаж</strong><small>Записаться на шиномонтаж</small></div>
                </a>
                <a class="service-bottom-card service-bottom-engine" href="<?php echo esc_url(isset($service_pages['Мойка двигателя']) ? $service_pages['Мойка двигателя'] : home_url('/#engine-wash')); ?>">
                    <span>🔧</span><div><strong>Мойка двигателя</strong><small>Подробнее об услуге</small></div>
                </a>
                <a class="service-bottom-card service-bottom-contact" href="<?php echo esc_url(home_url('/#contacts')); ?>">
                    <span>📍</span><div><strong>Контакты</strong><small>Москва, Полярный проезд, 18, стр. 2</small></div>
                </a>
            </div>
        </article>
    </div>
</main>
<?php get_footer(); ?>