<?php

namespace App\Controllers;


class BaseController
{
    public function __construct()
    {
        $this->startSession();
    }

    private function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function render(string $view, array $data = [])
    {
        extract($data); // Convierte los elementos del array en variables
        $file = __DIR__ . '/../Views/' . $view . '.php';
        if (!is_file($file)) {
            echo '<h1>Render Error:</h1><p>Vista no encontrada: ' . htmlspecialchars($view, ENT_QUOTES, 'UTF-8') . '</p>';
            return;
        }
        include $file;
    }
}
