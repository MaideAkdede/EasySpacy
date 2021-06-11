<div class="news__all">
    <?php
    $news = new WP_Query([
        'post_type' => 'new',
        'orderby' => 'date',
        'order' => 'desc'
    ]); ?>
    <?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
        <?php $newsImage = get_field('news-image'); ?>
        <div class="news__news">
            <img src="<?= $newsImage['sizes']['medium']; ?>"
                 width="300" height="300"
                 alt="<?= $newsImage['alt']; ?>">
            <a href="<?php the_permalink(); ?>" class="news__link" title="lire la news <?= get_the_title(); ?>">
                <span class="sro">lire la news <?= get_the_title(); ?></span>
                <h3 class="projects__name"><?php the_title(); ?></h3>
                <?php the_field('excerpt'); ?>
                <p class="date"><?= strftime('%A, %e %B %G', strtotime(get_the_date())); ?></p>
            </a>
        </div>
    <?php endwhile; ?>
        <div class="pagination">
            <?php numberPage($news); ?>
        </div>
    <?php endif; ?>
</div>