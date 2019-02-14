<?php 

require_once "../model/DataBase.php";
require_once "../model/Materia.php";

$obj = new Materia();

$id  = $_POST[''];

$resposta = $obj-> deleteMateria($id);

 ?>