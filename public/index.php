<?php

// Foutmeldingen inschakelen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoloader
require_once '../vendor/autoload.php';

session_start();

if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

use App\Controllers\ProfileController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

// Routes instellen
$routes = new RouteCollection();
$routes->add('profile', new Route('/profile', ['_controller' => 'ProfileController::profileAction']));
$routes->add('profile_form', new Route('/profile/form', ['_controller' => 'ProfileController::profileFormAction']));
$routes->add('home', new Route('/', ['_controller' => 'ProfileController::indexAction']));

// Verzoek URI ophalen
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Routes afhandelen
if ($uri === '/' || $uri === '/index.php') {
    $controller = new ProfileController();
    $controller->indexAction();
} elseif ($uri === '/profile') {
    $controller = new ProfileController();
    $controller->profileAction();
} elseif ($uri === '/profile/form') {
    $controller = new ProfileController();
    $controller->profileFormAction();
} else {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
}

?>