<?php get_header(); ?>
<main class="section">
 <div class="container">
  <article class="content-page">
   <nav class="breadcrumbs" aria-label="Хлебные крошки"><a href="<?php echo esc_url(home_url('/')); ?>">АвтоСпа</a><span aria-hidden="true">›</span><span><?php the_title(); ?></span></nav>
   <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="entry-content"><?php the_content(); ?></div>
    <div class="page-actions"><a class="button button-primary" href="<?php echo esc_url(home_url('/#contacts')); ?>">📞 Записаться и уточнить условия</a><a class="button button-secondary" href="<?php echo esc_url(home_url('/#services')); ?>">Услуги АвтоСпа</a></div>
   <?php endwhile; ?>
  </article>
 </div>
</main>
<?php get_footer(); ?>
