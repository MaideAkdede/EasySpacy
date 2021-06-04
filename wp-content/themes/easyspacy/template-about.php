<?php /* Template Name: Page À Propos */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="about">
        <h2 class="about__title"><?php the_title(); ?></h2>
        <div class="about__wysiwyg"><?php the_content(); ?></div>

        <?php $avatar = get_field('about-avatar-one'); ?>
        <div class="about__avatar" style="height: 300px; width: 300px; overflow: hidden">
            <img style="width: 300px; height: 300px; object-fit: cover;"
                    src="<?= $avatar['sizes']['medium']; ?>"
                 alt="<?= $avatar['alt']; ?>"
                 class="avatar__img"
                 srcset="<?= $avatar['sizes']['medium']; ?> 300w,
                         <?= $avatar['sizes']['medium_large']; ?> 768w,
                         <?= $avatar['sizes']['large']; ?> 1024w"
            />
        </div>

        <?php $avatar = get_field('about-avatar-two'); ?>
        <div class="about__avatar">
            <img src="<?= $avatar['sizes']['medium']; ?>"
                 alt="<?= $avatar['alt']; ?>"
                 class="avatar__img"
                 srcset="<?= $avatar['sizes']['medium']; ?> 300w,
                         <?= $avatar['sizes']['medium_large']; ?> 768w,
                         <?= $avatar['sizes']['large']; ?> 1024w"
            />
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>