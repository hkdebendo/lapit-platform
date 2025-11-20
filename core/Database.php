<?php


namespace Core;

use \PDO;
use \PDOException;

class Database
{
    /**
     * @var PDO
     */
    private static $instance;

    /**
     * Get PDO instance (singleton)
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            $config = require __DIR__ . '/../config/config.php';
            $dbCfg  = $config['db'];

            $dsn = sprintf(
                'mysql:host=%s;dbname=%s;charset=%s',
                $dbCfg['host'],
                $dbCfg['dbname'],
                $dbCfg['charset']
            );

            try {
                self::$instance = new PDO(
                    $dsn,
                    $dbCfg['user'],
                    $dbCfg['password'],
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ]
                );
            } catch (PDOException $e) {
                // In production, loger ça et voir les erreurs
                exit('Database connection error: ' . $e->getMessage());
            }
        }

        return self::$instance;
    }

    /**
     * Prevent direct object creation
     */
    private function __construct() {}

    /**
     * Prevent object cloning
     */
    private function __clone() {}

    /**
     * Close connection on shutdown
     */
    public function __destruct()
    {
        self::$instance = null;
    }
}
?>
