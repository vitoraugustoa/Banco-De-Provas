<?php
class CadernoProva
{
  public $Id:
  public $IdProva;
  public $IdCurso;
  public $IdUsuario;
  public $IdQuestao;

    function getAllCadernoProva()
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

  function getCadernoProvaByIdUsuario()
    {
        $SqlQuery = "CALL spSelecteCadernoProvaIdUsuario(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function getCadernoProvaById($id)
    {
        $SqlQuery = "CALL spSelecteCadernoProvaId(`$id`) ";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

         
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function cadastrarCadernoProva($IdProva, $IdCurso, $IdUsuario, $IdQuestao)
    {
        $SqlQuery = "CALL spInsereCadernoProva(`$IdProva`,`$IdCurso`, `$IdUsuario`, ´$IdQuestao´)";
        $SqlQuery ="CALL spDeleteRascunhoId(`$IdProva`)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        ECHO $resultado;
    }


    function deleteCadernoProva($id)
    {
        $SqlQuery = "CALL spDeleteProva(`$id`)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

     echo $resultado;
    }


    function updateCadernoProva($Nivel, $Situacao, $Valor, $idQuestao, $idUsuario, $idMateria, $idTag, $idCurso)
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