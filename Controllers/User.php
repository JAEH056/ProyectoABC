<?php

namespace App\Controllers;

require_once 'Models/UsuarioModel.php';
require_once 'Controllers/BaseController.php';

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class User extends BaseController
{
    private $usuario;
    private $usuario2;

    public function __construct()
    {
        parent::__construct();
        $this->usuario = new UsuarioModel();
        $this->usuario2 = new UsuarioModel(); // Se vuelve a llamar el modelo para reconectar
    }

    /**
     * Vista procipal de la lista de usuarios
     * @return void
     */
    public function index()
    {
        $usuarios = $this->usuario->getUsuarios();
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('Usuario/listaUsuarios', [
            'usuarios' => $usuarios,
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Devuelve la vista del formulario para crear un nuevo usuario
     * @return void
     */
    public function viewNewUser()
    {
        $mensaje = $_SESSION['mensaje'] ?? '';
        $error = $_SESSION['error'] ?? '';
        $this->render('Usuario/nuevoUsuario', [
            'mensaje' => $mensaje,
            'error' => $error
        ]);
    }

    /**
     * Crea un nuevo usuario
     * @return null
     */
    public function create()
    {
        if (!isset($_POST['nombre']) || !isset($_POST['nivel'])) {
            $_SESSION['error'] = "Titulo y/o Contenido no proporcionado";
            header("Location: /");
            return exit();
        }

        $data = [
            'id_persona'    => self::genUserId(),
            'nombre'        => $_POST['nombre'],
            'apellido'      => $_POST['apellidos'],
            'curp'          => $_POST['curp'],
            'rfc'           => $_POST['rfc'],
            'nivel_academico'       => $_POST['nivel'],
            'perfil_profesional'    => $_POST['perfil'],
            'id_perfil'     => null,
            'status'        => 1,
        ];

        if (!$this->usuario->guardarUsuario($data)) {
            $_SESSION['error'] = "Error al guardar el usuario.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Usuario creado con exito.";
        header("Location: /");
        return exit();
    }

    /**
     * Genera el ID del Usuario
     * @param string $acronimo
     * @return string
     */
    public function genUserId(string $acronimo = 'PER'): string
    {
        $numeroConsecutivo = $this->usuario2->getUserCount();
        // Formatear número con ceros a la izquierda (mínimo 3 dígitos) y formatear fecha y hora
        $numeroFormateado = str_pad($numeroConsecutivo['total'] + 1, 3, '0', STR_PAD_LEFT);
        $fechaHora = date('dmYHis');

        return "{$acronimo}-{$numeroFormateado}-{$fechaHora}";
    }

    /**
     * Elimina un usuario
     * @return null
     */
    public function delete()
    {
        if (!isset($_POST['user-id'])) {
            $_SESSION['error'] = "ID del usuario no proporcionado";
            header("Location: /");
            return exit();
        }

        if (!$this->usuario->updateStatus($_POST['user-id'])) {
            $_SESSION['error'] = "Error al eliminar el usuario.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Usuario eliminado correctamente.";
        header("Location: /");
        return exit();
    }

    /**
     * Actualiza los datos de un usuario
     * @return null
     */
    public function update()
    {
        if (!isset($_POST['user-id'])) {
            $_SESSION['error'] = "ID del usuario no proporcionado";
            header("Location: /");
            return exit();
        }

        $data = [
            'nombre'        => $_POST['nombre'],
            'apellido'      => $_POST['apellidos'],
            'curp'          => $_POST['curp'],
            'rfc'           => $_POST['rfc'],
            'nivel_academico'       => $_POST['nivel'],
            'perfil_profesional'    => $_POST['perfil'],
        ];

        if (!$this->usuario->updateUser($_POST['user-id'],$data)) {
            $_SESSION['error'] = "Error al eliminar el usuario.";
            header("Location: /");
            return exit();
        }
        // Redirige o muestra un mensaje de éxito
        $_SESSION['mensaje'] = "Datos de usuario actualizados correctamente.";
        header("Location: /");
        return exit();
    }
}
