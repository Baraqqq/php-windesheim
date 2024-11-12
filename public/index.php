<?php

// Foutmeldingen inschakelen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Controleer het pad naar autoload.php
$autoloadPath = realpath(__DIR__ . '/../vendor/autoload.php');
require_once $autoloadPath;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

use App\Controllers\PageController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;

// Routes instellen
$routes = new RouteCollection();
$routes->add('home', new Route('/', ['_controller' => 'App\Controllers\PageController::homeAction']));
$routes->add('contact', new Route('/contact', ['_controller' => 'App\Controllers\PageController::contactAction']));
$routes->add('about', new Route('/about', ['_controller' => 'App\Controllers\PageController::aboutAction']));
$routes->add('blogs', new Route('/blogs', ['_controller' => 'App\Controllers\PageController::blogsAction']));
$routes->add('projects', new Route('/projects', ['_controller' => 'App\Controllers\PageController::projectsAction']));
$routes->add('project', new Route('/project', ['_controller' => 'App\Controllers\PageController::projectAction']));
$routes->add('skills', new Route('/skills', ['_controller' => 'App\Controllers\PageController::skillsAction']));
$routes->add('login', new Route('/admin/login', ['_controller' => 'App\Controllers\PageController::loginAction']));
$routes->add('admin_dashboard', new Route('/admin', ['_controller' => 'App\Controllers\PageController::adminDashboardAction']));
$routes->add('manage_about', new Route('/admin/manage_about', ['_controller' => 'App\Controllers\PageController::manageAboutAction']));
$routes->add('manage_projects', new Route('/admin/manage_projects', ['_controller' => 'App\Controllers\PageController::manageProjectsAction']));
$routes->add('manage_skills', new Route('/admin/manage_skills', ['_controller' => 'App\Controllers\PageController::manageSkillsAction']));
$routes->add('logout', new Route('/admin/logout', ['_controller' => 'App\Controllers\PageController::logoutAction']));

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