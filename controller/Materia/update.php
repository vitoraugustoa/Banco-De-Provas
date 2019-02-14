<?php 


require_once "../model/DataBase.php";
require_once "../model/Materia.php";

$obj = new Materia();
// adicionar as referencias do campo dos formulario
$cod = $_POST[''];
$nome = $_POST[''];

$resposta = $obj->updateMateria($cod, $nome);

?>