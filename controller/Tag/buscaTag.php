<?php 

require_once "../model/DataBase.php";
require_once "../model/Tag.php";

$obj = new Tag();

$resposta = $obj->getAllTags();

?>