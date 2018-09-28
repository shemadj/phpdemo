<?php
namespace Utel\Util;

use Monolog\Logger;
use Monolog\StreamHanlder;
use \PDO;

class Config {

    public static function getConnection() {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=matricula;port=3306', 'root', '12345');
            return $conexion;
        } catch(\PDOException $ex) {
            Config::getLogger()->error($ex->getMessage());
        }
    }

    private static function getBaseDir(): String {
        $dir = \dirname(__DIR__, 2);
        return $dir;
    }

    public static function getView(String $archivo): String {
        return Config::getBaseDir() . "/src/views/$archivo";
    }

    public static function getLogger(): Logger {
        $log = new Logger('PHPDemo');
        $logFile = Config::getBaseDir() . '/logs/error.log';
        $log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
        return $log;
    }

}

?>