<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="content__wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; else : ?>
    <main class="error">
        <h2 class="error__title">Page introuvable...</h2>
        <div class="contact__wysiwyg">
            <p class="error__message">La page que vous cherchez n'existe pas</p>
            <a href="<?= site_url(); ?>" title="Retourner à la page d'accueil" class="error__link cta">Retourner à l'accueil</a>
            <div class="contact__bulle">
                <img width="100" src="<?php echo get_template_directory_uri() . '/resources/img/bulle_bot.png' ?>" alt="">
            </div>
            <div class="contact__avatars">
                <img width="100"
                     src="<?php echo get_template_directory_uri() . '/resources/img/avatar_leo_square.png' ?>"
                     alt="Avatar de Leo Cotteleer" class="contact__avatar">
                <img
                        src="<?php echo get_template_directory_uri() . '/resources/img/avatar_Sarah_square.png' ?>"
                        alt="Avatar de Sarah Joiret" class="contact__avatar">
            </div>
        </div>
    </main>
<?php endif; ?>
<?php get_footer(); ?>