<?php
require_once __DIR__ . '/../Controllers/Controller.php';

use App\Controllers\Controller;

$controller = new Controller();
$posts = $controller->read();
$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '';
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['mensaje']);
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Hojas de estilo -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<?php include 'Plantilla/header.php'; ?>

<body>
    <?php include 'Plantilla/modals.php'; ?>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-8 d-flex justify-content-end">
                        <div class="col-sm-8 d-flex justify-content-center">
                            <?php if ($mensaje): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo addslashes($mensaje); ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <?php if ($error): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo addslashes($error); ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end mt-3 mb-3 me-auto">
                        <div class="col-sm-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                <i class="bi bi-plus-circle"></i> Nuevo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Contenido</th>
                                        <th>Fecha de Creación</th>
                                        <th>Fecha de Actualización</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (empty($posts)):
                                        echo "<tr><td colspan='6' class='text-center'>No hay datos disponibles.</td></tr>";
                                    else:
                                        foreach ($posts as $post) {
                                            echo "<tr>
                                                <td>{$post['id']}</td>
                                                <td>{$post['titulo']}</td>
                                                <td>{$post['contenido']}</td>
                                                <td>{$post['fecha_creacion']}</td>
                                                <td>{$post['fecha_actualizacion']}</td>
                                                <td>
                                                    <button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' data-id='{$post['id']}' data-titulo='{$post['titulo']}' data-contenido='{$post['contenido']}'>
                                                        <i class='bi bi-pencil-square'></i> Editar
                                                    </button>
                                                    <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteModal' data-id='{$post['id']}'>
                                                        <i class='bi bi-trash'></i> Eliminar
                                                    </button>
                                                </td>
                                            </tr>";
                                        }
                                    endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'Plantilla/footer.php'; ?>

    <script src="Resources/JS/main.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>