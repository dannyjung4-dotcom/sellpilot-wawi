<?php
namespace App\Core;

final class Database
{
    public function __construct(
        private readonly string $host = '127.0.0.1',
        private readonly string $dbName = 'sellpilot',
        private readonly string $user = 'root',
        private readonly string $password = ''
    ) {
    }

    public function connect(): \PDO
    {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $this->host, $this->dbName);

        return new \PDO($dsn, $this->user, $this->password, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]);
    }
}
