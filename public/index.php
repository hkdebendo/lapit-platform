<?php

// Afficher toutes les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Démarrage de la session
session_start();

// Chargement de l'autoload et des fichiers du core
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . '/../core/helpers.php';


use Core\Controller;

// Récupération de l'URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$route = '/' . trim(str_replace($scriptName, '', $uri), '/');

// Route basique: /controller/action/params...
$segments = explode('/', trim($route, '/'));

$controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
$actionName = $segments[1] ?? 'index';
$params = array_slice($segments, 2);

$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $fullClass = '\App\\Controllers\\' . $controllerName;
    if (class_exists($fullClass)) {
        $controller = new $fullClass();
        if (method_exists($controller, $actionName)) {
            call_user_func_array([$controller, $actionName], $params);
            exit;
        }
    }
}

// 404 si non trouvé
header("HTTP/1.0 404 Not Found");
echo "Page non trouvée";
?>



