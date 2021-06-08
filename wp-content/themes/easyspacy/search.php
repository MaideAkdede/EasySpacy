<?php get_header(); ?>
<?php
$research = $_GET['s'];
?>
    <main class="search__page">
        <h2 class="search__title">Je cherche : <span><?= $research; ?></span></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $link = get_permalink(); ?>
        <div class="search__result">
            <h3><a href="<?= $link ?>"><?php the_title(); ?></a></h3>
            <div class="content__wysiwyg"><?= wp_trim_words(get_the_content(), 35, '... <a href="'.$link.'">Continuer à lire</a>'); ?></div>
        </div>

        <?php endwhile;
        else:?>
        <p>Rien trouvé :(</p>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>