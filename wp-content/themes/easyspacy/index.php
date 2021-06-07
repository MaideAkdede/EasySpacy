<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="content__wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; else : ?>
    <main class="error">
        <h2 class="error__title">Oops</h2>
        <p class="error__message">La page que vous cherchez est introuvable ! </p>
        <a href="" class="error__link cta">Retourner à l'accueil</a>
    </main>
<?php endif; ?>
<?php get_footer(); ?>