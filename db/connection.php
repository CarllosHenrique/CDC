<?php

namespace db;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        try {
            $db = new PDO('sqlite:database.db');
        } catch (PDOException $e) {
            echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        }
    }
}