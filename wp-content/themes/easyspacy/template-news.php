<div class="news__all">
    <?php
    $news = new WP_Query([
        'post_type' => 'news',
        'orderby' => 'date',
        'order' => 'desc'
    ]); ?>
    <?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
        <?php $newsImage = get_field('news-image'); ?>
        <div class="news__news">
            <img src="<?= $newsImage['sizes']['thumbnail']; ?>"
                 alt="<?= $newsImage['alt']; ?>">
            <h3 class="projects__name"><?php the_title(); ?></h3>
            <div class="news__excerpt">
                <?php the_field('excerpt'); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="news__link">lire la news</a>
        </div>
    <?php endwhile; ?>
        <div class="pagination">
            <?php numberPage($news);?>
        </div>
    <?php endif; ?>
</div>