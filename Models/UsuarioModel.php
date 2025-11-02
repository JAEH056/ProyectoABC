<?php

namespace App\Models;

require_once 'Database/Database.php';

use App\Database\Database;

class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Devuelve las Preguntas y respuestas del Test 3
     * @return array
     */
    public function getUsuarios(): array
    {
        $connection = $this->db->getConnection();
        $result = $connection->query(
            "SELECT id_persona AS ID, nombre, apellido, curp, rfc, nivel_academico, perfil_profesional, id_perfil FROM db_cognos.persona
                    WHERE persona.status = 1;"
        )->fetch_all(MYSQLI_ASSOC);
        $this->db->closeConnection();

        return $result;
    }

    /**
     * Guarda los datos del usuario
     * @param array $userInfo
     * @return bool
     */
    public function guardarUsuario(array $userInfo = []): bool
    {
        if (empty($userInfo)) {
            return false;
        }

        // Obtener conexión mysqli
        $connection = $this->db->getConnection();

        // Extraer columnas y preparar placeholders
        $columns = array_keys($userInfo);
        $placeholders = array_fill(0, count($columns), '?');
        $types = str_repeat('s', count($columns)); // Para todos los parametros se usa string

        // Construir consulta
        $sql = "INSERT INTO db_cognos.persona VALUES (" . implode(', ', $placeholders) . ")";
        $stmt = $connection->prepare($sql);

        if (!$stmt) {
            error_log("Error al preparar la consulta: " . $connection->error);
            return false;
        }

        // Vincular parámetros dinámicamente
        $values = array_values($userInfo);
        $stmt->bind_param($types, ...$values);

        $result = $stmt->execute();
        $stmt->close();
        $connection->close();

        return $result;
    }

    public function getUserCount(): array
    {
        $connection = $this->db->getConnection();
        $result = $connection->query("SELECT COUNT(*) AS total FROM db_cognos.persona;");
        $count = $result ? $result->fetch_assoc() : ['total' => 0];
        $this->db->closeConnection();

        return $count;
    }

    /**
     * Modifica el estado del usuario
     * @return bool
     */
    public function updateStatus(string $id): bool
    {
        $connection = $this->db->getConnection();
        $stmt = $connection->prepare("UPDATE persona SET status = 0 WHERE id_persona = ?");
        $stmt->bind_param("s", $id);

        if (!$stmt) {
            error_log("Error al preparar la consulta: " . $connection->error);
            return false;
        }
        $result = $stmt->execute();
        $stmt->close();
        $this->db->closeConnection();
        return $result;
    }

    /**
     * Actualiza los datos del usuario
     * @param string $id ID del usuario
     * @param array $infoUser Datos del usuario
     * @return bool
     */
    public function updateUser(string $id, array $infoUser): bool
    {
        $connection = $this->db->getConnection();
        $stmt = $connection->prepare("UPDATE persona SET nombre = ?, apellido = ?, curp = ?, rfc = ?, nivel_academico = ?, perfil_profesional = ? WHERE id_persona = ?");
        // Desempaquetar valores del array (asegurar orden correcto)
        $nombre = $infoUser['nombre'];
        $apellido = $infoUser['apellido'];
        $curp = $infoUser['curp'];
        $rfc = $infoUser['rfc'];
        $nivelAcademico = $infoUser['nivel_academico'];
        $perfilProfesional = $infoUser['perfil_profesional'];

        $stmt->bind_param("sssssss", $nombre, $apellido, $curp, $rfc, $nivelAcademico, $perfilProfesional, $id);

        if (!$stmt) {
            error_log("Error al preparar la consulta: " . $connection->error);
            return false;
        }
        $result = $stmt->execute();
        $stmt->close();
        $this->db->closeConnection();
        return $result;
    }
}
