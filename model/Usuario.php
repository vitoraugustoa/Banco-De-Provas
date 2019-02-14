<?php
require_once("../config/parametros.php");
require_once("DataBase.php");

class Usuario
{
    public $idUsuario;
    public $Email;
    public $Senha;
    public $Nome;


    function getAllUsuarios()
    {
        $SqlQuery = "CALL spSelecteUsuario()";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
              return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }


    function getUsuarioById($id)
    {
        $SqlQuery = "call spSelecteUsuarioId('$id')";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function cadastrarUsuario($Nome, $Email, $Senha)
    {
        $SqlQuery = "CALL spInsereUsuario('$Nome','$Email','$Senha')";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        return $resultado;
    }


    function deleteUsuario($id)
    {
        $SqlQuery = "call spDeleteUsuario('$id')";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        return $resultado;
    }


    function updateUsuario($id, $Nome, $Email, $Senha)
    {
        $SqlQuery = "call spUpdateUsuario('$id','$Email','$Senha','$Nome');";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
     
        return $resultado;
    
    }

    
  function getUsuarioByUser($User)
    {
        $SqlQuery = "call spSelecteUsuarioUser('$User')";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            echo "Deu ruim";
            return null;
        }
    }




}

?>