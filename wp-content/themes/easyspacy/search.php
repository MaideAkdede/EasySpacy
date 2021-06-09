<?php get_header(); ?>
<?php
$research = $_GET['s'];
?>
    <main class="search__page">
        <h2 class="search__title">Je cherche : <span><?= $research; ?></span></h2>
        <div class="search__empty__form">
            <h3 class="sro">Réeffectuer une recherche</h3>
            <?php get_search_form(); ?>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $link = get_permalink(); ?>
            <div class="search__result">
                <h3><a href="<?= $link ?>" alt="lire l‘article <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <div class="content__wysiwyg"><?= wp_trim_words(get_the_content(), 35, '... <a title="Lire l‘article '. get_the_title() .'" class="cta search__cta" href="' . $link . '">Continuer à lire</a>'); ?></div>
            </div>

        <?php endwhile;
        else:?>
            <div class="contact__wysiwyg">
                Oh, nous sommes vraiment navrés, nous n'avons rien trouvé correspondant à <span class="not-found"><?= $research; ?></span>...
                <div class="contact__bulle">
                    <img width="100" src="<?php echo get_template_directory_uri() . '/resources/img/bulle_bot.png' ?>" alt="">
                </div>
                <div class="contact__avatars">
                    <img width="100"
                         src="<?php echo get_template_directory_uri() . '/resources/img/avatar_leo_square.png' ?>"
                         alt="Avatar de Leo Cotteleer" class="contact__avatar">
                    <img
                            src="<?php echo get_template_directory_uri() . '/resources/img/avatar_Sarah_square.png' ?>"
                            alt="Avatar de Sarah Joiret" class="contact__avatar">
                </div>
            </div>

        <?php endif; ?>
    </main>
<?php get_footer(); ?>