<?php
// Fichier contenant les paramètres de configuration du site

// Création d'une constante contenant la route actuelle
define('ROUTE', request_path());

// Création d'une constante contenant l'emplacement du dossier qui contient les vues du site
define('VIEWS_DIR', __DIR__ . '/../views');