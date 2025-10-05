<!-- Modal para Nuevo Post -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear Nuevo Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createForm" method="POST" action="/create">
                    <input type="hidden" name="action" value="create">
                    <div class="form-group">
                        <label for="newTitulo">Título</label>
                        <input type="text" class="form-control" id="newTitulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="newContenido">Contenido</label>
                        <textarea class="form-control" id="newContenido" name="contenido" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="/update">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" id="editPostId">
                    <div class="form-group">
                        <label for="editTitulo">Título</label>
                        <input type="text" class="form-control" id="editTitulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="editContenido">Contenido</label>
                        <textarea class="form-control" id="editContenido" name="contenido" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal para Eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este post?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="/delete">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" id="deletePostId">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>