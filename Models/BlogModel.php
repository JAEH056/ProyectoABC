<?php

namespace App\Models;

require_once 'Database/Database.php';

use App\Database\Database;

class BlogModel
{
    private $db;
    private $table;
    private $fields = [];

    public function __construct()
    {
        $this->db = new Database();
        $this->table = 'posts';
        $this->fields = ['id', 'titulo', 'contenido', 'idusuario', 'fecha_creacion', 'fecha_actualizacion'];
    }

    /**
     * Devuelve los datos de la tabla posts
     * @return array
     */
    public function getPosts(): array
    {

        $campos = implode(',', $this->fields);
        $connection = $this->db->getConnection();
        $result = $connection->query("SELECT {$campos} FROM {$this->table}")->fetch_all(MYSQLI_ASSOC);
        $this->db->closeConnection();

        return $result;
    }

    /**
     * Actualiza los datos de la tabla
     * @return bool
     */
    public function updatePost(int $id, array $data): bool
    {
        $connection = $this->db->getConnection();

        $titulo = $data['titulo'];
        $contenido = $data['contenido'];
        $result = $connection->query("UPDATE {$this->table} SET titulo = '$titulo', contenido = '$contenido' WHERE id = $id");

        $this->db->closeConnection();
        return $result;
    }

    /**
     * Elimina los datos de la tabla
     * @return bool
     */
    public function deletePost($id = null): bool
    {
        $connection = $this->db->getConnection();
        $result = $connection->query("DELETE FROM {$this->table} WHERE (id = $id);");
        $this->db->closeConnection();

        return $result;
    }

    /**
     * Agrega los datos de la tabla
     * @return bool
     */
    public function createPost(string $titulo, string $contenido): bool
    {
        $connection = $this->db->getConnection();
        $result = $connection->query("INSERT INTO {$this->table} (titulo, contenido) VALUES ('$titulo', '$contenido')");
        $this->db->closeConnection();

        return $result;
    }
}
