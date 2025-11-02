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
    <link href="Resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawsome icons -->
    <link href="Resources/css/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="Resources/css/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="Resources/css/fontawesome/css/solid.css" rel="stylesheet" />
</head>

<body>
    <?php include "Views/Plantilla/header.php"; ?>

    <div class="container mt-5 col-10">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Evaluación</h2>
            </div>
            <div class="card-body">
                <main>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 mx-auto">
                            <!-- Envia la lista de errores al formulario -->
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Preguntas de Evaluación</h4>
                                <p>Ingresa los datos solicitados.</p>
                            </div>
                            <!-- Mensajes de retroalimentacion -->
                            <?php if ($mensaje): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo addslashes($mensaje); ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php unset($_SESSION['mensaje']); endif; ?>
                            <?php if ($error): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo addslashes($error); ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php unset($_SESSION['error']); endif; ?>
                            <form id="evaltest2">
                                <!-- Grupo de preguntas -->
                                <section class="mb-4">
                                    <?php $form->formTest3(); ?>
                                </section>

                                <div class="d-flex justify-content-between">
                                    <button type="reset" class="btn btn-light">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php include 'Views/Plantilla/footer.php'; ?>

    <script src="Resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="Resources/js/formCheck.js" type="text/javascript"></script>

</body>

</html>