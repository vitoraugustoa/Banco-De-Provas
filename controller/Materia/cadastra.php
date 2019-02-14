<?php 

require_once "../model/DataBase.php";
require_once "../model/Materia.php";

$obj = new Materia();

$nome    = $_POST[''];
$idCurso = $_POST[''];


$resposta = $obj->cadastrarMateria($nome, $idCurso);

 ?>