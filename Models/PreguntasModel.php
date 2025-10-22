<?php

namespace App\Models;

require_once 'Database/Database.php';

use App\Database\Database;

class PreguntasModel
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
    public function getEvalTest3(): array
    {
        $connection = $this->db->getConnection();
        $result = $connection->query(
            "SELECT p.id_pregunta, p.pregunta, GROUP_CONCAT(dp.respuesta SEPARATOR '/') AS opciones 
                    FROM db_cognos.pregunta AS p JOIN db_cognos.det_pregunta AS dp ON dp.id_pregunta = p.id_pregunta
                    JOIN db_cognos.test AS t ON p.id_test = t.id_test
                    WHERE t.nombre = 'test3'
                    GROUP BY p.id_pregunta, p.pregunta;"
        )->fetch_all(MYSQLI_ASSOC);
        $this->db->closeConnection();

        return $result;
    }

    /**
     * Devuelve las respuestas del Test 2
     * @return array
     */
    public function getEvalTest2(): array
    {
        $connection = $this->db->getConnection();
        $result = $connection->query(
            "SELECT det_pregunta.respuesta, det_pregunta.valor
	                FROM db_cognos.det_pregunta
                    JOIN db_cognos.pregunta ON pregunta.id_pregunta = det_pregunta.id_pregunta
                    JOIN db_cognos.test ON pregunta.id_test = test.id_test
                    WHERE test.nombre = 'test2';"
        )->fetch_all(MYSQLI_ASSOC);
        $this->db->closeConnection();

        return $result;
    }
}
