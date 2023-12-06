<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


// Fonction pour ajouter le lien admin au menu principal
function ajouter_lien_admin_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
        // Ajouter le lien vers le tableau de bord
        $items .= '<li class="ajout-admin-menu"><a href="' . admin_url() . '">Admin</a></li>';
    }

    return $items;
}

// Ajouter le filtre pour le hook wp_nav_menu_items
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );