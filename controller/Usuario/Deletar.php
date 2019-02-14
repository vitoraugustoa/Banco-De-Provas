<?php 

require_once "../model/DataBase.php";
require_once "../model/Usuario.php";

$obj = new Usuario();

$id  = $_POST[''];

$resposta = $obj->deleteUsuario($id);

 ?>