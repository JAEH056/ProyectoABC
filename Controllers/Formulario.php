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
        $this->render('formulario');
    }

    /**
     * devuelve los datos del formulario de preguntas (Test 3)
     */
    public function formularioTest3()
    {
        $datosTest = self::datosFormTest3();

        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        return $this->render('Formulario/campoPregunta', [
            'mensaje' => $mensaje,
            'error' => $error,
            'datosTest' => $datosTest,
        ]);
    }

    /**
     * Consulta los datos del Test3 y los devuelve 
     * @return array{descripcion: string, preguntas: array}
     */
    public function datosFormTest3(): array
    {
        return [
            0 => [
                'pregunta' => 'Preguntas realizada con iteracion', // No. Pregunta
                'opciones' => [
                    0 => [
                        'campo' => 'Liquidez',  // Opciones
                        'grupo' => 'grupo1',    // Dato de control para el formulario
                        'nombre' => 'liquidez', // Dato de control par el formulario
                    ],
                    1 => [
                        'campo' => 'Solvencia',
                        'grupo' => 'grupo1',
                        'nombre' => 'solvencia',
                    ],
                    2 => [
                        'campo' => 'Rentabilidad',
                        'grupo' => 'grupo1',
                        'nombre' => 'rentabilidad',
                    ],
                    3 => [
                        'campo' => 'Eficiencia',
                        'grupo' => 'grupo1',
                        'nombre' => 'eficiencia',
                    ],
                ]
            ],
            1 => [
                'pregunta' => 'Preguntas sobre gestión de recursos humanos',
                'opciones' => [
                    0 => [
                        'campo' => 'Capacitación',
                        'grupo' => 'grupo2',
                        'nombre' => 'capacitacion',
                    ],
                    1 => [
                        'campo' => 'Motivación',
                        'grupo' => 'grupo2',
                        'nombre' => 'motivacion',
                    ],
                    2 => [
                        'campo' => 'Evaluación de desempeño',
                        'grupo' => 'grupo2',
                        'nombre' => 'evaluacion_desempeno',
                    ],
                    3 => [
                        'campo' => 'Clima laboral',
                        'grupo' => 'grupo2',
                        'nombre' => 'clima_laboral',
                    ],
                ]
            ],
            2 => [
                'pregunta' => 'Preguntas sobre tecnología e innovación',
                'opciones' => [
                    0 => [
                        'campo' => 'Adopción tecnológica',
                        'grupo' => 'grupo3',
                        'nombre' => 'adopcion_tecnologica',
                    ],
                    1 => [
                        'campo' => 'Automatización',
                        'grupo' => 'grupo3',
                        'nombre' => 'automatizacion',
                    ],
                    2 => [
                        'campo' => 'Innovación de procesos',
                        'grupo' => 'grupo3',
                        'nombre' => 'innovacion_procesos',
                    ],
                    3 => [
                        'campo' => 'Seguridad informática',
                        'grupo' => 'grupo3',
                        'nombre' => 'seguridad_informatica',
                    ],
                ]
            ],
            3 => [
                'pregunta' => 'Preguntas sobre satisfacción del cliente',
                'opciones' => [
                    0 => [
                        'campo' => 'Atención al cliente',
                        'grupo' => 'grupo4',
                        'nombre' => 'atencion_cliente',
                    ],
                    1 => [
                        'campo' => 'Calidad del producto',
                        'grupo' => 'grupo4',
                        'nombre' => 'calidad_producto',
                    ],
                    2 => [
                        'campo' => 'Tiempo de respuesta',
                        'grupo' => 'grupo4',
                        'nombre' => 'tiempo_respuesta',
                    ],
                    3 => [
                        'campo' => 'Fidelización',
                        'grupo' => 'grupo4',
                        'nombre' => 'fidelizacion',
                    ],
                ]
            ]
        ];
    }
}
