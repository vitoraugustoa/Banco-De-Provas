<?php 

require_once "../model/DataBase.php";
require_once "../model/Usuario.php";

$obj = new Usuario();

$resposta = $obj->getAllUsuarios();

 ?>