<?php

namespace App\Router;

require_once 'Controllers/Controller.php';
require_once 'Controllers/Formulario.php';
require_once 'Controllers/Persona.php';

use App\Controllers\Controller;
use App\Controllers\Formulario;
use App\Controllers\Persona;

class Rutes
{
    public function groupRutes()
    {
        return [
            'GET' => [
                '/blog'             => [Controller::class, 'index'],
                '/'                 => [Persona::class, 'index'],
                '/nueva-persona'    => [Persona::class, 'viewNewPersona'],
                '/test-kostick'     => [Formulario::class, 'evalTest2'],
                '/test-zavic'       => [Formulario::class, 'evalTest3'],

            ],
            'POST' => [
                '/create-user'      => [Persona::class, 'create'],
                '/delete-user'      => [Persona::class, 'delete'],
                '/update-user'      => [Persona::class, 'update'],
                '/create'           => [Controller::class, 'create'],
                '/update'           => [Controller::class, 'update'],
                '/delete'           => [Controller::class, 'delete'],
            ]
        ];
    }
}
