<?php 

require_once "../model/DataBase.php";
require_once "../model/Tag.php";

$obj = new Tag();

$nome = $_POST[''];

$resposta = $obj->cadastraTag($nome);

 ?>