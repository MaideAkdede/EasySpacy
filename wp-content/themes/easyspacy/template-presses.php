<div class="presse__all">
    <?php
    $presse = new WP_Query([
        'post_type' => 'presse',
        'orderby' => 'date',
        'order' => 'desc'
    ]);

    if ($presse->have_posts()) : while ($presse->have_posts()) : $presse->the_post();

    $img = get_field('presse_img'); ?>

        <div class="presse__container">
            <h3 class="presse__title">
                <?= the_title(); ?>
            </h3>
            <div><?php the_field('journal'); ?></div>
            <img src="<?= $img['sizes']['thumbnail']; ?>"
                 alt="<?= $img['alt']; ?>">
            <a href="<?php the_field('article_url'); ?>">Lire l'article sur <strong><?php the_field('journal'); ?></strong></a>
        </div>
    <?php endwhile; else:?>
    <p class="empty">Aucune revue de presses n'a été ajouté</p>
    <?php endif; ?>
</div>