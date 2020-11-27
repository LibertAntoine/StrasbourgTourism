<?php  

if ( ! function_exists('Plus_dinfos') ) { // Définit la fonction uniquement si elle n'existe pas déja ailleurs, pour éviter un problème.

// Register Custom Post Type
function Plus_dinfos() { // fonction définissant le post type (nom personnalisable)

	$labels = array(
		'name'                  => _x( 'Plus d\'infos', 'Post Type General Name', 'text_domain' ), // Nom de référence du post type au pluriel
		'singular_name'         => _x( 'Plus d\'infos', 'Post Type Singular Name', 'text_domain' ), // Nom de référence du post type au singulier.
		'menu_name'             => __( 'Plus d\'infos', 'text_domain' ), // Nom de l'onglet dans le back-office.
		'name_admin_bar'        => __( 'Plus d\'infos', 'text_domain' ), // Nom de l'onglet dans la navbar en top.
		'archives'              => __( 'Archives', 'text_domain' ),
		'attributes'            => __( 'Réglages', 'text_domain' ),
		'parent_item_colon'     => __( 'Articles', 'text_domain' ),
		'all_items'             => __( 'Voir les articles', 'text_domain' ), // Nom du sous onglet du back-office pour voir tous les articles 
		'add_new_item'          => __( 'Créer un nouvelle article', 'text_domain' ), // Nom en en-tête de la page de création d'un nouvel article.
		'add_new'               => __( 'Ajouter un article', 'text_domain' ), // Nom du sous onglet du back-office pour créer un nouvel article.
		'new_item'              => __( 'Nouveau item', 'text_domain' ),
		'edit_item'             => __( 'Editer item', 'text_domain' ), // Nom en en-tête de la page quand on édite un article existant.
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'Visualiser l\'article', 'text_domain' ), // Nom dans la navbar admin quand on est sur la fiche d'un article pour le visualiser dans une page.
		'view_items'            => __( 'Visualiser les articles', 'text_domain' ), // Nom dans la navbar admin quand on est sur la liste des articles pour les visualiser dans une page.
		'search_items'          => __( 'Rechercher un article', 'text_domain' ), // Nom du bouton pour chercher un article quand on est sur la liste des articles
		'not_found'             => __( 'Aucun article trouvé', 'text_domain' ), // Nom s'affichant si la liste des articles est vide (pendant une recherche par exemple).
		'not_found_in_trash'    => __( 'Aucun article trouvé dans la corbeille', 'text_domain' ), // Nom s'affichant si la recherche dans la corbeille n'a rien donnée.
		'featured_image'        => __( 'Featured Image', 'text_domain' ), // Nom de la section de la fiche de l'article contenant la page de couverture.
		'set_featured_image'    => __( 'Utiliser une image de couverture', 'text_domain' ), // Nom sur le bouton qui permet d'ajouter une image de couverture.
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ), // Nom sur le bouton qui permet de retirer l'image de couverture.
		'use_featured_image'    => __( '', 'text_domain' ), 
		'insert_into_item'      => __( 'Inserer dans l\'article', 'text_domain' ), // Nom sur le bouton pour ajouter un média dans l'article.
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),

	);
	$args = array(
		'label'                 => __( 'Plus d\'infos', 'text_domain' ), // Définie le nom 
		'description'           => __( 'Elements dinformation sur la ville de Strasbourg', 'text_domain' ),
		'menu_icon'      		=> __( 'dashicons-format-aside' ), // Nom l'icone du post type dans le menu back office, soit avec un nom dashicons soit une URL
		'labels'                => $labels, // label pour appeler les éléments du post type renseigné au dessus.
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false, // Si false se comporte comme des posts, si true comme des pages.
		'public'                => true, // Détermine si les éléments du post type peuvent être rendu public.
		'show_ui'               => true, // Détermine si le post type peut être vu par les utilisateurs.
		'show_in_menu'          => true, // Détermine si on voit le post type dans le menu back office
		'menu_position'         => 12, // Détermine la position du post type dans le menu back office (le 1 est le plus en haut) 
		'show_in_admin_bar'     => true, // Détermine si on a les options lié au post type dans la navbar en top.
		'show_in_nav_menus'     => true, // Détermine si on voit le post type dans le menu back office
		'can_export'            => true, 
		'has_archive'           => true,
		'exclude_from_search'   => true, // Détermine si les contenus sont indexés pour les recherches sur le site.
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'plus_infos', $args );

}
add_action( 'init', 'Plus_dinfos', 10 ); // appel la fonction (en priorité 10 dans la liste d'éxecution, 1 le plus prioritaire)

}


add_action( 'init', 'wpm_add_taxonomies', 0 );

function wpm_add_taxonomies() {

	// Taxonomie thématique pour le post type Plus d'infos 

	$labels_thematique = array(
		'name'                       => _x( 'Thématiques', 'taxonomy general name'),
		'singular_name'              => _x( 'Thématique', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une thématique'),
		'popular_items'              => __( 'Thématique populaires'),
		'all_items'                  => __( 'Toutes les thématiques'),
		'edit_item'                  => __( 'Editer une thématique'),
		'update_item'                => __( 'Mettre à jour une thématique'),
		'add_new_item'               => __( 'Ajouter une nouvelle thématique'),
		'new_item_name'              => __( 'Nom de la nouvelle thématique'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une thématique'),
		'choose_from_most_used'      => __( 'Choisir parmi les thématiques les plus utilisées'),
		'not_found'                  => __( 'Pas de thématique trouvée'),
		'menu_name'                  => __( 'Thématique'),
	);

	$args_thematique = array(
		'hierarchical'          => true,
		'labels'                => $labels_thematique,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'thematique' ),
	);

	register_taxonomy( 'thematique', 'plus_infos', $args_thematique );
}

?>