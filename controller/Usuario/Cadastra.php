<?php 

require_once "../model/DataBase.php";
require_once "../model/Usuario.php";

$obj = new Usuario();

$nome  = $_POST[''];
$email = $_POST[''];
$senha = $_POST[''];

$resposta = $obj->cadastrarUsuario($nome, $email, $senha);

 ?>