<?php

namespace App\Models;

require_once 'Database/Database.php';

use App\Database\Database;
use mysqli;

class BaseModel
{
    private $db;
    private static ?mysqli $instance = null;

    public function __construct()
    {
        $this->db = self::getInstance();
    }

    public static function getInstance(): mysqli
    {
        if (self::$instance === null) {
            $db = new Database();
            $db->connect();
            self::$instance = $db->getConnection();
        }

        return self::$instance;
    }
}
