<?php
class Rascunho
{
    public $idTag;
    public $Nome;

    function getAllRascunho()
    {
        $SqlQuery = "call spSelecteRascunho()";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function getRascunhoById($id)
    {
        $SqlQuery = "CALL spSelecteRascunhoId{`$id`)";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function updateRascunho($id, $Nome)
    {
        $SqlQuery = "CALL spupadateTag(`$id`,`$Nome`)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

      echo $resultado
    }

    function deleteRascunho($id)
    {
        $SqlQuery = "call spDeleteRascunho($id)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        echo $resultado;
    }

    function cadastraRascunho($Idprova, $IdUsuario, $IdQuestao)
    {
        $SqlQuery = "CALL spInsereRascunho($IdUsuario,$Idprova, $IdQuestao)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

       echo $resultado;
    }

}

function getRascunhoByIdUsuario($id)
    {
        $SqlQuery = "CALL spSelecteRascunhoUsuario{`$id`)";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }
    
    function getRascunhoByIdProva($id)
    {
        $SqlQuery = "CALL spSelecteRascunhoProva{`$id`)";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

 function deleteRascunho($id)
    {
        $SqlQuery = "call spDeleteRascunho($id)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        echo $resultado;
    }

    function cadastraRascunho($Idprova, $IdUsuario, $IdQuestao)
    {
        $SqlQuery = "CALL spInsereRascunho($IdUsuario,$Idprova, $IdQuestao)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

       echo $resultado;
    }

 function deleteRascunhoIdProva($id)
    {
        $SqlQuery = "call spDeleteRascunhoProva($id)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        echo $resultado;
    }

    function cadastraRascunho($Idprova, $IdUsuario, $IdQuestao)
    {
        $SqlQuery = "CALL spInsereRascunho($IdUsuario,$Idprova, $IdQuestao)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

       echo $resultado;
    }

}
}
?>