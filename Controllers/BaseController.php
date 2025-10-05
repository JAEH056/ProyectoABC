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
        include __DIR__ . '/../Views/' . $view . '.php';
    }
}
