<?php

namespace App\Database;

use mysqli;

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private ?mysqli $connection = null;


    public function __construct()
    {
        $config = require 'ConfigDB.php';
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->database = $config['database'];

        $this->connect();
    }

    /**
     * Conexion principal a la BD
     * @return void
     */
    public function connect()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Conexión fallida: " . $this->connection->connect_error);
        }
    }

    /**
     * Conexion a la base de datos
     * @return mysqli
     */
    public function getConnection(): ?mysqli
    {
        return $this->connection;
    }

    /**
     * Cerrar la conexion a la base de datos
     * @return void
     */
    public function closeConnection(): void
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
