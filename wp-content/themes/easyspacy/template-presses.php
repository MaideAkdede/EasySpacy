<div class="presse__all" id="presse">
    <h2 class="presse__all__title">Nous apparaissons dans la presse</h2>
    <div class="presse__wrapper">
        <?php
        $presse = new WP_Query([
            'post_type' => 'presse',
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