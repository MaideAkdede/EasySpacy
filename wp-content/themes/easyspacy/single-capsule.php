<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="capsule">
        <div class="capsule__content">
            <h2 class="capsule__title"><?php the_title(); ?></h2>
            <div class="capsule__images">
                <?php for ($i = 1; $i <= 15; $i++):
                    $image = get_field('image_' . $i);
                    if (!empty($image)):
                        ?>
                        <img class="capsule__image"
                             src="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>"
                             srcset="<?= $image['sizes']['medium']; ?> 300w,
                         <?= $image['sizes']['medium_large']; ?> 768w,
                         <?= $image['sizes']['large']; ?> 1024w">
                    <?php endif; endfor; ?>
            </div>
        </div>
        <div class="capsule__comments comments">
            <div class="comments__form">
                <?php comments_template(); ?>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>