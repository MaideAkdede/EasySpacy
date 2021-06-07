<?php /* Template Name: Page News & Revue de Presse */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="news">
        <h2 class="news__title"><?php the_title(); ?></h2>
        <div class="news__wysiwyg"><?php the_content(); ?></div>
        <?php get_template_part('template-news'); ?>
    </main>
<?php endwhile;

endif; ?>
<?php get_template_part('template-presses'); ?>
<?php get_footer(); ?>