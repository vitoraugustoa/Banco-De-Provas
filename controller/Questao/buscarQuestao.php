<?php

require_once "../model/DataBase.php";
require_once "../model/Questoes.php";

$obj = new Questoes();

$resposta = $obj -> getAllQuestoes();

?>