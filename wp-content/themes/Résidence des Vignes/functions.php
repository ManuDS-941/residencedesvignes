<?php 

add_action('widgets_init','residencedesvignes_init_sidebar');
add_action('init','residencedesvignes_init_menu');

function residencedesvignes_init_sidebar()

{
    register_sidebar( array (
        'name' =>__('titre-accueil','residencedesvignes'),
        'id' => 'titre-accueil',
        'description' => __('Titre d\'accueil','residencedesvignes')
    ));

    register_sidebar( array (
        'name' =>__('image-accueil','residencedesvignes'),
        'id' => 'image-accueil',
        'description' => __('Image d\'accueil','residencedesvignes')
    ));



    register_sidebar( array (
        'name' =>__('page-droite','residencedesvignes'),
        'id' => 'page-droite',
        'description' => __('Region à droite de la Page d\'Accueil','residencedesvignes')
    ));



    register_sidebar( array (
        'name' =>__('bas gauche','residencedesvignes'),
        'id' => 'bas-gauche',
        'description' => __('Region en bas a gauche','residencedesvignes')
    ));
    register_sidebar( array (
        'name' =>__('bas droite','residencedesvignes'),
        'id' => 'bas-droite',
        'description' => __('Region en bas a droite','residencedesvignes')
    ));

}

function residencedesvignes_init_menu()
{
    // register_nav_menu('primary',__('Primary Menu','residencedesvignes'));
    



register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

}








