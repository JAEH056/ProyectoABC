<?php

namespace App\Database;

use PDO;
use PDOException;

class PDOService
{
    private string $host;
    private string $username;
    private string $password;
    private string $database;
    private ?PDO $connection = null;
    private static ?PDO $instance = null;

    public function __construct(string $host, string $username, string $password, string $database)
    {
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect(): void
    {
        $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            throw new \RuntimeException("Error de conexión PDO: " . $e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection(): ?PDO
    {
        return $this->connection;
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $db = new PDOService('localhost', 'usuario', 'clave', 'nombre_bd');
            $db->connect();
            self::$instance = $db->getConnection();
        }

        return self::$instance;
    }
}
