<?php

namespace App\Router;

require_once 'Controllers/Controller.php';
require_once 'Controllers/Formulario.php';

use App\Controllers\Controller;
use App\Controllers\Formulario;

class Rutes
{

    function groupRutes()
    {
        return [
            'GET' => [
                '/'               => [Controller::class, 'index'],
                '/formulario'     => [Formulario::class, 'index']
            ],
            'POST' => [
                '/create' => [Controller::class, 'create'],
                '/update' => [Controller::class, 'update'],
                '/delete' => [Controller::class, 'delete'],
            ]
        ];
    }
}
