<?php /* Template Name: Page de contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact">
        <div class="contact__header">
            <h2 class="contact__title"><?php the_title(); ?></h2>
            <div class="contact__wysiwyg"><?php the_content(); ?></div>
        </div>
        <div class="contact__content">
            <div class="contact__form">
                <?= do_shortcode('[contact-form-7 id="6" title="Formulaire de Contact"]');?>
            </div>
            <div class="contact__info">
                <a href="mailto:easyspacy@gmail.com" class="contact__link">easy@spacy.be</a>
                <a href="https://www.instagram.com/easyspacy/?hl=fr" class="contact__link">@easyspacy</a>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>