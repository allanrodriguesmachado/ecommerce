<?php

namespace Core\Database;

use PDO;

abstract class Conn
{
    protected function conn() {
        try {
            return new \PDO(
                'pgsql:host=postgres;dbname=ecommerce',
                'postgres',
                '830314',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

        } catch (\PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
}