<!doctype html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <style>  </style>
</head>
<body <?php body_class(); ?>>

<!-- Haut -->
<div class="container-fluid">


    <div class="row justify-content-evenly">
        <div class="col-md-12 titre-accueil">
            <?php dynamic_sidebar('titre-accueil'); ?>
            <?php bloginfo('name'); ?>
        </div>

        <div class="col-md-6 align-self-center">
            <div class="row justify-content-end mr-1 recherche">
                <!-- Fonction de recherche -->
                <?php get_search_form(); ?>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-12 image-accueil">
            <?php dynamic_sidebar('image-accueil'); ?>
        </div>
    </div>

    <!-- Menu -->

    <div class="row menu-navigation">
        <nav class="col-md-12 navbar navbar-expand-lg navbar-light bg-light icon icon-angle-down">
            <!-- <a class="navbar-brand" href="#"></a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-link justify-content-end" id="navbarSupportedContent">
                <!-- Déclaration du menu -->
                <?php  wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </div>
        </nav>

    </div>
</div>  

<div class="container-fluid">

    <section class="">

