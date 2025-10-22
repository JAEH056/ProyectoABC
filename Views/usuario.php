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
    <?php include 'Plantilla/header.php'; ?>

    <div class="container mt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Datos del ususario</h2>
            </div>
            <div class="card-body">
                <main>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 mx-auto">
                            <!-- Envia la lista de errores al formulario -->
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Crear nuevo usuario</h4>
                                <p>Ingresa los datos solicitados.</p>
                            </div>
                            <form id="evaluacionForm" method="POST">
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <!-- Form Group (correo electronico)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">Correo electronico</label>
                                        <input class="form-control" id="email" type="text"
                                            placeholder="Correo electronico" name="email" required
                                            title="Ingrese los datos necesarios"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
                                    </div>
                                    <!-- Form Group (nombre)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="nombre">Nombre(s)</label>
                                        <input class="form-control" id="nombre" type="text"
                                            placeholder="Ingresa el/los nombre(s)" name="nombre" required
                                            title="Ingrese los datos necesarios" />
                                    </div>
                                    <!-- Form Group (apellidos)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="apellidos">Apellido(s)</label>
                                        <input class="form-control" id="apellidos" type="text"
                                            placeholder="Ingresa el/los apellido(s)" name="apellidos" required
                                            title="Ingrese los datos necesarios" />
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <div class="mb-3">
                                        <label for="curp" class="small mb-1">CURP</label>
                                        <input type="text" class="form-control" id="cadena-curp" name="curp" required
                                            placeholder="Ingresa el CURP"
                                            title="Debe ser una CURP válida en mayúsculas con 18 caracteres">
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <div class="mb-3">
                                        <label for="cadena-rfc" class="small mb-1">RFC</label>
                                        <input type="text" class="form-control" id="cadena-rfc" name="rfc" required
                                            placeholder="Ingresa el RFC"
                                            title="Debe ser una RFC válida en mayúsculas con 12 o 13 caracteres">
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <div class="mb-3">
                                        <label for="nivel-academico" class="small mb-1">Nivel Academico</label>
                                        <input type="text" class="form-control" id="nivel-academico" name="nivel-academico" required
                                            placeholder="Ingresa el nivel academico"
                                            title="Ingrese los datos necesarios">
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3">
                                    <div class="mb-3">
                                        <label for="perfil" class="small mb-1">Perfil Profesional</label>
                                        <input type="text" class="form-control" id="perfil" name="perfil" required
                                            placeholder="Ingresa el perfil profesional"
                                            title="Ingrese los datos necesarios">
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-md-6 pt-3 d-flex justify-content-between">
                                        <button type="reset" class="btn btn-light">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php include 'Plantilla/footer.php'; ?>

    <script src="Resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="Resources/js/formCheck.js" type="text/javascript"></script>

</body>

</html>