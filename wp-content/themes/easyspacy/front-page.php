<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="home">
        <div class="home__header">
            <h2 class="home__title"><?php the_field('home-title'); ?></h2>
            <div class="home__desktop">
                <div class="home__avatars">
                    <img width="150"
                         src="<?php echo get_template_directory_uri() . '/resources/img/avatar_Sarah_square.png' ?>"
                         alt="Avatar de Sarah Joiret" class="home__avatar">
                    <img width="150"
                         src="<?php echo get_template_directory_uri() . '/resources/img/avatar_leo_square.png' ?>"
                         alt="Avatar de Leo Cotteleer" class="home__avatar">
                </div>
                <div class="home__wysiwyg">
                    <?php the_content() ?><a href="./a-propos" class="home__link"
                                             title="Accéder à la page À propos pour en savoir plus à notre sujet">mieux
                        nous connaître</a>

                </div>
            </div>
        </div>
        <div class="home__capsules capsules" id="capsules">
            <h2 class="capsules__title">Capsules</h2>
            <div class="capsules__definition">
                <?php the_field('capsules-def'); ?>
            </div>
            <?php get_template_part('template-capsules'); ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>