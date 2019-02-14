<?php
class Prova
{
    public $idProva;
    public $Nivel;
    public $Situacao;
    public $Valor;
    public $idQuestao;
    public $idUsuario;
    public $idMateria;
    public $idTag;
    public $idCurso;


    function getAllProvas()
    {
        $SqlQuery = "call spSelecteProva()";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
          
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }


function getProvaByCurso($id)
    {
        $SqlQuery = "CALL spSelecteProvaCurso(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

function getProvaByTag($id)
    {
        $SqlQuery = "CALL spSelecteProvaTag(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

  function getProvaByMateria($id)
    {
        $SqlQuery = "CALL spSelecteProvaMateria(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }  

  function getProvaByIdUsuario($id)
    {
        $SqlQuery = "CALL spSelecteProvaIdUsuario(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function getProvaById($id)
    {
        $SqlQuery = "CALL spSelecteProvaId(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function cadastrarProva($Nivel, $Situacao, $Valor,  $idUsuario, $idMateria, $idTag, $idCurso)
    {
        $SqlQuery = "CALL spInsereProva(`$Nivel`,`$Situacao`, `$Valor`,  `$idUsuario`, `$idMateria`, `$idTag`, `$idCurso`)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        ECHO $resultado;
    }


    function deleteProva($id)
    {
        $SqlQuery = "CALL spDeleteProva(`$id`)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

     echo $resultado;
    }


    function updateProva($Nivel, $Situacao, $Valor, $idQuestao, $idUsuario, $idMateria, $idTag, $idCurso)
    {
        $SqlQuery = "UPDATE `prova` 
        SET `IdProva`=[value-1],`nivel`=[value-2],`situacao`=[value-3],`valor`=[value-4],`IdQuestao`=[value-5],`IdUsuario`=[value-6],`IdMateria`=[value-7],`IdTag`=[value-8],`IdCurso_1`=[value-9] 
        WHERE IdProva = {$id} ";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            echo "Atualizado";
            return true;
        } else {
            echo "Deu ruim";
            return false;
        }
    }
}

?>