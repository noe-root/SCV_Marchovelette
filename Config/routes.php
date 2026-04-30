<?php
// ─── Routeur ──────────────────────────────────────────────────────────────────
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$routes = [
    'home'        => 'HomeController',
    'club'        => 'ClubController',
    'evenements'  => 'EvenementsController',
    'contact'     => 'ContactController',
    'palmares'    => 'PalmaresController',
];

if (array_key_exists($page, $routes)) {
    $controllerName = $routes[$page];
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        $controller->index();
    }
} else {
    // 404
    $controller = new HomeController();
    $controller->notFound();
}