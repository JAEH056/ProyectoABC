<?php

namespace App\Router;

require_once 'Controllers/Controller.php';
require_once 'Controllers/Formulario.php';
require_once 'Controllers/KostickTest.php';
require_once 'Controllers/Persona.php';

use App\Controllers\Controller;
use App\Controllers\Formulario;
use App\Controllers\KostickTest;
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
                '/test-kostick'     => [KostickTest::class, 'index'],
                '/actualizar-kostick' => [KostickTest::class, 'viewEditTest'],
                '/test-zavic'       => [Formulario::class, 'evalTest3'],

            ],
            'POST' => [
                '/create-user'      => [Persona::class, 'create'],
                '/delete-user'      => [Persona::class, 'delete'],
                '/update-user'      => [Persona::class, 'update'],
                '/create-kostick'   => [KostickTest::class, 'create'],
                '/update-kostick'   => [KostickTest::class, 'update'],
                '/delete-kostick'   => [KostickTest::class, 'delete'],
                '/create'           => [Controller::class, 'create'],
                '/update'           => [Controller::class, 'update'],
                '/delete'           => [Controller::class, 'delete'],
            ]
        ];
    }
}
