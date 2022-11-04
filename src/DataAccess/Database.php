<?php

namespace FarmAPI\DataAccess;

class Database
{
    private \PDO $pdo;
    private static ?Database $instance = null;

    private function __construct()
    {
        $host = 'db';
        $db = 'farm';
        $user = 'root';
        $pass = 'password';

        $dsn = "mysql:host=$host;dbname=$db";

        $options = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->pdo = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $exception) {
            throw new \PDOException($exception->getMessage(), (int)$exception->getCode());
        }
    }

    public static function getInstance(): Database
    {
        if (!self::$instance)
        {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }

    public function fetch(string $sql, array $values = []): array
    {
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($values);

        return $stmt->fetch();
    }

    public function fetchAll(string $sql, array $values = []): array
    {
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($values);

        return $stmt->fetchAll();
    }
}
