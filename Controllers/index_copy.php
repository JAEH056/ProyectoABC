<?php

require_once 'Controllers/Controller.php';

use App\Controllers\Controller;

// Obtener la ruta solicitada (por ejemplo, ?action=create)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la ruta desde PATH_INFO
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $home = new Controller();

    if (!post($path)) {
        $_SESSION['error'] = "La ruta: $path no existe; El metodo/controlador no existe.";
        $home->index();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener la ruta desde PATH_INFO
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $home = new Controller();

    if (!get($path)) {
        $_SESSION['error'] = "La ruta: $path no existe; El metodo/controlador no existe.";
        $home->index();
    }
}

/**
 * Realiza el mapeo de rutas personalizadas (GET) a métodos del controlador.
 * @param string $route Cadena de la ruta solicitada
 */
function get($route)
{
    $routes = [
        '/' => [Controller::class, 'index'],
    ];

    if (array_key_exists($route, $routes)) {
        $controller = new $routes[$route][0]();
        $method = $routes[$route][1];

        if (method_exists($controller, $method)) {
            $controller->$method();
            return true;
        }
    } else {
        http_response_code(404);
        $_SESSION['error'] = "La ruta no existe: El metodo/controlador no existe.";
        return false;
    }
}

/**
 * Realiza el mapeo de rutas personalizadas (POST) a métodos del controlador.
 * @param string $route Cadena de la ruta solicitada
 */
function post($route)
{
    // Definir las rutas y el controlador asociado
    $routes = [
        'create' => [Controller::class, 'create'],
        'read'   => [Controller::class, 'read'],
        'update' => [Controller::class, 'update'],
        'delete' => [Controller::class, 'delete'],
    ];
    if (array_key_exists($route, $routes)) {
        $controller = new $routes[$route][0]();
        $method = $routes[$route][1];

        if (method_exists($controller, $method)) {
            $controller->$method();
            return true;
        }
    } else {
        http_response_code(404);
        $_SESSION['error'] = "La ruta no existe: El metodo/controlador no existe.";
        return false;
    }
}
