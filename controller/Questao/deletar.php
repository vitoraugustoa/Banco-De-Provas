<?php

require_once "../model/DataBase.php";
require_once "../model/Questoes.php";

$obj = new Questoes();

$id = $_POST[''];

$resposta = $obj -> deleteQuestao($id);

?>