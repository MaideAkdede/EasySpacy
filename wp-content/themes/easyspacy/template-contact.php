<?php /* Template Name: Page de contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact">
        <div class="contact__header">
            <h2 class="contact__title"><?php the_title(); ?></h2>
            <div class="contact__wysiwyg"><?php the_content(); ?>
                <div class="contact__bulle">
                    <img width="100" src="<?php echo get_template_directory_uri() . '/resources/img/bulle_bot.png' ?>" alt="">
                </div>
                <div class="contact__avatars">
                    <img
                         src="<?php echo get_template_directory_uri() . '/resources/img/avatar_Sarah_square.png' ?>"
                         alt="Avatar de Sarah Joiret" class="contact__avatar">
                    <img width="100"
                         src="<?php echo get_template_directory_uri() . '/resources/img/avatar_leo_square.png' ?>"
                         alt="Avatar de Leo Cotteleer" class="contact__avatar">
                </div>
            </div>
        </div>
        <div class="contact__content">
            <div class="contact__form">
                <h3 class="contact__second-title">Formulaire du contact</h3>
                <?= do_shortcode('[contact-form-7 id="6" title="Formulaire de Contact"]');?>
            </div>
            <div class="contact__info">
                <h3 class="contact__second-title">Informations de contact</h3>
                <div class="contact__ul">
                    <div class="contact__li">
                        <img class="contact__svg" width="36" src="<?php echo get_template_directory_uri() . '/resources/img/mail.svg' ?>" alt="mail logo">
                        <a href="mailto:easyspacy@gmail.com" class="contact__link" title="Envoyé un email à EasySpacy">easy@spacy.be</a>
                    </div>
                    <div class="contact__li">
                        <img class="contact__svg" width="36" src="<?php echo get_template_directory_uri() . '/resources/img/instagram.svg' ?>" alt="ig logo">
                        <a href="https://www.instagram.com/easyspacy/?hl=fr" class="contact__link" title="Voir EasySpacy sur Instagram">@easyspacy</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>