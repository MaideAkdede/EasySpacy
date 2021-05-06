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
    <link rel="stylesheet" href="<?= dw_assets('css/theme.css') ?>">
    <script src="<?= dw_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Easy Spacy •')); ?></h1>

    <nav class="top__menu menu">
        <div class="menu__list">
            <div class="menu__separation">
                <div class="menu__item">
                    <a href="" class="menu__link">Accueil</a>
                </div>
            </div>
            <div class="menu__separation">
                <div class="menu__item">
                    <a href="" class="menu__link">Capsules</a>
                </div>
                <div class="menu__item">
                    <a href="" class="menu__link">News</a>
                </div>
                <div class="menu__item">
                    <a href="" class="menu__link">À propos</a>
                </div>
                <div class="menu__item">
                    <a href="" class="menu__link">Contact</a>
                </div>
            </div>
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