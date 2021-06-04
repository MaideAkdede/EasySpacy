<?php /* Template Name: Page de contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact">
        <div class="contact__header">
            <h1 class="contact__title"><?php the_title(); ?></h1>
            <div class="contact__wysiwyg"><?php the_content(); ?></div>
        </div>
        <div class="contact__content">
            <div class="contact__form">

            </div>
            <div class="content__info">

            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>