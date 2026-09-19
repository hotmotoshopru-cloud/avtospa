<?php get_header(); ?>
<main>
<section class="service-page section">
 <div class="container">
  <?php
  $slug=get_post_field('post_name',get_queried_object_id());
  $services=avtospa_service_pages();
  $service=isset($services[$slug])?$services[$slug]:array('title'=>get_the_title(),'description'=>'');
  ?>
  <div class="service-page-card">
   <span class="eyebrow">АвтоСпа • Москва</span>
   <h1><?php echo esc_html($service['title']); ?></h1>
   <p class="service-lead"><?php echo esc_html($service['description']); ?></p>
   <div class="service-page-actions">
    <a class="button button-primary" href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>">Позвонить и уточнить условия</a>
    <a class="button button-secondary" href="<?php echo esc_url(home_url('/#services')); ?>">Все услуги</a>
   </div>
   <div class="service-page-info">
    <strong>АвтоСпа</strong>
    <span>Москва, Полярный проезд, 18, стр. 2</span>
    <a href="tel:<?php echo esc_attr(avtospa_phone_href()); ?>"><?php echo esc_html(get_theme_mod('avtospa_phone','+7 916 299-98-59')); ?></a>
   </div>
  </div>
 </div>
</section>
</main>
<?php get_footer(); ?>
