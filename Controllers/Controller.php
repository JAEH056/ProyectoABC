<?php

namespace App\Controllers;

require_once 'Models/BlogModel.php';
require_once 'Controllers/BaseController.php';

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Controller extends BaseController
{
    private $blogModel;

    public function __construct()
    {
        parent::__construct();
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        $posts = $this->blogModel->getPosts();
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('home', [
            'posts' => $posts,
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Crear un nuevo post
     */
    public function create(): string|null
    {

        if (!isset($_POST['titulo']) || !isset($_POST['contenido'])) {
            $_SESSION['error'] = "Titulo y/o Contenido no proporcionado";
            header("Location: /");
            return exit();
        }

        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];

        if (!$this->blogModel->createPost($titulo, $contenido)) {
            $_SESSION['error'] = "Error al crear el post.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Post creado con éxito.";
        header("Location: /");
        return exit();
    }

    /**
     * Muestra los post en la tabla
     * @return array
     */
    public function read(): array
    {
        return $this->blogModel->getPosts();
    }

    /**
     * Actualiza los datos del post
     * @return string
     */
    public function update(): string|null
    {

        if (!isset($_POST['id'])) {
            $_SESSION['error'] = "ID no proporcionado";
            header("Location: /");
            return exit();
        }
        $id = $_POST['id'];

        $contenido = [
            'titulo' => $_POST['titulo'],
            'contenido' => $_POST['contenido'],
        ];

        if (!$this->blogModel->updatePost($id, $contenido)) {
            $_SESSION['error'] = "Error al actualizar el post.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Post actualizado con éxito.";
        header("Location: /");
        return exit();
    }

    /**
     * Elimina un post especifico
     * @return string
     */
    public function delete(): string|null
    {

        if (!isset($_POST['id'])) {
            $_SESSION['error'] = "ID no proporcionado";
            header("Location: /");
            return exit();
        }
        $id = $_POST['id'];

        if (!$this->blogModel->deletePost($id)) {
            $_SESSION['error'] = "Error al eliminar el post.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Post eliminado con éxito.";
        header("Location: /");
        return exit();
    }

    public function showPosts()
    {
        $posts = $this->blogModel->getPosts();
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('posts', [
            'posts' => $posts,
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }
}
