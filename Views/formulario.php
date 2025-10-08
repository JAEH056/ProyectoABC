<?php
require_once 'Controllers/Formulario.php';

use App\Controllers\Formulario;

$form = new Formulario();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Evaluación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'Plantilla/header.php'; ?>

    <div class="container mt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Formulario de Preguntas</h2>
            </div>
            <div class="card-body">
                <form id="evaluacionForm">

                    <!-- Grupo de preguntas costum -->
                    <?php $form->formularioTest3(); ?>

                    <div class="col-md-6 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'Plantilla/footer.php'; ?>

    <script src="Resources/JS/formCheck.js" type="text/javascript"></script>

</body>

</html>