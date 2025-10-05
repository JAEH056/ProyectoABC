<?php

namespace App\Models;

require_once 'Database/Database.php';

use App\Database\Database;
use mysqli;
use Exception;

class BaseModel
{
    protected static ?mysqli $instance = null;
    protected $db;

    public function __construct()
    {
        $this->db = self::getDb();
    }

    /**
     * Obtiene la instancia singleton de la conexión DB (lazy loading).
     * @return mysqli|null
     * @throws Exception Si falla la creación.
     */
    public static function getInstance(): ?mysqli
    {
        if (self::$instance === null) {
            try {
                $database = new Database();
                self::$instance = $database->getConnection();
                if (self::$instance === null) {
                    throw new Exception('No se pudo obtener conexión válida de Database');
                }
            } catch (Exception $e) {
                error_log("Error en BaseModel::getInstance(): " . $e->getMessage());
                self::$instance = null; // Asegura null en fallo
            }
        }
        return self::$instance;
    }

    /**
     * Método helper para modelos hijas: Obtiene DB o lanza error.
     * Úsalo en queries: $db = $this->getDb();
     * @return mysqli
     * @throws Exception Si no hay conexión.
     */
    protected function getDb(): mysqli
    {
        $db = static::getInstance();
        if ($db === null) {
            throw new Exception('Conexión a DB no disponible. Verifica configuración.');
        }
        return $db;
    }
}
