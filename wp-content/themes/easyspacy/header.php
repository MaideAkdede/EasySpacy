<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()) {
            echo 'Bienvenue sur Easy Spacy  • ';
            echo bloginfo('description');
        } else {
            wp_title('');
            echo ' • Easy Spacy';
        }; ?>
    </title>
    <!--ASSETS-->
    <link rel="icon" sizes="32x32"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/easyspacy-60.png' ?>">
    <link rel="shortcut icon" sizes="32x32"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/easyspacy-60.png' ?>">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/easyspacy-180.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/easyspacy-300.png' ?>">
    <link rel="stylesheet" href="<?= es_assets('css/theme.css') ?>">
    <script src="<?= es_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <h1 class="header__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Easy Spacy •')); ?></h1>

    <div class="header__container">
        <h2 class="sro">Navigation</h2>

        <a href="<?= site_url(); ?>" class="menu__logo">
            <img src="<?php echo get_template_directory_uri() . '/resources/favicon/easyspacy-300.png' ?>"
                 alt="Easy Spacy (Accueil)" width="60">
        </a>
        <div class="header__mobile">
            <a href="" class="menu__search menu__logo" title="Ouvrir le formulaire de recherche"><img src="<?php echo get_template_directory_uri() . '/resources/img/loupe.svg' ?>"
                            alt="Faire une recherche"></a>
            <a href="" class="menu__open menu__logo" title="Ouvrir le menu"><img src="<?php echo get_template_directory_uri() . '/resources/img/menu.svg' ?>"
                            alt="Ouvrir le menu"></a>
        </div>

        <nav class="header__menu menu">
            <a href="" class="menu__close"><img src="<?php echo get_template_directory_uri() . '/resources/img/close-cross.svg' ?>"
                            alt="fermer le menu" height="25"></a>
            <ul class="menu__ul">
                <?php foreach (es_menu('main') as $link) : ?>
                    <li class="menu__li">
                        <a href="<?= $link->url; ?>"
                           class="menu__link <?= es_bem('main-navigation__link', $link->modifiers); ?>">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

    </div>
    <div class="header__search search">
        <?php get_search_form(); ?>
    </div>
</header>