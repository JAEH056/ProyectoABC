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

    /**
     * Devuelve la vista de la evaluacion del test 2
     * @return void
     */
    public function evalTest2()
    {
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('Formulario/formularioTest2', [
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Devuelve la vista de la evaluacion del test 3
     * @return void
     */
    public function evalTest3()
    {
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('Formulario/formularioTest3', [
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Renderiza las preguntas (Test 2) ya renderizado
     */
    public function formTest2()
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

    /**
     * Muestra el formulario de preguntas (Test 3) ya renderizado
     */
    public function formTest3()
    {
        $datosTest = self::dataFieldTest3();

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
    public function dataFieldTest3(): array
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
}
