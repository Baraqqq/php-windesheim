<?php

// Foutmeldingen inschakelen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Controleer het pad naar autoload.php
$autoloadPath = realpath(__DIR__ . '/../vendor/autoload.php');
require_once $autoloadPath;

session_start();

if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

use App\Controllers\PageController;
use App\Controllers\ProfileController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;

// Routes instellen
$routes = new RouteCollection();
$routes->add('home', new Route('/home', ['_controller' => 'App\Controllers\ProfileController::homeAction']));
$routes->add('contact', new Route('/contact', ['_controller' => 'App\Controllers\PageController::contactAction']));
$routes->add('profile', new Route('/profile', ['_controller' => 'App\Controllers\ProfileController::profileAction']));
$routes->add('profile_form', new Route('/profile/form', ['_controller' => 'App\Controllers\ProfileController::profileFormAction']));
$routes->add('second_home', new Route('/', ['_controller' => 'App\Controllers\PageController::secondHomeAction']));

// Verzoek URI ophalen
$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);

try {
    $parameters = $matcher->match($context->getPathInfo());
    list($controller, $action) = explode('::', $parameters['_controller']);
    $controller = new $controller();
    $controller->$action($routes); // Geef de $routes door als argument
} catch (Symfony\Component\Routing\Exception\ResourceNotFoundException $e) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
} catch (Exception $e) {
    header("HTTP/1.0 500 Internal Server Error");
    echo "An error occurred: " . $e->getMessage();
}

?>