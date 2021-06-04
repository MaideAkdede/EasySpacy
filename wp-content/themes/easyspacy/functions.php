<?php
/* * * Register Multiple Custom Post Type * * */
add_action('init', 'es_custom_post_type');

function es_custom_post_type() {
    register_post_type('capsule', [
        'label' => 'Capsules',
        'labels' => [
            'singular_name' => 'Capsule',
            'add_new' => 'Nouvelle capsule',
            'add_new_item' => 'Ajouter une nouvelle capsule',
        ],
        'description' => 'Liste de toutes nos capsules',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => ['title','editor'],
        'rewrite' => [
            'slug' => 'capsules'
        ]
    ]);
    register_post_type('news', [
        'label' => 'News',
        'labels' => [
            'singular_name' => 'One News',
            'add_new' => 'Nouvelle News',
            'add_new_item' => 'Ajouter une nouvelle News',
        ],
        'description' => 'Liste de toutes nos News',
        'public' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => ['title','editor'],
        'rewrite' => [
            'slug' => 'news'
        ]
    ]);
    register_post_type('presse', [
        'label' => 'Presse',
        'labels' => [
            'singular_name' => 'presse',
            'add_new' => 'Nouvelle revue de presse',
            'add_new_item' => 'Ajouter une nouvelle revue de presse',
        ],
        'description' => 'Liste de toutes nos revues de presse',
        'public' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-camera',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'presse'
        ]
    ]);
}

/* * * Return a compiled assets URI * * */
function es_assets($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* * * disable the wordpress gutenberg editor * * */
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}