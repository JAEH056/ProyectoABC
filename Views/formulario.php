<?php
require_once 'Controllers/Formulario.php';

use App\Controllers\Formulario;

$form = new Formulario();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulario de Evaluación</title>
    <link href="Resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawsome icons -->
    <link href="Resources/css/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="Resources/css/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="Resources/css/fontawesome/css/solid.css" rel="stylesheet" />
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <?php include 'Plantilla/header.php'; ?>
    <!-- Example Code Start-->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="false" href="#panel2"
                        data-bs-toggle="tab" role="tab" aria-controls="panel2" aria-selected="false">
                        Test2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="false" href="#panel3"
                        data-bs-toggle="tab" role="tab" aria-controls="panel3" aria-selected="false">
                        Test3
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="cardTabContent">
                <div class="tab-pane py-5 py-xl-10 fade show active" id="panel2" role="tabpanel" aria-labelledby="wizard1-tab">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 mx-auto">
                            <main>
                                <form id="evaltest2">
                                    <!-- Grupo de preguntas -->
                                    <section class="mb-4">
                                        <h3 class="h5 mb-3 text-start">Preguntas de Evaluación</h3>
                                        <?php $form->formTest2(); ?>
                                    </section>

                                    <div class="d-flex justify-content-between">
                                        <button type="reset" class="btn btn-light">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
                <div class="tab-pane py-5 py-xl-10 fade" id="panel3" role="tabpanel" aria-labelledby="wizard2-tab">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 mx-auto">
                            <main>
                                <form id="evaltest3">
                                    <!-- Grupo de preguntas -->
                                    <section class="mb-4">
                                        <h3 class="h5 mb-3 text-start">Preguntas de Evaluación</h3>
                                        <?php $form->formTest3(); ?>
                                    </section>
                                    <div class="d-flex justify-content-between">
                                        <button type="reset" class="btn btn-light">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'Plantilla/footer.php'; ?>

    <script src="Resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="Resources/js/formCheck.js" type="text/javascript"></script>
</body>

</html>