<?php

namespace app\modules\addons\modules\postgres\services;

use Exception;
use PDO;
use PDOException;
use Yii;

/**
 * Class PostgresService
 * @package app\modules\addons\modules\postgres\services
 */
class PostgresService
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * PostgresService constructor.
     * @param $host
     * @param $port
     * @param $dbname
     * @param $user
     * @param $password
     * @param $schema
     * @throws Exception
     */
    public function __construct($host, $port, $dbname, $user, $password, $schema = 'public')
    {
        try {
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Set the schema
            $this->pdo->exec("SET search_path TO $schema");
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get table names from PostgreSQL database
     *
     * @return array
     * @throws Exception
     */
    public function getTableNames()
    {
        try {
            $stmt = $this->pdo->query("
                SELECT table_name 
                FROM information_schema.tables 
                WHERE table_schema = 'public' 
                ORDER BY table_name
            ");
            $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
            return array_combine($tables, $tables);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get column names from a PostgreSQL table
     *
     * @param $tableName
     * @return array
     * @throws Exception
     */
    public function getColumnNames($tableName)
    {
        try {
            $stmt = $this->pdo->prepare("
                SELECT column_name 
                FROM information_schema.columns 
                WHERE table_name = :table_name 
                ORDER BY ordinal_position
            ");
            $stmt->execute([':table_name' => $tableName]);
            $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
            return array_combine($columns, $columns);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Insert data into PostgreSQL table
     *
     * @param $tableName
     * @param $data
     * @return bool
     * @throws Exception
     */
    public function insert($tableName, $data)
    {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = ':' . implode(', :', array_keys($data));

            $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
            $stmt = $this->pdo->prepare($sql);

            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Test PostgreSQL connection
     *
     * @return bool
     * @throws Exception
     */
    public function testConnection()
    {
        try {
            $this->pdo->query("SELECT 1");
            return true;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
