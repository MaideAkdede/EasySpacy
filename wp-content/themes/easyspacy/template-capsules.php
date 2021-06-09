<div class="capsules__wrapper">
    <?php
    $capsules = new WP_Query([
        'post_type' => 'capsule',
        'orderby' => 'date',
        'order' => 'desc'
    ]);
    if ($capsules->have_posts()) : while ($capsules->have_posts()) :
        $capsules->the_post();

        $thumbnail = get_field('image_1');
        ?>
        <div class="capsules__container">
            <h3 class="capsules__container__title sro"><?php the_title(); ?></h3>
            <img class="capsules__img"
                 src="<?= $thumbnail['sizes']['thumbnail']; ?>"
                 alt="<?= $thumbnail['alt']; ?>"
                 srcset="<?= $thumbnail['sizes']['thumbnail']; ?> 150w,
             <?= $thumbnail['sizes']['medium']; ?> 300w,
             <?= $thumbnail['sizes']['large']; ?> 2000w">
            <div class="capsules__difficulty">
                <p><span>Difficulté : </span><?php the_field('difficulty'); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" class="capsules__link" title="Lire l‘article : <?= get_the_title(); ?>"><span
                        class="sro">Lire l‘article : <?= get_the_title(); ?></span></a>
        </div>
    <?php endwhile;
    else: ?>
        <p>Aucune capsule pour le moment </p>
    <?php endif; ?>
</div>
<div class="numbers"><?php numberPage($capsules); ?></div>