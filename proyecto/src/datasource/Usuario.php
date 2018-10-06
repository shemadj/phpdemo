<?php
namespace Utel\DataSource;
class Usuario {
    private $id;
    private $nombre, $apellidos;
    private $email, $username, $password;
    private $creado, $modificado;
    private $rol;

    public const SQL_SELECT_ALUMNOS = "SELECT * FROM usuario WHERE rol = 2";
    public const SQL_SELECT_ALUMNO_BY_ID = "SELECT * FROM usuario WHERE id=?";
    public const SQL_UPDATE_ALUMNO = "UPDATE usuario SET nombre=?, apellidos=?, email=?, username=?, password=? WHERE id=?";
    public const SQL_DELETE_ALUMNO = "DELETE FROM usuario WHERE id=?";
    public const SQL_INSERT_ALUMNO = "INSERT INTO usuario(nombre, apellidos, email, username, password) VALUES(?,?,?,?,?)";
    public const SQL_SELECT_LOGIN_USUARIO = "SELECT * FROM usuario WHERE username=? AND password=? AND rol=1";

    public function __get($nombre) {
        switch($nombre) {
            case 'id': return $this->id;
            case 'nombre': return $this->nombre;
            case 'apellidos': return $this->apellidos;
            case 'email': return $this->email;
            case 'username': return $this->username;
            case 'password': return $this->password;
            case 'creado': return $this->creado;
            case 'modificado': return $this->modificado;
            case 'rol': return $this->rol;
            default: return null;
        }
    }

    public function __set($nombre, $valor) {
        switch($nombre) {
            case 'id': $this->id = (int) $valor; break;
            case 'nombre': $this->nombre = $valor; break;
            case 'apellidos': $this->apellidos = $valor; break;
            case 'email': $this->email = $valor; break;
            case 'username': $this->username = $valor; break;
            case 'password': $this->password = $valor; break;
            case 'creado': $this->creado = $valor; break;
            case 'modificado': $this->modificado = $valor; break;
            case 'rol': $this->rol = $valor; break;
            
        }
    }

    public function __toString(): String {
        return "USUARIO: $this->id | $this->nombre $this->apellidos | $this->email";
    }

}
?>
