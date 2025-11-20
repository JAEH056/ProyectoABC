<?php

namespace App\Controllers;

require_once 'Models/DetPreguntaModel.php';
require_once 'Controllers/BaseController.php';

use App\Controllers\BaseController;
use App\Models\DetPreguntaModel;

class Formulario extends BaseController
{

    private $eval3;
    public function __construct()
    {
        parent::__construct();
        $this->eval3 = new DetPreguntaModel();
    }


    /**
     * Devuelve la vista de la evaluacion del test 3 (Zavic)
     * @return void
     */
    public function evalTest3()
    {
        $form = new Formulario();
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('Formulario/formularioTest3', [
            'form' => $form,
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Muestra el formulario de preguntas (Zavic) ya renderizado
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
     * Sanitiza los datos del Test3 (Zavic)
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
