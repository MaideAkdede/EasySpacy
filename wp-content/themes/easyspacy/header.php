<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()){
            echo 'Easy Spacy • ';
            echo bloginfo('description');
        } else {
            wp_title('Easy Spacy • ');
        } ;?>
    </title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= es_assets('css/theme.css') ?>">
    <script src="<?= es_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Easy Spacy •')); ?></h1>

    <nav class="top__menu menu">
        <h2 class="sro">Navigation</h2>
        <div class="menu__list">
            <div class="menu__separation">
                <div class="menu__item">
                    <a href="" class="menu__link">Accueil</a>
                </div>
            </div>

            <nav class="main-navigation">
                <h3 class="sro">Navigation principale</h3>
                <ul class="main-navigation__list">
                    <?php foreach (es_menu('main') as $link) : ?>
                        <li class="main-navigation__item">
                            <a href="<?= $link->url; ?>" class="main-navigation__link <?= es_bem('main-navigation__link', $link->modifiers); ?>">
                                <?= $link->label; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="menu__separation">
                <div class="menu__search search">
                    <form action="" class="search__form">
                        <input class="search__input" type="text" placeholder="Rechercher">
                        <input type="submit">
                    </form>
                </div>
                <div class="menu__logo">
                    <p>logo IG</p>
                </div>
            </div>
        </div>
    </nav>
</header>