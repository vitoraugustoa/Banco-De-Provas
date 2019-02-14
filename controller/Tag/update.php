<?php 

require_once "../model/DataBase.php";
require_once "../model/Tag.php";

$obj = new Tag();
// adicionar as referencias do campo dos formulario
$cod = $_POST[''];
$nome = $_POST[''];

$resposta = $obj->updateTag($cod, $nome);

?>