<?php

// Espace de nom correspondant à l'emplacement physique du fichier dans le projet (dans le dossier "src")
namespace Controllers;

/**
 * Classe contenant tous les contrôleurs de notre site
 */
class MainController{
    /**
     * Contrôleur de la page d'accueil
     */
    public function home(): void
    {
        // Charge la vue "home.php" du dossier "views"
        require VIEWS_DIR . '/home.php';
    }

    /**
     * Contrôleur de la page 404
     */
    public function page404(): void
    {
        // Modifie le code HTTP pour qu'il soit bien = 404 et non 200
        header('HTTP/1.1 404 Not Found');

        // Charge la vue "404.php" du dossier "views"
        require VIEWS_DIR . '/404.php';
    }
}