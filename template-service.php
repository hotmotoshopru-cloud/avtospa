<?php
/**
 * Template Name: Страница услуги АвтоСпа
 * Template Post Type: page
 */
get_header();

$service_title = get_the_title();
$service_intro = get_the_excerpt();
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
                <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
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
