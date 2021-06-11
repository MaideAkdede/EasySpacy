<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="capsule">
        <h2 class="capsule__title"><?php the_title(); ?></h2>
        <div class="capsule__content">
            <div>
                <div class="capsule__images">
                    <?php for ($i = 1; $i <= 15; $i++):
                        $image = get_field('image_' . $i);
                        if (!empty($image)):
                            ?>
                            <img width="500" height="auto"
                                 class="capsule__image"
                                 id="<?= $i ?>"
                                 src="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>"
                                 srcset="<?= $image['sizes']['medium']; ?> 300w,
                         <?= $image['sizes']['medium_large']; ?> 768w,
                         <?= $image['sizes']['large']; ?> 1024w">
                        <?php endif; endfor; ?>
                    <img alt="icon" src="<?php echo get_template_directory_uri() . '/resources/img/slide.svg' ?>"
                         width="36" height="auto" class="slider__icon">
                </div>
                <div class="slider__numbers">
                    <?php for ($i = 1; $i <= 15; $i++):
                        $image = get_field('image_' . $i);
                        if (!empty($image)):
                            ?>
                            <a class="slider__btn" href="#<?= $i ?>" title="Aller à la <?= $i ?> capsule"><?= $i ?></a>
                        <?php endif; endfor; ?>
                </div>
            </div>
            <div class="capsule__wysiwyg">
                <div class="capsule__info">
                    <p class="difficulty"><span>Difficulté : </span><?php the_field('difficulty'); ?></p>
                    <p class="date"><?= strftime('%A, %e %B %G', strtotime(get_the_date())); ?></p>
                </div>
                <div class="capsule__info">
                    <p class="category"><span>Catégorie : </span><?php the_field('category'); ?></p>
                    <a class="ig__link" href="<?php the_field("ig-link"); ?>"
                       title="Voir le post <?php the_title(); ?> sur instagram">
                        <img src="<?php echo get_template_directory_uri() . '/resources/img/instagram-small.svg' ?>"
                             width="16" height="16" alt="Instagram Logo">
                        Voir le post instagram</a>
                </div>
                <?php the_content(); ?>
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