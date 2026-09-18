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
        'content' => '<h2>Автомойка в АвтоСпа</h2><p>АвтоСпа предлагает услугу автомойки в Москве. Здесь можно уточнить условия обслуживания автомобиля и выбрать удобное время для обращения.</p><h2>Как записаться</h2><p>Чтобы узнать актуальные условия и записаться, свяжитесь с АвтоСпа по телефону. Адрес: Москва, Полярный проезд, 18, стр. 2.</p>'
    ),
    'Мойка двигателя' => array(
        'intro' => 'Мойка двигателя в АвтоСпа в Москве на Полярном проезде, 18, стр. 2.',
        'content' => '<h2>Мойка двигателя</h2><p>Мойка двигателя — отдельная услуга АвтоСпа в Москве. Перед обращением можно уточнить условия выполнения услуги и подготовку автомобиля по телефону.</p><h2>Запись и контакты</h2><p>Для уточнения условий и записи свяжитесь с АвтоСпа. Адрес: Москва, Полярный проезд, 18, стр. 2.</p>'
    ),
    'Шиномонтаж' => array(
        'intro' => 'Шиномонтаж АвтоСпа в Москве на Полярном проезде, 18, стр. 2.',
        'content' => '<h2>Шиномонтаж в АвтоСпа</h2><p>АвтоСпа предлагает шиномонтаж в Москве. Уточните актуальные условия и доступное время записи по телефону.</p><h2>Запись на шиномонтаж</h2><p>Для записи и уточнения условий свяжитесь с АвтоСпа по телефону. Адрес: Москва, Полярный проезд, 18, стр. 2.</p>'
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

$service_descriptions = array(
    'Автомойка' => 'Автомойка АвтоСпа в Москве. Полярный проезд, 18, стр. 2. Условия и запись уточняются по телефону.',
    'Мойка двигателя' => 'Мойка двигателя АвтоСпа в Москве. Полярный проезд, 18, стр. 2. Условия и запись уточняются по телефону.',
    'Шиномонтаж' => 'Шиномонтаж АвтоСпа в Москве. Полярный проезд, 18, стр. 2. Запись и уточнение условий по телефону.'
);
$service_description = isset($service_descriptions[$service_title]) ? $service_descriptions[$service_title] : $service_intro;
$service_schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $service_title,
    'description' => wp_strip_all_tags($service_description),
    'url' => get_permalink(),
    'provider' => array(
        '@type' => 'LocalBusiness',
        'name' => 'АвтоСпа',
        'telephone' => get_theme_mod('avtospa_phone','+7 916 299-98-59'),
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => get_theme_mod('avtospa_address','Россия, Москва, Полярный проезд, 18, стр. 2'),
            'addressLocality' => 'Москва',
            'addressCountry' => 'RU'
        )
    ),
    'areaServed' => array('@type' => 'City', 'name' => 'Москва')
);
?>
<main class="section service-page">
    <div class="container">
        <article class="content-page service-page-card">
            <nav class="breadcrumbs" aria-label="Хлебные крошки">
                <a href="<?php echo esc_url(home_url('/')); ?>">АвтоСпа</a>
                <span aria-hidden="true">›</span>
                <span><?php echo esc_html($service_title); ?></span>
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
                    <span class="service-page-icon">✦</span>
                    <strong>АвтоСпа</strong>
                    <small>Москва · Полярный проезд, 18, стр. 2</small>
                </div>
            </div>

            <div class="entry-content service-entry-content">
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
<script type="application/ld+json"><?php echo wp_json_encode($service_schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES); ?></script>
<?php get_footer(); ?>
