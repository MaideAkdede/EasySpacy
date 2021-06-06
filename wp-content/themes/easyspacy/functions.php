<?php
/* * * Return Page Numbers * * */
function numberPage($pageName)
{
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $pageName->max_num_pages,
        'prev_text' => __('« prev'),
        'next_text' => __('next »'),));
}
/* * * Return Menu Structure for Display * * */
function es_bem($base, $modifiers = [])
{
    $classes = array_map(function ($modifier) use ($base) {
        return $base . '_' . $modifier;
    }, $modifiers);
    return implode(' ', $classes);
}
/* * * Return Menu Structure * * */
function es_menu($location)
{
    $locations = get_nav_menu_locations();
    $menu = $locations[$location];
    $links = wp_get_nav_menu_items($menu);

    $links = array_map(function ($result) {
        global $post;
        $link = new \stdClass();
        $link->url = $result->url;
        $link->label = $result->title;
        $link->modifiers = [];

        if (intval($result->object_id) === intval($post->ID)) {
            $link->modifiers[] = 'current';
        }
        return $link;
    }, $links);
    return $links;
}
/* * * Register navigation menus * * */
add_action('init', 'es_custom_navigation_menus');

function es_custom_navigation_menus()
{
    register_nav_menus([
        'main' => 'Navigation principale'
    ]);
}

/* * * Register Multiple Custom Post Type * * */
add_action('init', 'es_custom_post_type');

function es_custom_post_type()
{
    register_post_type('capsule', [
        'label' => 'Capsules',
        'labels' => [
            'singular_name' => 'Capsule',
            'add_new' => 'Ajouter une nouvelle capsule',
            'add_new_item' => 'Nouvelle capsule',
        ],
        'description' => 'Liste de toutes nos capsules',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => ['title', 'editor'],
        'rewrite' => [
            'slug' => 'capsules'
        ]
    ]);
    register_post_type('news', [
        'label' => 'News',
        'labels' => [
            'singular_name' => 'One News',
            'add_new' => 'Ajouter une nouvelle News',
            'add_new_item' => 'Nouvelle News',
        ],
        'description' => 'Liste de toutes nos News',
        'public' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => ['title', 'editor'],
        'rewrite' => [
            'slug' => 'news'
        ]
    ]);
    register_post_type('presse', [
        'label' => 'Presse',
        'labels' => [
            'singular_name' => 'presse',
            'add_new' => 'Ajouter une nouvelle revue de presse',
            'add_new_item' => 'Nouvelle revue de presse',
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