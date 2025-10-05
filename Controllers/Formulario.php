<?php

namespace App\Controllers;

require_once 'Controllers/BaseController.php';

use App\Controllers\BaseController;

class Formulario extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('formulario', [
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }
}
