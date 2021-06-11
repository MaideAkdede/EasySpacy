<?php /* Template Name: Page News & Revue de Presse */ ?>
<?php get_header(); ?>
    <main class="news">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="news__title"><?php the_title(); ?></h2>
            <div class="news__wysiwyg"><?php the_content(); ?></div>
            <?php get_template_part('template-news'); ?>
        <?php endwhile; else: ?>
            <div>Aucune News Pour le moment.</div>
        <?php endif; ?>
    </main>
<?php get_template_part('template-presses'); ?>
<?php get_footer(); ?>