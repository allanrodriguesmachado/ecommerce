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

    public function find($id): array
    {
        $sql = sprintf('SELECT * FROM users WHERE id = %d', $id);

        $smtp = $this->conn()->prepare($sql);
        $smtp->execute();

        return $smtp->fetchAll();
    }
}