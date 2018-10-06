<?php
require __DIR__ . '/../vendor/autoload.php';
use Utel\Util\Config;
use Utel\DataSource\Usuario;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $errores = "";

    if(Config::camposVacios($nombre, $apellidos, $username, $email, $password, $password2)) {
        $errores .= '<li class="list-group-item text-danger">Por favor captura todos los datos correctamente</li>';
    } else if($password != $password2) {
        $errores .= '<li class="list-group-item text-danger">Las contraseñas no son iguales</li>';
    } else {
        $dbcon = Config::getConnection();
        if($dbcon) {
            try {
                $sentencia = $dbcon->prepare(Usuario::SQL_INSERT_ALUMNO);
                $sentencia->bindParam(1, $nombre);
                $sentencia->bindParam(2, $apellidos);
                $sentencia->bindParam(3, $email);
                $sentencia->bindParam(4, $username);
                $sentencia->bindValue(5, md5($password));
                $sentencia->execute();
            } catch(PDOException $e) {
                Config::getLogger()->error($e->getMessage());
            }
            header('Location: index.php');
        }
    }

}


require Config::getView('nuevo.view.php');
?>
