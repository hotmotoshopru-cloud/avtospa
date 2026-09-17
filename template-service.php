<?php
/**
 * Template Name: Страница услуги АвтоСпа
 * Template Post Type: page
 */
get_header();

$service_title = get_the_title();
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
                        <a class="button button-primary" href="<?php echo esc_url(home_url('/#contacts')); ?>">📞 Записаться и уточнить условия</a>
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

            <div class="service-page-bottom">
                <a class="service-bottom-card service-bottom-tire" href="<?php echo esc_url(home_url('/#tire-booking')); ?>">
                    <span>🛞</span><div><strong>Шиномонтаж</strong><small>Записаться на шиномонтаж</small></div>
                </a>
                <a class="service-bottom-card service-bottom-engine" href="<?php echo esc_url(home_url('/#engine-wash')); ?>">
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
