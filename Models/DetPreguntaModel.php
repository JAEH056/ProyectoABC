<?php

namespace App\Models;

require_once 'Database/Database.php';
require_once 'Models/BaseModel.php';

use App\Database\Database;
use App\Models\BaseModel;

class DetPreguntaModel extends BaseModel
{
    protected string $table = 'db_cognos.det_pregunta';
    protected string $primaryKey = 'id_detpregunta';
    protected array $fillable = ['id_detpregunta', 'respuesta', 'id_pregunta', 'valor'];
    //private $db;

    /**
     * Devuelve las Preguntas y respuestas del Test 3 (Zavic)
     * @return array
     */
    public function getEvalTest3(): array
    {
        //$connection = $this->db->getConnection();
        //$result = $connection->query(
        $result = $this->db->query(
            "SELECT p.id_pregunta, p.pregunta, GROUP_CONCAT(dp.respuesta SEPARATOR '/') AS opciones 
                    FROM db_cognos.pregunta AS p JOIN db_cognos.det_pregunta AS dp ON dp.id_pregunta = p.id_pregunta
                    JOIN db_cognos.test AS t ON p.id_test = t.id_test
                    WHERE t.nombre = 'test3'
                    GROUP BY p.id_pregunta, p.pregunta;"
        )->fetch_all(MYSQLI_ASSOC);
        //$this->db->closeConnection();

        return $result;
    }

    /**
     * Devuelve las respuestas del Test 2 (Kostick)
     * @return array
     */
    public function getEvalTest2(): array
    {
        //$connection = $this->db->getConnection();
        //$result = $connection->query(
        $result = $this->db->query(
            "SELECT id_detpregunta, det_pregunta.respuesta, det_pregunta.valor
	                FROM db_cognos.det_pregunta
                    JOIN db_cognos.pregunta ON pregunta.id_pregunta = det_pregunta.id_pregunta
                    JOIN db_cognos.test ON pregunta.id_test = test.id_test
                    WHERE test.nombre = 'Kostick';"
        )->fetch_all(MYSQLI_ASSOC);
        //$this->db->closeConnection();

        return $result;
    }

    /**
     * Crea una pregunta
     * @param array $detPregunta Datos de la Pregunta/Respuesta
     * @return bool true si se insertan los datos correctamente
     */
    public function createDetPregunta(array $dataPregunta): bool
    {
        // Desempaquetar valores del array (asegurar orden correcto)
        $data = [
            'id_detpregunta' => $dataPregunta['id_detpregunta'],
            'respuesta' => $dataPregunta['respuesta'],
            'id_pregunta' => $dataPregunta['id_pregunta'],
            'valor' => $dataPregunta['valor']
        ];

        return $this->create($data);
    }

    /**
     * Actualiza los detalles de una pregunta
     * @param string $id Id_detPregunta
     * @param array $detPregunta [string $descripcion, string $valor]
     * @return int
     */
    public function updateDetPregunta(string $id, array $detPregunta): int
    {
        // Desempaquetar valores del array (asegurar orden correcto)
        $data = [$detPregunta['respuesta'], $detPregunta['valor'], $id];
        $result = $this->executePrepared("UPDATE det_pregunta SET respuesta = ?, valor = ? WHERE id_detpregunta = ?", $data);

        return $result;
    }

    /**
     * Elimina una pregunta
     * @param string $id Id_detPregunta
     * @return bool
     */
    public function deleteDetPregunta(string $id): bool
    {
        return $this->delete($id);
    }


    /**
     * Devuelve el total de preguntas
     * @return array|array{total: int|bool|null}
     */
    public function getRespuestaCount(): array
    {
        $result = $this->db->query("SELECT COUNT(*) AS total FROM db_cognos.det_pregunta");
        $count = $result ? $result->fetch_assoc() : ['total' => 0];

        return $count;
    }

    /**
     * Devuelve el id_pregunta del test kostick
     * @return array
     */
    public function getIDPreguntaKostick(): array
    {
        $result = $this->db->query("SELECT det_pregunta.id_pregunta AS ID
	                                            FROM db_cognos.det_pregunta
                                                JOIN db_cognos.pregunta ON pregunta.id_pregunta = det_pregunta.id_pregunta 
                                                JOIN db_cognos.test ON pregunta.id_test = test.id_test
                                                WHERE test.nombre = 'kostick' limit 1");
        $count = $result ? $result->fetch_assoc() : ['ID' => null];
        return $count;
    }
}
