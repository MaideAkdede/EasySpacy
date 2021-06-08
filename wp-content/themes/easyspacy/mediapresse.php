<?php /* Template Name: Page info Média et Presse */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="media">
        <h2 class="media__title"><?php the_title(); ?></h2>
        <div class="media__wysiwyg"><?php the_content(); ?></div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>