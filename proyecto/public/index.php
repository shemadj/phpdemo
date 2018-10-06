<?php
require __DIR__ . '/../vendor/autoload.php';
use Utel\Util\Config;
use Utel\DataSource\Usuario;

$dbcon = Config::getConnection();
if(isset($dbcon)) {
    $sentencia = $dbcon->prepare(Usuario::SQL_SELECT_ALUMNOS);
    $sentencia->execute();
    $listado = $sentencia->fetchAll(PDO::FETCH_NAMED);
}

require Config::getView('index.view.php');
?>