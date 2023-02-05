<?php

/**
 * Class Db
 */
final class Db
{
    /**
     * @var \Db
     */
    private static $instance;

    /**
     * @var \PDO
     */
    private $conn;

    /**
     * Db constructor.
     */
    private function __construct()
    {
        try {
            $this->conn = new \PDO(
                sprintf('mysql:dbname=%s;host=%s;charset=UTF8', DATABASE_NAME, DATABASE_HOST),
                DATABASE_USER,
                DATABASE_PASSWORD
            );
        } catch (\PDOException $e) {
            echo sprintf('Connection failed: %s', $e->getMessage());
            die;
        }
    }

    /**
     * @return Db
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return PDO
     */
    public static function conn()
    {
        return self::getInstance()->conn;
    }
}
