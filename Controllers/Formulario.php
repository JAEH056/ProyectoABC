<?php

namespace App\Controllers;

require_once 'Models/PreguntasModel.php';
require_once 'Controllers/BaseController.php';

use App\Controllers\BaseController;
use App\Models\PreguntasModel;

class Formulario extends BaseController
{

    private $eval2;
    private $eval3;
    public function __construct()
    {
        parent::__construct();
        $this->eval2 = new PreguntasModel();
        $this->eval3 = new PreguntasModel();
    }

    public function index()
    {
        $this->render('usuario');
    }

    public function vistaFormularios()
    {
        $this->render('formulario');
    }

    /**
     * Muestra el formulario de preguntas (Test 3) ya renderizado
     */
    public function formularioTest3()
    {
        $datosTest = self::datosFormTest3();

        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        return $this->render('Formulario/campoTest3', [
            'mensaje' => $mensaje,
            'error' => $error,
            'datosTest' => $datosTest,
        ]);
    }

    /**
     * Sanitiza los datos del Test3
     * @return array{descripcion: string, preguntas: array}
     */
    public function datosFormTest3(): array
    {
        $formPreguntas = $this->eval3->getEvalTest3();

        $dataForm = [];
        foreach ($formPreguntas as $pg => $pregunta) {
            $dataItem = [
                'pregunta' => $pregunta['pregunta'],
                'opciones' => []
            ];

            $pieces = explode("/", $pregunta['opciones']);
            foreach ($pieces as $op) {
                $dataItem['opciones'][] = [
                    'campo' => trim($op),
                    'grupo' => 'grupo' . ($pg + 1),
                    'nombre' => strtolower(preg_replace('/[^a-z0-9_]/', '', str_replace(' ', '_', trim($op)))) // genera nombre dinámico
                ];
            }

            $dataForm[] = $dataItem;
        }
        return $dataForm;
    }

    /**
     * Muestra el formulario de preguntas (Test 2) ya renderizado
     */
    public function formularioTest2()
    {
        $datosTest = $this->eval2->getEvalTest2();

        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        return $this->render('Formulario/campoTest2', [
            'mensaje' => $mensaje,
            'error' => $error,
            'datosTest' => $datosTest,
        ]);
    }
}
