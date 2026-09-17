<?php get_header(); ?>
<main class="section"><div class="container">
<header class="section-head"><div><h1>Поиск: <?php echo esc_html(get_search_query()); ?></h1></div></header>
<div class="cards">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p></article>
<?php endwhile; else: ?><p>По вашему запросу ничего не найдено.</p><?php endif; ?>
</div>
<?php the_posts_pagination(); ?>
</div></main>
<?php get_footer(); ?>
