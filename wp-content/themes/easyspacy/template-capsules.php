<div class="capsules__container">
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
    <h3 class="capsules__container__title"><?php the_title(); ?></h3>
        <img src="<?= $thumbnail['sizes']['thumbnail']; ?>"
             alt="<?= $thumbnail['alt']; ?>"
             srcset="<?= $thumbnail['sizes']['thumbnail']; ?> 150w,
             <?= $thumbnail['sizes']['medium']; ?> 300w,
             <?= $thumbnail['sizes']['large']; ?> 2000w">
    <div class="capsules__difficulty">
        <p><span>Difficulté : </span><?php the_field('difficulty'); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="capsules__link">lire la capsules</a>
<?php endwhile;
        numberPage($capsules);

        else: ?>
        <p>Aucune capsule pour le moment </p>
<?php endif; ?>
</div>