<?php

namespace Core\Database;

use PDO;

class Connector extends Conn
{
    public function all(): array
    {
        $smtp = $this->conn()->prepare('SELECT * FROM users');
        $smtp->execute();

        return $smtp->fetchAll(PDO::FETCH_OBJ);

    }
}