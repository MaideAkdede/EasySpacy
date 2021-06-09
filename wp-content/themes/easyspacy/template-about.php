<?php /* Template Name: Page À Propos */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="about">
        <h2 class="about__title"><?php the_title(); ?></h2>
        <div class="about__wysiwyg">
            <?php the_content(); ?>
            <div class="about__avatars">
                <img width="100"
                     src="<?php echo get_template_directory_uri() . '/resources/img/avatar_Sarah_square.png' ?>"
                     alt="Avatar de Sarah Joiret" class="about__avatar about__av1">
                <img width="100"
                     src="<?php echo get_template_directory_uri() . '/resources/img/avatar_leo_square.png' ?>"
                     alt="Avatar de Leo Cotteleer" class="about__avatar about__av2">
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>