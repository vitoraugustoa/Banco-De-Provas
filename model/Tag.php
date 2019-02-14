<?php
class Tag
{
    public $idTag;
    public $Nome;

    function getAllTags()
    {
        $SqlQuery = "call spSelecteTag()";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function getTagById($id)
    {
        $SqlQuery = "CALL spSelecteTagId{`$id`)";
        $resultado = DataBase::conecta(IP, tag, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            
            return $resultado;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function updateTag($id, $Nome)
    {
        $SqlQuery = "CALL spupadateTag(`$id`,`$Nome`)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

      echo $resultado
    }

    function deleteTag($id)
    {
        $SqlQuery = "call spDeleteTag($id)";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        echo $resultado;
    }

    function cadastraTag($Nome)
    {
        $SqlQuery = "CALL spInsereTags($Nome)";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

       echo $resultado;
    }

}

?>