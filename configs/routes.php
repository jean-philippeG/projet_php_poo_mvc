<?php

// Importation et inclusion de la CLASS "MainController" qui est dans la dossier "src/Controllers"
use Controllers\MainController;

// On instancie le contrôleur général qui contient les contrôleurs de toutes les pags du site
$mainController = new MainController();

// Liste des routes avec leur contrôleur
// Chaque URL correspond à une nouvelle page du site
// "default" est la page par défaut si aucune autre page ne correspond à l'URL demandée (page 404)
switch (ROUTE){
    // Route de la page d'accueil
    case '/';
        $mainController->home();
    break;

    // Route de la page d'inscription
    case '/creer-un-compte/';
        $mainController->register();
        break;

    // Route de la page de connexion
    case '/connexion/';
        $mainController->login();
        break;

    // Si aucune des URLs précédentes ne match, c'est cette page qui sera appelée par défaut
    default:
        $mainController->page404();
    break;
}