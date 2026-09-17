<?php get_header(); ?>
<main class="section"><div class="container">
<header class="section-head"><div><h1><?php the_archive_title(); ?></h1><?php the_archive_description('<p class="section-intro">','</p>'); ?></div></header>
<div class="cards">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p></article>
<?php endwhile; else: ?><p>Материалы пока не опубликованы.</p><?php endif; ?>
</div>
<?php the_posts_pagination(); ?>
</div></main>
<?php get_footer(); ?>
