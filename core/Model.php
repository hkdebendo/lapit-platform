<?php
// core/Model.php

namespace Core;

use Core\Database;
use \PDO;

class Model
{
    /**
     * @var PDO
     */
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Execute a query and return statement
     *
     * @param string $sql
     * @param array  $params
     * @return \PDOStatement
     */
    protected function query(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /**
     * Get all rows
     *
     * @param string $sql
     * @param array  $params
     * @return array
     */
    protected function fetchAll(string $sql, array $params = []): array
    {
        return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get single row
     *
     * @param string $sql
     * @param array  $params
     * @return array|null
     */
    protected function fetch(string $sql, array $params = []): ?array
    {
        $res = $this->query($sql, $params)->fetch(PDO::FETCH_ASSOC);
        return $res === false ? null : $res;
    }

    /**
     * Insert and return last insert ID
     *
     * @param string $sql
     * @param array  $params
     * @return int
     */
    protected function insert(string $sql, array $params = []): int
    {
        $this->query($sql, $params);
        return (int)$this->db->lastInsertId();
    }

    /**
     * Execute update/delete
     *
     * @param string $sql
     * @param array  $params
     * @return int Affected rows
     */
    protected function execute(string $sql, array $params = []): int
    {
        return $this->query($sql, $params)->rowCount();
    }
}
?>
