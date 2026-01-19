<?php

declare(strict_types=1);

namespace Core;

use PDO;
use PDOStatement;

class Database
{
  private PDO $connection;
  public function __construct(array $config)
  {
    $dsn = $this->getDsn($config);
    $this->connection = new PDO($dsn, null, null, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query(string $query, array $params = []): PDOStatement
  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
  }
  private function getDsn(array $config): string
  {
    $driver = $config['driver'];
    unset($config['driver']);
    if ($driver === 'sqlite') {
      return $driver . ':' . $config['database'];
    }
    return $driver . ':' . http_build_query($config, '', ';');
  }
}
