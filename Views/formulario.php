<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Evaluación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'Plantilla/header.php'; ?>

    <!-- Nav tabs -->
    <ul
        class="nav nav-tabs"
        id="navId"
        role="tablist">
        <li class="nav-item">
            <a
                href="#tab1Id"
                class="nav-link active"
                data-bs-toggle="tab"
                aria-current="page">Active</a>
        </li>
        <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

        </div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>

    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector("#navId a");
        bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Formulario de Preguntas</h2>
            </div>
            <div class="card-body">
                <form id="evaluacionForm">
                    <!-- Preguntas Verdadero/Falso -->
                    <div class="mb-3">
                        <label class="form-label">1. El agua hierve a 100°C.</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p1" id="p1v" value="verdadero" required>
                                <label class="form-check-label" for="p1v">Verdadero</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p1" id="p1f" value="falso">
                                <label class="form-check-label" for="p1f">Falso</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">2. La capital de Francia es Berlín.</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p2" id="p2v" value="verdadero" required>
                                <label class="form-check-label" for="p2v">Verdadero</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p2" id="p2f" value="falso">
                                <label class="form-check-label" for="p2f">Falso</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">3. El sol es una estrella.</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p3" id="p3v" value="verdadero" required>
                                <label class="form-check-label" for="p3v">Verdadero</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p3" id="p3f" value="falso">
                                <label class="form-check-label" for="p3f">Falso</label>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta de opciones agrupadas 1 -->
                    <div class="mb-4">
                        <label class="form-label">4. Evalúa el desempeño en los siguientes aspectos (asigna un valor del 1 al 4,
                            sin repetir valores):</label>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Consistencia</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="consistencia"
                                            id="consistencia1" value="1" required>
                                        <label class="form-check-label" for="consistencia1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="consistencia"
                                            id="consistencia2" value="2">
                                        <label class="form-check-label" for="consistencia2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="consistencia"
                                            id="consistencia3" value="3">
                                        <label class="form-check-label" for="consistencia3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="consistencia"
                                            id="consistencia4" value="4">
                                        <label class="form-check-label" for="consistencia4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Rapidez</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="rapidez" id="rapidez1"
                                            value="1" required>
                                        <label class="form-check-label" for="rapidez1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="rapidez" id="rapidez2"
                                            value="2">
                                        <label class="form-check-label" for="rapidez2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="rapidez" id="rapidez3"
                                            value="3">
                                        <label class="form-check-label" for="rapidez3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="rapidez" id="rapidez4"
                                            value="4">
                                        <label class="form-check-label" for="rapidez4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Claridad</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="claridad" id="claridad1"
                                            value="1" required>
                                        <label class="form-check-label" for="claridad1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="claridad" id="claridad2"
                                            value="2">
                                        <label class="form-check-label" for="claridad2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="claridad" id="claridad3"
                                            value="3">
                                        <label class="form-check-label" for="claridad3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="claridad" id="claridad4"
                                            value="4">
                                        <label class="form-check-label" for="claridad4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Desempeño</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="desempeno" id="desempeno1"
                                            value="1" required>
                                        <label class="form-check-label" for="desempeno1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="desempeno" id="desempeno2"
                                            value="2">
                                        <label class="form-check-label" for="desempeno2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="desempeno" id="desempeno3"
                                            value="3">
                                        <label class="form-check-label" for="desempeno3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo1" type="radio" name="desempeno" id="desempeno4"
                                            value="4">
                                        <label class="form-check-label" for="desempeno4">4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-text text-danger" id="grupo1Error"></div>
                    </div>

                    <!-- Pregunta de opciones agrupadas 2 -->
                    <div class="mb-4">
                        <label class="form-label">5. Evalúa el desempeño en los siguientes aspectos (asigna un valor del 1 al 4,
                            sin repetir valores):</label>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Consistencia</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia1" value="1">
                                        <label class="form-check-label" for="consistencia1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia2" value="2">
                                        <label class="form-check-label" for="consistencia2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia3" value="3">
                                        <label class="form-check-label" for="consistencia3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia4" value="4">
                                        <label class="form-check-label" for="consistencia4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Rapidez</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="rapidez1" id="rapidez1"
                                            value="1" required>
                                        <label class="form-check-label" for="rapidez1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="rapidez1" id="rapidez2"
                                            value="2">
                                        <label class="form-check-label" for="rapidez2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="rapidez1" id="rapidez3"
                                            value="3">
                                        <label class="form-check-label" for="rapidez3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="rapidez1" id="rapidez4"
                                            value="4">
                                        <label class="form-check-label" for="rapidez4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Claridad</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="claridad1" id="claridad1"
                                            value="1" required>
                                        <label class="form-check-label" for="claridad1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="claridad1" id="claridad2"
                                            value="2">
                                        <label class="form-check-label" for="claridad2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="claridad1" id="claridad3"
                                            value="3">
                                        <label class="form-check-label" for="claridad3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="claridad1" id="claridad4"
                                            value="4">
                                        <label class="form-check-label" for="claridad4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Desempeño</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="desempeno1" id="desempeno1"
                                            value="1" required>
                                        <label class="form-check-label" for="desempeno1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="desempeno1" id="desempeno2"
                                            value="2">
                                        <label class="form-check-label" for="desempeno2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="desempeno1" id="desempeno3"
                                            value="3">
                                        <label class="form-check-label" for="desempeno3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo2" type="radio" name="desempeno1" id="desempeno4"
                                            value="4">
                                        <label class="form-check-label" for="desempeno4">4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-text text-danger" id="grupo2Error"></div>
                    </div>

                    <!-- Pregunta de opciones agrupadas 3 -->
                    <div class="mb-4">
                        <label class="form-label">6. Evalúa sitios que visitas con frecuencia (asigna un valor del 1 al 4,
                            sin repetir valores):</label>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Libreria</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="libreria1" id="Libreria1" value="1">
                                        <label class="form-check-label" for="libreria1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="libreria1" id="Libreria2" value="2">
                                        <label class="form-check-label" for="libreria2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="libreria1" id="Libreria3" value="3">
                                        <label class="form-check-label" for="libreria3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="libreria1" id="Libreria4" value="4">
                                        <label class="form-check-label" for="libreria4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Sitios recreativos</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="sitios1" id="sitios1"
                                            value="1" required>
                                        <label class="form-check-label" for="sitios1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="sitios1" id="sitios2"
                                            value="2">
                                        <label class="form-check-label" for="sitios2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="sitios1" id="sitios3"
                                            value="3">
                                        <label class="form-check-label" for="sitios3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="sitios1" id="sitios4"
                                            value="4">
                                        <label class="form-check-label" for="sitios4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Claridad</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="claridad1" id="claridad1"
                                            value="1" required>
                                        <label class="form-check-label" for="claridad1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="claridad1" id="claridad2"
                                            value="2">
                                        <label class="form-check-label" for="claridad2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="claridad1" id="claridad3"
                                            value="3">
                                        <label class="form-check-label" for="claridad3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="claridad1" id="claridad4"
                                            value="4">
                                        <label class="form-check-label" for="claridad4">4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3">Desempeño</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="desempeno1" id="desempeno1"
                                            value="1" required>
                                        <label class="form-check-label" for="desempeno1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="desempeno1" id="desempeno2"
                                            value="2">
                                        <label class="form-check-label" for="desempeno2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="desempeno1" id="desempeno3"
                                            value="3">
                                        <label class="form-check-label" for="desempeno3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input grupo3" type="radio" name="desempeno1" id="desempeno4"
                                            value="4">
                                        <label class="form-check-label" for="desempeno4">4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-text text-danger" id="grupo3Error"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button> <button type="clean" class="btn btn-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'Plantilla/footer.php'; ?>

    <script>
        // Validación para que no se repitan valores en los grupos de radio
        function validarRadiosGrupo(clase, errorId) {
            const nombres = [];
            const valores = [];
            // Obtener todos los grupos (por name)
            document.querySelectorAll('.' + clase).forEach(input => {
                if (!nombres.includes(input.name)) {
                    nombres.push(input.name);
                }
            });
            // Obtener el valor seleccionado de cada grupo
            nombres.forEach(name => {
                const seleccionado = document.querySelector('input[name="' + name + '"]:checked');
                if (seleccionado) {
                    valores.push(seleccionado.value);
                }
            });
            // Validar que no se repitan valores
            const set = new Set(valores);
            if (valores.length !== set.size) {
                document.getElementById(errorId).textContent = "No puedes repetir valores en este grupo.";
                return false;
            } else {
                document.getElementById(errorId).textContent = "";
                return true;
            }
        }

        document.getElementById('evaluacionForm').addEventListener('submit', function(e) {
            const grupo1Valido = validarRadiosGrupo('grupo1', 'grupo1Error');
            const grupo2Valido = validarRadiosGrupo('grupo2', 'grupo2Error');
            const grupo3Valido = validarRadiosGrupo('grupo3', 'grupo3Error');
            if (!grupo1Valido || !grupo2Valido) {
                e.preventDefault();
            }
        });

        // Validar en tiempo real
        document.querySelectorAll('.grupo1').forEach(radio => {
            radio.addEventListener('change', () => validarRadiosGrupo('grupo1', 'grupo1Error'));
        });
        document.querySelectorAll('.grupo2').forEach(radio => {
            radio.addEventListener('change', () => validarRadiosGrupo('grupo2', 'grupo2Error'));
        });
        document.querySelectorAll('.grupo3').forEach(radio => {
            radio.addEventListener('change', () => validarRadiosGrupo('grupo3', 'grupo3Error'));
        });
    </script>
</body>

</html>