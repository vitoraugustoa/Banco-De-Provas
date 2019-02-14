<?php
class Curso
{
    public $idCurso;
    public $Nome;

    function getAllCursos()
    {
        $SqlQuery = "SELECT * FROM `curso`";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            $lstCursos = array();
            while ($itemCurso = mysql_fetch_array($resultado)) {
                $curso = new Curso();
                $curso->idCurso = $itemCurso[''];
                $curso->Nome = $itemCurso[''];
                array_push($lstCursos, $curso);
            }
            echo "Buscados";
            return $lstCursos;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function getCursoById($id)
    {
        $SqlQuery = "SELECT * FROM curso WHERE IdCurso = {$id}";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

            while ($itemCurso = mysql_fetch_array($resultado)) {
                $curso = new Curso();
                $curso->idCurso = $itemCurso[''];
                $curso->Nome = $itemCurso[''];
            }
            echo "Buscado";
            return $user;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function cadastrarCurso($Nome)
    {
        $SqlQuery = "CALL spInsereCurso({$Nome})";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

       ECHO $resultado;
    }

    function deleteCurso($id)
    {
        $SqlQuery = "DELETE FROM curso WHERE IdCurso = {$id}";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            echo "Cadastrado";
            return true;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function updateCurso($id, $Nome)
    {
        $SqlQuery = "UPDATE curso SET nome = $Nome WHERE $id";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            echo "Cadastrado";
            return true;
        } else {
            echo "Deu ruim";
            return false;
        }
    }
}

?>