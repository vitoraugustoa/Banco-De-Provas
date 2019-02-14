<?php
class Curso
{
    public $idCurso;
    public $Nome;
    public $idMateria;

    function getAllMateria()
    {
       $SqlQuery = "";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        echo $resultado;
    }

    function getMateriaById($id)
    {
        $SqlQuery = "";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        echo $resultado;
       
    }

    function cadastrarMateria($Nome, $idCurso)
    {
      $SqlQuery = "CALL spInsereMaterias ({$Nome},{$idCurso})";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        echo $resultado;
    }

    function deleteMateria($id)
    {
        $SqlQuery = "Call spDeleteMateria({$id})";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        echo $resultado;
    }

    function updateMateria($id, $Nome)
    {
      $SqlQuery = "";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);
        echo $resultado;
    }
}

?>