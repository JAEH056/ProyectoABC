<?php

namespace App\Router;

require_once 'Controllers/Controller.php';
require_once 'Controllers/Formulario.php';
require_once 'Controllers/User.php';

use App\Controllers\Controller;
use App\Controllers\Formulario;
use App\Controllers\User;

class Rutes
{
    public function groupRutes()
    {
        return [
            'GET' => [
                '/blog'             => [Controller::class, 'index'],
                '/'                 => [User::class, 'index'],
                '/nuevo-usuario'    => [User::class, 'viewNewUser'],
                '/test2'            => [Formulario::class, 'evalTest2'],
                '/test3'            => [Formulario::class, 'evalTest3'],

            ],
            'POST' => [
                '/create-user'      => [User::class, 'create'],
                '/delete-user'      => [User::class, 'delete'],
                '/update-user'      => [User::class, 'update'],
                '/create'           => [Controller::class, 'create'],
                '/update'           => [Controller::class, 'update'],
                '/delete'           => [Controller::class, 'delete'],
            ]
        ];
    }
}
