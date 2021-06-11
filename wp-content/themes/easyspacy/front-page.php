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
        <div class="presse__all">
            <h2 class="presse__all__title presse__all__title__home">
                <a href="./news/#presse" title="Voir toutes nos apparissions dans la presse">Nous apparaissons dans la presse <span> > </span></a>
            </h2>
            <div class="presse__wrapper">
                <?php
                $presse = new WP_Query([
                    'post_type' => 'presse',
                    'posts_per_page'=>'3',
                    'orderby' => 'date',
                    'order' => 'desc'
                ]);
                if ($presse->have_posts()) : while ($presse->have_posts()) : $presse->the_post();
                    $img = get_field('presse_img');
                    ?>
                    <div class="presse__container">
                        <img src="<?= $img['sizes']['medium']; ?>"
                             alt="<?= $img['alt']; ?>"
                             width="300" height="auto">
                        <a href="<?php the_field('article_url'); ?>" title="Accéder à l‘article sur <?php the_field('journal'); ?>">
                            <span class="sro">Lire l‘article sur <?php the_field('journal'); ?></span>
                            <h3 class="presse__title">
                                <?= the_title(); ?>
                            </h3>
                            <div><?php the_field('journal'); ?></div>
                        </a>
                    </div>
                <?php endwhile; else: ?>
                    <p class="empty">Aucune revue de presses n'a été ajouté</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>