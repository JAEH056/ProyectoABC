<?php

namespace App\Models;

require_once 'Database/PDOService.php';

use App\Database\PDOService;
use PDO;

class PDOModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = PDOService::getInstance();
    }

    public function findById(int $id): array
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch() ?: [];
    }
}
