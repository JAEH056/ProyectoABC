<?php ?>
<div class="container mt-5 col-8">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-4">Formulario de Preguntas</h2>
        </div>
        <div class="card-body d-flex justify-content-center">
            <form id="evaluacionForm">

                <!-- Pregunta de opciones agrupadas -->
                <!-- Input: 
                        var $nombre: Debe ser el mismo nombre para todos los valores (columnas)
                        var $grupo: Debe ser el mismo para todos los input
                        var $idInput: Debe ser distinto para cada input (ej. coordinacion1, coordinacion2, etc.)
                -->
                <div class="mb-4">
                    <label class="form-label">12. <?php print_r($descripcionPregunta); ?></label>
                    <div class="row">
                        <?php foreach ($formData as $row): ?>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label col-md-3"><?php print_r($row['campo']) ?></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?php print_r($row['grupo']) ?>" type="radio" name="<?php print_r($row['nombre']) ?>" id="<?php print_r($row['idInput'] . '1') ?>" value="1">
                                        <label class="form-check-label" for="<?php print_r($row['idInput'] . '1') ?>">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?php print_r($row['grupo']) ?>" type="radio" name="<?php print_r($row['nombre']) ?>" id="<?php print_r($row['idInput'] . '2') ?>" value="2">
                                        <label class="form-check-label" for="<?php print_r($row['idInput'] . '2') ?>">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?php print_r($row['grupo']) ?>" type="radio" name="<?php print_r($row['nombre']) ?>" id="<?php print_r($row['idInput'] . '3') ?>" value="3">
                                        <label class="form-check-label" for="<?php print_r($row['idInput'] . '3') ?>">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?php print_r($row['grupo']) ?>" type="radio" name="<?php print_r($row['nombre']) ?>" id="<?php print_r($row['idInput'] . '4') ?>" value="4">
                                        <label class="form-check-label" for="<?php print_r($row['idInput'] . '4') ?>">4</label>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-text text-danger" id="<?php print_r($formData[0]['grupo']) ?>Error"></div>
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
                                    <input class="form-check-input grupo1" type="radio" name="consistencia" id="consistencia1" value="1">
                                    <label class="form-check-label" for="consistencia1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo1" type="radio" name="consistencia" id="consistencia2" value="2">
                                    <label class="form-check-label" for="consistencia2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo1" type="radio" name="consistencia" id="consistencia3" value="3">
                                    <label class="form-check-label" for="consistencia3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo1" type="radio" name="consistencia" id="consistencia4" value="4">
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
                                    <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia5" value="1">
                                    <label class="form-check-label" for="consistencia1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia6" value="2">
                                    <label class="form-check-label" for="consistencia2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia7" value="3">
                                    <label class="form-check-label" for="consistencia3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo2" type="radio" name="consistencia1" id="consistencia8" value="4">
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
                                    <input class="form-check-input grupo3" type="radio" name="claridad2" id="claridad5"
                                        value="1" required>
                                    <label class="form-check-label" for="claridad5">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo3" type="radio" name="claridad2" id="claridad6"
                                        value="2">
                                    <label class="form-check-label" for="claridad6">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo3" type="radio" name="claridad2" id="claridad7"
                                        value="3">
                                    <label class="form-check-label" for="claridad7">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input grupo3" type="radio" name="claridad2" id="claridad8"
                                        value="4">
                                    <label class="form-check-label" for="claridad8">4</label>
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
<script src="Resources/JS/formulario_Grid.js" type="text/javascript"></script>